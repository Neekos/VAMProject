<?php 
	include '/template/header.php'

?>
<div class="container-fluid">
	
  <?if(isset($serviceView)) :?>
<div class="row justify-content-center ">
    <div class="col-md-12 ">
      <h3><?=$serviceView['name'];?></h3>
      <p><?=$serviceView['discription'];?></p>
      <p><?=$serviceView['price'];?> Рублей</p>
    </div>
 </div>   
  
<?php endif ?>


</div>
<?php 
	include '/template/footer.php'

?>