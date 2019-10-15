<?php 
	include '/template/header.php'

?>

<section class="section__nav">
	<div class="container">
		
	</div>
</section>
	<div class="container">
		<div class="row">
			Тут фотографии
			<?if(!empty($photolist)) :?>
				<? foreach ($photolist as $item):?>
				<div class="col-md-12 title"><h3> <?=$item['id'];?></h3></div>
				<? endforeach; ?>
				<? else: ?>
				<p>Записей нет</p>
				
			<? endif;?>
		</div>
	</div>

<?php 
	include '/template/footer.php'

?>