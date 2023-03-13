<?php
include 'conexao.php';

$sql = "SELECT r.id, e.nome, r.data_reserva, r.hora_reserva, r.placa_carro FROM reserva r JOIN estacionamento e ON r.id_estacionamento = e.id ORDER BY r.data_reserva DESC";

$resultado = mysqli_query($conexao, $sql);

if (mysqli_num_rows($resultado) > 0) {
	while ($linha = mysqli_fetch_assoc($resultado)) {
		echo "<tr>";
		echo "<td>" . $linha['id'] . "</td>";
		echo "<td>" . $linha['nome'] . "</td>";
		echo "<td>" . date('d/m/Y', strtotime($linha['data_reserva'])) . "</td>";
		echo "<td>" . $linha['hora_reserva'] . "</td>";
		echo "<td>" . $linha['placa_carro'] . "</td>";
		echo "</tr>";
	}
} else {
	echo "<tr><td colspan='5'>Nenhuma reserva encontrada.</td></tr>";
}

mysqli_close($conexao);
?>