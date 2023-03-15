<?php

if(isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['password']) && isset($_FILES['photo'])) {

    // récupération des données
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $photo = $_FILES['photo'];

    // vérification de la taille et du type du fichier
    if($photo['size'] <= 100000 && ($photo['type'] == 'image/jpeg' || $photo['type'] == 'image/png')) {

        // déplacement du fichier vers le dossier images avec le nouveau nom
        // déplacement du fichier vers le dossier images avec le nouveau nom
        $extension = pathinfo($photo['name'], PATHINFO_EXTENSION);
        $new_name = $nom . $email . '.' . $extension;
        move_uploaded_file($photo['tmp_name'], 'images/' . $new_name);

        // redirection vers une page de confirmation
        header('Location: index.php?success=1');
        exit();

    } else {
        // affichage d'un message d'erreur si le fichier n'est pas valide
        $error_message = "Le fichier doit être une image au format jpg, jpeg ou png et ne doit pas dépasser 100 Ko.";
    }

} else {
    // affichage d'un message d'erreur si les données n'ont pas été envoyées
    $error_message = "Veuillez remplir tous les champs du formulaire.";
}

// si une erreur s'est produite, redirection vers la page d'origine avec un message d'erreur
if(isset($error_message)) {
    header('Location: index.php?error=' . urlencode($error_message));
    exit();
}

