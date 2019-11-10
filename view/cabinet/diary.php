<?php 
	include '/template/header.php';

?>
<section class="section__nav">
	<div class="container">
		
	</div>
</section>
<h3>Дневник разработки</h3>
<div class="container">
	<div class="row">

<?if(!empty($DiaryList)) :?>
<? foreach ($DiaryList as $item):?>
	<div class="col-md-12 title"><h3><?=$item['title'];?></h3><?=$item['p_date'];?></div>
	<div class="col-md-12 title"><p><?=$item['discription'];?></p></div>
	
<? endforeach; ?>
<? else: ?>
	<p>Записей нет</p>

<? endif;?>
	</div>
<div class="row">
<div class="col-md-12">
<form method="POST">
	<input type="text" name="title"><br> <br>
	<input type="date" name="p_date"><br> <br>

	<textarea name="discription"></textarea><br> <br>

	<input type="submit" name="add_diary">
</form>
</div>
</div>
</div></div>
<?php 
	include '/template/footer.php';

?>

