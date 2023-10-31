<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Cadastro</title>

    <link rel="stylesheet" type="text/css" href="Estilo.css" />

    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
    <link rel="stylesheet" href="css/mdb.min.css" />
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />

</head>

<?php
    // Sem o isset o código alertará que o $_SESSION está vazio, resultando em um erro.
    if (isset($_SESSION['cadastro_falha']) && $_SESSION['cadastro_falha'] === true) {
        echo "<script type='text/javascript'>alert('Falha ao fazer o cadastro.');</script>";
        $_SESSION['cadastro_falha'] = false;
        session_destroy();
    }
?>

<body class="d-flex flex-column min-vh-100" style="background-color: #367588;">  
    <form action="Validar_cadastro.php" method="POST">
    <section class="vh-100">
        <div class="d-flex align-items-center h-100 gradient-custom-3">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body p-5">
                                <h2 class="text-uppercase text-center mb-5 apt">Crie uma Conta</h2>

                                <div class="form-outline mb-4">
                                    <input type="text" name="nome" class="form-control form-control-lg" required>
                                    <label class="form-label" for="nome">Nome</label>
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="email"  name="email" class="form-control form-control-lg" required>
                                    <label class="form-label" for="email">E-mail</label>
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="password" name="senha" class="form-control form-control-lg" required>
                                    <label class="form-label" for="senha">Senha</label>
                                </div>

                                <p class="text-center text-muted mt-5 mb-0">Já tem uma conta? 
                                <a href="Login.php" class="fw-bold text-body"><u>Faça o Login Aqui</u></a></p><br>

                                <div class="d-flex justify-content-center" style="margin-bottom: 10px;">
                                    <button type="submit" class="btn btn-block btn-lg bg-secondary" id="Btn" name="Submit">Enviar</button>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <a type="button"class="btn btn-dark btn-block btn-lg" href="Home.php">Cancelar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <script type="text/javascript" src="js/mdb.min.js"></script>
    <script type="text/javascript"></script>

</body>

</html>