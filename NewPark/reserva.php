<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Reserva de Estacionamento</title>
  </head>
  <body>
    <h1>Reserva de Estacionamento</h1>
    <form action="PHP/cadastrar_reserva.php" method="post">
      <label for="data_inicio">Data de Início:</label>
      <input type="datetime-local" id="data_inicio" name="data_inicio" required><br><br>
      
      <label for="data_fim">Data de Fim:</label>
      <input type="date" id="data_fim" name="data_fim" required><br><br>
      
      <label for="preco">Preço:</label>
      <input type="number" id="preco" name="preco" min="0" step="0.01" required><br><br>
      
	  <label for="id_estacionamento">ID do Estacionamento:</label>
		<select name="id_estacionamento">
			<?php
				include("PHP/conexao.php");

				$result_empresas = mysqli_query($conexao, "SELECT * FROM Estacionamento");

				while ($row_empresas = mysqli_fetch_array($result_empresas)) {
					echo '<option value="' . $row_empresas['id_estacionamento'] . '">' . $row_empresas['nome'] . '</option>';
				}
			?>
		</select>
		<br><br>
		<label for="id_carro">ID do Carro</label>
		<select name="id_carro">
			<?php
				include("PHP/conexao.php");

				$result_empresas = mysqli_query($conexao, "SELECT * FROM Carro");

				while ($row_empresas = mysqli_fetch_array($result_empresas)) {
					echo '<option value="' . $row_empresas['id_carro'] . '">' . $row_empresas['placa'] . '</option>';
				}
			?>
		</select>
		<br><br>
      <input type="submit" value="Reservar">
    </form>
  </body>
</html>


