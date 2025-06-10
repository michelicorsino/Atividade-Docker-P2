<?php
$host = $_ENV['POSTGRES_HOST'] ?? 'postgres';
$db = $_ENV['POSTGRES_DB'] ?? 'startup_db';
$user = $_ENV['POSTGRES_USER'] ?? 'admin';
$password = $_ENV['POSTGRES_PASSWORD'] ?? 'admin123';

try {
    $pdo = new PDO("pgsql:host=$host;dbname=$db", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro de conexão: " . $e->getMessage());
}
$conn = $pdo;
?>
