<?php 
	include '/template/header.php'

?>

<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  <h5 class="my-0 mr-md-auto font-weight-normal">WebStudio</h5>
  <nav class="my-2 my-md-0 mr-md-3">
    <a class="p-2 text-dark" href="#">Главная</a>
    <a class="p-2 text-dark" href="#">Услуги</a>
    <a class="p-2 text-dark" href="#">О нас</a>
    <a class="p-2 text-dark" href="#">Поддержка</a>
  </nav>
  <?php if(Sign::isGuest()): ?>
  <a class="btn btn-outline-primary" href="/signin/">Sign up</a>
  <?php else: ?>
  <a class="btn btn-outline-primary" href="/logout/">Log Out</a>
<?php endif; ?>
</div>

<div class="container-fluid">
  <div class="row justify-content-center align-items-center">
      <h1>Закажи сайт сегодня и получи скидку 30%</h1>

      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure maiores laborum facere? Iusto incidunt a nesciunt cum beatae quam animi optio nobis quos, ratione, voluptatem consequuntur veniam, nulla excepturi voluptatum? Reprehenderit, dolorum placeat tempora sunt, consequuntur est delectus rerum tempore odio illum porro error esse amet labore non facere illo!</p>
  </div>
  
  <div class="row justify-content-center">
    <div class="col-md-3 head">
      <h3>Стартуем!</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias nulla doloribus soluta dolore dolor, tempora. Modi in natus totam magni consectetur. Iusto totam debitis culpa eum explicabo, maiores placeat possimus sit inventore.</p>
    </div>

    <div class="col-md-3 head">
      <h3>Стартуем!</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias nulla doloribus soluta dolore dolor, tempora. Modi in natus totam magni consectetur. Iusto totam debitis culpa eum explicabo, maiores placeat possimus sit inventore.</p>
    </div>

    <div class="col-md-3 head">
      <h3>Стартуем!</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias nulla doloribus soluta dolore dolor, tempora. Modi in natus totam magni consectetur. Iusto totam debitis culpa eum explicabo, maiores placeat possimus sit inventore.</p>
    </div>
 
  </div>

  <div class="row justify-content-center">
      <div class="col-md-9">
      <h3>Стартуем!</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias nulla doloribus soluta dolore dolor, tempora. Modi in natus totam magni consectetur. Iusto totam debitis culpa eum explicabo, maiores placeat possimus sit inventore.</p>
    </div>
     <div class="col-md-9">
      <h3>Стартуем!</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias nulla doloribus soluta dolore dolor, tempora. Modi in natus totam magni consectetur. Iusto totam debitis culpa eum explicabo, maiores placeat possimus sit inventore.</p>
    </div>
     <div class="col-md-9">
      <h3>Стартуем!</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias nulla doloribus soluta dolore dolor, tempora. Modi in natus totam magni consectetur. Iusto totam debitis culpa eum explicabo, maiores placeat possimus sit inventore.</p>
    </div>
  </div>

</div>
</div>



<?php 
	include '/template/footer.php'

?>
