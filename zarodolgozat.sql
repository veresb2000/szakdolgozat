-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2021. Ápr 08. 16:24
-- Kiszolgáló verziója: 10.4.14-MariaDB
-- PHP verzió: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `zarodolgozat`
--
CREATE DATABASE IF NOT EXISTS `zarodolgozat` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `zarodolgozat`;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `ellatas`
--

CREATE TABLE `ellatas` (
  `ID` int(3) NOT NULL,
  `ellatas` varchar(100) COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `ellatas`
--

INSERT INTO `ellatas` (`ID`, `ellatas`) VALUES
(1, 'csak reggeli'),
(2, 'fél panzió'),
(3, 'teljes');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `foglalas`
--

CREATE TABLE `foglalas` (
  `ID` int(3) NOT NULL,
  `szobaID` int(3) NOT NULL,
  `vendegID` int(3) NOT NULL,
  `elsoNap` date NOT NULL,
  `utolsoNap` date NOT NULL,
  `foglalas_datum` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `foglalas`
--

INSERT INTO `foglalas` (`ID`, `szobaID`, `vendegID`, `elsoNap`, `utolsoNap`, `foglalas_datum`) VALUES
(1, 1, 1, '2021-03-18', '2021-03-19', '2021-03-18'),
(3, 6, 1, '2021-03-18', '2021-03-19', '2021-03-18'),
(5, 9, 1, '2021-03-18', '2021-03-19', '2021-03-18'),
(6, 7, 1, '2021-03-19', '2021-03-20', '2021-03-19'),
(7, 8, 1, '2021-03-19', '2021-03-21', '2021-03-19'),
(8, 8, 1, '2021-03-19', '2021-03-21', '2021-03-19'),
(9, 7, 1, '2021-03-20', '2021-03-21', '2021-03-19'),
(10, 9, 1, '2021-03-21', '2021-03-22', '2021-03-19'),
(11, 8, 1, '2021-03-19', '2021-03-20', '2021-03-19'),
(12, 8, 1, '2021-03-19', '2021-03-20', '2021-03-19'),
(17, 2, 4, '2021-03-26', '2021-03-27', '2021-03-19'),
(18, 9, 6, '2021-03-22', '2021-03-26', '2021-03-20'),
(19, 2, 1, '2021-03-22', '2021-03-25', '2021-03-22'),
(20, 2, 1, '2021-03-24', '2021-03-26', '2021-03-22'),
(21, 2, 1, '2021-03-22', '2021-03-26', '2021-03-22'),
(22, 2, 1, '2021-03-22', '2021-03-26', '2021-03-22'),
(23, 3, 1, '2021-03-02', '2021-03-26', '2021-03-23'),
(43, 2, 2, '2021-03-25', '2021-03-25', '2021-03-25'),
(44, 4, 4, '2021-03-31', '2021-04-02', '2021-03-29'),
(47, 8, 1, '2021-04-08', '2021-04-09', '2021-04-08');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `recepcios`
--

CREATE TABLE `recepcios` (
  `ID` int(3) NOT NULL,
  `felhasznaloNev` varchar(100) COLLATE utf8_hungarian_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_hungarian_ci NOT NULL,
  `jelszo` varchar(100) COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `recepcios`
--

INSERT INTO `recepcios` (`ID`, `felhasznaloNev`, `email`, `jelszo`) VALUES
(1, 'recepcioLogin', 'recepcio@hotelszeged.com', '4SDqKAqlBpPVVo0AcUVkYA=='),
(2, 'recepcioTestLogin', 'recepcio@email.com', '56Zp+0AathomRtW8W1zkbA==');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `szoba`
--

CREATE TABLE `szoba` (
  `ID` int(3) NOT NULL,
  `ellatasID` int(3) NOT NULL,
  `tipusID` int(3) NOT NULL,
  `ferohely` int(3) NOT NULL,
  `ar` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `szoba`
--

INSERT INTO `szoba` (`ID`, `ellatasID`, `tipusID`, `ferohely`, `ar`) VALUES
(1, 1, 1, 2, 9500),
(2, 2, 1, 4, 12500),
(3, 2, 1, 6, 15000),
(4, 1, 2, 2, 12000),
(5, 2, 2, 4, 15000),
(6, 3, 2, 6, 17500),
(7, 1, 3, 2, 15000),
(8, 2, 3, 4, 17500),
(9, 3, 3, 6, 22000);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `tipus`
--

CREATE TABLE `tipus` (
  `ID` int(3) NOT NULL,
  `tipus` varchar(100) COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `tipus`
--

INSERT INTO `tipus` (`ID`, `tipus`) VALUES
(1, 'alap'),
(2, 'üzleti'),
(3, 'lakosztály');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `vendeg`
--

CREATE TABLE `vendeg` (
  `ID` int(3) NOT NULL,
  `logedin` tinyint(1) NOT NULL,
  `vezetekNev` varchar(100) COLLATE utf8_hungarian_ci NOT NULL,
  `keresztNev` varchar(100) COLLATE utf8_hungarian_ci NOT NULL,
  `elerhetoseg` varchar(100) COLLATE utf8_hungarian_ci NOT NULL,
  `felhasznaloNev` varchar(100) COLLATE utf8_hungarian_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_hungarian_ci NOT NULL,
  `jelszo` varchar(100) COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `vendeg`
--

INSERT INTO `vendeg` (`ID`, `logedin`, `vezetekNev`, `keresztNev`, `elerhetoseg`, `felhasznaloNev`, `email`, `jelszo`) VALUES
(1, 1, 'Veres', 'Bálint', '06501112233', 'veresB', 'veres@b.hu', '7815696ecbf1c96e6894b779456d330e'),
(2, 0, 'Balint', 'Veres', '065011122330', 'bVeres', 'v@v.hu', '7815696ecbf1c96e6894b779456d330e'),
(4, 0, 'Kovács', 'Pista', '06501112233', 'kovi', 'kovi@kovi.hu', 'bfd59291e825b5f2bbf1eb76569f8fe7'),
(6, 0, 'Veres', 'csenge', '123456', 'vcs92', 'szpcsenge92@gmail.com', 'ad18efdddd81836b97924bb6a5c1f411');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `ellatas`
--
ALTER TABLE `ellatas`
  ADD PRIMARY KEY (`ID`);

--
-- A tábla indexei `foglalas`
--
ALTER TABLE `foglalas`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `szobaSzamIdegenKulcs` (`szobaID`),
  ADD KEY `vendegIdegenKulcs` (`vendegID`);

--
-- A tábla indexei `recepcios`
--
ALTER TABLE `recepcios`
  ADD PRIMARY KEY (`ID`);

--
-- A tábla indexei `szoba`
--
ALTER TABLE `szoba`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ellatasIdegenKulcs` (`ellatasID`),
  ADD KEY `tipusIdegenKulcs` (`tipusID`);

--
-- A tábla indexei `tipus`
--
ALTER TABLE `tipus`
  ADD PRIMARY KEY (`ID`);

--
-- A tábla indexei `vendeg`
--
ALTER TABLE `vendeg`
  ADD PRIMARY KEY (`ID`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `ellatas`
--
ALTER TABLE `ellatas`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT a táblához `foglalas`
--
ALTER TABLE `foglalas`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT a táblához `recepcios`
--
ALTER TABLE `recepcios`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT a táblához `szoba`
--
ALTER TABLE `szoba`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT a táblához `tipus`
--
ALTER TABLE `tipus`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT a táblához `vendeg`
--
ALTER TABLE `vendeg`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Megkötések a kiírt táblákhoz
--

--
-- Megkötések a táblához `foglalas`
--
ALTER TABLE `foglalas`
  ADD CONSTRAINT `szobaSzamIdegenKulcs` FOREIGN KEY (`szobaID`) REFERENCES `szoba` (`ID`),
  ADD CONSTRAINT `vendegIdegenKulcs` FOREIGN KEY (`vendegID`) REFERENCES `vendeg` (`ID`);

--
-- Megkötések a táblához `szoba`
--
ALTER TABLE `szoba`
  ADD CONSTRAINT `ellatasIdegenKulcs` FOREIGN KEY (`ellatasID`) REFERENCES `ellatas` (`ID`),
  ADD CONSTRAINT `tipusIdegenKulcs` FOREIGN KEY (`tipusID`) REFERENCES `tipus` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
