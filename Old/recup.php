<?php
if(isset($_POST['submit'])){
    $nbr1 = $_POST['nbr1'];
    $nbr2 = $_POST['nbr2'];
    $nbr3 = $_POST['nbr3'];

    if(!empty($nbr1) && !empty($nbr2) && !empty($nbr3)){
        $resultat = $nbr1 * $nbr2 * $nbr3;
        header("Location: index.php?prix=$resultat");
        exit();
    } else {
        echo "Veuillez remplir tous les champs.";
    }
}
