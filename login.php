<?php
session_start();
require __DIR__ . "/db.php";

$error = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $username = $_POST["username"];
  $password = $_POST["password"];

  $stmt = $pdo->prepare("SELECT id, password_hash FROM users WHERE username = ?");
  $stmt->execute([$username]);
  $user = $stmt->fetch();

  if ($user && password_verify($password, $user["password_hash"])) {
    $_SESSION["user_id"] = $user["id"];
    $_SESSION["user"] = $username;
    header("Location: account.php");
    exit;
  } else {
    $error = "Invalid login details";
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="style.css">
  <title>[login] - Suckerpunch Records</title>
</head>

<body>
  <?php include "header.php"; ?>

  <div class="contentbackground">

    <div class="warningbox">
      <strong>NOTE:</strong> Never tell anyone your password ;)
    </div>

    <h2 class="subheading">login</h2>

    <?php if ($error !== ""): ?>
      <p style="color:red; padding-left:10px; padding-top:10px;">
        <?= htmlspecialchars($error) ?>
      </p>
    <?php endif; ?>

    <form method="post" style="padding-left:10px; padding-top:10px;">
      <p>username</p>
      <input name="username" required>

      <p style="padding-top:10px;">password</p>
      <input name="password" type="password" required>

      <p style="padding-top:10px;">
        <button type="submit">log in</button>
      </p>
    </form>

  </div>

  <?php include "footer.php"; ?>
</body>
</html>