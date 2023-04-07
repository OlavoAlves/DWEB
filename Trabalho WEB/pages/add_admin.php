<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        body{
            background-image: linear-gradient(to right, black, gold);
            color: #fff;
        }
    </style>
</head>
<body>
    <h1 class="text-center mt-3 mb-3">Cadastro de Administrador</h1>
    <form action="">
        <p>
            <div class="form-group mx-sm-3 col-4">
                <label for="admin_name">Seu nome de admin:</label>
                <input type="text" name="admin_name" id="admin_name" class="form-control form-control-lg" placeholder="Digite seu primeiro Nome" required>
            </div>
        </p>
        <p>
            <div class="form-group mx-sm-3 col-4">
                <label for="admin_sec_name">Sobrenome:</label>
                <input type="text" name="admin_sec_name" id="admin_sec_name" class="form-control form-control-lg" placeholder="Digite seu sobrenome" required>
            </div>
        </p>
        <p>
            <div class="form-group mx-sm-3 col-2">
                <label for="admin_born">Nascimento:</label>
                <input type="date" name="admin_born" id="admin_born" class="form-control" required>
            </div>
        </p>
        <p>
            <div class="form-group mx-sm-3 col-3">
                <label for="admin_email">E-mail:</label>
                <input type="email" name="admin_email" id="admin_email" class="form-control" placeholder="Digite seu E-mail" required>
            </div>
        </p>
        <p>
            <div class="mt-3">
                <button type="submit" class="btn btn-warning mx-sm-3">Enviar</button>
            </div>
        </p>
    </form>
</body>
</html>