<?php 
if ($_SERVER['PHP_AUTH_USER'] == 'victor' && $_SERVER['PHP_AUTH_PW'] == '123') {
	echo 'Ok, existe o usuario';
} else {
	echo 'Invalido.';
}