<?php
  include_once 'includes/header.php';
?>

<div class="row">
  <div class="col s12 m6 push-m3 ">
  	<h3 class="light">Novo Cliente</h3>
     <form action="php-action/create.php" method="POST">
       <div class="input-field col s12">
          <!--o "id" está atribuido para o adicionar o label e criar o efeito no nome-->
          <input type="text" name="nome" id="nome">
          <label for="nome">Nome</label>
        </div>

        <div class="input-field col s12">
          <input type="text" name="sobrenome" id="sobrenome">
          <label for="sobrenome">Sobrenome</label>
        </div>

        <div class="input-field col s12">
          <input type="text" name="email" id="email">
          <label for="email">Email</label>
        </div>

        <div class="input-field col s12">
          <input type="text" name="idade" id="idade">
          <label for="idade">Idade</label>
        </div>

        <button type="submit" name="btn-cadastrar" class="btn">Cadastras</button>
        <a href="index.php" type="submit" class="btn green">Lista de clientes</a>

     </form>

  		
</div>

<?php
  include_once 'includes/footer.php';
?>      