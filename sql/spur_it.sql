-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 24 2018 г., 02:23
-- Версия сервера: 5.6.38
-- Версия PHP: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `spur_it2`
--

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `task_id` int(11) NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `task_id`, `text`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Some comment...1', '2018-07-18 11:00:00', NULL),
(2, 2, 2, 'Some comment...2', '2018-07-19 12:00:00', NULL),
(3, 3, 1, 'Some comment...3', '2018-07-20 07:00:00', NULL),
(4, 3, 3, 'Some comment...4', '2018-07-17 11:00:00', NULL),
(5, 4, 1, 'Some comment...5', '2018-07-21 08:00:00', NULL),
(6, 1, 2, 'Some comment...6', '2018-07-20 06:00:00', NULL),
(7, 3, 4, 'Some comment...7', '2018-07-22 20:59:00', NULL),
(8, 5, 2, 'sdf', '2018-07-23 22:45:33', '2018-07-23 22:45:33'),
(9, 6, 2, 'sdf', '2018-07-23 22:46:21', '2018-07-23 22:46:21');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2018_07_18_013659_create_tasks_table', 1),
('2018_07_20_013659_create_comments_table', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `tasks`
--

CREATE TABLE `tasks` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('TODO','DOING','DONE') COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `tasks`
--

INSERT INTO `tasks` (`id`, `name`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Task 1', 'Some description...Some description...Some description...Some description...Some description...Some description...Some description...Some description...Some description...Some description...Some description...Some description...', 'TODO', '2018-07-18 11:00:00', NULL),
(2, 'Task 2', 'Some description...Some description...Some description...Some description...Some description...Some description...Some description...Some description...Some description...Some description...Some description...Some description...', 'DOING', '2018-07-18 12:00:00', NULL),
(3, 'Task 3', 'Some description...Some description...Some description...Some description...Some description...Some description...Some description...Some description...Some description...Some description...Some description...Some description...', 'DONE', '2018-07-18 13:00:00', NULL),
(4, 'Task 4', 'Some description...Some description...Some description...Some description...Some description...Some description...Some description...Some description...Some description...Some description...Some description...Some description...', 'TODO', '2018-07-21 14:00:00', NULL),
(5, 'Task 5', 'Some description...Some description...Some description...Some description...Some description...Some description...Some description...Some description...Some description...Some description...Some description...Some description...', 'DONE', '2018-07-19 07:00:00', NULL),
(6, 'Task 6', 'Some description...Some description...Some description...Some description...Some description...Some description...Some description...Some description...Some description...Some description...Some description...Some description...', 'DOING', '2018-07-18 12:00:00', NULL),
(7, 'Task 7', 'Some description...Some description...Some description...Some description...Some description...Some description...Some description...Some description...Some description...Some description...Some description...Some description...', 'TODO', '2018-07-20 12:00:00', NULL),
(8, 'Task 8', 'Some description...Some description...Some description...Some description...Some description...Some description...Some description...Some description...Some description...Some description...Some description...Some description...', 'TODO', '2018-07-20 11:00:00', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Jax', 'jax_fd@mail.ru', '$2y$10$DuOGdOsX.Ft0o1/l6hmMTuuoUFd/QXpAUcOKMdxVt3l1gMXnm9X92', 'Lf9GLK6s0bFmyhtgm6DGlHct1tNO5IBpjGTgFNCeXpY8UoILchUIDKrqdZcP', '2018-07-18 20:00:00', '2018-07-23 22:45:04'),
(2, 'Arnold', 'look@at.me', '$2y$10$DuOGdOsX.Ft0o1/l6hmMTuuoUFd/QXpAUcOKMdxVt3l1gMXnm9X92', NULL, '2018-07-18 20:00:00', NULL),
(3, 'John', 'what@a.day', '$2y$10$DuOGdOsX.Ft0o1/l6hmMTuuoUFd/QXpAUcOKMdxVt3l1gMXnm9X92', NULL, '2018-07-18 20:00:00', NULL),
(4, 'Sarah', 'connor@sky.net', '$2y$10$DuOGdOsX.Ft0o1/l6hmMTuuoUFd/QXpAUcOKMdxVt3l1gMXnm9X92', NULL, '2018-07-18 20:00:00', NULL),
(5, 'Kyle', 'kyle@sky.net', '$2y$10$DuOGdOsX.Ft0o1/l6hmMTuuoUFd/QXpAUcOKMdxVt3l1gMXnm9X92', 'xRAXhc35ZxErDj9KSP6cIxqk4HqX3yH59ztXwBS1Crzue8BXquqr7OL2gZC8', '2018-07-18 20:00:00', '2018-07-23 22:45:54'),
(6, 'test', 'test@test.ru', '$2y$10$KDJjrYVVICU1aZLskcupKehZxlOMcIGJg0Gs72ysSHCCdIp9LheX6', NULL, '2018-07-23 22:46:16', '2018-07-23 22:46:16');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Индексы таблицы `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
