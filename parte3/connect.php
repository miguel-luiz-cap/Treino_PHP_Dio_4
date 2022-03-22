<?php
declare(strict_types=1);

$pdo = null;

try {
    $pdo = new PDO('mysql:host=127.0.0.1:3306;dbname=dio_curso_php4', 'root', '');
}
catch (Exception $e) {
    echo $e->getMessage();
    die();
}

// echo 'OK';
return $pdo;