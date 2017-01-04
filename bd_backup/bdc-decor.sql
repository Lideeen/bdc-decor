-- phpMyAdmin SQL Dump
-- version 4.6.0
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Янв 04 2017 г., 20:56
-- Версия сервера: 5.5.23
-- Версия PHP: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `bdc-decor`
--

-- --------------------------------------------------------

--
-- Структура таблицы `content`
--

CREATE TABLE `content` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `category` int(11) NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `content`
--

INSERT INTO `content` (`id`, `title`, `text`, `image`, `category`, `type`) VALUES
(1, 'напольный плинтус', 'Напольный плинтус – это неотъемлемый элемент отделки для придания завершенности любому интерьеру. Плинтус напольный не только придаст законченный вид вашему интерьеру, но и искусно скроет недостатки стыков стены и пола, замаскирует щели, тем самым предотвращая попадание грязи и пыли, спрячет кабель телефонной линии и электропроводки. Наряду с функциональностью это станет отличным декоративным решением вашего интерьера. На сегодняшний день рынок предлагает покупателю широкий выбор напольного плинтуса: напольный плинтус пластиковый, плинтус напольный деревянный, плинтус из полиуретана, плинтус напольный из дюрополимера. Что позволяет покупателю выбрать напольный плинтус в Минске, который подойдет и по функциональным качествам и по дизайну.', '', 1, 1),
(2, '', 'Напольный плинтус – это неотъемлемый элемент отделки для придания завершенности любому интерьеру. Плинтус напольный не только придаст законченный вид вашему интерьеру, но и искусно скроет недостатки стыков стены и пола, замаскирует щели, тем самым предотвращая попадание грязи и пыли, спрячет кабель телефонной линии и электропроводки. Наряду с функциональностью это станет отличным декоративным решением вашего интерьера. Напольный плинтус – это неотъемлемый элемент отделки для придания завершенности любому интерьеру.', '', 1, 2),
(3, '', 'Напольный плинтус – это неотъемлемый элемент отделки для придания завершенности любому интерьеру. Плинтус напольный не только придаст законченный вид вашему интерьеру, но и искусно скроет недостатки стыков стены и пола, замаскирует щели, тем самым предотвращая попадание грязи и пыли, спрячет кабель телефонной линии и электропроводки. Наряду с функциональностью это станет отличным декоративным решением вашего интерьера. Напольный плинтус – это неотъемлемый элемент отделки для придания завершенности любому интерьеру. Плинтус напольный не только придаст законченный вид вашему интерьеру, но и искусно скроет недостатки стыков стены и пола, замаскирует щели, тем самым предотвращая попадание грязи и пыли, спрячет кабель.', '', 1, 3),
(4, '', 'Напольный плинтус – это неотъемлемый элемент отделки для придания завершенности любому интерьеру. Плинтус напольный не только придаст законченный вид вашему интерьеру, но и искусно скроет недостатки стыков стены и пола, замаскирует щели, тем самым предотвращая попадание грязи и пыли, спрячет кабель телефонной линии и электропроводки. Наряду с функциональностью это станет отличным декоративным решением вашего интерьера. Напольный плинтус – это неотъемлемый элемент отделки для придания завершенности любому интерьеру. Плинтус напольный не только придаст законченный вид вашему интерьеру, но и искусно скроет недостатки стыков стены и пола, замаскирует щели, тем самым предотвращая попадание грязи и пыли, спрячет кабель телефонной линии и электропроводки. Наряду с функциональностью это станет отличным декоративным решением вашего интерьера.Напольный плинтус – это неотъемлемый элемент отделки для придания завершенности любому интерьеру. Плинтус напольный не только придаст законченный вид вашему интерьеру, но и искусно скроет недостатки стыков стены и пола, замаскирует щели, тем самым предотвращая попадание грязи и пыли, спрячет кабель.', '', 1, 4),
(5, 'Идея нежного интерьера для спальни', 'Напольный плинтус – это неотъемлемый элемент отделки для придания завершенности любому интерьеру. Плинтус напольный не только придаст законченный вид вашему интерьеру, но и искусно скроет недостатки стыков стены и пола, замаскирует щели, тем самым предотвращая попадание грязи и пыли, спрячет кабель телефонной линии и электропроводки. Наряду с функциональностью это станет отличным декоративным решением вашего интерьера.\r\n\r\n', '[gotowall.com]20111225_113947_7804.jpg', 1, 5),
(6, 'Идея нежного интерьера для спальни', 'Напольный плинтус – это неотъемлемый элемент отделки для придания завершенности любому интерьеру. Плинтус напольный не только придаст законченный вид вашему интерьеру, но и искусно скроет недостатки стыков стены и пола, замаскирует щели, тем самым предотвращая попадание грязи и пыли, спрячет кабель телефонной линии и электропроводки. Наряду с функциональностью это станет отличным декоративным решением вашего интерьера.', '[gotowall.com]20111225_113947_7804.jpg', 1, 6),
(8, '', '', '', 2, 1),
(9, '', '', '', 2, 2),
(10, '', '', '', 2, 3),
(11, '', '', '', 2, 4),
(12, '', '', '', 2, 5),
(13, '', '', '', 2, 6),
(14, '', '', '', 3, 1),
(15, '', '', '', 3, 2),
(16, '', '', '', 3, 3),
(17, '', '', '', 3, 4),
(18, '', '', '', 3, 5),
(19, '', '', '', 3, 6),
(20, '', '', '', 4, 1),
(21, '', '', '', 4, 2),
(22, '', '', '', 4, 3),
(23, '', '', '', 4, 4),
(24, '', '', '', 4, 5),
(25, '', '', '', 4, 6),
(26, '', '', '', 5, 1),
(27, '', '', '', 5, 2),
(28, '', '', '', 5, 3),
(29, '', '', '', 5, 4),
(30, '', '', '', 5, 5),
(31, '', '', '', 5, 6),
(32, '', '', '', 6, 1),
(33, '', '', '', 6, 2),
(34, '', '', '', 6, 3),
(35, '', '', '', 6, 4),
(36, '', '', '', 6, 5),
(37, '', '', '', 6, 6);

