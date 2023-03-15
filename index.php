<?php
echo '  <script src="https://cdn.tailwindcss.com"></script>';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Formulaire d'inscription</title>
</head>
<body class="bg-gray-100">
<div class="container mx-auto max-w-md p-4">
    <h1 class="text-xl font-bold mb-4">Formulaire d'inscription</h1>
    <form action="traitement.php" method="POST" enctype="multipart/form-data" class="bg-white p-4 rounded-lg shadow-md">
        <div class="mb-4">
            <label for="nom" class="block text-gray-700 font-bold mb-2">Nom :</label>
            <input type="text" name="nom" id="nom" class="shadow border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>

        <div class="mb-4">
            <label for="email" class="block text-gray-700 font-bold mb-2">Email :</label>
            <input type="email" name="email" id="email" class="shadow border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>

        <div class="mb-4">
            <label for="password" class="block text-gray-700 font-bold mb-2">Mot de passe :</label>
            <input type="password" name="password" id="password" class="shadow border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>

        <div class="mb-4">
            <label for="photo" class="block text-gray-700 font-bold mb-2">Photo de profil :</label>
            <input type="file" name="photo" id="photo" class="shadow border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>

        <input type="submit" value="Envoyer" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
    </form>
    <?php if(isset($_GET['success']) && $_GET['success'] == 1): ?>
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
            <strong class="font-bold">Succès :</strong>
            <span class="block sm:inline">Votre inscription a été réussie.</span>
        </div>
    <?php endif; ?>

    <?php if(isset($_GET['error'])): ?>
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
            <strong class="font-bold">Erreur :</strong>
            <span class="block sm:inline"><?php echo htmlspecialchars($_GET['error']); ?></span>
        </div>
    <?php endif; ?>
</div>
</body>
</html>
