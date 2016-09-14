<?php include("header.php"); ?>
	<!-- Cabeçalho do formulário de cadastro -->
	<div class="page-header cabecalho">
      <h2><span class="glyphicon glyphicon-list-alt"></span> Formulário de cadastro <small>Produto</small></h2>
    </div>

    <!-- Formulário -->
    <form action="insere.php" method="post" name="form">
  <div class="form-group">
    <label for="exampleInputEmail1">Nome do produto</label>
    <input type="text" class="form-control" name="nome" placeholder="nome">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Código do produto</label>
    <input type="number" class="form-control" name="cdproduto" placeholder="Código do produto">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Tipo do produto: </label>
    <select name="tipop">
    	<option value="1">Eletrônicos</option>
    	<option value="2">Veículos</option>
    	<option value="3">Imóvel</option>
    	<option value="4">Ferramentas</option>
    </select>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Quantidade</label>
    <input type="number" class="form-control" name="quantidade" placeholder="quantidade">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Preço do produto</label>
    <input type="number" class="form-control" name="preco" placeholder="Preço">
  </div>

  <div class="form-group">
  <input type="radio" name="tipon" value="1"> Compra<br>
  <input type="radio" name="tipon" value="2"> Venda<br>
  </div>

  
  <input type="submit" name="button" id="button" onclick="return validaFormRegistro()" value="Cadastrar" class="btn btn-default" />
</form>

<script type="text/javascript" src="js/valida-registro.js"></script>
<?php include("footer.php"); ?>