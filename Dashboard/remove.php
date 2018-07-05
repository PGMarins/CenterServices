<?php 
    //recebe o id dos dados que serão apagados
    $codigo = filter_input(INPUT_POST, 'codigo');

    //estabelece a conexão
    $hostname = "localhost";
    $user = "root";
    $password = "";
    $database = "cadastro";
    $conexao = mysqli_connect($hostname,$user,$password,$database);
    if( !$conexao ){
        echo "Ops.. Erro na conexão.";
        exit;
    }
    //Executa a query
    $sql = "DELETE FROM usuarios WHERE codigo=".$codigo;
    $remove = mysqli_query($conexao, $sql);
    //Se falhou, redireciona pra exibe.php com remove igual a false 
    if( !$remove ){
        header("Location:exibe.php?remove=false");
        exit;
    }
    //se tudo deu certo, redireciona pra exibe.php com remove igual a true
    header("Location:exibe.php?remocao=true");
?>
