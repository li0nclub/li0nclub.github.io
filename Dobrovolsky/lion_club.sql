-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 30 2019 г., 12:29
-- Версия сервера: 5.7.23
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `lion_club`
--

-- --------------------------------------------------------

--
-- Структура таблицы `concerts`
--

CREATE TABLE `concerts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(128) NOT NULL,
  `description` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `url` varchar(130) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `concerts`
--

INSERT INTO `concerts` (`id`, `title`, `description`, `date`, `url`) VALUES
(1, 'The Killers', 'The Killers', '2019-04-25 20:00:00', 'The_Killers.html'),
(2, 'Metallica', 'Metallica', '2019-05-06 19:00:00', 'Metallica.html'),
(3, 'Radiohead', 'Radiohead', '2019-06-01 20:00:00', 'Radiohead.html'),
(4, 'Tame Impala', 'Tame Impala', '2019-04-23 19:00:00', 'Tame_Impala.html'),
(5, 'Splin', 'Splin', '2019-05-05 00:00:00', 'Splin.html');

-- --------------------------------------------------------

--
-- Структура таблицы `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dolzhnost` varchar(250) CHARACTER SET utf8 NOT NULL,
  `FIO` varchar(250) CHARACTER SET utf8 NOT NULL,
  `email` varchar(250) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=cp1251;

--
-- Дамп данных таблицы `contacts`
--

INSERT INTO `contacts` (`id`, `dolzhnost`, `FIO`, `email`) VALUES
(1, 'Управляющая', 'Рыбченко Наталья', 'admin@lion_club.com\r\n'),
(2, 'Дизайн', 'Коровкевич Владимир', 'design@lion_club.com'),
(3, 'Работа с поставщиками', 'Добровольская Юлия', 'market@lion_club.com'),
(4, 'Концертный администратор', 'Шмидт Иван', 'tm@lion_club.com '),
(5, 'Руководитель билетного отдела', 'Ляшев Дмитрий', 'bilet@lion_club.com'),
(6, 'Технический директор', 'Карауш Константин', 'production@lion_club.com \r\n'),
(7, 'Booking & PR', 'Репетилова Ольга', 'pr@lion_club.com'),
(8, 'Барно-ресторанная служба', 'Гордеев Александр', 'bar@lion_club.com'),
(9, 'Booking & Реклама', 'Могилева Ксения ', 'book@lion_club.com '),
(10, 'Контент-менеджер', 'Васильева Елизавета', 'content@lion_club.com');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `login` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `email`, `password`) VALUES
(3, 'georgyyy', 'goshadobr250499@gmail.com', '$2y$10$/41WutEOK/zfYC4GOcLx1uJiEgV3J4GjthTmgLjJNcIaES5/VjqmG'),
(4, 'julia', 'julia@gmail.com', '$2y$10$CBP6MGNyn9V2gulFC5oLwObULPclcqu3dCiGliByi2KF/B35tS1J6'),
(5, 'sasha', 'sasha@gmail.com', '$2y$10$.s2nYZ02SSHkuc0MYBG7DO5B4qUAx5weaNutl6mmo4PJblIbPlyHy'),
(6, 'Dmitriy', 'dmitriy@gmail.com', '$2y$10$Om6vdOBEUEiv2mbeJBRdp.9ytKFYdO6My.EYHRTtKWcyoor1e4R0u'),
(7, 'Test2', 'test2@gmail.com', '$2y$10$aiBI9VgiBPobR/vY5LaYWeozc/hMAZVOr/Yooj2gYoXDqJzAGZ3Fm'),
(8, 'Natusik', 'natusik@gmail.com', '$2y$10$2oQJw8epuLn9nbCf4UW4zuSOkGfxwYXsEW3PbD31YigN0twlaaEe6'),
(9, 'Rocker', 'rocker@gmail.com', '$2y$10$uDQ00IOPlouDFglWW/ncH.XsQEjAlqV3Khdzl8KJvf/h5z7ohyAIS'),
(10, 'mamix', '123@mail.ru', '$2y$10$T4mjFm4xX9naEjGyGasAfOUTxO6zuaMHo0/EPqlX9A.EHPHMSlaTG'),
(11, 'ksu', 'kmogileva@gmail.com', '$2y$10$.jo1fQ5XPVLC2uU5Hjk2seQKRwcOMtgpbHUIv5CrJR1ZtBNcQFYOi');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `concerts`
--
ALTER TABLE `concerts`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `contacts`
--
ALTER TABLE `contacts`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
