

<?php
require_once 'Classes/db_connect.php';
use DataBase\Connect as conn;
$connect = new conn('Scms');

if(isset($_GET['id'])):

$id = $_GET['id'];

$news = $connect->getRowTable('news', 'id='.$id);
$author = $connect->getRowTable('users', 'id='.$news[0]['users_id']);
$author = $author[0]['nickname'];
?>

<h1><?php echo $news[0]['title']; ?></h1>
<p class="newsPublication">Опубліковано: <?php echo $news[0]['publication'] . ', ' . $author; ?></p>

<div id="newsContent">
  <?php echo $news[0]['bbText']; ?>
</div>
<?php else: ?>
<h1>Новини</h1>
<?php
  $news = $connect->getColumnTable('news');
?>

<?php foreach ($news as $oneNews):
$author = $connect->getRowTable('users', 'id='.$oneNews['users_id']);
$author = $author[0]['nickname'];
?>
<div class="news">
  <h2><?php echo $oneNews['title'] ?></h2>
  <div class="shortNews"><?php echo $oneNews['bbText'] ?></div>
  <p class="newsPublication">Опубліковано: <?php echo $oneNews['publication']; ?>, <?php echo $author; ?></p>
  <a href="?page=news&id=<?php echo $oneNews['id']; ?>">Читати далі...</a>
</div>

<?php endforeach?>

<?php endif; ?>
