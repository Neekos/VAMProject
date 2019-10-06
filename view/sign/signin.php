<?php 
	include '/template/header.php'

?>



<div class="container-fluid">

  <form method="POST">
    <h3>Авторизация</h3>
    <input type="text" name="username" placeholder="Логин"><br><br>
    <input type="password" name="password" placeholder="Пароль"><br>
    <a href="/signup/">Регистрация</a><br>
    <input type="submit" name="signin">

  </form>

</div>
   




<?php 
	include '/template/footer.php'

?>
