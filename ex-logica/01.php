<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma de dois números</title>
</head>
<body>
    <form method="post">
        Número 1: <input type="number" name="num1" required>
        Número 2: <input type="number" name="num2" required>
        <input type="submit" value="Calcular Soma">
    </form>

    <?php 
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $num1 = $_POST ['num1'];
        $num2 = $_POST ['num2'];
    }
    
    $soma = $num1 + $num2;

    echo $soma;
    
    ?>
</body>
</html>