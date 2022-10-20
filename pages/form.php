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

    <div class="toast-container position-fixed p-3 top-0 start-50 translate-middle-x" id="toastPlacement">
        <div id="sucess-submit-toast" class="toast align-items-center text-bg-primary border-0" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body">
                    Cadastrado com Sucesso 
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
        </div>

        <div id="danger-submit-toast" class="toast align-items-center text-bg-danger border-0" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body">
                    Preencha os campos corretamente
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="card position-relative top-0 start-50 translate-middle-x my-3" style="width: 30rem">
            <div class="card-body">
                <form id="user-form" class="row g-3" enctype="multipart/form-data" novalidate>
                    <!--Avatar-->
                    <div class="col-12 d-flex flex-column align-items-center">
                        <label for="photo" class="form-label" id="avatar-label"></label>
                        <input class="form-control" type="file" id="photo" name="photo" accept="image/png, image/jpeg">
                        <span id="photo-invalid-feedback" class="text-danger d-none">
                            Selecione apenas imagens dos tipos: png e jpeg
                        </span>
                    </div>

                    <!--Name-->
                    <div class="col-md-6">
                        <label for="name" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="name" name="name">

                        <div class="valid-feedback">
                            Nome válido.
                        </div>
                        <div class="invalid-feedback">
                            Nome inválido
                        </div>
                    </div>

                    <!--Years-->
                    <div class="col-md-6">
                        <label for="years" class="form-label">Idade</label>
                        <input type="text" class="form-control" id="years" name="years" pattern="[0-9]+">

                        <div class="valid-feedback">
                            Idade válida
                        </div>
                        <div class="invalid-feedback">
                            A Idade deve ser um número inteiro maior ou igual a 18.
                        </div>
                    </div>

                    <!--Email-->
                    <div class="col-md-12">
                        <label for="email" class="form-label">Email</label>
                        <div class="input-group has-validation">
                            <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-envelope"></i></span>
                            <input type="email" class="form-control" id="email" aria-describedby="inputGroupPrepend" required placeholder="email-exemplo@gmail.com">

                            <div class="invalid-feedback">
                                Email inválido
                            </div>
                            <div class="valid-feedback">
                                Email válido
                            </div>
                        </div>
                    </div>

                    <!--Gender-->
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

                    <!--Description-->
                    <div class="col-12">
                        <div class="form-floating">
                            <textarea class="form-control" name="description" id="description"></textarea>
                            <label for="descrição">Descrição</label>
                        </div>
                        <div class="invalid-feedback">
                            O campo Descrição deve ser preenchido.
                        </div>
                        <div class="valid-feedback">
                            Descrição válida
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="terms" name="terms">
                            <label class="form-check-label" for="terms">
                                Eu li e concordo com os <a href="#">termos de uso</a>
                            </label>
                            <div class="invalid-feedback">
                                Marque a caixa de seleção
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary w-100">Cadastrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="../js/validation.js"></script>
</body>

</html>