-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 14 Haz 2022, 22:32:59
-- Sunucu sürümü: 10.4.24-MariaDB
-- PHP Sürümü: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `kullaniciler`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yorumlar`
--

CREATE TABLE `yorumlar` (
  `kullaniciadi` varchar(25) DEFAULT NULL,
  `yorumu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `yorumlar`
--

INSERT INTO `yorumlar` (`kullaniciadi`, `yorumu`) VALUES
('elif42', 'La Roche-Posay Effaclar Jel Temizleme Jeli : Ürün zaten akneye meyilli ve yağlı ciltler için üretildiğinden dolayı cilt tipini doğru analiz edip de kullanan herkes için uygundur. Benim cildime çok iyi geldi. Parlamalar ve yağlanmalar düzenli kullanımda azalıyor. Kokusu da ferahlık hissi uyandırıyor. 1 pompası tüm yüze çok çok rahat yettiği için epey bereketli bir ürün. Ayrıca ürün jet hızıyla ulaştı böyle güzel paketleme ve hızlı satıcı görmedim harikasınız'),
('beyza35', 'Solenta Güneş Kremi: Leke ve akne surecinde en etkili güneş kremlerinden biri. Farklı ürünleri de kullandım.  Ama bu ürün en iyisi. Diyat ilarak da muadillerine göre gayet uygun. Satıcıya teşekkür ederim.'),
('melise27', 'Dercos Anti-Dandruff  şampuan:Konak seklinde kepeklenmem asiri kasinti,yikansaniz bile aksamina dibi yaglanan berbat durumda sac derim vardi,herseyi denedim olmadi,bunu deneyim dedim,saclarimi iyi islatiyorum nohut büyüklüğünde aliyorum elimde ovup avucuma esit dagitiyorum alindan enseye doğru esit sekilde krem surer gibi sürüyorum ve iki dakika diplere masaj yapiyorum 5 dakika,toplamda 7 dakika bekletiyorum,direk alip surerseniz hic kopuk olmuyor avucunuzda dagitip yaparsaniz homojen dagiliyor ve guzel yikiyor.islemi 2 bazen 3 tekrar yapiyorum ilk yıkamada sadece kasintinizi aliyor 3.yikamadan sonra ne kepek ne yag ne kasinti birşeyden eser birakmiyor');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `üyelik`
--

CREATE TABLE `üyelik` (
  `id` int(11) NOT NULL,
  `kullaniciadi` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `parola` varchar(500) NOT NULL,
  `kayittarihi` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `üyelik`
--

INSERT INTO `üyelik` (`id`, `kullaniciadi`, `email`, `parola`, `kayittarihi`) VALUES
(1, 'elif42', 'azyeb420@gmail.com', '$2y$10$HlVwj1FhOlkL7jeo6rd9/uQn6Hq9ZIIlfl2fW75ESgVzS.bEvVBYK', '0000-00-00 00:00:00'),
(2, 'erdo16', 'erdo16@gmail.com', '$2y$10$VBsRQ2.kYtFm/lPgfFPrz./CGeeK6E1SlpyKI3ZzaJY0D/CAnaBqm', '0000-00-00 00:00:00'),
(3, 'melise27', 'melise27@gmail.com', '$2y$10$bxi/7IEbo2MfHIGlWA5nbOWy71QdQaqYGKx9ZMZdOt.qvROSSLUn.', '0000-00-00 00:00:00'),
(4, 'beyza35', 'azyeb420@gmail.com', '$2y$10$kcCPHRov8O.rLyPdpYsLFetaMGOe4uPi9XP.KtyR2QnLTgD9inC9e', '0000-00-00 00:00:00');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `üyelik`
--
ALTER TABLE `üyelik`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `üyelik`
--
ALTER TABLE `üyelik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
