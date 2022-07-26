<?php
// $pdo = new PDO('mysql:dbname=docker-demo;host=mysql', 'chinhnv', '123456', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

// $query = $pdo->query('SHOW VARIABLES like "version"');

// $row = $query->fetch();

// echo 'MySQL version:' . $row['Value'];

$host = 'mysql';
$port = '3306';
$dbname = 'docker-demo';
$charset = 'utf8mb4';
$dsn = "mysql:host={$host};port={$port};dbname={$dbname};charset={$charset}";

$options = [ 
    PDO::ATTR_ERRMODE   =>  PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE    =>  PDO::FETCH_ASSOC,
];

try {
    $pdo = new \PDO($dsn, 'chinhnv', '123456', $options);

    $query = $pdo->query('SHOW VARIABLES like "version"');

    $row = $query->fetch();

    echo 'MySQL version:' . $row['Value'];

} catch (PDOException $PDOException) {
    print PHP_EOL . "<br><br>" . $PDOException . "<br>";
    throw new PDOException($PDOException->getMessage(), (int) $PDOException->getCode());
}