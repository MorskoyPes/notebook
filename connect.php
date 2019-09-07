<?php
require 'rb/rb.php';
R::setup( 'mysql:host = 127.0.0.1;
 dbname=notebook',
 'root',
 '');

if (!R::testConnection()) {
	exit ('Нет подключения к базе данных!');
}





 ?>