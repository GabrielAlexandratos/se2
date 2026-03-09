<?php
session_start();
?>

<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="style.css">
    <title>home - Suckerpunch Records</title>
</head>

<body>
    <?php include "header.php"; ?>

    <div class="contentbackground">

    <!-- show the username that is curretly logged in-->
    <h1 class="profileheader">You are logged in as <?= htmlspecialchars($_SESSION['user']) ?></h1>

    </div>

<?php include "footer.php"; ?>
</body>
</html>