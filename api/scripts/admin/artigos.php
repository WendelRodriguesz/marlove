<?php    
    session_start();
    if($_SESSION['login']=='logado'){
        
            include_once '../conexao.php';
?>
            <html>
                <head>
                <link rel="stylesheet" href="css/bootstrap.css">
                <script src="js/js.js"></script>
                </head>
                <body>
                    <div class='row'>
                        <div class='col-md-12 bg-info'>
                            <h1 class="text-center">POSTAR ARTIGOS</h1><br>

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

                
                </body>
            </html>
<?php
        }else{
             header('Location: login.php');
        }
?>