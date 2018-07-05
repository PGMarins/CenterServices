<html>
<head>
    <title>Editar</title>
    <style type="text/css">
        input{
            display: block;
            margin-bottom: 1em;
            padding: 5px
        }
    </style>
</head>
    <body>
	<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title> Sistema de Cadastro Básico </title>
		<meta charset="UTF-8"/>
				<link rel="stylesheet" type="text/css" href="css.css"/>
	</head>
	<body>
		<div class="container">
			<nav>
				<ul class="menu">
					<a href="index.php"><li>Cadastro</li></a>
					<a href="consulta.php"><li>Consultas</li></a>
					<a href="exibe.php"><li>Exibe</li></a>
				</ul>
			</nav>
			<section>
			<?php 
            //Recebe os dados a serem editados
            $codigo = filter_input(INPUT_POST, 'codigo');
            $nome = filter_input(INPUT_POST, 'nome');
            $email = filter_input(INPUT_POST, 'email');
			$profissao = filter_input(INPUT_POST, 'profissao');
        ?>
        <h2>Alteração de dados</h2>
        <form action="salva.php" method="post">
            <!-- Jogamos os valores a serem editados dentro dos inputs no campo value -->
            <input type="hidden" name="codigo" value="<?php echo $codigo; ?>">
            <input type="text" name="nome" value="<?php echo $nome; ?>">
            <input type="email" name="email" value="<?php echo $email; ?>">
			<input type="text" name="profissao" value="<?php echo $profissao; ?>">
            <input type="submit" value="Salvar alterações">
        </form>
			</section>
		</div>
	</body>
</html>
        
    </body>
</html>