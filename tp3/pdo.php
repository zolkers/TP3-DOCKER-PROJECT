<?php

$host = 'db';
$dbname = 'testdb';
$username = 'user';
$password = 'password';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->query("SELECT * FROM gens");

    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($results as $row) {
        echo "ID: " . $row['id'] . ", Name: " . $row['name'] . ", Age: " . $row['age'] . "<br>";
    }
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
