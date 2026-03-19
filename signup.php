<?php
session_start();
require __DIR__ . "/db.php";

$error = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $username = $_POST["username"];
  $password = $_POST["password"];

  if ($username === "" || $password === "") {
    $error = "All fields are required";
  } else {
    $stmt = $pdo->prepare("SELECT id FROM users WHERE username = ?");
    $stmt->execute([$username]);

    if ($stmt->fetch()) {
      $error = "Username already exists";
    } else {
      $hash = password_hash($password, PASSWORD_DEFAULT);

      $stmt = $pdo->prepare("INSERT INTO users (username, password_hash) VALUES (?, ?)");
      $stmt->execute([$username, $hash]);

      $_SESSION["user_id"] = $pdo->lastInsertId();
      $_SESSION["user"] = $username;

      header("Location: account.php");
      exit;
    }
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="style.css">
  <title>[sign up] - Suckerpunch Records</title>
</head>

<body>
  <?php include "header.php"; ?>

  <div class="contentbackground">

    <div class="warningbox">
      <strong>NOTE:</strong> Never tell anyone your password
    </div>

    <h2 class="subheading">sign up</h2>

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
        <button type="submit">create account</button>
      </p>
    </form>

  </div>

  <?php include "footer.php"; ?>
</body>
</html>