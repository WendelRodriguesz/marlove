<?php
    session_start();
    if($_SESSION['login']=='logado'){
    
        include_once '../conexao.php';

        if($_GET){
            $usu = $_GET['usu'];
            if($usu == "true"){
?>
                <script>alert('usuario criado com sucesso')</script>
            <?php
            }else if($usu == "false"){
            ?>
                <script>alert('As senhas estão diferentes')</script>
            <?php
            }else if($usu =="existente"){
            ?>
                <script>alert('Este usuário já existe')</script>
            <?php
                }else if($usu =="vazio"){
            ?>
                <script>alert('Campos vazios')</script>
            <?php
                }
        }
            ?>
            
        

        <html>
            <head>
                <link rel="stylesheet" href="css/bootstrap.css">
                <script src="js/js.js"></script>
                
            </head>
            <body>
                <div class="row">
                    <div class="col-md-12 bg-info border-bottom border-dark">
                        <h1>CRIAÇÃO DE USUÁRIO</h1><br>

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
                </div>
                <div class="row bg-info">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">

                        <div class="row bg-info">
                            <div class="col-md-1"></div>
                            <div class="col-md-10">
                                
                               <form method='POST' action="cria.php">
                                    <label>Usuario:</label><br>
                                    <input class="form-control" style="width: 100%;" type="text" id="novoUsuario" name="novoUsuario"><br>
                                    <label>Senha</label><br>
                                    <input class="form-control" style="width: 100%;" type="password" id="senha" name="senha"><br>
                                    <label>Confirme sua senha:</label><br>
                                    <input type="password" class="form-control" style="width: 100%;" id="confirmSenha" name="confirmSenha"><br>
                                    
                                    <center><input type="submit" class="btn btn-success" style="width: 20%;" value="Criar" name="criar" id="criar"></center><br><br>
                               </form>
                            </div>
                        </div>
                    </div>
                </div>
            </body>
        </html>
<?php
    }else{
        header('Location: login.php');
    }
?>
