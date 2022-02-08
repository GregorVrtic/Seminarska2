-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Gostitelj: 127.0.0.1
-- Čas nastanka: 08. feb 2022 ob 15.24
-- Različica strežnika: 10.4.22-MariaDB
-- Različica PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Zbirka podatkov: `seminarska2`
--

-- --------------------------------------------------------

--
-- Struktura tabele `crud`
--

CREATE TABLE `crud` (
  `crude_id` int(12) NOT NULL,
  `ime` varchar(255) NOT NULL,
  `priimek` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `naslov` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Odloži podatke za tabelo `crud`
--

INSERT INTO `crud` (`crude_id`, `ime`, `priimek`, `email`, `naslov`) VALUES
(36, 'Janez', 'Marković', 'janez23@gmail.com', 'Trebnje'),
(37, 'Katja', 'Berce', 'katjapopravek@gmail.com', 'Bled'),
(38, 'Janez', 'Branik', 'janez@gmail.com', 'Portorož'),
(40, 'Neja', 'Branik', 'neja@gmail.com', 'Portorož'),
(41, 'Matej', 'Pipan', 'alfa@gmail.com', 'alfa');

-- --------------------------------------------------------

--
-- Struktura tabele `uporabniki`
--

CREATE TABLE `uporabniki` (
  `uporabnik_id` int(11) NOT NULL,
  `ime` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_slovenian_ci NOT NULL,
  `priimek` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_slovenian_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_slovenian_ci NOT NULL,
  `usernickname` varchar(255) CHARACTER SET utf8 COLLATE utf8_slovenian_ci NOT NULL,
  `geslo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_slovenian_ci NOT NULL,
  `datumprijave` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Odloži podatke za tabelo `uporabniki`
--

INSERT INTO `uporabniki` (`uporabnik_id`, `ime`, `priimek`, `email`, `usernickname`, `geslo`, `datumprijave`) VALUES
(1, 'Janez', 'Marković', 'mail@gmail.com', 'Janez2', 'geslo', '2022-02-05 20:14:28'),
(2, 'Gregor ', 'Vrtič', 'mojmail@gmail.com', 'Gregor', 'geslo1234', '2022-02-05 20:35:48'),
(3, 'Matjaž', 'Mađarevič', '123mail@gmail.com', 'muzza', '$2y$10$XMukv.o0XhGJayQ1T2f9CObgAdhhjruc7cAUzivWP8vX/ePrBlMcO', '2022-02-06 11:51:40'),
(4, 'Barbara', 'Makarovič', 'barbi@gmail.com', 'Barbi6', '$2y$10$K.29b5C8bev/lT564Ldoe..Uru5DYZnYO.YG265nkXvsKiAMCrgsK', '2022-02-06 11:52:34'),
(5, 'Neja', 'Zver', 'nejci@gmai.com', 'neja11', '$2y$10$MMXTNv.yTKbuNvruXTIXpe7yAoPeZrdo3OTVovskCmB1m7PmMN8QW', '2022-02-06 11:55:17'),
(6, 'Marija', 'Terezija', 'mati123@gmail.com', 'MarijaM', '$2y$10$UkE3xsWALtZbW/eH1Pw6iec9syKtGaXCtLaNnkrq55RWWIVHAiOrO', '2022-02-06 12:14:41'),
(7, 'Tine', 'Bajt', 'bajt@gmail.com', 'Bajt2', '$2y$10$.L/i69gEf..EWBUgmiZN.ueTJFdcRJdtT47PaD5c3auJEuxtZ8TI.', '2022-02-06 12:17:29'),
(8, 'Gašper', 'Marinović', 'gogi@gmail.com', 'Gape25', '$2y$10$x2YeJko7A7T7tbesDYkMKeSFPjoyabtvttcrugmRRSt2bXBB1LZSa', '2022-02-06 12:20:09'),
(9, 'Jure', 'Brkič', 'jure@gmail.com', 'Vato', '$2y$10$76C3nWeC2eKjL7WH81bFwuvJyzWP.GTIoN/GHN4nCeYe5W3OTyq.a', '2022-02-06 13:22:01'),
(10, 'Denis', 'Cmok', 'denis@gmail.com', 'CMOK', '$2y$10$uWZ0/Npn0LRLpb1CHzReYOAGLrEzG1zC8cv0.XLLKMEGWlA2LUDyS', '2022-02-06 13:30:16'),
(11, 'Tatjana', 'Brence', 'tatjana@gmail.com', 'tatjana', '$2y$10$2yiYVVokg/cMayih2cAgUevhHPQR5YKdMuzjPz1k.eSewF1xLzaNy', '2022-02-06 13:32:03'),
(12, 'Barbara', 'Marc', 'barbara@gmail.com', 'Bibi', '$2y$10$UgqRnpWqBmewperjbk6Db.sQqSDLDntGV/WPUC5xDxE2jXLX.W2ZG', '2022-02-06 20:06:34'),
(13, 'Deni', 'Ribič', 'deni@gmail.com', 'Riba', '$2y$10$fECp3vUyS0ecm5eraW9yG.N6sGX4aEN.faIYdZloQ7GCfyG6XTNqe', '2022-02-07 12:57:48'),
(14, '', 'Grega', 'Vrtič', 'crude@mail.com', 'Sežana', '2022-02-07 14:49:35'),
(15, 'Gregor', 'Vrtič', 'gmail@mail.com', 'jaz', '$2y$10$U9GYAm5Bc68N.XNrTIrbIe4umklOx8ycIGX7DukxdzgCjdwvs9v3m', '2022-02-07 21:12:07'),
(16, 'Grega', 'Neki', 'neki@gmail.com', 'NekiG', '$2y$10$D7dFHtLqU2WtabP8nYnQYOm.70pjG7fAIMWBmfU3lf3XTW0ohfssq', '2022-02-07 23:13:15');

-- --------------------------------------------------------

--
-- Struktura tabele `vlog`
--

CREATE TABLE `vlog` (
  `vlogid` int(11) NOT NULL,
  `nick` varchar(255) NOT NULL,
  `naslov` varchar(255) NOT NULL,
  `vsebina` text NOT NULL,
  `datumObjave` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Odloži podatke za tabelo `vlog`
--

INSERT INTO `vlog` (`vlogid`, `nick`, `naslov`, `vsebina`, `datumObjave`) VALUES
(1, 'Vato', 'Prvi vlog o spletnem programiranju', 'Why do we use it?\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2022-02-06 20:33:11'),
(2, 'Cmok', 'What is Lorem Ipsum?', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', '2022-02-07 10:02:18'),
(3, 'Gregor', 'Where can I get some?', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. ', '2022-02-07 10:02:18'),
(4, 'Bibi', 'Where does it come from?\r\n', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.', '2022-02-07 10:03:10'),
(5, 'Gape', 'The standard Lorem Ipsum passage, used since the 1500s', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"', '2022-02-07 10:03:10'),
(6, 'Vato', '1914 translation by H. Rackham', '\"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain.', '2022-02-07 10:04:30'),
(7, 'Gregor', 'de Finibus Bonorum et Malorum', '\"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.', '2022-02-07 10:04:30');

--
-- Indeksi zavrženih tabel
--

--
-- Indeksi tabele `crud`
--
ALTER TABLE `crud`
  ADD PRIMARY KEY (`crude_id`);

--
-- Indeksi tabele `uporabniki`
--
ALTER TABLE `uporabniki`
  ADD PRIMARY KEY (`uporabnik_id`);

--
-- Indeksi tabele `vlog`
--
ALTER TABLE `vlog`
  ADD PRIMARY KEY (`vlogid`);

--
-- AUTO_INCREMENT zavrženih tabel
--

--
-- AUTO_INCREMENT tabele `crud`
--
ALTER TABLE `crud`
  MODIFY `crude_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT tabele `uporabniki`
--
ALTER TABLE `uporabniki`
  MODIFY `uporabnik_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT tabele `vlog`
--
ALTER TABLE `vlog`
  MODIFY `vlogid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
