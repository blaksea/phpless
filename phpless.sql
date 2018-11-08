-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 08 2018 г., 04:11
-- Версия сервера: 5.5.50
-- Версия PHP: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `phpless`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Photos`
--

CREATE TABLE IF NOT EXISTS `Photos` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `adr` varchar(300) NOT NULL,
  `size` int(11) NOT NULL,
  `seecount` int(11) NOT NULL,
  `dateadd` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Photos`
--

INSERT INTO `Photos` (`id`, `name`, `adr`, `size`, `seecount`, `dateadd`) VALUES
(34, 'Первая', '166_plan_1eht.png', 302192, 0, '2018-11-08 01:05:32'),
(35, 'Вторая', 'logo-inst.jpg', 130076, 0, '2018-11-08 01:05:45'),
(36, 'Третья', 'whatsapp_image_2018-06-25_at_17.51.04.jpeg', 71344, 0, '2018-11-08 01:06:00');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `Photos`
--
ALTER TABLE `Photos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `Photos`
--
ALTER TABLE `Photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=37;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
