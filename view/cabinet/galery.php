<?php 
	include '/template/header.php';

?>
<section class="section__nav">
	<div class="container">
		
	</div>
</section>
<div class="container">
<h2>Редактировать галерею</h2>

<table class="table table-light">
  <thead>
    <tr>
      <th scope="col">№</th>
      <th scope="col">Тема</th>
     
     
    </tr>
  </thead>
<tbody>
<?if(!empty($serviceList)) :?>
<? foreach ($serviceList as $items):?>

    <tr>

      <td><?=$items['id'];?></td>
      <td><?=$items['name'];?></td>
      
	  <td><?php echo '<a href="/cabinet/redgalery/'.$items['id'].'">Редактировать</a>'?></td>
	  <td><?php echo '<a href="/cabinet/delgalery/'.$items['id'].'">Удалить</a>'?></td>
    </tr>
<? endforeach;?>
<? else: ?>
	<tr>
	<td>Записей нет</td>
	</tr>
<? endif;?>
  </tbody>
</table>

<form method="POST" enctype="multipart/form-data">
	<input type="text" name="name" placeholder="Наименование"><br> <br>	
	
					
	<input type="file" name="image" value="Обзор"><br><br>				
	
	<input type="submit" name="add_galery">
</form>
</div>
<?php 
	include '/template/footer.php';

?>