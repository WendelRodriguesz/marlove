    <?php
        session_start();
        if($_SESSION['login']=='logado'){
        
            include_once '../conexao.php';
            header("Refresh:30");
            $conn = new Database();  
            $conn = $conn->db_mysql();
                //query para listagem
            $sql = $conn->prepare(
                "SELECT * FROM cadastroadocao"
                );
            $sql->execute();  
            $a=$sql->fetchAll(\PDO::FETCH_ASSOC); 

                

                //query para exclusão
                if($_GET){
                
                    $cod = $_GET['cod'];

                    if($cod!=1){
                        $del = $conn->prepare(
                        "DELETE FROM cadastroadocao WHERE COD_INC = $cod"
                        );
                        $del->execute(); 
                        header('Location: listar.php')
                    
        ?>
        <script>alert("Solicitação deletada com sucesso");</script>
        <?php
                    }
                    if($cod == 1){
                        unset($_SESSION['login']);
                        header("Refresh:0");
                    }
                }
        ?>
<html>
    <head>
        <link rel="stylesheet" href="css/bootstrap.css">
        <script src="js/js.js"></script>
        <script src="js/js/jquery.js"></script>
        


    </head>
    <body>
        <div class='row'>
            <div class='col-md-12 bg-info'>
                <CENTER><h1>SOLICITAÇÕES DE ADOÇÃO</h1><br></CENTER>

                <div class="row">
                    <div class="col-md-11">
                         <input type="button" class='btn btn-ligth' id='listar' onclick="listar()" value="Solicitções de adoção">
                        <input type="button" class='btn btn-ligth' id='post' onclick="artigos()" value="Postar artigos">  
                        <input type="button" class='btn btn-ligth' id='criar' onclick="usuarios()" value="Criar usuário">
                    </div>

                    <div class="col-md-1">
                        <input type="button" class='btn btn-danger col-md-12' id='teste' onclick="sair()" value="sair">
                    </div>
                </div>
            </div>
        </div><br><br>
        <div class='container'>
            
            
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">NOME</th>
                            <th scope="col">DATA DE NASCIMENTO</th>
                            <th scope="col">ENDEREÇO</th>
                            <th scope="col">BAIRRO</th>
                            <th scope="col">CIDADE</th>
                            <th scope="col">NOME ANIMAL</th>
                            <th scope="col">FACEBOOK</th>
                            <th scope="col">INSTAGRAM</th>
                            <th scope="col">VIZUALIZAR</th>
                            <th scope="col">EXCLUIR</th>


                            
                        </tr>
                    </thead>
                    <tbody>
                        
                        <?php
                            //lista todas as solicitações
                            foreach ($a as $value) {
                        ?>        
                                <tr>
                                    <td><?=$value['NOME']?></td>
                                    <td><?=$value['DT_NASCIMENTO']?></td>
                                    <td><?=$value['ENDERECO']?></td>
                                    <td><?=$value['BAIRRO']?></td>
                                    <td><?=$value['CIDADE']?></td>
                                    <td><?=$value['NOME_ANIMAL']?></td>
                                    <td><?=$value['FACEBOOK']?></td>
                                    <td><?=$value['INSTAGRAM']?></td>
                                    <td><button class="btn btn-success" onclick="listarSolic(<?=$value['COD_INC']?>)">vizualizar</button></td>
                                    <td><button class="btn btn-danger" onclick="excluirSolic(<?=$value['COD_INC']?>)">excluir</button></td>
                                   
                                </tr>
                                
                        <?php
                            }
                        ?>
                    
                </table>
            </div>
        </div>
    </body>
</html>
<?php
    }else{
        header('Location: login.php');
    }
?>