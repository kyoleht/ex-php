<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Par ou Ímpar</title>
</head>
<body>
    <form action="" method="post">
        Digite um Número: <input type="number" name="num">
        <input type="submit" value="Analisar">
    </form>

    <?php 
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $num = (int) $_POST ['num'];
    }

    if ($num % 2 == 0) {
        echo "Par";
    } else {
        echo "Ímpar";
    }

    ?>



</body>
</html>