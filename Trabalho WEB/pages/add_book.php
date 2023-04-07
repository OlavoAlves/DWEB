<?php
include "../includes/navbar_logout.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add books</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        body{
            background-image: linear-gradient(to right, green, cyan);
            color: #fff;
        }
        li{
            color: black;
        }
    </style>
</head>
<body>
    <h1 class="text-center mt-3 mb-3">Página de adição de livros</h1>
    <form action="">
        <p>
            <div class="form-group mx-sm-3 col-4">
                <label for="book_title">Título do livro:</label>
                <input type="text" name="book_title" id="book_title" class="form-control form-control-lg" placeholder="Digite o título do livro" required>
            </div>
        </p>
        <p>
            <div class="form-group mx-sm-3 col-4">
                <label for="book_author">Autor do livro:</label>
                <input type="text" name="book_author" id="book_authot" class="form-control form-control-lg" placeholder="Digite o nome do autor" required>
            </div>
        </p>
        <p>
            <div class="form-group mx-sm-3 col-4">
                <label for="book_editor">Editora:</label>
                <input type="text" name="book_editor" id="book_editor" class="form-control form-control-lg" placeholder="Digite sobre a editora" required>
            </div>
        </p>
        <p>
            <div class="form-group mx-sm-3 col-4">
                <label for="book_desc">Descrição do livro:</label>
                <textarea name="book_desc" id="book_desc" class="form-control form-control-lg" placeholder="Digite uma descrição" required></textarea>
            </div>
        </p>
        <p>
            <div class="form-group mx-sm-3 col-4">
                <label for="book_cover">Adicione a capa do livro a ser exibida</label>
                <input type="file" name="book_cover" id="book_cover" class="form-control form-control-lg" required>
            </div>
        </p>
        <p>
            <div class="mt-3">
                <button type="submit" class="btn btn-warning mx-sm-3">Enviar</button>
            </div>
        </p>
    </form>
<?php
include "../includes/footer.php";
?>