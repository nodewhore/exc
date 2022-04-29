-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 27 2022 г., 21:20
-- Версия сервера: 8.0.24
-- Версия PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `zavod`
--

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int NOT NULL,
  `title` text NOT NULL,
  `text` text NOT NULL,
  `author` text NOT NULL,
  `date` date NOT NULL,
  `category` text NOT NULL,
  `date_edit` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `text`, `author`, `date`, `category`, `date_edit`) VALUES
(1, 'Limonte пошла по Грибановский', 'Как стало известно “Ъ-Черноземье”, группа компаний Limonte (основной актив — производитель теплообменных устройств АО «Борхиммаш» в Борисоглебске Воронежской области) рассматривает возможность покупки расположенного по соседству ООО «Грибановский машиностроительный завод». Производящая оборудование для химпрома структура группы «ЦНО-химмаш» оказалась в кризисе из-за долгов перед Сбербанком и Фондом развития промышленности. Сейчас стороны оценивают активы и прорабатывают параметры сделки, ее сумма может составить от 630 млн руб.', 'admin', '2021-12-23', 'СМИ', '2021-12-23'),
(2, 'Воронежский «Борхиммаш» возглавил выходец с Тюменского завода металлоконструкций', 'ОАО «Борхиммаш» является крупнейшим производителем аппаратов воздушного охлаждения в СНГ и Восточной Европе. На производственных площадях предприятия, которые превышают 80 тыс. кв. м, располагается парк сварочного и станочного оборудования от известных мировых производителей. «Борхиммаш» – один из ведущих поставщиков аппаратов воздушного охлаждения для ОАО «Газпром». Уставный капитал предприятия – 101,8 тыс. рублей. 92,49% акций принадлежат ООО «Лимонте ЛТ-Холдинг» (бенефициары – кипрская и литовская фирмы). Выручка компании по итогам 2018 года выросла на 864,9 млн рублей и составила 2,5 млрд рублей. Чистая прибыль – 7,6 млн рублей.', 'admin', '2021-12-23', 'Информация', '2021-12-23'),
(3, 'Московская фирма пригрозила банкротством воронежскому производителю теплообменного оборудования «Борхиммаш»', 'HeadHunterГлавная /Контекст /Московская фирма пригрозила банкротством воронежскому производителю теплообменного оборудования «Борхиммаш»\r\n16.04.2019, 18:56\r\nМосковская фирма пригрозила банкротством воронежскому производителю теплообменного оборудования «Борхиммаш»\r\nВоронеж. 16.04.2019. ABIREG.RU – Оказывающая инжиниринговые услуги в области различных отраслей промышленности столичная группа компаний «Морган групп» заявила о намерении обратиться в Арбитражный суд Воронежской области с заявлением о признании банкротом местного производителя теплообменного оборудования АО «Борхиммаш» (входит в ГК «Лимонте»). Это следует из сообщения компании.', 'admin', '2021-12-23', 'СМИ', '2021-12-23');

-- --------------------------------------------------------

--
-- Структура таблицы `otzivi`
--

CREATE TABLE `otzivi` (
  `id` int NOT NULL,
  `autor` text NOT NULL,
  `text` text NOT NULL,
  `date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `otzivi`
--

INSERT INTO `otzivi` (`id`, `autor`, `text`, `date`) VALUES
(1, 'Антон Сергеевич', 'Отличный завод!.', '12.01.22');

-- --------------------------------------------------------

--
-- Структура таблицы `subscribe`
--

CREATE TABLE `subscribe` (
  `id` int NOT NULL,
  `firstname` text NOT NULL,
  `email` text NOT NULL,
  `date_add` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `subscribe`
--

INSERT INTO `subscribe` (`id`, `firstname`, `email`, `date_add`) VALUES
(1, 'asdasda', 'asdsa@asasd.ru', '2021-12-23');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `login` text NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `email` text NOT NULL,
  `password` varchar(256) NOT NULL,
  `date_birthday` date NOT NULL,
  `date_reg` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `firstname`, `lastname`, `email`, `password`, `date_birthday`, `date_reg`) VALUES
(2, 'admin', '', '', 'admin@admin.com', 'admin', '1970-01-01', '2021-12-23'),
(5, 'sham', '', '', 'sham@mail.ru', 'sham', '2022-01-18', '2022-01-12');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `otzivi`
--
ALTER TABLE `otzivi`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `otzivi`
--
ALTER TABLE `otzivi`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
