<?php 
	include '/template/header.php';

?>
<section class="section__nav">
	<div class="container">
		
	</div>
</section>
<div class="container">
<h2>Редактировать</h2>



<form method="POST" enctype="multipart/form-data">
	<?php if(isset($serviceView)): ?>

	

	<?php echo '<input type="text" name="name" value="'.$serviceView['name'].'"'?>">
	<br> <br>	
	<?php echo '<textarea name="discription">'.$serviceView['discription'].'</textarea>'?> 
	<br> <br>
	<?if(isset($selectType)):?>

					<select name="type_service" class="">

					<?foreach ($selectType as $item) :?>
				
						<option class=""><?=$item['ID'];?>|<?=$item['type'];?></option>

					<?endforeach;?>	

	<?endif;?>
					</select>
	<br> <br>
	<input type="file" name="image" value="Обзор"><br><br>				
	<?php echo '<input type="text" name="price" value="'.$serviceView['price'].'"'?>"> <br> <br>
	<input type="submit" name="red_service">
	<?endif;?>
</form>
</div>
<?php 
	include '/template/footer.php';

?>