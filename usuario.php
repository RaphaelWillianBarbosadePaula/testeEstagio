<?php

include("footer.php");

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<title>Teste da vaga de estágio</title>
	</head>

    <body>
<script type="text/javascript" src="../assets/usuario.js"> </script>

<div class="barraControle">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-md">
            <a class="navbar-brand" href="#">
            <b> - CONTROLE DE USUÁRIOS! - </b>
            <b><a class="home" href="../index.php">Voltar ao menu</a></b>
            </a>
        </div>
    </nav>
</div>


<div class="container">

    <br>
    <a>
        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#modalUsuarios">Adicionar</button>
    </a>

    <div class="space"> </div>

    <div class="card">
        <div class="card-body">

            <table class="table table-striped table-hover" id="listaUsuario">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Email</th>
                        <th scope="col">Senha</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>

            <div class="modal fade" id="modalUsuarios" tabindex="-1" aria-labelledby="modal" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalTitle">Adicionar Usuário</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <form>
                            <div class="modal-body">

                                <input type="hidden" id="userId" name="userId">

                                <div class="mb-3">
                                    <label for="nome" class="form-label">Nome</label>
                                    <input type="text" class="form-control" id="nome" name="nome" required>
                                </div>

                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="text" class="form-control" id="email" name="email" required>
                                </div>

                                <div class="mb-3">
                                    <label for="senha" class="form-label">Senha</label>
                                    <input type="text" class="form-control" id="senha" name="senha" required>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn btn-primary" id="btnSave" onclick="saveUser()">Salvar</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>

<style type="text/css">
    .home{
        background: #333;
        color: #fff;
        text-decoration: none;
        padding: 6px;
        border-radius:4px;
    }

    .home:hover {
	    background-color: #3a3a3a;
	    color: #292828;
	    cursor: pointer;
    }

    .space {
        padding: 15px;
    }

    .table>tbody {
        vertical-align: baseline;
    }
</style> 