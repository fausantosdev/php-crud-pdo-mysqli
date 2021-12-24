<?php

require_once '../../vendor/autoload.php';

$crud = new \PDOConnection\App\Crud();

$result = $crud->select(
    '*',
    'users',
    '', // WHERE email = ?
     [] // [ 'fallsantosdev@hotmail.com' ]
);

echo '<pre>';
var_dump(
    $result,      // Result: true or false
    $crud->data(),// Data
    $crud->fail() // Error array
);
echo '</pre>';