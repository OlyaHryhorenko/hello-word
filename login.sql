-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 11 2017 г., 00:47
-- Версия сервера: 5.5.50
-- Версия PHP: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `login`
--

-- --------------------------------------------------------

--
-- Структура таблицы `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL,
  `login` varchar(156) DEFAULT NULL,
  `password` char(156) DEFAULT NULL,
  `name` varchar(156) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `login`
--

INSERT INTO `login` (`id`, `login`, `password`, `name`) VALUES
(1, 'ss', 'ss', ''),
(2, 'dd', '$2y$10$ZcMvej8bLY.0HI1KJsg2nOTS0PGCB.9LFj5iufbSwBRleLlC6VenO', 'dd@ss'),
(3, 'olya', '$2y$10$KdVacHd5JOg7lWr8R5VnquOBYG/fFimK5v5EeCJQLS42Lq.blK14i', 'olya'),
(4, 'la', '$2y$10$QqXP.A7RstPW/f1uOB2aduUl5WrVLyUvR9xsqUs5ufC0ybvE.Kxsi', 'la'),
(5, 'lal', '$2y$10$p0m73QAgdwctS3cq6MAaVeASDbTxOhacZjwCuQMPaQxjH0zwr/6XK', 'lal'),
(6, 'oll', '$2y$10$Axvr4XbXKrURtOWjXp6qEe91t3Qkl82y30.d8HUp57nbIQ9wH7dM.', 'oll'),
(7, 'laaa', '$2y$10$Nz9OQO16ZaAa8tdpZL/rF.l/tgOzJL3T4xpjpl0sbs/Hm9s18LrEW', 'laaa'),
(8, 'ol', '$2y$10$tDNlyUvptWuhvFHQWaLdO.hz93tKBM3tPG3i0sboG9.5aIl6E/gRm', 'ol'),
(9, 'ыы', '$2y$10$WOuOWYXG7db00//QTRQjnu3G8D3UoyCUhB/tt.pNRTSNYofGmnvv6', 'ыы'),
(10, 'ыы', '$2y$10$wxc6FwLAdMb1GhvOp5/x9eZmlsgjEvSYuMSM0bAdgp7n56ZONA4im', 'ыы'),
(11, 'ыы', '$2y$10$LcODO2mERZj8E0Ep3Crkaeqng5WnEr6CQnvQjgZTCnd1c/QcbHRSu', 'ыы'),
(12, 'ыы', '$2y$10$UAffNAWromWQTJBun73RLu10.HPfKO/fcO.hyc.MYT8hCCq25Cza2', 'ыы'),
(13, 'оля', '$2y$10$pV1vn77iWGeWDJLqE/jAQ..jQmpNERnjrLGr615zcZi6CLIW3q6cy', 'оля'),
(14, 'оля', '$2y$10$2tE0wZTogg.mxY9v9B0Vye6luTrSj5KBds5zShO5UcbtsiqoWBXuG', 'оля'),
(15, 'аа', '$2y$10$eq//osiCglfWCHaWYmVc3exEyU7TlFu0U1qEiphuP5PA9OtHZIaMC', 'аа');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
