
<div id="signin">
  <h2>Увійти</h2>
  <p>
  <lebel for="userNickname">
    Ваш нікнейм:
    <input type="text" id="userNickname">
  </lebel>
  </p>

  <p>
  <label for="userPassword">
    Ваш пароль:
    <input type="password" id="userPassword">
  </label>
  </p>

  <button id="sendEnterData">Увійти</button>
</div>
<div id="registration">
  <h2>Зареєструватись</h2>
  <p>Вигадайте нікнейм:
    <input type="text" id="newNickname">
  </p>

  <p>Вигадайте пароль:
    <input type="password" id="newPassword">
  </p>

  <p>Повторіть пароль:
    <input type="password" id="confirmPassword">
  </p>

  <button id="sendRegistrationData">Зареєструватись</button>
</div>


<script type="text/javascript">

  $("#sendEnterData").click(function() {
    $.post('Classes/api.php',
      {
        s: 'signIn',
        nickname: $('#userNickname').val(),
        password: $('#userPassword').val()
      },
      function(data, textStatus, xhr) {
        alert(data);
        location.href = "index.php";
    });
  });

  $('#sendRegistrationData').click(function(){
      $.post('Classes/api.php',
        {
          s: 'registration',
          nickname: $('#newNickname').val(),
          password: $('#newPassword').val()
        },
        function(data, textStatus, xhr) {
          alert(data);
      });
  })

</script>
