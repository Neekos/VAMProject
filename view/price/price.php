<?php 
	include '/template/header.php'

?>
<section class="section__nav">
  <div class="container">
    
  </div>
</section>
<div class="container">
	
  <?if(!empty($serviceList)) :?>
  <? foreach ($serviceList as $items):?>
<div class="row justify-content-center ">
    <div class="col-md-12 ">
      <h3><?php echo '<a href="/price/view/'.$items['id'].'">'.$items['name'].'</a>'?></h3>
      <div class="col-md-4">
        
     
      <?php echo '<img class="service_img" src="'.$items['image'].'" alt="">'?>
       </div>
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