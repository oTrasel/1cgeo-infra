<?php
ini_set('default_charset','UTF-8');
include('layout.php');



$query = "select * from usuario;";

$result = $conexao->query($query);
$row = $result->fetch_object();


?>


<?php 

while($linha = mysqli_fetch_array($result)){

 echo "<br><br><tr><td>id: </td></tr>";
 echo "<td>".$linha["usuario_id"]."</td>";


 echo "<br><tr><td>Usuario: </td>";
 echo "<td>".$linha["usuario"]."</td>";

 echo "<br><tr><td>Nome: </td>";
 echo "<td>".$linha["nome"]."</td></tr>";

 echo "<br><tr><td>Tipo de Usuário: </td>";
 echo "<td>".$linha["tp_user"]."</td></tr>";

 echo "<br><tr><td>Data do cadastro: </td>";
 echo "<td>".$linha["data_cadastro"]."</td></tr>";

}
?><br><br>



<form action="deletar.php" method="POST">
	<label for="teste">Excluir Usuario:</label>
	<select name="deletar">

		<option value="selecione">Selecione</option>
        <?php
						$query = "select usuario_id, nome from usuario;";

						$result = $conexao->query($query);
						$roll = $result->fetch_object();

						while($roll = mysqli_fetch_assoc($result)){ ?>
							<option value="<?php echo $roll['usuario_id']; ?>"> <?php echo $roll['nome']; ?> </option> <?php
						}
					?>
	</select>
<br>

					 <?php
                    if(isset($_SESSION['status_exclusao'])):
                    ?><br>
                    <div class="sucesso">
                      <p>Usuario Excluido com Sucesso</p>
                    </div>
                    <?php
                    	endif;
                    ?>
<br><br><a href="#">  <button type="submit" class="button is-block is-link is-large is-fullwidth">Excluir</button></a><br><br>
</form>
                                
		
<br><a href="cadastro.php"> <button type="submit" class="button is-block is-link is-large is-fullwidth">Voltar</button></a>
		
	






