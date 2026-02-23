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

            <div class="homeintro">
                <p>Welcome to the OFFICIAL Suckerpunch records website</p>
                <p>Suckerpunch Records was started on February 17th 2025</p>
            </div>

            <div class="homecontent">
                <h2 class="subheading">Who what when where why</h2>
                <p class="homeparagraph">Suckerpunch is an independent label based in Sydney Australia, our goal is getting music *physically* in the hands of as many people as possible.</p>
                <p class="homeparagraphshortmed">Our focus is on releasing emo adjacent projects that have come from the DIY scene. We handle production of small runs of compact discs, cassette tapes, and 12" vinyl.</p>
                <div class="tooltip">
                    <p>Do you have a request for a pressing of physical media for one of Suckerpunch's artists? Send an email to <span class="bold">suckerpunch.label@gmail.com</span></p>
                </div>

               <br>

                <h2 class="subheading">What should you do here</h2>
                <p> - Enjoy<a href="downloads.php" class="discretelink">free download links</a> to every song ever released under Suckerpunch Records</p>
                <p> - Read up about all the<a href="artists.php" class="discretelink">lovely bands</a> that make this possible</p>
                <p> - Go say hi in the<a href="guestbook.php" class="discretelink">chatroom</a></p>
                <p> - Check out the other sites in<a href="links.php" class="discretelink">links</a></p>
                <p> - Take a peak at some<a href="goodies.php" class="discretelink">unreleased tracks</a> from the bands YOU love</p>
                <p> - Create an account and customise your profile</p>
                <p> - View the other users and meet some<a href="users.php" class="discretelink">new people</a></p>

                <br>
            </div>

        </div>

<?php include "footer.php"; ?>
</body>
</html>