-- --------------------------------------------------------

--
-- Структура таблицы `falsh_balki`
--

CREATE TABLE `falsh_balki` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `height` int(11) NOT NULL,
  `width` int(11) NOT NULL,
  `length` int(11) NOT NULL,
  `price` varchar(255) NOT NULL,
  `installation_price` varchar(255) NOT NULL,
  `position` int(11) NOT NULL,
  `material` varchar(255) NOT NULL,
  `dop_info_2` varchar(255) NOT NULL,
  `dop_info_3` varchar(255) NOT NULL,
  `images_dir` varchar(255) NOT NULL,
  `id_collection` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `falsh_balki_collection`
--

CREATE TABLE `falsh_balki_collection` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `position` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `falsh_balki_collection`
--

INSERT INTO `falsh_balki_collection` (`id`, `name`, `description`, `position`, `image`) VALUES
(1, 'Прованс', 'Описание коллекции прованс', 2, '3CBhJxvTWHE.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `int_lepnina`
--

CREATE TABLE `int_lepnina` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `height` int(11) NOT NULL,
  `width` int(11) NOT NULL,
  `length` int(11) NOT NULL,
  `price` varchar(255) NOT NULL,
  `installation_price` varchar(255) NOT NULL,
  `position` int(11) NOT NULL,
  `material` varchar(255) NOT NULL,
  `dop_info_2` varchar(255) NOT NULL,
  `dop_info_3` varchar(255) NOT NULL,
  `images_dir` varchar(255) NOT NULL,
  `id_collection` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `int_lepnina_collection`
--

CREATE TABLE `int_lepnina_collection` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `position` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `int_lepnina_collection`
--

INSERT INTO `int_lepnina_collection` (`id`, `name`, `description`, `position`, `image`) VALUES
(1, 'Прованс', 'Описание коллекции прованс', 2, '3CBhJxvTWHE.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `moldings`
--

CREATE TABLE `moldings` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `height` int(11) NOT NULL,
  `width` int(11) NOT NULL,
  `length` int(11) NOT NULL,
  `price` varchar(255) NOT NULL,
  `installation_price` varchar(255) NOT NULL,
  `position` int(11) NOT NULL,
  `material` varchar(255) NOT NULL,
  `dop_info_2` varchar(255) NOT NULL,
  `dop_info_3` varchar(255) NOT NULL,
  `images_dir` varchar(255) NOT NULL,
  `id_collection` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `moldings_collection`
--

CREATE TABLE `moldings_collection` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `position` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `moldings_collection`
--

INSERT INTO `moldings_collection` (`id`, `name`, `description`, `position`, `image`) VALUES
(1, 'Прованс', 'Описание коллекции прованс', 2, '3CBhJxvTWHE.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `plintus_napolny`
--

CREATE TABLE `plintus_napolny` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `height` int(11) NOT NULL,
  `width` int(11) NOT NULL,
  `length` int(11) NOT NULL,
  `price` varchar(255) NOT NULL,
  `installation_price` varchar(255) NOT NULL,
  `position` int(11) NOT NULL,
  `material` varchar(255) NOT NULL,
  `dop_info_2` varchar(255) NOT NULL,
  `dop_info_3` varchar(255) NOT NULL,
  `images_dir` varchar(255) NOT NULL,
  `id_collection` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `plintus_napolny`
--

INSERT INTO `plintus_napolny` (`id`, `full_name`, `name`, `height`, `width`, `length`, `price`, `installation_price`, `position`, `material`, `dop_info_2`, `dop_info_3`, `images_dir`, `id_collection`) VALUES
(1, 'Плинтус напольный D005', 'D005', 120, 65, 32, '14', '5', 1, 'Древесина', '', '', '1', 1),
(2, 'Плинтус напольный Q12', 'Q12', 35, 21, 142, '4', '3', 2, '', '', '', '2', 1),
(3, 'Плинтус настенный R2005', 'R2005', 34, 22, 213, '3,4', '4', 3, '', '', '', '3', 1),
(4, 'Плинтус напольный D005', 'D005', 12, 344, 4545, '34', '2', 4, '', '', '', '4', 1),
(5, 'Плинтус потолочный Q12', 'КМ', 11, 234, 560, '34', '23', 5, '', '', '', '5', 1),
(6, 'Молдинг А100', 'А100', 3434, 3433, 45, '44', '44', 6, '', '', '', '6', 1),
(7, 'Плинтус настенный R2005', 'D005', 231, 234, 5, '5', '5', 7, '', '', '', '7', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `plintus_napolny_collection`
--

CREATE TABLE `plintus_napolny_collection` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `position` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `plintus_napolny_collection`
--

INSERT INTO `plintus_napolny_collection` (`id`, `name`, `description`, `position`, `image`) VALUES
(1, 'Белая коллекция', 'Описание белой коллекции', 1, '5adYZMiv-Yk.jpg'),
(2, 'Прованс', 'Описание коллекции прованс', 0, '[gotowall.com]20111225_113947_7804.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `plintus_potolochny`
--

CREATE TABLE `plintus_potolochny` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `height` int(11) NOT NULL,
  `width` int(11) NOT NULL,
  `length` int(11) NOT NULL,
  `price` varchar(255) NOT NULL,
  `installation_price` varchar(255) NOT NULL,
  `position` int(11) NOT NULL,
  `material` varchar(255) NOT NULL,
  `dop_info_2` varchar(255) NOT NULL,
  `dop_info_3` varchar(255) NOT NULL,
  `images_dir` varchar(255) NOT NULL,
  `id_collection` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `plintus_potolochny`
--

INSERT INTO `plintus_potolochny` (`id`, `full_name`, `name`, `height`, `width`, `length`, `price`, `installation_price`, `position`, `material`, `dop_info_2`, `dop_info_3`, `images_dir`, `id_collection`) VALUES
(2, 'Плинтус напольный Q12', 'Q12', 35, 21, 142, '4', '3', 2, '', '', '', '2', 1),
(3, 'Плинтус настенный R2005', 'R2005', 34, 22, 213, '3,4', '4', 3, '', '', '', '3', 1),
(4, 'Плинтус напольный D005', 'D005', 12, 344, 4545, '34', '2', 4, '', '', '', '4', 1),
(6, 'Молдинг А100', 'А100', 3434, 3433, 45, '44', '44', 6, '', '', '', '6', 1),
(7, 'Плинтус настенный R2005', 'D005', 231, 234, 5, '5', '5', 7, '', '', '', '7', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `plintus_potolochny_collection`
--

CREATE TABLE `plintus_potolochny_collection` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `position` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `plintus_potolochny_collection`
--

INSERT INTO `plintus_potolochny_collection` (`id`, `name`, `description`, `position`, `image`) VALUES
(1, 'Белая коллекция', 'Описание белой коллекции', 3, '5adYZMiv-Yk.jpg'),
(2, 'Прованс', 'Описание коллекции прованс', 0, '[gotowall.com]20111225_113947_7804.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `ramy_dly_zerkal`
--

CREATE TABLE `ramy_dly_zerkal` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `height` int(11) NOT NULL,
  `width` int(11) NOT NULL,
  `length` int(11) NOT NULL,
  `price` varchar(255) NOT NULL,
  `installation_price` varchar(255) NOT NULL,
  `position` int(11) NOT NULL,
  `material` varchar(255) NOT NULL,
  `dop_info_2` varchar(255) NOT NULL,
  `dop_info_3` varchar(255) NOT NULL,
  `images_dir` varchar(255) NOT NULL,
  `id_collection` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `ramy_dly_zerkal_collection`
--

CREATE TABLE `ramy_dly_zerkal_collection` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `position` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `reference`
--

CREATE TABLE `reference` (
  `id` int(11) NOT NULL,
  `link` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `id_category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `reference`
--

INSERT INTO `reference` (`id`, `link`, `text`, `image`, `id_category`) VALUES
(1, '', '', '', 1),
(2, '', '', '', 2),
(3, '', '', '', 3),
(4, '', '', '', 4),
(5, '', '', '', 5),
(6, '', '', '', 6);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `falsh_balki`
--
ALTER TABLE `falsh_balki`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `falsh_balki_collection`
--
ALTER TABLE `falsh_balki_collection`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `int_lepnina`
--
ALTER TABLE `int_lepnina`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `int_lepnina_collection`
--
ALTER TABLE `int_lepnina_collection`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `moldings`
--
ALTER TABLE `moldings`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `moldings_collection`
--
ALTER TABLE `moldings_collection`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `plintus_napolny`
--
ALTER TABLE `plintus_napolny`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `plintus_napolny_collection`
--
ALTER TABLE `plintus_napolny_collection`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `plintus_potolochny`
--
ALTER TABLE `plintus_potolochny`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `plintus_potolochny_collection`
--
ALTER TABLE `plintus_potolochny_collection`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `ramy_dly_zerkal`
--
ALTER TABLE `ramy_dly_zerkal`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `ramy_dly_zerkal_collection`
--
ALTER TABLE `ramy_dly_zerkal_collection`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `reference`
--
ALTER TABLE `reference`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `content`
--
ALTER TABLE `content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT для таблицы `falsh_balki`
--
ALTER TABLE `falsh_balki`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `falsh_balki_collection`
--
ALTER TABLE `falsh_balki_collection`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `int_lepnina`
--
ALTER TABLE `int_lepnina`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `int_lepnina_collection`
--
ALTER TABLE `int_lepnina_collection`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `moldings`
--
ALTER TABLE `moldings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `moldings_collection`
--
ALTER TABLE `moldings_collection`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `plintus_napolny`
--
ALTER TABLE `plintus_napolny`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблицы `plintus_napolny_collection`
--
ALTER TABLE `plintus_napolny_collection`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `plintus_potolochny`
--
ALTER TABLE `plintus_potolochny`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблицы `plintus_potolochny_collection`
--
ALTER TABLE `plintus_potolochny_collection`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `ramy_dly_zerkal`
--
ALTER TABLE `ramy_dly_zerkal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `ramy_dly_zerkal_collection`
--
ALTER TABLE `ramy_dly_zerkal_collection`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `reference`
--
ALTER TABLE `reference`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
