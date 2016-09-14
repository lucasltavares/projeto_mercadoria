<?php  
include("conexao.php");
	
	function Insere($conn,$nome,$codigo,$tipop,$quantidade,$preco,$tipon){
		$query = "insert into produto(nm_produto,cd_produto,cd_tipo_produto,qt_produto,pr_produto,cd_tipo_negocio) values ('$nome','$codigo','$tipop','$quantidade','$preco','$tipon')";
		return mysqli_query($conn,$query);
	}

	function Lista($conn){
		$produtos = array();
		$query = "select * from produto";
		$result = mysqli_query($conn,$query);

		while($produto = mysqli_fetch_assoc($result)){
			array_push($produtos,$produto);
		}
		return $produtos;
	}

	function Remove($conn,$id){
		$query = "delete from produto where id_produto = '$id';";
		return mysqli_query($conn,$query);
	}

	function Altera($conn,$id,$nome,$codigo,$tipop,$quantidade,$preco,$tipon){
		$query = "update produto set nm_produto = '$nome', cd_produto = '$codigo', cd_tipo_produto = '$tipop', qt_produto = '$quantidade', pr_produto = '$preco',cd_tipo_negocio = '$tipon' where id_produto = '$id'";
		return mysqli_query($conn,$query);
	}