<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Positive and negative</title>
</head>

<body>
    <form action="" method="get">
        <input type="number" name="num">
        <button type="submit">Submit</button>
    </form>

<?php 

if (isset($_GET['num'])) {
    echo '<hr>';

    $num = $_GET['num'];

    if($num >= 0){
        echo "$num is a Positive Number";
    }else{
        echo "$num is a negative Number";

    }
}

?>

</body>

</html>