<?php
		include_once("PHP/conexao.php");
		if(!isset($_SESSION)){session_start();}
		$sql = "SELECT * FROM Reserva WHERE id_usuario = ?";
		$stmt = mysqli_prepare($conexao, $sql);
		mysqli_stmt_bind_param($stmt, "i", $_SESSION['id_usuario']);
		mysqli_stmt_execute($stmt);
		$reservas = mysqli_stmt_get_result($stmt);
		if(mysqli_num_rows($reservas) > 0) {
			echo "<table>";
			echo "<tr><th>ID</th><th>Data de Criação</th><th>Data de Início</th><th>Data de Fim</th><th>Preço</th><th>ID do Estacionamento</th><th>ID do Carro</th></tr>";
			while($reserva = mysqli_fetch_array($reservas)) {
				echo "<tr>";
				echo "<td>".$reserva['id_reserva']."</td>";
				echo "<td>".$reserva['data_criacao']."</td>";
				echo "<td>".$reserva['data_inicio']."</td>";
				echo "<td>".$reserva['data_fim']."</td>";
				echo "<td>".$reserva['preco']."</td>";
				echo "<td>".$reserva['id_estacionamento']."</td>";
				echo "<td>".$reserva['id_carro']."</td>";
				echo "</tr>";
			}
			echo "</table>";
		} else {
			echo "Você não tem reservas.";
		}
		mysqli_close($conexao); 
	?>