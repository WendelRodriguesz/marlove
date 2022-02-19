function listar(){
    window.location.href = 'listar.php'
}

function artigos(){
    window.location.href = 'artigos.php'
}

function usuarios(){
    window.location.href = 'criarUsuario.php'
}

function listarSolic(COD){
     window.location.href = 'listarPorSolici.php?cod='+ COD;
}

function excluirSolic(COD){
    var resultado = confirm("Realmente deseja excluir a solicitação de");
    if(resultado == true && COD != 1){
        window.location.href = 'listar.php?cod='+ COD;
    }else{
        window.location.href = 'listar.php?';
    }
    
}
function sair(){
   window.location.href = 'listar.php?cod=1';
}

