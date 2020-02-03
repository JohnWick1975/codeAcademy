<?php
$rounds = 1;
$pc_win_rounds = 0;
$my_win_rounds = 0;
$draw = 0;
date_default_timezone_set("Europe/Vilnius");
$dat = date("Y.m.d");
$tm = date("h:i:s");
print "<h1>Today date: $dat</h1>";
print "<h1>Time  $tm</h1>";
print "<ul>\n";
for ($i = 0; $i <= 9; $i++) {
    print "<li> Round:\n" . $rounds++ ;
    $my_dice1 = rand(1, 6);
    $my_dice2 = rand(1, 6);

    $pc_dice1 = rand(1, 6);
    $pc_dice2 = rand(1, 6);

    $my_diceSum = $my_dice1 + $my_dice2;
    $pc_diceSum = $pc_dice1 + $pc_dice2;

    if ($my_diceSum > $pc_diceSum) {
        print $winner = "\nYOU WON!!! Result: $my_diceSum - $pc_diceSum" . "</li>";
        $my_win_rounds++;
    } elseif ($my_diceSum < $pc_diceSum) {
        print $winner = "\nYOU LOSE!!! Result: $my_diceSum - $pc_diceSum" . "</li>";
        $pc_win_rounds++;
    } else {
        print $winner = "\nDRAW!!!" . "</li>";
        $draw++;
    }
}
?>
</ul>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>test-Game</title>
        <style type="text/css">

            div {
                text-align: center;
                padding: 5px;
                margin: 0 auto;
            }

            .wrapper {
                background-color: silver;
                width: 600px;
                border: solid grey 5px;
                -webkit-box-shadow: 7px 7px 5px 0px rgba(50, 50, 50, 0.75);
                -moz-box-shadow: 7px 7px 5px 0px rgba(50, 50, 50, 0.75);
                box-shadow: 7px 7px 5px 0px rgba(50, 50, 50, 0.75);
            }

            .result {
                display: inline-block;
                margin-top: 3px;
                border: solid red 1px;
            }
            .draw {
                border: solid red 1px;
                margin: 0 41px;
            }

            h1, h2 {
                color: #0f6674;
            }
        </style>
    </head>
    <body>
        <div class="wrapper">
            <h1>Rounds: <?php print $rounds-1 ?></h1>
            <div>
                <h2>My dices:</h2>
                <img src="images/<?php print $my_dice1 ?>.png" alt="dice1-img" width="150px" height="150px">
                <img src="images/<?php print $my_dice2 ?>.png" alt="dice2-img" width="150px" height="150px">
            </div>
            <div>
                <h2>PC dices:</h2>
                <img src="images/<?php print $pc_dice1 ?>.png" alt="dice1-img" width="150px" height="150px">
                <img src="images/<?php print $pc_dice2 ?>.png" alt="dice2-img" width="150px" height="150px">
                <h2><?php print $winner ?></h2>
                <div class="draw"><h1>Rounds draw</h1>
                    <h1><?php print $draw ?></h1>
                </div>
                <div class="result">
                    <h1>Rounds win human</h1>
                    <h1><?php print $my_win_rounds ?></h1>
                </div>
                <div class="result">
                    <h1>Rounds win PC</h1>
                    <h1><?php print $pc_win_rounds ?></h1>
                </div>
            </div>
        </div>
    </body>
</html>
