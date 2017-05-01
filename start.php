<?php

function autoload ($classname)
{
	if (file_exists("./src/{$classname}/.php")) {
		require "./src/{$classname}/.php";
	}
}

spl_autoload_register("autoload");

phpinfo();