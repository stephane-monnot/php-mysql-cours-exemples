<?php

$users = [
    ['name' => 'John Doe', 'skills' => 'PHP MYSQL'],
    ['name' => 'Jane Doe', 'skills' => 'React Redux'],
];

foreach ($users as $user) {
    echo $user['name'] . ' maîtrise ' . $user['skills'] . '<br>';
}