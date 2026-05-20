-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Хост: MySQL-8.4:3306
-- Время создания: Ноя 02 2025 г., 17:07
-- Версия сервера: 8.4.6
-- Версия PHP: 8.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `hotel`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admin`
--

CREATE TABLE `admin` (
  `id` int NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`) VALUES
(1, 'Viktor', 'qqxlykqq@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Структура таблицы `foods`
--

CREATE TABLE `foods` (
  `Id` int NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Description` varchar(200) NOT NULL,
  `Price` decimal(18,0) NOT NULL,
  `Categories` varchar(100) NOT NULL,
  `images` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `foods`
--

INSERT INTO `foods` (`Id`, `Name`, `Description`, `Price`, `Categories`, `images`) VALUES
(1, 'Яйце та спаржа', 'Ніжні яйця подаються зі свіжою спаржею, приготованою на парі та приправленою оливковою олією і спеціями. Легкий, корисний та збалансований сніданок.', 31, 'Breakfast', 'images/menu_1.jpg'),
(2, 'Стейк із верхньої вирізки на грилі', 'Соковитий стейк із яловичої вирізки, приготований на грилі до ідеальної скоринки. Подається з пряними спеціями та ароматним соусом.', 23, 'Breakfast', 'images/menu_2.jpg'),
(3, 'Яйце та стейк на грилі', 'Поживний сніданок із соковитим стейком, яйцем та легкими спеціями. Ідеальний варіант для початку продуктивного дня.', 45, 'Breakfast', 'images/menu_3.jpg'),
(4, 'Пряна локшина', 'Ароматна локшина з яскравими спеціями та овочами, готована у східному стилі. Легка гострота та насичений смак.', 33, 'Breakfast', 'images/menu_4.jpg'),
(5, 'Суп із мускатного гарбуза та білої квасолі', 'Розітріть білу квасолю, щоб надати супу з кускусом кремової та насиченої текстури.', 30, 'Lunch', 'images/menu_5.jpg'),
(6, 'Запечена курка з нутом', 'Коли ви розігрієте цю пікантну страву з п’яти інгредієнтів, колеги точно запитають, що ви їсте. Перевірте самі.', 45, 'Lunch', 'images/menu_6.jpg'),
(7, 'Корейські яловичі ролли з ананасом у салаті', 'Що може бути краще карамелізованої яловичини в хрусткому листі салату з перцем чилі та арахісом? Нічого.', 50, 'Lunch', 'images/menu_7.jpg'),
(8, 'Курка в апельсиновому соусі (повільне приготування', 'Ця ресторанна страва — смачний баланс солодких і солоних відтінків.', 30, 'Dinner', 'images/menu_8.jpg'),
(9, 'Джамбалайя (повільне приготування)', 'Кожен шматочок цієї класичної страви Нового Орлеана наповнений куркою, креветками та ковбасками андуй.', 23, 'Dinner', 'images/menu_9.jpg'),
(10, 'Спагеті з гарбуза та фрикадельки з індички', 'Гарбуз-спагеті — чудова альтернатива пасті, якщо хочете додати більше овочів у раціон.', 45, 'Dinner', 'images/menu_10.jpg'),
(11, 'Яловиче рагу у червоному вині (повільне приготуван', 'Тому що червоне вино робить усе кращим — навіть рагу.', 45, 'Dinner', 'images/menu_11.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `reservation`
--

CREATE TABLE `reservation` (
  `Id` int NOT NULL,
  `country` varchar(255) NOT NULL,
  `rooms` varchar(255) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `norooms` int NOT NULL,
  `noadults` int NOT NULL,
  `nochildren` int NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `reservation`
--

INSERT INTO `reservation` (`Id`, `country`, `rooms`, `checkin`, `checkout`, `norooms`, `noadults`, `nochildren`, `firstname`, `lastname`, `email`, `phone`) VALUES
(1, 'Україна', 'Сімейний', '2025-11-03', '2025-11-09', 1, 2, 1, 'Костянтин', 'Бойко', '1@ex.com', '0987654321'),
(2, 'Україна', 'Одинарний', '2025-11-04', '2025-11-06', 1, 1, 0, 'Валентина', 'Корпачук', 'emma.green@ex.com', '09812387645'),
(3, 'Україна', 'Президентський', '2025-11-26', '2025-12-04', 1, 1, 1, 'Олена', 'Труханова', '123@gmail.com', '09988877766');

-- --------------------------------------------------------

--
-- Структура таблицы `rooms`
--

CREATE TABLE `rooms` (
  `Id` int NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Price` decimal(18,0) DEFAULT NULL,
  `Contain` varchar(50) NOT NULL,
  `Categories` varchar(100) NOT NULL,
  `Facilities` varchar(200) NOT NULL,
  `Size` varchar(50) NOT NULL,
  `Bedtype` varchar(100) DEFAULT NULL,
  `images` varchar(50) DEFAULT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `rooms`
--

INSERT INTO `rooms` (`Id`, `Name`, `Price`, `Contain`, `Categories`, `Facilities`, `Size`, `Bedtype`, `images`, `status`) VALUES
(1, 'Одномісний номер', 156, '1 гість', 'Одномісний', 'Шафа, телевізор, телефон, Wi-Fi, ванна кімната', '20 м²', 'Одне односпальне ліжко', 'images/img_1.jpg', 'Доступний'),
(2, 'Сімейний номер', 320, '3 гості', 'Сімейний', 'Шафа, телевізор, телефон, Wi-Fi, ванна кімната', '35 м²', 'Одне двоспальне та одне односпальне ліжко', 'images/img_2.jpg', 'Недоступний'),
(3, 'Президентський номер', 425, '1 гість', 'Люкс', 'Шафа, телевізор, телефон, Wi-Fi, ванна кімната, міні-бар', '45 м²', 'Двоспальне ліжко', 'images/img_3.jpg', 'Доступний'),
(4, 'Двомісний номер', 525, '2 гості', 'Двомісний', 'Шафа, телевізор, телефон, Wi-Fi, ванна кімната', '25 м²', 'Двоспальне ліжко', 'images/img_4.jpg', 'Доступний'),
(5, 'VIP номер', 600, '2 гості', 'Преміум', 'Шафа, телевізор, телефон, Wi-Fi, ванна кімната, міні-бар', '40 м²', 'Двоспальне ліжко', 'images/img_5.jpg', 'Доступний'),
(6, 'VIP номер Люкс', 760, '2 гості', 'Преміум', 'Шафа, телевізор, телефон, Wi-Fi, ванна кімната, джакузі', '50 м²', 'Двоспальне ліжко King Size', 'images/img_6.jpg', 'Доступний');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`Id`);

--
-- Индексы таблицы `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `reservation`
--
ALTER TABLE `reservation`
  MODIFY `Id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
