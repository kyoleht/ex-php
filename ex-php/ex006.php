<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício de Soma e Multiplicação</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Soma e Multiplicação</h1>
                <form method="POST">
                    <div class="form-group mb-3"></div>
                    <input type="number" name="num1" id="num1">
                    <input type="number" name="num2" id="num2">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary form-group mt-3">Calcular</button>
                    </div>
                    
                    <?php

                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        $num1 = (int) $_POST['num1'];
                        $num2 = (int) $_POST['num2'];
                    }

                    $soma = $num1 + $num2;
                    $multi = $num1 * $num2;

                    echo "A soma dessa operação é: " . $soma . "<br>";
                    echo "A multiplicação dessa operação é: " . $multi;

                    ?>

                </form>
            </div>
        </div>
    </div>



</body>

</html>