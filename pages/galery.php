<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../libs/bootstrap-5.2.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/galery.css">
    <link rel="stylesheet" href="../css/global.css">
    <script src="../libs/bootstrap-5.2.2-dist/js/bootstrap.bundle.min.js"></script>
    <title>Teste Cooper | Galeria</title>
</head>

<body>
    <?php
    include_once "../components/Navbar.php";

    $url = "https://rickandmortyapi.com/api/character";
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

    $result = json_decode(curl_exec($ch));
    ?>

    <main>
        <div class="container p-4">
            <h1 class="text-center fw-bold">Rick and Morty</h1>
            <h2 class="text-center fw-bold">Gallery</h2>
            <p class="text-center text-secondary">Uma demonstração de imagens tiradas da API <a target="_blank" href="https://rickandmortyapi.com/documentation"> rickandmortyapi.com</a> </p>
            <div class="row row-cols-1 row-cols-md-4 g-4 pt-5">
                <?php
                foreach ($result->results as $character) {
                    if ($character->status == "Alive") {
                        $circleColor = "success";
                    } elseif ($character->status == "Dead") {
                        $circleColor = "danger";
                    } else {
                        $circleColor = "warning";
                    }
                ?>
                    <div class="col">
                        <div class="card shadow pointer">
                            <img src="<?= $character->image ?>" class="card-img-top" alt="<?= $character->name . "-image" ?>">
                            <div class="card-body">
                                <h5 class="card-title fw-semibold"><?= $character->name ?></h5>
                                <span class="d-flex align-items-center">
                                    <div class="bg-<?= $circleColor ?> rounded-circle me-2" style="width: 10px;height: 10px;"></div>
                                    <?= $character->status . " - "  . $character->species ?>
                                </span>
                            </div>
                        </div>
                    </div>

                <?php
                }
                ?>
            </div>

        </div>
    </main>

    <?php include_once "../components/Footer.php"?>
</body>

</html>