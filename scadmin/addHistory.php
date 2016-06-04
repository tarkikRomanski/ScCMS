
    <script>
            var wbbOpt = {
                lang: "ua"
            }
            $(function() {
                $("#historyBB").wysibb(wbbOpt);
            })
  </script>
  <script src="../js/ua.js"></script>
<?php if (isset($_COOKIE['userId'])): ?>
   <p>
    Історія навчального закладу:
    <textarea name="bb" id="historyBB" style="height: 400px;">

    </textarea>
  </p>

  <button id="sendAddHistory">Замінити історію</button>
  <script>
  $('#sendAddHistory').click(function(){
    $.post('../Classes/api.php',
      {
        s: 'addHistory',
        bb: $('.wysibb-text-editor').html()
      },
      function(data, textStatus, xhr) {
        alert(data);
    });
});
  </script>
<?php endif ?>
