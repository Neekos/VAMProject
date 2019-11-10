<?php 
	include '/template/header.php'

?>

<section class="section__nav">
	<div class="container">
		
	</div>
</section>
<section class="section">
    <div class="container">
      <div class="section__header">
        
        <h2 class="section__title" >Галерея</h2>
        <div class="section__text">
          <p class="section__text__pp">Здесь находятся яркие и не забываемы истории наших приключений запечатленных на камеру </p>
        </div>
      </div>
      
    </div>
    <div class="works">
        <div class="works__col">
          <div class="works__item">
            <img src="http://placehold.it/400" alt="" class="works__img">
            <div class="works__info">
            <div class="works__title">titel</div>
            <div class="works_text">text</div>
           </div> 
          </div>
          <div class="works__item">
            <img src="http://placehold.it/400" alt="" class="works__img">
            <div class="works__info">
            <div class="works__title">titel</div>
            <div class="works_text">text</div>
           </div> 
          </div>
        </div>
        <div class="works__col">
          <div class="works__item">
            <img src="http://placehold.it/400" alt="" class="works__img">
            <div class="works__info">
            <div class="works__title">titel</div>
            <div class="works_text">text</div>
           </div> 
          </div>
          <div class="works__item">
            <img src="http://placehold.it/400" alt="" class="works__img">
            <div class="works__info">
            <div class="works__title">titel</div>
            <div class="works_text">text</div>
           </div> 
          </div>
        </div>
        <div class="works__col">
           <div class="works__item">
            <img src="http://placehold.it/400" alt="" class="works__img">
            <div class="works__info">
            <div class="works__title">titel</div>
            <div class="works_text">text</div>
           </div> 
          </div>
          <div class="works__item">
            <img src="http://placehold.it/400" alt="" class="works__img">
            <div class="works__info">
            <div class="works__title">titel</div>
            <div class="works_text">text</div>
           </div> 
          </div>
        </div>
        
        <div class="works__col">
           <div class="works__item">
            <img src="http://placehold.it/400" alt="" class="works__img">
            <div class="works__info">
            <div class="works__title">titel</div>
            <div class="works_text">text</div>
           </div> 
          </div>
          <div class="works__item">
            <img src="http://placehold.it/400" alt="" class="works__img">
            <div class="works__info">
            <div class="works__title">titel</div>
            <div class="works_text">text</div>
           </div> 
          </div>
        </div>
        <div class="works__col">
          <div class="works__item">
            <img src="http://placehold.it/400" alt="" class="works__img">
            <div class="works__info">
            <div class="works__title">titel</div>
            <div class="works_text">text</div>
           </div> 
          </div>
          <div class="works__item">
            <img src="http://placehold.it/400" alt="" class="works__img">
            <div class="works__info">
            <div class="works__title">titel</div>
            <div class="works_text">text</div>
           </div> 
          </div>
        </div>
      </div>
  </section>
  <!--

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
-->
<?php 
	include '/template/footer.php'

?>