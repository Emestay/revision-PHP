<?php
echo '<script src="https://cdn.tailwindcss.com"></script>';
echo '<div class=" flex justify-center items-center">
          <h1 class="text-5xl font-bold text-gray-900">Hello World! PHP C\'est sympa</h1>
          </div>';
$chat = 'Molette';
function eL($var)
{
    echo "<script> console.log('$var')</script>";
}

eL($chat);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Calcul avec TailwindCSS</title>

  </head>
  <body class="bg-gray-100">
    <div class="container mx-auto mt-10 p-5 rounded-md shadow-md bg-white">
      <?php
        $nbr1 = 10;
        $nbr2 = 23;
        $total = $nbr1 + $nbr2;
      ?>
      <h1 class="text-3xl font-bold mb-5">Calcul avec </h1>
      <div class="flex justify-between">
        <div class="w-1/3">
          <p class="text-lg mb-3">Premier nombre :</p>
          <p class="text-lg mb-3">Deuxième nombre :</p>
          <p class="text-lg mb-3">Somme :</p>
        </div>
        <div class="w-1/3">
          <p class="text-lg mb-3"><?php echo $nbr1; ?></p>
          <p class="text-lg mb-3"><?php echo $nbr2; ?></p>
          <p class="text-lg mb-3"><?php echo $total; ?></p>
        </div>
        <div class="w-1/3">
          <?php
            $nbr1 = 5;
            $nbr2 = 8;
            $total = $nbr2 - $nbr1;
          ?>
          <p class="text-lg mb-3">Nouveau premier nombre :</p>
          <p class="text-lg mb-3">Nouveau deuxième nombre :</p>
          <p class="text-lg mb-3">Soustraction :</p>
        </div>
        <div class="w-1/3">
          <p class="text-lg mb-3"><?php echo $nbr1; ?></p>
          <p class="text-lg mb-3"><?php echo $nbr2; ?></p>
          <p class="text-lg mb-3"><?php echo $total; ?></p>
        </div>
      </div>
    </div>
  </body>
</html>