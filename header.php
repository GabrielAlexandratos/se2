<?php
require __DIR__ . "/db.php";
?>

<div class="page-layout">
  <aside class="sidebar sidebar-left">

  </aside>

  <main class="main-column">
<div class="headerhero">
<div class="headerbox">
  <div class="header-left">
    <h1>Suckerpunch Records*</h1>
    <p>aliens are real</p>
  </div>

  <div class="header-account">

    <?php if (isset($_SESSION["user_id"])): ?>
      <a href="users.php" class="headermenuoption">[all users/add friends]</a>
      <span class="seperator">//</span>
      <a href="account.php?id=<?= (int)$_SESSION['user_id'] ?>" class="headermenuoption">[edit profile/account]</a>
    <?php else: ?>
      <a href="login.php" class="headermenuoption">[login]</a>
      <span class="seperator">//</span>
      <a href="signup.php" class="headermenuoption">[sign up]</a>
    <?php endif; ?>
  </div>
</div>

  <div class="linkbox">
    <a href="index.php" class="menuoption">[home]</a>
    <span class="seperator">//</span>
    <a href="songs.php" class="menuoption">[songs/downloads]</a>
    <span class="seperator">//</span>
    <a href="artists.php" class="menuoption">[roster/releases]</a>
    <span class="seperator">//</span>
    <a href="blog.php" class="menuoption">[blog]</a>
    <span class="seperator">//</span>
    <a href="chatroom.php" class="menuoption">[chatroom]</a>

  </div>