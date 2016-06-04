<h1 style="text-align:center">Вітаємо Вас на сайті закладу

"Навчально-виховний комплекс:

загальноосвітня школа І - ІІІ ступенів - гімназія №6

Вінницької міської ради"</h1>

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

<h2 style="text-align:center">
Особливості проведення ЗНО - 2016
</h2>
<p>У  2016 році для вступу до вищого навчального закладу (ВНЗ) абітурієнти подають сертифікати ЗНО лише 2016 року.</p>
<p>Кожен учасник ЗНО  має право скласти тести не більш як із чотирьох навчальних предметів з переліку:</p>
<ul>
  <ol>Українська мова і література</ol>
  <ol>Історія України</ol>
  <ol>Математика</ol>
  <ol>Біологія</ol>
  <ol>Географія</ol>
  <ol>Фізика</ol>
  <ol>Хімія</ol>
  <ol>Англійська мова</ol>
  <ol>Іспанська мова</ol>
  <ol>Німецька мова</ol>
  <ol>Російська мова</ol>
  <ol>Французька мова</ol>
</ul>



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
<?php

?>
