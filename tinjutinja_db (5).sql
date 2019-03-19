-- phpMyAdmin SQL Dump
-- version 4.0.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 08, 2015 at 12:17 PM
-- Server version: 5.5.33
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tinjutinja_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us_category_tb`
--

CREATE TABLE `about_us_category_tb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `image_mobile` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `about_us_category_tb`
--

INSERT INTO `about_us_category_tb` (`id`, `name`, `name_en`, `alias`, `status`, `image`, `image_mobile`) VALUES
(1, 'AKSI NASIONAL TINJU TINJA', 'AKSI NASIONAL TINJU TINJA', 'aksi-nasional-tinju-tinja', 1, 'a1.png', ''),
(2, 'Dampak dan ancaman BABS', 'HOW OPEN DEFECATION AFFECTS OUR LIFE', 'dampak-dan-ancaman-babs', 1, 'a2.png', ''),
(3, 'Keuntungan bebas dari BABS', 'BENEFITS WHEN FREE FROM OPEN DEFECATION', 'keuntungan-bebas-dari-babs', 1, 'a3.png', ''),
(4, 'Mereka yang terbebas dari BABS', 'STORIES OF OPEN DEFECATION FREE AREAS', 'mereka-yang-terbebas-dari-babs', 1, '4.png', ''),
(5, 'Press release', 'Press release', 'press-release', 1, 'a5.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `about_us_tb`
--

CREATE TABLE `about_us_tb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categories_id` int(11) NOT NULL,
  `content` longtext NOT NULL,
  `content_en` longtext NOT NULL,
  `status` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `about_us_tb`
--

INSERT INTO `about_us_tb` (`id`, `categories_id`, `content`, `content_en`, `status`, `title`, `title_en`) VALUES
(1, 1, '<p>Lebih dari 51 juta penduduk Indonesia masih melakukan Buang Air Besar Sembarangan (BABS) - nomor 2 terbanyak di dunia menurut Laporan gabungan WHO/UNICEF di tahun 2015, dan berdampak buruk terhadap kesehatan dan lingkungan, terutama pada anak-anak. Setiap jam, ada 15 sampai 22 anak di Indonesia yang meninggal akibat diare dan pneumonia yang bisa dihindari dengan kebersihan dan sanitasi yang baik <i>(Levels &amp; Trends in Child Mortality – Laporan 2014. Perkiraan dikembangkan oleh Inter-agency Group for Child Mortality Estimation PBB).<br><br></i>Program Tinju Tinja dijalankan oleh UNICEF untuk memberikan edukasi dan mengajak masyarakat membahas isu Buang Air Besar Sembarangan ( BABS) yang kurang mendapat perhatian khalayak ramai. Sebagai langkah selanjutnya, gerakan Tinju Tinja pun diangkat menjadi suatu aksi nasional, di mana UNICEF mengajak masyarakat di seluruh bagian Indonesia untuk berpartisi aktif membebaskan Indonesia dari ancaman BABS dalam payung Aksi Nasional Tinju Tinja.<br><br>Melalui Aksi Nasional Tinju Tinja, masyarakat Indonesia bebas berpartisipasi dengan cara dan gaya mereka sendiri, baik menyebarkan fakta-fakta seputar isu BABS, serta memberikan kontribusi melalui kreasi positif sebagai bentuk dukungan terhadap saudara kita di seluruh pelosok Indonesia dalam mencapai Indonesia bebas BABS. Apapun aksi dan kreasinya, partisipasi aktif kamu akan sangat berarti untuk Indonesia!<br><br>Bergabunglah dengan <b>Aksi Nasional Tinju Tinja.</b> Berikan aksimu untuk Indonesia, bersama kita bebaskan Indonesia dari ancaman BABS!</p><br>', '<p>More than 51 million Indonesian still defecate in the open – the second highest country figure in the World (WHO/UNICEF JMP report, 2015). This significantly impacts on not only the environment but critically also on people''s health, especially that of children. Every hour between 15 and 22 children die in Indonesia – in most cases from preventable diseases like diarrhea and pneumonia which can be drastically reduced by good sanitation and hygiene (from Levels &amp; Trends in Child Mortality – 2014 Report. Estimates developed by the UN Inter-agency Group for Child Mortality Estimation).<br><br> <br>UNICEF initiated Tinju Tinja, an online platform on open defecation to raise awareness on this important issue among youth and all persons and to generate more dialogue on open defecation as this is still too rarely discussed in Indonesia. The next step is action - Tinju Tinja can inspire people from all across around Indonesia to actively participate and help free Indonesia from the threat of open defecation with Aksi Nasional Tinju Tinja (National Action for Tinju Tinja).<br><br>In Aksi Nasional Tinju Tinja, people can participate in whichever way they are most comfortable with, from spreading facts relating to open defecation, contributing with their positive stories, pictures, videos etc. and to act as a support to all our brothers and sisters from all over Indonesia in fighting open defecation together. No matter what action you choose, your participation makes a difference and matters a lot!<br><br>Join <b>Aksi Nasional Tinju </b><b>Tinja</b> and Act for Indonesia!, together we can free Indonesia from the scourge of open defecation!</p><br>', 1, 'Tentang Aksi Nasional Tinju Tinja', 'About Aksi Nasional Tinju Tinja'),
(2, 2, '<p>Perilaku buang air besar sembarangan (BABS) yang tidak menggunakan toilet di Indonesia telah mencapai lebih dari 51 juta orang -- terbanyak kedua di dunia, dan tersebar di seluruh pelosok Indonesia; 2/3 di antaranya berasal dari daerah pedesaan. <br><br>Kebiasaan ini sudah tertanam sejak kecil. Susahnya menghapus kebiasaan ini juga dipengaruhi oleh pengetahuan/pemahaman bahaya BABS, masalah kemiskinan (tidak mampu membuat toilet), tidak memiliki lahan, tinggal di rumah yang tak memiliki toilet (walau di daerah perkotaan) serta tidak adanya kesadaran, sehingga menganggap praktek BABS adalah hal yang biasa.<br><br>Dampak dari praktek BABS ini memengaruhi perkembangan dan kelangsungan hidup anak-anak yang sudah rentan dan termarginalisasi. Setiap jam, ada 15 sampai 22 anak di Indonesia yang meninggal akibat diare dan pneumonia yang sangat bisa dihindari dengan perilaku bersih dan sanitasi yang baik (sumber: Levels &amp; Trends in Child Mortality – Laporan 2014. Perkiraan dikembangkan oleh Inter-agency Group for Child Mortality Estimation PBB). <br><br>88% kematian akibat diare memiliki hubungan yang kuat dengan fasilitas air dan sanitasi yang tidak layak. (Sumber: Fewtrell L, Prüss-Üstün A, Bos R, Gore F, Bartram 2007. Water, sanitation and hygiene: quantifying the health impact at national and local levels in countries with incomplete water supply and sanitation coverage). Tak hanya itu, tercemarnya air minum dan makanan akibat perilaku BABS berakibat tingginya kasus dimana anak tumbuh pendek / stunting. <br><br>Sanitasi yang buruk juga menyebabkan Indonesia harus mengeluarkan uang sekitar 56 triliun rupiah per tahunnya, atau 2,3% dari total PDB negara, dan lebih dari setengahnya dihabiskan untuk biaya kesehatan.<br><br>Perilaku Buang air besar sembarangan (BABS) membawa banyak masalah yang terus mengancam Indonesia. Sudah sepatutnya kita bekerja sama melawan BABS dengan pengetahuan dan aksi kita sendiri. Berikan aksimu sekarang untuk Indonesia!<br></p>', '<p>The number of people that are still practicing open defecation, that is not using a toilet, is over 51 million all around Indonesia; two thirds of whom them come from rural areas.<br><br>This well-established traditional behavior is ingrained through practice from early childhood. Other reasons cited for its persistence include poverty (the inability to afford toilets), landlessness, tenants in housing without toilets (usually urban), and deep rooted cultural and social norms that have established open defecation as an acceptable practice.<br><br>The effects are severe, and children – already vulnerable and marginalized – are the ones that pay the highest price in respect of their survival and development. Every hour between 15 and 22 children die in Indonesia – in most cases from preventable causes linked to diarrhea and pneumonia which can be drastically reduced by good sanitation and hygiene (from Levels &amp; Trends in Child Mortality – 2014 Report. Estimates developed by the UN Inter-agency Group for Child Mortality Estimation).<br><br>88% of diarrhea deaths are linked to incomplete water and sanitation service provision. (Source Fewtrell L, Prüss-Üstün A, Bos R, Gore F, Bartram 2007. Water, sanitation and hygiene: quantifying the health impact at national and local levels in countries with incomplete water supply and sanitation coverage). In addition, open defecation results in so much excreta in the environment that children''s bodies are constantly fighting these and this toll takes its toll on their bodies resulting in many children bing affected by stunting, when they are too short for their age.<br><br>Poor sanitation also costs Indonesia at least 56 trillion rupiah per year or 2.3% of GDP, and more than half of it is associated with health costs. (Source: Economic impact of sanitation, WSP World Bank 2008).<br><br>We need to work together to fight open defecation with our knowledge and action. Act now to help make Indonesia free from open defecation!<br></p>', 1, 'Dampak dan Ancaman Buang AIr Besar Sembarangan (BABS)', ' How Open Defecation Affects Our Life'),
(3, 3, 'Ada banyak manfaat yang bisa dirasakan jika kita terbebas dari perilaku buang air besar sembarangan (BABS).<br><br>Sanitasi yang baik akan menjauhkan paparan tinja dari manusia, yang akan mengurangi jumlah kasus diare terutama pada anak-anak serta mengurangi jumlah kasus kematian bayi. Sanitasi yang baik, dibantu dengan mencuci tangan dengan sabun sebelum makan dan sesudah buang air besar, akan menghindarkan menjangkitnya patogen yang datang dari lalat dan tinja serta makanan dan minuman yang bila dikonsumsi akan menyebabkan penyakit seperti diare. Anak-anak dapat tumbuh lebih baik dan terhindar dari kasus anak tumbuh pendek / stunting, karena tubuhnya tidak terus melawan bakteri patogen (bakteri penyebab penyakit).<br><br>Dari segi ekonomi, dengan meningkatnya kesehatan masyarakat, maka mereka bisa menjadi lebih produktif dalam bekerja; hal ini tentu akan berbanding lurus dengan meningkatnya kualitas hidup. Bagi pemerintah Indonesia sendiri, pengeluaran PDB Indonesia untuk masalah kesehatan akan berkurang sehingga dapat dialokasikan untuk sektor lain yang juga membutuhkan perhatian guna membangun Indonesia yang lebih baik (Sumber: Economic Impact of Sanitation World Bank 2008).<br><br>Kemajuan sudah mulai terlihat, berkat program pemerintah seperti STBM (Sanitasi Total Berbasis Masyarakat). Namun kita perlu terus melakukan sesuatu untuk memastikan anak-anak Indonesia lahir di lingkungan yang mendukung pertumbuhan mereka; di mana mereka tidak akan menderita karena terserang diare terus-menerus; serta anak perempuan terbebas dari gangguan dan rasa malu saat mereka memasuki masa puber. Menggunakan toilet yang bersih dan berfungsi dengan baik adalah tentang hidup sehat, dan juga harga diri.<br><br>Mari, kita berantas perilaku buang air besar sembarangan (BABS) bersama-sama untuk Indonesia yang lebih baik lagi! Semua manfaat di atas tidak hanya untuk masing-masing individu, tapi juga untuk seluruh masyarakat Indonesia. Berikan aksimu sekarang!<br><br><br>', 'There are many benefits that we can all gain once when we are free from open defecation.<br><br>Proper sanitation will reduce infant mortality as it will reduce rates of diarrhoea in children once excreta is safely contained away from people. Good sanitation, coupled with handwashing before eating and after defecating in a toilet, will cut pathogen transmission from feces to flies and also people''s food and water, which when they ingest will cause disease. Children will also grow better as their bodies will not be fighting off pathogens constantly and not become stunted. <br><br>In terms of economy, people will be more productive at work when their health status increases and in doing so also improves not only their quality of life with the national GDP also. <br><br>Progress is being made and this is thanks to programs like that of the Government on STBM (Sanitasi Total Berbasis Masyarakat) but we all need to do more to ensure that all children are born into an environment that will not contribute to them being stunted; where they will no longer suffer from repeated episodes of diarrhoea; and where girls will be free from harassment and embarrassment as they enter puberty. Using a clean, working toilet is about health and also about dignity. <br><br>Let''s fight open defecation together to make a better Indonesia! Not only will you reap the benefits mentioned above, but also people from all over Indonesia! Act now!<br><br><br>', 1, 'Keuntungan Ketika Terbebas dari buang air besar sembarangan (BABS)', 'Benefits of being free from open defecation');

-- --------------------------------------------------------

--
-- Table structure for table `admin_tb`
--

CREATE TABLE `admin_tb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `privillege_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `active` int(11) NOT NULL,
  `created_date` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_date` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `last_login` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin_tb`
--

INSERT INTO `admin_tb` (`id`, `privillege_id`, `name`, `username`, `password`, `active`, `created_date`, `created_by`, `updated_date`, `updated_by`, `last_login`) VALUES
(1, 0, 'admininistrator', 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, 2015, 1, 2015, 1, '2015-12-07 18:51:38');

-- --------------------------------------------------------

--
-- Table structure for table `category_tb`
--

CREATE TABLE `category_tb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_id` varchar(100) NOT NULL,
  `name_en` varchar(100) NOT NULL,
  `active` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `category_tb`
--

INSERT INTO `category_tb` (`id`, `name_id`, `name_en`, `active`) VALUES
(1, 'Dampak dan Ancaman BABS', ' How Open Defecation Affects Our Life', 1),
(2, 'KEUNTUNGAN KETIKA TERBEBAS DARI BABS', 'Benefits when free from open defecation', 1),
(3, 'MEREKA YANG TERBEBAS DARI BABS', 'Stories of Open Defecation Free areas', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contribution_user_tb`
--

CREATE TABLE `contribution_user_tb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `ide` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `daerah_id` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `type` int(11) NOT NULL COMMENT '0 all, 1 video, 2 image 3 text',
  `like_count` int(11) NOT NULL,
  `featured` int(11) NOT NULL,
  `image_error` text NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `contribution_user_tb`
--

INSERT INTO `contribution_user_tb` (`id`, `user_id`, `ide`, `image`, `link`, `daerah_id`, `created_date`, `type`, `like_count`, `featured`, `image_error`, `status`) VALUES
(1, 2, 'ayo berantas babs!!', '', '', 20, '2015-11-14 08:58:14', 3, 1, 0, '<p>You did not select a file to upload.</p>', 1),
(2, 3, 'Masih BABS zaman gini?????!!!!??????', '', '', 20, '2015-11-14 09:00:30', 3, 1, 0, '<p>You did not select a file to upload.</p>', 1),
(3, 5, 'Kaget ketika tau fakta kalau Indonesia adalah negara ke 2 terbanyak yang masih BAB sembarangan. Mari bersama berikan kontribusi utk negri tercinta di #aksinasional #tinjutinja dan #fightbabs untuk menyelamatkan anak2 dan bibit unggul bangsa!', '', 'https://youtu.be/i5fgDgwksmg', 18, '2015-11-14 09:57:57', 1, 3, 1, '<p>You did not select a file to upload.</p>', 1),
(4, 4, 'Masalah BAB sembarangan adalah masalah yang serius dimana jika terus terjadi akibatnya bisa ke siapa saja dari anak kecil hingga dewasa. Bukan hanya masalah kesehatan tapi juga berdampak pada masalah keindahan alam Indonesia, ini harus di hentikan dan di cegah untuk indonesia yang lebih baik.', '4c24d423b2abd896470d72641da6e611.jpg', '', 0, '2015-11-14 10:39:30', 2, 0, 0, '', 1),
(5, 7, 'kaget banget pas tau di Indonesia masih banyak yang BABS. aku dukung tinjutinja', 'e2b95c39aadd3702131c86457b64ba5e.jpeg', '', 20, '2015-11-14 13:17:29', 2, 3, 0, '', 1),
(6, 4, 'Negri yang paling manis di antara semua negri, tapi ternyata masih ada prilaku BABS di sini, semoga bisa di stop dan Maluku bisa menjadi negri yang jadi lebih manis...', '16b733ab430db2a3289d66b3b1d0fd21.jpg', '', 39, '2015-11-14 15:06:23', 2, 0, 1, '', 1),
(7, 5, 'Mari selamatkan anak Indonesia dan jaga kebersihan dari BAB sembarangan', 'ff73f6f5dce126bd28ce306134ee7bac.jpeg', '', 42, '2015-11-15 19:07:27', 2, 1, 0, '', 1),
(8, 6, 'Keindahan Dieng tidak boleh dirusak dengan perilaku BABS.', '39f9e03ef9f292a0be05b324aafce9eb.jpg', '', 22, '2015-11-16 11:10:26', 2, 1, 0, '', 1),
(9, 18, '', '', 'https://www.youtube.com/watch?v=nWeRoSzEoMQ', 21, '2015-11-16 12:04:28', 1, 4, 1, '<p>You did not select a file to upload.</p>', 1),
(10, 23, 'Bersama kita membuat Indonesia bebas dari buang air besar sembarangan!', '', '', 0, '2015-11-16 16:45:15', 3, 0, 0, '<p>You did not select a file to upload.</p>', 1),
(11, 37, 'Kaget !!! saat tahu kenyataan ini. Indonesiaku alam rayamu memukau setiap mata yang memandang, laut dan langit biru yang membentang dari sabang sampai merauke membuat siapapun berdecak kagum, Indonesia itu indah ya,, sayang sanitasi buruk terjadi di Negri yang indahnya tak diragukan lagi. Jangan biarkan BABS sembarangan merenggut tawa mereka. Mari peduli TinjuTinja demi Indonesia yang lebih sejahtera. #TinjuTinja', '640d070ce1ac1f9bc7a508cd697114d5.jpg', '', 0, '2015-11-17 15:07:18', 2, 1, 0, '', 1),
(12, 41, '1000 toilet untuk kampungku \nSaya berasal dari daerah terpencil di wilayah Kecamatan Balai Kabupaten Sanggau, Kalimantan Barat.  Pengetahuan masyarakat tentang bahaya BABS sangat kurang, karena pada umum nya minim adanya toilet di kampung kami. Masyarakat disini masih minim pengetahuan tentang kesehatan, karena lokasi yang agak jauh dari ibu kota  kecamatan. Sehingga masyarakat membuang tinja di sungai atau di hutan. Sementara kegiatan MCK masih dilakukan di sungai bahkan air minum (apabila musim kemarau) bersumber dari sungai. Dukungan saya terkhusus untuk Kampung Pejalu, Kampung Manang dan Kampung Jeramun Ampak, untuk di bangun toilet umum, agar kesadaran masyarakat juga dapat terbangun. ', '', '', 29, '2015-11-17 18:31:44', 3, 0, 0, '<p>You did not select a file to upload.</p>', 1),
(13, 58, 'BAB itu HARUUUSSS!!!WAJIIBBB!!\n\ntapi kalauu,,\n\nBABS TIDAAAAAAKKK!!!JANGAAAAANNN!!!\n\nKarena aku cinta kalian!!\nAKU CINTA INDONESIA!!', '21bd03705d44c1bd8692f81cbac8b942.jpg', '', 0, '2015-11-18 13:20:12', 2, 0, 0, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `daerah_tb`
--

CREATE TABLE `daerah_tb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content_id` text NOT NULL,
  `content_en` text NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description_id` text NOT NULL,
  `description_en` text NOT NULL,
  `status` int(11) NOT NULL,
  `precedence` int(11) NOT NULL,
  `link` varchar(255) NOT NULL,
  `pdf` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `featured` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `daerah_tb`
--

INSERT INTO `daerah_tb` (`id`, `content_id`, `content_en`, `name`, `image`, `description_id`, `description_en`, `status`, `precedence`, `link`, `pdf`, `alias`, `featured`) VALUES
(10, ' Aceh masih mengalami masalah terkait kebiasaan buang air besar sembarangan (BABS). Dengan jumlah penduduk sebesar 4,907,000 jiwa, sejumlah 493,429 diantaranya adalah anak-anak. <br><br> <b>Hanya 53.47% penduduknya yang memiliki akses ke sarana sanitasi yang layak,</b> sedangkan 23.3 % sama sekali tidak memiliki akses ke toilet. <b>Fasilitas sanitasi sekolah dengan kondisi baik sebesar 20.70% persen saja.</b><br><br> <b>Dampak dari buruknya sanitasi memengaruhi angka kematian balita di Aceh hingga 47 per 1.000 kelahiran hidup, sedangkan kasus diare pada balita mencapai 4.10%.</b> Buruknya sanitasi di Aceh juga berkontribusi terhadap jumlah balita pendek / <i>stunting</i> yang mencapai angka 41.5%.<br><br> Untuk informasi lebih detail mengenai masalah terkait praktek BABS yang terjadi di Aceh, silahkan men-download dokumen pdf kami.<br>', ' Aceh still faces the problem of Open Defecation. The province has 4,907,000 population, of which 493,429 are children but <b>only 53.47% of its population has access to improved sanitation.</b><br><br> 23.3% has no access to a toilet at all. School toilet facilities regarded as being in good condition only reach 20.70%.<br><br> The effect of poor sanitation contributes to the death of children in Aceh up to 47 per 1,000 child birth and diarrhea incidence rate of 4.10% in children. Poor sanitation in Aceh also contributes to a stunting rate of 41.5% in children.<br><br> Learn more about open defecation issues in Aceh by downloading the report.', 'Aceh', 'f9757863ea90f51e3c5bcdea12a0aed8.jpg', ' Hanya 53.47% penduduk Aceh yang memiliki akses ke sarana sanitasi yang layak<br> ', ' Only 53,47% of Aceh population has access to improved sanitation<br> ', 1, 1, '', '805a357c09d5c805ee407aa2349be824.pdf', 'aceh', 1),
(16, 'Sumatera Utara masih mengalami masalah terkait kebiasaan buang air besar sembarangan (BABS). Dengan jumlah penduduk sebesar 13,767,000 jiwa, sejumlah 1,450,693 diantaranya adalah anak-anak. <br><br> Hanya 61.92% penduduknya yang memiliki akses ke sarana sanitasi yang layak, sedangkan 12.7% sama sekali tidak memiliki akses ke toilet. <b>Fasilitas sanitasi sekolah dengan kondisi baik sebesar 27.90% persen saja.</b><br><br> Dampak dari buruknya sanitasi memengaruhi angka kematian balita di Sumatera Utara hingga 40 per 1.000 kelahiran hidup, sedangkan kasus diare pada balita mencapai 2.10%. Buruknya sanitasi di Sumatera Utara juga berkontribusi terhadap jumlah balita pendek / <i>stunting</i> yang mencapai angka 42.5%.<br><br> Untuk informasi lebih detail mengenai masalah terkait praktek BABS yang terjadi di Sumatera Utara, silahkan men-download dokumen pdf kami.<br><br>', 'Sumatera Utara still faces the problem of Open Defecation. The province has 13,767,000 population, of which 1,450,693 are children but only 61.92% of its population has access to improved sanitation.<br><br> 12.7% has no access to a toilet at all. <b>School toilet facilities regarded as being in good condition only reach 27.90%.</b><br><br> The effect of poor sanitation contributes to the death of children in Sumatera Utara up to 40 per 1,000 child birth and diarrhea incidence rate of 2.10% in children. Poor sanitation in Sumatera Utara also contributes to a stunting rate of 42.5% in children.<br><br> Learn more about open defecation issues in Sumatera Utara by downloading the report.<br><br>', 'Sumut', '02156be001fdd30d241c1e16c8fd9888.jpg', 'Fasilitas sanitasi sekolah di Sumatera Utara dengan kondisi baik hanya sebesar 27.90% persen saja', 'School toilet facilities in North Sumatera regarded as being in good condition only reaches 27.90%', 1, 2, '', 'f82d01370b28d314149f5aa48ebcbfe4.pdf', 'sumut', 1),
(17, 'Sumatera Barat masih mengalami masalah terkait kebiasaan buang air besar sembarangan (BABS). Dengan jumlah penduduk sebesar 5,132,000 jiwa, sejumlah 503,241 diantaranya adalah anak-anak. <br><br> Hanya 46.13% penduduknya yang memiliki akses ke sarana sanitasi yang layak, sedangkan 28.5% sama sekali tidak memiliki akses ke toilet. Fasilitas sanitasi sekolah dengan kondisi baik sebesar 28% persen saja.<br><br> <b>Dampak dari buruknya sanitasi memengaruhi angka kematian balita di Sumatera Barat</b><b> hingga 27 per 1.000 kelahiran hidup, sedangkan kasus diare pada balita mencapai 2.30%.</b> Buruknya sanitasi di Sumatera Barat juga berkontribusi terhadap jumlah balita pendek / <i>stunting</i> yang mencapai angka 39.2%.<br><br> Untuk informasi lebih detail mengenai masalah terkait praktek BABS yang terjadi di Sumatera Barat, silahkan men-download dokumen pdf kami.<br><br>', 'Sumatera Barat still faces the problem of Open Defecation. The province has 5,132,000 population, of which 503,241 are children but only 46.13% of its population has access to improved sanitation.<br><br> 28.5% has no access to a toilet at all. School toilet facilities regarded as being in good condition only reach 28%.<br><br> The effect of <b>poor sanitation contributes to the death of children in Sumatera Barat up to 27 per 1,000 child birth</b> and diarrhea incidence rate of 2.30% in children. Poor sanitation in Sumatera Barat also contributes to a stunting rate of 39.2% in children.<br><br> Learn more about open defecation issues in Sumatera Barat by downloading the report.<br><br>', 'Sumbar', '33d99d0866359017024b610f96b9ea48.jpg', 'Buruknya sanitasi memengaruhi angka kematian balita di Sumatera Barat hingga 27 per 1.000 kelahiran hidup', 'Poor sanitation contributes to the death of children in Sumatera Barat up to 27 per 1,000 child birth', 1, 3, '', '4e1952dc0d33dabace838da1989e2935.pdf', 'sumbar', 0),
(18, 'Riau masih mengalami masalah terkait kebiasaan buang air besar sembarangan (BABS). Dengan jumlah penduduk sebesar 6,188,000 jiwa, sejumlah 645,899 diantaranya adalah anak-anak. <br><br> Hanya 63.44% penduduknya yang memiliki akses ke sarana sanitasi yang layak, sedangkan 7.0% sama sekali tidak memiliki akses ke toilet. Fasilitas sanitasi sekolah dengan kondisi baik sebesar 26.40% persen saja.<br><br> Dampak dari buruknya sanitasi memengaruhi angka kematian balita di Riau hingga 24 per 1.000 kelahiran hidup, sedangkan kasus diare pada balita mencapai 1.60%. <b>Buruknya sanitasi di </b><b>Riau</b><b> juga berkontribusi terhadap jumlah balita pendek / <i data-redactor-tag="i">stunting</i> yang mencapai angka 36.8%.</b><b></b><br><br> Untuk informasi lebih detail mengenai masalah terkait praktek BABS yang terjadi di Riau, silahkan mendownload dokumen pdf kami.<br><br>', 'Riau still faces the problem of Open Defecation. The province has 6,188,000 population, of which 645,899 are children but only 63.44% of its population has access to improved sanitation.<br><br> 7.0% has no access to a toilet at all. School toilet facilities regarded as being in good condition only reach 26.40%.<br><br> The effect of poor sanitation contributes to the death of children in Riau up to 24 per 1,000 child birth and diarrhea incidence rate of 1.60% in children. <b>Poor sanitation in Riau also contributes to a stunting rate of 36.8% in children.</b><br><br> Learn more about open defecation issues in Riau by downloading the report.<br><br>', 'Riau', 'e54aafdcefac847f613b4f7059fae607.jpg', 'Jumlah balita pendek/<i>stunting</i> mencapai 36,8% akibat buruknya sanitasi di Riau', 'Children stunting rate reach 36.8% because of poor sanitation in Riau', 1, 4, '', '85a527163c51d685f0ac40d0f560b490.pdf', 'riau', 0),
(19, 'Kepulauan Riau masih mengalami masalah terkait kebiasaan buang air besar sembarangan (BABS). Dengan jumlah penduduk sebesar 1,917,000 jiwa, sejumlah 201,039 diantaranya adalah anak-anak. <br><br> Hanya 71.35% penduduknya yang memiliki akses ke sarana sanitasi yang layak, sedangkan <b>3.1% sama sekali tidak memiliki akses ke toilet.</b> Fasilitas sanitasi sekolah dengan kondisi baik sebesar 34.90% persen saja.<br><br> Dampak dari buruknya sanitasi memengaruhi angka kematian balita di Kepulauan Riau hingga 35 per 1.000 kelahiran hidup, sedangkan kasus diare pada balita mencapai 1.10%. Buruknya sanitasi di Kepulauan Riau juga berkontribusi terhadap jumlah balita pendek / <i>stunting</i> yang mencapai angka 26.3%.<br><br> Untuk informasi lebih detail mengenai masalah terkait praktek BABS yang terjadi di Kepulauan Riau, silahkan mendownload dokumen pdf kami.<br>', 'Kepulauan Riau still faces the problem of Open Defecation. The province has 1,917,000 population, of which 201,039 are children, but only 71.35% of its population has access to improved sanitation.<br><br> <b>3.1% has no access to a toilet at all.</b> School toilet facilities regarded as being in good condition only reach 34.90%.<br><br> The effect of poor sanitation contributes to the death of children in Kepulauan Riau up to 35 per 1,000 child birth and diarrhea incidence rate of 1.10% in children. Poor sanitation in Kepulauan Riau also contributes to a stunting rate of 26.3% in children.<br><br> Learn more about open defecation issues in Kepulauan Riau by downloading the report.<br>', 'Kep. Riau', '173e952d23e927549a1a938fccff7186.jpg', ' 3,1% penduduk di Kepulauan Riau tidak memiliki akses ke toilet', ' 3.1% of Riau Islands population has no access to a toilet at all', 1, 5, '', '39500a91383cdd4abd5aa3175482369a.pdf', 'kep--riau', 0),
(20, 'DKI Jakarta masih mengalami masalah terkait kebiasaan buang air besar sembarangan (BABS). Dengan jumlah penduduk sebesar 10,075,000 jiwa, sejumlah 829,824 diantaranya adalah anak-anak. <br><br> Hanya 86.57% penduduknya yang memiliki akses ke sarana sanitasi yang layak, sedangkan <b>0.5% sama sekali tidak memiliki akses ke toilet</b>. Fasilitas sanitasi sekolah dengan kondisi baik sebesar 52.20% persen saja.<br><br> Dampak dari buruknya sanitasi berpengaruhi terhadap angka kematian balita di DKI Jakarta hingga 22 per 1.000 kelahiran hidup, sedangkan kasus diare pada balita mencapai 2.50%. Buruknya sanitasi di DKI Jakarta juga berkontribusi terhadap jumlah balita pendek / <i>stunting</i> yang mencapai angka 27.5%.<br><br> Untuk informasi lebih detail mengenai masalah terkait praktek BABS yang terjadi di DKI Jakarta, silahkan men-download dokumen pdf kami.<br>', 'DKI Jakarta still faces the problem of Open Defecation. The province has 10,075,000 population, of which 829,824 are children, but only 86.57% of its population has access to improved sanitation.<br><br> <b>0.5% has no access to a toilet at all.</b> School toilet facilities regarded as being in good condition only reach 52.20%.<br><br> The effect of poor sanitation contributes to the death of children in DKI Jakarta up to 22 per 1,000 child birth and diarrhea incidence rate of 2.50% in children. Poor sanitation in DKI Jakarta also contributes to a stunting rate of 27.5% in children.<br><br> Learn more about open defecation issues in DKI Jakarta by downloading the report.<br>', 'DKI Jakarta', '09eb652f6cc6b1fbf951411d1172815d.jpg', 'Buruknya sanitasi memengaruhi angka kematian balita di DKI Jakarta hingga 22 per 1.000 kelahiran hidup', 'Poor sanitation contributes to the death of children in DKI Jakarta up to 22 per 1,000 child birth', 1, 13, '', '44d771e9aabbf4e461a5a9cfd53f9bb4.pdf', 'dki-jakarta', 0),
(21, 'Jawa Barat masih mengalami masalah terkait kebiasaan buang air besar sembarangan (BABS). Dengan jumlah penduduk sebesar 46,030,000 jiwa, sejumlah 4,124,635 diantaranya adalah anak-anak. <br><br> Hanya 60.18% penduduknya yang memiliki akses ke sarana sanitasi yang layak, sedangkan 10.3% sama sekali tidak memiliki akses ke toilet. Fasilitas sanitasi sekolah dengan kondisi baik sebesar 18.30% persen saja.<br><br> Dampak dari buruknya sanitasi memengaruhi angka kematian balita di Jawa Barat hingga 30 per 1.000 kelahiran hidup, sedangkan kasus diare pada balita mencapai 1.00%. <b>Buruknya sanitasi di </b><b>Jawa Barat </b><b>juga berkontribusi terhadap jumlah balita pendek / <i data-redactor-tag="i">stunting</i> yang mencapai angka 35.3%.</b><br><br> Untuk informasi lebih detail mengenai masalah terkait praktek BABS yang terjadi di Jawa Barat, silahkan men-download dokumen pdf kami.<br>', 'Jawa Barat still faces the problem of Open Defecation. The province has 46,030,000 population, of which 4,124,635 are children, but only 60.18% of its population has access to improved sanitation.<br><br> 10.3% has no access to a toilet at all. School toilet facilities regarded as being in good condition only reach 18.30%.<br><br> The effect of poor sanitation contributes to the death of children in Jawa Barat up to 30 per 1,000 child birth and diarrhea incidence rate of 1.00% in children. <b>Poor sanitation in Jawa Barat also contributes to a stunting rate of 35.3% in children.</b><br><br> Learn more about open defecation issues in Jawa Barat by downloading the report.<br>', 'Jawa Barat', '3a63c2f941c5f079cb975c050fa0edb7.jpg', ' Akibat buruknya sanitasi di Jawa Barat, jumlah balita pendek/<i>stunting</i> mencapai angka 35,3%', ' Children''s stunting rate in West Java reaches 35.3% due to poor sanitation', 1, 12, '', 'd464d8690af85f2fc3a718fd2b8a1435.pdf', 'jawa-barat', 0),
(22, 'Jawa Tengah masih mengalami masalah terkait kebiasaan buang air besar sembarangan (BABS). Dengan jumlah penduduk sebesar 33,523,000 jiwa, sejumlah 2,711,282 diantaranya adalah anak-anak. <br><br> Hanya 63.28% penduduknya yang memiliki akses ke sarana sanitasi yang layak, sedangkan 14.0% sama sekali tidak memiliki akses ke toilet. <b>Fasilitas sanitasi sekolah dengan kondisi baik sebesar 19.60% persen saja.</b><b></b><br><br> Dampak dari buruknya sanitasi memengaruhi angka kematian balita di Jawa Tengah hingga 32 per 1.000 kelahiran hidup, sedangkan kasus diare pada balita mencapai 2.30%. Buruknya sanitasi di Jawa Tengah juga berkontribusi terhadap jumlah balita pendek / <i>stunting</i> yang mencapai angka 36.7%.<br><br> Untuk informasi lebih detail mengenai masalah terkait praktek BABS yang terjadi di Jawa Tengah, silahkan men-download dokumen pdf kami.<br>', 'Jawa Tengah still faces the problem of Open Defecation. The province has 33,523,000 population, of which 2,711,282 are children, but only 63.28% of its population has access to improved sanitation.<br><br> 14.0% has no access to a toilet at all. <b>School toilet facilities regarded as being in good condition only reach 19.60%.</b><br><br> The effect of poor sanitation contributes to the death of children in Jawa Tengah up to 32 per 1,000 child birth and diarrhea incidence rate of 2.30% in children. Poor sanitation in Jawa Tengah also contributes to a stunting rate of 36.7% in children.<br><br> Learn more about open defecation issues in Jawa Tengah by downloading the report.<br>', 'Jawa Tengah', '9ff62a83497da4d6a9cf403f316b0abf.jpg', ' Fasilitas sanitasi sekolah di Jawa Tengah dengan kondisi baik hanya sebesar 19.60% persen saja', ' School toilet facilities in Central Java regarded as being in good condition only reach 19.60%', 1, 14, '', '823e984e523e11a0ea4dcc6789faf908.pdf', 'jawa-tengah', 0),
(23, 'Daerah Istimewa Yogyakarta (DIY) masih mengalami masalah terkait kebiasaan buang air besar sembarangan (BABS). Dengan jumlah penduduk sebesar 3,637,000 jiwa, sejumlah 256,923 diantaranya adalah anak-anak. <br><br> Hanya 84.20% penduduknya yang memiliki akses ke sarana sanitasi yang layak, sedangkan 3.8% sama sekali tidak memiliki akses ke toilet. Fasilitas sanitasi sekolah dengan kondisi baik sebesar 27.50% persen saja.<br><br> Dampak dari buruknya sanitasi memengaruhi angka kematian balita di Daerah Istimewa Yogyakarta (DIY) hingga 25 per 1.000 kelahiran hidup, sedangkan <b>kasus diare pada balita mencapai 1.70%.</b> Buruknya sanitasi di Daerah Istimewa Yogyakarta (DIY) juga berkontribusi terhadap jumlah balita pendek / <i>stunting</i> yang mencapai angka 27.3%.<br><br> Untuk informasi lebih detail mengenai masalah terkait praktek BABS yang terjadi di Daerah Istimewa Yogyakarta (DIY), silahkan men-download dokumen pdf kami.<br>', 'Daerah Istimewa Yogyakarta (DIY) still faces the problem of Open Defecation. The province has 3,637,000 population, of which 256,923 are children, but only 84.20% of its population has access to improved sanitation.<br><br> 3.8% has no access to a toilet at all. School toilet facilities regarded as being in good condition only reach 27.50%.<br><br> The effect of poor sanitation contributes to the death of children in Daerah Istimewa Yogyakarta (DIY) up to 25 per 1,000 child birth and <b>diarrhea incidence rate of 1.70% in children.</b> Poor sanitation in Daerah Istimewa Yogyakarta (DIY) also contributes to a stunting rate of 27.3% in children.<br><br> Learn more about open defecation issues in Daerah Istimewa Yogyakarta (DIY) by downloading the report.<br><br>', 'Yogyakarta', '97d161271d6389a61e5684714b1b2529.jpg', 'Kasus diare pada balita di DIY Yogyakarta mencapai 1,70% akibat buruknya sanitasi', 'Due to poor sanitation, children with diarrhea cases in Special Region of Yogyakarta reach 1.70%', 1, 15, '', 'ff62b98fab6ef3fbe4c9861e1bd57e8f.pdf', 'yogyakarta', 0),
(24, 'Jawa Timur masih mengalami masalah terkait kebiasaan buang air besar sembarangan (BABS). Dengan jumlah penduduk sebesar 38,610,000 jiwa, sejumlah 2,923,910 diantaranya adalah anak-anak. <br><br> Hanya 60.38% penduduknya yang memiliki akses ke sarana sanitasi yang layak, sedangkan 18.2% sama sekali tidak memiliki akses ke toilet. Fasilitas sanitasi sekolah dengan kondisi baik sebesar 20.70% persen saja.<br><br> Dampak dari buruknya sanitasi memengaruhi angka kematian balita di Jawa Timur hingga 30 per 1.000 kelahiran hidup, sedangkan kasus diare pada balita mencapai 2.30%. <b>Buruknya sanitasi di </b><b>Jawa Timur </b><b>juga berkontribusi terhadap jumlah balita pendek / <i data-redactor-tag="i">stunting</i> yang mencapai angka 35.8%.</b><br><br> Untuk informasi lebih detail mengenai masalah terkait praktek BABS yang terjadi di Jawa Timur, silahkan men-download dokumen pdf kami.<br>', 'Jawa Timur still faces the problem of Open Defecation. The province has 38,610,000 population, of which 2,923,910 are children, but only 60.38% of its population has access to improved sanitation.<br><br> 18.2% has no access to a toilet at all. School toilet facilities regarded as being in good condition only reach 20.70%.<br><br> The effect of poor sanitation contributes to the death of children in Jawa Timur up to 30 per 1,000 child birth and diarrhea incidence rate of 2.30% in children. <b>Poor sanitation in Jawa Timur also contributes to a stunting rate of 35.8% in children.</b><br><br> Learn more about open defecation issues in Jawa Timur by downloading the report.<br>', 'Jawa Timur', 'be9a4092b79646c60a4d26468cde9b71.jpg', 'Jumlah balita pendek / <i>stunting </i>mencapai 35,8% akibat buruknya sanitasi di Jawa Timur', 'In East Java, children stunting rate reaches 25.8% due to poor sanitation', 1, 16, '', '92c74361585d8ef8d78bff7e60e61dff.pdf', 'jawa-timur', 0),
(25, 'Banten masih mengalami masalah terkait kebiasaan buang air besar sembarangan (BABS). Dengan jumlah penduduk sebesar 11,705,000 jiwa, sejumlah 1,050,332 diantaranya adalah anak-anak. <br><br> Hanya 67.27% penduduknya yang memiliki akses ke sarana sanitasi yang layak, sedangkan 19.9% sama sekali tidak memiliki akses ke toilet. Fasilitas sanitasi sekolah dengan kondisi baik sebesar 27.90% persen saja.<br><br> <b>Dampak dari buruknya sanitasi memengaruhi angka kematian balita di Banten </b><b>hingga 32 per 1.000 kelahiran hidup</b>, sedangkan kasus diare pada balita mencapai 2.40%. Buruknya sanitasi di Banten juga berkontribusi terhadap jumlah balita pendek / <i>stunting</i> yang mencapai angka 33%.<br><br> Untuk informasi lebih detail mengenai masalah terkait praktek BABS yang terjadi di Banten, silahkan men-download dokumen pdf kami.<br>', 'Banten still faces the problem of Open Defecation. The province has 11,705,000 population, of which 1,050,332 are children, but only 67.27% of its population has access to improved sanitation.<br><br> 19.9% has no access to a toilet at all. School toilet facilities regarded as being in good condition only reach 27.90%.<br><br> The effect of <b>poor sanitation contributes to the death of children in Banten up to 32 per 1,000 child birth</b> and diarrhea incidence rate of 2.40% in children. Poor sanitation in Banten also contributes to a stunting rate of 33% in children.<br><br> Learn more about open defecation issues in Banten by downloading the report.<br>', 'Banten', 'c92d87cafd141f5685c7412a54d8e6a1.jpg', '<b></b><b></b>Buruknya sanitasi memengaruhi angka angka kematian balita di Banten hingga 32 per 1.000 kelahiran hidup', 'Poor sanitation contributes to the death of children in Banten up to 32 per 1,000 child birth', 1, 11, '', '5f4dc01b32a0ad8a49e1521d4e19e3cb.pdf', 'banten', 0),
(26, 'Bali masih mengalami masalah terkait kebiasaan buang air besar sembarangan (BABS). Dengan jumlah penduduk sebesar 4,105,000 jiwa, sejumlah 334,691 diantaranya adalah anak-anak. <br><br> Hanya 83.63% penduduknya yang memiliki akses ke sarana sanitasi yang layak, sedangkan 10.4% sama sekali tidak memiliki akses ke toilet. Fasilitas sanitasi sekolah dengan kondisi baik sebesar 35.60% persen saja.<br><br> Dampak dari buruknya sanitasi memengaruhi angka kematian balita di Bali hingga 29 per 1.000 kelahiran hidup, sedangkan kasus diare pada balita mencapai 1.90%. Buruknya sanitasi di Bali juga berkontribusi terhadap jumlah balita pendek / <i>stunting</i> yang mencapai angka 32.6%.<br><br> Untuk informasi lebih detail mengenai masalah terkait praktek BABS yang terjadi di Bali, silahkan mendownload dokumen pdf kami.<br>', 'Bali still faces the problem of Open Defecation. The province has 4,105,000 population, of which 334,691 are children, but only 83.63% of its population has access to improved sanitation.<br><br> 10.4% has no access to a toilet at all. School toilet facilities regarded as being in good condition only reach 35.60%.<br><br> The effect of poor sanitation contributes to the death of children in Bali up to 29 per 1,000 child birth and diarrhea incidence rate of 1.90% in children. Poor sanitation in Bali also contributes to a stunting rate of 32.6% in children.<br><br> Learn more about open defecation issues in Bali by downloading the report.<br>', 'Bali', 'e71e76836a974ff79b61e754689509b3.jpg', '10.4% penduduk Bali tidak memiliki akses ke toilet', '10.4% of Bali''s population has no access to a toilet at all', 1, 21, '', '761819b52a906062aa71d79797ec272d.pdf', 'bali', 0),
(27, 'NTB masih mengalami masalah terkait kebiasaan buang air besar sembarangan (BABS). Dengan jumlah penduduk sebesar 4,774,000 jiwa, sejumlah 475,426 diantaranya adalah anak-anak. <br><br> Hanya 52.88% penduduknya yang memiliki akses ke sarana sanitasi yang layak, sedangkan 33.6% sama sekali tidak memiliki akses ke toilet. Fasilitas sanitasi sekolah dengan kondisi baik sebesar 19.80% persen saja.<br><br> Dampak dari buruknya sanitasi memengaruhi angka kematian balita di NTB hingga 57 per 1.000 kelahiran hidup, sedangkan kasus diare pada balita mencapai 2.60%. Buruknya sanitasi di NTB juga berkontribusi terhadap jumlah balita pendek / <i>stunting</i> yang mencapai angka 45.2%.<br><br> Untuk informasi lebih detail mengenai masalah terkait praktek BABS yang terjadi di NTB, silahkan men-download dokumen pdf kami.<br>', 'NTB still faces the problem of Open Defecation. The province has 4,774,000 population, of which 475,426 are children, but only 52.88% of its population has access to improved sanitation.<br><br> 33.6% has no access to a toilet at all. School toilet facilities regarded as being in good condition only reach 19.80%.<br><br> The effect of poor sanitation contributes to the death of children in NTB up to 57 per 1,000 child birth and diarrhea incidence rate of 2.60% in children. Poor sanitation in NTB also contributes to a stunting rate of 45.2% in children.<br><br> Learn more about open defecation issues in NTB by downloading the report.<br>', 'NTB', '3da3161f779fdb2ca07a59cd7305b44a.jpg', 'Fasilitas sanitasi sekolah di NTB dengan kondisi baik sebesar 19.80% persen saja', 'School toilet facilities regarded as being in good condition in NTB only reach 19.80%', 1, 22, '', 'e5678aa2f42ae1a9d8ad3177b2fa1e4f.pdf', 'ntb', 0),
(28, 'NTT masih mengalami masalah terkait kebiasaan buang air besar sembarangan (BABS). Dengan jumlah penduduk sebesar 5,037,000 jiwa, sejumlah 595,347 diantaranya adalah anak-anak. <br><br> Hanya 28.80% penduduknya yang memiliki akses ke sarana sanitasi yang layak, sedangkan 18.7% sama sekali tidak memiliki akses ke toilet. Fasilitas sanitasi sekolah dengan kondisi baik sebesar 17.40% persen saja.<br><br> Dampak dari buruknya sanitasi memengaruhi angka kematian balita di NTT hingga 45 per 1.000 kelahiran hidup, sedangkan kasus diare pada balita mencapai 2.60%. Buruknya sanitasi di NTT juga berkontribusi terhadap jumlah balita pendek / <i>stunting</i> yang mencapai angka 51.7%.<br><br> Untuk informasi lebih detail mengenai masalah terkait praktek BABS yang terjadi di NTT, silahkan men-download dokumen pdf kami.<br>', 'NTT still faces the problem of Open Defecation. The province has 5,037,000 population, of which 595,347 are children, but only 28.80% of its population has access to improved sanitation.<br><br> 18.7% has no access to a toilet at all. School toilet facilities regarded as being in good condition only reach 17.40%.<br><br> The effect of poor sanitation contributes to the death of children in NTT up to 45 per 1,000 child birth and diarrhea incidence rate of 2.60% in children. Poor sanitation in NTT also contributes to a stunting rate of 51.7% in children.<br><br> Learn more about open defecation issues in NTT by downloading the report.<br>', 'NTT', 'd589c462600731e62530707465b00346.jpg', ' Buruknya sanitasi memengaruhi angka kematian balita di NTT hingga 45 per 1.000 kelahiran hidup', ' Poor sanitation contributes to the death of children in NTT up to 45 per 1,000 child birth ', 1, 23, '', 'c15b1e163367944f9a831582768a18e0.pdf', 'ntt', 0),
(29, 'Kalimantan Barat masih mengalami masalah terkait kebiasaan buang air besar sembarangan (BABS). Dengan jumlah penduduk sebesar 4,716,000 jiwa, sejumlah 452,400 diantaranya adalah anak-anak. <br><br> Hanya 52.10% penduduknya yang memiliki akses ke sarana sanitasi yang layak, sedangkan 23.0% sama sekali tidak memiliki akses ke toilet. Fasilitas sanitasi sekolah dengan kondisi baik sebesar 20.40% persen saja.<br><br> Dampak dari buruknya sanitasi memengaruhi angka kematian balita di Kalimantan Barat hingga 31 per 1.000 kelahiran hidup, sedangkan kasus diare pada balita mencapai 1.30%. Buruknya sanitasi di Kalimantan Barat juga berkontribusi terhadap jumlah balita pendek / <i>stunting</i> yang mencapai angka 38.6%.<br><br> Untuk informasi lebih detail mengenai masalah terkait praktek BABS yang terjadi di Kalimantan Barat, silahkan men-download dokumen pdf kami.<br>', 'Kalimantan Barat still faces the problem of Open Defecation. The province has 4,716,000 population, of which 452,400 are children, but only 52.10% of its population has access to improved sanitation.<br><br> 23.0% has no access to a toilet at all. School toilet facilities regarded as being in good condition only reach 20.40%.<br><br> The effect of poor sanitation contributes to the death of children in Kalimantan Barat up to 31 per 1,000 child birth and diarrhea incidence rate of 1.30% in children. Poor sanitation in Kalimantan Barat also contributes to a stunting rate of 38.6% in children.<br><br> Learn more about open defecation issues in Kalimantan Barat by downloading the report.<br>', 'Kalbar', '7df4d493e854f0e0728d4e8b96f151e2.jpg', ' Buruknya sanitasi memengaruhi angka kematian balita di Kalimantan Barat hingga 31 per 1.000 kelahiran hidup ', ' Poor sanitation contributes to the death of children in Kalimantan Barat up to 31 per 1,000 child birth ', 1, 18, '', '53579d588ad20984965a685dd6a82ab0.pdf', 'kalbar', 0),
(30, 'Kalimantan Tengah masih mengalami masalah terkait kebiasaan buang air besar sembarangan (BABS). Dengan jumlah penduduk sebesar 2,440,000 jiwa, sejumlah 232,798 diantaranya adalah anak-anak. <br><br> Hanya 44.05% penduduknya yang memiliki akses ke sarana sanitasi yang layak, sedangkan 13.6% sama sekali tidak memiliki akses ke toilet. Fasilitas sanitasi sekolah dengan kondisi baik sebesar 26.40% persen saja.<br><br> Dampak dari buruknya sanitasi memengaruhi angka kematian balita di Kalimantan Tengah hingga 49 per 1.000 kelahiran hidup, sedangkan kasus diare pada balita mencapai 1.80%. Buruknya sanitasi di Kalimantan Tengah juga berkontribusi terhadap jumlah balita pendek / <i>stunting</i> yang mencapai angka 41.3%.<br><br> Untuk informasi lebih detail mengenai masalah terkait praktek BABS yang terjadi di Kalimantan Tengah, silahkan men-download dokumen pdf kami.<br>', 'Kalimantan Tengah still faces the problem of Open Defecation. The province has 2,440,000 population, of which 232,798 are children, but only 44.05% of its population has access to improved sanitation.<br><br> 13.6% has no access to a toilet at all. School toilet facilities regarded as being in good condition only reach 26.40%.<br><br> The effect of poor sanitation contributes to the death of children in Kalimantan Tengah up to 49 per 1,000 child birth and diarrhea incidence rate of 1.80% in children. Poor sanitation in Kalimantan Tengah also contributes to a stunting rate of 41.3% in children.<br><br> Learn more about open defecation issues in Kalimantan Tengah by downloading the report.<br>', 'Kalteng', 'c679d00f9aa03e74b36aa8741c891387.jpg', ' Kasus diare pada balita di Kalimantan Tengah mencapai 1.80% karena buruknya sanitasi', ' Poor sanitation in Center Kalimantan contributes to diarrhea incidence rate of 1.80% in children', 1, 19, '', 'e6dd937852e43c52d66fb4bd76bb46c1.pdf', 'kalteng', 0),
(31, 'Kalimantan Selatan masih mengalami masalah terkait kebiasaan buang air besar sembarangan (BABS). Dengan jumlah penduduk sebesar 3,923,000 jiwa, sejumlah 356,392 diantaranya adalah anak-anak. <br><br> Hanya 57.54% penduduknya yang memiliki akses ke sarana sanitasi yang layak, sedangkan 10.8% sama sekali tidak memiliki akses ke toilet. Fasilitas sanitasi sekolah dengan kondisi baik sebesar 28.90% persen saja.<br><br> Dampak dari buruknya sanitasi memengaruhi angka kematian balita di Kalimantan Selatan hingga 44 per 1.000 kelahiran hidup, sedangkan kasus diare pada balita mencapai 1.70%. Buruknya sanitasi di Kalimantan Selatan juga berkontribusi terhadap jumlah balita pendek / <i>stunting</i> yang mencapai angka 44.2%.<br><br> Untuk informasi lebih detail mengenai masalah terkait praktek BABS yang terjadi di Kalimantan Selatan, silahkan men-download dokumen pdf kami.<br>', 'Kalimantan Selatan still faces the problem of Open Defecation. The province has 3,923,000 population, of which 356,392 are children, but only 57.54% of its population has access to improved sanitation.<br><br> 10.8% has no access to a toilet at all. School toilet facilities regarded as being in good condition only reach 28.90%.<br><br> The effect of poor sanitation contributes to the death of children in Kalimantan Selatan up to 44 per 1,000 child birth and diarrhea incidence rate of 1.70% in children. Poor sanitation in Kalimantan Selatan also contributes to a stunting rate of 44.2% in children.<br><br> Learn more about open defecation issues in Kalimantan Selatan by downloading the report.<br>', 'Kalsel', '8c4c7b136189e37e54a452f5afab9570.jpg', 'Hanya 57.54% penduduk Kalimantan Selatan yang memiliki akses ke sarana sanitasi yang layak', 'Only 57.54% of South Kalimantan''s population has access to improved sanitation', 1, 20, '', 'aa0aa8c53b82928c43bf0885df6085f9.pdf', 'kalsel', 0),
(32, 'Kalimantan Timur dan Utara masih mengalami masalah terkait kebiasaan buang air besar sembarangan (BABS). Dengan jumlah penduduk sebesar 3,970,000 jiwa, sejumlah 391,308 diantaranya adalah anak-anak. <br><br> Hanya 75.93% penduduknya yang memiliki akses ke sarana sanitasi yang layak, sedangkan 4.1% sama sekali tidak memiliki akses ke toilet. Fasilitas sanitasi sekolah dengan kondisi baik sebesar 34.30% persen saja.<br><br> Dampak dari buruknya sanitasi memengaruhi angka kematian balita di Kalimantan Timur dan Utara hingga 21 per 1.000 kelahiran hidup, sedangkan kasus diare pada balita mencapai 1.50%. Buruknya sanitasi di Kalimantan Timur dan Utara juga berkontribusi terhadap jumlah balita pendek / <i>stunting</i> yang mencapai angka 27.6%.<br><br> Untuk informasi lebih detail mengenai masalah terkait praktek BABS yang terjadi di Kalimantan Timur dan Utara, silahkan mengunduh dokumen pdf kami di sini.<br><br>', 'East and West Kalimantan still faces the problem of Open Defecation. The province has 3,970,000 population, of which 391,308 are children, but only 75.93% of its population has access to improved sanitation.<br><br> 4.1% has no access to a toilet at all. School toilet facilities regarded as being in good condition only reaches 34.30%.<br><br> The effect of poor sanitation contributes to the death of children in East and West Kalimantan up to 21 per 1,000 child birth and diarrhea incidence rate of 1.50% in children. Poor sanitation in East and West Kalimantan also contributes to a stunting rate of 27.6% in children.<br><br> Learn more about open defecation issues in East and West Kalimantan by downloading the report here.<br>', 'Kaltim & Kaltara', '63205ca9fee1e684450c2f97389f2313.jpg', 'Fasilitas sanitasi sekolah di Kalimantan Timur dan Utara dengan kondisi baik hanya sebesar 34.30% persen saja', 'School toilet facilities in East and West Kalimantan regarded as being in good condition only reaches 34.30%', 1, 17, '', '31db2b560d94eda56b79e40ed1bc747c.pdf', 'kaltim-n-kaltara', 0),
(33, 'Sulawesi Utara masih mengalami masalah terkait kebiasaan buang air besar sembarangan (BABS). Dengan jumlah penduduk sebesar 2,387,000 jiwa, sejumlah 202,118 diantaranya adalah anak-anak. <br><br> Hanya 72.28% penduduknya yang memiliki akses ke sarana sanitasi yang layak, sedangkan 11.4% sama sekali tidak memiliki akses ke toilet. Fasilitas sanitasi sekolah dengan kondisi baik sebesar 27.60% persen saja.<br><br> Dampak dari buruknya sanitasi memengaruhi angka kematian balita di Sulawesi Utara hingga 33 per 1.000 kelahiran hidup, sedangkan kasus diare pada balita mencapai 1.80%. Buruknya sanitasi di Sulawesi Utara juga berkontribusi terhadap jumlah balita pendek / <i>stunting</i> yang mencapai angka 34.8%.<br><br> Untuk informasi lebih detail mengenai masalah terkait praktek BABS yang terjadi di Sulawesi Utara, silahkan men-download dokumen pdf kami.<br>', 'Sulawesi Utara still faces the problem of Open Defecation. The province has 2,387,000 population, of which 202,118 are children, but only 72.28% of its population has access to improved sanitation.<br><br> 11.4% has no access to a toilet at all. School toilet facilities regarded as being in good condition only reach 27.60%.<br><br> The effect of poor sanitation contributes to the death of children in Sulawesi Utara up to 33 per 1,000 child birth and diarrhea incidence rate of 1.80% in children. Poor sanitation in Sulawesi Utara also contributes to a stunting rate of 34.8% in children.<br><br> Learn more about open defecation issues in Sulawesi Utara by downloading the report.<br>', 'Sulut', '773e0f90d8f27af7718420fc541d98e8.jpg', ' Jumlah balita pendek/ stunting mencapai 34,8% akibat buruknya sanitasi di Sulawesi Utara', ' Children stunting rate reach 34.8% because of poor sanitation in North Sulawesi', 1, 24, '', 'cad88cf7f68d6565c502a2824eafdcb6.pdf', 'sulut', 0),
(34, 'Sulawesi Tengah masih mengalami masalah terkait kebiasaan buang air besar sembarangan (BABS). Dengan jumlah penduduk sebesar 2,831,000 jiwa, sejumlah 289,493 diantaranya adalah anak-anak. <br><br> Hanya 54.21% penduduknya yang memiliki akses ke sarana sanitasi yang layak, sedangkan 28.0% sama sekali tidak memiliki akses ke toilet. Fasilitas sanitasi sekolah dengan kondisi baik sebesar 22.50% persen saja.<br><br> Dampak dari buruknya sanitasi memengaruhi angka kematian balita di Sulawesi Tengah hingga 58 per 1.000 kelahiran hidup, sedangkan kasus diare pada balita mencapai 2.20%. Buruknya sanitasi di Sulawesi Tengah juga berkontribusi terhadap jumlah balita pendek / <i>stunting</i> yang mencapai angka 41%.<br><br> Untuk informasi lebih detail mengenai masalah terkait praktek BABS yang terjadi di Sulawesi Tengah, silahkan men-download dokumen pdf kami.<br>', 'Sulawesi Tengah still faces the problem of Open Defecation. The province has 2,831,000 population, of which 289,493 are children, but only 54.21% of its population has access to improved sanitation.<br><br> 28.0% has no access to a toilet at all. School toilet facilities regarded as being in good condition only reach 22.50%.<br><br> The effect of poor sanitation contributes to the death of children in Sulawesi Tengah up to 58 per 1,000 child birth and diarrhea incidence rate of 2.20% in children. Poor sanitation in Sulawesi Tengah also contributes to a stunting rate of 41% in children.<br><br> Learn more about open defecation issues in Sulawesi Tengah by downloading the report.<br>', 'Sulteng', 'a5c9f2ba10a5f28839435cfa0670f03f.jpg', '28.0% penduduk Sulawesi Tengah sama sekali tidak memiliki akses ke toilet', '28.0% of Sulawesi Tengah''s population has no access to a toilet at all', 1, 26, '', 'd37edfcc9265dd9a5e0e26c085811433.pdf', 'sulteng', 0),
(35, 'Sulawesi Selatan masih mengalami masalah terkait kebiasaan buang air besar sembarangan (BABS). Dengan jumlah penduduk sebesar 8,432,000 jiwa, sejumlah 790,905 diantaranya adalah anak-anak. <br><br> Hanya 69.51% penduduknya yang memiliki akses ke sarana sanitasi yang layak, sedangkan 16.7% sama sekali tidak memiliki akses ke toilet. Fasilitas sanitasi sekolah dengan kondisi baik sebesar 24% persen saja.<br><br> Dampak dari buruknya sanitasi memengaruhi angka kematian balita di Sulawesi Selatan hingga 25 per 1.000 kelahiran hidup, sedangkan kasus diare pada balita mencapai 2.80%. Buruknya sanitasi di Sulawesi Selatan juga berkontribusi terhadap jumlah balita pendek / <i>stunting</i> yang mencapai angka 40.9%.<br><br> Untuk informasi lebih detail mengenai masalah terkait praktek BABS yang terjadi di Sulawesi Selatan, silahkan men-download dokumen pdf kami.<br>', 'Sulawesi Selatan still faces the problem of Open Defecation. The province has 8,432,000 population, of which 790,905 are children, but only 69.51% of its population has access to improved sanitation.<br><br> 16.7% has no access to a toilet at all. School toilet facilities regarded as being in good condition only reach 24%.<br><br> The effect of poor sanitation contributes to the death of children in Sulawesi Selatan up to 25 per 1,000 child birth and diarrhea incidence rate of 2.80% in children. Poor sanitation in Sulawesi Selatan also contributes to a stunting rate of 40.9% in children.<br><br> Learn more about open defecation issues in Sulawesi Selatan by downloading the report.<br>', 'Sulsel', 'e5c55d5c30a914aad81975dbaade0e17.jpg', ' Buruknya sanitasi memengaruhi angka kematian balita di Sulawesi Selatan hingga 25 per 1.000 kelahiran hidup ', ' The effect of poor sanitation contributes to the death of children in South Sulawesi up to 25 per 1,000 child birth ', 1, 28, '', '0e497121e1cd04362d4a822811f3da07.pdf', 'sulsel', 0),
(36, 'Sulawesi Tenggara masih mengalami masalah terkait kebiasaan buang air besar sembarangan (BABS). Dengan jumlah penduduk sebesar 2,448,000 jiwa, sejumlah 268,573 diantaranya adalah anak-anak. <br><br> Hanya 59.24% penduduknya yang memiliki akses ke sarana sanitasi yang layak, sedangkan 23.3% sama sekali tidak memiliki akses ke toilet. Fasilitas sanitasi sekolah dengan kondisi baik sebesar 23.20% persen saja.<br><br> Dampak dari buruknya sanitasi memengaruhi angka kematian balita di Sulawesi Tenggara hingga 45 per 1.000 kelahiran hidup, sedangkan kasus diare pada balita mencapai 2.00%. Buruknya sanitasi di Sulawesi Tenggara juga berkontribusi terhadap jumlah balita pendek / <i>stunting</i> yang mencapai angka 42.6%.<br><br> Untuk informasi lebih detail mengenai masalah terkait praktek BABS yang terjadi di Sulawesi Tenggara, silahkan men-download dokumen pdf kami.<br>', 'Sulawesi Tenggara still faces the problem of Open Defecation. The province has 2,448,000 population, of which 268,573 are children, but only 59.24% of its population has access to improved sanitation.<br><br> 23.3% has no access to a toilet at all. School toilet facilities regarded as being in good condition only reach 23.20%.<br><br> The effect of poor sanitation contributes to the death of children in Sulawesi Tenggara up to 45 per 1,000 child birth and diarrhea incidence rate of 2.00% in children. Poor sanitation in Sulawesi Tenggara also contributes to a stunting rate of 42.6% in children.<br><br> Learn more about open defecation issues in Sulawesi Tenggara by downloading the report.<br>', 'Sultra', 'd2faeb20e0330b4ed1a948c13a280a30.jpg', ' Jumlah balita pendek / <i>stunting</i> mencapai angka 42.6% akibat buruknya sanitasi di Sulawesi Tenggara', ' Children stunting rate reach 42.6% because of poor sanitation in South East Sulawesi', 1, 29, '', 'ce342120cf22b99960773f7e1092432d.pdf', 'sultra', 0),
(37, 'Gorontalo masih mengalami masalah terkait kebiasaan buang air besar sembarangan (BABS). Dengan jumlah penduduk sebesar 1,116,000 jiwa, sejumlah 106,693 diantaranya adalah anak-anak. <br><br> Hanya 52.69% penduduknya yang memiliki akses ke sarana sanitasi yang layak, sedangkan 33.9% sama sekali tidak memiliki akses ke toilet. Fasilitas sanitasi sekolah dengan kondisi baik sebesar 33.50% persen saja.<br><br> Dampak dari buruknya sanitasi memengaruhi angka kematian balita di Gorontalo hingga 67 per 1.000 kelahiran hidup, sedangkan kasus diare pada balita mencapai 2.10%. Buruknya sanitasi di Gorontalo juga berkontribusi terhadap jumlah balita pendek / <i>stunting</i> yang mencapai angka 38.9%.<br><br> Untuk informasi lebih detail mengenai masalah terkait praktek BABS yang terjadi di Gorontalo, silahkan men-download dokumen pdf kami.<br>', 'Gorontalo still faces the problem of Open Defecation. The province has 1,116,000 population, of which 106,693 are children, but only 52.69% of its population has access to improved sanitation.<br><br> 33.9% has no access to a toilet at all. School toilet facilities regarded as being in good condition only reach 33.50%.<br><br> The effect of poor sanitation contributes to the death of children in Gorontalo up to 67 per 1,000 child birth and diarrhea incidence rate of 2.10% in children. Poor sanitation in Gorontalo also contributes to a stunting rate of 38.9% in children.<br><br> Learn more about open defecation issues in Gorontalo by downloading the report.<br>', 'Gorontalo', '1e2eff81b4e6e205ac9fc56454cf4cb3.jpg', 'Hanya 52.69% penduduk Gorontalo yang memiliki akses ke sarana sanitasi yang layak', 'Only 52.69% of Gorontalo''s population has access to improved sanitation', 1, 25, '', 'ec85b8d434f802671b73dddc40c28f7c.pdf', 'gorontalo', 0),
(38, 'Sulawesi Barat masih mengalami masalah terkait kebiasaan buang air besar sembarangan (BABS). Dengan jumlah penduduk sebesar 1,258,000 jiwa, sejumlah 138,064 diantaranya adalah anak-anak. <br><br> Hanya 46.42% penduduknya yang memiliki akses ke sarana sanitasi yang layak, sedangkan 35.9% sama sekali tidak memiliki akses ke toilet. Fasilitas sanitasi sekolah dengan kondisi baik sebesar 19% persen saja.<br><br> Dampak dari buruknya sanitasi memengaruhi angka kematian balita di Sulawesi Barat hingga 60 per 1.000 kelahiran hidup, sedangkan kasus diare pada balita mencapai 2.50%. Buruknya sanitasi di Sulawesi Barat juga berkontribusi terhadap jumlah balita pendek / <i>stunting</i> yang mencapai angka 48%.<br><br> Untuk informasi lebih detail mengenai masalah terkait praktek BABS yang terjadi di Sulawesi Barat, silahkan men-download dokumen pdf kami.<br>', 'Sulawesi Barat still faces the problem of Open Defecation. The province has 1,258,000 population, of which 138,064 are children, but only 46.42% of its population has access to improved sanitation.<br><br> 35.9% has no access to a toilet at all. School toilet facilities regarded as being in good condition only reach 19%.<br><br> The effect of poor sanitation contributes to the death of children in Sulawesi Barat up to 60 per 1,000 child birth and diarrhea incidence rate of 2.50% in children. Poor sanitation in Sulawesi Barat also contributes to a stunting rate of 48% in children.<br><br> Learn more about open defecation issues in Sulawesi Barat by downloading the report.<br>', 'Sulbar', '2d99f7096e272cf3948efeb4a9c1a56c.jpg', 'Fasilitas sanitasi sekolah di Sulawesi Barat dengan kondisi baik sebesar 19% persen saja', 'School toilet facilities in West Sulawesi regarded as being in good condition only reach 19%', 1, 27, '', '96fc1c8b441ea0e9160a4f99f79ffee3.pdf', 'sulbar', 0),
(39, 'Maluku masih mengalami masalah terkait kebiasaan buang air besar sembarangan (BABS). Dengan jumlah penduduk sebesar 1,657,000 jiwa, sejumlah 187,539 diantaranya adalah anak-anak. <br><br> Hanya 62.39% penduduknya yang memiliki akses ke sarana sanitasi yang layak, sedangkan 25.2% sama sekali tidak memiliki akses ke toilet. Fasilitas sanitasi sekolah dengan kondisi baik sebesar 25.50% persen saja.<br><br> Dampak dari buruknya sanitasi memengaruhi angka kematian balita di Maluku hingga 36 per 1.000 kelahiran hidup, sedangkan kasus diare pada balita mencapai 1.80%. Buruknya sanitasi di Maluku juga berkontribusi terhadap jumlah balita pendek / <i>stunting</i> yang mencapai angka 40.6%.<br><br> Untuk informasi lebih detail mengenai masalah terkait praktek BABS yang terjadi di Maluku, silahkan men-download dokumen pdf kami.<br>', 'Maluku still faces the problem of Open Defecation. The province has 1,657,000 population, of which 187,539 are children, but only 62.39% of its population has access to improved sanitation.<br><br> 25.2% has no access to a toilet at all. School toilet facilities regarded as being in good condition only reach 25.50%.<br><br> The effect of poor sanitation contributes to the death of children in Maluku up to 36 per 1,000 child birth and diarrhea incidence rate of 1.80% in children. Poor sanitation in Maluku also contributes to a stunting rate of 40.6% in children.<br><br> Learn more about open defecation issues in Maluku by downloading the report. <br>', 'Maluku', 'eaf7acef4f21b93e50332ad1bb7f7dba.jpg', ' Hanya 62.39% penduduk Maluku yang memiliki akses ke sarana sanitasi yang layak', ' Only 62.39% of Maluku''s population has access to improved sanitation', 1, 30, '', '114de76150fbdbc9c78cad619a5eb779.pdf', 'maluku', 0),
(40, 'Jambi masih mengalami masalah terkait kebiasaan buang air besar sembarangan (BABS). Dengan jumlah penduduk sebesar 3,344,000 jiwa, sejumlah 321,899 diantaranya adalah anak-anak. <br><br> Hanya 58.53% penduduknya yang memiliki akses ke sarana sanitasi yang layak, sedangkan 15.9% sama sekali tidak memiliki akses ke toilet. <b>Fasilitas sanitasi sekolah dengan kondisi baik sebesar 20.30% persen saja.</b><b></b><br><br> Dampak dari buruknya sanitasi memengaruhi angka kematian balita di Jambi hingga 34 per 1.000 kelahiran hidup, sedangkan kasus diare pada balita mencapai 1.40%. Buruknya sanitasi di Jambi juga berkontribusi terhadap jumlah balita pendek / <i>stunting</i> yang mencapai angka 37.9%.<br><br> Untuk informasi lebih detail mengenai masalah terkait praktek BABS yang terjadi di Jambi, silahkan men-download dokumen pdf kami.<br>', 'Jambi still faces the problem of Open Defecation. The province has 3,344,000 population, of which 321,899 are children, but only 58.53% of its population has access to improved sanitation.<br><br> 15.9% has no access to a toilet at all. <b>School toilet facilities regarded as being in good condition only reach 20.30%.</b><br><br> The effect of poor sanitation contributes to the death of children in Jambi up to 34 per 1,000 child birth and diarrhea incidence rate of 1.40% in children. Poor sanitation in Jambi also contributes to a stunting rate of 37.9% in children.<br><br> Learn more about open defecation issues in Jambi by downloading the report.<br>', 'Jambi', '30871e155dd2d60a14bbacbf5c19b2aa.jpg', ' Fasilitas sanitasi sekolah di Jambi dengan kondisi baik hanya sebesar 20.30% persen saja', ' School toilet facilities in Jambi regarded as being in good condition only reach 20.30%', 1, 6, '', '189caa8308dd07f87c51cd6cf5e24c14.pdf', 'jambi', 0);
INSERT INTO `daerah_tb` (`id`, `content_id`, `content_en`, `name`, `image`, `description_id`, `description_en`, `status`, `precedence`, `link`, `pdf`, `alias`, `featured`) VALUES
(41, 'Sumatera Selatan masih mengalami masalah terkait kebiasaan buang air besar sembarangan (BABS). Dengan jumlah penduduk sebesar 7,942,000 jiwa, sejumlah 766,843 diantaranya adalah anak-anak. <br><br> Hanya 51.66% penduduknya yang memiliki akses ke sarana sanitasi yang layak, sedangkan 16.6% sama sekali tidak memiliki akses ke toilet. Fasilitas sanitasi sekolah dengan kondisi baik sebesar 24.90% persen saja.<br><br> Dampak dari buruknya sanitasi memengaruhi angka kematian balita di Sumatera Selatan hingga 29 per 1.000 kelahiran hidup, sedangkan kasus diare pada balita mencapai 1.30%. <b>Buruknya sanitasi di </b><b>Sumatera Selatan</b><b> juga berkontribusi terhadap jumlah balita pendek / <i data-redactor-tag="i">stunting</i> yang mencapai angka 36.7%.</b><b></b><br><br> Untuk informasi lebih detail mengenai masalah terkait praktek BABS yang terjadi di Sumatera Selatan, silahkan men-download dokumen pdf kami.<br>', 'Sumatera Selatan still faces the problem of Open Defecation. The province has 7.942.000 population, of which 766,843 are children, but only 51.66% of its population has access to improved sanitation.<br><br> 16.6% has no access to a toilet at all. School toilet facilities regarded as being in good condition only reach 24.90%.<br><br> The effect of poor sanitation contributes to the death of children in Sumatera Selatan up to 29 per 1,000 child birth and diarrhea incidence rate of 1.30% in children. <b>Poor sanitation in Sumatera Selatan also contributes to a stunting rate of 36.7% in children.</b><br><br> Learn more about open defecation issues in Sumatera Selatan by downloading the report. <br>', 'Sumsel', 'be378a6d41256b7fedf339a459e5adbc.jpg', 'Jumlah balita pendek/stunting mencapai 36,7% akibat buruknya sanitasi di Sumatera Selatan', 'Children''s stunting rate in South Sumatera reach 36.7% due to poor sanitation', 1, 8, '', 'a6f4e66bb8c96279c56698b1bc1fcd4b.pdf', 'sumsel', 0),
(42, 'Bengkulu masih mengalami masalah terkait kebiasaan buang air besar sembarangan (BABS). Dengan jumlah penduduk sebesar 1,845,000 jiwa, sejumlah 175,807 diantaranya adalah anak-anak. <br><br> Hanya 32.37% penduduknya yang memiliki akses ke sarana sanitasi yang layak, sedangkan 18.4% sama sekali tidak memiliki akses ke toilet. Fasilitas sanitasi sekolah dengan kondisi baik sebesar 19.20% persen saja.<br><br> Dampak dari buruknya sanitasi memengaruhi angka kematian balita di Bengkulu hingga 29 per 1.000 kelahiran hidup, sedangkan <b>kasus diare pada balita mencapai 1.60%.</b> Buruknya sanitasi di Bengkulu juga berkontribusi terhadap jumlah balita pendek / <i>stunting</i> yang mencapai angka 39.7%.<br><br> Untuk informasi lebih detail mengenai masalah terkait praktek BABS yang terjadi di Bengkulu, silahkan men-download dokumen pdf kami.<br>', 'Bengkulu still faces the problem of Open Defecation. The province has 1,845,000 population, of which 175,807 are children, but only 32.37% of its population has access to improved sanitation.<br><br> 18.4% has no access to a toilet at all. School toilet facilities regarded as being in good condition only reach 19.20%.<br><br> The effect of poor sanitation contributes to the death of children in Bengkulu up to 29 per 1,000 child birth and <b>diarrhea incidence rate of 1.60% in children</b>. Poor sanitation in Bengkulu also contributes to a stunting rate of 39.7% in children.<br><br> Learn more about open defecation issues in Bengkulu by downloading the report.<br>', 'Bengkulu', 'd0cdf137349f60f217d37b7448d34bf9.jpg', 'Kasus diare pada balita di Bengkulu mencapai 1,60% akibat buruknya sanitasi', 'Because of poor sanitation, children with diarrhea cases in Bengkulu reach 1.60%', 1, 7, '', '281bd72d7c83bc5416ddca175371f690.pdf', 'bengkulu', 0),
(43, 'Lampung masih mengalami masalah terkait kebiasaan buang air besar sembarangan (BABS). Dengan jumlah penduduk sebesar 8,026,000 jiwa, sejumlah 738,803 diantaranya adalah anak-anak. <br><br> Hanya 45.86% penduduknya yang memiliki akses ke sarana sanitasi yang layak, sedangkan 7.1% sama sekali tidak memiliki akses ke toilet. <b>Fasilitas sanitasi sekolah dengan kondisi baik sebesar 18.80% persen saja.</b><b></b><br><br> Dampak dari buruknya sanitasi memengaruhi angka kematian balita di Lampung hingga 30 per 1.000 kelahiran hidup, sedangkan kasus diare pada balita mencapai 1.30%. Buruknya sanitasi di Lampung juga berkontribusi terhadap jumlah balita pendek / <i>stunting</i> yang mencapai angka 42.6%.<br><br> Untuk informasi lebih detail mengenai masalah terkait praktek BABS yang terjadi di Lampung, silahkan men-download dokumen pdf kami.<br>', 'Lampung still faces the problem of Open Defecation. The province has 8.026.000 population, of which 738,803 are children, but only 45.86% of its population has access to improved sanitation.<br><br> 7.1% has no access to a toilet at all. <b>School toilet facilities regarded as being in good condition only reach 18.80%.</b><br><br> The effect of poor sanitation contributes to the death of children in Lampung up to 30 per 1,000 child birth and diarrhea incidence rate of 1.30% in children. Poor sanitation in Lampung also contributes to a stunting rate of 42.6% in children.<br><br> Learn more about open defecation issues in Lampung by downloading the report.<br>', 'Lampung', '723529f3a370232c5ae29e947713f486.jpg', 'Fasilitas sanitasi sekolah di Lampung dengan kondisi baik hanya sebesar 18.80% persen saja', 'School toilet facilities in Bangka Belitung regarded as being in good condition only reach 18.80%', 1, 10, '', '782d4fd53ea520ccd3035dbd9f004f71.pdf', 'lampung', 0),
(44, 'Bangka Belitung masih mengalami masalah terkait kebiasaan buang air besar sembarangan (BABS). Dengan jumlah penduduk sebesar 1,277,856 jiwa, sejumlah 127,848 diantaranya adalah anak-anak. <br><br> <b>Hanya 77.95% penduduknya yang memiliki akses ke sarana sanitasi yang layak,</b> sedangkan 15.6% sama sekali tidak memiliki akses ke toilet. Fasilitas sanitasi sekolah dengan kondisi baik sebesar 36.20% persen saja.<br><br> Dampak dari buruknya sanitasi memengaruhi angka kematian balita di Bangka Belitung hingga 27 per 1.000 kelahiran hidup, sedangkan kasus diare pada balita mencapai 1.20%. Buruknya sanitasi di Bangka Belitung juga berkontribusi terhadap jumlah balita pendek / <i>stunting</i> yang mencapai angka 28.7%.<br><br> Untuk informasi lebih detail mengenai masalah terkait praktek BABS yang terjadi di Bangka Belitung, silahkan men-download dokumen pdf kami.<br>', 'Bangka Belitung still faces the problem of Open Defecation. The province has 1,277,856 population, of which 127,848 are children, but <b>only 77.95% of its population has access to improved sanitation.</b><br><br> 15.6% has no access to a toilet at all. School toilet facilities regarded as being in good condition only reach 36.20%.<br><br> The effect of poor sanitation contributes to the death of children in Bangka Belitung up to 27 per 1,000 child birth and diarrhea incidence rate of 1.20% in children. Poor sanitation in Bangka Belitung also contributes to a stunting rate of 28.7% in children.<br><br> Learn more about open defecation issues in Bangka Belitung by downloading the report.<br>', 'Babel', '61812f25ae5863f841ca2c7dcf5b5ddb.jpg', 'Hanya 77.95% penduduk di Bangka Belitung yang memiliki akses ke sarana sanitasi yang layak', 'Only 77.95% of Bangka Belitung population has access to improved sanitation', 1, 9, '', 'e6a0b6751797511db1abf97b5872b16a.pdf', 'babel', 0),
(45, 'Maluku Utara masih mengalami masalah terkait kebiasaan buang air besar sembarangan (BABS). Dengan jumlah penduduk sebesar 1,139,000 jiwa, sejumlah 127,444 diantaranya adalah anak-anak. <br><br> Hanya 57.72% penduduknya yang memiliki akses ke sarana sanitasi yang layak, sedangkan 17.2% sama sekali tidak memiliki akses ke toilet. Fasilitas sanitasi sekolah dengan kondisi baik sebesar 17.80% persen saja.<br><br> Dampak dari buruknya sanitasi memengaruhi angka kematian balita di Maluku Utara hingga 62 per 1.000 kelahiran hidup, sedangkan kasus diare pada balita mencapai 0.90%. Buruknya sanitasi di Maluku Utara juga berkontribusi terhadap jumlah balita pendek / <i>stunting</i> yang mencapai angka 41.1%.<br><br> Untuk informasi lebih detail mengenai masalah terkait praktek BABS yang terjadi di Maluku Utara, silahkan men-download dokumen pdf kami.<br>', 'Maluku Utara still faces the problem of Open Defecation. The province has 1,139,000 population, of which 127,444 are children, but only 57.72% of its population has access to improved sanitation.<br><br> 17.2% has no access to a toilet at all. School toilet facilities regarded as being in good condition only reach 17.80%.<br><br> The effect of poor sanitation contributes to the death of children in Maluku Utara up to 62 per 1,000 child birth and diarrhea incidence rate of 0.90% in children. Poor sanitation in Maluku Utara also contributes to a stunting rate of 41.1% in children.<br><br> Learn more about open defecation issues in Maluku Utara by downloading the report.<br>', 'Maluku Utara', '65c56ab885a09f7ccbf4e0575ad6f4be.jpg', '17.2% penduduk Maluku Utara sama sekali tidak memiliki akses ke toilet', '17.2% of Maluku Utara''s population has no access to a toilet at all', 1, 31, '', 'c9a42f5346f0e237643ebc84b87c8f7c.pdf', 'maluku-utara', 0),
(46, 'Papua Barat masih mengalami masalah terkait kebiasaan buang air besar sembarangan (BABS). Dengan jumlah penduduk sebesar 850,000 jiwa, sejumlah 93,709 diantaranya adalah anak-anak. <br><br> Hanya 27.89% penduduknya yang memiliki akses ke sarana sanitasi yang layak, sedangkan 8.5% sama sekali tidak memiliki akses ke toilet. Fasilitas sanitasi sekolah dengan kondisi baik sebesar 16.90% persen saja.<br><br> Dampak dari buruknya sanitasi memengaruhi angka kematian balita di Papua Barat hingga 74 per 1.000 kelahiran hidup, sedangkan kasus diare pada balita mencapai 1.70%. Buruknya sanitasi di Papua Barat juga berkontribusi terhadap jumlah balita pendek / <i>stunting</i> yang mencapai angka 44.7%.<br><br> Untuk informasi lebih detail mengenai masalah terkait praktek BABS yang terjadi di Papua Barat, silahkan men-download dokumen pdf kami.<br>', 'Papua Barat still faces the problem of Open Defecation. The province has 850,000 population, of which 93,709 are children, but only 27.89% of its population has access to improved sanitation.<br><br> 8.5% has no access to a toilet at all. School toilet facilities regarded as being in good condition only reach 16.90%.<br><br> The effect of poor sanitation contributes to the death of children in Papua Barat up to 74 per 1,000 child birth and diarrhea incidence rate of 1.70% in children. Poor sanitation in Papua Barat also contributes to a stunting rate of 44.7% in children.<br><br> Learn more about open defecation issues in Papua Barat by downloading the report.<br>', 'Papua Barat', 'f6a7a270a7146e1b65a9ad5ddbde41c2.jpg', ' Buruknya sanitasi memengaruhi angka kematian balita di Papua Barat hingga 74 per 1.000 kelahiran hidup ', ' Poor sanitation contributes to the death of children in Papua Barat up to 74 per 1,000 child birth ', 1, 32, '', 'a97a12e5acc47cfc15722c289ac5b35d.pdf', 'papua-barat', 0),
(47, 'Papua masih mengalami masalah terkait kebiasaan buang air besar sembarangan (BABS). Dengan jumlah penduduk sebesar 3,091,000 jiwa, sejumlah 313,395 diantaranya adalah anak-anak. <br><br> Hanya 49.06% penduduknya yang memiliki akses ke sarana sanitasi yang layak, sedangkan 37.6% sama sekali tidak memiliki akses ke toilet. Fasilitas sanitasi sekolah dengan kondisi baik sebesar 19.70% persen saja.<br><br> Dampak dari buruknya sanitasi memengaruhi angka kematian balita di Papua hingga 54 per 1.000 kelahiran hidup, sedangkan kasus diare pada balita mencapai 4.10%. Buruknya sanitasi di Papua juga berkontribusi terhadap jumlah balita pendek / <i>stunting</i> yang mencapai angka 40.1%.<br><br> Untuk informasi lebih detail mengenai masalah terkait praktek BABS yang terjadi di Papua, silahkan men-download dokumen pdf kami.<br>', 'Papua still faces the problem of Open Defecation. The province has 3,091,000 population, of which 313,395 are children, but only 49.06% of its population has access to improved sanitation.<br><br> 37.6% has no access to a toilet at all. School toilet facilities regarded as being in good condition only reach 19.70%.<br><br> The effect of poor sanitation contributes to the death of children in Papua up to 54 per 1,000 child birth and diarrhea incidence rate of 4.10% in children. Poor sanitation in Papua also contributes to a stunting rate of 40.1% in children.<br><br> Learn more about open defecation issues in Papua by downloading the report.<br>', 'Papua', '7ee9932018ef73590dfdfb53dfb337c3.jpg', ' Jumlah balita pendek / <i>stunting</i> mencapai angka 40.1% akibat buruknya sanitasi di Papua ', ' Children stunting rate reach 40.1% because of poor sanitation in Papua', 1, 33, '', 'd815bd12620b00ddad1d4a26d8c3b536.pdf', 'papua', 0);

-- --------------------------------------------------------

--
-- Table structure for table `fakta_tb`
--

CREATE TABLE `fakta_tb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `share_id` text NOT NULL,
  `share_en` text NOT NULL,
  `share_tw_id` text NOT NULL,
  `share_tw_en` text NOT NULL,
  `title_id` varchar(150) NOT NULL,
  `title_en` varchar(150) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description_id` text NOT NULL,
  `description_en` text NOT NULL,
  `link` varchar(255) NOT NULL,
  `precedence` int(11) NOT NULL,
  `active` int(11) NOT NULL,
  `image_en` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `fakta_tb`
--

INSERT INTO `fakta_tb` (`id`, `share_id`, `share_en`, `share_tw_id`, `share_tw_en`, `title_id`, `title_en`, `image`, `description_id`, `description_en`, `link`, `precedence`, `active`, `image_en`) VALUES
(1, 'Isu BABS masih menyerang Indonesia. Ayo lawan ancaman BABS dengan aksimu di www.tinjutinja.com!', 'Open defecation is a hot issue in Indonesia. Give your action on www.tinjutinja.com!', 'Isu BABS menyerang Indonesia. Lawan ancaman BABS dengan aksimu di www.tinjutinja.com! #AksiNasional #TinjuTinja pic.twitter.com/UU12L6eAZj', 'Open defecation is a hot issue in Indonesia. Give your action on www.tinjutinja.com! #AksiNasional #TinjuTinja pic.twitter.com/elIlvpjz6H', 'Fakta 1', 'Fact 1', 'a5418fa02d555ad2bda468fd1c8aa431.jpg', 'Lebih dari 51 juta penduduk Indonesia buang air besar sembarangan di sungai dan pantai.', 'More than 51 million people in Indonesia still defecate in the open near the rivers and the beaches.', '#', 6, 1, 'a18be77671b77d002465c801038a8164.jpg'),
(2, 'Dampak BABS mencemari bumi pertiwi. Lawan ancaman BABS dengan aksimu di www.tinjutinja.com! #FightBABS #AksiNasional #TinjuTinja ', 'Open defecation contaminates the Mother Earth. Give your action on www.tinjutinja.com! #FightBABS #AksiNasional #TinjuTinja ', 'Dampak BABS mencemari bumi pertiwi. Lawan BABS dengan aksimu di www.tinjutinja.com! #AksiNasional #TinjuTinja pic.twitter.com/otjD2lTHOX', 'Open defecation contaminates Mother Earth. Give your action on www.tinjutinja.com! #AksiNasional #TinjuTinja pic.twitter.com/uoy85VOODi', 'Fakta 2', 'Fact 2', '74519d1a610dd0a934704af7b81805db.jpg', '13% rumah tangga di Indonesia masih menggunakan air dari sumber yang tidak layak.', '13% of Households in Indonesia access water from unimproved sources.', '#', 5, 1, '06bb1d4d336ebd549377136d5b6a73ac.jpg'),
(3, 'Putra-putri bangsa terancam oleh dampak BABS. Lawan ancaman BABS dengan aksimu di www.tinjutinja.com! #AksiNasional #TinjuTinja', 'Open defecation threatens the children of our nation. Give your action on www.tinjutinja.com! #AksiNasional #TinjuTinja', 'Anak bangsa terancam dampak BABS. Lawan BABS dengan aksimu di www.tinjutinja.com! #AksiNasional #TinjuTinja pic.twitter.com/gyyJ6fAsXv', 'Open defecation threatens our children. Give your action on www.tinjutinja.com! #AksiNasional #TinjuTinja pic.twitter.com/3vTBMw029c', 'Fakta 3', 'Fact 3', 'ca5691c49f9e0ba28e47aa5373a7c0fd.jpg', '31% anak Indonesia usia 1-12 bulan meninggal akibat buruknya kondisi air, sanitasi &amp; perilaku bersih yang menyebabkan diare.', '31% of deaths between the ages of 1- 12 months are caused by diarrhea, most of which is linked to poor water, hygiene and sanitation such as open defecation.', '#', 4, 1, 'f62b04c59a3131a001465c9301285986.jpg'),
(4, 'Perekonomian negara dirugikan oleh isu BABS. Lawan ancaman BABS dengan aksimu di www.tinjutinja.com! #AksiNasional #TinjuTinja', 'Open defecation impacted on the loss of Indonesia’s economy. Give your action on   www.tinjutinja.com! #AksiNasional #TinjuTinja', 'Negara dirugikan oleh dampak BABS. Lawan BABS dengan aksimu di www.tinjutinja.com! #AksiNasional #TinjuTinja pic.twitter.com/0MLqqlajLy', 'Open defecation impacted on our economy. Give your action on   www.tinjutinja.com! #AksiNasional #TinjuTinja pic.twitter.com/R1ycIGypza', 'Fakta 4', 'Fact 4', 'd3f93f9fe94d86d0b8ffe1f67862d3f2.jpg', 'Buruknya sanitasi merugikan Indonesia sebesar Rp.56 triliun atau 2.3% dari GDP Indonesia.', 'Poor sanitation caused Indonesia losses of Rp 56 trillion or 2.3% of Indonesia''s GDP.', '#', 3, 1, '10c9d44a07a48b61323b1e2f701fe93d.jpg'),
(5, 'masa depan anak Indonesia terancam oleh BABS. Lawan ancaman BABS dengan aksimu di www.tinjutinja.com! #AksiNasional #TinjuTinja', 'Indonesian children’s future is threatened by open defecation. Give your action on www.tinjutinja.com! #AksiNasional #TinjuTinja', 'Masa depan anak terancam oleh BABS. Lawan BABS dengan aksimu di www.tinjutinja.com! #AksiNasional #TinjuTinja pic.twitter.com/MtUaRUxWfC', 'Open defecation threatens our children''s future. Give action on www.tinjutinja.com! #AksiNasional #TinjuTinja pic.twitter.com/jeLmeZ7uFk', 'Fakta 5', 'Fact 5', '4e3a51723d482be5fcc147939c8414b0.jpg', 'Tercemarnya air minum dan makanan akibat BABS menyebabkan kekurangan gizi sehingga pertumbuhan anak menjadi tidak normal (pendek).', 'When open defecation contaminates the water and food, it causes malnutrition that affects children''s growth and could result in their being stunted.', '#', 2, 1, '86b18b5fcb9d2edb831cb501ce03e289.jpg'),
(6, 'Ancaman BABS menyerang kehidupan anak bangsa. Lawan ancaman BABS dengan aksimu di www.tinjutinja.com! #AksiNasional #TinjuTinja', 'Open defecation threatens children’s life. Give your action on www.tinjutinja.com! #AksiNasional #TinjuTinja', 'Ancaman BABS menyerang anak bangsa. Lawan BABS dengan aksimu di www.tinjutinja.com! #AksiNasional #TinjuTinja pic.twitter.com/NdqykDTrEu', 'Open defecation threatens children’s life. Give your action on www.tinjutinja.com! #AksiNasional #TinjuTinja pic.twitter.com/sVITvpAqmJ', 'Fakta 6', 'Fact 6', '6ea7c0dc789bbe03f9caefb68daef1b8.jpg', 'Setiap tahun, antara 136.000 sampai 190.000 anak-anak di Indonesia meninggal sebelum usia ke-5 karena sanitasi yang buruk.', 'Every year, around 136.000 - 190.000 children in Indonesia die before their 5th birthday because of poor sanitation.', '#', 1, 1, '963e42a8fbe203a04095fa0605290663.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `homebanner_tb`
--

CREATE TABLE `homebanner_tb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `image_mobile` varchar(255) NOT NULL,
  `description_id` text NOT NULL,
  `description_en` text NOT NULL,
  `category_id` int(11) NOT NULL,
  `link` varchar(255) NOT NULL,
  `precedence` int(11) NOT NULL,
  `active` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `homebanner_tb`
--

INSERT INTO `homebanner_tb` (`id`, `image`, `image_mobile`, `description_id`, `description_en`, `category_id`, `link`, `precedence`, `active`) VALUES
(9, '39cda0306404aecdb3e23f091bf1d780.png', '', '<b>LEBIH DARI 51 JUTA ORANG INDONESIA MELAKUKAN BUANG AIR BESAR SEMBARANGAN (BABS) (NOMOR 2 TERTINGGI DI DUNIA)</b><br>\n<span style="font-size:14px;">Sumber: laporan gabungan WHO/UNICEF di tahun 2015</span>', '<b>MORE THAN 51 MILLION PEOPLE IN INDONESIA DEFECATE IN THE OPEN (SECOND HIGHEST IN THE WORLD)</b><br> Source: WHO/UNICEF report in 2015<br><span style="font-size:14px;"></span>', 1, 'http://www.tinjutinja.com/dampak-dan-ancaman-babs', 3, 1),
(10, '96c0a2e68602f29f2905757192f33a14.png', '', '<b>LINGKUNGAN HIGIENIS DAN SANITASI YANG LAYAK TERBUKTI MEMBUAT ANAK-ANAK BERKEMBANG LEBIH OPTIMAL DAN PEKERJA LEBIH PRODUKTIF</b><br>\n<span style="font-size:14px;">Sumber: materi advokasi STBM 2012</span>', '<b>ENVIRONMENT WITH PROPER HYGIENE AND SANITATION ARE PROVEN TO MAKE CHILDREN GROW MORE OPTIMAL AND WORKERS MORE PRODUCTIVE</b><br>\n<span style="font-size:14px;">Source: Advocacy material STBM 2012</span>', 2, 'http://www.tinjutinja.com/keuntungan-bebas-dari-babs', 3, 1),
(11, '7f6e0d0627296ee9dfa2a36583b05ff0.png', '', '<b>13% RUMAH TANGGA DI INDONESIA MASIH MENGGUNAKAN AIR DARI SUMBER YANG TIDAK LAYAK</b><br><span style="font-size:14px;">Sumber: Progress on Drinking Water and Sanitation 2014 Updated Report by WHO- UNICEF</span>', '<b>13% OF HOUSEHOLDS IN INDONESIA ACCESS WATER FROM UNIMPROVED SOURCES<br> </b><span style="font-size:14px;">Source: Progress on Drinking Water and Sanitation 2014 Updated Report by WHO- UNICEF</span>', 1, 'http://www.tinjutinja.com/dampak-dan-ancaman-babs', 3, 1),
(12, '3379dbeb38146a2e35e701b2026bcfae.png', '', '<b>1.LINGKUNGAN HIGIENIS DAN SANITASI YANG LAYAK MAMPU MENURUNKAN TINGKAT INFEKSI PADA IBU DAN ANAK-ANAK YANG BARU LAHIR</b><br>\n<span style="font-size: 14px;">Sumber: Benova et al., 2014</span>', '<b>ENVIRONMENT WITH PROPER HYGIENE AND SANITATION CONTRIBUTES TO LOWERING INFECTION RATES IN MOTHERS AND NEWBORN CHILDREN</b><br>\n<span style="font-size:14px;">Source: Benova et al., 2014</span>', 2, 'http://www.tinjutinja.com/keuntungan-bebas-dari-babs', 2, 1),
(13, 'd1d0f521ab3d437208a3963f059d42f3.png', '', '<b>1.31% ANAK INDONESIA USIA 1-12 BULAN MENINGGAL AKIBAT DIARE YANG DISEBABKAN OLEH BUANG AIR BESAR SEMBARANGAN</b><br>\n<span style="font-size:14px;">Sumber: Riskesdas 2007</span>', '<b>31% </b><span class="A0"><b>OF DEATHS BETWEEN THE AGES OF 1- 12 MONTHS CAUSED BY DIARRHEA THAT CAUSED BY OPEN DEFECATION</b></span><br><span style="font-size:14px;">Source: Riskesdas 2007</span>', 1, 'http://www.tinjutinja.com/dampak-dan-ancaman-babs', 2, 1),
(14, '06d4e553c2b329c78846774b36a109aa.png', '', '<b>"SEMENJAK ADANYA PELATIHAN MENGENAI BAHAYA BABS, JUMLAH ANAK YANG TERKENA DIARE BERKURANG DRASTIS"</b><br>\n<span style="font-size:14px;">Kisah Paulina Robbaka optimis akan pertarungan melawan buang air besar sembarangan ©UNICEF/MataHati/Josh Estey/2015</span>', '<b>"THE NUMBER OF CHILDREN WITH DIARRHOEA HAS REDUCED SIGNIFICANTLY SINCE THE PKK BEGUN PROVIDING TRAINING SESSIONS."</b><br>\n<span style="font-size:14px;">Story of Paulina Robbaka being optimistic about the fight against open defecation ©UNICEF/MataHati/Josh Estey/2015</span>', 3, 'http://www.tinjutinja.com/mereka-yang-terbebas-dari-babs', 1, 1),
(15, 'bc7090b5dcbb604b38caa70ac769ef96.png', '', '<b>"SETELAH SADAR AKAN BAHAYA BABS UNTUK KESEHATAN, KAMI PUN MEMBANGUN TOILET. SEKARANG, SAYA MERASA SAYA DAN ANAK SAYA AMAN."</b><br>\n<span style="font-size:14px;">Kisah Juan, 1 tahun, di depan toilet barunya (Watu Kaula, Sumba, NTT) ©UNICEF Indonesia/2015/Nick Baker</span>', '<b>"AFTER BEING AWARE OF HEALTH RISKS WE WERE TAKING WITH OPEN DEFECATION, WE STARTED TO BUILD TOILET. NOW, MY CHILD AND I FEEL SAFE."</b><br>\n<span style="font-size:14px;">Story of Juan, 1 year old, in front of his new toilet (Watu Kaula, Sumba, NTT) ©UNICEF Indonesia/2015/Nick Baker</span>', 3, 'http://www.tinjutinja.com/mereka-yang-terbebas-dari-babs', 3, 1),
(16, '733cdc3d89589ffde8cf39ddadffd6d6.png', '', '<b>"SETAHUN BELAKANGAN, KAMI BERHASIL MENINGKATKAN AKSES KELUARGA KE TOILET DARI 36% KE 45%. KEMAJUAN SUDAH TERLIHAT BAIK."</b><br>\n<span style="font-size:14px;">Kisah Dominggus Manna yang berupaya mengakhiri BABS di Sumba Barat Daya- NTT. ©UNICEF Indonesia/2015/Nick Baker</span>', '<b>"OVER THE PAST YEAR WE''VE ALREADY INCREASED THE NUMBER OF FAMILIES WITH ACCESS TO A TOILET FROM 36% TO 45%. PROGRESS IS LOOKING GOOD." </b><br>\n<span style="font-size:14px;">Story of Dominggus Manna who gives big efforts to end open defecation in Southwest Sumba – NTT. ©UNICEF Indonesia/2015/Nick Baker</span>', 3, 'http://www.tinjutinja.com/mereka-yang-terbebas-dari-babs', 2, 1),
(17, '6fe11da821717991bec6fe707b8afefe.png', '', '<b>UNTUK SETIAP $1 YANG DIINVESTASIKAN DALAM PERBAIKAN SANITASI, NEGARA AKAN MEMPEROLEH KEUNTUNGAN SEBESAR $8</b><br>\n<span style="font-size:14px;">Sumber: Economic impact of sanitation, WSP world bank 2008</span>', '<b>FOR EVERY 1$ INVESTED IN IMPROVING SANITATION, THE COUNTRY CAN GET 8$ BENEFITS IN RETURN</b><br>\n<span style="font-size: 14px;">Source: Economic impact of sanitation, WSP world bank 2008</span>', 2, 'http://www.tinjutinja.com/keuntungan-bebas-dari-babs', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `info_grafis_tb`
--

CREATE TABLE `info_grafis_tb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `image_en` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `info_grafis_tb`
--

INSERT INTO `info_grafis_tb` (`id`, `image`, `image_en`, `status`) VALUES
(1, '2709bf9aa34bee964e91c0fa3539bb8e.jpg', '4a8650b3e07f445721ab972b575e7842.jpg', 1),
(2, 'b17b7b27fbe4850384ee3f9dba1f6c2c.jpg', '2f0ed9681d3e275f55f5082b2d049a76.jpg', 1),
(4, '79ab69eb0517537507da198cd1e8bd31.jpg', '82bea194ba59708d7fc117c190d67d84.jpg', 1),
(5, 'f2665e706a5a7c42b17d4ac35e39b838.jpg', 'e1ceda2f4be340e01d6a54f0ab7ec6e8.jpg', 1),
(6, 'c32097ba98955d2e9de368d406c083cd.jpg', 'bc81189f69d4939ca83852743e81d8ff.jpg', 1),
(7, '2562abeaa0ce9c111dbb35b0eaf0cfb6.jpg', '4cf8089c3c1926d33e4eff41ed108d39.jpg', 1),
(8, 'f4cb576975444b25c07e3144a4081d92.jpg', 'a14ab984949c6dc1c4440477bd77383a.jpg', 1),
(9, '27e26bd2780ee74c811fc05b7ace47bb.jpg', '71761c95b732fbc4cca4b0f70678077e.jpg', 1),
(10, 'd9aedd891a7435163d2e0a27351de37d.jpg', 'f74b41d8ba880b94aaf4e3cc51fbf203.jpg', 1),
(11, '446e34230c2a5db1e184069acce392a8.jpg', 'df16edd72f8bd99d18b33027883ab478.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news_tb`
--

CREATE TABLE `news_tb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `media` varchar(255) NOT NULL,
  `title` varchar(150) NOT NULL,
  `link` varchar(255) NOT NULL,
  `precedence` int(11) NOT NULL,
  `active` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `news_tb`
--

INSERT INTO `news_tb` (`id`, `media`, `title`, `link`, `precedence`, `active`) VALUES
(1, 'metrotvnews.com', 'Unicef Luncurkan Kampanye Multimedia ''Tinju Tinja''', 'http://rona.metrotvnews.com/read/2014/11/19/320927/unicef-luncurkan-kampanye-multimedia-tinju-tinja', 10, 1),
(2, 'sinarharapan.co', '55 Juta Orang Indonesia BAB Sembarangan', 'http://sinarharapan.co/news/read/141118024/rss.xml', 11, 1),
(3, 'antaranews.com', 'Lawan buang air besar sembarangan dengan "Tinju Tinja"', 'http://www.antaranews.com/berita/465161/lawan-buang-air-besar-sembarangan-dengan-tinju-tinja', 9, 1),
(4, 'inilah.com', 'Cegah Buang Air Besar Sembarangan-Melani Subono Gencar Sosialisasikan ''Tinju Tinja''', 'http://gayahidup.inilah.com/read/detail/2155884/melanie-subono-gencar-sosialisasikan-tinju-tinja#.VG1JMmeIXIU', 8, 1),
(5, 'antaranews.com', 'Indonesia Di Posisi Kedua Dunia Soal BAB Sembarangan', 'http://www.antaranews.com/berita/465165/indonesia-di-posisi-kedua-dunia-soal-bab-sembarangan?utm_source=fly&utm_medium=related&utm_campaign=flybox', 7, 1),
(6, 'liputan6.com ', 'Aksi Tinju Tinja Enyahkan Kebiasaan Jorok', 'http://health.liputan6.com/read/2136569/aksi-tinju-tinja-enyahkan-kebiasaan-jorok', 6, 1),
(7, 'beritasatu.com', 'UNICEF Luncurkan Kampanye Multi Media Bertajuk "Tinju Tinja"', 'http://www.beritasatu.com/kesehatan/226420-unicef-luncurkan-kampanye-multi-media-bertajuk-tinju-tinja.html', 5, 1),
(8, 'inilah.com ', 'Basmi Buang Air Besar Sembarangan (BABS)-UNICEF Kampanye Tinju Tinja', 'http://gayahidup.inilah.com/read/detail/2155793/unicef-kampanye-tinju-tinja#.VG1O92eIXIU', 4, 1),
(9, 'metrotvnews.com', 'Melanie Subono Siap Dipanggil Miss Tinja', 'http://hiburan.metrotvnews.com/read/2014/11/19/320997/melanie-subono-siap-dipanggil-miss-tinja', 3, 1),
(10, ' beritasatu.com', 'Ini Hal Penghambat Program Pemerintah Sanitasi Total Berbasis Masyarakat', 'http://www.beritasatu.com/kesehatan/226434-unicef-ini-hal-penghambat-program-pemerintah-sanitasi-total-berbasis-masyarakat.html', 2, 1),
(11, 'inilah.com', 'Hari Toilet Sedunia-5,5 Juta Penduduk Buang Air Besar Sembarangan', 'http://gayahidup.inilah.com/read/detail/2155789/55-juta-penduduk-buang-air-besar-sembarangan#.VG1ejWeIXIU', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `press_conference_tb`
--

CREATE TABLE `press_conference_tb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `precedence` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `press_conference_tb`
--

INSERT INTO `press_conference_tb` (`id`, `image`, `precedence`, `status`) VALUES
(1, '9da411f91fc886468e5eb3337b415393.jpg', 1, 1),
(6, 'ffa43d7bef44c0458da891dad20f840c.JPG', 2, 1),
(7, 'cffa73f51897b8d9f92728470a61b069.JPG', 3, 1),
(8, '44c6343f00bcd22365a1cf284c4eff05.JPG', 4, 1),
(9, 'f0c6055a72eeb3532e3659aee7ad5db2.JPG', 5, 1),
(10, '9596dbf2f4a0fc99d8e1baca962427d0.JPG', 6, 1),
(11, '1d14afd81f3fbc2a040aede6ca44232d.JPG', 7, 1),
(12, '8251b5872f38115f2dc3780b657b9a97.JPG', 8, 1),
(13, 'a1ff04baaa70621c043e245121c6bf1b.JPG', 9, 1),
(14, '29a7577d76c7547fcacfc43c8f41ebda.JPG', 10, 1),
(15, 'c8c9aceaa9e0102dc760b7ee438199c6.JPG', 11, 1),
(16, 'dd692a4978f925655f3bf2ad927998fb.JPG', 12, 1),
(17, '3132ecef8f892f7985eb75fa0ad98e3e.JPG', 13, 1),
(18, 'ccb2c6a8048b099603a486f759c438c4.JPG', 14, 1),
(19, 'c7e0d24218c616745c35fc6c06f7db93.JPG', 15, 1),
(20, '32720ad893d93fff589e078e5d3caa96.JPG', 16, 1),
(21, '80b62c8cd66331a244dda503669c705e.JPG', 17, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pulau_tb`
--

CREATE TABLE `pulau_tb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `image_en` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `precedence` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `pulau_tb`
--

INSERT INTO `pulau_tb` (`id`, `name`, `image`, `image_en`, `status`, `precedence`) VALUES
(1, 'Jawa', 'e4183121cf055672f28ba9a434554d74.png', '24ced1d9fcd228b3e28e314a466e2c47.png', 1, 1),
(2, 'Bali', '041d4ab75ecccadda958991e26a93fee.png', '02f2910c81168c64bf8a61ce199d70d5.png', 1, 2),
(3, 'Kalimantan', '40569356744f7b5ef03b151f6e33c4c7.png', '6f1a209c28979430aa4fb0593a9d1355.png', 1, 3),
(4, 'Maluku', 'e538b0efd4c7641cb8ac0c7288206d93.png', 'ce0931eb3196a38c9efd356e2104aeaa.png', 1, 4),
(5, 'Papua', '5fe048cfd7b186ec192f7307f9289bcf.png', '9a993cff06bd477606427a6f87134587.png', 1, 5),
(6, 'Sulawesi', '8b823becf567319f7366021caf418809.png', '9a6e965318879a3b8f64e4305839cd64.png', 1, 6),
(7, 'Sumatera', '2a05eb2c1c6c125f3eef28b2613f6bef.png', 'dcab41213aa381d3a086e69e47ac5de3.png', 1, 7);

-- --------------------------------------------------------

--
-- Table structure for table `social_media_tb`
--

CREATE TABLE `social_media_tb` (
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `social_media_tb`
--

INSERT INTO `social_media_tb` (`facebook`, `twitter`, `instagram`) VALUES
('https://www.facebook.com/UNICEFIndonesia', 'https://twitter.com/UNICEFIndonesia', 'https://instagram.com/unicef_id/');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial_tb`
--

CREATE TABLE `testimonial_tb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `short_description_id` text NOT NULL,
  `description_id` text NOT NULL,
  `short_description_en` text NOT NULL,
  `description_en` text NOT NULL,
  `status` int(11) NOT NULL,
  `source` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `testimonial_tb`
--

INSERT INTO `testimonial_tb` (`id`, `image`, `name`, `short_description_id`, `description_id`, `short_description_en`, `description_en`, `status`, `source`) VALUES
(6, 'dfb8e14d869d2c2d33a162f88cc5294e.JPG', 'Juan Ngongo (Watu Kaula, Sumba, NTT)', 'Sumba Barat Daya, Maret 2015 – Juan Ngongo, usia satu tahun, adalah orang pertama di keluarganya yang akan tumbuh besar dengan akses toilet.<br><br>Juan tinggal di Desa Watu Kaula, Pulau Sumba (NTT). Selama beberapa generasi, keluarganya buang air besar di sekitar sungai di belakang rumah mereka.<br><br>Namun kini sudah tidak lagi. Keluarga Juan belum lama ini menghadiri sebuah sesi pemicuan yang difasilitasi oleh UNICEF di desa mereka. Pada sesi ini, petugas kesehatan menunjukkan bagaimana mudahnya bakteri dari kotoran manusia bisa memasuki rantai makanan dan menyebabkan berbagai masalah kesehatan.<br><br>Termasuk dalam masalah kesehatan ini adalah diare dan pneumonia, yang merupakan kontributor utama dari 370 kematian balita Indonesia setiap harinya.<br><br>Ibu Juan, Yuliana, mengatakan bahwa sesi tersebut adalah pengalaman yang membuka matanya. "Kami jadi tahu tentang berbagai risiko kesehatan dari buang air besar sembarangan (BABS). Jadi kami memutuskan untuk membangun toilet," katanya.<br><br>Ada lebih dari 750 rumah tangga di Desa Watu Kaula. Perwakilan dari hampir semua rumah tangga menghadiri sesi pemicuan dan banyak yang berkomitmen untuk membangun toilet. Kisah Juan hanya salah satu darinya.<br><br>"Kini saya merasa aman. Kini saya merasa bahwa Juan akan aman," ucap Yuliana.<br><blockquote style="text-align: right;"><br></blockquote>', '0', 'Juan Ngongo, now just one year old, will be the first in his family to grow up with access to a toilet.<br><br>Juan lives in the village of Watu Kaula on the island of Sumba (NTT). For generations, his family would defecate in or around a small river that runs beside their house.<br><br>But not anymore. Juan''s family recently attended a triggering session in their village that was facilitated by the local sanitarian with UNICEF support. During these events, health workers demonstrate how easily bacteria from faeces can enter the food chain and cause a variety of health problems.<br><br>These health problems include diarrhoea and pneumonia – which are chief contributors to more than 370 under-five deaths per day in Indonesia. <br><br>Juan''s mother, Yuliana, says the session was a powerful experience. "It made us aware of all sorts of health risks we were taking with open defecation. So we decided to build a toilet," she says.<br><br>There are more than 750 households in the village of Watu Kaula. Representatives from most households attended the triggering session and many committed to building a toilet. So Juan''s story is just one of many. <br><br>"Now I feel safe. Now I feel that Juan will be safe," Yuliana says.<br><blockquote style="text-align: right;"><br></blockquote>', '0', 1, '©UNICEF Indonesia/2015/Nick Baker '),
(7, '7461976db15094f3d9849e66a619abb2.JPG', 'Dominggus Manna (Sumba Barat Daya, NTT)', 'Dominggus Manna menghadapi sebuah tugas yang cukup berat. Sebagai Kepala Bagian Kesehatan Lingkungan di Sumba Barat Daya, ia bertanggung jawab atas praktik kebersihan di 131 desa. Dan ia ingin agar seluruh desa tersebut bebas dari BABS dalam empat tahun.<br><br>UNICEF membantu perwakilan daerah seperti Dominggus memenuhi target-target serupa dengan membentuk kelompok kerja BABS di Sumba. Kelompok kerja ini mempertemukan pejabat pemerintah dan pemangku kepentingan dari berbagai tingkat untuk mencari cara terbaik dalam menghadapi BABS.<br><br>"Saat ini sekitar 50 persen desa melakukan BABS," katanya. "Tapi dalam beberapa tahun terakhir kami telah meningkatkan jumlah keluarga dengan akses toilet dari 36 persen menjadi 45 persen. Jadi kemajuan ini tampak baik."', '0', 'Dominggus Manna has quite a task ahead of him. As Head of the Environment Health Section in the Sumba Barat Daya District Government, he oversees sanitation practices in 131 villages. And he wants all of them to be free of open defecation in four years.<br><br>UNICEF is helping district representatives like Dominggus meet such targets by convening open defecation working groups in Sumba. The working groups bring together various levels of government and other stakeholders to assess the best ways of addressing open defecation.<br><br>"Currently around 50 per cent of villages practice open defecation," he says. "But over the past year we''ve already increased the number of families with access to a toilet from 36 per cent to 45 per cent. So progress is looking good." <br><br>Thanks to vital support from Unilever, UNICEF will keep working to end open defecation in Sumba.<br><blockquote style="text-align: right;"></blockquote>', '0', 1, '©UNICEF Indonesia/2015/Nick Baker'),
(8, '9acead214755380f2d06bc443c1e24f8.JPG', ' Paulina Robbaka (Desa Watu Kaula)', 'Jerih payah PKK terlihat hasilnya, menurut Paulina Robbaka yang merupakan kepala dari Puskesmas di desa Watu Kaula.<br> <br> "Jumlah anak yang terserang diare berkurang drastic semenjak PKK memberikan sesi pelatihan mengenai bahaya BABS," ujar Paulina. "Tahun lalu di puskesmas, ada sekitar 50 anak setiap bulan yang terserang diare. Tahun ini berkurang hingga 5-15 anak per bulan saja."<br> <br> Semuanya terjadi karena usaha grupnya dalam berinteraksi secara langsung dengan para wanita di desa tersebut. "Ibu-ibu dapat dengan mudah berbicara dengan anak-anak dan keluarganya tentang menghentikan kebiasaan buang air besar sembarangan." Ujarnya. <i><blockquote style="text-align: right;"></blockquote></i>', '0', 'The efforts of the PKK appear to be working. That''s according to Paulina Robbaka who''s the head of the Puskesmas (community health centre) in Watu Kaula village.<br> <br>"The number of children with diarrhoea has reduced significantly since the PKK begun providing training sessions," Paulina says. "Last year at the health center, we saw an average of 50 children every month who got diarrhea. This year we''ve only seen around 5-15 per month." <br> <br>Paulina credits this to the group''s approach of interacting directly with women in the village. "Wives and mothers can easily talk to their children and family about stopping open defecation," she says.<blockquote style="text-align: right;"><i></i></blockquote>', '0', 1, '©UNICEF/MataHati/Josh Estey/2015');

-- --------------------------------------------------------

--
-- Table structure for table `user_download_infografis_tb`
--

CREATE TABLE `user_download_infografis_tb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `infografis_id` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user_download_pdf_daerah_tb`
--

CREATE TABLE `user_download_pdf_daerah_tb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `daerah_id` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user_download_personal_infografis_tb`
--

CREATE TABLE `user_download_personal_infografis_tb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `infografis_id` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user_infografis_tb`
--

CREATE TABLE `user_infografis_tb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL,
  `pulau_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `user_infografis_tb`
--

INSERT INTO `user_infografis_tb` (`id`, `user_id`, `uid`, `image`, `created_date`, `pulau_id`) VALUES
(1, 2, '56469695349f1', 'ig-10153665549478959.jpg', '2015-11-14 09:04:05', 2),
(2, 3, '56469d9867690', 'ig-10153670423085169.jpg', '2015-11-14 09:34:00', 1),
(3, 3, '5646a3c128ee2', 'ig-10153670423085169.jpg', '2015-11-14 10:00:17', 1),
(4, 7, '5646d285e4f19', 'ig-10208097314696602.jpg', '2015-11-14 13:19:49', 1),
(5, 5, '5646d2f247725', 'ig-10207961968229823.jpg', '2015-11-14 13:21:38', 6),
(6, 5, '5646d5739a4ff', 'ig-10207961968229823.jpg', '2015-11-14 13:32:19', 3),
(7, 8, '5646ec1663fc1', 'ig-743232989142815.jpg', '2015-11-14 15:08:54', 1),
(8, 3, '5646f14c01d71', 'ig-10153670423085169.jpg', '2015-11-14 15:31:08', 1),
(9, 3, '5646f2aa7c92b', 'ig-10153670423085169.jpg', '2015-11-14 15:36:58', 2),
(10, 3, '5646f2b74b24e', 'ig-10153670423085169.jpg', '2015-11-14 15:37:11', 3),
(11, 3, '5646f30bd59a4', 'ig-10153670423085169.jpg', '2015-11-14 15:38:35', 3),
(12, 6, '5646f6ee5dadd', 'ig-10153712243899461.jpg', '2015-11-14 15:55:10', 1),
(13, 5, '5646f6f809e50', 'ig-10207961968229823.jpg', '2015-11-14 15:55:20', 7),
(14, 3, '5646f78882924', 'ig-10153670423085169.jpg', '2015-11-14 15:57:44', 1),
(15, 11, '5646f837a9ff2', 'ig-10205570404394589.jpg', '2015-11-14 16:00:39', 7),
(16, 3, '5646f902363fc', 'ig-10153670423085169.jpg', '2015-11-14 16:04:02', 1),
(17, 6, '5646f945ee6c7', 'ig-10153712243899461.jpg', '2015-11-14 16:05:09', 1),
(18, 6, '5646f97ed876b', 'ig-10153712243899461.jpg', '2015-11-14 16:06:06', 4),
(19, 6, '5646fc9ceb161', 'ig-10153712243899461.jpg', '2015-11-14 16:19:24', 1),
(20, 2, '5647014a8ef59', 'ig-10153665549478959.jpg', '2015-11-14 16:39:22', 1),
(21, 4, '56470d3a2cca5', 'ig-130133504015019.jpg', '2015-11-14 17:30:18', 4),
(22, 13, '564745bb409b8', 'ig-10208243761595938.jpg', '2015-11-14 21:31:23', 1),
(23, 13, '564745ce07b4e', 'ig-10208243761595938.jpg', '2015-11-14 21:31:42', 1),
(24, 17, '5649617327aaa', 'ig-10153257058818927.jpg', '2015-11-16 11:54:11', 4),
(25, 54, '564c04c4c92d8', 'ig-10154345873414616.jpg', '2015-11-18 11:55:32', 1),
(26, 54, '564c05df3ad06', 'ig-10154345873414616.jpg', '2015-11-18 12:00:15', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_like_contribution_tb`
--

CREATE TABLE `user_like_contribution_tb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `contribution_id` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `user_like_contribution_tb`
--

INSERT INTO `user_like_contribution_tb` (`id`, `user_id`, `contribution_id`, `created_date`) VALUES
(1, 7, 3, '2015-11-14 13:18:13'),
(2, 5, 5, '2015-11-14 13:26:13'),
(3, 6, 5, '2015-11-14 15:02:22'),
(4, 6, 9, '2015-11-16 12:07:51'),
(5, 5, 9, '2015-11-16 16:31:16'),
(6, 17, 9, '2015-11-16 16:32:07'),
(7, 17, 8, '2015-11-16 16:32:17'),
(8, 17, 7, '2015-11-16 16:32:22'),
(9, 17, 5, '2015-11-16 16:32:39'),
(10, 17, 3, '2015-11-16 16:32:49'),
(11, 36, 2, '2015-11-17 14:31:34'),
(12, 36, 1, '2015-11-17 14:31:42'),
(13, 6, 11, '2015-11-17 18:07:49'),
(14, 46, 3, '2015-11-18 02:19:44'),
(15, 46, 9, '2015-11-18 02:22:27');

-- --------------------------------------------------------

--
-- Table structure for table `user_point_tb`
--

CREATE TABLE `user_point_tb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=121 ;

--
-- Dumping data for table `user_point_tb`
--

INSERT INTO `user_point_tb` (`id`, `user_id`, `type`, `created_date`) VALUES
(1, 2, 4, '2015-11-14 08:47:54'),
(2, 3, 4, '2015-11-14 08:55:54'),
(3, 2, 1, '2015-11-14 08:58:14'),
(4, 3, 1, '2015-11-14 09:00:30'),
(5, 3, 3, '2015-11-14 09:00:54'),
(6, 2, 2, '2015-11-14 09:03:35'),
(7, 4, 4, '2015-11-14 09:27:16'),
(8, 5, 4, '2015-11-14 09:47:31'),
(9, 5, 1, '2015-11-14 09:57:57'),
(10, 5, 3, '2015-11-14 09:58:31'),
(11, 6, 4, '2015-11-14 10:09:13'),
(12, 6, 3, '2015-11-14 10:15:57'),
(13, 6, 3, '2015-11-14 10:16:15'),
(14, 4, 2, '2015-11-14 10:18:14'),
(15, 4, 3, '2015-11-14 10:18:30'),
(16, 6, 3, '2015-11-14 10:23:05'),
(17, 4, 1, '2015-11-14 10:39:30'),
(18, 7, 4, '2015-11-14 13:12:14'),
(19, 7, 1, '2015-11-14 13:17:29'),
(20, 8, 4, '2015-11-14 14:54:06'),
(21, 4, 1, '2015-11-14 15:06:23'),
(22, 9, 4, '2015-11-14 15:06:48'),
(23, 11, 4, '2015-11-14 15:59:19'),
(24, 12, 4, '2015-11-14 18:50:04'),
(25, 5, 1, '2015-11-15 19:07:27'),
(26, 15, 4, '2015-11-16 08:32:04'),
(27, 6, 1, '2015-11-16 11:10:26'),
(28, 18, 1, '2015-11-16 12:04:28'),
(29, 6, 3, '2015-11-16 13:51:45'),
(30, 17, 2, '2015-11-16 14:47:00'),
(31, 17, 2, '2015-11-16 14:47:46'),
(32, 4, 3, '2015-11-16 14:50:33'),
(33, 12, 3, '2015-11-16 15:35:35'),
(34, 20, 2, '2015-11-16 15:53:49'),
(35, 20, 3, '2015-11-16 15:53:57'),
(36, 20, 2, '2015-11-16 15:54:36'),
(37, 20, 3, '2015-11-16 15:54:39'),
(38, 20, 2, '2015-11-16 15:55:03'),
(39, 20, 3, '2015-11-16 15:55:06'),
(40, 20, 2, '2015-11-16 15:55:30'),
(41, 20, 3, '2015-11-16 15:55:32'),
(42, 20, 2, '2015-11-16 15:55:50'),
(43, 20, 3, '2015-11-16 15:55:54'),
(44, 21, 3, '2015-11-16 16:08:54'),
(45, 17, 4, '2015-11-16 16:31:59'),
(46, 23, 1, '2015-11-16 16:45:15'),
(47, 21, 3, '2015-11-16 17:17:24'),
(48, 25, 4, '2015-11-16 18:58:28'),
(49, 25, 2, '2015-11-16 19:02:40'),
(50, 26, 2, '2015-11-16 20:30:17'),
(51, 28, 2, '2015-11-17 07:49:17'),
(52, 31, 3, '2015-11-17 10:17:36'),
(53, 31, 3, '2015-11-17 10:17:51'),
(54, 31, 3, '2015-11-17 10:18:03'),
(55, 31, 3, '2015-11-17 10:18:20'),
(56, 31, 3, '2015-11-17 10:18:32'),
(57, 31, 3, '2015-11-17 10:18:46'),
(58, 31, 3, '2015-11-17 10:18:54'),
(59, 32, 2, '2015-11-17 12:39:27'),
(60, 32, 2, '2015-11-17 12:39:50'),
(61, 32, 2, '2015-11-17 12:40:08'),
(62, 32, 2, '2015-11-17 12:40:27'),
(63, 32, 2, '2015-11-17 12:40:42'),
(64, 32, 2, '2015-11-17 12:40:58'),
(65, 33, 2, '2015-11-17 12:41:38'),
(66, 33, 3, '2015-11-17 12:41:42'),
(67, 33, 2, '2015-11-17 12:42:16'),
(68, 33, 2, '2015-11-17 12:42:31'),
(69, 33, 2, '2015-11-17 12:42:50'),
(70, 33, 2, '2015-11-17 12:43:21'),
(71, 34, 4, '2015-11-17 12:44:38'),
(72, 35, 4, '2015-11-17 12:47:12'),
(73, 36, 2, '2015-11-17 14:27:08'),
(74, 38, 2, '2015-11-17 15:06:33'),
(75, 37, 1, '2015-11-17 15:07:18'),
(76, 37, 2, '2015-11-17 15:07:49'),
(77, 37, 2, '2015-11-17 15:08:00'),
(78, 39, 2, '2015-11-17 15:50:28'),
(79, 39, 2, '2015-11-17 15:59:43'),
(80, 40, 2, '2015-11-17 17:23:25'),
(81, 40, 2, '2015-11-17 17:23:39'),
(82, 6, 3, '2015-11-17 18:02:37'),
(83, 6, 3, '2015-11-17 18:02:43'),
(84, 41, 1, '2015-11-17 18:31:44'),
(85, 43, 4, '2015-11-17 22:02:15'),
(86, 45, 2, '2015-11-17 22:32:22'),
(87, 45, 2, '2015-11-17 22:32:40'),
(88, 45, 2, '2015-11-17 22:32:51'),
(89, 46, 2, '2015-11-18 02:06:08'),
(90, 46, 2, '2015-11-18 02:07:13'),
(91, 46, 2, '2015-11-18 02:08:01'),
(92, 47, 2, '2015-11-18 05:12:38'),
(93, 47, 2, '2015-11-18 05:12:47'),
(94, 49, 2, '2015-11-18 10:00:43'),
(95, 50, 4, '2015-11-18 10:47:20'),
(96, 51, 4, '2015-11-18 11:26:39'),
(97, 52, 2, '2015-11-18 11:36:55'),
(98, 52, 2, '2015-11-18 11:37:15'),
(99, 52, 2, '2015-11-18 11:37:36'),
(100, 52, 2, '2015-11-18 11:37:55'),
(101, 55, 3, '2015-11-18 11:52:19'),
(102, 55, 3, '2015-11-18 11:52:44'),
(103, 56, 4, '2015-11-18 11:58:15'),
(104, 58, 4, '2015-11-18 13:02:02'),
(105, 58, 1, '2015-11-18 13:20:12'),
(106, 58, 2, '2015-11-18 13:23:31'),
(107, 59, 4, '2015-11-18 13:59:48'),
(108, 59, 2, '2015-11-18 14:00:48'),
(109, 59, 2, '2015-11-18 14:01:05'),
(110, 59, 2, '2015-11-18 14:01:15'),
(111, 59, 2, '2015-11-18 14:01:32'),
(112, 59, 2, '2015-11-18 14:01:46'),
(113, 60, 4, '2015-11-18 14:26:32'),
(114, 62, 4, '2015-12-03 17:53:04'),
(115, 62, 3, '2015-12-03 17:59:18'),
(116, 62, 3, '2015-12-03 17:59:41'),
(117, 62, 3, '2015-12-03 17:59:59'),
(118, 62, 4, '2015-12-03 19:34:34'),
(119, 63, 4, '2015-12-03 19:36:33'),
(120, 63, 4, '2015-12-03 19:36:37');

-- --------------------------------------------------------

--
-- Table structure for table `user_share_fakta_tb`
--

CREATE TABLE `user_share_fakta_tb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `fakta_id` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=84 ;

--
-- Dumping data for table `user_share_fakta_tb`
--

INSERT INTO `user_share_fakta_tb` (`id`, `user_id`, `fakta_id`, `created_date`) VALUES
(1, 3, 1, '2015-11-14 09:00:54'),
(2, 2, 4, '2015-11-14 09:03:35'),
(3, 5, 1, '2015-11-14 09:58:31'),
(4, 6, 2, '2015-11-14 10:15:57'),
(5, 6, 1, '2015-11-14 10:16:15'),
(6, 4, 1, '2015-11-14 10:18:14'),
(7, 4, 2, '2015-11-14 10:18:30'),
(8, 6, 5, '2015-11-14 10:23:05'),
(9, 6, 1, '2015-11-16 13:51:45'),
(10, 17, 1, '2015-11-16 14:47:00'),
(11, 17, 2, '2015-11-16 14:47:46'),
(12, 4, 2, '2015-11-16 14:50:33'),
(13, 12, 1, '2015-11-16 15:35:35'),
(14, 20, 2, '2015-11-16 15:53:49'),
(15, 20, 2, '2015-11-16 15:53:57'),
(16, 20, 3, '2015-11-16 15:54:36'),
(17, 20, 3, '2015-11-16 15:54:39'),
(18, 20, 4, '2015-11-16 15:55:03'),
(19, 20, 4, '2015-11-16 15:55:06'),
(20, 20, 5, '2015-11-16 15:55:30'),
(21, 20, 5, '2015-11-16 15:55:32'),
(22, 20, 6, '2015-11-16 15:55:50'),
(23, 20, 6, '2015-11-16 15:55:54'),
(24, 21, 2, '2015-11-16 16:08:54'),
(25, 21, 3, '2015-11-16 17:17:24'),
(26, 25, 6, '2015-11-16 19:02:40'),
(27, 26, 1, '2015-11-16 20:30:17'),
(28, 28, 5, '2015-11-17 07:49:17'),
(29, 31, 2, '2015-11-17 10:17:36'),
(30, 31, 1, '2015-11-17 10:17:51'),
(31, 31, 2, '2015-11-17 10:18:03'),
(32, 31, 3, '2015-11-17 10:18:20'),
(33, 31, 4, '2015-11-17 10:18:32'),
(34, 31, 5, '2015-11-17 10:18:46'),
(35, 31, 6, '2015-11-17 10:18:54'),
(36, 32, 3, '2015-11-17 12:39:27'),
(37, 32, 5, '2015-11-17 12:39:50'),
(38, 32, 6, '2015-11-17 12:40:08'),
(39, 32, 4, '2015-11-17 12:40:27'),
(40, 32, 2, '2015-11-17 12:40:42'),
(41, 32, 1, '2015-11-17 12:40:58'),
(42, 33, 1, '2015-11-17 12:41:38'),
(43, 33, 2, '2015-11-17 12:41:42'),
(44, 33, 3, '2015-11-17 12:42:16'),
(45, 33, 4, '2015-11-17 12:42:31'),
(46, 33, 5, '2015-11-17 12:42:50'),
(47, 33, 6, '2015-11-17 12:43:21'),
(48, 36, 1, '2015-11-17 14:27:08'),
(49, 38, 5, '2015-11-17 15:06:33'),
(50, 37, 1, '2015-11-17 15:07:49'),
(51, 37, 2, '2015-11-17 15:08:00'),
(52, 39, 3, '2015-11-17 15:50:28'),
(53, 39, 1, '2015-11-17 15:59:43'),
(54, 40, 1, '2015-11-17 17:23:25'),
(55, 40, 5, '2015-11-17 17:23:39'),
(56, 6, 1, '2015-11-17 18:02:37'),
(57, 6, 2, '2015-11-17 18:02:43'),
(58, 45, 2, '2015-11-17 22:32:22'),
(59, 45, 5, '2015-11-17 22:32:40'),
(60, 45, 6, '2015-11-17 22:32:51'),
(61, 46, 3, '2015-11-18 02:06:08'),
(62, 46, 5, '2015-11-18 02:07:13'),
(63, 46, 6, '2015-11-18 02:08:01'),
(64, 47, 5, '2015-11-18 05:12:38'),
(65, 47, 6, '2015-11-18 05:12:47'),
(66, 49, 1, '2015-11-18 10:00:43'),
(67, 52, 3, '2015-11-18 11:36:55'),
(68, 52, 4, '2015-11-18 11:37:15'),
(69, 52, 5, '2015-11-18 11:37:36'),
(70, 52, 6, '2015-11-18 11:37:55'),
(71, 55, 6, '2015-11-18 11:52:19'),
(72, 55, 5, '2015-11-18 11:52:44'),
(73, 58, 6, '2015-11-18 13:23:31'),
(74, 59, 2, '2015-11-18 14:00:48'),
(75, 59, 3, '2015-11-18 14:01:05'),
(76, 59, 4, '2015-11-18 14:01:15'),
(77, 59, 5, '2015-11-18 14:01:32'),
(78, 59, 6, '2015-11-18 14:01:46'),
(79, 62, 1, '2015-12-03 17:59:18'),
(80, 62, 1, '2015-12-03 17:59:41'),
(81, 62, 1, '2015-12-03 17:59:59'),
(82, 62, 1, '2015-12-03 18:10:17'),
(83, 62, 1, '2015-12-03 18:10:32');

-- --------------------------------------------------------

--
-- Table structure for table `user_share_infografis_tb`
--

CREATE TABLE `user_share_infografis_tb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `infografis_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user_share_personal_infografis_tb`
--

CREATE TABLE `user_share_personal_infografis_tb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `infografis_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user_tb`
--

CREATE TABLE `user_tb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `fb_id` varchar(255) NOT NULL,
  `fb_token` varchar(255) NOT NULL,
  `fb_data` text NOT NULL,
  `tw_id` varchar(255) NOT NULL,
  `tw_data` text NOT NULL,
  `tw_token` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `registered_email` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL,
  `profile_picture` varchar(255) NOT NULL,
  `pledge` int(11) NOT NULL,
  `infografis_picture` varchar(255) NOT NULL,
  `share_pledge` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=64 ;

--
-- Dumping data for table `user_tb`
--

INSERT INTO `user_tb` (`id`, `name`, `fb_id`, `fb_token`, `fb_data`, `tw_id`, `tw_data`, `tw_token`, `email`, `registered_email`, `created_date`, `profile_picture`, `pledge`, `infografis_picture`, `share_pledge`) VALUES
(1, 'anca sangadji', '', '0', 'false', '209473631', '{"id":209473631,"id_str":"209473631","name":"anca sangadji","screen_name":"anca45","location":"jakarta","description":"a junk yard and now lost in universe","url":null,"entities":{"description":{"urls":[]}},"protected":true,"followers_count":99,"friends_count":107,"listed_count":1,"created_at":"Fri Oct 29 07:55:36 +0000 2010","favourites_count":1,"utc_offset":-21600,"time_zone":"Central Time (US & Canada)","geo_enabled":false,"verified":false,"statuses_count":154,"lang":"en","status":{"created_at":"Mon Dec 30 18:46:01 +0000 2013","id":417728295011368960,"id_str":"417728295011368960","text":"@pln_123 ini gak ada info lanjutan yah perihal mati lampu dari tadi di wilayah pwnggilingan.. Sampe brp lama ini?","source":"<a href=\\"http:\\/\\/twitter.com\\/download\\/iphone\\" rel=\\"nofollow\\">Twitter for iPhone<\\/a>","truncated":false,"in_reply_to_status_id":417703542544035840,"in_reply_to_status_id_str":"417703542544035840","in_reply_to_user_id":558516132,"in_reply_to_user_id_str":"558516132","in_reply_to_screen_name":"pln_123","geo":null,"coordinates":null,"place":null,"contributors":null,"retweet_count":0,"favorite_count":0,"entities":{"hashtags":[],"symbols":[],"user_mentions":[{"screen_name":"pln_123","name":"PT PLN (Persero)","id":558516132,"id_str":"558516132","indices":[0,8]}],"urls":[]},"favorited":false,"retweeted":false,"lang":"in"},"contributors_enabled":false,"is_translator":false,"is_translation_enabled":false,"profile_background_color":"C0DEED","profile_background_image_url":"http:\\/\\/abs.twimg.com\\/images\\/themes\\/theme1\\/bg.png","profile_background_image_url_https":"https:\\/\\/abs.twimg.com\\/images\\/themes\\/theme1\\/bg.png","profile_background_tile":false,"profile_image_url":"http:\\/\\/pbs.twimg.com\\/profile_images\\/1393915725\\/ava3_normal.jpg","profile_image_url_https":"https:\\/\\/pbs.twimg.com\\/profile_images\\/1393915725\\/ava3_normal.jpg","profile_link_color":"0084B4","profile_sidebar_border_color":"C0DEED","profile_sidebar_fill_color":"DDEEF6","profile_text_color":"333333","profile_use_background_image":true,"has_extended_profile":false,"default_profile":true,"default_profile_image":false,"following":false,"follow_request_sent":false,"notifications":false}', '', '', '', '2015-11-14 08:28:44', 'http://graph.facebook.com//picture?type=large', 0, '', 0),
(2, 'Alvin Winata', '10153665549478959', 'CAAOZAk1X9p7cBAJ74uFaDjgGv935suSHkYuWjFZB15ZA5fC7vtR1Ro3hRmPb6ljsT1pVJC0eOZBT3ZAAOR2II0qcV21iEnOKVbHk7GLD3RUi0sJrtpBogYLOSxmaGsTSArZAwEpWTTr95z2ZAJzGH6ZBZBGXHJhIvItTTv8ApEpQZAZAVZCGMwQEEb8cAROgHdvLg6vMnMME8kxuFAZDZD', '{"name":"Alvin Winata","id":"10153665549478959"}', '', '', '', 'alvinw@isysedge.com', '', '2015-11-14 08:47:54', 'http://graph.facebook.com/10153665549478959/picture?type=large', 1, '', 0),
(3, 'Hanny Kunadi', '10153670423085169', 'CAAOZAk1X9p7cBAFXXzf2RH4ZCZAUMmReW2KZAK8SDoLhwJ0o9W5gmFtgNuvgPNDZBixjvOzmG7h3iUqhIkGC12Ax6rmsOCUocBlnLL9QXiQI7tCS9N7fI508tXAWIkzMEgJfT9BQc1CqYQ5uOyAKJHAJENbaedqqXCb4FrQZAWj2ZAVRMFqIut77FoA0vr8pTLRZBoMQqjl6WmDcQLhLtKCJ', '{"name":"Hanny Kunadi","id":"10153670423085169"}', '', '', '', 'hannykunadi@gmail.com', '', '2015-11-14 08:55:54', 'http://graph.facebook.com/10153670423085169/picture?type=large', 1, '', 0),
(4, 'Malona Malonahuai', '130133504015019', 'CAAOZAk1X9p7cBAKNZC3gQbW216riPjpRUs2AYJ0RdlioWY5giAFUcrat9Mk0ZCB8ra4drIZA0NF2CWyGLJ1ZC4JcGWmbJmh3TW3kSXwuTZA0yZCnwyKqbf2arEl8KQ6BbO9mJcsODXfGm0y0rqqyP0SN8MB0xe7y2YVQHYga3wZCotWwkByxqvWZAbfNzigKxLaKHKMQYb0D72gZDZD', '{"name":"Hatar","id":"130133504015019"}', '', '', '', 'Malonahuai@gmail.com', '', '2015-11-14 09:27:16', 'http://graph.facebook.com/130133504015019/picture?type=large', 1, '', 0),
(5, 'Fauzan Akbar', '10207961968229823', 'CAAOZAk1X9p7cBAPhpn8WhDG65i7aOolRHtZAsCVjmJ5CJG4RIQOroclRKpodnhQ8Rrx0MURkwScs7DZCwR8vSmKOwtGy1W4OYyA2OZATPiPEpkOvp3W0F7ZBYDYg1cC1dJdUVUL2nkQLrUNqwSIEzfz4oCA7SoSZAHYKBlkdx5EXYN54690HZBtXjW3dOZC0tSXpDcSfIOawAsCi7BBSIzCn', '{"name":"Fauzan Akbar","id":"10207961968229823"}', '', '', '', 'Fauzan.akbar53@yahoo.com', '', '2015-11-14 09:47:31', 'http://graph.facebook.com/10207961968229823/picture?type=large', 1, '', 0),
(6, 'Danny Setiawan', '10153712243899461', 'CAAOZAk1X9p7cBAHwF0HrkCyCkOsspWnj2EzbQbasrNtS8r8AC4R1sLe5wD7N4AKMbSEkbY2MEaafVjEZAmaybcIMs5Nk4XJo2BZCsJeP5J5ZCLjdwnaD30ZCPZABiPoZBxzPno6dBFf9ZBW8cnBI36oPdXLAvrtk9XN23ElLbPSJWGfZBJ7vmTHJ6CvMIm3rZAW5qnwQyvX59XigvkFQlBzNoN', '{"name":"Danny Setiawan","id":"10153712243899461"}', '', '', '', 'dannyitself@gmail.com', '', '2015-11-14 10:09:13', 'http://graph.facebook.com/10153712243899461/picture?type=large', 1, '', 0),
(7, 'Adeline Sutiswan', '10208097314696602', 'CAAOZAk1X9p7cBAPHbFXC1xpAWAvBZAYQHV5YXWzcKXcWAU4YsfmKrvvZBHc2E7yXLvw6F7CanTOZBZBimWXwc5bK2vTVbynqrs1eq6RRTdKscYbMK2RSJKeUswMSRQrGdSfDOEswq1dsXv5xDfmQtsZBr2jyUKm0tAmA5SnqD8wM8ZCvmNYMNfqe5o30eBcn8ajlVumfVmisgZDZD', '{"name":"Adeline Sutiswan","id":"10208097314696602"}', '', '', '', 'a_del90@yahoo.com', '', '2015-11-14 13:12:14', 'http://graph.facebook.com/10208097314696602/picture?type=large', 1, '', 0),
(8, 'Sioe Lan Lim', '743232989142815', 'CAAOZAk1X9p7cBAKy6wnhXwP10qn8WZCluPHMFgpGOS0HWiiZC7tD3s0TXyXAIowZBPGR55tvwk0rWIr3nF6ypVRFYTkum5UgVGZAXLZCZBCPb1ug5LAURZAFsnq3rWy4JNhsneWLmZAFKmAL5Wg0ZBqH9ZBWWJJDvTPOImGBl96ontjUx41ImucX1akShh6K8PPnnTpxFQ6jcvAih61ArPYtrZC4', '{"name":"Sioe Lan Lim","id":"743232989142815"}', '', '', '', '0', '', '2015-11-14 14:54:06', 'http://graph.facebook.com/743232989142815/picture?type=large', 1, '', 0),
(9, 'Made Bella Octavina Swajaya', '10153804270059040', 'CAAOZAk1X9p7cBAH4ilN5yJ5B8z9pHqk09HzbK2FTvUe9WdI0Ftea1CZBPhhXDU89RX3MXEUSlg8La3UnrJiqJwWSPNzpCq00TwG4wTXsK685GxieQr6b7EtlLKKKJc5jZAR3DCDU6bS9mCtyofCpiOspZBb3IB2WaashfyLpKSsq5fGpzbpDk1YRFqjeu3MZD', '{"name":"Made Bella Octavina Swajaya","id":"10153804270059040"}', '', '', '', '0', '', '2015-11-14 15:06:48', 'http://graph.facebook.com/10153804270059040/picture?type=large', 1, '', 0),
(10, 'indah nurjanah', '', '', '', '86043971', '{"id":86043971,"id_str":"86043971","name":"indah nurjanah","screen_name":"indahnurjnah","location":"","description":"Use kind words: Smile, be Positive, Laugh, Thanks,Try, and Happy \\u2665\\u263acat lovers","url":null,"entities":{"description":{"urls":[]}},"protected":false,"followers_count":253,"friends_count":257,"listed_count":1,"created_at":"Thu Oct 29 11:20:01 +0000 2009","favourites_count":2,"utc_offset":-28800,"time_zone":"Pacific Time (US & Canada)","geo_enabled":true,"verified":false,"statuses_count":2333,"lang":"en","status":{"created_at":"Mon Nov 09 11:10:59 +0000 2015","id":663675144930488320,"id_str":"663675144930488320","text":"one person followed me \\/\\/ automatically checked by https:\\/\\/t.co\\/nYzjhqLeNX","source":"<a href=\\"http:\\/\\/fllwrs.com\\" rel=\\"nofollow\\">fllwrs<\\/a>","truncated":false,"in_reply_to_status_id":null,"in_reply_to_status_id_str":null,"in_reply_to_user_id":null,"in_reply_to_user_id_str":null,"in_reply_to_screen_name":null,"geo":null,"coordinates":null,"place":null,"contributors":null,"retweet_count":0,"favorite_count":0,"entities":{"hashtags":[],"symbols":[],"user_mentions":[],"urls":[{"url":"https:\\/\\/t.co\\/nYzjhqLeNX","expanded_url":"http:\\/\\/fllwrs.com","display_url":"fllwrs.com","indices":[51,74]}]},"favorited":false,"retweeted":false,"possibly_sensitive":false,"lang":"en"},"contributors_enabled":false,"is_translator":false,"is_translation_enabled":false,"profile_background_color":"DBE9ED","profile_background_image_url":"http:\\/\\/pbs.twimg.com\\/profile_background_images\\/378800000092796487\\/b45cebbaf95ecd446c04304069b6a235.jpeg","profile_background_image_url_https":"https:\\/\\/pbs.twimg.com\\/profile_background_images\\/378800000092796487\\/b45cebbaf95ecd446c04304069b6a235.jpeg","profile_background_tile":true,"profile_image_url":"http:\\/\\/pbs.twimg.com\\/profile_images\\/590870091752804352\\/4P1xkbDV_normal.jpg","profile_image_url_https":"https:\\/\\/pbs.twimg.com\\/profile_images\\/590870091752804352\\/4P1xkbDV_normal.jpg","profile_banner_url":"https:\\/\\/pbs.twimg.com\\/profile_banners\\/86043971\\/1357803574","profile_link_color":"CC3366","profile_sidebar_border_color":"FFFFFF","profile_sidebar_fill_color":"E6F6F9","profile_text_color":"333333","profile_use_background_image":true,"has_extended_profile":false,"default_profile":false,"default_profile_image":false,"following":false,"follow_request_sent":false,"notifications":false}', '', '', '', '2015-11-14 15:45:17', 'http://pbs.twimg.com/profile_images/590870091752804352/4P1xkbDV_bigger.jpg', 0, '', 0),
(11, 'Ruth Morani Ecklesia Sihotang', '10205570404394589', 'CAAOZAk1X9p7cBABqJYSt9LzeDkMmduqOBA0LpswvqqYuOuB38Houbbsgbkz0WtBxQlfAD0IrXjh6kykwhZBIGOnxSU5mMjyz4IQh5y4bNC07ct6AZBHlsLa5bDZBwQ7thIA1Qb548G0BgX4yMtndrxZCXPuqvpOAVNQyOsF4JD2XclJhoRdHcrAxg4N8k7nKaEsPMKWCLggZDZD', '{"name":"Ruth Morani Ecklesia Sihotang","id":"10205570404394589"}', '', '', '', '0', '', '2015-11-14 15:59:19', 'http://graph.facebook.com/10205570404394589/picture?type=large', 1, '', 0),
(12, 'Trisca Dewi', '10208732105807162', 'CAAOZAk1X9p7cBAMZCkLgLavoyjenEHnvRZBQmZCSTaH8HOkZB75quXRmCxChWCp9Lw1jPcyNrvnFqQ9OZAnD4FIAJj8VJAWHZAzKUQeITJyxNiI16AqNWuvr0d7CUAiM9oaKQsgN1nr3AVqTDucOfLfhG7bycYpoiOFgJ1ZC9ZBQ2ZBULSE7ZBPI1CC12zNCmIev93TVAg2nFXPhQZAd4jufEt5doy1w9vLqzL4ZD', '{"name":"Trisca Dewi","id":"10208732105807162"}', '', '', '', '0', '', '2015-11-14 18:50:04', 'http://graph.facebook.com/10208732105807162/picture?type=large', 1, '', 0),
(13, 'Riana Cyndar Bumi Toar', '10208243761595938', 'CAAOZAk1X9p7cBACKydjasdCZCAYLugBvxcUuz9gwh0OjHwRZCE5R9yQ78aItIuv9IO0IxdJfolyvM68Ri4TzxiZBh3WwmaLVURRZCIZAu4RlMgN89oEp02o2dSk1GGHJccO9G8qMikbAjTxkZArouvSdP6xZBnvZANg0D4f53ESTsbPbNoVhj45RywQ0x1NNmdV57RjIZBOCY1JiZCjpSyLM8F5vFvLqYk2vTQZD', '{"name":"Riana Cyndar Bumi Toar","id":"10208243761595938"}', '', '', '', '0', '', '2015-11-14 21:31:07', 'http://graph.facebook.com/10208243761595938/picture?type=large', 0, '', 0),
(14, 'Rida Zulfarida', '1161038033911095', 'CAAOZAk1X9p7cBAOE0jfkfEPGKf6j7FxAZCM6SwWeAkeSsYge8X0fP6TmlDMyNLEinWQGmHjqx4wjoHUcPufLAX9dvqZBgedya4BDHvJkofwIWrxmeGXMbzlYBo15mt7fxdrvjdXSQQ0dMRFprjH4iAd1exZAZAacatXHaPTD4YP1pUjlmSpNej5kk90cBqpyrgM9Ncb1pdQZDZD', '{"name":"Rida Zulfarida","id":"1161038033911095"}', '', '', '', '0', '', '2015-11-16 08:13:09', 'http://graph.facebook.com/1161038033911095/picture?type=large', 0, '', 0),
(15, 'Christian Yahya Hartono', '1011402432215438', 'CAAOZAk1X9p7cBAK8KOCI4VctprG3I8EuLwR9QVKbTJZAZAmB4cBTCIyVdN4JA5JZALUUrz4przMPJZA30nHLq57nVmQS3jtZChHRvYgTipjiGipb4UdqJKF0FgK9o3sINvKD7x0QnZCiAANQlMJ30NaXZBZAEHCXenrO8RKjgcWtGxJFyNcqrA7gKJpNOvngEKZAMZD', '{"name":"Christian Yahya Hartono","id":"1011402432215438"}', '', '', '', '0', '', '2015-11-16 08:32:04', 'http://graph.facebook.com/1011402432215438/picture?type=large', 1, '', 0),
(16, 'Ventina Claudia', '10205410409525170', 'CAAOZAk1X9p7cBACGQRkqBYJLrT9SwzMoQLHTFSFMtJ1ZBabkiFVa9sHxjZBgsX5UeZBmwL5m6eaDITRkH9ZA5ArrSVy7zkvHvM9n1LmqfaJxqO0nUjZCQQeGZBDlGuZAhHAZCzznGcVTTDniwqn9KZC8JSIyw8iSROrLcLScxi1k8m9rUrDb6ZCc5RgLmQI0qZA8ZBvEZD', '{"name":"Ventina Claudia","id":"10205410409525170"}', '', '', '', '0', '', '2015-11-16 08:45:11', 'http://graph.facebook.com/10205410409525170/picture?type=large', 0, '', 0),
(17, 'Anca Sangadji', '10153257058818927', 'CAAOZAk1X9p7cBAIwwuDZANYmAF6QBZBKQ1Fl2LgIZBlFji9ZCjjLtkCVk3U4IrA8ljQ7HGMumSxfdeVWJ3aXJdaHZAkYBemnaqbbDIkwqT2uFltVfjxQuZAFahkX5qWo8dsg8sv0A608WZCX2ZBGkTRLsNsyx1rZAcjdZBmiWZBRqriZAVOcPIYibrK6qqtD6NClW7C7emRvH5FwUXwZDZD', '{"name":"Anca Sangadji","id":"10153257058818927"}', '', '', '', '0', '', '2015-11-16 11:53:54', 'http://graph.facebook.com/10153257058818927/picture?type=large', 1, '', 0),
(18, 'Budiono Tri', '10153790970963901', 'CAAOZAk1X9p7cBANwdA1IxZBzAZCzymIGzoM3EZAy0sGgjKDlZCsHDyEUNgkkRPgMlDiJlCOcMZAxWNxi7hibgRRfZAniCzOFtDDoXmxM6ytAZB0GJCuMDXnDkxzC5A71u4rTZAsU3QB4VhhvAk9pTjGpJ2yQdtF16GbA94zgzYzqflZBkhgqSRI2SDP8LpZCb4IwqzDWhwx3PWlyOtKgWewNSSn', '{"name":"Budiono Tri","id":"10153790970963901"}', '', '', '', 'budionohey@yahoo.com', '', '2015-11-16 12:03:19', 'http://graph.facebook.com/10153790970963901/picture?type=large', 0, '', 0),
(19, 'Tania Rizki M Putri', '10207913714110280', 'CAAOZAk1X9p7cBAIN09jk2yw4A6d06AGhaqHawN7WULkRZCbDaZB6Mrst2YHlYszbfDZCB8ZCFqGxM9CQ9JIriMgKLzUxt1lnO3nJyGZAF8P2hRxvhwPCiLXgw9yYHVjvq6UAEihu7IJhsKrIc3td8SQXQr3F5M9z5rBQiPvSbWTpKUkAonDravyfXWxoRvrAAc3Kj4Bm1SH8tFFOj9f5vO', '{"name":"Tania Rizki M Putri","id":"10207913714110280"}', '', '', '', '0', '', '2015-11-16 12:52:54', 'http://graph.facebook.com/10207913714110280/picture?type=large', 0, '', 0),
(20, 'Retha Audityastryanti', '556457154513440', 'CAAOZAk1X9p7cBAE8elG5TD0NhZCsbnBexFA6YTdOJyUg76y1uL19KMuNFst7LuKYNZCSGQL4InZADUpw597VLgXZAZALECnbVn5W6Jd4VKZAmZAuXeyQ7ERWV5s0p0JbXZAVBhR6zC9wyHk5JmF8xtOCkTULZAj6FPlY7aTgnI0wcvo9moq4Oi7rTM3Fac9kIxZCiekcpdAnGVqtCuRjh0oiMCR', '{"name":"Retha Audityastryanti","id":"556457154513440"}', '', '', '', '0', '', '2015-11-16 15:53:12', 'http://graph.facebook.com/556457154513440/picture?type=large', 0, '', 0),
(21, 'Berkata Positif', '', '', '', '208947700', '{"id":208947700,"id_str":"208947700","name":"Berkata Positif","screen_name":"berkatapositif","location":"","description":"Ayo berkata positif kepada orang di sekitarmu.","url":null,"entities":{"description":{"urls":[]}},"protected":false,"followers_count":345,"friends_count":629,"listed_count":0,"created_at":"Thu Oct 28 07:17:51 +0000 2010","favourites_count":0,"utc_offset":25200,"time_zone":"Jakarta","geo_enabled":false,"verified":false,"statuses_count":39,"lang":"en","status":{"created_at":"Mon Nov 16 06:52:06 +0000 2015","id":666146707688718336,"id_str":"666146707688718336","text":"Isu BABS menyerang Indonesia. Lawan ancaman BABS dengan aksimu di https:\\/\\/t.co\\/NlyBqd71Vf! #AksiNasional #TinjuTinja https:\\/\\/t.co\\/ztaU3RjlBs","source":"<a href=\\"http:\\/\\/twitter.com\\" rel=\\"nofollow\\">Twitter Web Client<\\/a>","truncated":false,"in_reply_to_status_id":null,"in_reply_to_status_id_str":null,"in_reply_to_user_id":null,"in_reply_to_user_id_str":null,"in_reply_to_screen_name":null,"geo":null,"coordinates":null,"place":null,"contributors":null,"retweet_count":0,"favorite_count":0,"entities":{"hashtags":[{"text":"AksiNasional","indices":[91,104]},{"text":"TinjuTinja","indices":[105,116]}],"symbols":[],"user_mentions":[],"urls":[{"url":"https:\\/\\/t.co\\/NlyBqd71Vf","expanded_url":"http:\\/\\/www.tinjutinja.com","display_url":"tinjutinja.com","indices":[66,89]},{"url":"https:\\/\\/t.co\\/ztaU3RjlBs","expanded_url":"http:\\/\\/twitter.com\\/Tinjutinjafacts\\/status\\/664676388952084480\\/photo\\/1","display_url":"pic.twitter.com\\/ztaU3RjlBs","indices":[117,140]}]},"favorited":false,"retweeted":false,"possibly_sensitive":false,"lang":"in"},"contributors_enabled":false,"is_translator":false,"is_translation_enabled":false,"profile_background_color":"C0DEED","profile_background_image_url":"http:\\/\\/abs.twimg.com\\/images\\/themes\\/theme1\\/bg.png","profile_background_image_url_https":"https:\\/\\/abs.twimg.com\\/images\\/themes\\/theme1\\/bg.png","profile_background_tile":false,"profile_image_url":"http:\\/\\/pbs.twimg.com\\/profile_images\\/1154103317\\/Logo_berkata_positif_twitter-03_normal.jpg","profile_image_url_https":"https:\\/\\/pbs.twimg.com\\/profile_images\\/1154103317\\/Logo_berkata_positif_twitter-03_normal.jpg","profile_link_color":"0084B4","profile_sidebar_border_color":"C0DEED","profile_sidebar_fill_color":"DDEEF6","profile_text_color":"333333","profile_use_background_image":true,"has_extended_profile":false,"default_profile":true,"default_profile_image":false,"following":false,"follow_request_sent":false,"notifications":false}', '', '', '', '2015-11-16 16:08:50', 'http://pbs.twimg.com/profile_images/1154103317/Logo_berkata_positif_twitter-03_bigger.jpg', 0, '', 0),
(22, 'Vicky Reisa Siburian', '10207512742164084', 'CAAOZAk1X9p7cBAA6XeMkoPUA2m8qQQpnoCPCTHFeDltYVZAZCbZBcgRmpTXY1ZBtUBI2vIDbZATz4bBmnWRPItTWZBTMRyxXdQrYdU8z4siwnJz8KZCPhfXUWQWmvn6LimeoUZBxQPqbkoFvCdzIbhYp7ZBGwZAlXgwV3M75kg8WcBDEwZCYT3mpjmKz7RafS1jBxSzWwS6IJOsoQAZDZD', '{"name":"Vicky Reisa Siburian","id":"10207512742164084"}', '', '', '', '0', '', '2015-11-16 16:38:48', 'http://graph.facebook.com/10207512742164084/picture?type=large', 0, '', 0),
(23, 'Hesnuaril Marlindayani', '10208029784925048', 'CAAOZAk1X9p7cBAFTltdEKoXV62RvScDEuI7fakUZCTiurRJv7TX7JfN7VUo1KzsSJGUOiUDfz94HBl7EZCavtT4NQUkTYwtBqIh9fGr3Ig3yuIZBOMlmZANOGgZB2tZAA0T7STHxPMb0fKJtSPCgQv12Ml4wg0EIbxEirN4sWMALzqd6hgZAeTOBSnRmDCjrn9kXvDKXMPh8KrJKWyPgga6s', '{"name":"Hesnuaril Marlindayani","id":"10208029784925048"}', '', '', '', 'hesnuaril@gmail.com', '', '2015-11-16 16:41:27', 'http://graph.facebook.com/10208029784925048/picture?type=large', 0, '', 0),
(24, 'Abrar Faiz Eko', '985425024814040', 'CAAOZAk1X9p7cBAANtJUDZCrPOXIBxXzZC4ZAKFPrQAX2Oe546dULHZCLlqzzynwmtQSFx5RtbfxXWHWoDOGBWS5aEsNmtmImitOr37Xr3rB2xZAP4DKBUjaKmkqdmfD0eJOTPQO4M8j5TukYklkiLWsg99Ln2E0Kh3QUNl3M5eotkZBNaaYqapbjJX6KBjChq0mgNREoKXNhDjcWZBgcMuaM', '{"name":"Abrar Faiz Eko","id":"985425024814040"}', '', '', '', '0', '', '2015-11-16 18:21:21', 'http://graph.facebook.com/985425024814040/picture?type=large', 0, '', 0),
(25, 'Hafiza Fathullah', '10208476657417344', 'CAAOZAk1X9p7cBAPED38K2L952cg7PzZB1EC9w00JR0qxnX9TAxPlflkSnA0ZCUH4BPcR7LdzkZAVFi3uM3UX3ZCZA3xVx9fKhZCkrkViwT9eiUUUG8ppCbZCgMfVnxe8gsJZA4oHFwjZB8RlHmj5i5UZBUuE3LaPl60gwOcF3cM7Wo4gkGxri1GV1D5Oe2Ym0Asms6JEVxyo2ZB2ZAQZDZD', '{"name":"Hafiza Fathullah","id":"10208476657417344"}', '', '', '', '0', '', '2015-11-16 18:58:28', 'http://graph.facebook.com/10208476657417344/picture?type=large', 1, '', 0),
(26, 'Catur Juli Hatmoko', '10206897602990501', 'CAAOZAk1X9p7cBACRl6QJ5uib4N7954isZAdZBXVx1kn3lxq1ZBT4SmLkrsITcHgG83evACkRXufw7IksTywOn0fceps8l9squcAuBdkyTA64ZCSTWoZC8RPwDLx7rjbzkUzZA6iPabqq3yZBBiEltUZAUhOcLDqOsTfumQXAsu878RWB016ZCUkZBnVvGzLIRS7Sobyzvt3Ls2LZB9fna9LAaTVy', '{"name":"Catur Juli Hatmoko","id":"10206897602990501"}', '', '', '', '0', '', '2015-11-16 20:24:36', 'http://graph.facebook.com/10206897602990501/picture?type=large', 0, '', 0),
(27, 'Ayu Nurlaila Indah', '985420844832413', 'CAAOZAk1X9p7cBAA6aqZASOZAwSdUFzCyuNF9PbipLiaVDNU0aDn7y6oznVwFNFJDwQeYpvMZBGUJ57ijFRgOZBzsNi7OmcbUsxwkDedM3ZCDhYezeNcvWQpASlQsa8GwgHMPLq9lQSbi0f11mNdZAFJxPZABrWOuyO61CafOqmtjSGmVLdLKbq6vhNDR7CYeqlcGyPUz2GjiNgIVntltZCZB1b', '{"name":"Ayu Nurlaila Indah","id":"985420844832413"}', '', '', '', '0', '', '2015-11-17 05:23:26', 'http://graph.facebook.com/985420844832413/picture?type=large', 0, '', 0),
(28, 'Wahyu Esb', '910826292327117', 'CAAOZAk1X9p7cBAMZB8ihiLr5QbbVQ3CK7f6pZAjnkaX9ZCZClbDSOKdcKALplZCZCyxOikUGgRVEAH9NIXEgMQd8PtWOZAoGTd24e1IbIwUGLem5WMPZCOHEEy2Nkuak9npYFGEnnSoeZBA7EWwqSyinZBiB2f5xrZBCykddxPEWBG7HrBJj9pq2klQPzZC2QkqRyc72zTG2fZAJ9AggZDZD', '{"name":"Wahyu Esb","id":"910826292327117"}', '', '', '', '0', '', '2015-11-17 07:47:30', 'http://graph.facebook.com/910826292327117/picture?type=large', 0, '', 0),
(29, 'BatuKarang', '', '', '', '222743764', '{"id":222743764,"id_str":"222743764","name":"BatuKarang","screen_name":"stanleypurba","location":"Unknown..until you find me..","description":"Humanist,Greenpeace,Pluviophil,ArtQuake,Randomable","url":"http:\\/\\/t.co\\/IgF6z36T7R","entities":{"url":{"urls":[{"url":"http:\\/\\/t.co\\/IgF6z36T7R","expanded_url":"http:\\/\\/batukarang23.tumblr.com\\/","display_url":"batukarang23.tumblr.com","indices":[0,22]}]},"description":{"urls":[]}},"protected":false,"followers_count":290,"friends_count":268,"listed_count":1,"created_at":"Sat Dec 04 09:25:54 +0000 2010","favourites_count":25,"utc_offset":28800,"time_zone":"Kuala Lumpur","geo_enabled":true,"verified":false,"statuses_count":10670,"lang":"en","status":{"created_at":"Mon Nov 16 11:48:19 +0000 2015","id":666221256245645312,"id_str":"666221256245645312","text":"Boleh milih Arsenal TV ga? Gw bkn fans MU https:\\/\\/t.co\\/hZ5Mftr9lG","source":"<a href=\\"http:\\/\\/twitter.com\\/download\\/iphone\\" rel=\\"nofollow\\">Twitter for iPhone<\\/a>","truncated":false,"in_reply_to_status_id":null,"in_reply_to_status_id_str":null,"in_reply_to_user_id":null,"in_reply_to_user_id_str":null,"in_reply_to_screen_name":null,"geo":null,"coordinates":null,"place":null,"contributors":null,"retweet_count":0,"favorite_count":0,"entities":{"hashtags":[],"symbols":[],"user_mentions":[],"urls":[{"url":"https:\\/\\/t.co\\/hZ5Mftr9lG","expanded_url":"https:\\/\\/twitter.com\\/my_supersoccer\\/status\\/666219678482702336","display_url":"twitter.com\\/my_supersoccer\\u2026","indices":[42,65]}]},"favorited":false,"retweeted":false,"possibly_sensitive":false,"lang":"in"},"contributors_enabled":false,"is_translator":false,"is_translation_enabled":false,"profile_background_color":"C6E2EE","profile_background_image_url":"http:\\/\\/abs.twimg.com\\/images\\/themes\\/theme2\\/bg.gif","profile_background_image_url_https":"https:\\/\\/abs.twimg.com\\/images\\/themes\\/theme2\\/bg.gif","profile_background_tile":false,"profile_image_url":"http:\\/\\/pbs.twimg.com\\/profile_images\\/639717338342817792\\/DyJ1q70A_normal.jpg","profile_image_url_https":"https:\\/\\/pbs.twimg.com\\/profile_images\\/639717338342817792\\/DyJ1q70A_normal.jpg","profile_banner_url":"https:\\/\\/pbs.twimg.com\\/profile_banners\\/222743764\\/1363708072","profile_link_color":"1F98C7","profile_sidebar_border_color":"C6E2EE","profile_sidebar_fill_color":"DAECF4","profile_text_color":"663B12","profile_use_background_image":true,"has_extended_profile":false,"default_profile":false,"default_profile_image":false,"following":false,"follow_request_sent":false,"notifications":false}', '', '', '', '2015-11-17 08:53:25', 'http://pbs.twimg.com/profile_images/639717338342817792/DyJ1q70A_bigger.jpg', 0, '', 0),
(30, 'Sayyidah Ustadza', '1094805443864203', 'CAAOZAk1X9p7cBAHU91IkF0lUvGHfBVq9PTF0SevfyIabTHXfO6AZBsldQ5bsdUZBqc4CKGrRbI3BbuA4D9LH5FSmd8yGmZCnvEMqIwaij7s8tJiI6r5OJexZBfyeZA6c6452CqBvkOhIGXoCLvFl3UnzCQkzZC0pYMmYSAdADJR6lXFdBHSwDCQS8R11eZCqQAuVYMytVT1mlQZDZD', '{"name":"Sayyidah Ustadza","id":"1094805443864203"}', '', '', '', '0', '', '2015-11-17 09:48:22', 'http://graph.facebook.com/1094805443864203/picture?type=large', 0, '', 0),
(31, 'Awalia Rahmawati', '', '', '', '74689792', '{"id":74689792,"id_str":"74689792","name":"Awalia Rahmawati","screen_name":"awaliacil","location":"+62","description":"\\ud669 \\uc544 \\ud654 95L | 2017 graduation!!","url":"http:\\/\\/t.co\\/P9jhKu6ljM","entities":{"url":{"urls":[{"url":"http:\\/\\/t.co\\/P9jhKu6ljM","expanded_url":"http:\\/\\/ask.fm\\/awaliacil","display_url":"ask.fm\\/awaliacil","indices":[0,22]}]},"description":{"urls":[]}},"protected":true,"followers_count":429,"friends_count":303,"listed_count":0,"created_at":"Wed Sep 16 09:11:43 +0000 2009","favourites_count":14,"utc_offset":25200,"time_zone":"Jakarta","geo_enabled":true,"verified":false,"statuses_count":26051,"lang":"en","status":{"created_at":"Tue Nov 10 12:58:59 +0000 2015","id":664064709478494208,"id_str":"664064709478494208","text":"There\\u2019s a beautiful thing that happens inside you when you care about someone. https:\\/\\/t.co\\/MGhpFIc8De","source":"<a href=\\"http:\\/\\/instagram.com\\" rel=\\"nofollow\\">Instagram<\\/a>","truncated":false,"in_reply_to_status_id":null,"in_reply_to_status_id_str":null,"in_reply_to_user_id":null,"in_reply_to_user_id_str":null,"in_reply_to_screen_name":null,"geo":null,"coordinates":null,"place":null,"contributors":null,"retweet_count":0,"favorite_count":0,"entities":{"hashtags":[],"symbols":[],"user_mentions":[],"urls":[{"url":"https:\\/\\/t.co\\/MGhpFIc8De","expanded_url":"https:\\/\\/instagram.com\\/p\\/957h-8HhTt\\/","display_url":"instagram.com\\/p\\/957h-8HhTt\\/","indices":[79,102]}]},"favorited":false,"retweeted":false,"possibly_sensitive":false,"lang":"en"},"contributors_enabled":false,"is_translator":false,"is_translation_enabled":false,"profile_background_color":"050405","profile_background_image_url":"http:\\/\\/pbs.twimg.com\\/profile_background_images\\/378800000053917147\\/81122e3ccd5614fd2622e7fdfdab2ae7.jpeg","profile_background_image_url_https":"https:\\/\\/pbs.twimg.com\\/profile_background_images\\/378800000053917147\\/81122e3ccd5614fd2622e7fdfdab2ae7.jpeg","profile_background_tile":true,"profile_image_url":"http:\\/\\/pbs.twimg.com\\/profile_images\\/603201407433383936\\/JCYr22pP_normal.jpg","profile_image_url_https":"https:\\/\\/pbs.twimg.com\\/profile_images\\/603201407433383936\\/JCYr22pP_normal.jpg","profile_banner_url":"https:\\/\\/pbs.twimg.com\\/profile_banners\\/74689792\\/1425709194","profile_link_color":"D168AE","profile_sidebar_border_color":"FFFFFF","profile_sidebar_fill_color":"F041DE","profile_text_color":"EB0CD1","profile_use_background_image":true,"has_extended_profile":false,"default_profile":false,"default_profile_image":false,"following":false,"follow_request_sent":false,"notifications":false}', '', '', '', '2015-11-17 10:17:21', 'http://pbs.twimg.com/profile_images/603201407433383936/JCYr22pP_bigger.jpg', 0, '', 0),
(32, 'Aris Wiratama', '1287322891293880', 'CAAOZAk1X9p7cBADmp3vBzlDeBMltNNZCeOW4LUEbjZBbNnRASGbHIVwwIFLxAixYRrAjqegmTBBkI4VYX45RjKCP6tyAsVvclzTcq7ZCDUPTZCiFrGrZBJV9S8GAT7KtQ8EhrZAFWqabtyKKzZB7UJywKSDCiyogUZCqH1XaBxc2j9eFOjnyJlWrZB8SnIq8CjYD7xwasnXKgZBFwZDZD', '{"name":"Aris Wiratama","id":"1287322891293880"}', '', '', '', '0', '', '2015-11-17 12:38:55', 'http://graph.facebook.com/1287322891293880/picture?type=large', 0, '', 0),
(33, 'Ramdani Husni', '10203501829424612', 'CAAOZAk1X9p7cBAAAtyFxLtZAmTLv8lYekyeLSoFifmPAHdZCPGHn4DZCCoWQVzh2BWMAC2y5qzZAeAEkB9KC1YRx7NZAh16IK2V1K3KkJZBPffykNJQU0jaizyL186BAwUKgjRIXECmASpDTPrHNYiXSbN1TiSZBhyZAZAgVZCH2OV2tRMKUGZB3kCQw8A2xC3ZBbEabAwkQ4AhFO7AZDZD', '{"name":"Ramdani Husni","id":"10203501829424612"}', '', '', '', '0', '', '2015-11-17 12:40:15', 'http://graph.facebook.com/10203501829424612/picture?type=large', 0, '', 0),
(34, 'Riadlotul Itqoh', '1095181057182089', 'CAAOZAk1X9p7cBAPzQGtMS1aPtCsqG9hbGZBlMFtmXyvxs5TlawZBkyHWrZAqpRu7dtlnF5rxIUVFp8ffxMZAbLZA14xlDLLYtGhq1ugHdmy3B4iQZBAgqJUa9reSCpD3iYMLudQso5Ey1LMH3lLSWZBgvBFi5cjKyo9ZCPWnNqqtGlam44u0wfogGXpKYx5iLjPsWZAvkl2wmZAZCXRAR5MY4EwZB', '{"name":"Riadlotul Itqoh","id":"1095181057182089"}', '', '', '', '0', '', '2015-11-17 12:44:38', 'http://graph.facebook.com/1095181057182089/picture?type=large', 1, '', 0),
(35, 'Bagas Dwi Yulianto', '1161190093909619', 'CAAOZAk1X9p7cBAEUCNalYQZAeekQ71A3MvQJaBcecHtbHBaOhUOGJKiX3LvZB44ZBevY5ZCqZCS4lPa15Yn8zIc1pvSaZBIFiUoxN26GaL2GFWAdQMa7VDgVGtF94xH5sAegBkIHs7M9TcQ5ZA0k4ypSAK2qydb73PZC2rUICGG2NS3w5lzkOnJ8J9OZCQGJkEPIQZD', '{"name":"Bagas Dwi Yulianto","id":"1161190093909619"}', '', '', '', '0', '', '2015-11-17 12:47:12', 'http://graph.facebook.com/1161190093909619/picture?type=large', 1, '', 0),
(36, 'Revitha Neysi Anggraeny', '971264286266418', 'CAAOZAk1X9p7cBAOxPZCwdlQ5ltctXOb84lN10yhkzoktQ0Y3fcmhqsgZBrDWTrvBQjaQs4xOol5oqnCQ7XYB85ZCFTBsKwCNI1d3ZAgRZBMn4VxRUjnpEmajtrUg3aIkKhZAwrpKJt6RDSt7vaTf263LQEWQfdONUXJx8qhR0XYuFxwZBIFE1LrZA0SMFRTr2IiAJWWufuTJVDrZCryT6AgEZB4', '{"name":"Revitha Neysi Anggraeny","id":"971264286266418"}', '', '', '', '0', '', '2015-11-17 14:02:32', 'http://graph.facebook.com/971264286266418/picture?type=large', 0, '', 0),
(37, 'Ida Tantri Wahyudi', '1025933434093644', 'CAAOZAk1X9p7cBAOlxrZBZBjna83jdhxOItSXh5g2SHBgQ9jNVOY7zJi9ZBiwuIg8ZBiT1GKpsAlF9Ct5e5J1EYQXxQDHGZBWZBcjDw8FtK86ZBVAZBQuif7WqW3nZC5KqbtVLW42TQZBo2tpHZBRXIvJUrtNBaocsnAIc77IjO0nxNaWJCz0LIcLUhT5WVQxNy5KBO1EVRZBZB0UcssQZDZD', '{"name":"Ida Tantri Wahyudi","id":"1025933434093644"}', '', '', '', 'itantriwahyudi@gmail.com', '', '2015-11-17 15:00:30', 'http://graph.facebook.com/1025933434093644/picture?type=large', 0, '', 0),
(38, 'Etry Sooswiftiesone', '10204788483224644', 'CAAOZAk1X9p7cBAIem2O5lTcSORQkIEgTlvH0KtccmUg9RvUZABT1fOKN2fPgmbuH85Oytx5uoY7sYlMnAE37aBpnhLUt4Fhs33suZCcKsPjn1th5t4suq8NWaRJOs6dZCNu1LXOZAH9tKxNm5X6o3KU0YV9Yx5GafU6lry04mYTg5PMtjbPfZCDBQedXL9ZAk0ZD', '{"name":"Etry Sooswiftiesone","id":"10204788483224644"}', '', '', '', '0', '', '2015-11-17 15:04:53', 'http://graph.facebook.com/10204788483224644/picture?type=large', 0, '', 0),
(39, 'Debora Plautilda Maturbongs', '1102365926441057', 'CAAOZAk1X9p7cBAMQbWtpRHmyeyHnCyt8mBpCcLLNUc1fWWoa6UdvFjWkx2UCHFb7JjEGSq5bsk4RnDa82ZAXDSDQBBtbsPAqSHy0pk5ZB5ZCrlpye7OUO08psBy1V5IkBr0Or2BiHMpipQdFZBZAUzeFk7Q7ha4UDraanV8Dwp6ZCGPsvr40vTauVCrrLAOb4FXGLISzpNineqjZBQbzFuTrKdlya0hsNOYZD', '{"name":"Debora Plautilda Maturbongs","id":"1102365926441057"}', '', '', '', '0', '', '2015-11-17 15:45:07', 'http://graph.facebook.com/1102365926441057/picture?type=large', 0, '', 0),
(40, 'Fikry Rama Petot', '448388825368101', 'CAAOZAk1X9p7cBACVl8ZCMWxj0rqB10jFETP4IKsZBycl2EDbGaPrm7LXqXAqFPHTj6pJxhenUyzGOyfxa8AoZCnjhGqjnBN5TnkHKo7CKZBXrNUQHJC2771w2GN1oJZCRA5CLFfcZANyUwGlzHaDNuJ2GBSYR0gohDzBHLZBQscgntfZANZCZBo17eeZCA803ZA4c37xeddf5f7nZBpQZDZD', '{"name":"Fikry Rama Petot","id":"448388825368101"}', '', '', '', '0', '', '2015-11-17 17:22:20', 'http://graph.facebook.com/448388825368101/picture?type=large', 0, '', 0),
(41, 'Nico Ajah', '543849165769800', 'CAAOZAk1X9p7cBAIDcn5SQ0LDNiDcIAYZA5z9p9vY6C8A0HHsHjAAOHwNzZCkHgIwZBJ6owrteeLZABLlq7gAYVKZCe08LqEgaQ5n0ZCrZCggpW1L1jP9H7HGC1PrdQOT5ag5bRTWn6oAlwnSyWhn1wZC0C2ZAsX7fk2XCl8yZAByGNXjHRpny9xYUneTGaZACngDpHUZD', '{"name":"Nico Ajah","id":"543849165769800"}', '', '', '', 'nicoeman7@gmail.com', '', '2015-11-17 18:21:32', 'http://graph.facebook.com/543849165769800/picture?type=large', 0, '', 0),
(42, 'Anggi Pertiwi', '973802192663435', 'CAAOZAk1X9p7cBAChE6VJXaZA0TwVjLh0CviFaN1wrz0YW6gXaFZAbUXgaFIv3L0ikfKqLR942l8tR4dgsvCTms3AkU2iZAzmDQi9FmGEQRQHMniq2e2mBuJZBhyMCsKMC399MZCwV9uDPiAeyiAzOfP7IcGZAvW58eh8YL5TOzJA3fugXsZA0bcqLqee7sVuapkZD', '{"name":"Anggi Pertiwi","id":"973802192663435"}', '', '', '', '0', '', '2015-11-17 20:54:58', 'http://graph.facebook.com/973802192663435/picture?type=large', 0, '', 0),
(43, 'Muhammad Zainal', '10204986948220058', 'CAAOZAk1X9p7cBAOZAf2jSvV1liQPi8jLFBtGdQG00xcm1TwIyiqqCpEXfZAdr5ujO1fbe8NrVuRWZAT4yjBgsCvBPJtwPMOdJPTBH9G0gwzMaLvRM14UjUZCWekxiVDT0QaWZACaqcivZAYkTUDIO2LkVqFGPFE98bZB7mdthlSBkBZCgpwyOIIOdJGgn40GS5PcZD', '{"name":"Muhammad Zainal","id":"10204986948220058"}', '', '', '', '0', '', '2015-11-17 22:02:15', 'http://graph.facebook.com/10204986948220058/picture?type=large', 1, '', 0),
(44, 'Ratna Yuriasari', '10153607884854961', 'CAAOZAk1X9p7cBAGifa4TphMpYNzD6GgJ4ZAZA18Y8VHzIqVQyBWIX7EFjQs3iI9pOL1zo5yHWvE0zncRRM1db7R7Jox5jXUVzrjTKAeCjNaiZCIifkYeAbOW7ZCGiAYZCdvive2SviLHOL6VTnZAUAb7xSqT8nCAty2gXK8lt0ErcMDoqySIoXUffDRVgc92axOS3Cms1aAZArXmpJhsro0C', '{"name":"Ratna Yuriasari","id":"10153607884854961"}', '', '', '', '0', '', '2015-11-17 22:10:12', 'http://graph.facebook.com/10153607884854961/picture?type=large', 0, '', 0),
(45, 'Dominika Bernadian', '1069417116422580', 'CAAOZAk1X9p7cBAFMNGtqoLp92wLsj0BosIchGJfK4uHU7JdrykRwgQBkzUHaU9ySBDoc9hKPXgEggvVwweAycIx8NeMMIo7BU88sg5UQrvbE1ZBKIcvzHZAVhkjdwZCtd0dEv8ZCBSM4mGPnVZCVYdkBJfxCZBzspxqDizWzoLPFIyQ2uGR2GG4Qg2vhnkwrbCtk2k2AroINAZDZD', '{"name":"Dominika Bernadian","id":"1069417116422580"}', '', '', '', '0', '', '2015-11-17 22:32:07', 'http://graph.facebook.com/1069417116422580/picture?type=large', 0, '', 0),
(46, 'Gilang Permata Sari', '1085820598096047', 'CAAOZAk1X9p7cBACJR5ZATLkZAMoWD9zLMqzqZCZBby19lJTp9DLTr2GVGDtK6BI9xwZChG9EyvOPFstM0h0wZC7sQMvZCOXr4ZBPOSnRBbzIlerr6nT6pxqzOTyBbvZCdgT3XI9HQqxTFO7oEom6At0uXcG8i9bxFR6rYAfwPlwvTBwO58AdnhZCqu19y0dZBABzU3pFtLCIimY2jgZDZD', '{"name":"Gilang Permata Sari","id":"1085820598096047"}', '', '', '', '0', '', '2015-11-18 01:20:28', 'http://graph.facebook.com/1085820598096047/picture?type=large', 0, '', 0),
(47, 'Andit Jisnu', '1187649807919005', 'CAAOZAk1X9p7cBADMq0UyB8hh4OZCJwX0EQ4pNZBvsMd8tPXoLlkLpUq1RLJe1IMagjBnjCizhYYwhhy7wfchZBVQz4LJ1VkywjhZA6kZB3c7PG7buryWDo0gzbC48pdvwZBCcU1TYWLFk4IuBzR0oBNZAs08aL7iCcZBXlgecWUNru1cNqpZBZANXlcZA5vwl0eKnD7iFk9LCHaJe7817RPuCHxb', '{"name":"Andit Jisnu","id":"1187649807919005"}', '', '', '', '0', '', '2015-11-18 05:12:19', 'http://graph.facebook.com/1187649807919005/picture?type=large', 0, '', 0),
(48, 'Muhammad Duyeh™', '', '', '', '297392088', '{"id":297392088,"id_str":"297392088","name":"Muhammad Duyeh\\u2122","screen_name":"MuhamadDuyeh","location":"BOGOR INDONESIA","description":"Tuhan\\u2709 ,mandirikanlah& sukseskanlah aku semuda mungkin, agar aku segera membahagiakan keduaorang tuaku | STKIP PASUNDAN | SMAN 1 CIGOMBONG Bgr | MTS SIROJUL","url":null,"entities":{"description":{"urls":[]}},"protected":false,"followers_count":257,"friends_count":958,"listed_count":0,"created_at":"Thu May 12 12:54:49 +0000 2011","favourites_count":27,"utc_offset":3600,"time_zone":"Amsterdam","geo_enabled":true,"verified":false,"statuses_count":1265,"lang":"id","status":{"created_at":"Tue Nov 17 09:11:39 +0000 2015","id":666544216537862145,"id_str":"666544216537862145","text":"RT @aheryawan: Kemarin saya mencoba #SepedaBambu hasil kreatifitas masyarakat Jawa Barat, enak dan kokoh, bisa mengangkut sd 500kg https:\\/\\/\\u2026","source":"<a href=\\"http:\\/\\/twitter.com\\/download\\/android\\" rel=\\"nofollow\\">Twitter for Android<\\/a>","truncated":false,"in_reply_to_status_id":null,"in_reply_to_status_id_str":null,"in_reply_to_user_id":null,"in_reply_to_user_id_str":null,"in_reply_to_screen_name":null,"geo":null,"coordinates":null,"place":null,"contributors":null,"retweeted_status":{"created_at":"Tue Nov 17 01:27:52 +0000 2015","id":666427499354570752,"id_str":"666427499354570752","text":"Kemarin saya mencoba #SepedaBambu hasil kreatifitas masyarakat Jawa Barat, enak dan kokoh, bisa mengangkut sd 500kg https:\\/\\/t.co\\/8fgm3g3lra","source":"<a href=\\"http:\\/\\/twitter.com\\/download\\/android\\" rel=\\"nofollow\\">Twitter for Android<\\/a>","truncated":false,"in_reply_to_status_id":null,"in_reply_to_status_id_str":null,"in_reply_to_user_id":null,"in_reply_to_user_id_str":null,"in_reply_to_screen_name":null,"geo":null,"coordinates":null,"place":null,"contributors":null,"retweet_count":127,"favorite_count":26,"entities":{"hashtags":[{"text":"SepedaBambu","indices":[21,33]}],"symbols":[],"user_mentions":[],"urls":[],"media":[{"id":666427469184929792,"id_str":"666427469184929792","indices":[116,139],"media_url":"http:\\/\\/pbs.twimg.com\\/media\\/CT-gQJlUkAAb9tR.jpg","media_url_https":"https:\\/\\/pbs.twimg.com\\/media\\/CT-gQJlUkAAb9tR.jpg","url":"https:\\/\\/t.co\\/8fgm3g3lra","display_url":"pic.twitter.com\\/8fgm3g3lra","expanded_url":"http:\\/\\/twitter.com\\/aheryawan\\/status\\/666427499354570752\\/photo\\/1","type":"photo","sizes":{"medium":{"w":600,"h":401,"resize":"fit"},"large":{"w":1024,"h":685,"resize":"fit"},"thumb":{"w":150,"h":150,"resize":"crop"},"small":{"w":340,"h":227,"resize":"fit"}}}]},"favorited":false,"retweeted":true,"possibly_sensitive":false,"lang":"in"},"retweet_count":127,"favorite_count":0,"entities":{"hashtags":[{"text":"SepedaBambu","indices":[36,48]}],"symbols":[],"user_mentions":[{"screen_name":"aheryawan","name":"Ahmad Heryawan","id":183832491,"id_str":"183832491","indices":[3,13]}],"urls":[],"media":[{"id":666427469184929792,"id_str":"666427469184929792","indices":[139,140],"media_url":"http:\\/\\/pbs.twimg.com\\/media\\/CT-gQJlUkAAb9tR.jpg","media_url_https":"https:\\/\\/pbs.twimg.com\\/media\\/CT-gQJlUkAAb9tR.jpg","url":"https:\\/\\/t.co\\/8fgm3g3lra","display_url":"pic.twitter.com\\/8fgm3g3lra","expanded_url":"http:\\/\\/twitter.com\\/aheryawan\\/status\\/666427499354570752\\/photo\\/1","type":"photo","sizes":{"medium":{"w":600,"h":401,"resize":"fit"},"large":{"w":1024,"h":685,"resize":"fit"},"thumb":{"w":150,"h":150,"resize":"crop"},"small":{"w":340,"h":227,"resize":"fit"}},"source_status_id":666427499354570752,"source_status_id_str":"666427499354570752","source_user_id":183832491,"source_user_id_str":"183832491"}]},"favorited":false,"retweeted":true,"possibly_sensitive":false,"lang":"in"},"contributors_enabled":false,"is_translator":false,"is_translation_enabled":false,"profile_background_color":"2E20E6","profile_background_image_url":"http:\\/\\/pbs.twimg.com\\/profile_background_images\\/433183619339661312\\/DXy6vsn5.jpeg","profile_background_image_url_https":"https:\\/\\/pbs.twimg.com\\/profile_background_images\\/433183619339661312\\/DXy6vsn5.jpeg","profile_background_tile":true,"profile_image_url":"http:\\/\\/pbs.twimg.com\\/profile_images\\/528276089819258880\\/2lbt1-Cv_normal.jpeg","profile_image_url_https":"https:\\/\\/pbs.twimg.com\\/profile_images\\/528276089819258880\\/2lbt1-Cv_normal.jpeg","profile_banner_url":"https:\\/\\/pbs.twimg.com\\/profile_banners\\/297392088\\/1429971253","profile_link_color":"2FED72","profile_sidebar_border_color":"000000","profile_sidebar_fill_color":"EDEDED","profile_text_color":"333333","profile_use_background_image":true,"has_extended_profile":false,"default_profile":false,"default_profile_image":false,"following":false,"follow_request_sent":false,"notifications":false}', '', '', '', '2015-11-18 08:11:57', 'http://pbs.twimg.com/profile_images/528276089819258880/2lbt1-Cv_bigger.jpeg', 0, '', 0),
(49, 'Devitasari Rsa', '908313442580592', 'CAAOZAk1X9p7cBAIxZABUkilTnvCdJRJsd5ZB6RAdvWZBOgQkSYPzajZC45LeAc2xCZB5yFDHtAm2RhKCVMj911vgqoFcDLsR63L8f5Q99MknP7ehsZCkhbOxRb5mLmqsrtMOuulQDqxM1RO3j8IgVnS5eezMwANSbbAcZBdcziyZA0qZBU50l5A8v3VUnn7PTZA6sIDmeJ2AxcDcAZDZD', '{"name":"Devitasari Rsa","id":"908313442580592"}', '', '', '', '0', '', '2015-11-18 09:59:42', 'http://graph.facebook.com/908313442580592/picture?type=large', 0, '', 0),
(50, 'Dinda Senja Astri', '10206760643848221', 'CAAOZAk1X9p7cBAKQL73zsPq7Ld4tbV0YopiXdWGLAyFmVNPxvwKkb1pDdgeu7AstRKyLJsrsrltj7T8KA9ZAZAyQ9lwX0MrGbPjExYlqoYSUDWQbZAh9sXghW2t2PNKbSWhNhZA4zVZBZAmX5lp3TcJ4VaPFILbGFhqCd5jSlOaZAWaDbn6uXAW3DNa3LikmQuvhkISsaJ90NAZDZD', '{"name":"Dinda Senja Astri","id":"10206760643848221"}', '', '', '', '0', '', '2015-11-18 10:47:20', 'http://graph.facebook.com/10206760643848221/picture?type=large', 1, '', 0),
(51, 'Endang Dewi Galih', '10205818472925252', 'CAAOZAk1X9p7cBAGQgcaWhgZCS5LMpEpCBczzXptOjOgtlXu8lwJAf2301QVNIKSYbZBoEYE2vAaEokxsDZCEEdIiBjE5JG4HeZB0WbSa0ef4dyxauPCEHHkAd7ZAypwuGGDaNBFlX1Pr8cyjqI00f3wHEEwnsos4n6XaB2ZCALjbQU3q81CM7ZAA1hfnXRfFzu9KnkT0vJOd7AZDZD', '{"name":"Endang Dewi Galih","id":"10205818472925252"}', '', '', '', '0', '', '2015-11-18 11:26:39', 'http://graph.facebook.com/10205818472925252/picture?type=large', 1, '', 0),
(52, 'Windianingrum Irvan', '10205168064702960', 'CAAOZAk1X9p7cBABcr6cAJlD6KShhN5VpKHwTsCotGTWv4PlWjDAnZBClA1MLBZADCNj13TGeeD5Yc22GOZC69pb5Ex1AsfzTGVePja5eZCM75toBelwPBpPTQ8cvKL138ji5E4fBhVnKWpP55rBfMPZAZCMAmpT33tfnGXonx8kJRrfrHDWGW7tKTGmiy14FsDRarjFRneALnrgZCE79rNmt', '{"name":"Windianingrum Irvan","id":"10205168064702960"}', '', '', '', '0', '', '2015-11-18 11:36:25', 'http://graph.facebook.com/10205168064702960/picture?type=large', 0, '', 0),
(53, 'Andina Rizky', '10153727892533351', 'CAAOZAk1X9p7cBADwbxm1QSFFNgopY5tdJ7AmAGq2ALSjef8F5u8x3mhIB8bmyXACv1e37O9rOwmDLHlgFQSZCwwtFmEMQN1sCOCQh6qCF9dNYeQjkJoWW0lkZAhqyT5hJZCTjaWyNUw6NzQwdwTrYa8E0lrMwgKrpZAAKLbZCz3j1RPQzBUZAphZBuiaZBa3kN1wOQnHXz9pZCYR9cf2Uldf3f', '{"name":"Andina Rizky","id":"10153727892533351"}', '', '', '', '0', '', '2015-11-18 11:37:40', 'http://graph.facebook.com/10153727892533351/picture?type=large', 0, '', 0),
(54, 'Desiree Tilaar', '10154345873414616', 'CAAOZAk1X9p7cBALCyd29B4GKanKjqLXOfnsctKbNmFP5zSvJwoKOKZAjGhLMJQ3RRKJxBmZAdzEQZBzToKfYZBAmjZB7udSVwSUGbKjUqo6sJwF4Thqft7Wh0d75jiHmWSlMJZCm5kts8eghkgy1URcRF5lBDH7zORQZAWYGog5G1NqFzKLg3C2txa0puu76ane4qNucO7QLaev8FcsqE3cd', '{"name":"Desiree Tilaar","id":"10154345873414616"}', '', '', '', '0', '', '2015-11-18 11:47:21', 'http://graph.facebook.com/10154345873414616/picture?type=large', 0, '', 0),
(55, 'Dimitri Ninditasari', '', '', '', '35472338', '{"id":35472338,"id_str":"35472338","name":"Dimitri Ninditasari","screen_name":"dimitri_nin","location":"Jakarta, Indonesia","description":"Postgrad Student. Cooking. Going Anywhere.","url":"http:\\/\\/t.co\\/L27t9lV2Tn","entities":{"url":{"urls":[{"url":"http:\\/\\/t.co\\/L27t9lV2Tn","expanded_url":"http:\\/\\/dimigrid.vsco.co","display_url":"dimigrid.vsco.co","indices":[0,22]}]},"description":{"urls":[]}},"protected":false,"followers_count":368,"friends_count":188,"listed_count":2,"created_at":"Sun Apr 26 14:16:16 +0000 2009","favourites_count":99,"utc_offset":25200,"time_zone":"Jakarta","geo_enabled":true,"verified":false,"statuses_count":13588,"lang":"en","status":{"created_at":"Mon Nov 16 08:13:48 +0000 2015","id":666167268800225280,"id_str":"666167268800225280","text":"DIY Succulents. Get busy gardening! https:\\/\\/t.co\\/bmBxlamT2X","source":"<a href=\\"http:\\/\\/twitter.com\\/download\\/android\\" rel=\\"nofollow\\">Twitter for Android<\\/a>","truncated":false,"in_reply_to_status_id":null,"in_reply_to_status_id_str":null,"in_reply_to_user_id":null,"in_reply_to_user_id_str":null,"in_reply_to_screen_name":null,"geo":null,"coordinates":null,"place":null,"contributors":null,"retweet_count":0,"favorite_count":0,"entities":{"hashtags":[],"symbols":[],"user_mentions":[],"urls":[],"media":[{"id":666167240841031681,"id_str":"666167240841031681","indices":[36,59],"media_url":"http:\\/\\/pbs.twimg.com\\/media\\/CT6zk3dU8AEoHyg.jpg","media_url_https":"https:\\/\\/pbs.twimg.com\\/media\\/CT6zk3dU8AEoHyg.jpg","url":"https:\\/\\/t.co\\/bmBxlamT2X","display_url":"pic.twitter.com\\/bmBxlamT2X","expanded_url":"http:\\/\\/twitter.com\\/dimitri_nin\\/status\\/666167268800225280\\/photo\\/1","type":"photo","sizes":{"thumb":{"w":150,"h":150,"resize":"crop"},"small":{"w":340,"h":159,"resize":"fit"},"large":{"w":1024,"h":479,"resize":"fit"},"medium":{"w":600,"h":280,"resize":"fit"}}}]},"favorited":false,"retweeted":false,"possibly_sensitive":false,"lang":"en"},"contributors_enabled":false,"is_translator":false,"is_translation_enabled":false,"profile_background_color":"FAF7F7","profile_background_image_url":"http:\\/\\/pbs.twimg.com\\/profile_background_images\\/378800000116323230\\/bf8f51d6cc7dd180a9678bca661589c1.png","profile_background_image_url_https":"https:\\/\\/pbs.twimg.com\\/profile_background_images\\/378800000116323230\\/bf8f51d6cc7dd180a9678bca661589c1.png","profile_background_tile":true,"profile_image_url":"http:\\/\\/pbs.twimg.com\\/profile_images\\/639366611544096768\\/-0B1eT0N_normal.jpg","profile_image_url_https":"https:\\/\\/pbs.twimg.com\\/profile_images\\/639366611544096768\\/-0B1eT0N_normal.jpg","profile_banner_url":"https:\\/\\/pbs.twimg.com\\/profile_banners\\/35472338\\/1428918433","profile_link_color":"0B3D2B","profile_sidebar_border_color":"000000","profile_sidebar_fill_color":"C9D1D1","profile_text_color":"A80D0D","profile_use_background_image":true,"has_extended_profile":false,"default_profile":false,"default_profile_image":false,"following":false,"follow_request_sent":false,"notifications":false}', '', '', '', '2015-11-18 11:51:13', 'http://pbs.twimg.com/profile_images/639366611544096768/-0B1eT0N_bigger.jpg', 0, '', 0),
(56, 'Nidie Cara Andira Putri', '10153698078642145', 'CAAOZAk1X9p7cBAGll43z53qRyUlV9LsK7IEM3Bl7LHPPfBZBD4pJFs6soteZAE3sBrvQrHb0QEytixktAPPzAUZAUPJa1dtMRW5GvxD2lENxtGCO3KrXUJZAOZCWov90yQAkyWz0oGVcsgoclBIpoTY71mI49A7ZBmRY1WR5soxOfCIhpDAYj4l5ONuToafHJgZD', '{"name":"Nidie Cara Andira Putri","id":"10153698078642145"}', '', '', '', '0', '', '2015-11-18 11:58:15', 'http://graph.facebook.com/10153698078642145/picture?type=large', 1, '', 0),
(57, 'Rizky Agung', '', '', '', '1005873684', '{"id":1005873684,"id_str":"1005873684","name":"Rizky Agung","screen_name":"_rizkyap","location":"","description":"","url":null,"entities":{"description":{"urls":[]}},"protected":false,"followers_count":113,"friends_count":173,"listed_count":0,"created_at":"Wed Dec 12 08:29:40 +0000 2012","favourites_count":41,"utc_offset":null,"time_zone":null,"geo_enabled":true,"verified":false,"statuses_count":1225,"lang":"en","status":{"created_at":"Sun Nov 08 16:22:15 +0000 2015","id":663391090196750336,"id_str":"663391090196750336","text":"My new sounds: Your Body Is Wonderland - John Mayer (cover) https:\\/\\/t.co\\/L2hQ2msmrX on #SoundCloud","source":"<a href=\\"http:\\/\\/soundcloud.com\\" rel=\\"nofollow\\">SoundCloud<\\/a>","truncated":false,"in_reply_to_status_id":null,"in_reply_to_status_id_str":null,"in_reply_to_user_id":null,"in_reply_to_user_id_str":null,"in_reply_to_screen_name":null,"geo":null,"coordinates":null,"place":null,"contributors":null,"retweet_count":3,"favorite_count":2,"entities":{"hashtags":[{"text":"SoundCloud","indices":[87,98]}],"symbols":[],"user_mentions":[],"urls":[{"url":"https:\\/\\/t.co\\/L2hQ2msmrX","expanded_url":"http:\\/\\/soundcloud.com\\/rizkyagungp\\/your-body-is-wonderland-john","display_url":"soundcloud.com\\/rizkyagungp\\/yo\\u2026","indices":[60,83]}]},"favorited":false,"retweeted":false,"possibly_sensitive":false,"lang":"en"},"contributors_enabled":false,"is_translator":false,"is_translation_enabled":false,"profile_background_color":"C0DEED","profile_background_image_url":"http:\\/\\/abs.twimg.com\\/images\\/themes\\/theme1\\/bg.png","profile_background_image_url_https":"https:\\/\\/abs.twimg.com\\/images\\/themes\\/theme1\\/bg.png","profile_background_tile":false,"profile_image_url":"http:\\/\\/pbs.twimg.com\\/profile_images\\/640925053589172224\\/RJ2fSx-b_normal.jpg","profile_image_url_https":"https:\\/\\/pbs.twimg.com\\/profile_images\\/640925053589172224\\/RJ2fSx-b_normal.jpg","profile_banner_url":"https:\\/\\/pbs.twimg.com\\/profile_banners\\/1005873684\\/1408812931","profile_link_color":"0084B4","profile_sidebar_border_color":"C0DEED","profile_sidebar_fill_color":"DDEEF6","profile_text_color":"333333","profile_use_background_image":true,"has_extended_profile":true,"default_profile":true,"default_profile_image":false,"following":false,"follow_request_sent":false,"notifications":false}', '', '', '', '2015-11-18 12:05:08', 'http://pbs.twimg.com/profile_images/640925053589172224/RJ2fSx-b_bigger.jpg', 0, '', 0),
(58, 'Anggreny De Chantal', '10205104400078763', 'CAAOZAk1X9p7cBAIkkNZB8g026uujjYAqe9SYmtWPoWavaEH6ZAWJVbK7ttlEiOFeTqi7cQnEZBcNvvrFfZAch4dUEld0ZCjXjNbZAO4oUwUc5jZAUHG9JpDU4MIMu4GtqtimHLZAVLl2GZCG0QDcl4teaeqC7PYYU0Cs8RywewGrJLziEeGff8EOqgoJkN74x39SyuxCFeQamlzAZDZD', '{"name":"Anggreny De Chantal","id":"10205104400078763"}', '', '', '', 'anggrenydewi@gmail.com', '', '2015-11-18 13:02:02', 'http://graph.facebook.com/10205104400078763/picture?type=large', 1, '', 0),
(59, 'Yousack Lay', '1188112707870074', 'CAAOZAk1X9p7cBANODDzX6ZCqL26BoSZCtLi5J5H1aN9jFZCcvJEkPbVKFZAGZAOt6XmuD71l8nJpe2r9BbtJEJNcWG5ZAYDWZBLzBunsofwrZBJ1EY5zO33C4EnmC7bOLGSDv9Up3ZB9Ou1CxGXpx4W0bhx5Dnnb5sGXZB8m2SuBrfRy1tyn2TKsDmDZAc09ofRSZAxkpxfvojjvnALiEWZABbjfNvjsWuFQvT1v4ZD', '{"name":"Yousack Lay","id":"1188112707870074"}', '', '', '', '0', '', '2015-11-18 13:59:48', 'http://graph.facebook.com/1188112707870074/picture?type=large', 1, '', 0),
(60, 'Adanti Wido Paramadini', '776206115822706', 'CAAOZAk1X9p7cBAN7HJHOZBPdNs4pXsl5bCrAmQYOV6GNQNeQ2G2YMBIZCHhX5sGLhzZAusqoEqCmUovyZCaXbIidg8IvvBFuVW3ruxJyKwxZCrb7GvukmSRgUVyyVeziwe10GQPZCj9pyr0krCYZBSRfEeF3E203v9rxvxWIMDu1roqOIpUoy6tXavulPr09cnzbOeaMpZA5RZCAZDZD', '{"name":"Adanti Wido Paramadini","id":"776206115822706"}', '', '', '', '0', '', '2015-11-18 14:26:32', 'http://graph.facebook.com/776206115822706/picture?type=large', 1, '', 0),
(61, 'Gery Airlangga Adrianto', '10207915166186792', 'CAAOZAk1X9p7cBALVlV8pb8z5gxnbqcgpp1xbxx2qvA2NlRSLmhMbtdampKRHXK8fw9BQhhGOnkcZCDwgGqJMaZCIXDvPAHC1jjNe9ZC76hogAzrmE3N1Rx8mCnjw3XL4evUIZBhrT4AcN45OPKJijEEcvtZBiICZBCy0KafgwR2ZAXGIxImQ92ZBtbayFg0xo7bG6UySdwxxqlJJ5txfZA2v0W', '{"name":"Gery Airlangga Adrianto","id":"10207915166186792"}', '', '', '', '0', '', '2015-11-18 15:18:55', 'http://graph.facebook.com/10207915166186792/picture?type=large', 0, '', 0),
(63, 'Alvin Winata', '10153662205403959', 'CAAHSKG6RGqUBAHe6r55bP3d2hHw6ZCIbIITPJCfcvGLhd2hXlQNlQTkzz1UUBalMPTKUyxfLXqtDC4QM9jpfcg0dYlqQpzHOscymfpnuUbuE5kckfDAMoqvAZAj9QVqPlzxRZAA7gHWln3pZBlTzHhSxAKVP7R3QBxA4c7F4L77BPopVmWLoePlOekMgEDUO2rZA94iKyGAZDZD', '{"name":"Alvin Winata","id":"10153662205403959"}', '', '', '', '0', '', '2015-12-03 19:36:33', 'http://graph.facebook.com/10153662205403959/picture?type=large', 1, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `video_tb`
--

CREATE TABLE `video_tb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `youtube_link` varchar(255) NOT NULL,
  `precedence` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `video_tb`
--

INSERT INTO `video_tb` (`id`, `youtube_link`, `precedence`, `status`, `image`) VALUES
(6, 'https://www.youtube.com/watch?v=M1ilPxC6grY', 4, 1, 'd70db0bd02998af1891afcb87b3dd00a.png'),
(7, 'https://www.youtube.com/watch?v=gFXe8BrWzJM', 5, 1, '7809ae012942ef26b19a7e4852d33188.png'),
(8, 'https://www.youtube.com/watch?v=gFXe8BrWzJM', 6, 1, 'ca13192d984ad35970aebd247cc91703.png'),
(9, 'https://www.youtube.com/watch?v=ssULWVljZPE', 7, 1, 'a878ad55ddbd89d568419601f7e2fbe7.png'),
(10, 'https://www.youtube.com/watch?v=Z-dOPnbMiAQ', 8, 1, 'b453218ff1375bab4822e5f5918421fd.png');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
