<?php
include "connection.php";

$pdo = connection();

$query = "SELECT * FROM cards";

$res = $pdo->query($query);

$conteudo = $res->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($conteudo);