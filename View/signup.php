<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar - Help Desk</title>
    <!-- Adicionando Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form method="post" action="../Controller/signupController.php"
                    class="border mt-5 rounded p-5 shadow text-center">
                    <p class=" flex text-align-center display-4 mb-lg-4 ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="Turquoise"
                            class="bi bi-headset" viewBox="0 0 16 16">
                            <path
                                d="M8 1a5 5 0 0 0-5 5v1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V6a6 6 0 1 1 12 0v6a2.5 2.5 0 0 1-2.5 2.5H9.366a1 1 0 0 1-.866.5h-1a1 1 0 1 1 0-2h1a1 1 0 0 1 .866.5H11.5A1.5 1.5 0 0 0 13 12h-1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h1V6a5 5 0 0 0-5-5" />
                        </svg>
                        Help Desk
                    </p>
                    <div class="form-group">
                        <input type="username" class="form-control" id="username" name="username"
                            placeholder="Digite o Usuário" required="required">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="password" name="password"
                            placeholder="Digite a Senha" required="required">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="re-password" name="re-password"
                            placeholder="Repetir a Senha" required="required">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Cadastrar</button>
                    </div>
                    <div class="form-group">
                        <a class="btn btn-primary btn-block" href="../index.php">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>