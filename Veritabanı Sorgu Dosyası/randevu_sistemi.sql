-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 31 Ara 2016, 18:09:23
-- Sunucu sürümü: 5.7.14
-- PHP Sürümü: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `randevu_sistemi`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `doktor_randevu`
--

CREATE TABLE `doktor_randevu` (
  `pazartesi` varchar(20) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `sali` varchar(20) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `carsamba` varchar(20) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `persembe` varchar(20) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `cuma` varchar(20) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `no` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `doktor_randevu`
--

INSERT INTO `doktor_randevu` (`pazartesi`, `sali`, `carsamba`, `persembe`, `cuma`, `no`) VALUES
('Boş', 'Boş', 'Boş', 'Boş', 'Boş', 1),
('Boş', 'Boş', 'Boş', 'Boş', 'Boş', 2),
('Boş', 'Boş', 'Boş', 'Boş', 'Boş', 3),
('Boş', 'Boş', 'Boş', 'Boş', 'Boş', 4),
('Boş', 'Boş', 'Boş', 'Boş', 'Boş', 5),
('Boş', 'Boş', 'Boş', 'Boş', 'Boş', 6),
('Boş', 'Boş', 'Boş', 'Boş', 'Boş', 7);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uyeler`
--

CREATE TABLE `uyeler` (
  `ad` varchar(15) COLLATE utf8_turkish_ci NOT NULL,
  `soyad` varchar(15) COLLATE utf8_turkish_ci NOT NULL,
  `cinsiyet` varchar(10) COLLATE utf8_turkish_ci NOT NULL,
  `user_name` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `password` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `eposta` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `yas` varchar(10) COLLATE utf8_turkish_ci NOT NULL,
  `telefon` varchar(15) COLLATE utf8_turkish_ci NOT NULL,
  `sikayet` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `gizli_yanit` varchar(20) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
