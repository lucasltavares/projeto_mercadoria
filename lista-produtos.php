<?php
include("funcoes-produto.php"); 
include("header.php"); ?>

<div class="container lista">

	<table class="table table-striped table bordered">
		<?php
		$produtos = Lista($conn); 
		foreach($produtos as $produto){ ?>
			<tr>
				<td><?php echo '<b>Nome: </b>'.$produto['nm_produto']; ?></td>
				<td><?php echo '<b>Preço:</b> '.$produto['pr_produto']; ?></td>
				<td><?php  if($produto['cd_tipo_negocio'] == 1){
					echo '<b>Tipo Negócio: Compra </b>';
				} else{
					echo '<b>Tipo Negócio: Venda</b>';
				}
				?>	
				</td>
				<td>
					<form action="remove-produto.php" method="post">
					<input type="hidden" name="id" value="<?= $produto['id_produto'] ?>">
					<button class="btn btn-danger">Remover</button>
					</form>
				</td>
				<td>
					<form action="form-altera.php" method="post">
					<input type="hidden" name="id" value="<?= $produto['id_produto'] ?>">
					<button class="btn btn-primary">Alterar</button>
					</form>
				</td>
			</tr>

		<?php	
		} ?>
	</table>
</div>

<?php
include("footer.php");
?>