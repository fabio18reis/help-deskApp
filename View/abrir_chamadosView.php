<?php
include_once("userView.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Abertura de Chamados</title>
</head>

<body>
    <nav class="navbar flex bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="inicioView.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person"
                    viewBox="0 0 16 16">
                    <path
                        d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
                </svg>
                <?php echo "<text class='display-6 p-1 position-relative = start-0 fs-3'>$username </text>"; ?>
            </a>
            <div class="col-3 ">
                <h1 class="display-3 fs-2">Abertura de Chamados</h1>
            </div>
        </div>
    </nav>
    <div class="container flex justi justify-content center">
        <div class="row mt-lg-5 flex justify-content-center ">
            <div class="col-8 m-1 p-1">
                <form method="POST" class="border rounded shadow p-4" action="../Controller/abrir_chamadosController.php">
                    <input require type="hidden" name="id_user" value="<?php echo $user_id;?>" id="id_user"
                        class="form-control mt-2">
                    <label class="fs-5" for="title">Título do Chamado</label>
                    <input required type="text" name="titulo" id="titulo" class="form-control mb-2 p-2"
                        placeholder="Digite o Título Do Chamado">
                    <label class="fs-5" for="title">Tipo de Chamado</label>
                    <select required class="form-control mb-2" name="tipo" id="tipo">Tipo do Chamado
                        <option disabled selected>Selecione uma Opção</option>
                        <option value="Computador">Computador</option>
                        <option value="Office">Office</option>
                        <option value="Papa">Papa</option>
                        <option value="SigPae">SigPae</option>
                        <option value="SigPae">Pasta Compartilhada</option>
                        <option value="SigPae">Impressora</option>
                    </select>
                    <label  class="fs-5" for="floatingTextarea2Disabled">Descreva o Chamado</label>
                    <textarea required name="descricao" id="descricao" class="form-control mb-2"
                        placeholder="Descreva o Chamado" style="height: 100px"></textarea>
                    <div class="row">
                        <div class="col-md-2">
                            <button class="btn btn-primary" type="submit" id="enviar">Enviar</button>
                        </div>
                        <div class="col-md-2">
                            <a href="inicioView.php"><button type="button" class="btn btn-danger">Voltar</button></a>
                        </div>
                    </div>


                </form>
            </div>
        </div>
    </div>

</body>

</html>