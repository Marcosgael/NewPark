<?PHP include('PHP/protect.php'); if(!isset($_SESSION)){session_start();}?>
<!DOCTYPE html>
<html>
<head>
	<title>Minhas Reservas</title>
	<style type="text/css">
		table {
			border-collapse: collapse;
			width: 100%;
		}
		th, td {
			text-align: left;
			padding: 8px;
		}
		tr:nth-child(even){background-color: #f2f2f2}
		th {
			background-color: #4CAF50;
			color: white;
		}
	</style>
</head>
<body>
	<h1>Minhas Reservas</h1>
	<?PHP 
	include('PHP/pesquisar_historico_reserva.php'); ?>
</body>
</html>