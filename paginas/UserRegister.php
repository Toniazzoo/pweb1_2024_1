<?php

  include "./aula03_funcao.php";
  include "../db.class.php";

  head();

  $db = new db();
  $db->conn();

  if(!empty($_POST['id'])){
    //var_dump($_POST);

    $db->update([
      'nome'=>$_POST['nome'],
      'telefone'=>$_POST['telefone'],
      'cpf'=>$_POST['cpf'],
      'id'=>$_POST['id'],
    ]);
    header('location: AlunoList.php');
  }

  else if(!empty($_POST)){
    //var_dump($_POST);

    $db->insert([
      'nome'=>$_POST['nome'],
      'telefone'=>$_POST['telefone'],
      'cpf'=>$_POST['cpf'],
    ]);
    header('location: AlunoList.php');
  }


  if(!empty($_GET['id'])){
    $data = $db->find($_GET['id']);
    //var_dump($data);
    //exit;
  }
?>

<div class="col">

  <form action="UserRegister.php" method="post">

    <h3>Registrar Aluno</h3>
    
    <div class="mb-3">
      <input 
        type="hidden"  
        name="id" >
      <label for="nome" class="form-label">Nome</label>
      <input 
        type="text" 
        class="form-control" 
        name="nome"  
        placeholder="Nome">
    </div>

    <div class="mb-3">
      <label for="cpf" class="form-label">CPF</label>
      <input 
        type="text" 
        class="form-control" 
        name="cpf" 
        placeholder="888.888.888-88">
    </div>

    <div class="mb-3">
      <label for="senha" class="form-label">Senha</label>
      <input 
        type="password" 
        class="form-control" 
        name="senha"
        placeholder="*********">
    </div>

    <button type="submit" class="btn btn-success">Salvar</button>
    <a class="btn btn-primary" href="./AlunoList.php">Voltar</a>

  </form>
</div>


<?php
  footer();
?>