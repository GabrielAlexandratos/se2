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

    <h2 class="subheading">Your Account:</h2>
    <br>
    <!-- show the username that is curretly logged in-->
    <p class="homeparagraph">You are logged in as - <?= htmlspecialchars($_SESSION['user']) ?></p>
    
    <br>

    <h2 class="subheading">Public Profile:</h2>



    </div>

<?php include "footer.php"; ?>
</body>