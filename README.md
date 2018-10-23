-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 23 2018 г., 17:17
-- Версия сервера: 5.7.19
-- Версия PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `antagosoft`
--

-- --------------------------------------------------------

--
-- Структура таблицы `foodclub`
--

CREATE TABLE `foodclub` (
  `id` int(11) NOT NULL,
  `name` varchar(15) NOT NULL,
  `city` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `house` varchar(10) NOT NULL,
  `addit_info` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `foodclub`
--

INSERT INTO `foodclub` (`id`, `name`, `city`, `area`, `street`, `house`, `addit_info`) VALUES
(20, 'Work', 'Kharkiv', 'Kharkov ', 'Danilevska', '20', ''),
(21, 'Work', 'Kharkiv', 'Kharkov ', 'Danilevska', '20', ''),
(37, '1', '1', '1', '1', '1', '1');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `foodclub`
--
ALTER TABLE `foodclub`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `foodclub`
--
ALTER TABLE `foodclub`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
