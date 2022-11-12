<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Find the big number</title>
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


        if ($num1 > $num2) {
            echo "$num1 is bigger than $num2";
        } else if ($num1 < $num2) {
            echo "$num2 is bigger than $num1";
        } else {
            echo 'Both numbers are equal';
        }
    }

    ?>

</body>

</html>