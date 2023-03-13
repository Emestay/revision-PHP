<?php
echo '  <script src="https://cdn.tailwindcss.com"></script>';

$chaine = "Le chat noir dort tranquillement dans sa cage en bois, pendant que l'oiseau chante joyeusement sur la branche de l'arbre.";

function remplacerCaracteres($chaine)
{
    $chaine = str_replace('a', '@', $chaine);
    $chaine = str_replace('e', '3', $chaine);
    $chaine = str_replace('i', '1', $chaine);
    $chaine = str_replace('o', '0', $chaine);
    //Je fais a la suite une maj sur l'autre
    $output = "";
    for ($i = 0; $i < strlen($chaine); $i++) {
        $char = $chaine[$i];
        if ($i % 2 == 0) {
            $char = strtoupper($char);
        }
        $output .= $char;
    }
    return $output;
}

$resultat = remplacerCaracteres($chaine);

echo $resultat .'<br> <br>';

$tab = [12,42,36,48,55,87,1,59,48,36,73,49];
echo array_sum($tab);
