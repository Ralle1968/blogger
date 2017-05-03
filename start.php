<?php

function autoload ($classname)
{
	if (file_exists("./src/{$classname}/.php")) {
		require "./src/{$classname}/.php";
	}
}

spl_autoload_register("autoload");

$pdo = new PDO('mysql:host=localhost; dbname=blogger', 'root', '');

$res = $pdo->query("SELECT * FROM `posts`");

foreach ($res as $row) {
	var_dump($row);
}