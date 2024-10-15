<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>
<body>
    <form action="" method="post">
        Insira um Número: <input type="number" name="num" required>
        <input type="submit" value="Tabuada">
    </form>

    <?php 
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $num = (int) $_POST ['num'];
    }

    for ($i=0; $i <= 10; $i++) { 
        $resultado = $num * $i;
        echo $num . " x " . $i . " = " . $resultado . "<br>";
    }
    
    ?>
</body>
</html>