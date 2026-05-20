<?php include_once("includes/header.php") ?>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
  <div class="container">
    <a class="navbar-brand" href="index.php">BrightHotel</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav">
      <span class="oi oi-menu"></span> Меню
    </button>
    <div class="collapse navbar-collapse" id="ftco-nav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a href="index.php" class="nav-link">Головна</a></li>
        <li class="nav-item"><a href="roomspage.php" class="nav-link">Номери</a></li>
        <li class="nav-item"><a href="bookingpage.php" class="nav-link">Бронювання</a></li>
        <li class="nav-item"><a href="about.php" class="nav-link">Про нас</a></li>
        <li class="nav-item"><a href="blog.php" class="nav-link">Блог</a></li>
        <li class="nav-item active"><a href="contact.php" class="nav-link">Контакти</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Слайдер -->
<div class="block-31" style="position: relative;">
  <div class="owl-carousel loop-block-31 ">
    <div class="block-30 item" style="background-image: url('images/bg_3.jpg');" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-10">
            <span class="subheading-sm">Контакти</span>
            <h2 class="heading">Зв’яжіться з нами</h2>
            <p><a href="#contact-form" class="btn py-4 px-5 btn-primary">Написати</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Форма контакту -->
<div class="site-section bg-light" id="contact-form">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md-7 section-heading">
        <span class="subheading-sm">Контакти</span>
        <h2 class="heading">Ми завжди на зв’язку</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 mb-5">
        <form action="#" method="post">
          <div class="form-group">
            <label for="name">Ім’я</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Ваше ім’я">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Ваш email">
          </div>
          <div class="form-group">
            <label for="message">Повідомлення</label>
            <textarea class="form-control" id="message" name="message" rows="5" placeholder="Ваше повідомлення"></textarea>
          </div>
          <input type="submit" class="btn btn-primary" value="Надіслати">
        </form>
      </div>
      <div class="col-md-6">
        <div class="contact-info">
          <h3>Наші контакти</h3>
          <p>Адреса: вул. Прикладна, 10, Київ, Україна</p>
          <p>Телефон: +380 44 123 4567</p>
          <p>Email: info@brighthotel.com</p>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include_once("includes/footer.php") ?>
