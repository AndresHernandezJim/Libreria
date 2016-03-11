<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title align="center">Librería</title>
	<link rel="stylesheet" type="text/css" href="assets/css-boot/bootstrap.min.css">
	
</head>
<body>
		<div align="center"><h1>Librería</h1></div>
		
		<div>
			<form action="/form" method="POST">
				<table align="center">
				<tr>
					<td><label>Nombre</label></td>
					<td><input type="text" name="nombre"	><br></td>
				</tr>
				<tr>
					<td><label>nick</label></td>
					<td><input type="text" name="nick"></input></td>
				</tr>
				<tr>
					<td><label>Email</label></td>
					<td><input type="email" name="email"></td>
				</tr>
				<tr>
					<td><label>Contraseña</label></td>
					<td><input type="password" name="password"></input><br></td>
				</tr>
				<tr>
					<td><label >Telefono</label></td>
					<td><input type="text" name="telefono"></input><br></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" class="btn btn-primary btn-success btn-block" value="enviar" ></td>
				</tr>
			</table>

			</form>	
		</div>
</body>
</html>