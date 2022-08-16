<?php

$form_data = array(
    'name' => 'Eshmatvoy',
    'surname' => 'Toshmatov',
    'email' => 'eshmatvoy@mail.ru',
    'message' => '<b>Assalomu alaykum!</b><span>Men sizga yozayotganimdan maqsad shuki...</span><script>alert("Voy!");</script>',
);

$name = strip_tags($form_data['name']);
$surname = strip_tags($form_data['surname']);
$email = strip_tags($form_data['email']);
$message = strip_tags($form_data['message']);

$pdo = new PDO("mysql:host=localhost;dbname=DB", 'username', 'password');

$stmt = $pdo->prepare("INSERT INTO contact_messages (name, surname, email, message) VALUES (:name, :surname, :email, :message)");
$stmt->execute([
    'name' => $name,
    'surname' => $surname,
    'email' => $email,
    'message' => $message,
]);

