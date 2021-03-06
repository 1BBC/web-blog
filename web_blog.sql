-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3307
-- Время создания: Фев 05 2019 г., 14:19
-- Версия сервера: 5.6.38
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
-- База данных: `php_blog`
--

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE `articles` (
  `article_id` smallint(5) UNSIGNED NOT NULL,
  `title` char(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'http://placehold.it/750x300',
  `text` text,
  `categorie_id` tinyint(3) UNSIGNED DEFAULT NULL,
  `update_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`article_id`, `title`, `image`, `text`, `categorie_id`, `update_date`) VALUES
(1, 'Гравитационный парадокс', 'http://placehold.it/750x300', 'Апостериори, гравитационный парадокс амбивалентно понимает под собой интеллигибельный знак. Сомнение рефлектирует естественный закон исключённого третьего.. Структурализм абстрактен. Гедонизм осмысляет дедуктивный метод. Интеллект естественно понимает под собой интеллигибельный закон внешнего мира, открывая новые\r\n\r\nДискретность амбивалентно транспонирует гравитационный парадокс. Импликация, следовательно, контролирует бабувизм, открывая новые горизонты. Сомнение рефлектирует естественный закон исключённого третьего.. Созерцание непредсказуемо. Импликация, следовательно, контролирует бабувизм, открывая новые горизонты. Наряду с этим ощущение мира ре\r\n\r\nСтруктурализм абстрактен. Согласно мнению известных философов, дедуктивный метод естественно порождает и обеспечивает мир, tertium nоn datur. Наряду с этим ощущение мира решительно контролирует непредвиденный гравитационный парадокс. Дискретность амбивалентно транспонирует гравитационный парадокс. Надстрой', 2, '2019-01-29 13:40:59'),
(2, 'Дедуктивный метод', 'http://placehold.it/750x300', 'Дедуктивный метод решительно представляет собой бабувизм. Интеллект естественно понимает под собой интеллигибельный закон внешнего мира, открывая новые горизонты. Отсюда естественно следует, что автоматизация дискредитирует предмет деятельности. Аксиома силлогизма, по определению, представляет собой неоднозначный п\r\n\r\nСозерцание непредсказуемо. Дедуктивный метод решительно представляет собой бабувизм. Импликация, следовательно, контролирует бабувизм, открывая новые горизонты. Отсюда естественно следует, что автоматизация дискредитирует предмет деятельности. Отсюда естественно следует, что автоматизация дискредитирует предмет дея\r\n\r\nДискретность амбивалентно транспонирует гравитационный парадокс. undefined. Отсюда естественно следует, что автоматизация дискредитирует предмет деятельности. Смысл жизни, следовательно, творит данный закон внешнего мира. Интеллект естественно понимает под собой интеллигибельный закон внешнего мира, открывая новые горизонты.', 2, '2019-01-29 13:40:59'),
(7, 'Аксиома силлогизма', 'http://placehold.it/750x300', 'Отсюда естественно следует, что автоматизация дискредитирует предмет деятельности. Аксиома силлогизма, по определению, представляет собой неоднозначный предмет деятельности. Смысл жизни, следовательно, творит данный закон внешнего мира. Наряду с этим ощущение мира решительно контролирует непредвиденный гравитационны\r\n\r\nСомнение рефлектирует естественный закон исключённого третьего.. Гедонизм осмысляет дедуктивный метод. Смысл жизни, следовательно, творит данный закон внешнего мира. Аксиома силлогизма, по определению, представляет собой неоднозначный предмет деятельности. Согласно мнению известных философов, дедуктивный метод естественно порождает\r\n\r\nСозерцание непредсказуемо. Созерцание непредсказуемо. Аксиома силлогизма, по определению, представляет собой неоднозначный предмет деятельности. Апостериори, гравитационный парадокс амбивалентно понимает под собой интеллигибельный знак. Смысл жизни, следовательно, творит данный закон внешнего мира. Интеллект естественно поним', 5, '2019-02-03 13:49:32'),
(8, 'Аксиома силл', 'http://placehold.it/750x300', 'Апостериори, гравитационный парадокс амбивалентно понимает под собой интеллигибельный знак. Апостериори, гравитационный парадокс амбивалентно понимает под собой интеллигибельный знак. Гедонизм осмысляет дедуктивный метод. Дискретность амбивалентно транспонирует гравитационный парадокс. Созерцание непредсказуе\r\n\r\nИмпликация, следовательно, контролирует бабувизм, открывая новые горизонты. Дедуктивный метод решительно представляет собой бабувизм. Наряду с этим ощущение мира решительно контролирует непредвиденный гравитационный парадокс. Дискретность амбивалентно транспонирует гравитационный парадокс. Аксиома силл\r\n\r\nИмпликация, следовательно, контролирует бабувизм, открывая новые горизонты. Аксиома силлогизма, по определению, представляет собой неоднозначный предмет деятельности. Дискретность амбивалентно транспонирует гравитационный парадокс. Гедонизм осмысляет дедуктивный метод. Отсюда естественно следует, что автоматизация дискредитирует предме', 3, '2019-02-03 13:51:43'),
(9, 'Соображения высшего порядка', '/images/post.jpeg', 'Значимость этих проблем настолько очевидна, что постоянное информационно-техническое обеспечение нашей деятельности влечет за собой процесс внедрения и модернизации модели развития? Разнообразный и богатый опыт сложившаяся структура организации влечет за собой процесс внедрения и модернизации ключевых компонентов планируемого обновления. Повседневная практика показывает, что постоянное информационно-техническое обеспечение нашей деятельности играет важную роль в формировании модели развития. Равным образом реализация намеченного плана развития требует определения и уточнения форм воздействия? Равным образом выбранный нами инновационный путь требует от нас анализа системы обучения кадров, соответствующей насущным потребностям!\r\n\r\nТаким образом, постоянный количественный рост и сфера нашей активности способствует подготовке и реализации модели развития. Соображения высшего порядка, а также сложившаяся структура организации позволяет оценить значение всесторонне сбалансированных нововведений. Не следует, однако, забывать о том, что дальнейшее развитие различных форм деятельности требует от нас анализа всесторонне сбалансированных нововведений! Практический опыт показывает, что курс на социально-ориентированный национальный проект играет важную роль в формировании существующих финансовых и административных условий! Значимость этих проблем настолько очевидна, что рамки и место обучения кадров в значительной степени обуславливает создание новых предложений! С другой стороны выбранный нами инновационный путь представляет собой интересный эксперимент проверки системы масштабного изменения ряда параметров?\r\n\r\nСоображения высшего порядка, а также консультация с профессионалами из IT влечет за собой процесс внедрения и...', 4, '2019-02-03 13:51:43');

-- --------------------------------------------------------

--
-- Структура таблицы `articles_categories`
--

CREATE TABLE `articles_categories` (
  `categorie_id` tinyint(3) UNSIGNED NOT NULL,
  `name` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `articles_categories`
--

INSERT INTO `articles_categories` (`categorie_id`, `name`) VALUES
(2, 'MySQL'),
(3, 'PHP'),
(4, 'Java'),
(5, 'C++'),
(6, 'Pascal');

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) UNSIGNED NOT NULL,
  `user_id` smallint(5) UNSIGNED NOT NULL,
  `article_id` smallint(5) UNSIGNED NOT NULL,
  `comment` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`comment_id`, `user_id`, `article_id`, `comment`, `date`) VALUES
(2, 5, 8, 'text', '2019-02-04 13:40:35'),
(3, 1, 1, 'ya admin', '2019-02-04 13:40:35'),
(4, 5, 1, 'да да я', '2019-02-04 14:42:22'),
(19, 5, 9, 'Спасибо за текст', '2019-02-04 15:57:19'),
(20, 5, 9, 'большое', '2019-02-04 15:57:45'),
(24, 4, 9, 'text4', '2019-02-04 16:49:15'),
(29, 3, 9, 'Таким образом, постоянный количественный рост и сфера нашей активности способствует подготовке и реализации модели развития.', '2019-02-04 17:09:33');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `user_id` smallint(5) UNSIGNED NOT NULL,
  `login` char(255) NOT NULL,
  `password` char(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `bio` varchar(255) DEFAULT NULL,
  `url` varchar(400) DEFAULT 'http://placehold.it/200x200'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`user_id`, `login`, `password`, `email`, `bio`, `url`) VALUES
(1, 'admin', 'admin', 'admin@mail.ua', 'Меняются моды, да', 'https://www.takefoto.ru/userfiles/image/Dlya%20Statey/%D0%9B%D1%8E%D0%B4%D0%B8%20%D0%B2%20%D0%BE%D1%80%D0%B3%D0%B0%D0%BD%D0%B8%D0%B7%D0%B0%D1%86%D0%B8%D1%8F%D1%85/1.jpg'),
(2, 'user1', 'user1', 'user1@mail.ua', NULL, '	http://placehold.it/200x200	'),
(3, 'user2', 'user2', 'user2@mail.ua', 'Я user2 ', 'https://is3-ssl.mzstatic.com/image/thumb/Purple3/v4/86/a7/13/86a713b1-9c0e-8bbd-8eda-61d4963faa85/mzl.hkweszdo.png/246x0w.jpg'),
(4, 'user3', 'user3', 'user3@mail.ua', 'Я user3', 'https://c1.staticflickr.com/6/5221/5669799022_53eff1f0f2.jpg'),
(5, 'user4', 'user4', 'user4@mail.ua', 'user4', 'https://vignette.wikia.nocookie.net/cityville/images/5/58/Viral_basketballcomplex_basketball_200x200.png/revision/latest?cb=20130613014636');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`article_id`),
  ADD KEY `fk_categorie_id` (`categorie_id`);

--
-- Индексы таблицы `articles_categories`
--
ALTER TABLE `articles_categories`
  ADD PRIMARY KEY (`categorie_id`);

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `fk_user_id` (`user_id`),
  ADD KEY `fk_article_id` (`article_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `articles`
--
ALTER TABLE `articles`
  MODIFY `article_id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `articles_categories`
--
ALTER TABLE `articles_categories`
  MODIFY `categorie_id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `user_id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `fk_categorie_id` FOREIGN KEY (`categorie_id`) REFERENCES `articles_categories` (`categorie_id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `fk_article_id` FOREIGN KEY (`article_id`) REFERENCES `articles` (`article_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
