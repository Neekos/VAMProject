<?php 
	include '/template/header.php'

?>
<div class="container-fluid">
	
  <?if(!empty($serviceList)) :?>
  <? foreach ($serviceList as $items):?>
<div class="row justify-content-center ">
    <div class="col-md-12 ">
      <a href=""><h3><?=$items['name'];?></h3></a>
      <p><?=$items['discription'];?></p>
      <p><?=$items['price'];?> Рублей</p>
    </div>
 </div>   
<? endforeach; ?>




     
      

<?php else: ?>
    <div class="col-md-4 head">
      <h3>Здесь пока свободно</h3>    
    </div>
<?php endif ?>


</div>
<?php 
	include '/template/footer.php'

?>