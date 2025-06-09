<?php
session_start();
?>

<header class="navbar navbar-dark bg-dark">
    <div class="container d-flex justify-content-between align-items-center">
        <a class="navbar-brand" href="index.php">
            <img src="../img/logo-cic.png" alt="CIC Logo" height="50">
        </a>
        <?php if (isset($_SESSION['user_id'])): ?>
            <a href="logout.php" class="btn btn-danger">Desconectarse</a>
        <?php else: ?>
            <a href="login.php" class="btn btn-primary">Acceder</a>
        <?php endif; ?>
    </div>
</header>
