<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício de Média de Notas</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Média de Notas</h1>
                <form method="POST">
                    <div class="col-1">
                        <input type="text" class="form-control mb-3" name='nota1' id="nota1" step="0.01" placeholder="Nota 1" required>
                        <input type="text" class="form-control mb-3" name='nota2' id="nota2" step="0.01" placeholder="Nota 2" required>
                        <input type="text" class="form-control mb-3" name='nota3' id="nota3" step="0.01" placeholder="Nota 3" required>
                        <input type="text" class="form-control mb-3" name='nota4' id="nota4" step="0.01" placeholder="Nota 4" required>
                        <input type="text" class="form-control mb-3" name='nota5' id="nota5" step="0.01" placeholder="Nota 5" required>
                    </div>
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary form-group mt-3">Calcular Média</button>
                    </div>


                    <?php 
                    
                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        $nota1 = (float) $_POST['nota1'];
                        $nota2 = (float) $_POST['nota2'];
                        $nota3 = (float) $_POST['nota3'];
                        $nota4 = (float) $_POST['nota4'];
                        $nota5 = (float) $_POST['nota5'];

                    }
                    
                    $media = ($nota1 + $nota2 + $nota3 + $nota4 + $nota5) / 5;

                    echo "Sua média de notas é: " . number_format($media, 2);
                    
                    ?>


                </form>
            </div>
        </div>
    </div>
</body>
</html>