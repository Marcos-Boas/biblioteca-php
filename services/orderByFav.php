<?php
include "connection.php";

$pdo = connection();

$query = "SELECT * FROM cards ORDER BY favorito desc";

$res = $pdo->query($query);

$conteudo = $res->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($conteudo);