<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício Cálculo do Fatorial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Cálculo do Fatorial</h1>
                <form method="POST">
                    <div class="col-1">
                        <input type="number" name="num" id="num">
                    </div>
                    <div class="col-sm-10">
                    <button class="btn btn-primary mt-3" type="submit">Calcular</button>
                    </div>
            
                    <?php 
                    
                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        $num = (int) $_POST['num'];
                    }

                    $fatorial = 1;

                    for ($i=1; $i <= $num; $i++) { 
                        $fatorial *= $i;
                    }

                    echo "O fatorial deste número é: " . $fatorial;
                    
                    ?>




                </form>
            </div>
        </div>
    </div>
</body>
</html>