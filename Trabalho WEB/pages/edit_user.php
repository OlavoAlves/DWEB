<?php
    include "../includes/functions.php";
    $user_id = $_GET["user_id"];
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $user_name = $_POST["user_name"];
        $user_email = $_POST["user_email"];
        $user_born = $_POST["user_born"];
        editUser($user_id, $user_name, $user_email, $user_born);
        // Colocar direcionamento -> header("Location: ");
    } else {
        // Função buscar por Id (Irei fazer!);
    }
    include "../includes/header.php";   
?>
<div class="container">
    <h2>
        Editar Usuário:
    </h2>
    <form method="post">
        <div>
            <label for="title">
                Nome::
            </label>
            <input type="text" name="user_name" id="user_name" value="<?php echo $user["user_name"]?>" required>
        </div>
        <div>
            <label for="title">
                Email::
            </label>
            <input type="text" name="user_email" id="user_email" value="<?php echo $user["user_email"]?>" required>
        </div>
        <div>
            <label for="title">
                Data de nascimento:
            </label>
            <input type="text" name="user_born" id="user_born" value="<?php echo $user["user_born"]?>" required>
        </div>
        <div>
            <a href="">Listar</a>
            <a href="">Cancelar</a>
        </div>
    </form>
</div>