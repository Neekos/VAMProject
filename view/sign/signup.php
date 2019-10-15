<?php 
	include '/template/header.php'

?>

<section class="section__nav">
  <div class="container">
    
  </div>
</section>

<div class="container-fluid">
<?php if (isset($errors) && is_array($errors)): ?>
      <ul>
        <?php foreach ($errors as $error): ?>
          <li> - <?php echo $error; ?></li>
        <?php endforeach; ?>
      </ul>
    <?php endif; ?>
    <div class="mychange">
    <form method="POST" class="form">
        <div class="form_title">
          <h3>Регистрация</h3>
        </div>
        <div class="goup">
          <input class="form_input" type="text" name="username" placeholder="Имя пользователя">
          <label class="form_label"> Имя </label>
        </div>
        <div class="goup">
          <input class="form_input" type="password" name="password" placeholder="Пароль">
          <label class="form_label"> Пароль </label>
        </div>
         <div class="goup">
          <input class="form_input" type="password" name="password-confirm" placeholder="Повторите пароль">
          <label class="form_label"> Повторите пароль </label>
        </div>
        <div class="goup">
          <input class="form_input" type="email" name="email" placeholder="E-mail">
          <label class="form_label"> E-mail </label>
        </div>
        <br>
        <input class="form_button signup" type="submit" name="registration" value="Регистрация">
      </form>
    </div>
  
    
    
    
    
  

</div>
   




<?php 
	include '/template/footer.php'

?>