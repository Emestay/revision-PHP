<?php
echo '  <script src="https://cdn.tailwindcss.com"></script>';
$tablo = [12, 42, 36, 48, 55, 87, 8, 59, 48, 36, 3, 49];
function moyMaxMin($tab)
{
    $sum = 0;
    $max = $tab[0];
    $min = $tab[0];
    foreach ($tab as $value) {
        $sum += $value;
        if ($value > $max) {
            $max = $value;
        }
        if ($value < $min) {
            $min = $value;
        }
    }
    $moyenne = $sum / count($tab);
    echo '<p class="text-3xl text-center text-gray-800 font-bold p-4 bg-gray-200 rounded-lg shadow-lg"> La valeur moyenne du tableau est :   ' . $moyenne . ' </p>';
    echo '<p class="text-3xl text-center text-gray-800 font-bold p-4 bg-gray-200 rounded-lg shadow-lg">La valeur maximale du tableau est :   ' . $max . '</p>';
    echo '<p class="text-3xl text-center text-gray-800 font-bold p-4 bg-gray-200 rounded-lg shadow-lg">La valeur minimale du tableau est :   ' . $min . ' </p>';
    echo '<p class="text-3xl text-center text-gray-800 font-bold p-4 bg-gray-200 rounded-lg shadow-lg">La somme totale des valeurs du tableau est :   ' . $sum . ' </p>';
    echo '<p class="text-3xl text-center text-gray-800 font-bold p-4 bg-gray-200 rounded-lg shadow-lg">Le nombre d\'elements du tableau est de  :   ' . count($tab) . ' </p>';
}

moyMaxMin($tablo);

