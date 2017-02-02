<?php

require_once 'validacoes.php';
require_once 'inserirDados.php';

if($_POST) {
	$error = array();
	$dadosASeremInseridos = array();
	$validarNome = validarNome($_POST['nome']);

	if($validarNome) {
		$dadosASeremInseridos['nome'] = $_POST['nome'];
	} else {
		$error['nome'] = 'Nome nao e valido!';
	}

	$validarCelular = validarCelular($_POST['celular']);
	if($validarCelular) {
		$dadosASeremInseridos['celular'] = $_POST['celular'];
	} else {
		$error['celular'] = 'Celular nao e valido!';
	}

	//print_r($dadosASeremInseridos);
	//print_r($error);
}

?>

<html>
	<head>
		<title>Cadastro de pessoas</title>
		<style>
			* {
				padding: 0 auto;
				margin: 0 auto;
			}
			.box-warning {
				background: red;
				border-radius: 4px;
				width: 50%;
				color: #FFF;
				font-weight: bold;
				font-size: 2em;
				text-align: center;
			}
			.box-sucess {
				background: green;
				border-radius: 4px;
				width: 50%;
				color: #FFF;
				font-weight: bold;
				font-size: 2em;
				text-align: center;
			}		
			.box-warning > ul > li {
				list-style: none;
			}
		</style>
	</head>
	<body>
		<div class="box-warning">
			<?php if(count($error) > 0): ?>
				<ul>
					<?php foreach($error as $erro): ?>
						<li><?=$erro?></li>
					<?php endforeach; ?>
				</ul>
			<?php endif; ?>
		</div>
		<div class="box-sucess">
			<?php if(count($error) == 0): 
				inserirDados($_POST); 
			?>
				INSERIDO COM SUCESSO
			<?php endif; ?>
		</div>
	</body>
</html>