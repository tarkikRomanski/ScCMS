<?php
require_once 'Classes/db_connect.php';
use DataBase\Connect as conn;
$connect = new conn('Scms');
 ?>
<?php
if (!isset($_GET['id'])):

?>

<?php if (isset($_COOKIE['userId'])): ?>

<button id="addNewForum">Створити форум</button>

<?php endif ?>

<?php

$topics = $connect->getColumnTable('topics');

?>

<?php foreach ($topics as $topic):
$author = $connect->getRowTable('users', 'id='.$topic['users_id']);
$author = $author[0]['nickname'];
?>
<div class="topic">
  <h1><?php echo $topic['title'] ?></h1>
  <p>Опубліковано: <?php echo $topic['publication']; ?>, <?php echo $author; ?></p>
  <a href="?page=forum&id=<?php echo $topic['id']; ?>">Відкрити</a>
</div>

<?php endforeach?>
<?php else: ?>
 <?php
 $id = $_GET['id'];
 $topic = $connect->getRowTable('topics', 'id='.$id);
 $comments = $connect->getRowTable('comments', 'target='.$id);
 ?>

<h1><?php echo $topic[0]['title'] ?></h1>
<div class="topicContent">
  <?php echo $topic[0]['bbText'] ?>
</div>

<?php if ($comments != null): ?>
  <h3 style="margin-top: 32px;">Відповіді</h3>
<?php foreach ($comments as $comment):
  $author = $connect->getRowTable('users', 'id='.$comment['users_id']);
$author = $author[0]['nickname'];
?>
  <div class="comment">
    <p><?php echo $comment['text'] ?></p>
    <p style="text-align: right; font-size: 12px;">Опубліковано: <?php echo $comment['created'] ?></p>
    <p>Автор: <?php echo $author ?></p>
  </div>
<hr>
<?php endforeach ?>
<?php endif ?>
<?php if (isset($_COOKIE['userId'])): ?>
  <div id="Sendcomments">
<p>
Відповісти:
</p>
  <input type="text" id="commentText">

<span id="target" style="display:none"><?php echo $_GET['id'] ?></span>
<button id="sendComment">Відправити</button>
</div>
<?php endif ?>
<?php endif ?>
<script>
  $("#addNewForum").click(function(){
    location.href="index.php?page=addForum";
  });

  $('#sendComment').click(function(){
    $.post('Classes/api.php',
      {
        s: 'addComment',
        text: $('#commentText').val(),
        target:$('#target').html()
      },
      function(data, textStatus, xhr) {
        alert($('#target').html());
    });
  })
</script>
