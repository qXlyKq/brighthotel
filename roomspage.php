<?php include_once("includes/header.php") ?>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.html">BrightHotel</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Перемикання навігації">
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

<div class="block-30 block-30-sm item" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-10">
          <span class="subheading-sm">Номери</span>
          <h2 class="heading">Номери та люкси</h2>
        </div>
      </div>
    </div>
  </div>

    
    <div class="site-section bg-light">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-12 mb-5">
            
            <div class="block-3 d-md-flex">
              <div class="image" style="background-image: url('images/img_1.jpg'); "></div>
              <div class="text">

                <h2 class="heading">Одномісний номер</h2>
                <div class="price"><sup>$</sup><span class="number">150</span><sub>/за ніч</sub></div>
                <ul class="specs mb-5">
                  <li><strong>Дорослих:</strong> 1</li>
                  <li><strong>Категорія:</strong> Одномісний</li>
                  <li><strong>Зручності:</strong> Шафа з вішалками, HD телевізор, Телефон</li>
                  <li><strong>Площа:</strong> 20м<sup>2</sup></li>
                  <li><strong>Тип ліжка:</strong> Одне ліжко</li>
                </ul>

                <p><a href="#" class="btn btn-primary py-3 px-5">Детальніше</a></p>

              </div>
            </div>

          </div>  


          <div class="col-md-12 mb-5">
            
            <div class="block-3 d-md-flex">
              <div class="image order-2" style="background-image: url('images/img_2.jpg'); "></div>
              <div class="text order-1">
                
                <h2 class="heading">Сімейний номер</h2>
                <div class="price"><sup>$</sup><span class="number">245</span><sub>/за ніч</sub></div>
                <ul class="specs mb-5">
                  <li><strong>Дорослих:</strong> 3</li>
                  <li><strong>Категорія:</strong> Сімейний</li>
                  <li><strong>Зручності:</strong> Шафа, телевізор, телефон, кондиціонер</li>
                  <li><strong>Площа:</strong> 35м<sup>2</sup></li>
                  <li><strong>Тип ліжка:</strong> Два ліжка</li>
                </ul>

                <p><a href="#" class="btn btn-primary py-3 px-5">Детальніше</a></p>
                
              </div>
            </div>
          </div>  


          <div class="col-md-12">
            
            <div class="block-3 d-md-flex">
              <div class="image" style="background-image: url('images/img_3.jpg'); "></div>
              <div class="text">

                <h2 class="heading">Президентський люкс</h2>
                <div class="price"><sup>$</sup><span class="number">450</span><sub>/за ніч</sub></div>
                <ul class="specs mb-5">
                  <li><strong>Дорослих:</strong> 2</li>
                  <li><strong>Категорія:</strong> Люкс</li>
                  <li><strong>Зручності:</strong> Вітальня, телевізор, міні-бар, джакузі</li>
                  <li><strong>Площа:</strong> 50м<sup>2</sup></li>
                  <li><strong>Тип ліжка:</strong> Двоспальне</li>
                </ul>

                <p><a href="#" class="btn btn-primary py-3 px-5">Детальніше</a></p>

              </div>
            </div>
          </div>  
        </div>

        <div class="row mb-5 pt-5 justify-content-center">
            <div class="col-md-7 text-center section-heading">
              <h2 class="heading">Інші номери</h2>
              <p>Оберіть серед наших комфортабельних номерів той, який ідеально підійде саме вам.</p>
            </div>
          </div>

        <div class="row">
          <?php
            $query = "SELECT * FROM rooms ORDER BY id ASC";
            $result = mysqli_query($link, $query);
            if(mysqli_num_rows($result) > 0)
            {
                while($row = mysqli_fetch_array($result))
                {
                ?>
                <div class="col-lg-4 mb-5">
                  <form method="post" action="rooms.php?action=add&Id=<?php echo $row['Id']; ?>">
                    <div class="block-34">
                      <div class="image">
                        <a href="#"><img src="<?php echo $row['images']; ?>" alt="Зображення номера"></a>
                      </div>
                      <div class="text">
                        <h2 class="heading"><?php echo $row['Name']; ?></h2>
                        <div class="price"><sup>$</sup><span class="number"><?php echo $row['Price']; ?></span><sub>/за ніч</sub></div>
                        <ul class="specs">
                          <li><strong>Дорослих:</strong> <?php echo $row['Contain']; ?></li>
                          <li><strong>Категорія:</strong> <?php echo $row['Categories']; ?></li>
                          <li><strong>Зручності:</strong> <?php echo $row['Facilities']; ?></li>
                          <li><strong>Площа:</strong> <?php echo $row['Size']; ?>м<sup>2</sup></li>
                          <li><strong>Тип ліжка:</strong> <?php echo $row['Bedtype']; ?></li>
                        </ul>
                      </div>
                    </div>
                  </form>
                </div>
                <?php      
                  }
              }
          ?>  
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
                <div class="image align-self-center"><img src="images/person_3.jpg" alt="Фото гостя"></div>
                <div class="name-text align-self-center">
                  <h2 class="heading">Костянтин Бойко</h2>
                  <span class="meta">Задоволений клієнт</span>
                </div>
              </div>
              <div class="text">
                <blockquote>
                  <p>&rdquo; Прекрасне місце для відпочинку! Номер був чистим, персонал уважний і ввічливий. Обов’язково приїду ще раз! &ldquo;</p>
                </blockquote>
              </div>
            </div>

          </div>
          <div class="col-md-6 col-lg-4">

            <div class="block-33">
              <div class="vcard d-flex mb-3">
                <div class="image align-self-center"><img src="images/person_2.jpg" alt="Фото гостя"></div>
                <div class="name-text align-self-center">
                  <h2 class="heading">Валентина Корпачук</h2>
                  <span class="meta">Задоволена гостя</span>
                </div>
              </div>
              <div class="text">
                <blockquote>
                  <p>&rdquo; Дуже сподобалось перебування! Гарне співвідношення ціни та якості. Сніданок чудовий! &ldquo;</p>
                </blockquote>
              </div>
            </div>

          </div>
          <div class="col-md-6 col-lg-4">

            <div class="block-33">
              <div class="vcard d-flex mb-3">
                <div class="image align-self-center"><img src="images/person_1.jpg" alt="Фото гостя"></div>
                <div class="name-text align-self-center">
                  <h2 class="heading">Олена Труханова</h2>
                  <span class="meta">Задоволена клієнтка</span>
                </div>
              </div>
              <div class="text">
                <blockquote>
                  <p>&rdquo; Все було на найвищому рівні. Затишний готель, привітний персонал і комфортний номер. Рекомендую! &ldquo;</p>
                </blockquote>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

  <div class="block-22">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7 text-center">
            <h2 class="heading mb-4">Підписуйтеся, щоб отримувати наші пропозиції</h2>
            <form action="#" class="subscribe">
              <div class="form-group">
                <input type="email" class="form-control email" placeholder="Введіть свою електронну адресу">
                <button type="submit" class="btn btn-primary submit">Підписатися</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

<?php include_once("includes/footer.php") ?>
