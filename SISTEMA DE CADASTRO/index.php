<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sistema de Cadastro</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class="text-center">Sistema de Cadastro</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 max-auto">
				<?php
				require_once 'model.php';
				$model = new Model();
				$insert = $model->insert();
				?>

				<form action="" method="post">
					<div class="form-group">
						<label for="">Name:</label>
						<input type="text" name="name" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="">E-mail:</label>
						<input type="email" name="email" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="">Whatsapp:</label>
						<input type="tel" name="whats" class="form-control" pattern="(\([0-9]{2}\))\s([9]{1})?([0-9]{4})-([0-9]{4})" placeholder="Formato do telefone: (99) 99999-9999" required>
					</div>
					<div class="form-group">
						<label for="">Endereço</label>
						<textarea name="address" class="form-control" rows="3"></textarea>
					</div>
					<div class="form-group">
						<button type="submit" name="submit" class="btn btn-primary">Cadastrar</button>
						<button type="reset" class="btn btn-primary">Limpar Formulário</button>
						<a href="list.php" class="btn btn-primary">Lista</a>		
					</div>
				</form>
			</div>
		</div>


	</div>
	
</body>
</html>