<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add user</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        body{
            background-image: linear-gradient(to right, red, blue);
            color: #fff;
        }
    </style>
</head>
<body>
    <h1 class="text-center mt-3 mb-3">Página de Cadastro</h1>
    <form action="">
        <p>
            <div class="form-group mx-sm-3 col-4">
                <label for="user_name">Seu nome de usuário:</label>
                <input type="text" name="user_name" id="user_name" class="form-control form-control-lg" placeholder="Digite seu primeiro Nome" required>
            </div>
        </p>
        <p>
            <div class="form-group mx-sm-3 col-4">
                <label for="user_sec_name">Sobrenome:</label>
                <input type="text" name="user_sec_name" id="user_sec_name" class="form-control form-control-lg" placeholder="Digite seu sobrenome" required>
            </div>
        </p>
        <p>
            <div class="form-group mx-sm-3 col-2">
                <label for="user_born">Nascimento:</label>
                <input type="date" name="user_born" id="user_born" class="form-control" required>
            </div>
        </p>
        <p>
            <div class="form-group mx-sm-3 col-3">
                <label for="user_email">E-mail:</label>
                <input type="email" name="user_email" id="user_email" class="form-control" placeholder="Digite seu E-mail" required>
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