<?php
    include "../includes/functions.php";
    $admin_id = $_GET["admin_id"];
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $admin_name = $_POST["admin_name"];
        $admin_email = $_POST["admin_email"];
        $admin_born = $_POST["admin_born"];
        editAdmin($admin_id, $admin_name, $admin_email, $admin_born);
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
            <input type="text" name="admin_name" id="admin_name" value="<?php echo $admin["admin_name"]?>" required>
        </div>
        <div>
            <label for="title">
                Email::
            </label>
            <input type="text" name="admin_email" id="admin_email" value="<?php echo $admin["admin_email"]?>" required>
        </div>
        <div>
            <label for="title">
                Data de nascimento:
            </label>
            <input type="text" name="admin_born" id="admin_born" value="<?php echo $admin["admin_born"]?>" required>
        </div>
        <div>
            <a href="">Listar</a>
            <a href="">Cancelar</a>
        </div>
    </form>
</div>