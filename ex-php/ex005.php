<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equação de Numeros</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Digite 2 números</h1>
                <form method="POST">
                    <div class="form-group mb-3">
                        <input type="number" name="num1" id="num1">
                        <input type="number" name="num2" id="num2">
                        <label for="operacao">Escolha a Operação:</label>
                        <select name="operacao" id="operacao">
                            <option value="soma">Soma</option>
                            <option value="subtracao">Subtração</option>
                            <option value="multiplicacao">Multiplicação</option>
                            <option value="divisao">Divisão</option>
                        </select>
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary form-group mt-3">Calcular</button>
                        </div>
                    </div>

                        <?php 

                            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                $operacao = $_POST['operacao'];
                                $num1 = (int) $_POST['num1'];
                                $num2 = (int) $_POST['num2'];
                            


                        
                            switch($operacao) {
                                case 'soma':
                                    $resultado = $num1 + $num2;
                                    break;

                                case 'subtracao':
                                    $resultado = $num1 - $num2;
                                    break;
                                
                                case 'multiplicacao':
                                    $resultado = $num1 * $num2;
                                    break;

                                case 'divisao':
                                    if ($num2 != 0) {
                                        $resultado = $num1 / $num2;
                                    } else {
                                        $resultado = "Erro: Divisão por zero!";
                                    } 
                                    break;

                                }

                                echo "O resultado da operação é: " . $resultado;  
                                
                            }
                        ?>

                </form>
            </div>
        </div>
    </div>
</body>
</html>