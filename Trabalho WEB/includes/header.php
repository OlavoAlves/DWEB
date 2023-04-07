<?php

if(session_status() !== PHP_SESSION_ACTIVE):
    session_start();
endif;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sistema de Livros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <?php

    if(isset($_SESSION["user"])):
        include "navbar_login.php";
    else:
        include "navbar_logout.php";
    endif;

    ?>
<div class="container-mt-4">