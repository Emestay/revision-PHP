<?php
if(isset($_POST['submit'])){
    $nbr1 = $_POST['nbr1'];
    $nbr2 = $_POST['nbr2'];

    if(!empty($nbr1) && !empty($nbr2)){
        $resultat = $nbr1 + $nbr2;
        header("Location: index.php?resultat=$resultat");
        exit();
    } else {
        echo "Veuillez remplir tous les champs.";
    }
}
?>