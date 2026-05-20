<?php
session_start();
include_once("includes/header.php");
include_once("includes/db.php"); // якщо у header немає підключення до БД

if (isset($_POST['save'])) {
    $sql = "INSERT INTO reservation (country, rooms, checkin, checkout, norooms, noadults, nochildren, firstname, lastname, email, phone)
            VALUES (
                '" . $_POST["country"] . "',
                '" . $_POST["rooms"] . "',
                '" . $_POST["checkin"] . "',
                '" . $_POST["checkout"] . "',
                '" . $_POST["norooms"] . "',
                '" . $_POST["noadults"] . "',
                '" . $_POST["nochildren"] . "',
                '" . $_POST["firstname"] . "',
                '" . $_POST["lastname"] . "',
                '" . $_POST["email"] . "',
                '" . $_POST["phone"] . "'
            )";

    $result = mysqli_query($link, $sql);

    if ($result) {
        echo "<script>alert('✅ Ваше бронювання успішно збережено!');</script>";
    } else {
        echo "<script>alert('❌ Помилка: не вдалося зберегти бронювання.');</script>";
    }
}
?>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.php">BrightHotel</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
        aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
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

<div id="booking" class="section">
    <div class="section-center">
        <div class="container">
            <div class="row">
                <div class="booking-form">
                    <div class="form-header">
                        <h1>Забронюйте номер</h1>
                    </div>
                    <form method="POST" action="">
                        <div class="form-group">
                            <input class="form-control" name="country" type="text" placeholder="Країна, місто...">
                            <span class="form-label">Місце призначення</span>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <select class="form-control" name="rooms" required>
                                        <option value="" selected hidden>Оберіть номер</option>
                                        <option>Одинарний</option>
                                        <option>Сімейний</option>
                                        <option>Президентський</option>
                                        <option>Двомісний</option>
                                        <option>VIP</option>
                                        <option>VIP 2</option>
                                    </select>
                                    <span class="select-arrow"></span>
                                    <span class="form-label">Тип номера</span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" name="checkin" type="date" required>
                                    <span class="form-label">Дата заїзду</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" name="checkout" type="date" required>
                                    <span class="form-label">Дата виїзду</span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <select class="form-control" name="norooms" required>
                                        <option value="" selected hidden>Кількість номерів</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                    </select>
                                    <span class="select-arrow"></span>
                                    <span class="form-label">Номери</span>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <select class="form-control" name="noadults" required>
                                        <option value="" selected hidden>Кількість дорослих</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                    <span class="select-arrow"></span>
                                    <span class="form-label">Дорослі</span>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <select class="form-control" name="nochildren" required>
                                        <option value="" selected hidden>Кількість дітей</option>
                                        <option>0</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                    </select>
                                    <span class="select-arrow"></span>
                                    <span class="form-label">Діти</span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" name="firstname" type="text" placeholder="Введіть ім’я" required>
                                    <span class="form-label">Ім’я</span>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" name="lastname" type="text" placeholder="Введіть прізвище" required>
                                    <span class="form-label">Прізвище</span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" name="email" type="email" placeholder="Введіть email" required>
                                    <span class="form-label">Електронна пошта</span>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" name="phone" type="tel" placeholder="Введіть телефон" required>
                                    <span class="form-label">Телефон</span>
                                </div>
                            </div>
                        </div>

                        <div class="form-btn">
                            <button class="submit-btn" type="submit" name="save">Забронювати</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once("includes/footer.php"); ?>
