<?php
require_once 'Classes/db_connect.php';
use DataBase\Connect as conn;
$connect = new conn('Scms');

if (isset($_COOKIE['userId'])):
  if (isset($_COOKIE['userName'])):
    echo  $_COOKIE['userName'];
  else:
    echo  $_COOKIE['userNickname'];
  endif;
  echo ", це може вас зацікавити";
endif;
?>

<h1>Свіжі новини</h1>

<?php
$news = $connect->getColumnTable('news');

$last = count($news)-1;

for ($i=$last;$i > ($last-3); $i--): ?>
  <div class="lastNews">
    <h2><?php echo $news[$i]['title']; ?></h2>
    <p>Дата публікації <?php echo $news[$i]['publication']; ?></p>
    <a href="?page=news&id=<?php echo $news[$i]['id'] ?>">Далі..</a>
  </div>
<?php endfor; ?>

<h1>Останні обговорення</h1>

<?php

?>
