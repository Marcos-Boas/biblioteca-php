<?php

function connection()
{
    $username = "root";
    $password = "";
    $db_name = "biblioteca_php";
    $host = "localhost";

  try {
    $pdo = new PDO("mysql:host=$host;dbname=$db_name;charset=utf8mb4", $username, $password);
  } catch (PDOException $e) {
    return "Erro com pdo" . $e->getMessage();
  } catch (Exception $e) {
    return "Erro:" . $e->getMessage();
  }

  return $pdo;
}


