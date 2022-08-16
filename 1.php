<?php

$myarray = array(
    'hello' => 'world',
    'coding' => 'is cool',
);

$json = json_encode($myarray);
file_put_contents('myarray.json', $json);

echo 'success';
