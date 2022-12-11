<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number Calculator</title>
</head>

<body>
    <form action="" method="get">
        <label>Number 1: </label>
        <input type="number" name="num1">
        <br>
        <label>Number 2: </label>
        <input type="number" name="num2">
        <br>
        <button type="submit" name="+">+</button>
        <button type="submit" name="-">-</button>
        <button type="submit" name="x">x</button>
        <button type="submit" name="/">/</button>
    </form>


    <?php

    if (isset($_GET['num1'])) {
        echo '<hr>';

        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];

        $sum = 0;

      if (isset($_GET['+'])) {
            $sum = $num1 + $num2;
        } else if (isset($_GET['-'])) {
            $sum = $num1 - $num2;
        } else if (isset($_GET['x'])) {
            $sum = $num1 * $num2;
        } else if (isset($_GET['/'])) {
            $sum = $num1 / $num2;
      }  


        echo "the Calculation of the numbers is $sum";

    }

    ?>

</body>

</html>