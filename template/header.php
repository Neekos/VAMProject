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
	<link href="https://fonts.googleapis.com/css?family=Comfortaa|Play|Ubuntu+Condensed" rel="stylesheet">
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="/template/js/jquery-mask.js"></script>  
	
</head>
<body>

<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  <h5 class="my-0 mr-md-auto font-weight-normal">WebStudio</h5>
  <nav class="my-2 my-md-0 mr-md-3">
    <a class="p-2 text-dark" href="/main/">Главная</a>
    <a class="p-2 text-dark" href="#">Услуги</a>
    <a class="p-2 text-dark" href="#">О нас</a>
    <a class="p-2 text-dark" href="#">Поддержка</a>
  </nav>
  <?php if(Sign::isGuest()): ?>
  <a class="btn btn-outline-primary" href="/signin/">Sign up</a>
  <?php else: ?>
  <a class="p-2 text-dark" href="/cabinet/">Кабинет</a>	
  <a class="btn btn-outline-primary" href="/logout/">Log Out</a>
<?php endif; ?>
</div>
		
