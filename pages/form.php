<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../libs/bootstrap-5.2.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/form.css">
    <script src="../libs/bootstrap-5.2.2-dist/js/bootstrap.bundle.min.js"></script>
    <title>Teste Cooper | Formulário</title>
</head>

<body>
    <?php include_once "../components/Navbar.php" ?>

    <div class="container">
        <div class="position-relative">
            <div class="card position-relative top-0 start-50 translate-middle-x my-3" style="width: 30rem">
                <div class="card-body">
                    <form class="row g-3" enctype="multipart/form-data">

                        <div class="col-12 d-flex justify-content-center align-items-center">
                            <label for="photo" class="form-label" id="avatar-label"></label>
                            <input class="form-control" type="file" id="photo" name="photo" accept="image/png, image/jpeg">
                        </div>

                        <div class="col-md-6">
                            <label for="name" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>

                        <div class="col-md-6">
                            <label for="years" class="form-label">Idade</label>
                            <input type="text" class="form-control" id="years" name="years">
                        </div>

                        <div class="col-12">
                            <div class="input-group">
                                <div class="input-group-text">
                                    <i class="bi bi-envelope"></i>
                                </div>
                                <input type="email" class="form-control" id="email" name="email" placeholder="seu-email@gmail.com">
                            </div>


                        </div>

                        <div class="col-12">
                            <fieldset>
                                <legend class="col-form-label col-sm-2 pt-0">Sexo</legend>

                                <div class="form-check col-3">
                                    <input class="form-check-input" type="radio" name="gender" id="male" value="male" checked>
                                    <label class="form-check-label" for="male">
                                        Masculino
                                    </label>
                                </div>

                                <div class="form-check col-3">
                                    <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                                    <label class="form-check-label" for="gridRadios2">
                                        Feminino
                                    </label>
                                </div>

                            </fieldset>
                        </div>

                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" name="description" id="description"></textarea>
                                <label for="floatingTextarea">Descrição</label>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                    Eu li e concordo com os <a href="#">termos de uso</a>
                                </label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary w-100">Cadastrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


    </div>

</body>

</html>