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
        <li class="nav-item active"><a href="blog.php" class="nav-link">Блог</a></li>
        <li class="nav-item"><a href="contact.php" class="nav-link">Контакти</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Слайдер -->
<div class="block-31" style="position: relative;">
  <div class="owl-carousel loop-block-31 ">
    <div class="block-30 item" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-10">
            <span class="subheading-sm">Новини</span>
            <h2 class="heading">Свіжі поради та оновлення</h2>
            <p><a href="#" class="btn py-4 px-5 btn-primary">Читати далі</a></p>
          </div>
        </div>
      </div>
    </div>
    <div class="block-30 item" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-10">
            <span class="subheading-sm">Блог</span>
            <h2 class="heading">Ідеї для ідеального відпочинку</h2>
            <p><a href="#" class="btn py-4 px-5 btn-primary">Читати далі</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Секція постів -->
<div class="site-section bg-light">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md-7 section-heading">
        <span class="subheading-sm">Блог</span>
        <h2 class="heading">Останні статті та поради</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 col-lg-4">
        <div class="blog-entry">
          <a href="#"><img src="images/blog_1.jpg" alt="Blog" class="img-fluid"></a>
          <h3><a href="#">Літній відпочинок у готелі BrightHotel</a></h3>
          <p>Дізнайтеся про наші спеціальні пропозиції для літнього сезону та організуйте незабутній відпочинок.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="blog-entry">
          <a href="#"><img src="images/blog_2.jpg" alt="Blog" class="img-fluid"></a>
          <h3><a href="#">Кращі ресторани поруч з готелем</a></h3>
          <p>Ми зібрали для вас найсмачніші місця, де можна спробувати місцеву та міжнародну кухню.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="blog-entry">
          <a href="#"><img src="images/blog_3.jpg" alt="Blog" class="img-fluid"></a>
          <h3><a href="#">Тури та екскурсії для гостей</a></h3>
          <p>Ознайомтесь з нашими екскурсійними пропозиціями та відчуйте красу регіону разом з нами.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include_once("includes/footer.php") ?>
