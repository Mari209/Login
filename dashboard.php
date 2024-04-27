<?php
session_start();
if (empty($_SESSION))
    echo "<script>location.href='index.php';</script>";

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand">Sistema X</a>
        <?php 
        echo "Olá," .$_SESSION["nome"];
        echo "<a href='logout.php' class='btn btn-danger'>Sair</a>";
        ?>
    </div>
</nav>

</body>
</html>