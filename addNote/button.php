<?php
require 'rb/rb.php';
R::setup( 'mysql:host = 127.0.0.1;
 dbname=notebook',
 'root',
 '');

if (!R::testConnection()) {
	exit ('Нет подключения к базе данных!');
}


// Выбирает все id из таблицы comment, выводит их в массив и циклом выводит всю информацию по каждому id

$ids = R::getCol('SELECT id FROM comment');
print_r ($ids);
echo "<br><br>";

$comments = R::loadAll('comment', $ids);
foreach ($comments as $comment){
  echo "id: ".$comment->id.'; ';
 	echo "Имя: ".$comment->name.'; ';
  echo "Сообщение: ".$comment->message.'; ';
  echo "Время: ".$comment->time.'; ';
  echo "<br>";
  // создает ссылку при нажатии на которую в URL передается id
  echo "<a href='deleteNote.php?id=$comment->id'>удоли</a>";
  echo "<br>";
}



 ?>