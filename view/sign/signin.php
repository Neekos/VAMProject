<?php 
	include '/template/header.php'

?>

<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  <h5 class="my-0 mr-md-auto font-weight-normal">WebStudio</h5>
  <nav class="my-2 my-md-0 mr-md-3">
    <a class="p-2 text-dark" href="/main/">Главная</a>
    <a class="p-2 text-dark" href="#">Услуги</a>
    <a class="p-2 text-dark" href="#">О нас</a>
    <a class="p-2 text-dark" href="#">Поддержка</a>
  </nav>
  <a class="btn btn-outline-primary" href="/signin/">Sign up</a>
</div>

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
