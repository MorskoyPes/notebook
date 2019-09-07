<?php

require 'C:/Winginx/home/notebook/public_html/connect.php';


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
  echo "Дата: ".$comment->date_calendar.'; ';
  echo "<br>";
  // создает ссылку при нажатии на которую в URL передается id
  echo "<a href='deletenote.php?id=$comment->id'>удоли</a>";
  echo "<br>";
}

// $date_calendar = R::getCol('SELECT id FROM comment');

// $comments = R::loadAll('comment', $date_calendar);
// $date = $comment->date_calendar;
// foreach ($comments as $comment){
// 	echo "date_calendar: ".$comment->date_calendar.'; ';;
// 	if ($date == $comment){
// 		break 1;
// 	}
//   echo "<br>";
//   echo '$date'. $date;  echo "<br>";
// }



$date_calendar = R::getCol('SELECT date_calendar FROM comment');



$id_calendar = R::getCol('SELECT id FROM comment');
$comments = R::loadAll('comment', $id_calendar);

$date_calendar_unique = array_unique($date_calendar); echo "<br>";
foreach ($date_calendar_unique as $value) {
	echo "<a href='../date/adddate.php?date_calendar=$value'>".$value.'</a>';
	echo $value;
	echo $comment->date_calendar;
	echo "<br>";
}
echo "<br>";
print_r ($date_calendar);


foreach ($comments as $comment){
echo "date_calendar: ".$comment->date_calendar.'; ';
  echo "<br>";
}




 ?>