<?php 
	include '/template/header.php'

?>
<section class="section__nav">
  <div class="container">
    
  </div>
</section>
<div class="container">
	
  <?if(isset($serviceView)) :?>
<div class="row justify-content-center ">
    <div class="col-md-12 ">

	<h3><?=$serviceView['name'];?></h3>
	<div class="col-md-3">

      <?php echo '<img class="service_img" src="'.$serviceView['image'].'" alt="">'?>
	</div>
      <br>
      
      <p><?=$serviceView['discription'];?></p>
      <p><?=$serviceView['price'];?> Рублей</p>
    </div>
 </div>   
  
<?php endif ?>


</div>
<?php 
	include '/template/footer.php'

?>
