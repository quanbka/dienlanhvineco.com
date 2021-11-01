<?php
$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
$origin_link = str_replace( 'https://vineco.test/', 'https://dienlanhhoangduong.com/', "$actual_link");
$origin_link = preg_replace("/\?(.*)/", "", $origin_link);
$array = (explode("/", $_SERVER['REQUEST_URI']));
unset($array[count($array) - 1]);
$path = join("/", $array);
$path = ltrim( $path, "/");
echo ("mkdir -p '$path'");
echo exec("mkdir -p '$path'");
chdir($path);
echo getcwd() . "\n";
echo exec("wget '$origin_link'");
die;
