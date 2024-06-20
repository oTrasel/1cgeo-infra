<?php
ini_set('default_charset', 'UTF-8');
include('layout.php');



$query = "select * from usuario;";

$result = $conexao->query($query);
$result = $result->fetch_all();


?>


<?php

foreach ($result as $row) {


	echo "<br><br><tr><td>id: </td></tr>";
	echo "<td>" . $row["0"] . "</td>";


	echo "<br><tr><td>Usuario: </td>";
	echo "<td>" . $row["1"] . "</td>";

	echo "<br><tr><td>Nome: </td>";
	echo "<td>" . $row["3"] . "</td></tr>";

	echo "<br><tr><td>Tipo de Usuário: </td>";
	echo "<td>" . $row["5"] . "</td></tr>";

	echo "<br><tr><td>Data do cadastro: </td>";
	echo "<td>" . $row["4"] . "</td></tr>";
}

?><br><br>



<form action="deletar.php" method="POST">
	<label for="teste">Excluir Usuario:</label>
	<select name="deletar">

		<option value="selecione">Selecione</option>
		<?php
		foreach ($result as $row) {
			echo "<option value=" . $row["0"] . ">" . $row["1"] . "</option>";
		}


		?>
	</select>
	<br>

	<?php
	if (isset($_SESSION['status_exclusao'])) :
	?><br>
		<div class="sucesso">
			<p>Usuario Excluido com Sucesso</p>
		</div>
	<?php
	endif;
	?>
	<br><br><a href="#"> <button type="submit" class="button is-block is-link is-large is-fullwidth">Excluir</button></a><br><br>
</form>


<br><a href="cadastro.php"> <button type="submit" class="button is-block is-link is-large is-fullwidth">Voltar</button></a>