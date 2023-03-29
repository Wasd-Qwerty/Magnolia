-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 29 2023 г., 16:53
-- Версия сервера: 8.0.30
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `Magnolia`
--

-- --------------------------------------------------------

--
-- Структура таблицы `parfume`
--

CREATE TABLE `parfume` (
  `id` int NOT NULL,
  `name` varchar(191) NOT NULL,
  `description` varchar(191) NOT NULL,
  `price` varchar(191) NOT NULL,
  `url` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Структура таблицы `subscripe`
--

CREATE TABLE `subscripe` (
  `id` int NOT NULL,
  `Name` varchar(150) NOT NULL,
  `Email` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `subscripe`
--

INSERT INTO `subscripe` (`id`, `Name`, `Email`) VALUES
(8, '', ''),
(9, '', ''),
(10, '', ''),
(11, 'ffff', 'ygnyn@gmail.com'),
(12, '', ''),
(13, '', ''),
(14, 'апап', 'ygnyn@gmail.com'),
(15, 'апап', 'ygnyn@gmail.com'),
(16, 'ваыв', 'ygnyn@gmail.com');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `parfume`
--
ALTER TABLE `parfume`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `subscripe`
--
ALTER TABLE `subscripe`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `parfume`
--
ALTER TABLE `parfume`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `subscripe`
--
ALTER TABLE `subscripe`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
