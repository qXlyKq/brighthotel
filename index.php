<?php include_once("includes/header.php") ?>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.php">BrightHotel</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Меню
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="index.php" class="nav-link">Головна</a></li>
          <li class="nav-item"><a href="roomspage.php" class="nav-link">Номери</a></li>
          <li class="nav-item"><a href="bookingpage.php" class="nav-link">Бронювання</a></li>
          <li class="nav-item"><a href="about.php" class="nav-link">Про нас</a></li>
          <li class="nav-item"><a href="blog.php" class="nav-link">Блог</a></li>
          <li class="nav-item"><a href="contact.php" class="nav-link">Контакти</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- END nav -->
<div class="block-31" style="position: relative;">
    <div class="owl-carousel loop-block-31 ">
      <div class="block-30 item" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-10">
              <span class="subheading-sm">Ласкаво просимо</span>
              <h2 class="heading">Насолоджуйтесь розкішним відпочинком</h2>
              <p><a href="#" class="btn py-4 px-5 btn-primary">Дізнатись більше</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="block-30 item" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-10">
              <span class="subheading-sm">Ласкаво просимо</span>
              <h2 class="heading">Просто та елегантно</h2>
              <p><a href="#" class="btn py-4 px-5 btn-primary">Дізнатись більше</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="block-30 item" style="background-image: url('images/bg_3.jpg');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-10">
              <span class="subheading-sm">Ласкаво просимо</span>
              <h2 class="heading">Їжа та напої</h2>
              <p><a href="#" class="btn py-4 px-5 btn-primary">Дізнатись більше</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="container">
      <div class="row mb-5">
        <div class="col-md-12">

          <div class="block-32">
            <form action="#">
              <div class="row">
                <div class="col-md-6 mb-3 mb-lg-0 col-lg-3">
                  <label for="checkin">Дата заїзду</label>
                  <div class="field-icon-wrap">
                    <div class="icon"><span class="icon-calendar"></span></div>
                    <input type="text" id="checkin_date" class="form-control">
                  </div>
                </div>
                <div class="col-md-6 mb-3 mb-lg-0 col-lg-3">
                  <label for="checkout">Дата виїзду</label>
                  <div class="field-icon-wrap">
                    <div class="icon"><span class="icon-calendar"></span></div>
                    <input type="text" id="checkout_date" class="form-control">
                  </div>
                </div>
                <div class="col-md-6 mb-3 mb-md-0 col-lg-3">
                  <div class="row">
                    <div class="col-md-6 mb-3 mb-md-0">
                      <label>Дорослі</label>
                      <div class="field-icon-wrap">
                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                        <select class="form-control">
                          <option value="">1</option>
                          <option value="">2</option>
                          <option value="">3</option>
                          <option value="">4+</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6 mb-3 mb-md-0">
                      <label>Діти</label>
                      <div class="field-icon-wrap">
                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                        <select class="form-control">
                          <option value="">0</option>
                          <option value="">1</option>
                          <option value="">2</option>
                          <option value="">3+</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-3 align-self-end">
                  <a href="bookingpage.php">
                    <input class="btn btn-primary btn-block" value="Перевірити наявність"/>
                  </a>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      
      <div class="row site-section">
        <div class="col-md-12">
          <div class="row mb-5">
            <div class="col-md-7 section-heading">
              <span class="subheading-sm">Послуги</span>
              <h2 class="heading">Зручності та сервіси</h2>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="media block-6">
            <div class="icon"><span class="flaticon-double-bed"></span></div>
            <div class="media-body">
              <h3 class="heading">Розкішні номери</h3>
              <p>Комфорт, затишок та стиль — усе, що потрібно для ідеального відпочинку.</p>
            </div>
          </div>      
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="media block-6">
            <div class="icon"><span class="flaticon-wifi"></span></div>
            <div class="media-body">
              <h3 class="heading">Швидкий та безкоштовний Wi-Fi</h3>
              <p>Будьте онлайн у будь-який момент вашого перебування.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="media block-6">
            <div class="icon"><span class="flaticon-customer-service"></span></div>
            <div class="media-body">
              <h3 class="heading">Підтримка 24/7</h3>
              <p>Наші адміністратори завжди готові допомогти вам у будь-який час.</p>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="media block-6">
            <div class="icon"><span class="flaticon-taxi"></span></div>
            <div class="media-body">
              <h3 class="heading">Трансфер та подорожі</h3>
              <p>Ми подбаємо про ваш комфортний доїзд до готелю або міста.</p>
            </div>
          </div>      
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="media block-6">
            <div class="icon"><span class="flaticon-credit-card"></span></div>
            <div class="media-body">
              <h3 class="heading">Оплата карткою</h3>
              <p>Зручні способи оплати — приймаємо всі основні банківські карти.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="media block-6">
            <div class="icon"><span class="flaticon-dinner"></span></div>
            <div class="media-body">
              <h3 class="heading">Ресторан</h3>
              <p>Скуштуйте смачні страви від нашого шеф-кухаря з натуральних продуктів.</p>
            </div>
          </div>
        </div>

      </div>
    </div>

    <div class="site-section block-13 bg-light">
      <div class="container">
         <div class="row mb-5">
            <div class="col-md-7 section-heading">
              <span class="subheading-sm">Популярні номери</span>
              <h2 class="heading">Номери та люкси</h2>
              <p>Обирайте серед наших найкращих номерів — від стандартів до розкішних апартаментів.</p>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <div class="nonloop-block-13 owl-carousel">
                  <?php include_once("includes/rooms.php")?>
              </div>
            </div>
          </div>
      </div>
    </div>

    <div class="site-section bg-light">
      <div class="container">
        <div class="row mb-5">
            <div class="col-md-7 section-heading">
              <span class="subheading-sm">Меню</span>
              <h2 class="heading">Ресторан</h2>
            </div>
          </div>

        <div class="block-35">
          <ul class="nav" id="pills-tab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab">Сніданок</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab">Обід</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab">Вечеря</a>
            </li>
          </ul>

          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel">
              <div class="row">
                <div class="col-md-12 block-13">
                  <div class="nonloop-block-13 owl-carousel">
                    <?php include_once("includes/foods/breakfast.php")?>
                  </div>
                </div>
              </div>
            </div>

            <div class="tab-pane fade" id="pills-profile" role="tabpanel">
              <div class="row">
                <div class="col-md-12 block-13">
                  <div class="nonloop-block-13 owl-carousel">
                    <?php include_once("includes/foods/lunch.php")?>
                  </div>
                </div>
              </div>
            </div>

            <div class="tab-pane fade" id="pills-contact" role="tabpanel">
              <div class="row">
                <div class="col-md-12 block-13">
                  <div class="nonloop-block-13 owl-carousel">
                    <?php include_once("includes/foods/dinner.php")?>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="block-30 block-30-sm item" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-12">
              <h2 class="heading">Якість, що перевищує очікування</h2>
              <p><a href="#" class="btn py-4 px-5 btn-primary">Дізнатись більше</a></p>
            </div>
          </div>
        </div>
      </div>

    <div class="site-section bg-light">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-7 section-heading">
            <span class="subheading-sm">Відгуки</span>
            <h2 class="heading">Відгуки гостей</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4">
            <div class="block-33">
              <div class="vcard d-flex mb-3">
                <div class="image align-self-center"><img src="images/person_3.jpg" alt="Person"></div>
                <div class="name-text align-self-center">
                  <h2 class="heading">Костянтин Бойко</h2>
                  <span class="meta">Задоволений клієнт</span>
                </div>
              </div>
              <div class="text">
                <blockquote>
                  <p>&rdquo; Прекрасне місце! Затишно, чисто, персонал дуже привітний. Обов’язково повернусь! &ldquo;</p>
                </blockquote>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4">
            <div class="block-33">
              <div class="vcard d-flex mb-3">
                <div class="image align-self-center"><img src="images/person_2.jpg" alt="Person"></div>
                <div class="name-text align-self-center">
                  <h2 class="heading">Валентина Корпачук</h2>
                  <span class="meta">Постійна гостя</span>
                </div>
              </div>
              <div class="text">
                <blockquote>
                  <p>&rdquo; Дуже комфортний готель, чудовий ресторан і гарний вид з вікна. Рекомендую всім! &ldquo;</p>
                </blockquote>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4">
            <div class="block-33">
              <div class="vcard d-flex mb-3">
                <div class="image align-self-center"><img src="images/person_1.jpg" alt="Person"></div>
                <div class="name-text align-self-center">
                  <h2 class="heading">Олена Труханова</h2>
                  <span class="meta">Щаслива гостя</span>
                </div>
              </div>
              <div class="text">
                <blockquote>
                  <p>&rdquo; Все на найвищому рівні — сервіс, чистота і кухня. Дякую за приємний відпочинок! &ldquo;</p>
                </blockquote>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<?php include_once("includes/footer.php") ?>
