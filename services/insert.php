<?php
include "connection.php";

$pdo = connection();

if(isset($_POST) && !empty($_POST)) {

  $titulo = trim($_POST['titulo']);
  $descricao = trim($_POST['descricao']);
  $url = trim($_POST['url']);
  
  $query = "INSERT INTO cards (titulo, descricao, url, favorito) VALUES ('$titulo', '$descricao', '$url', 0)";
  
  try {
    $pdo->exec($query);
  } catch (PDOException $e) {
    echo "Erro ao cadastrar um livro: " . $e->getMessage();
  }
  
  echo "Livro cadastrado!";
}