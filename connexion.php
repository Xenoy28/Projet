<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=projet;charset=utf8mb4', 'root', ''
    );
} catch (PDOException $e) {
    die('<p style="color:red;font-family:sans-serif;padding:20px;">Connexion BDD impossible : ' . htmlspecialchars($e->getMessage()) . '</p>');
}
