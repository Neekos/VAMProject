<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>WebStudio</title>
	<link rel="stylesheet" href="/template/css/bootstrap-grid.css">
	<link rel="stylesheet" href="/template/css/bootstrap.css">
	<link rel="stylesheet" href="/template/css/style.css">
	<link rel="stylesheet" href="/template/css/animate.css">
	<link rel="stylesheet" href="/template/font-awesome/css/font-awesome.css">
  <link rel="stylesheet" href="/template/fontawesome/css/all.css">
	<link href="https://fonts.googleapis.com/css?family=Comfortaa|Play|Ubuntu+Condensed" rel="stylesheet">
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="/template/js/jquery-mask.js"></script>  
	
</head>
<body>
    <header class="header">
      <div class="container">
          <div class="header__inner">
            <div class="header__logo">VAMProject</div>
              <nav class="nav">
                <a class="nav__link" href="/main/">Главная</a>
                <a class="nav__link" href="/price/">Услуги</a>
                <a class="nav__link" href="/galereya/">Галерея</a>
                <a class="nav__link" href="/about/">О нас</a>
                <a class="nav__link" href="/def/">Поддержка</a>
                <?php if(Sign::isGuest()): ?>
                  <a class="nav__link" href="/signin/">Sign up</a>
                  <?php else: ?>
                  <a class="nav__link" href="/cabinet/">Кабинет</a> 
                  <a class="nav__link" href="/logout/">Log Out</a>
                <?php endif; ?>
              </nav>
          </div>
      </div>
    </header>

		
