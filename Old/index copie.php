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
    <title>Tic Tac Toe</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
</head>
<body class="bg-gray-200">
    <div class="container mx-auto py-20">
        <h1 class="text-3xl font-bold text-center mb-10">Tic Tac Toe</h1>
        <div class="grid grid-cols-3 gap-4">
            <?php
            $board = array(
                array("","",""),
                array("","",""),
                array("","","")
            );
            for ($i = 0; $i < 3; $i++) {
                for ($j = 0; $j < 3; $j++) {
                    echo '<button class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow" type="button" onclick="makeMove('.$i.','.$j.')">'.$board[$i][$j].'</button>';
                }
            }
            ?>
        </div>
        <div id="message" class="text-xl font-bold text-center mt-10"></div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        var player = "X";
        var gameOver = false;

        function makeMove(row, col) {
            if (!gameOver) {
                var button = $("button").eq(row * 3 + col);
                if (button.text() === "") {
                    button.text(player);
                    checkWin();
                    if (!gameOver) {
                        player = (player === "X") ? "O" : "X";
                        $("#message").text(player + "'s turn");
                    }
                }
            }
        }

        function checkWin() {
            var board = [];
            $("button").each(function() {
                board.push($(this).text());
            });
            for (var i = 0; i < 3; i++) {
                if (board[i*3] !== "" && board[i*3] === board[i*3+1] && board[i*3+1] === board[i*3+2]) {
                    endGame(board[i*3] + " wins!");
                    return;
                }
                if (board[i] !== "" && board[i] === board[i+3] && board[i+3] === board[i+6]) {
                    endGame(board[i] + " wins!");
                    return;
                }
            }
            if (board[0] !== "" && board[0] === board[4] && board[4] === board[8]) {
                endGame(board[0] + " wins!");
                return;
            }
            if (board[2] !== "" && board[2] === board[4] && board[4] === board[6]) {
                endGame(board[2] + " wins!");
                return;
            }
            if (!board.includes("")) {
                endGame("Tie game!");
                return;
            }
        }

        function endGame(message) {
            gameOver = true;
            $("#message").text(message);
        }
    </script>
</body>
</html>