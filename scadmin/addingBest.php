<?php
// Каталог, в который мы будем принимать файл:
$uploaddir = './files/';
$uploadfile = $uploaddir.basename($_FILES['bestPhoto']['name']);

// Копируем файл из каталога для временного хранения файлов:
if (copy($_FILES['bestPhoto']['tmp_name'], $uploadfile))
{
echo "<h3>Файл успешно загружен на сервер</h3>";
}
else { echo "<h3>Ошибка! Не удалось загрузить файл на сервер!</h3>"; exit; }

$path = 'scadmin/files/';
$p = $path.basename($_FILES['bestPhoto']['name']);

$pip = $_POST['bestName'];
$descr = $_POST['bestDescription'];

$values = array($p, $pip, $descr);
$columns = array('img', 'name', 'do');

require_once '../Classes/db_connect.php';
use DataBase\Connect as conn;
$connect = new conn('Scms');

$connect->insertDataTable('best', $values, $columns);

?>
