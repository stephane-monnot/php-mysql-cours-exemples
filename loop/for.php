<?php

for ($i = 0; $i < 10; $i++) {
    echo $i . ' Ceci est une boucle for en PHP<br>'; // On affiche 10 fois la chaine
}
echo '<hr>';

// Boucle sur un tableau

$users = [
    ['name' => 'John Doe', 'skills' => 'PHP MYSQL'],
    ['name' => 'Jane Doe', 'skills' => 'React Redux'],
];

for($i = 0; $i < count($users); ++$i) {
    $user = $users[$i];
    echo $user['name'] . ' ' . $user['skills'] . '<br>';
}
