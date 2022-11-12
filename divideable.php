<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Check if dividable</title>
</head>

<body>
    <form action="" method="get">
        <label>Number 1: </label>
        <input type="number" name="num1">
        <br>
        <label>Number 2: </label>
        <input type="number" name="num2">
        <br>
        <button type="submit">Submit</button>
    </form>


    <?php

    if (isset($_GET['num1'])) {
        echo '<hr>';

        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];


        if ($num1 % $num2 == 0) {
            echo "the numbers are dividable";
        }  else {
            echo ' the numbers are not dividable';
        }
    }

    ?>

</body>

</html>