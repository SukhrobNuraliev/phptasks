<?php

$pdo = new PDO("mysql:host=localhost;dbname=DB", 'username', 'password');

$sql = "SELECT users.id, users.name, profile.role, profile.registered_at
        FROM users JOIN profile ON users.id=profile.user_id
        WHERE users.status = 1";

$stmt = $pdo->prepare($sql);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

