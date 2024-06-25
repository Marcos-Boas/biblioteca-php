<?php
include "connection.php";

$pdo = connection();

if(isset($_POST) && !empty($_POST)) {

    $id = trim($_POST['id']);
    
    $query = "DELETE FROM cards WHERE id = '$id'";
    
    try {
      $pdo->exec($query);
    } catch (PDOException $e) {
      echo "Erro ao excluir um livro: " . $e->getMessage();
    }
    
    echo "Livro excluído!";
  }