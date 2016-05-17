  <link rel="stylesheet" href="../css/default/wbbtheme.css" />
  <link rel="stylesheet" href="../css/themes/matherial-main.css"/>
  <script type="text/javascript" src="../js/jquery.js"></script>
  <script src="../js/jquery.wysibb.min.js"></script>
    <script>
            var wbbOpt = {
                lang: "ua"
            }
            $(function() {
                $("#newsBB").wysibb(wbbOpt);
            })
  </script>
  <script src="../js/ua.js"></script>
<?php if (isset($_COOKIE['userId'])): ?>
  <p>
    Заголовок новини:
    <input type="text" id="newsTitle">
  </p>

   <p>
    Контент новини:
    <textarea name="bb" id="newsBB" style="height: 400px;">

    </textarea>
  </p>

  <button id="sendAddNews">Добавити новину</button>
  <script>
  $('#sendAddNews').click(function(){
    $.post('../Classes/api.php',
      {
        s: 'addNews',
        title: $('#newsTitle').val(),
        bb: $('.wysibb-text-editor').html()
      },
      function(data, textStatus, xhr) {
        alert(data);
    });
});
  </script>
<?php endif ?>
