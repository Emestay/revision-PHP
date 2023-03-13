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
