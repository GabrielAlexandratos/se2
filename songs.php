<?php
session_start();
require __DIR__ . "/db.php";

$search = trim($_GET["search"] ?? '');

$sql = "SELECT * FROM songs";
$params = [];

if ($search !== '') {
    $sql .= " WHERE title LIKE :q OR artist LIKE :q OR album LIKE :q";
    $params[':q'] = "%$search%";
}

$sql .= " ORDER BY artist, album, track_number, title";

$stmt = $pdo->prepare($sql);
$stmt->execute($params);

$songs = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="style.css">
  <title>[songs] - Suckerpunch Records</title>
</head>
<body>
<?php include "header.php"; ?>

<div class="contentbackground">
  <h2 class="subheading">Songs</h2>

  <form method="get" class="songs-search-form">
    <input name="search" placeholder="Search by song, artist, or album" value="<?= $search ?>">
    <button type="submit">Search</button>
  </form>

    <div class="songs-list">
      <?php
      $currentArtist = null;
      $currentAlbum = null;
      foreach ($songs as $s):

        if ($s['artist'] !== $currentArtist || $s['album'] !== $currentAlbum):
          $currentArtist = $s['artist'];
          $currentAlbum = $s['album'];
        ?>

        <div class="album-header">
          <img src="<?= $s['album_cover'] ?>" class="album-cover">
          <div>
            <div class="album-title"><?= $s['album'] ?: 'Singles' ?></div>
            <div class="album-meta">
              <?= $s['artist'] ?>
              <?php if ($s['year']) echo ' - ' . $s['year']; ?>
            </div>
          </div>
        </div>
      <?php endif; ?>

        <div class="song-row">
          <a class="song-title" href="<?= $s['audio_file'] ?>" download> <?= $s['title'] ?>
          </a>
          <span class="song-genre">|| Genre: <?= $s['genre'] ?></span>
        </div>

      <?php endforeach; ?>
    </div>
</div>

<?php include "footer.php"; ?>
</body>
</html>