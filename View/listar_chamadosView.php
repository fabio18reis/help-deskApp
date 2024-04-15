<?php
include_once "../Controller/listar_chamadosController.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Chamados</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col mb-3">
                <a href="inicioView.php"><button class="btn btn-primary">Voltar</button></a>
            </div>
        </div>
        <div class="table-responsive shadow rounded">
            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <td>
                            Id
                        </td>
                        <td>
                            Título
                        </td>
                        <td>
                            Tipo
                        </td>
                        <td>
                            Descrição
                        </td>
                        <td>
                            Status
                        </td>
                        <td>
                            Ações
                        </td>

                    </tr>
                </thead>

                <tbody class="table-group-divider">
                <?php if($chamadosUsuario != null){?>
                    <?php foreach ($chamadosUsuario as $chamado){?>
                    <tr>
                        <td>
                            <?=$chamado['id_chamado']?>
                        </td>
                        <td>
                            <?=$chamado['titulo_chamado']?>
                        </td>
                        <td>
                            <?=$chamado['tipo_chamado']?>
                        </td>
                        <td>
                            <?=$chamado['descricao_chamado']?>
                        </td>
                        <td>    
                            <?=$chamado['status_chamado']?>
                        </td>
                        <td>
                            
                        </td>

                    </tr>
                    <?php
}
}?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>