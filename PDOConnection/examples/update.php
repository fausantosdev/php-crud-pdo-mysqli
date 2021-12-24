<?php

require_once '../../vendor/autoload.php';

$crud = new \PDOConnection\App\Crud();

$result = $crud->update(
    'users',
    'name=?, email=?',
    'id=?',
    [
        'Fulano Beltrano',
        'fulanobeltrano@gmail.com',
        2
    ]
);

echo '<pre>';
var_dump(
    $result,      // Result: true or false
    $crud->data(),// Data
    $crud->fail() // Error array
);
echo '</pre>';