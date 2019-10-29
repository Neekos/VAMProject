-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 29 2019 г., 17:06
-- Версия сервера: 5.6.37
-- Версия PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `WebStudio`
--

-- --------------------------------------------------------

--
-- Структура таблицы `diary`
--

CREATE TABLE `diary` (
  `ID` int(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `discription` text NOT NULL,
  `p_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `diary`
--

INSERT INTO `diary` (`ID`, `title`, `discription`, `p_date`) VALUES
(3, 'Привет мир!', 'Привет, Мир!', '2019-10-17'),
(4, 'Хорошо поработал!', 'Сегодня я хорошо поработал сделал , регистрацию и авторизацию, а также дневник разработки теперь радостный пью пивас;=)', '2019-10-06'),
(5, 'Чувствую Себя брошеным Андрей', 'Андрей! Давай присоединяйся((', '2019-10-07');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` int(15) NOT NULL,
  `email` int(100) NOT NULL,
  `message` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `name`, `phone`, `email`, `message`, `date`) VALUES
(1, '1', 2, 1, '32323', '0000-00-00'),
(2, '1', 1, 11, '23323', '0000-00-00'),
(3, '1', 21323, 1, 'выаываываыва', '2019-10-15'),
(4, '123', 23, 1, 'вапвапвап', '2019-10-29');

-- --------------------------------------------------------

--
-- Структура таблицы `service`
--

CREATE TABLE `service` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `discription` text NOT NULL,
  `type_service` int(10) NOT NULL,
  `price` varchar(10) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `service`
--

INSERT INTO `service` (`id`, `name`, `discription`, `type_service`, `price`, `image`) VALUES
(6, 'Сайт визитка', 'содержит основную информацию об организации (коммерческой или некоммерческой), компании, частном лице, услугах и товарах, прайс-листы, контактные данные (телефон, адрес) и форму обратной связи. Сайт-визитка дает возможность кратко представить компанию, лицо, услугу или продукт в интернете.', 1, '10000', '/template/image/service/сайт-визитка.jpg'),
(7, 'Корпоративный сайт', 'Корпоративный сайт – это сайт компании, ее официальное виртуальное представительство в интернете. Корпоративный сайт содержит полный объем информации о самой компании, о сфере ее деятельности, предлагаемой продукции и услугах.', 1, '25000', '/template/image/service/Корпоративный сайт.jpg'),
(8, '1Интернет-магазин', '1Интернет-магазин (англ. online shop или e-shop) — сайт, торгующий товарами посредством сети Интернет. Позволяет пользователям онлайн, в своём браузере или через мобильное приложение, сформировать заказ на покупку, выбрать способ оплаты и доставки заказа, оплатить заказ. При этом продажа товаров осуществляется дистанционным способом и она накладывает ограничения на продаваемые товары.', 2, '35001', '/template/image/service/Интернет-магазин.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `type_service`
--

CREATE TABLE `type_service` (
  `ID` int(10) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `type_service`
--

INSERT INTO `type_service` (`ID`, `type`) VALUES
(1, 'Разработка'),
(2, 'Маркетинг');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `email`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com'),
(2, '1', '1', '1@gmail.com'),
(4, 'Виктор', '96e79218965eb72c92a549dd5a330112', 'belskih15@gmail.com');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `diary`
--
ALTER TABLE `diary`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `type_service`
--
ALTER TABLE `type_service`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `diary`
--
ALTER TABLE `diary`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `service`
--
ALTER TABLE `service`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT для таблицы `type_service`
--
ALTER TABLE `type_service`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
