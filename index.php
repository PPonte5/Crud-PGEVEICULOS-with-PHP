<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
	<link rel="stylesheet" href="css\bootstrap.min.css">
	<link rel="stylesheet" href="js\bootstrap.min.js">
</head>
<body>
	<div class="row" class="justify-content-center">
		<form action="process.php" method="POST"></form>
		<div class="form-group">
			<label>Nome</label>
			<input type="text" name="name" class="form-control" value="Insira seu nome">
		</div>

		<div class="form-group"></div>
			<label>Localização</label>
			<input type="text" name="location" class="form-control" value="Insira sua localização">
		</div>	

		<div class="form-group"></div>		
			<button type="submit" class="btn btn-primary" name="save">Salvar</button>
		</div>
	</div>
</body>
</html>
