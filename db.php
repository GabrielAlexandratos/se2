<?php
declare(strict_types=1);

$dbPath = __DIR__ . "/data/app.sqlite";

$pdo = new PDO("sqlite:" . $dbPath);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

// ensure that the user table exists in the database
$pdo->exec("
  CREATE TABLE IF NOT EXISTS users (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    username TEXT NOT NULL UNIQUE,
    password_hash TEXT NOT NULL
  )
");

// ensure that the songs table and columns exist in the database
$pdo->exec("
  CREATE TABLE IF NOT EXISTS songs (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    title TEXT NOT NULL,
    artist TEXT NOT NULL,
    album TEXT,
    year INTEGER,
    genre TEXT,
    track_number INTEGER,
    album_cover TEXT,
    audio_file TEXT,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
  )
");