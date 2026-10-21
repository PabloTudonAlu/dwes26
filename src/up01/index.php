<!--DOCTYPE html -->
<html>
<head>
    <title>Portfolio de proyectos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">    

    <?php
    include_once('./templates/styles.php');
    ?>
</head>
<!-- https://radu.link/make-footer-stay-bottom-page-bootstrap/ -->
<body class="d-flex flex-column min-vh-100">

<?php
include_once('./templates/header.php');
?>

<div class="container">
    <a href="proyecto.php">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="./img/projecte1.png" alt="Projecte 1">
            <div class="card-body">
                <h5 class="card-title">Projecte 1</h5>
                <p class="card-text">Descripció del projecte 1.</p>
            </div>
        </div>
    </a>
</div>

<?php
    include_once('./templates/footer.php');
?>
    
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>

</body>
</html>    