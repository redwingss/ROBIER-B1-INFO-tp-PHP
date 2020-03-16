<?php

require_once  'functions/db.php';
// permt de montrer les voiture quand elles sont visibles
function getProducts(): array
{
    $pdo = getPdo();
// montre les voitures qui sont visible = 1
    $stmt = $pdo->query("SELECT * FROM voiture");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
