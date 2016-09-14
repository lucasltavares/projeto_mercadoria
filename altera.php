<?php
include("funcoes-produto.php");
    $id = $_POST['id'];
    $nome   = $_POST['nome'];
	$codigo = $_POST['cdproduto'];
	$tipop  = $_POST['tipop'];
	$quant  = $_POST['quantidade'];
	$preco  = $_POST['preco'];
	$tipon  = $_POST['tipon'];

if(Altera($conn,$id,$nome,$codigo,$tipop,$quant,$preco,$tipon)){
	header("Location: lista-produtos.php");
} else {
	echo mysqli_error($conn);
}