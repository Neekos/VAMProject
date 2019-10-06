<?php 
	include '/template/header.php'

?>



<div class="container-fluid">
<?php if (isset($errors) && is_array($errors)): ?>
      <ul>
        <?php foreach ($errors as $error): ?>
          <li> - <?php echo $error; ?></li>
        <?php endforeach; ?>
      </ul>
    <?php endif; ?>
  <form method="POST">
    
    <h3>Регистрация</h3>
    <input type="text" name="username" placeholder="Имя пользователя"><br><br>
    <input type="password" name="password" placeholder="Пароль"><br><br>
    <input type="password" name="password-confirm" placeholder="Повторите пароль"><br><br>
    <input type="email" name="email" placeholder="Электронная почта"><br><br>
    <input type="submit" name="registration" value="Регистрация">
  </form>

</div>
   




<?php 
	include '/template/footer.php'

?>