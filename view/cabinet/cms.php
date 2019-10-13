<?php 
	include '/template/header.php';

?>
<div class="container-fluid">
<h2>Редактировать</h2>

<table class="table table-light">
  <thead>
    <tr>
      <th scope="col">№</th>
      <th scope="col">Наименование</th>
      <th scope="col">Описание</th>
      <th scope="col">Тип Услуги</th>
      <th scope="col">Цена</th>
     
    </tr>
  </thead>
<tbody>
<?if(!empty($serviceList)) :?>
<? foreach ($serviceList as $items):?>

    <tr>

      <td><?=$items['id'];?></td>
      <td><?=$items['name'];?></td>
      <td><?=$items['discription'];?></td>
      <td><?=$items['type'];?></td>
      <td><?=$items['price'];?></td>

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
	<input type="text" name="name"><br> <br>	
	<textarea name="discription"></textarea><br> <br>
	<?if(isset($selectType)):?>

					<select name="type_service" class="">

					<?foreach ($selectType as $item) :?>
				
						<option class=""><?=$item['ID'];?>|<?=$item['type'];?></option>

					<?endforeach;?>	

	<?endif;?>
					</select>
	<br> <br>
	<input type="file" name="image" value="Обзор"><br><br>				
	<input type="text" name="price"><br> <br>
	<input type="submit" name="add_service">
</form>
</div>
<?php 
	include '/template/footer.php';

?>