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

            <div class="notebox">
                <strong>Welcome to the site</strong>
                <br>
                To find the catalogue click on<a href="songs.php">[songs] </a> in the menu bar.
            </div>

            <div class="homeintro">
                <p>Welcome to the OFFICIAL Suckerpunch records website</p>
                <p>Suckerpunch Records was started on March 20th 2026</p>
            </div>

            <div class="homecontent">
                <h2 class="subheading">Who, what, when, where, why?</h2>
                <p class="homeparagraph">Suckerpunch is an independent label based in Sydney Australia, our goal is getting music *physically* in the hands of as many people as possible.</p>
               <br>
            </div>

        </div>

<?php include "footer.php"; ?>
</body>