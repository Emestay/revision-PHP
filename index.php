<?php
echo '  <script src="https://cdn.tailwindcss.com"></script>';

?>
<!DOCTYPE html>
<html>
<head>
    <title>Formulaire</title>
</head>
<body>
<body class="bg-gray-100">
<div class="container mx-auto px-4 py-8">
    <form method="post" action="./recup.php" class="bg-white rounded-lg shadow-lg p-8">
        <div class="mb-4">
            <label for="nbr1" class="block text-gray-700 font-bold mb-2">Nombre 1 :</label>
            <input type="text" id="nbr1" name="nbr1"
                   class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>

        <div class="mb-6">
            <label for="nbr2" class="block text-gray-700 font-bold mb-2">Nombre 2 :</label>
            <input type="text" id="nbr2" name="nbr2"
                   class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>

        <div class="flex items-center justify-between">
            <input type="submit" name="submit" value="Envoyer"
                   class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
        </div>
    </form>
    <?php
    if (isset($_GET['resultat'])) {
        echo "Le résultat est : " . $_GET['resultat'];
    }
    ?>
</div>
<canvas id="myCanvas" width="400" height="400"></canvas>
</body>
</html>



