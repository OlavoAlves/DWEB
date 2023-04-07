<?php
    include "../includes/functions.php";
    $book_id = $_GET["book_id"];
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $book_name = $_POST["book_name"];
        $book_title = $_POST["book_title"];
        $book_author = $_POST["book_author"];
        $book_editor = $_POST["book_editor"];
        $book_desc = $_POST["book_desc"];
        $book_cover = $_POST["book_cover"];
        editBook($book_id, $book_title, $book_cover, $book_author, $book_editor, $book_desc);
        // Colocar direcionamento -> header("Location: ");
    } else {
        // Função buscar por Id (Irei fazer!);
    }
    include "../includes/header.php";   
?>
<div class="container">
    <h2>
        Editar Livro:
    </h2>
    <form method="post">
        <div>
            <label for="title">
                Título:
            </label>
            <input type="text" name="book_title" id="book_title" value="<?php echo $books["book_title"]?>" required>
        </div>
        <div>
            <label for="title">
                Autor:
            </label>
            <input type="text" name="book_author" id="book_author" value="<?php echo $books["book_author"]?>" required>
        </div>
        <div>
            <label for="title">
                Editor:
            </label>
            <input type="text" name="book_editor" id="book_editor" value="<?php echo $books["book_editor"]?>" required>
        </div>
        <div>
            <label for="title">
                Descrição:
            </label>
            <input type="text" name="book_desc" id="book_desc" value="<?php echo $books["book_desc"]?>" required>
        </div>
        <div>
            <label for="title">
                Capa:
            </label>
            <input type="" name="book_cover" id="book_cover" value="<?php echo $books["book_cover"]?>" required>
        </div>
        <div>
            <a href="">Listar</a>
            <a href="">Cancelar</a>
        </div>
    </form>
</div>