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

require_once('inc.php');

$base = new dbcq($db);

/*-----------SELECT-----------*/
// Выбтать
//$select = $base->select("SELECT * FROM `таблица` WHERE `id`=? and `text`=?", [3,'ttg']);
//$select = $base->select("SELECT * FROM `таблица` WHERE `id`=?", [2]);
/*-----------SELECTALL-----------*/
// выбрать все записи из таблицы
//$data = $base->selectall("SELECT * FROM `таблица`");
/*-----------INSERT-----------*/
// вставить
//$base->insert("INSERT INTO `таблица` SET `text`=?",['ghbdtn']);
//$base->insert("INSERT INTO `таблица` SET `text`=?,`name`=?",['ghbdtn,'вася']);
/*-----------UPDATE-----------*/
// обновить
//$base->update("UPDATE `таблица` SET `result`=?,`world`=? WHERE `id`=?",['result','world',1]);
/*-----------SEARCH-----------*/
// Искать в базе
//$search = $base->search("SELECT * FROM `таблица` WHERE `text` LIKE ?",'t');
/*-----------DELETE-----------*/
// Удалить запись из страницы
//$base->delete("DELETE FROM `таблица` WHERE `id`=?", [1]);
/*-----------WHILE-----------*/
//$result_while = $base->dbwhile("SELECT * FROM `таблица` WHERE `id` =?",[$id]);
//while($row = $result_while->fetch(PDO::FETCH_ASSOC)){}
/*-----------WHILEALL-----------*/
//$result_whileall = $base->dbwhileall("SELECT * FROM `таблица`");
//while($row = $result_whileall->fetch(PDO::FETCH_ASSOC)){}
