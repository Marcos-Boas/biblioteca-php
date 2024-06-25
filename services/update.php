<?php
include "connection.php";

$pdo = connection();

if(isset($_POST) && !empty($_POST)) {

  $id = trim($_POST['id']);
  $favorito = trim($_POST['favorito']);
  
  $query = "UPDATE cards SET favorito = '$favorito' WHERE id = '$id'";
  
  try {
    $pdo->exec($query);
  } catch (PDOException $e) {
    echo "Erro ao definir um favorito: " . $e->getMessage();
  }
  
  echo "Favorito atualizado !";
}