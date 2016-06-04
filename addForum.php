<p>
  Тема обговорення:
  <input type="text" id="forumTitle">
</p>

  <link rel="stylesheet" href="../css/default/wbbtheme.css" />
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
<p>
Текст обговорення:
    <textarea name="bb" id="newsBB" style="height: 400px;">

    </textarea>
  </p>
<button id="createTopic">Створити тему для обговорення</button>

<script>
    $('#createTopic').click(function(){
    $.post('../Classes/api.php',
      {
        s: 'addTopic',
        title: $('#forumTitle').val(),
        bb: $('.wysibb-text-editor').html()
      },
      function(data, textStatus, xhr) {
        alert(data);
    });
});
</script>
