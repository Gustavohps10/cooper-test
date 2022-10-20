<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./libs/bootstrap-5.2.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/global.css">
    <script src="./libs/bootstrap-5.2.2-dist/js/bootstrap.bundle.min.js"></script>
    <title>Teste Cooper | Front End</title>
</head>

<body>
    <?php include_once "./components/navbar.php" ?>

    <main>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 d-flex flex-column align-items-center justify-content-center p-4">
                    <h1 class="fw-bold fs-1">Cooper Tec</h1>
                    <h2 class="fw-semibold">Teste PHP Front-end</h2>
                    <p class="text-secondary">
                        Um teste para desenvolvedor front-end. Esse teste consiste em duas etapas, lógica e criatividade. Você pode acessar logo abaixo: 
                    </p>

                    <div>
                        <a href="/pages/form.php" class="btn btn-primary">Lógica</a>
                        <a href="/pages/galery.php" class="btn btn-primary">Criatividade</a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 d-flex justify-content-center p-4">
                    <img src="/images/home-image.jpg" class="w-100" alt="home-image">
                </div>
            </div>
        </div>
    </main>

    <?php include_once "components/Footer.php" ?>
</body>

</html>