<?php
require_once "../Controller/listar_chamadosAdmController.php";
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
    <title>Painel</title>
</head>

<body>
    <div class="container  mt-1 p-1">
        <div class="row p-l shadow bg-body-tertiary rounded text-center fs-4 mb-2">
            <div class="col"><a href="inicioAdmView.php"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                        fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z" />
                    </svg></a>
            </div>
            <div class="row">
                <text class="display-8 p-1">Chamados Não Resolvidos</text>
            </div>

        </div>

        <?php
        if(!empty($chamados)){
        foreach($chamados as $chamado){ ?>
        <div class="row shadow bg-body-tertiary rounded">
            <div class="col p-1">
                <div class="accordion sucessful" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header ">
                            <button class=" p-2 accordion-button 
                            btn btn-outline-info collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#<?=$chamado['id_chamado']?>" aria-expanded="false"
                                aria-controls="collapseOne">
                                <?=$chamado['titulo_chamado']?>
                            </button>
                        </h2>
                        <div id="<?=$chamado['id_chamado']?>" class="accordion-collapse collapse ">
                            <div class="accordion-body">
                                <strong><?=$chamado['tipo_chamado']?></strong>
                                <p><?=$chamado['descricao_chamado']?></p>
                                <form method="post" action="../Controller/alterar_statusChamadoController.php">
                                    <input type="hidden" name="id_chamado" id="id_chamado"
                                        value="<?= $chamado['id_chamado'] ?>">
                                    <label for="status mb-1">Status</label>
                                    <div class="row">
                                        <div class="col">
                                            <select class="form-select" name="status" id="status">Atualizar Status
                                                <option disabled selected value="<?= $chamado['status_chamado'] ?>'">
                                                    <?= $chamado['status_chamado'] ?></option>
                                                <option value="Na fila">Na fila</option>
                                                <option value="A Caminho">A Caminho</option>
                                                <option value="Resolvido">Resolvido</option>
                                            </select>
                                        </div>
                                        <div class="col">
                                            <button type="submit" class="btn btn-outline-success">Atualizar</button>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <?php } 
        }?>

        <div class="row mt-5 p-l shadow bg-body-tertiary rounded text-center fs-4 mb-2">
            <text class="display-8 p-1">Todos os chamados Resolvidos</text>
        </div>



        <?php
        if(!empty($resolvidos)){
         foreach($resolvidos as $resolvido){ ?>
        <div class="row shadow bg-body-tertiary rounded">
            <div class="col p-1">
                <div class="accordion sucessful" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header ">
                            <button class=" p-2 accordion-button 
                            btn btn-outline-info collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#<?=$resolvido['id_chamado']?>" aria-expanded="false"
                                aria-controls="collapseOne">
                                <?=$resolvido['titulo_chamado']?>
                            </button>
                        </h2>
                        <div id="<?=$resolvido['id_chamado']?>" class="accordion-collapse collapse ">
                            <div class="accordion-body">
                                <strong><?=$resolvido['tipo_chamado']?></strong>
                                <p><?=$resolvido['descricao_chamado']?></p>
                                <form method="post" action="../Controller/alterar_statusChamadoController.php">
                                    <input type="hidden" name="id_chamado" id="id_chamado"
                                        value="<?= $resolvido['id_chamado'] ?>">
                                    <label for="status mb-1">Status</label>
                                    <div class="row">
                                        <div class="col-2 p-2 m-1">
                                            <div class="form-control">
                                               <?= $resolvido['status_chamado'] ?>
                                            </div>
                                        </div>                                        
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <?php }
        } ?>
    </div>




</body>

</html>