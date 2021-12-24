<?php

require_once '../../vendor/autoload.php';

$crud = new \PDOConnection\App\Crud();

$result = $crud->insert(
    'users',
    'default,?,?,?,?,default,default,default,default',
    [
        'Maria José',
        'mariajose',
        'mariajose@gmail.com',
        '456def'
    ]
);

echo '<pre>';
var_dump(
    $result,      // Result: true or false
    $crud->data(),// Data
    $crud->fail() // Error array
);
echo '</pre>';