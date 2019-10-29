<?php 
	include '/template/header.php'

?>

  <div class="intro">
      <div class="container">
        <div class="row">
          <div class="col-md 12">
            <div class="intro__inner">
              <h2 class="intro__suptitle">Creating website for you</h2>
              <h1 class="intro__title">Welcome to VAMProject</h1>

              <button id="MyBtn" class="btn__inner">Заказать!</button> 
              
              <div id="myModal" class="modal">
                  <div class="modal-content">
                    <span class="close">&times;</span>
                    <h3>Оставьте заявку и мы с вами свяжемся!</h3><br><br>
                    <form action="" method="post">
                    <input type="text" placeholder="Имя" name = "name"> <br><br>

                    <input type="text" placeholder="Номер телефона" name = "phone"> <br><br>

                    <input type="email" placeholder="Электронная почта" name = "email"> <br><br>
                    
                   <textarea name="message" id="" cols="30" rows="10" placeholder="Ваше сообщение"></textarea>  <br><br>

                   <input type="submit" name="order" value="Отправить"><br><br>
                    </form>
                    

                  </div>
              
              </div>

            </div>
          </div>
        </div>        
      </div>
  </div>

  <section class="section">
    <div class="container">
      <div class="section__header">
        <h3 class="section__suptitle">Чем мы занимаемся</h3>
        <h2 class="section__title" >Мы занимаемся</h2>
        <div class="section__text">
          <p class="section__text__pp">Мы молодая и активная команда разработчиков которая может предложить вам разработку сайтов по низкой цене, а так же сопровождение проектов, их модернизацию и перенос на другие движки.</p>
        </div>
      </div>
      <div class="about">
        <a href="/galereya/">
          <div class="about__item">
            <div class="about__inner">
              <div class="about__img">
                <img src="..\template\image\about\2.jpg" alt="">
              </div>
              <div class="about__text">Фото и видео съемка</div>
            </div>
          </div>
        </a>
        <a href="/def/">
          <div class="about__item">
            <div class="about__inner">
              <div class="about__img">
                <img src="..\template\image\about\3.jpg" alt="">
              </div>
              <div class="about__text">Поддержка</div>
            </div>
          </div>
        </a>
        <a href="/price/">
          <div class="about__item">
            <div class="about__inner">
              <div class="about__img">
                <img src="..\template\image\about\4.jpg" alt="">
              </div>
              <div class="about__text">Создание сайтов</div>
            </div>
          </div>
        </a>
      </div>
    </div><!--Container-->
  </section>
  
  <div class="statistics">
    <div class="container">
      <div class="stat">
        <div class="stat__item">
          <div class="stat__count">0</div>
          <div class="stat__text">Выполнено проектов</div>
        </div>
        <div class="stat__item">
          <div class="stat__count">0</div>
          <div class="stat__text">Всего проектов</div>
        </div>
        <div class="stat__item">
          <div class="stat__count">0</div>
          <div class="stat__text">Клиентов</div>
        </div>
        <div class="stat__item">
          <div class="stat__count">0</div>
          <div class="stat__text">Успешных проектов</div>
        </div>
        <div class="stat__item">
          <div class="stat__count">0</div>
          <div class="stat__text">Провальных проектов</div>
        </div>  
      </div>
    </div>
  </div>

  <section class="section">
    <div class="container">
      <div class="section__header">
        <h3 class="section__suptitle">Что мы можем предложить</h3>
        <h2 class="section__title" >Наши услуги</h2>
      </div>
      <div class="services">
        <div class="services__item">
          <img src="http://placehold.it/60" alt="" class="services__icon">
          <div class="services__title">Услуга 1</div>
          <div class="services__text">
            В наличии у нас имееться специалист у которого большой опыт в видео и фото съемки и  обработки, который с легкость сможет устроить вам фото или видео сессию, за бесплатно :)
          </div>
            <a href="#">Перейти</a>
        </div>
        <div class="services__item">
          <img src="http://placehold.it/60" alt="" class="services__icon">
          <div class="services__title">Услуга 2</div>
          <div class="services__text">
            В наличии у нас имееться специалист у которого большой опыт в видео и фото съемки и  обработки, который с легкость сможет устроить вам фото или видео сессию, за бесплатно :)
          </div>
            <a href="#">Перейти</a>
        </div>
        <div class="services__item">
          <img src="http://placehold.it/60" alt="" class="services__icon">
          <div class="services__title">Услуга 3</div>
          <div class="services__text">
            В наличии у нас имееться специалист у которого большой опыт в видео и фото съемки и  обработки, который с легкость сможет устроить вам фото или видео сессию, за бесплатно :)
          </div>
            <a href="#">Перейти</a>
        </div>
      </div>
        <hr>
      <div class="services">
        <div class="services__item">
          <img src="http://placehold.it/60" alt="" class="services__icon">
          <div class="services__title">Услуга 4</div>
          <div class="services__text">
            В наличии у нас имееться специалист у которого большой опыт в видео и фото съемки и  обработки, который с легкость сможет устроить вам фото или видео сессию, за бесплатно :)
          </div>
            <a href="#">Перейти</a>
        </div>
        <div class="services__item">
          <img src="http://placehold.it/60" alt="" class="services__icon">
          <div class="services__title">Услуга 5</div>
          <div class="services__text">
            В наличии у нас имееться специалист у которого большой опыт в видео и фото съемки и  обработки, который с легкость сможет устроить вам фото или видео сессию, за бесплатно :)
          </div>
            <a href="#">Перейти</a>
        </div>
        <div class="services__item">
          <img src="http://placehold.it/60" alt="" class="services__icon">
          <div class="services__title">Услуга 6</div>
          <div class="services__text">
            В наличии у нас имееться специалист у которого большой опыт в видео и фото съемки и  обработки, который с легкость сможет устроить вам фото или видео сессию, за бесплатно :)
          </div>
          <a href="#">Перейти</a>
        </div>
      </div>
    </div>
  </section>




  <section class="section">
    <div class="container">
        <div class="wedo">
          <div class="wedo__item">
            <img src="http://placehold.it/570x420" alt="">
          </div>
          <div class="wedo__item">
            <div class="accordion">
              <div class="accordion__item">
                <div class="accordion__header">
                    <img src="http://placehold.it/40" alt="" class="accordion_icon">
                    <div class="accordion__title">Фотографии</div>
                </div>
                <div class="accordion__content"><p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid officiis quod, reiciendis minima id amet perferendis illo laborum architecto veritatis magnam unde vitae, deleniti quasi suscipit distinctio, ipsam laboriosam cum.</span>
                <span>Nostrum, natus voluptatum! Velit facilis sequi, obcaecati autem aperiam labore. Tempore dicta sapiente culpa, molestias, sequi quasi soluta, facere architecto deleniti consectetur totam magni minima amet harum nisi. Rem, sint!</span>
                <span>Dolores esse temporibus similique itaque ea deleniti aut, in laborum hic cumque perferendis facere non laudantium nostrum odit corporis, repudiandae voluptas dolorem consequuntur ad! Voluptates, quos, id. Consectetur, in, dignissimos!</span></p>
                </div>
              </div>
              <div class="accordion__item active">
                <div class="accordion__header">
                    <img src="http://placehold.it/40" alt="" class="accordion_icon">
                    <div class="accordion__title">Дизайн</div>
                </div>
                <div class="accordion__content"><p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid officiis quod, reiciendis minima id amet perferendis illo laborum architecto veritatis magnam unde vitae, deleniti quasi suscipit distinctio, ipsam laboriosam cum.</span>
                <span>Nostrum, natus voluptatum! Velit facilis sequi, obcaecati autem aperiam labore. Tempore dicta sapiente culpa, molestias, sequi quasi soluta, facere architecto deleniti consectetur totam magni minima amet harum nisi. Rem, sint!</span>
                <span>Dolores esse temporibus similique itaque ea deleniti aut, in laborum hic cumque perferendis facere non laudantium nostrum odit corporis, repudiandae voluptas dolorem consequuntur ad! Voluptates, quos, id. Consectetur, in, dignissimos!</span></p>
                </div>
              </div>
              <div class="accordion__item">
                <div class="accordion__header">
                    <img src="http://placehold.it/40" alt="" class="accordion_icon">
                    <div class="accordion__title">Поддержка</div>
                </div>
                <div class="accordion__content"><p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid officiis quod, reiciendis minima id amet perferendis illo laborum architecto veritatis magnam unde vitae, deleniti quasi suscipit distinctio, ipsam laboriosam cum.</span>
                <span>Nostrum, natus voluptatum! Velit facilis sequi, obcaecati autem aperiam labore. Tempore dicta sapiente culpa, molestias, sequi quasi soluta, facere architecto deleniti consectetur totam magni minima amet harum nisi. Rem, sint!</span>
                <span>Dolores esse temporibus similique itaque ea deleniti aut, in laborum hic cumque perferendis facere non laudantium nostrum odit corporis, repudiandae voluptas dolorem consequuntur ad! Voluptates, quos, id. Consectetur, in, dignissimos!</span></p>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </section>

  <div class="section section--gray">
    <div class="container">
      
      <div class="reviews">
        <a href="#" class="reviews__btn reviews__btn--prev">Prev</a>
        <a href="#" class="reviews__btn reviews__btn--next">Next</a>
        <div class="reviews__item">
          <img src="http://placehold.it/145" alt="" class="reviews__photo">
          <div class="reviews__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor accusamus officiis, in enim repudiandae laudantium est distinctio tempora veritatis cum esse voluptate rem numquam repellat voluptas sequi ipsa sunt voluptatibus.</div>
          <div class="reviews__author">Витя</div>
        </div>
      </div>

    </div>
  </div>

  <section class="section">
    <div class="container">
      <div class="section__header">
        <h3 class="section__suptitle">Давайте знакомится</h3>
        <h2 class="section__title" >Наша команда</h2>
        <div class="section__text">
          <p class="section__text__pp">Мы молодая и активная команда разработчиков которая может предложить вам разработку сайтов по низкой цене, а так же сопровождение проектов, их модернизацию и перенос на другие движки.</p>
        </div>
      </div>
      <div class="about">
          <div class="about__item">
            <div class="about__inner">
              <div class="about__img">
                <img src="http://placehold.it/380x520" alt="">
              </div>
              <div class="about__text">
                <div class="social">
                  <a href="https://www.instagram.com/llneekll/" class="social__item" target="blank">
                    <i class="fab fa-instagram"></i>
                  </a>
                  <a href="https://vk.com/id508702339" class="social__item" target="blank">
                    <i class="fab fa-vk"></i>
                  </a>
                </div>
              </div>
            </div>
              <div class="about__info">
                <div class="about__name">Андрей</div>
                <div class="about__profession">Разработчик</div>
              </div>
          </div>

          <div class="about__item">
            <div class="about__inner">
              <div class="about__img">
                <img src="http://placehold.it/380x520" alt="">
              </div>
              <div class="about__text">
                <div class="social">
                  <a href="" class="social__item" target="blank">
                    <i class="fab fa-instagram"></i>
                  </a>
                  <a href="https://vk.com/id132447479" class="social__item" target="blank">
                    <i class="fab fa-vk"></i>
                  </a>
                </div>
              </div>
            </div>
              <div class="about__info">
                <div class="about__name">Виктор</div>
                <div class="about__profession">Разработчик</div>
              </div>
          </div>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="section__header">
        <h3 class="section__suptitle">Что мы используем</h3>
        <h2 class="section__title" >Наши технологии</h2>
        <div class="section__text">
          <p class="section__text__pp">Мы учимся и развивам наши навыки и ищем самое лучшее что бы  сделать все возможное, что вам необходимо.</p>
        </div>
      </div>
      <div class="logos">
        <div class="logos__item">
          <i class="fab fa-github"></i>
        </div>
        <div class="logos__item">
          <i class="fab fa-github"></i>
        </div>
        <div class="logos__item">
          <i class="fab fa-github"></i>
        </div>
        <div class="logos__item">
          <i class="fab fa-github"></i>
        </div>
        <div class="logos__item">
          <i class="fab fa-github"></i>
        </div>
        <div class="logos__item">
          <i class="fab fa-github"></i>
        </div>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="section__header">
        <h3 class="section__suptitle">Наши работы</h3>
        <h2 class="section__title" >Мы разрабатываем</h2>
        <div class="section__text">
          <p class="section__text__pp">Мы учимся и развивам наши навыки и ищем самое лучшее что бы  сделать все возможное, что вам необходимо.</p>
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
            <img src="http://placehold.it/400x800" alt="" class="works__img">
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


  <div class="section section">
    <div class="container">
      
      <div class="reviews">
        <a href="#" class="reviews__btn reviews__btn--prev">Prev</a>
        <a href="#" class="reviews__btn reviews__btn--next">Next</a>
        <div class="reviews__item">
          <img src="http://placehold.it/145" alt="" class="reviews__photo">
          <div class="reviews__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor accusamus officiis, in enim repudiandae laudantium est distinctio tempora veritatis cum esse voluptate rem numquam repellat voluptas sequi ipsa sunt voluptatibus.</div>
          <div class="reviews__author">Витя</div>
        </div>
      </div>

    </div>
  </div>

  <section class="section section--clients">
    <div class="container">
      <div class="section__header">
        <h3 class="section__suptitle">Наши клиенты</h3>
        <h2 class="section__title" >Что о нас говорят</h2>
        <div class="section__text">
        </div>
      </div>
      <div class="clients">
        <div class="clients__item">
          <img src="http://placehold.it/110" alt="" class="clients__photo">
          <div class="clients__content">
            <div class="clients__name">Эдуард</div>
            <div class="clients__prof">Дизайнер</div>
            <div class="clients__text">Я считаю что эти парни достойны Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga aperiam magnam incidunt repudiandae iusto eaque quia quae facere, officia veritatis quidem ab ducimus neque repellat dolorem placeat totam illum commodi?
            </div>
          </div>
        </div>
        <div class="clients__item">
          <img src="http://placehold.it/110" alt="" class="clients__photo">
          <div class="clients__content">
            <div class="clients__name">Эдуард</div>
            <div class="clients__prof">Дизайнер</div>
            <div class="clients__text">Я считаю что эти парни достойны Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga aperiam magnam incidunt repudiandae iusto eaque quia quae facere, officia veritatis quidem ab ducimus neque repellat dolorem placeat totam illum commodi?
            </div>
          </div>
        </div>
        <div class="clients__item">
          <img src="http://placehold.it/110" alt="" class="clients__photo">
          <div class="clients__content">
            <div class="clients__name">Эдуард</div>
            <div class="clients__prof">Дизайнер</div>
            <div class="clients__text">Я считаю что эти парни достойны Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga aperiam magnam incidunt repudiandae iusto eaque quia quae facere, officia veritatis quidem ab ducimus neque repellat dolorem placeat totam illum commodi?
            </div>
          </div>
        </div>
        <div class="clients__item">
          <img src="http://placehold.it/110" alt="" class="clients__photo">
          <div class="clients__content">
            <div class="clients__name">Эдуард</div>
            <div class="clients__prof">Дизайнер</div>
            <div class="clients__text">Я считаю что эти парни достойны Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga aperiam magnam incidunt repudiandae iusto eaque quia quae facere, officia veritatis quidem ab ducimus neque repellat dolorem placeat totam illum commodi?
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="section__header">
        <h3 class="section__suptitle">Истории</h3>
        <h2 class="section__title" >О чем мы говорим</h2>
        <div class="section__text">
        </div>
      </div>
      <div class="blog">
        <a href="">
          <div class="blog__item">
            <div class="blog__header">
              <img class="blog__photo" src="http://placehold.it/400" alt="">
              <div class="blog__date">
                <div class="blog__date-day">15</div>jan
              </div>
            </div>
            <div class="blog__content">
              <a href=""><div class="blog__title">title</div></a>
              <div class="blog__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo laborum beatae ex in tempore sed maxime, rerum doloribus. Repudiandae aut eligendi dolorem labore aliquid ratione, consectetur ut vel architecto perspiciatis?</div>
            </div>
            <div class="blog__foote">
              <div class="blog__stat">
                <span class="blog__stat_item">
                  23<i class="far fa-eye"></i>
                </span>
                <span class="blog__stat_item">
                  4<i class="far fa-comment-dots"></i>
                </span>
              </div>
            </div>
          </div>
        </a>
        <a href="">
          <div class="blog__item">
            <div class="blog__header">
              <img class="blog__photo" src="http://placehold.it/400" alt="">
              <div class="blog__date">
                <div class="blog__date-day">15</div>jan
              </div>
            </div>
            <div class="blog__content">
              <a href=""><div class="blog__title">title</div></a>
              <div class="blog__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam labore iste facilis consequatur sequi nesciunt expedita consequuntur at maiores, nulla nostrum qui commodi repudiandae neque sint magnam nisi quas eos.</div>
            </div>
            <div class="blog__foote">
              <div class="blog__stat">
                <span class="blog__stat_item">
                  23<i class="far fa-eye"></i>
                </span>
                <span class="blog__stat_item">
                  4<i class="far fa-comment-dots"></i>
                </span>
              </div>
            </div>
          </div>
        </a>
        <a href="">
          <div class="blog__item">
            <div class="blog__header">
              <img class="blog__photo" src="http://placehold.it/400" alt="">
              <div class="blog__date">
                <div class="blog__date-day">15</div>jan
              </div>
            </div>
            <div class="blog__content">
              <a href=""><div class="blog__title">title</div></a>
              <div class="blog__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, possimus, consequuntur tempore corporis dicta veritatis vel accusamus incidunt enim officiis consequatur rem sapiente, at veniam, quia inventore dolorum fugit quibusdam.</div>
            </div>
            <div class="blog__foote">
              <div class="blog__stat">
                <span class="blog__stat_item">
                  23<i class="far fa-eye"></i>
                </span>
                <span class="blog__stat_item">
                  4<i class="far fa-comment-dots"></i>
                </span>
              </div>
            </div>
          </div>
        </a>

      </div>
    </div>
  </section>


<?php 
	include '/template/footer.php'

?>
