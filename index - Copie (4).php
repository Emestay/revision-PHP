<?php
echo '  <script src="https://cdn.tailwindcss.com"></script>';

function calculer(int $nbr1, int $nbr2, string $operator)
{
    switch ($operator) {
        case '+':
            return $nbr1 + $nbr2;

        case '-':
            return $nbr1 - $nbr2;

        case '/':
            if ($nbr2 == 0 or $nbr1 == 0) {
                return "Impossible de / par 0.";
            }
            return $nbr1 / $nbr2;

        case '*':
            return $nbr1 * $nbr2;

        default:
            return "Pas bon c't'operateur voyons";
    }
}

?>
<div>
    <p class="text-xl font-medium text-gray-800 leading-relaxed"> <?php echo calculer(5, 3, '+'); ?></p>
    <p class="text-xl font-medium text-gray-800 leading-relaxed"> <?php echo calculer(5, 3, '-'); ?></p>
    <p class="text-xl font-medium text-gray-800 leading-relaxed"> <?php echo calculer(5, 0, '/'); ?></p>
    <p class="text-xl font-medium text-gray-800 leading-relaxed"> <?php echo calculer(0, 10, '/'); ?></p>
    <p class="text-xl font-medium text-gray-800 leading-relaxed"> <?php echo calculer(5, 3, '*'); ?></p>
    <p class="text-xl font-medium text-gray-800 leading-relaxed"> <?php echo calculer(5, 3, '%'); ?></p>
</div>


<div class="flex justify-center items-center h-screen">
    <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="post">
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="nbr1">
                Nombre 1:
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                   id="nbr1" name="nbr1" type="number" required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="nbr2">
                Nombre 2:
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                   id="nbr2" name="nbr2" type="number" required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="operator">
                Opérateur:
            </label>
            <div class="relative">
                <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="operator" name="operator">
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="*">*</option>
                    <option value="/">/</option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M5 7l5 5 5-5z"/>
                    </svg>
                </div>
            </div>
        </div>
        <div class="flex items-center justify-between">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="submit">
                Calculer
            </button>
        </div>
    </form>
    <?php

        $nbr1 = (int) $_POST['nbr1'];
        $nbr2 = (int) $_POST['nbr2'];
        $operator = $_POST['operator'];

        echo '<div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">';
        echo '<p class="text-gray-700 font-bold mb-2">Résultat:</p>';
        echo '<p class="text-gray-700 text-xl">' . calculer($nbr1, $nbr2, $operator) . '</p>';
        echo '</div>';

    ?>
</div>





