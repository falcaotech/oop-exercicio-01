<?php

	//Inclui a classe Cliente.php
	require_once 'Cliente.php';
	$clientes = [
		new Cliente('1','Pedro Arthur', '98909878976', 'Rua da lagoa', 'Curitiba', 'PR'),
		new Cliente('2','Mario Arthur', '89809876789', 'Rua da lapa', 'Curitiba', 'PR'),
		new Cliente('3','José Arthur', '78709878765', 'Rua Saldanha', 'Curitiba', 'PR'),
		new Cliente('4','Euler Arthur', '56565489098', 'Rua Alencar', 'Curitiba', 'PR'),
		new Cliente('5','Antonio Arthur', '67682367898', 'Rua dos patos', 'Curitiba', 'PR'),
		new Cliente('6','André Arthur', '89876743245', 'Rua Ana Berta', 'Curitiba', 'PR'),
		new Cliente('7','Gino Arthur', '09876543243', 'Rua Angelo Sampaio', 'Curitiba', 'PR'),
		new Cliente('8','Heitor Arthur', '56789098765', 'Rua Aristides Lemos', 'Curitiba', 'PR'),
		new Cliente('9','Leandro Arthur', '12345678909', 'Rua Zé de Abreu', 'Curitiba', 'PR'),
		new Cliente('10','Emanuel Arthur', '09876768543', 'Rua dos Canos', 'Curitiba', 'PR'),
	];

	//Verifica se ordem foi passado e ordena o resultado
	if (isset($_GET['ordem']) && $_GET['ordem'] == 'desc')
		//Ordena o array do maior para o menor (Desc)
		rsort($clientes);
	else
		//Ordena o array do menor para o maior (ASC)
		sort($clientes);

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<meta charset="UTF-8">
	<title>Cadastro de Clientes</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h1>Clientes</h1>

				<table class="table table-bordered table-hover">
					<tr class="info">
						<th class="text-center">
						<?php if (isset($_GET['ordem']) && $_GET['ordem'] == 'desc'): ?>
						<a href="?ordem=asc"><span class="glyphicon glyphicon-sort-by-attributes-alt" aria-hidden="true"></span></a>
						<?php else :?>
						<a href="?ordem=desc"><span class="glyphicon glyphicon-sort-by-attributes" aria-hidden="true"></span></a>
						<?php endif ;?>

						</th>
						<th>Nome</th>
						<th>CPF</th>
						<th>Endereço</th>
						<th>Cidade</th>
						<th>UF</th>
					</tr>
					<?php foreach ($clientes as $cliente) : ?>
						
					<tr data-toggle="modal" data-target="#cliente-<?php echo $cliente->id; ?>">
						<td class="text-center"><?php echo $cliente->id; ?></td>
						<td><?php echo $cliente->nome; ?></td>
						<td><?php echo $cliente->cpf; ?></td>
						<td><?php echo $cliente->endereco; ?></td>
						<td><?php echo $cliente->cidade; ?></td>
						<td><?php echo $cliente->uf; ?></td>
					</tr>

					<?php endforeach; ?>
				</table>
			</div>
		</div>
	</div>

<!-- Modal -->
<?php foreach ($clientes as $cliente) : ?>
<div class="modal fade" id="cliente-<?php echo $cliente->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Cliente detalhes</h4>
      </div>
      <div class="modal-body">
    	<p><strong>ID: </strong> <?php echo $cliente->id; ?></p>
    	<p><strong>Nome: </strong> <?php echo $cliente->nome; ?></p>
    	<p><strong>CPF: </strong> <?php echo $cliente->cpf; ?></p>
    	<p><strong>Endereço: </strong> <?php echo $cliente->endereco; ?></p>
    	<p><strong>Cidade/UF: </strong> <?php echo $cliente->cidade . "/" . $cliente->uf; ?></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>
<?php endforeach; ?>


	<!-- Latest compiled and minified JavaScript -->
	<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>