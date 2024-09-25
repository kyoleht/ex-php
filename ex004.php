<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Pesquisa Binaria</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Tente acertar o número</h1>
                <form method="POST">
                    <div class="mb-3 row">
                        <div class="form-group mb-3">
                            <input type="number" name="palpite" min="1" max="5">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary form-group mt-3">Enviar</button>
                            </div>
                        </div>

                        <?php

                        // sistema de pesquisa binario

                        session_start();

                        if (!isset($_SESSION['randomNumber'])) {
                            $_SESSION['randomNumber'] = rand(1, 5);
                            $_SESSION['tentativas'] = 3;
                        }

                        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                            $palpite = (int) $_POST['palpite'];
                        }

                        if ($palpite == $_SESSION['randomNumber']) {
                            echo "Parabéns, você acertou o número <br>";
                            session_destroy();
                        } else {
                            if ($_SESSION['tentativas'] > 0) {
                                echo "<p>Tente novamente! Você tem " . $_SESSION['tentativas'] . " tentativas restantes.</p>";
                                $_SESSION['tentativas'] > 3;
                                $_SESSION['tentativas']--;
                            } else {
                                echo "<p>Você atingiu o número máximo de tentativas. O número era " . $_SESSION['randomNumber'] . " </p>";
                                session_destroy();
                            }
                        }
                        ?>

</body>

</html>