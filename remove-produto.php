<?php
include("funcoes-produto.php");

$id = $_POST['id'];

if(Remove($conn,$id)){
	header("Location: lista-produtos.php");
}else{
	echo mysqli_error($conn);
}