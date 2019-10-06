<?php 
	include '/template/header.php';

?>
<h3>Дневник разработки</h3>
<div class="container-fluid">
	<div class="row">
<div class="col-md-8">
<?if(!empty($DiaryList)) :?>
<? foreach ($DiaryList as $item):?>
	<h3><?=$item['title'];?></h3>
	<p><?=$item['discription'];?></p>
	<p><?=$item['p_date'];?></p>
<? endforeach; ?>
<? else: ?>
	<p>Записей нет</p>

<? endif;?>
<form method="POST">
	<input type="text" name="title"><br> <br>
	<input type="date" name="p_date"><br> <br>

	<textarea name="discription"></textarea><br> <br>

	<input type="submit" name="add_diary">
</form>
</div>
</div>
</div>
<?php 
	include '/template/footer.php';

?>

