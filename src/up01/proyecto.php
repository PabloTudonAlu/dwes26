<html>
<head>
    <title>Proyecto 1</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">    

    <?php
    include_once('./templates/styles.php');
    ?>
</head>

<body class="d-flex flex-column min-vh-100">

<?php include("templates/header.php"); ?>
<div class="container">
    <h2>Títol de mostra</h2>
    <h4><a href="#">Any</a></h4>
    <span>Categories: </span>
    <a href="#"><button class="btn btn-sm btn-default">Categoria 1</button></a>
    <br> <br>
    <div class="row">
        <div class="col-sm">
            <img src="./img/projecte1.png" alt="Projecte 1" class="img-responsive"><br>
        </div>
        <div class="col-sm">Descripció</div>
    </div>
</div>

<?php include("templates/footer.php"); ?>

</body>