-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 20 Lut 2022, 17:54
-- Wersja serwera: 10.3.15-MariaDB
-- Wersja PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `kazachstan`
--
DROP DATABASE IF EXISTS `kazachstan`;
CREATE DATABASE IF NOT EXISTS `kazachstan` DEFAULT CHARACTER SET utf8 COLLATE utf8_polish_ci;
USE `kazachstan`;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `komentarze`
--

CREATE TABLE `komentarze` (
  `id` int(11) NOT NULL,
  `ob_id` int(11) NOT NULL,
  `tresc` text COLLATE utf8_polish_ci NOT NULL,
  `data` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `komentarze`
--

INSERT INTO `komentarze` (`id`, `ob_id`, `tresc`, `data`) VALUES
(25, 1, 'fajny', '2021-12-06 17:27:10'),
(26, 1, 'niefajny', '2021-12-06 17:27:22'),
(27, 1, 'taki sredni', '2021-12-06 17:27:35'),
(29, 1, 'calkiem spoko', '2021-12-06 17:30:54'),
(30, 1, 'Sasasdasdsa21', '2021-12-06 17:36:07'),
(31, 7, 'lorem', '2021-12-06 17:45:18'),
(32, 3, 'pozdrawiam zsi', '2021-12-06 17:49:23'),
(33, 1, 'bardzo mily zawsze dzien dobry na klatce mowil', '2021-12-06 18:55:38'),
(41, 1, 'dsdsadad', '2021-12-10 17:35:32'),
(42, 7, 'sadsadsadsa', '2021-12-10 17:36:53'),
(43, 1, 'sadasdsadsa', '2021-12-10 17:45:26'),
(45, 5, 'asd sadas das dsad sad', '2021-12-10 17:48:43'),
(46, 2, 'asdsaddddddddddsacxcsaa', '2021-12-10 17:57:52'),
(47, 1, 'sadasdsadsa', '2021-12-10 18:52:05'),
(48, 1, 'sdfdsfdsf', '2021-12-10 18:55:19'),
(49, 1, '34', '2021-12-10 18:55:24'),
(50, 1, '34', '2021-12-10 18:55:25'),
(51, 1, '22', '2021-12-10 18:56:04'),
(52, 1, '34', '2021-12-10 18:56:12'),
(53, 1, 'sadasd', '2021-12-10 18:56:31'),
(54, 1, 'Ä™Ä™Ä™we', '2021-12-10 18:56:54'),
(55, 1, 'sadsadsadsad', '2021-12-10 18:57:01'),
(56, 1, '34', '2021-12-10 18:57:07'),
(57, 1, 'SDSAasd34', '2021-12-10 18:57:14'),
(58, 1, 'Ä™Å›Ä…Ä‡Å¼ 234324 psdsdf', '2021-12-10 18:57:27'),
(59, 7, 'asdasd', '2021-12-10 18:58:36'),
(60, 7, 'sadeÄ™Ä™Ä™', '2021-12-10 18:58:47'),
(61, 1, 'zarÄ…bisty', '2021-12-10 19:03:01'),
(62, 1, 'sd', '2021-12-10 19:05:04'),
(63, 1, 'a', '2021-12-10 19:05:10'),
(64, 1, 'asdsad', '2021-12-10 19:08:14'),
(65, 1, 'asdsadasd', '2021-12-10 19:08:26'),
(66, 1, 'asdsadsad', '2021-12-10 19:09:21'),
(67, 1, 'asdasdasdsad', '2021-12-10 19:12:48'),
(68, 1, 'Ä™Å›Ä…Ä‡Åº', '2021-12-10 19:13:06'),
(69, 1, 'asdasdsad', '2021-12-10 19:17:46'),
(70, 1, 'asdasdsad', '2021-12-10 19:18:16'),
(72, 5, 'Ä™Å›Ä…Ä‡ÅºÄ™', '2021-12-10 19:24:03'),
(73, 2, 'Ä™Å›Ä…Ä‡ÅºÄ™', '2021-12-10 20:58:29'),
(76, 8, '123456', '2021-12-11 11:11:33'),
(77, 8, 'Ä™Å›Ä…Ä‡ÅºÄ™', '2021-12-11 11:11:41'),
(80, 2, 'asdsadsadsad', '2021-12-11 15:20:48'),
(83, 8, 'sadsadsadsad', '2021-12-11 15:31:09'),
(84, 3, 'ja rÃ³wnieÅ¼', '2021-12-11 15:39:05'),
(89, 5, 'sdfdsfsdfsdfsdf', '2021-12-12 18:32:32'),
(90, 5, 'dsfsdfsdfsdf', '2021-12-12 18:32:39'),
(91, 5, 'sdfdsfsdfsdf', '2021-12-12 18:32:45'),
(92, 5, 'sadsadasdsadas', '2021-12-12 18:32:52'),
(93, 5, 'sadsadsadsadsad', '2021-12-12 18:32:59'),
(94, 7, 'dfdfsdfsd', '2021-12-20 17:59:25'),
(96, 7, '.....,,,,,', '2021-12-21 10:39:53'),
(98, 5, 'sadsadsad', '2021-12-21 19:18:39'),
(99, 5, 'dsfdsfdsf', '2021-12-21 19:18:47'),
(100, 5, 'asdsadsad', '2021-12-21 19:18:56'),
(101, 5, 'asdasd', '2021-12-21 19:19:03'),
(102, 5, 'adssadsad', '2021-12-21 19:19:10'),
(103, 3, 'asdasdsadsadsa', '2022-01-08 16:09:36'),
(104, 3, 'asdsadasdsad', '2022-01-08 16:09:47'),
(105, 7, 'sadsadsadsad', '2022-01-08 16:14:04'),
(106, 7, 'adssadsadasd', '2022-01-08 16:14:11'),
(108, 1, 'asdsadsadasd', '2022-01-08 20:04:58'),
(115, 3, 'sadsadasd', '2022-01-09 16:11:32'),
(116, 1, 'hgkvhjvgf hgvhtf', '2022-01-13 18:51:21'),
(117, 1, 'bardzo fajny, lubie polecam cieplutko z rodzinkÄ…', '2022-01-26 15:20:54');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `obywatele`
--

CREATE TABLE `obywatele` (
  `id` int(11) NOT NULL,
  `imie` text CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `nazwisko` text CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `wiek` int(11) NOT NULL,
  `plec` text NOT NULL,
  `narodowosc` text NOT NULL,
  `ilosc_ocen` int(11) NOT NULL,
  `suma_ocen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `obywatele`
--

INSERT INTO `obywatele` (`id`, `imie`, `nazwisko`, `wiek`, `plec`, `narodowosc`, `ilosc_ocen`, `suma_ocen`) VALUES
(1, 'obywatel', 'jeden', 45, 'kobieta', 'gruzińska', 1, 4),
(2, 'obywatel', 'dwa', 98, 'mężczyzna', 'kazachska', 1, 4),
(3, 'obywatel', 'trzy', 12, 'kobieta', 'ukraińska', 1, 5),
(4, 'obywatel', 'cztery', 67, 'mężczyzna', 'kazachska', 2, 6),
(5, 'obywatel', 'pięć', 34, 'mężczyzna', 'rosyjska', 6, 15),
(6, 'obywatel', 'sześć', 37, 'kobieta', 'polska', 6, 18),
(7, 'obywatel', 'siedem', 98, 'Kobieta', 'Kazachska', 2, 8),
(8, 'obywatel', 'osiem', 34, 'kobieta', 'polska', 1, 4),
(9, 'obywatel', 'dziewiec', 34, 'Kobieta', 'polska', 0, 0),
(10, 'obywatel', 'nowak', 55, 'Mężczyzna', 'asdsadsd', 0, 0),
(11, 'erfger', 'ertgffdg', 99, 'Kobieta', 'sdsf', 0, 0),
(12, 'obywatelka', 'sdfdsfsdf', 56, 'Kobieta', 'dfgdfgfdgfd', 0, 0),
(13, 'asdasdsad', 'asdsadsad', 43, 'Mężczyzna', 'asdasdsadsa', 0, 0),
(14, 'adsdad', 'asdsad', 33, 'Mężczyzna', 'asdasdsa', 0, 0),
(15, 'asdasdas', 'dsadsad', 43, 'Kobieta', 'sadsad', 0, 0),
(16, 'asdsfds', 'fdsffg', 3, 'Mężczyzna', 'asdasdas', 0, 0),
(17, 'asdsadsa', 'dsadsad', 34, 'Mężczyzna', 'asdasdsad', 0, 0);

--
-- Wyzwalacze `obywatele`
--
DELIMITER $$
CREATE TRIGGER `ob_bd` BEFORE DELETE ON `obywatele` FOR EACH ROW DELETE FROM komentarze WHERE ob_id = OLD.id
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uwagi`
--

CREATE TABLE `uwagi` (
  `id` int(11) NOT NULL,
  `tresc` text COLLATE utf8_polish_ci NOT NULL,
  `podpis` text COLLATE utf8_polish_ci DEFAULT NULL,
  `data` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `uwagi`
--

INSERT INTO `uwagi` (`id`, `tresc`, `podpis`, `data`) VALUES
(25, 'aasdasdsadsadsad', 'asdsad', '2022-01-08 20:02:50'),
(26, 'xcvcxvcbv sdfdfdfds', '', '2022-01-13 18:54:13');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy`
--

CREATE TABLE `uzytkownicy` (
  `id` int(11) NOT NULL,
  `nick` text NOT NULL,
  `haslo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`id`, `nick`, `haslo`) VALUES
(1, 'admin', 'admin');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `komentarze`
--
ALTER TABLE `komentarze`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `obywatele`
--
ALTER TABLE `obywatele`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `uwagi`
--
ALTER TABLE `uwagi`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `komentarze`
--
ALTER TABLE `komentarze`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT dla tabeli `obywatele`
--
ALTER TABLE `obywatele`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT dla tabeli `uwagi`
--
ALTER TABLE `uwagi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
