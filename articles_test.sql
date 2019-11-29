-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 20 2019 г., 12:47
-- Версия сервера: 10.3.13-MariaDB
-- Версия PHP: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `articles_test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id`, `title`, `description`, `image`) VALUES
(1, 'Как работает и зачем необходим стабилизатор напряжения(title1)', 'Стабилизаторы ЭНЕРГОТЕХ - это устройства, которые разработаны с учетом реальных условий отечественных сетей электропитания, и способны удовлетворить требования самого изысканного потребителя.(text1)', 'stabilizer.jpg'),
(2, 'Как работает и зачем необходим стабилизатор напряжения(title2)', 'Стабилизаторы ЭНЕРГОТЕХ - это устройства, которые разработаны с учетом реальных условий отечественных сетей электропитания, и способны удовлетворить требования самого изысканного потребителя.(text2)', 'stabilizer.jpg'),
(3, 'title3', 'текст3текст3текст3текст3текст3текст3текст3текст3текст3текст3текст3текст3текст3текст3текст3текст3текст3текст3текст3текст3текст3текст3текст3текст3текст3текст3текст3текст3текст3текст3текст3текст3', 'stabilizer.jpg'),
(4, 'title4', 'text4text4text4text4text4text4text4text4text4text4text4text4text4text4text4text4text4text4text4text4text4text4text4text4text4text4text4text4text4text4text4text4text4text4text4text4text4text4text4text4text4text4text4text4text4', 'stabilizer.jpg'),
(5, 'title5', 'text5text5text5text5text5text5text5text5text5text5text5text5text5text5text5text5text5text5text5text5text5text5text5text5text5text5text5text5text5text5text5text5text5text5text5text5text5text5text5text5text5text5text5text5', 'stabilizer.jpg'),
(6, 'title6', 'text6text6text6text6text6text6text6text6text6text6text6text6text6text6text6text6text6text6text6text6text6text6text6text6text6text6text6text6text6text6text6text6text6text6text6text6text6text6text6text6text6text6text6text6text6', 'stabilizer.jpg'),
(7, 'title7', 'text7text7text7text7text7text7text7text7text7text7text7text7text7text7text7text7text7text7text7text7text7text7text7text7text7text7text7text7text7text7text7text7text7text7text7text7text7text7text7text7text7text7text7', 'stabilizer.jpg'),
(8, 'title8', 'text8text8text8tetext8text8text8text8text8text8text8text8text8text8text8text8text8text8text8text8text8text8text8text8text8text8text8text8text8text8text8text8text8text8text8text8text8text8text8text8text8text8', 'stabilizer.jpg'),
(9, 'title9', 'text9text9text9text9text9text9text9text9text9text9text9text9text9text9text9text9text9text9text9text9text9text9text9text9text9text9text9text9text9text9text9text9text9text9text9text9text9text9text9text9text9text9text9text9text9text9text9text9text9text9text9text9text9text9text9text9text9text9text9text9text9text9text9text9text9text9text9', 'stabilizer.jpg'),
(10, 'title10', 'текст10текст10текст10текст10текст10текст10текст10текст10текст10текст10текст10текекст10текст10текст10текст10текст10текст10текст10текст10текст10текст10текст10текст10текст10текст10текст10текст10текст10текст10текст10текст10текст10текст10текст10', 'stabilizer.jpg'),
(11, 'title11', 'текст11текст11текст11текст11текст11текст11текст11текст11текст11текст11текст11текст11текст11текст11текст11текст11текст11текст11текст11текст11текст11текст11текст11текст11текст11текст11текст11текст11текст11текст11текст11текст11', 'stabilizer.jpg'),
(12, 'title12', 'текст12текст12текст12текст12текст12текст12текст12текст12текст12текст12текст12текст12текст12текст12текст12текст12текст12текст12текст12текст12текст12текст12текст12текст12текст12текст12текст12текст12текст12текст12', 'stabilizer.jpg'),
(13, 'title13', 'текст13текст13текст13текст13текст13текст13текст13текст13текст13текст13текст13текст13текст13текст13текст13текст13текст13текст13текст13текст13текст13текст13текст13текст13текст13текст13текст13текст13текст13текст13текст13текст13текст13текст13текст13текст13текст13', 'stabilizer.jpg'),
(14, 'title14', 'текст14текст14текст14текст14текст14текст14текст14текст14текст14текст14текст14текст14текст14текст14текст14текст14текст14текст14текст14текст14текст14текст14текст14текст14текст14текст14текст14текст14текст14текст14текст14текст14текст14текст14текст14текст14текст14', 'stabilizer.jpg'),
(15, 'title15', 'текст15текст15текст15текст15текст15текст15текст15текст15текст15текст15текст15текст15текст15текст15текст15текст15текст15текст15текст15текст15текст15текст15текст15текст15текст15текст15текст15текст15текст15текст15текст15текст15текст15', 'stabilizer.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
