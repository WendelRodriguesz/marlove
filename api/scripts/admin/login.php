<?php



?>
<html>
    <head>
        <link rel="stylesheet" href="css/bootstrap.css">
        <script src="js/js.js"></script>
        <script src="js/js/jquery.js"></script>
        <link rel="stylesheet" href="css/css.css">
    </head>
    <body class='bg-info'>
        <div class="row">
            <div class="col-md-5"></div>
            <div class="col-md-2 bg-secondary" id='login'>
                <form method='POST' action="validaSessao.php">
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="text-center">LOGIN</h4><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <label>Usuario</label>
                            <input type="text" name="usuario" id="usuario">
                        </div><br>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <label>senha</label>
                            <input type="password" name="senha" id="senha">
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                            <input type="submit" value="entrar">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>