<html>
<head>
    <title>Pessoas</title>
    <style type="text/css">
        *{
            margin: 0;
            padding: 0;
        }
        table{
            border: 1px solid gray;
            padding: 1em
        }
        td{
            border: 1px solid lightgray;
            font-size: 1em;
            padding: 5px
        }
        button{
            padding: 5px
        }
    </style>
</head>
<body>
    
	<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8"/>
				<link rel="stylesheet" type="text/css" href="css.css"/>
	</head>
	<body>
		<div class="container">
			<section>
			<?php 
        //Área de notificações

        //Se existe a variável remocao, então
        if( isset($_GET['remocao'])){
            //Se remoção tem true, os dados foram removidos
            if( $_GET['remocao'] == "true" ){
                echo "<p>Os dados foram removidos.</p>";            
            }else{
                echo "<p>Não foi possivel remover os dados.</p>";
            }
        } 
        //Se existe a variável alteração, então
        if( isset($_GET['alteracao']) ){
            //Se alteracao tem true, os dados foram alterados
            if( $_GET['alteracao'] == "true" ){
                echo "<p>Os dados foram alterados.</p>";            
            }else{
                echo "<p>Não foi possivel alterar os dados.</p>";
            }
        } 
    ?>
    <table>
        <caption>Pessoas</caption>
        <tr>codigo</td><td>Nome</td><td>Email</td><td>Editar</td><td>Apagar</td></tr>
        <?php 
            //Estabelece a conexao com o mysql
            $hostname = "localhost";
            $user = "root";
            $password = "";
            $database = "cadastrosite";
            $conexao = mysqli_connect($hostname,$user,$password,$database);
            if( !$conexao ){
                echo "Ops.. Erro na conexão.";
                exit;
            }
            //Carrega os dados
            $sql = "SELECT * FROM usuarios";
            $consulta = mysqli_query($conexao, $sql);
            if( !$consulta ){
                echo "Erro ao realizar consulta. Tente outra vez.";
                exit;
            }
            //se tudo deu certo, exibe os dados
            while( $dados = mysqli_fetch_assoc($consulta) ){
                echo "<tr>";
                echo "<td>" .$dados['codigo']. "</td>";
                echo "<td>" .$dados['nome']. "</td>";
                echo "<td>" .$dados['email']. "</td>";

				
                
                // Cria um formulário para enviar os dados para a página de edição 
                // Colocamos os dados dentro input hidden
                echo "<td>";
                echo "<form action='edita.php' method='post'>";
                echo "<input name='codigo' type='hidden' value='" .$dados['codigo']. "'>";
                echo "<input name='nome' type='hidden' value='" .$dados['nome']. "'>";
                echo "<input name='email' type='hidden' value='" .$dados['email']. "'>";
		
		
                echo "<button>Editar</button>";
                echo "</form>";
                echo "</td>";
                
                // Cria um formulário para remover os dados 
                // Colocamos o id dos dados a serem removidos dentro do input hidden
                echo "<td>";
                echo "<form action='remove.php' method='post'>";
                echo "<input name='codigo' type='hidden' value='" .$dados['codigo']. "'>";
                echo "<button>Remover</button>";
                echo "</form>";
                echo "</td>";
                echo "</tr>";
            }
        ?>
			</section>
		</div>
	</body>
</html>
    
        
    </table>
</body>
</html>