<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Age Check</title>
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

    if($num >= 18 && $num <= 30){
        echo "you are selected for the interview";
    }else if($num < 18){
        echo "you are under age for the interview";
    }else{
        echo "you are over age for the interview";
    }
}

?>

</body>

</html>