<?php
$pdo = new PDO(
  'mysql:host=localhost;dbname=blogger',
  'root',
  ''
);

function fetch_posts()
{
	global $pdo;
	return $pdo->query("SELECT * FROM `posts`");
}
?>