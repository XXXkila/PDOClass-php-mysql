# PDOClass
Простой класс для удобной и быстрой работы с PDO::
Искал в интернете, что то удобное и простое для себя но так и не нашел
пришла идея сделать самому.

Простой класс для работы с PDO
Есть минимум основных функций таких как 
SELECT INSERT UPDATE

Так же сделал удобную работу с WHILE

Можно было сделать и проще но мне так больше понравилось
и запоминается быстро :)

// Пример 

// Подключаемся к базе в файле config.php
// Далее -->

require_once('inc.php');

$base = new dbcq($db);

/*-----------SELECT-----------*/<br>
// Выбтать<br>
//$select = $base->select("SELECT * FROM `таблица` WHERE `id`=? and `text`=?", [3,'ttg']);<br>
//$select = $base->select("SELECT * FROM `таблица` WHERE `id`=?", [2]);<br>

/*-----------SELECTALL-----------*/<br>
// выбрать все записи из таблицы<br>
//$data = $base->selectall("SELECT * FROM `таблица`");<br>

/*-----------INSERT-----------*/<br>
// вставить<br>
//$base->insert("INSERT INTO `таблица` SET `text`=?",['ghbdtn']);<br>
//$base->insert("INSERT INTO `таблица` SET `text`=?,`name`=?",['ghbdtn,'вася']);<br>

/*-----------UPDATE-----------*/<br>
// обновить<br>
//$base->update("UPDATE `таблица` SET `result`=?,`world`=? WHERE `id`=?",['result','world',1]);<br>

/*-----------SEARCH-----------*/<br>
// Искать в базе<br>
//$search = $base->search("SELECT * FROM `таблица` WHERE `text` LIKE ?",'t');<br>

/*-----------DELETE-----------*/<br>
// Удалить запись из страницы<br>
//$base->delete("DELETE FROM `таблица` WHERE `id`=?", [1]);<br>

/*-----------WHILE-----------*/<br>
//$result_while = $base->dbwhile("SELECT * FROM `таблица` WHERE `id` =?",[$id]);<br>
//while($row = $result_while->fetch(PDO::FETCH_ASSOC)){}<br>

/*-----------WHILEALL-----------*/<br>
//$result_whileall = $base->dbwhileall("SELECT * FROM `таблица`");<br>
//while($row = $result_whileall->fetch(PDO::FETCH_ASSOC)){}<br>
