<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número Maior</title>
</head>
<body>
    <form action="" method="post">
        Numero 1: <input type="number" name="num1" required>
        Numero 2: <input type="number" name="num2" required>
        Numero 3: <input type="number" name="num3" required>
        <input type="submit" value="Calcular Maior">
    </form>

    <?php 

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $num1 = $_POST ['num1'];
        $num2 = $_POST ['num2'];
        $num3 = $_POST ['num3'];
    }

    if ($num1 >= $num2 && $num1 >= $num3) {
        echo "O número " . $num1 . " é o maior entre eles.";
    } elseif ($num2 >= $num1 && $num2 >= $num3) {
        echo "O número " . $num2 . " é o maior entre eles.";
    } else {
        echo "O número " . $num3 . " é o maior entre eles.";
    }
    
    ?>

</body>
</html>