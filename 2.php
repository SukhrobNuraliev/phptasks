<?php

$fileContent = file_get_contents("github.json");
$array = json_decode($fileContent, true);

var_dump($array);

$context = stream_context_create([
    "http" => [
        "header" => "User-Agent: Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.102 Safari/537.36"
    ]
]);

$webContent = file_get_contents('https://api.github.com/', false, $context);
$object = json_decode($webContent);

var_dump($object);
