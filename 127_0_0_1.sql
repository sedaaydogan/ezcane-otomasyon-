-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 30 Ara 2015, 10:20:39
-- Sunucu sürümü: 5.6.17
-- PHP Sürümü: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `blog`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `alan_degerler`
--

CREATE TABLE IF NOT EXISTS `alan_degerler` (
  `deger_id` int(11) NOT NULL AUTO_INCREMENT,
  `deger_alan_id` int(11) NOT NULL,
  `deger_icerik` text CHARACTER SET latin5 NOT NULL,
  `deger_konu_id` int(11) NOT NULL,
  PRIMARY KEY (`deger_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=11 ;

--
-- Tablo döküm verisi `alan_degerler`
--

INSERT INTO `alan_degerler` (`deger_id`, `deger_alan_id`, `deger_icerik`, `deger_konu_id`) VALUES
(1, 1, 'http://i.huffpost.com/gen/1225236/images/n-FRANZ-KAFKA-large570.jpg', 19),
(5, 1, 'http://thegeyik.com/wp-content/uploads/2015/06/milenaya-mektup-kafka.jpg', 16),
(6, 4, 'http://thegeyik.com/wp-content/uploads/2015/06/milenaya-mektup-kafka.jpg', 16),
(7, 1, 'resim', 22),
(8, 4, 'link', 22),
(9, 1, 'https://upload.wikimedia.org/wikipedia/commons/b/bf/Vladimir_mayakovsky_and_lilya_brik.jpg', 23),
(10, 4, 'https://www.youtube.com/watch?v=dKkuS3s7pJU', 23);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayarlar`
--

CREATE TABLE IF NOT EXISTS `ayarlar` (
  `site_url` varchar(200) CHARACTER SET utf8 NOT NULL,
  `site_baslik` varchar(250) CHARACTER SET utf8 NOT NULL,
  `site_desc` varchar(300) CHARACTER SET utf8 NOT NULL,
  `site_keyw` varchar(300) CHARACTER SET utf8 NOT NULL,
  `site_tema` varchar(150) CHARACTER SET utf8 NOT NULL,
  `site_durum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ayarlar`
--

INSERT INTO `ayarlar` (`site_url`, `site_baslik`, `site_desc`, `site_keyw`, `site_tema`, `site_durum`) VALUES
('http://localhost:81', 'kafkaesk', 'description', 'keywords', 'default', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ilave_alanlar`
--

CREATE TABLE IF NOT EXISTS `ilave_alanlar` (
  `alan_id` int(11) NOT NULL AUTO_INCREMENT,
  `alan_adi` varchar(200) CHARACTER SET latin5 NOT NULL,
  `alan_tip` int(11) NOT NULL,
  PRIMARY KEY (`alan_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=5 ;

--
-- Tablo döküm verisi `ilave_alanlar`
--

INSERT INTO `ilave_alanlar` (`alan_id`, `alan_adi`, `alan_tip`) VALUES
(1, 'Resim', 1),
(4, 'Link', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategoriler`
--

CREATE TABLE IF NOT EXISTS `kategoriler` (
  `kategori_id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori_adi` varchar(200) CHARACTER SET utf8 NOT NULL,
  `kategori_link` varchar(200) CHARACTER SET utf8 NOT NULL,
  `kategori_desc` varchar(250) CHARACTER SET utf8 NOT NULL,
  `kategori_keyw` varchar(250) CHARACTER SET utf8 NOT NULL,
  `kategori_anasayfa_konu` varchar(100) CHARACTER SET utf8 NOT NULL,
  `kategori_full_konu` varchar(100) CHARACTER SET utf8 NOT NULL,
  `kategori_tarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`kategori_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=27 ;

--
-- Tablo döküm verisi `kategoriler`
--

INSERT INTO `kategoriler` (`kategori_id`, `kategori_adi`, `kategori_link`, `kategori_desc`, `kategori_keyw`, `kategori_anasayfa_konu`, `kategori_full_konu`, `kategori_tarih`) VALUES
(21, 'MAYAKOVSKİLER', 'mayakovskiler', 'lili birik', 'lili', 'yasenin', 'sergey', '2015-09-11 16:24:41'),
(22, 'Senin F.', 'senin-f', 'kafka milena', 'kafka', 'milena', 'milenaaa', '2015-09-11 16:30:23'),
(24, 'Kategori Adı', 'kategori-adi', 'dd', 'dd', 'dd', 'dd', '2015-11-02 12:43:33'),
(25, 'deneme', 'deneme', 'deneme', 'deneme', 'deneme', 'deneme', '2015-11-02 19:09:44'),
(26, 'yeni kategori', 'yeni-kategori', 'yeni kategori', 'yeni kategori', 'yeni kategori', 'yeni kategori', '2015-11-02 19:39:36');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `konular`
--

CREATE TABLE IF NOT EXISTS `konular` (
  `konu_id` int(11) NOT NULL AUTO_INCREMENT,
  `konu_baslik` varchar(300) CHARACTER SET latin5 NOT NULL,
  `konu_link` varchar(300) CHARACTER SET latin5 NOT NULL,
  `konu_aciklama` text CHARACTER SET latin5 NOT NULL,
  `konu_etiket` varchar(500) CHARACTER SET latin5 NOT NULL,
  `konu_ekleyen` int(11) NOT NULL,
  `konu_tarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `konu_kategori` int(11) NOT NULL,
  `konu_onay` int(11) NOT NULL,
  `konu_anasayfa` int(11) NOT NULL,
  `konu_hit` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`konu_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=25 ;

--
-- Tablo döküm verisi `konular`
--

INSERT INTO `konular` (`konu_id`, `konu_baslik`, `konu_link`, `konu_aciklama`, `konu_etiket`, `konu_ekleyen`, `konu_tarih`, `konu_kategori`, `konu_onay`, `konu_anasayfa`, `konu_hit`) VALUES
(14, 'Beni Sev LİLİ ! - LİLİ..!', 'beni-sev-lili-lili', 'istemiyorum--------------birikler', 'son mektup', 1, '2015-09-11 16:25:46', 21, 1, 1, 0),
(15, 'Benim Bağırasım Gelir PİRAYE !', 'benim-bagirasim-gelir-piraye', 'sen bilmezsin--------------nazım hikmet piraye', 'bilemıyorum', 1, '2015-09-11 16:27:30', 21, 1, 1, 0),
(16, 'Milena !', 'milena', 'herşeye rağmen sana selamlarımı gönderiyorum. kapının önüne yığılı verseler dahi ne çıkar daha da güçlenirler belki...--------------korkabilirsin diyorum çünkü senin tanıdığın o adam yok \r\nartık hiçbir zaman da olmadı zaten. sadece ikiye \r\nayrılmak üzere olan bir adam var. \r\nbirgün birlikte yaşarsak milena o viyana?da \r\ngördüğün adam çıkıverebilir her an ortaya. \r\nyine de çok derinlerde kendisini herkesten saklayan biri vardır. \r\nbenim bile doğru dürüst tanımadığım güçlü her zaman oydu aslında, \r\nelindeki iplerle beni oynatan.\r\n neden hiç çıkarmaz ki kendini ortaya?\r\n\r\nyeryüzünde tam olarak bildiğimiz şeyler çok azdır \r\nama şunu iyi biliyoruz ki ikimizde: ?\r\nbiz hiçbir zaman birlikte olamayacağız?\r\n yarın yataktan kalkamaycağımı bildiğim gibi. \r\nbu kalkma işi insan iradesinin de üstüne çıkıyor galiba..\r\n\r\nhesapladığımdan daha önce göreceğiz galiba birbirimizi. \r\nama yine de hiçbir zaman birlikte olamayacağımızı \r\ndüşünmekten alıkoyamıyorum kendimi. \r\n?önce? ile ?hiçbir zaman? birbirinin aynı olan kelimelerdir.\r\n\r\niki saat boyunca sedirde uzanmış seni düşünüyordum.\r\n şunu iyi bil ki milena biz yanyana gelmiş benim yere \r\nyığılmış varlığımı izliyoruz ama senin yanında\r\n duran ben cansızım artık.\r\nartık sonbahar da oyun oynuyor benimle. \r\nzaman zaman kuşkuya düşecek kadar yanıyor \r\nyine kuşkuya düşecek kadar üşüyorum..', 'milena,kafka,prag', 1, '2015-09-11 16:30:58', 22, 1, 1, 0),
(19, 'Sergey Yesenin', 'sergey-yesenin', 'Ölmek yeni bir şey değil dünyada,\r\n Ama yaşamak da daha yeni değil kuşkusuz--------------İyi Günler İlerde Anneanne\r\n\r\niyi günler ilerde anneanne \r\n iyi günler ilerde \r\n bense yirmidört saatlik \r\n günlerdeyim anneanne \r\n\r\nrüyalarında senin ne kıyamet kopuyor \r\n ne de bir gül düşüyor dalından \r\n sen böyle istersin bilirim \r\n gülümseyerek anneanne \r\n\r\noysa ne sarışın kızlar \r\n göz kırpıyor esmer delikanlılara \r\n ne de ortadoğu \r\n bir gül bahçesi oluyor \r\n\r\nyine de iyi günler \r\n ilerde anneanne \r\n esmerliğimiz \r\n kıyamet herkese \r\n\r\nhalime bakıp üzülme anneanne \r\n bir bakarsın dayımla beraber \r\n ortak bir iş kurar \r\n belki bir süpermarket açarız \r\n\r\nne dersin, kasada da \r\n muzaffer durur, gülümseyerek \r\n yok yok olur, dandy, pop-corn \r\n ve kalve çorba satarız. \r\n\r\nkahrolsun amerika deriz sonra \r\n kahrolsun fransa için ve mançurya \r\n kahrolur biz böyle deyince \r\n devr-i daim düzeniyle dönen dünya \r\n\r\nmançurya da kahrolur \r\n niye kahrolacaksa \r\n\r\nanneanne, müzmin \r\n başağrılarım artıyor \r\n işte yaşamak bu deyip dostlar \r\n müttefiklere gülümsediğinde \r\n\r\nanneanne, ah anneanne \r\n çıkış yok ve bu tereke \r\n rahmetli dedemin yüreğinden \r\n daha eski bir mesele \r\n\r\nyüreğimiz bölüştürülemez \r\n iyi günler ilerde \r\n\r\nsade ekmeği bildiğimiz \r\n günler geçmişte \r\n ve güzeldi anneanne \r\nşimdi ekmek dile gelse \r\n boğazımızdan geçişine \r\n utandığını söylerdi \r\n\r\niyi günler yok! \r\n iyi günler yok anneanne \r\n\r\nkıyamet bize \r\n kıyamet bize \r\n kıyamet bize \r\n\r\nkıyam/et bize', 'yesenin,ismail kılıçarslan,hüseyin atlansoy,anneanne', 1, '2015-09-17 18:09:52', 21, 1, 1, 0),
(23, 'Son Mektup', 'son-mektup', 'Mayakovski nin cesedinin yanında bulunur.--------------Hepinize! .. \r\nİşte ölüyorum. Kimseyi suçlamayın bundan ötürü. Hele \r\ndedikodudan, unutmayın ki, merhum nefret ederdi. \r\nAnacığım, kardeşlerim, yoldaşlarım! Bağışlayın beni. İş \r\ndeğil bu, biliyorum (kimseye de öğütlemem) , ama benim \r\niçin başka bir çıkar yol kalmamıştı. \r\nLili, beni sev. \r\nHükümet Yoldaş! Ailem: Lili Brik, anam, kız kardeşlerim \r\nve Veronika Vitoldovna Polonkaya?dan ibarettir; yaşamlarını \r\nsağlarsan, ne mutlu bana... \r\nBitmemiş şiirleri Brik?lere verin, ne lâzımsa onlar yapar. \r\n?Bir varmış bir yokmuş? \r\nderler hani: \r\nAşkın küçük sandalı \r\nhayat ırmağının akıntısına kafa \r\ntutabilir mi! \r\nDayanamayıp parçalandı işte sonunda... \r\nAcıları \r\nmutsuzlukları \r\nkarşılıklı haksızlıkları \r\nHatırlamaya bile değmez:\r\nÖdeşmiş durumdayız kahpe felekle. \r\nVe sizler mutlu olun \r\nyeter.', 'lili brik,kafka', 1, '2015-09-23 20:50:46', 21, 1, 1, 0),
(24, 'yeni konu', 'yeni-konu', 'yeni konu--------------yeni konu', '', 1, '2015-11-02 19:48:28', 21, 1, 1, 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uyeler`
--

CREATE TABLE IF NOT EXISTS `uyeler` (
  `uye_id` int(11) NOT NULL AUTO_INCREMENT,
  `uye_kadi` varchar(200) NOT NULL,
  `uye_link` varchar(200) NOT NULL,
  `uye_sifre` varchar(200) NOT NULL,
  `uye_eposta` varchar(200) NOT NULL,
  `uye_avatar` varchar(300) NOT NULL,
  `uye_cinsiyet` int(11) NOT NULL,
  `uye_hakkinda` text NOT NULL,
  `uye_tarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `uye_rutbe` int(11) NOT NULL,
  `uye_onay` int(11) NOT NULL,
  PRIMARY KEY (`uye_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Tablo döküm verisi `uyeler`
--

INSERT INTO `uyeler` (`uye_id`, `uye_kadi`, `uye_link`, `uye_sifre`, `uye_eposta`, `uye_avatar`, `uye_cinsiyet`, `uye_hakkinda`, `uye_tarih`, `uye_rutbe`, `uye_onay`) VALUES
(10, 'ayshe', 'ayshe', '884ce4bb65d328ecb03c598409e2b168', 'ayshe@hotmail.com', '', 2, 'afdfdf', '2015-09-13 17:02:51', 2, 1),
(11, 'sedaa', 'sedaa', '202cb962ac59075b964b07152d234b70', 'seda', '', 1, 'sdd', '2015-10-30 16:58:58', 2, 1),
(12, 'akif', 'akif', '774c643b4e9fd67bb70d7f648d439247', 'akif', '', 0, '', '2015-10-31 12:15:12', 2, 0),
(13, 'asra', 'asra', '4e430e7479201f968997f52393a385a8', 'asra', '', 0, '', '2015-10-31 12:16:18', 2, 0),
(14, 'tansu', 'tansu', 'b89bb33b49181dbbac972d53d1f352d8', 'tansu', '', 0, '', '2015-10-31 12:17:56', 2, 1),
(15, 'büşra', 'busra', 'a38c97ce1c6b3d81b3595d2607169b93', 'büşra', '', 0, '', '2015-10-31 21:21:40', 2, 1),
(16, 'furkan', 'furkan', '202cb962ac59075b964b07152d234b70', 'furkan', '', 1, 'sdf', '2015-11-01 18:38:54', 2, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yorumlar`
--

CREATE TABLE IF NOT EXISTS `yorumlar` (
  `yorum_id` int(11) NOT NULL AUTO_INCREMENT,
  `yorum_konu_id` int(11) NOT NULL,
  `yorum_ekleyen` varchar(150) CHARACTER SET latin5 NOT NULL,
  `yorum_icerik` text CHARACTER SET latin5 NOT NULL,
  `yorum_eposta` varchar(200) CHARACTER SET latin5 NOT NULL,
  `yorum_onay` int(11) NOT NULL,
  `yorum_tarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`yorum_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=32 ;

--
-- Tablo döküm verisi `yorumlar`
--

INSERT INTO `yorumlar` (`yorum_id`, `yorum_konu_id`, `yorum_ekleyen`, `yorum_icerik`, `yorum_eposta`, `yorum_onay`, `yorum_tarih`) VALUES
(21, 15, '1', 'ılk yorum', '1', 0, '2015-09-15 19:43:39'),
(22, 15, '1', 'ıkıncı yorum', '1', 1, '2015-09-15 19:46:17'),
(23, 16, 'seda', 'dfdf', 'seda.devrim@hotmail.com', 1, '2015-09-15 20:38:18'),
(24, 14, 'seda', 'ssdds', 'seda', 1, '2015-09-15 20:44:33'),
(25, 16, '1', 'franz..Prag daki cafe..', '1', 1, '2015-09-15 21:42:53'),
(26, 15, '1', 'benim bağırasım gelir piraye', '1', 1, '2015-09-16 09:54:35'),
(27, 16, '1', 'gidiyorum..', '1', 1, '2015-09-16 09:55:15'),
(28, 22, '11', 'sedaaydogan', '1', 0, '2015-10-30 16:59:30'),
(29, 23, '11', 'lili brik', '1', 0, '2015-10-30 17:00:00'),
(30, 19, 'seda', 'dd', 'seda.devrim', 0, '2015-10-30 17:14:37'),
(31, 23, 'büşra', 'merhaba', 'büşra', 1, '2015-10-31 21:25:41');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
