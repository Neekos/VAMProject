<?php 
	include '/template/header.php'

?>



		<div class="mychange">
			<form method="POST" class="form">
				<h3 class="form_title">Авторизация</h3>
		<div class="group">
			<input class="form_input" type="text" name="username" placeholder="Логин">
			<label class="form_label">Логин</label>	
		</div>
	    <div class="group">
	    	<input class="form_input" type="password" name="password" placeholder="Пароль">
	    	<label class="form_label">Пароль</label>	
	    </div>
	    <br>

	    	<a href="/signup/">Регистрация</a>
		    <input class="form_button signin" type="submit" name="signin">	

	    

	  </form>
	
		</div>
				
   




<?php 
	include '/template/footer.php'

?>
