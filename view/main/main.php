<?php 
	include '/template/header.php'

?>




<div class="container-fluid">

  <div class="row justify-content-center align-items-center image">
  <div class="img-wrap">
  <img src="/template/image/1.jpg" alt="" class="img-fluid float-left">
  <div class="text">
  <p>Воспользуйтесь возможность и закажите сайт прямо сейчас по самой низкой цену прямо здесь, прямо сейчас</p>
  </div>
  </div>
 
  </div>
  <div class="row justify-content-center align-items-center ">

      <h1>Закажи сайт сегодня и получи скидку 30%</h1>

      <p class="lead">Воспользуйтесь возможность и закажите сайт прямо сейчас по самой низкой цену прямо здесь, прямо сейчас</p>
  </div>
  <div class="row justify-content-center ">
  <?if(!empty($serviceList)) :?>
  <? foreach ($serviceList as $items):?>

    <div class="col-md-3 head">
      <h3><?=$items['name'];?></h3>
      <p><?=$items['discription'];?></p>
    </div>   
<? endforeach; ?>

<? foreach ($serviceList as $items):?>

    <div class="col-md-3 head">
      <p><?=$items['price'];?> Рублей</p>
    </div>   
<? endforeach; ?>
<?php else: ?>
    <div class="col-md-12 head">
      <h3>Здесь пока свободно</h3>    
    </div>
<?php endif ?>

</div>

  <div class="row justify-content-center ">
      <div class="col-md-9 block1">
      <h3>Стартуем!</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias nulla doloribus soluta dolore dolor, tempora. Modi in natus totam magni consectetur. Iusto totam debitis culpa eum explicabo, maiores placeat possimus sit inventore.</p>
    </div>
     <div class="col-md-9 block1">
      <h3>Стартуем!</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias nulla doloribus soluta dolore dolor, tempora. Modi in natus totam magni consectetur. Iusto totam debitis culpa eum explicabo, maiores placeat possimus sit inventore.</p>
    </div>
     <div class="col-md-9 block1">
      <h3>Стартуем!</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias nulla doloribus soluta dolore dolor, tempora. Modi in natus totam magni consectetur. Iusto totam debitis culpa eum explicabo, maiores placeat possimus sit inventore.</p>
    </div>
  </div>

</div>
</div>



<?php 
	include '/template/footer.php'

?>
