<?php

$i = 1;
while ($i <= 10) {
    echo $i++; // Ceci va afficher les nombres de 1 à 10
}
echo '<hr>';

// Ou avec do while

$j = 1;
do {
    echo $j++; // Ceci va afficher les nombres de 1 à 10
} while ($j <= 10);
echo '<hr>';

// /!\ la condition est testé après la première itération dans le cas du do while

$j = 1;
do {
    echo $j++; // Ceci va afficher 1, la condition étant testée après la première itération
} while ($j < 1);
echo '<hr>';

$i = 1;
while ($i < 1) {
    echo $i++; // Ceci ne va rien afficher puisque la condition est fausse
}
echo '<hr>';
