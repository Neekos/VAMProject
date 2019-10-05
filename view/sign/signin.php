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

  <div class="row justify-content-center align-items-center">
    <div class="col-md-4">
      <div class="input-group ">
        
<?php if (isset($errors) && is_array($errors)): ?>
<?php foreach ($errors as $item): ?>
  <li><?=$item; ?></li>
<?php endforeach; ?>
<?php endif; ?>
        <form  method="post" >

        <p>Логин</p> <input type="text" name="username1" value="" class="form-control"/>

        <p>Пароль</p> <input type="password" name="password1" value="" class="form-control"/> 
        <br>
        
        <input type="submit" value="Войти" name="login" class="btn btn-primary mb-2" />
          
        </form>
  
      </div>
    </div>
  </div>
  
 

</div>
</div>



<?php 
	include '/template/footer.php'

?>
