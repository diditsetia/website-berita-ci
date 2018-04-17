-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 25 Des 2017 pada 17.36
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `picture_so`
--

CREATE TABLE `picture_so` (
  `id_picture` int(12) NOT NULL,
  `picture` text NOT NULL,
  `create_at` date NOT NULL,
  `update_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `picture_so`
--

INSERT INTO `picture_so` (`id_picture`, `picture`, `create_at`, `update_at`) VALUES
(2, 'soimage.png', '2017-12-03', '2017-12-07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_admin`
--

CREATE TABLE `tabel_admin` (
  `id_admin` int(30) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `foto` text NOT NULL,
  `create_at` date NOT NULL,
  `update_at` date NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_admin`
--

INSERT INTO `tabel_admin` (`id_admin`, `username`, `password`, `foto`, `create_at`, `update_at`, `nama`, `email`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'p11.jpg', '0000-00-00', '2017-12-25', 'Didit Setia Budi ', 'diditsb007@gmail.com '),
(3, 'didit', 'b54158bd2d60aa56125ff181a32fb1d0', '', '0000-00-00', '0000-00-00', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_berita`
--

CREATE TABLE `tabel_berita` (
  `id_berita` int(50) NOT NULL,
  `nama_penulis` varchar(50) NOT NULL,
  `judul_berita` text NOT NULL,
  `isi_berita` text NOT NULL,
  `create_at` date NOT NULL,
  `update_at` date NOT NULL,
  `id_menu` int(50) DEFAULT NULL,
  `foto` text NOT NULL,
  `slug` text NOT NULL,
  `popular` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_berita`
--

INSERT INTO `tabel_berita` (`id_berita`, `nama_penulis`, `judul_berita`, `isi_berita`, `create_at`, `update_at`, `id_menu`, `foto`, `slug`, `popular`) VALUES
(22, 'Didit Setia Budi', 'Peningkatan Kapasitas untuk Sekretaris Dewan Pengawas dan Pembina Teknis BLU.', '<p style="text-align: justify;"><span style="font-size: 12pt;">Pada saat kebutuhan negara semakin meningkat, sedang sumber dana tidak memiliki kecepatan yang bersaing. Ditambah fakta bahwa hutang Indonesia sudah tidak perlu dipupuk lebih rajin lagi, membuat pemerintah kita harus memutar otaknya lebih keras, atau mungkin&nbsp;<em>sedikit</em>&nbsp;lebih kreatif. Hingga salah satu langkah besar yang diambil adalah&nbsp;<strong>reformasi keuangan dari penganggaran tradisional menjadi penganggaran berbasis kinerja</strong>. Paradigma inilah yang sedang diciptakan, yakni&nbsp;<strong>mewiraswastakan pemerintah</strong>&nbsp;(<em>enterprising government</em>). Sebenarnya, praktek ini telah berkembang di beberapa negara yang dilakukan dengan upaya pengagenan (<em>agencification</em>), yaitu aktivitas yang harus dilakukan birokrat murni, tetapi dilakukan oleh instansi yang dikelola seperti bisnis (<em>business like</em>). Pemerintah membutuhkan birokrat yang berjiwa entrepreneur atau wirausaha alias biropreneur. Mereka merupakan pemimpin instansi yang efisien dalam mengelola anggaran dan efektif dalam memanfaatkan pendapatan untuk peningkatan layanan kepada masyarakat.</span></p>\r\n<p style="text-align: justify;"><span style="font-size: 12pt;">Biropreuner tersebut diterjemahkan pemerintah dalam bentuk Badan Layanan Umum (BLU) yang dibentuk untuk memberikan pelayanan kepada masyarakat berupa penyediaan barang dan/atau jasa yang dijual tanpa mengutamakan mencari keuntungan dan dalam melakukan kegiatarnya didasarkan pada prinsip efisiensi dan produktivitas. BLU dikelola ala bisnis dengan menerapkan praktik bisnis yang sehat, melalui fleksibilitas sebagai pengecualian dari ketentuan keuangan negara pada umumnya.</span></p>\r\n<p style="text-align: justify;"><span style="font-size: 12pt;">Perkembangan saat ini dimana kinerja layanan dan keuangan Badan Layanan Umum yang semakin meningkat perlu didukung dengan fasilitas teknologi informasi untuk mendorong BLU menjadi lebih transparan, akuntabel, dan modern. Hal tersebut sudah terealisasi melalui BIOS (BLU&nbsp;<em>Integrated Online System</em>) sehingga stake holder BLU antara lain Direktorat PPK BLU, Kanwil Ditjen Perbendaharaan, Kementerian teknis, Satker BLU, dan Dewan Pengawas dapat menggunakan BIOS sebagai&nbsp;<em>dashboard</em>kinerja layanan dan keuangan sehingga bermanfaat untuk pengambilan keputusan oleh pihak manajemen.</span></p>\r\n<p style="text-align: justify;"><span style="font-size: 12pt;">Selain Satker BLU, pelaksanaan BIOS juga harus didukung oleh Dewan Pengawas dan Kementerian/Lembaga dengan melibatkan mereka dalam Implementasi Perdirjen Perbendaharaan Kementeria Keuangan RI nomor 53 tahun 2016 tentang Pedoman Peggunaan Aplikasi Badan Layanan Umum&nbsp;<em>Integrated Onlie System</em>&nbsp;(BIOS). Untuk mendukung pengembangan BIOS tersebut maka pada tanggal 20 dan 21 November 2017, Direktorat PPK BLU bersinergi dengan Pusintek Kemenkeu melakukan edukasi/bimbingan teknis perdana aplikasi BIOS kepada sekretaris Dewan Pengawas BLU dan Kementerian/Lembaga di gedung Syafrudin Prawiranegara, Pusintek Kemenkeu.</span></p>\r\n<p style="text-align: justify;"><span style="font-size: 12pt;">&ldquo;Pelatihan ini sangat bermanfaat terutama untuk&nbsp;<em>reporting</em>&nbsp;pengembangan BLU dan memang tepat serta perlu untuk meningkatkan kinerja dan pengawasan Dewan Pengawas,&rdquo; kesan antusias salah satu undangan ketika mengetahui seluruh laporan yang konvensional berupa hardcopy akan dihilangkan menjadi sistem elektronik (<em>paperless</em>).</span></p>\r\n<p style="text-align: justify;"><span style="font-size: 12pt;">Dengan pelatihan ini, ke depan diharapkan Dewan Pengawas BLU melalui Sekretaris Dewas dan Kementerian Lembaga yang hadir dalam bimtek akan semakin baik lagi dalam pelaporan BIOS yang terintegrasi dan berorientasi kepada kepuasan pemangku kepentingan dan masyarakat luas.</span></p>', '2017-12-25', '2017-12-25', 8, 'slideshoww1.jpg', 'peningkatan-kapasitas-untuk-sekretaris-dewan-pengawas-dan-pembina-teknis-blu--1', 1),
(23, 'Aji Pratama', 'PENGARAHAN @MENTERI KEUANGAN& KEPADA DEWAN PENGAWAS# DAN PEJABAT PENGELOLA BLU DARI UNSUR PEJABAT/PEGAWAI KEMENTERIAN KEUANGAN', '<p style="text-align: justify;">Bertempat di Aula Mezzanine, Gedung Juanda I, tanggal 5 Juni 2017 dilaksanakan kegiatan Pengarahan Menteri Keuangan Kepada Anggota Dewan Pengawas dan Pejabat Pengelola BLU dari Kementerian Keuangan. Kegiatan tersebut mengambil tema &ldquo;Peningkatan Peran Pajabat/Pegawai Kementerian Keuangan Dalam Meningkatkan Akuntabilitas, Transparansi, Dan Kinerja BLU.</p>\r\n<p style="text-align: justify;">Kegiatan tersebut merupakan keinginan Menteri Keuangan untuk memberikan pengarahan kepada pajabat/pegawai Kementerian Keuangan yang menduduki jabatan sebagai anggota Dewan Pengawas dan Pejabat Pengelola BLU. Dalam arahannya Menteri Keuangan menyampaikan bahwa BLU merupakan suatu agensi yang diciptakan dari Undang-Undang Perbendaharaan Negara yang berorientasi kepada kinerjabukan profit namun dengan mengutamakan kualitas pelayanan. Lebih lanjut Menteri Keuangan meminta kepada anggota Dewan Pengawas untuk lebih meningkatkan perannya dalam pembinaan/pengelolaan BLU. Pejabat Pengelola dan anggota Dewan Pengawas BLU dari Kementerian Keuangan diharapkan dapat berkontribusi lebih pada peningkatan akuntabilitas, transparansi, dan kinerja BLU sehingga tidak terkesan hanya sekedar bagi-bagi jabatan saja. Kedepannya Menteri Keuangan berharap agar BLU jangan cuma mengharapkan uang dari APBN untuk dibelanjakan namun lebih mengoptimalkan pendapatan yang diperoleh dari layanan yang diberikan. Selanjutnya Wakil Menteri Keuangan memberikan penegasan apa yang telah disampaikan oleh Menteri Keuangan.</p>\r\n<p style="text-align: justify;">Dalam sesi diskusi interaktif terdapat beberapa peserta yang memberikan tanggapan diantaranya :</p>\r\n<p style="text-align: justify;">Bapak Mulia P. Nasution yang menyampaikan tujuan BLU adalah untuk meningkatkan kinerja layanan dan tugas Kementerian Keuangan adalah pada pembinaan pengelolaan keuangannya.</p>\r\n<p style="text-align: justify;">Sedang masukan dari Ibu Rahayu Puspasari (Direktur LMAN) perlunya dilakukan&nbsp;<em>sharing session</em>&nbsp;dan sinergi antar BLU.</p>\r\n<p style="text-align: justify;">Tanggapan dari Bapak Taukhid (Kanwil DJPBN NTB) menyatakan bahwa memperbesar jumlah BLU cenderung memindahkan beban operasional layanan publik dari negara ke masyarakat. Lebih lanjut beliau menyampaikan usul perbaikan BLU yang meliputi empat level fleksibilitas yaitu PNBP, Rupiah Murni, Manajerial dan Aset.</p>', '2017-12-25', '2017-12-25', 8, 'news-thumb-1.jpg', 'pengarahan-menteri-keuangan-kepada-dewan-pengawas-dan-pejabat-pengelola-blu-dari-unsur-pejabat-pegawai-kementerian-keuangan', 0),
(26, 'amrizal', 'Tata Kelola Badan Layanan Umum', '<p style="text-align: justify;"><span style="font-size: 12pt;">Diop (2014) dari World Bank, dalam ''Indonesia: Avoiding the Trap'', menyebutkan terdapat setidaknya 2 (dua) fenomena yang terjadi di Indonesia yaitu gelombang lonjakan kelas menengah dan bonus demografi. Kedua fenomena tersebut merupakan kesempatan sekaligus risiko yang besar bagi struktur perekonomian. Optimalisasi fenomena tersebut dapat dilakukan melalui penyediaan barang dan jasa yang berkualitas sehingga menjamin terpenuhinya kebutuhan masyarakat.</span><br /><span style="font-size: 12pt;">Pada kondisi ini, Pemerintah menjadi pihak yang paling bertanggungjawab terhadap kesuksesan optimalisasi tersebut. Di dalam sistem keuangan negara, telah terdapat skema tata kelola Badan Layanan Umum (BLU) yang dapat menjadi tangan Pemerintah untuk menyediakan layanan penyediaan barang dan jasa yang diperlukan untuk memenuhi kebutuhan optimalisasi fenomena kelas menengah dan bonus demografi. Perlu dipahami, kondisi layanan tersebut belum memadai untuk memenuhi kebutuhan pemerintah tersebut. Pangkal permasalahannya adalah tata kelola.</span><br /><span style="font-size: 12pt;">Paper ini menawarkan solusi bagaimana mengembangkan tata kelola BLU untuk menciptakan institusi-institusi yang menjadi katalisator bagi pengembangan daya saing bangsa dengan peningkatan Total Factor Productivity (TFP). TFP merupakan faktor residual dalam perhitungan-perhitungan ekonomi, namun merupakan faktor utama yang memberikan nilai pengganda pada input. Peningkatan TFP inilah yang kami sasar sebagai tujuan utama pengembangan tata kelola BLU.</span><br /><span style="font-size: 12pt;">Di dalam paper ini, beberapa mekanisme eksisting yang telah mapan dibangun ulang dan diperkuat kembali. Ruang lingkup pola keuangan BLU dijabarkan kembali untuk memberikan ruang bagi BLU dalam pengembangan TFP yang menjadi tujuan akhir. Pola hubungan BLU dengan principal yang selama ini cenderung bersifat ambigu juga dirumuskan ulang agar menjadi lebih jelas, tegas dan transparan. Hal-hal seperti pengelolaan keuangan, pengukuran kinerja, pengembangan konsep juga dibahas sebagai solusi yang aplikatif dan komprehensif atas kebutuhan pengembangan struktur perekonomian di Indonesia.</span></p>', '2017-12-25', '0000-00-00', 0, 'bg-img-3.jpg', 'tata-kelola-badan-layanan-umum', 0),
(27, 'Asep kesasar', 'Pentingnya Budaya Entrepreneurship pada Instansi Pemerintah oleh Bapak Chairul Tanjung', '<p style="text-align: justify;">Bapak Chairul Tanjung sebagai tokoh yang bergerak dibidang ekonomi, bisnis, dan politik memberikan pidato tentang "Budaya&nbsp;<em>entrepreneurship</em>diperlukan untuk merubah budaya instansi pemerintah dari yang awalnya distigmakan birokratis, gemuk, dan tidak efisien menjadi instansi yang melayani, efisien, dan berorientasi pada hasil" di acara Rapat Koordinasi Badan Layanan Umum Tahun 2016.</p>\r\n<p style="text-align: justify;">Berikut hal yang disampaikan oleh Bapak Chairul Tanjung pada acara tersebut :</p>\r\n<p style="text-align: justify;">Bangsa Indonesia patut berbangga diri bahwa ranking&nbsp;<em>ease of doing business</em>&nbsp;(DB) Indonesia meningkat dari ranking 106 tahun lalu menjadi ranking 91 tahun ini dari 190 negara yang disurvei. Tapi tahukah kita bahwa ternyata dari unsur-unsur yang dinilai yang rata-rata capaiannya naik itu ada unsur yang capaiannyajustru turun yaitu item &ldquo;<em>dealing with construction permits</em>&rdquo;. Ini PR bagi kita bersama bahwa masih ada masalah birokrasi yang harus kita pecahkan bersama.</p>\r\n<p style="text-align: justify;">Badan Layanan Umum (BLU) merupakan instansi pemerintah yang dikelola ala bisnis berlandaskan hubungan&nbsp;<em>quasi-contractual&nbsp;</em>dengan kementerian/lembaga, yang dipercaya untuk memberikan pelayanan publik kepada masyarakat. Sebuah praktik yang juga berkembang luas di mancanegara yang dikenal dengan agensifikasi (<em>agencification</em>). Kementerian/lembaga tetap bisa memastikan kuantitas dan kualitas penyelenggaraan layanan melalui penetapan target yang jelas dan terukur kepada BLU. Kita akan melihat apakah fitur-fitur yang ada pada BLU memberikan ruang yang cukup bagi berkembangnya budaya&nbsp;<em>entrepreneurship.<br /></em></p>\r\n<p style="text-align: justify;">Untuk menanamkan budaya&nbsp;<em>entrepreneurship</em>&nbsp;pada Instansi Pemerintah, harus melibatkan serangkaian proses, diantaranya :</p>\r\n<p style="text-align: justify;"><em>A.</em><em>Recruit</em></p>\r\n<p style="text-align: justify;">Instansi pemerintah harus merekrut talent-talent terbaik untuk merubah mental birokrasi dari dilayani menjadi melayani</p>\r\n<p style="text-align: justify;">Ciri-ciri berikut ketika mengidentifikasi&nbsp;<em>entrepreneurial-minded talents</em>&nbsp;untuk di-<em>hire&nbsp;</em>oleh instansi pemerintah:</p>\r\n<p style="text-align: justify;">&middot;Memiliki visi</p>\r\n<p style="text-align: justify;">&middot;<em>curiosity</em></p>\r\n<p style="text-align: justify;">&middot;<em>an ownership mentality</em>, dan</p>\r\n<p style="text-align: justify;">&middot;<em>the ability to take risks</em>, tidak hanya sekedar&nbsp;<em>risk taker</em>&nbsp;tetapi juga kemampuan untuk membuat keputusan yang cermat, bijaksana dan didasarkan pada bukti (<em>risks to drive growth</em>).</p>\r\n<p style="text-align: justify;">2.Pengangkatan&nbsp;<em>chief executive</em>&nbsp;dan pegawai yang terbuka, kompetitif, dan berdasar kompetensi.</p>\r\n<p style="text-align: justify;"><strong>BLU&nbsp;<em>features</em>:</strong></p>\r\n<ol style="text-align: justify;">\r\n<li>Chief Executives BLU dapat berasal dari profesional non-PNS</li>\r\n<li>Pemimpin BLU memiliki kewenangan mengangkat profesional (non-PNS) berdasar kompetensi dan sesuai kebutuhan</li>\r\n</ol>\r\n<p style="text-align: justify;"><em>B.</em><em>Inovate</em></p>\r\n<p style="text-align: justify;">Memperbaiki proses lama adalah inovatif. Budaya inovasi akan muncul dalam instansi yang tidak dikekang atau kaku dengan aturan (rule-based). Dibutuhkan fleksibilitas untuk tumbuhnya inovasi pada instansi pemerintah.</p>\r\n<p style="text-align: justify;">1.Seringkali perbaikan kecil memiliki dampak besar dan&nbsp;<em>profitable</em>.</p>\r\n<p style="text-align: justify;">&middot;Contoh: Optimalisasi aset dan optimalisasi kas menjadi alternatif pendanaan baru bagi instansi pemerintah. Pemerintah harus berinovasi untuk meningkatkan kuantitas dan kualitas pelayanan publik tanpa perlu membebankan biaya yang besar kepada masyarakat.</p>\r\n<p style="text-align: justify;">&middot;Sangat tidak beralasan layanan tidak tersedia karena alasan proses revisi anggaran yang lama.</p>\r\n<p style="text-align: justify;">2.Harus siap dipandang &ldquo;gila&rdquo; untuk mengembangkan&nbsp;<em>entrepreneurial mindset;<br /></em></p>\r\n<p style="text-align: justify;">&nbsp;</p>\r\n<p style="text-align: justify;"><strong>BLU&nbsp;<em>features</em>:</strong></p>\r\n<p style="text-align: justify;"><strong>BLU memungkinkan inovasi untuk berkembang karena memiliki fleksibilitas yang tidak dimiliki oleh instansi pemerintah biasa, yaitu:</strong></p>\r\n<ul style="text-align: justify;">\r\n<li>Pengelolaan aset baik terkait tugas pokok (<em>core business</em>-nya) maupun tidak, kecuali untuk penghapusan/pelepasan aset (<em>PMK 136/PMK.05/2016 tentang Pengelolaan Aset Pada BLU</em>)</li>\r\n<li>Penempatan&nbsp;<em>idle cash</em>pada instrumen berisiko rendah (<em>Pasal 16 PP 23/2005 jo. PP 74/2012</em>)</li>\r\n<li>Bisa melakukan investasi jangka panjang (penyertaan modal, pemilikan obligasi untuk jangka panjang, dan investasi langsung) atas ijin Menteri Keuangan (<em>Pasal 16 PP 23/2005 jo. PP 74/2012</em>)</li>\r\n</ul>\r\n<ul style="text-align: justify;">\r\n<li>Sampai saat ini belum ada BLU yang memperoleh ijin dari Menteri Keuangan untuk berinvestasi jangka panjang meskipun ada BLU yang memerlukannya.</li>\r\n<li>Pengangkatan profesional non-PNS sesuai kebutuhan (<em>Pasal 33 PP 23/2005 jo. PP 74/2012</em>)</li>\r\n<li>Pengembangan sistem remunerasi oleh BLU dan penetapan remunerasinya cukup oleh Menteri Keuangan, instansi pemerintah biasa remunerasi ditetapkan dalam PP dan Perpres (<em>Pasal 36 PP 23/2005 jo. PP 74/2012</em>)</li>\r\n<li>Penentuan harga jual (tarif)layanan oleh Menteri Keuangan dengan kemungkinan didelegasikan kepada menteri teknis/BLU, sedangkan instansi pemerintah biasa tarif ditetapkan dalam PP (<em>Pasal 6 PP 23/2005 jo. PP 74/2012 &amp; PMK 100/PMK.05/2016 tentang Pedoman Penyusunan Tarif Layanan BLU</em>)</li>\r\n<li>Pengelolaan piutang (<em>Pasal 17 PP 23/2005 jo. PP 74/2012 &amp; PMK 230/PMK.05/2009 tentang Penghapusan Piutang BLU</em>)</li>\r\n<li>Pengelolaan utang, kecuali utang jangka panjang (<em>Pasal 18 PP 23/2005 jo. PP 74/2012 &amp; PMK 77/PMK.05/2009 tentang Pengelolaan Pinjaman pada BLU</em>)</li>\r\n<li>Sampai saat ini belum ada BLU yang memperoleh ijin dari Menteri Keuangan untuk berutang jangka panjang meskipun ada BLU yang sudah berinisiatif mencari pendanaan jangka panjang terutama untuk infrastruktur fisik yang tidak tersedia dananya dari APBN.</li>\r\n<li>Perencanaan(<em>Pasal 10-13 PP 23/2005 jo. PP 74/2012 &amp; PMK 92/PMK.05/2011 tentang Rencana Bisnis dan Anggaran serta Pelaksanaan Anggaran BLU</em>)</li>\r\n<li>Kewenangan menetapkan standar biaya sendiri (<em>Pasal&nbsp;</em><em>10</em><em>&nbsp;PP 23/2005 jo. PP 74/2012</em>)</li>\r\n<li>Belanjadapat bertambah atau berkurang dari yang dianggarkan sepanjang pendapatan terkait bertambah atau berkurang,&nbsp;<em>flexible budget</em>&nbsp;<em>(Pasal 15 PP 23/2005 jo. PP 74/2012)</em></li>\r\n<li>Menetapkan ketentuan pengadaan barang/jasayang sumber dananya selain dari APBN (<em>Pasal 20 PP 23/2005 jo. PP 74/2012 &amp; PMK 08/PMK.02/2006</em>)</li>\r\n<li>Praktiknya, sangat sedikit BLU yang &ldquo;berani&rdquo; menetapkan sendiri ketentuan pengadaan barang dan jasa di luar ketentuan mengenai pengadaan barang dan jasa pemerintah karena ketentuan dalam PMK Nomor 08/PMK.02/2006 yang mengharuskan terpenuhinya syarat &ldquo;bila terdapat alasan efektivitas dan efisiensi&rdquo; dipandang tidak cukup kuat dan jelas, meskipun kebutuhan ada.</li>\r\n<li>Kewenangan untuk mengelola surplus (<em>Pasal 29 PP 23/2005 jo. PP 74/2012</em>)</li>\r\n</ul>\r\n<p style="text-align: justify;"><em>C.</em><em>Incentivize<br /></em></p>\r\n<p style="text-align: justify;">Skema yang dibangun dengan penghargaan (reward) dan pengakuan (recognition) akan mendorong inovasi.</p>\r\n<p style="text-align: justify;"><strong>Bangun budaya menghargai (<em>reward</em>) dan mengakui (<em>recognition</em>)</strong></p>\r\n<p style="text-align: justify;">&middot;<em>Highlight innovative thinking</em>&nbsp;pada setiap&nbsp;<em>meeting</em>&nbsp;yang melibatkan seluruh pegawai.</p>\r\n<p style="text-align: justify;">&middot;Ketika ide seseorang dihargai, rekan-rekannya akan termotivasi untuk mengembangkan ide.</p>\r\n<p style="text-align: justify;">&middot;Contoh di&nbsp;<em>Google, programmer</em>&nbsp;tidak hanya mendapatkan&nbsp;<em>reward finansial</em>, mereka akan mendapat&nbsp;<em>a round of applause</em>&nbsp;dari rekan-rekan sekerja setelah mereka mempresentasikan idenya. Perusahaan lain menggunakan&nbsp;<em>social-employee recognition platform&nbsp;</em>yang memungkinkan rekan sekerja untuk menyapa dan menghargai secara&nbsp;<em>online</em>.</p>\r\n<p style="text-align: justify;"><strong>Remunerasi berdasarkan&nbsp;<em>performance-based pay</em></strong></p>\r\n<p style="text-align: justify;">&middot;Bedakan insentif untuk yang berprestasi. Remunerasi sebagai alat untuk menerapkan reward and punishment</p>\r\n<p style="text-align: justify;">&middot;Sistem penilaian kinerja harus dibangun</p>\r\n<p style="text-align: justify;"><strong>BLU&nbsp;<em>features</em>:</strong></p>\r\n<ol style="text-align: justify;">\r\n<li>Remunerasi BLU berdasarkan&nbsp;<em>performance-based pay</em>&nbsp;&ndash; sebagai alat untuk menerapkan&nbsp;<em>reward and punishment.</em></li>\r\n<li>Pemimpin BLU memiliki kewenangan untuk membangun sistem penilaian kinerja &ndash; remunerasi.</li>\r\n</ol>\r\n<p style="text-align: justify;">(<em>Pasal 36 PP 23/2005 jo. PP 74/2012 &amp; PMK 10/PMK.02/2006 jo. PMK 73/PMK.05/2007 tentang Pedoman Penetapan Remunerasi bagi Pejabat Pengelola, Dewan Pengawas, dan Pegawai BLU</em>)</p>\r\n<p style="text-align: justify;">&nbsp;</p>\r\n<p style="text-align: justify;">D .<em>Empower</em></p>\r\n<p style="text-align: justify;">Bangun lingkungan kerja yang memberdayakan (empower) untuk mendorong inovasi.</p>\r\n<ol style="text-align: justify;">\r\n<li>Berikan kesempatan pada pegawai untuk mencoba dan gagal :<em>&nbsp;Make it safe to share ideas &amp; Give employees a voice</em></li>\r\n<li><strong>Proses yang tidak mudah, tetapi resiko yang lebih besar adalah tidak berinovasi sama sekali</strong></li>\r\n<li><strong>Mengakui ide yang bagus berarti memberdayakan pegawai untuk eksperimen, berani mengambil risiko dan mengenal peluang.</strong></li>\r\n</ol>\r\n<p style="text-align: justify;"><strong>BLU&nbsp;<em>features</em>:</strong></p>\r\n<p style="text-align: justify;">oPenyelesaian kerugian pada BLU yang tidak membedakan secara tegas antara kerugian yang disebabkan oleh tindakan melanggar hukum/kecurangan/kelalaian dan kerugian normal secara bisnis merupakan disinsentif bagi konsep&nbsp;<em>empower&nbsp;</em>(<em>Pasal&nbsp;</em><em>24</em><em>&nbsp;PP 23/2005 jo. PP 74/2012</em><em>)</em>.</p>\r\n<p style="text-align: justify;"><em>B.</em><em>Train</em></p>\r\n<p style="text-align: justify;">Pelatihan akan menyatukan pegawai dan membuat mereka bertanya &ldquo;bagaimana kita bisa menjadi lebih baik?&rdquo;</p>\r\n<p style="text-align: justify;"><em>1.</em><em>Learn about entrepreneurs</em></p>\r\n<p style="text-align: justify;">2.Berikan pegawai kesempatan untuk bertanya dan dorong proses kreatif untuk memunculkan ide-ede kreatif</p>\r\n<p style="text-align: justify;"><em>C.</em><em>Continuous</em><em>&nbsp;effort</em></p>\r\n<p style="text-align: justify;"><strong>1.<em>The</em><em>&nbsp;work of building a company&rsquo;s culture never ends</em></strong></p>\r\n<p style="text-align: justify;"><strong>2.<em>Benchmarking</em>&nbsp;dengan industri sejenis untuk mencapai&nbsp;<em>best practice&nbsp;</em>dan menjalin hubungan berkelanjutan (<em>networks of relationship</em>)<br /></strong></p>\r\n<p style="text-align: justify;">&nbsp;</p>\r\n<p style="text-align: justify;"><strong><em>Conclusion</em></strong></p>\r\n<p style="text-align: justify;">A.<em>Review</em><em>&nbsp;of Main Points</em>:</p>\r\n<p style="text-align: justify;">Menanamkan budaya&nbsp;<em>entrepreneurship</em>&nbsp;pada Instansi Pemerintah, terutama BLU, melibatkan serangkaian proses:</p>\r\n<p style="text-align: justify;"><em>a.</em><em>Recruit</em></p>\r\n<p style="text-align: justify;">b.<em>Innovate</em></p>\r\n<p style="text-align: justify;">c.<em>Incentivize</em></p>\r\n<p style="text-align: justify;">d.<em>Empower</em></p>\r\n<p style="text-align: justify;">e.<em>Train</em></p>\r\n<p style="text-align: justify;">f.<em>Continues</em>&nbsp;Effort</p>\r\n<p style="text-align: justify;">B.<em>Restate Thesis</em></p>\r\n<p style="text-align: justify;">Budaya&nbsp;<em>entrepreneurship</em>&nbsp;diperlukan untuk merubah budaya instansi pemerintah dari yang awalnya distigmakan birokratis, gemuk, dan tidak efisien menjadi instansi yang melayani, efisien, dan berorientasi pada output.</p>\r\n<p style="text-align: justify;">C.<em>Closure</em></p>\r\n<p style="text-align: justify;"><strong>Untuk mewujudkan konsep BLU sebagai instansi pemerintah yang berwajah bisnis, diperlukan lingkungan yang kondusif bagi berkembangnya inovasi dan budaya&nbsp;<em>entrepreneurship&nbsp;</em>di BLU. Tanpa lingkungan yang mendukungnya, slogan BLU dikelola sesuai dengan praktik bisnis yang sehat hanyalah tinggal konsep tidak bermakna. Beberapa fitur-fitur BLU yang perlu digarisbawahi karena kurang/tidak mendukung budaya&nbsp;<em>entrepreneurship</em>&nbsp;adalah:</strong></p>\r\n<p style="text-align: justify;"><strong>1.</strong><strong>Belum adanya</strong><strong>&nbsp;aturan yang tegas tentang konsep kerugian normal karena bisnis dan konsep kerugian negara karena melanggar hukum/kelalaian berpotensi menghambat inovasi.</strong></p>\r\n<p style="text-align: justify;"><strong>2.</strong><strong>BLU&nbsp;</strong><strong>masih</strong><strong>&nbsp;belum memiliki kewenangan untuk memiliki utang dan investasi jangka panjang.</strong></p>\r\n<p style="text-align: justify;"><strong>3.</strong><strong>Belum adanya aturan yang jelas kapan BLU boleh menyusun pedoman pengadaan barang dan jasa sendiri.</strong></p>', '2017-12-25', '0000-00-00', 8, 'bg-img-4.jpg', 'pentingnya-budaya-entrepreneurship-pada-instansi-pemerintah-oleh-bapak-chairul-tanjung', 0),
(28, 'Afzi ahmadi', 'Suatu Tinjauan atas Konsep Penciptaan Nilai Publik (Public Value Creation) sebagai Paradigma Baru dalam Pelayanan Publik', '<p style="text-align: justify;"><strong>Pendahuluan</strong></p>\r\n<p style="text-align: justify;">Pengelolaan organisasi sektor publik dengan paradigma the new public management (NPM) dianggap kurang mencerminkan kekhususan pelayanan publik. Hal tersebut dikemukakan oleh beberapa penulis akademis luar negeri tentang adanya perbedaan nilai tujuan antara organisasi sektor publik dengan organisasi sektor swasta. Akibatnya badan-badan pelayanan publik kini menghadapi tantangan terkait bagaimana menciptakan nilai publik dalam pelayanan publik. Mark Moore dalam bukunya &lsquo;Creating Public Value&rsquo; menggagas konsep penciptaan nilai publik sebagai fokus utama para manajer organisasi sektor publik (Moore 1995). Hal tersebut didukung oleh Janine O&rsquo;Flynn seorang dosen pada Universitas Nasional Australia yang berpendapat perlunya perubahan paradigma organisasi sektor publik dari teori Managemen Publik Baru (NPM) menuju konsep penciptaan Nilai Publik (public value creation). Tulisan ini akan meninjau sejauh mana implikasi gagasan penciptaan nilai publik sebagai paradigma baru dalam pengelolaan pelayanan publik di Indonesia.</p>\r\n<p style="text-align: justify;"><strong>Konsep Nilai Publik</strong></p>\r\n<p style="text-align: justify;">Pada dasarnya, penciptaan nilai publik dibangun dari suatu strategi organisasional yakni Trilogi Strategi (a strategic triangle) yang dipopulerkan oleh Mark Moore. Menurut konsep ini, tugas manajer publik dianalogikan hampir sama dengan tugas manajer sektor swasta. Sebagaimana para manajer sektor swasta menciptakan nilai ekonomis bagi&nbsp;<em>shareholders</em>&nbsp;atau para pemilik modal, para manajer publik diharapkan menciptakan nilai publik dalam program-program yang dijalankan. Spano berpendapat bahwa nilai publik dapat tercapai bilamana layanan yang dihasilkan oleh organisasi sektor publik memenuhi kebutuhan penduduk, sehingga semakin tinggi kepuasan masyarakat, semakin besar nilai publik yang diciptakan (Spano 2009, p. 328). Sedangkan Mark Moore menulis bahwa organisasi publik dikatakan telah menciptakan nilai publik apabila hasil manfaat yang diterima oleh masyakat lebih besar daripada biaya yang dikeluarkan termasuk didalamnya penggunaan aspek hukum yang memaksa pengguna layanan untuk mematuhi ketentuan perundang-undangan (Moore 1995). Sedangkan O&rsquo;Flynn mendeskripsikan Nilai Publik sebagai berikut:</p>\r\n<p style="text-align: justify;">Public value has been described as a mutli-dimensional construct &ndash; a reflection of collectively expressed, politically mediated preferences consumed by the citizenry &ndash; created not just through &lsquo;outcomes&rsquo; but also through processes which may generate trust or fairness (O''Flynn 2007, p.358).</p>\r\n<p style="text-align: justify;">Selain itu, penciptaan nilai publik (public value creation) didasarkan pada asumsi bahwa nilai publik dapat tercapai ketika proses pengambilan keputusan didasarkan atas adanya suatu hubungan yang erat antara dimensi institusi, politik dan korporat untuk memastikan adanya komitmen bersama diantara pihak-pihak terkait dalam keselarasan untuk mencapai tujuan bersama. Berangkat dari teori dimaksud, untuk menghasilkan nilai publik, para manajer publik dihadapkan pada tiga pertanyaan kunci sebagai berikut:</p>\r\n<p style="text-align: justify;">1. Untuk apa organisasi ini dibentuk?</p>\r\n<p style="text-align: justify;">2. Kepada siapa organisasi ini bertanggung jawab?</p>\r\n<p style="text-align: justify;">3. Bagaimana mengetahui bahwa organisasi telah sukses mencapai tujuannya?</p>', '2017-12-25', '0000-00-00', 0, '2.jpg', 'suatu-tinjauan-atas-konsep-penciptaan-nilai-publik-public-value-creation-sebagai-paradigma-baru-dalam-pelayanan-publik', 0),
(29, 'asep kosasi', 'WORKSHOP REVISI UU PNBP TERHADAP REVISI PP 23 TAHUN 2015', '<div class="content-gradient">\r\n<p style="text-align: justify;"><em>Workshop&nbsp;</em>hari ini diselenggarakan dalam rangka menggali masukan dan informasi terkait revisi Peraturan Pemerintah Nomor 23 Tahun 2005 tentang Pengelolaan Keuangan Badan Layanan Umum dan banyaknya pertanyaan implikasi atasRUU PendapatanNegara Bukan Pajak (PNBP) terhadap tata kelola Badan Layanan Umum.</p>\r\n<p style="text-align: justify;">Kegiatan&nbsp;<em>workshop&nbsp;</em>hari ini merupakan bagian dari rangkaian kegiatan dalam rangka revisi Peraturan Pemerintah Nomor 23 Tahun 2005. Rangkaian kegiatan tersebut diawali dengan kegiatan monitoring dan evaluasi atas kinerja masing-masing Badan Layanan Umum untuk mendapatkan gambaran secara riil atas implementasi peraturan di lapangan. Dari hasil monitoring dan evaluasi tersebut dapat dinventarisir berbagai masalah sebagai berikut :</p>\r\n<p style="text-align: justify;">1. Pengelolaan kas yg tidak optimal, ditandai dari tingginya saldo awal pada sebagian besar BLU. Hal ini disebabkan dalam aspek penganggaran BLU tidak ada bedanya dengan satker non BLU.</p>\r\n<p style="text-align: justify;">2. Belum optimalnya pemanfaatan aset ditandai dengan adanya beberapa aset yang&nbsp;<em>idle capacity</em>. Hal ini disebabkan regulasi tata kelola aset di BLU hampir tidak berbeda dengan satker non BLU.</p>\r\n<p style="text-align: justify;">3. Pengelolaan SDM yang belum optimal, ditandai adanya beban belanja pegawai yang besar dengan produktivitas yang rendah. Hal ini lebih memperlihatkan adanya kelebihan pegawai yang tidak profesional.</p>\r\n</div>\r\n<hr />', '2017-12-25', '0000-00-00', 8, 'bg-img-2.jpg', 'workshop-revisi-uu-pnbp-terhadap-revisi-pp-23-tahun-2015', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_contact`
--

CREATE TABLE `tabel_contact` (
  `id_contact` int(12) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `fax` text NOT NULL,
  `maps` text NOT NULL,
  `create_at` date NOT NULL,
  `update_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_contact`
--

INSERT INTO `tabel_contact` (`id_contact`, `address`, `phone`, `email`, `fax`, `maps`, `create_at`, `update_at`) VALUES
(2, '  Soka , Ngoro-oro, Patuk, Gunungkidul,  Yogyakarta                                                                                                                              ', '083840859314', 'diditsb007@gmail.com ', 'AB4332566677', 'https://www.google.com/maps/embed/v1/search?key=AIzaSyBHoIwW8z8WfQAhzGXgok_KFj3V9DFXopA&q=DinasPendidikanKabupatenSampang¢er=-7.19131,113.25323&zoom=13                                                                                                                                    ', '2017-12-24', '2017-12-25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_footer`
--

CREATE TABLE `tabel_footer` (
  `id_footer` int(12) NOT NULL,
  `copyright` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_footer`
--

INSERT INTO `tabel_footer` (`id_footer`, `copyright`) VALUES
(2, '2017-Dinas Pendidikan Kota Serang ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_gallery`
--

CREATE TABLE `tabel_gallery` (
  `id_gallery` int(50) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `foto` text NOT NULL,
  `create_at` date NOT NULL,
  `update_at` date NOT NULL,
  `slug` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_gallery`
--

INSERT INTO `tabel_gallery` (`id_gallery`, `judul`, `keterangan`, `foto`, `create_at`, `update_at`, `slug`) VALUES
(19, 'Rapat 2018', '                                                                                      ', 'gallery-18.jpg', '2017-12-24', '0000-00-00', 'Rapat 2018'),
(21, 'Coba1', '                                                                                     ', '_MG_3336_copy-iloveimg-compressed3.jpg', '2017-12-25', '0000-00-00', 'Coba1'),
(22, 'dkdkdk', '                                                                                      ', 'coba2.png', '2017-12-25', '0000-00-00', 'dkdkdk'),
(23, 'cobaee', '                                                                                      ', 'gallery-23.jpg', '2017-12-25', '0000-00-00', 'cobaee'),
(24, 'kkdkd', '                                                                                      ', 'visimisi1.png', '2017-12-25', '0000-00-00', 'kkdkd'),
(25, 'kkdkd', '                                                                                                                                                                                                                                                                  ', 'wakil.png', '2017-12-25', '2017-12-25', 'kkdkd1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_header`
--

CREATE TABLE `tabel_header` (
  `id_header` int(12) NOT NULL,
  `nama_perusahaan` text NOT NULL,
  `tagline` text NOT NULL,
  `logo` text NOT NULL,
  `create_at` date NOT NULL,
  `update_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_header`
--

INSERT INTO `tabel_header` (`id_header`, `nama_perusahaan`, `tagline`, `logo`, `create_at`, `update_at`) VALUES
(2, 'DINAS PENDIDIDKAN', 'WEBSITE RESMI DINAS PENDIDIKAN KABUPATEN SAMPANG', 'logosampang.png', '2017-12-24', '2017-12-25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_joinemail`
--

CREATE TABLE `tabel_joinemail` (
  `id_joinemail` int(50) NOT NULL,
  `email_join` varchar(50) NOT NULL,
  `create_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_layanan`
--

CREATE TABLE `tabel_layanan` (
  `id_layanan` int(12) NOT NULL,
  `layanan` text NOT NULL,
  `picture` text NOT NULL,
  `create_at` date NOT NULL,
  `update_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_layanan`
--

INSERT INTO `tabel_layanan` (`id_layanan`, `layanan`, `picture`, `create_at`, `update_at`) VALUES
(2, '<p style="text-align: justify;"><span style="font-size: 12pt;"><strong>Ditjen Perbendaharaan c.q. Direktorat PPK BLU&nbsp;</strong>memberikan bimbingan, asistensi, dan konsultasi dalam penyusunan tarif/pola tarif, menyelenggarakan pembahasan pengkajian usulan tarif/pola tarif, dan menyampaikan rekomendasi kepada Menteri Keuangan mengenai penetapan usulan tarif/pola tarif instansi PK BLU. Bimbingan teknis berupa pemberian bimbingan dalam rangka penyusunan persyaratan administratif bagi satker yang akan mengajukan usulan menjadi satker yang menerapkan PK BLU dan bimbingan teknis bagi satker yang telah menerapkan PK BLU seperti pembuatan Rencana Bisnis dan Anggaran (RBA), tarif dan remunerasi.</span></p>\r\n<p style="text-align: justify;"><span style="font-size: 12pt;">Ditjen Perbendaharaan melakukan pembinaan secara langsung antara lain:</span></p>\r\n<ol style="text-align: justify;">\r\n<li><span style="font-size: 12pt;">Memberikan arahan terkait dengan pengelolaan keuangan BLU;</span></li>\r\n<li><span style="font-size: 12pt;">Menindaklanjuti permasalahan yang dihadapi satker BLU, dengan cara melakukan koordinasi dengan pihak-pihak yang terkait;</span></li>\r\n<li><span style="font-size: 12pt;">Menyelenggarakan&nbsp;<em>Help Desk</em>&nbsp;sebagai sarana bagi satker BLU dalam menyampaikan berbagai permasalahannya terkait dengan implementasi PK BLU.</span></li>\r\n</ol>\r\n<p style="text-align: justify;"><span style="font-size: 12pt;">Berikut adalah persyaratan administratif dalam penetapan sebagai BLU terdiri dari:</span></p>\r\n<ol style="text-align: justify;">\r\n<li><span style="font-size: 12pt;">pernyataan kesanggupan untuk meningkatkan kinerja pelayanan, keuangan, dan manfaat bagi masyarakat;</span></li>\r\n<li><span style="font-size: 12pt;">pola tata kelola;</span></li>\r\n<li><span style="font-size: 12pt;">rencana strategis bisnis ;</span></li>\r\n<li><span style="font-size: 12pt;">laporan keuangan pokok;</span></li>\r\n<li><span style="font-size: 12pt;">standar pelayanan minimal; dan</span></li>\r\n<li><span style="font-size: 12pt;">laporan audit terakhir (bila telah diaudit) atau membuat pernyataan bersedia diaudit secara independen.</span></li>\r\n</ol>\r\n<p style="text-align: justify;"><span style="font-size: 12pt;"><strong>LAYANAN BLU</strong></span></p>\r\n<p style="text-align: justify;"><span style="font-size: 12pt;"><strong>1.LAYANAN PENETAPAN SATKER MENJADI BLU</strong></span></p>\r\n<p style="text-align: justify;"><span style="font-size: 12pt;">Bagaimana Proses Pengusulan Satker BLU?</span></p>\r\n<p style="text-align: justify;"><span style="font-size: 12pt;">Pemimpin satker secara berjenjang menyampaikan usulan dengan dilampiri dokumen persyaratan administratif di atas kepada menteri/pimpinan lembaga untuk kemudian dilakukan pengkajian/penilaian oleh K/L bersangkutan. Berdasarkan hasil pengkajian/penilaian tersebut K/L selanjutnya mengajukan usulan penetapan menjadi satker BLU bagi calon satker BLU yang dianggap layak kepada Menteri Keuangan.</span></p>\r\n<p style="text-align: justify;"><span style="font-size: 12pt;">Bagaimana Proses Penilaian dan Penetapan Satker BLU?</span></p>\r\n<p style="text-align: justify;"><span style="font-size: 12pt;">Penilaian persyaratan administratif calon satker BLU dan penetapan menjadi satker BLU dilakukan oleh Menteri Keuangan. Menteri Keuangan memberi keputusan penetapan atau</span><br /><span style="font-size: 12pt;">surat penolakan terhadap usulan penetapan BLU paling lambat 3 bulan sejak diterimanya</span><br /><span style="font-size: 12pt;">usulan dari menteri/pimpinan lembaga.</span><br /><span style="font-size: 12pt;">Proses penilaian dilakukan dalam 2 tahap, yaitu penilaian kelengkapan dan akurasi penyajian oleh Direktorat Jenderal Perbendaharaan c.q. Direktorat Pembinaan PK BLU, dan penilaian material oleh Tim Penilai yang dibentuk Menteri Keuangan.</span><br /><span style="font-size: 12pt;">Hasil penilaian Tim Penilai dituangkan dalam Berita Acara Penilaian dan disampaikan kepada Menteri Keuangan sebagai bahan pertimbangan penetapan satker bersangkutan menjadi satker BLU. Menteri Keuangan menetapkan keputusan penetapan satker tersebut menjadi satker BLU berdasarkan rekomendasi dari Tim Penilai. Hasil keputusan</span><br /><span style="font-size: 12pt;">Menteri Keuangan disampaikan kepada:</span></p>\r\n<ol>\r\n<li style="text-align: justify;"><span style="font-size: 12pt;">Ketua Badan Pemeriksa Keuangan (BPK).</span></li>\r\n<li style="text-align: justify;"><span style="font-size: 12pt;">Menteri/pimpinan lembaga beserta Sekretaris Jenderal, Inspektur Jenderal, dan Unit Eselon I yang membawahi satker yang bersangkutan.</span></li>\r\n<li style="text-align: justify;"><span style="font-size: 12pt;">Unit Eselon I lain lingkup Kementerian Keuangan terkait.</span></li>\r\n<li style="text-align: justify;"><span style="font-size: 12pt;">Kanwil Ditjen Perbendaharaan dan KPPN setempat.</span></li>\r\n<li style="text-align: justify;"><span style="font-size: 12pt;">Satker BLU yang ditetapkan.</span></li>\r\n</ol>', 'layanan.png', '2017-12-24', '2017-12-25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_medsos`
--

CREATE TABLE `tabel_medsos` (
  `id_medsos` int(12) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_medsos`
--

INSERT INTO `tabel_medsos` (`id_medsos`, `icon`, `link`) VALUES
(1, 'fa fa-twitter', 'https://twitter.com/'),
(2, 'fa fa-facebook', 'https://www.facebook.com/'),
(3, 'fa fa-youtube', 'https://www.youtube.com/');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_menu`
--

CREATE TABLE `tabel_menu` (
  `id_menu` int(50) NOT NULL,
  `nama_menu` varchar(50) NOT NULL,
  `url` text NOT NULL,
  `aktif` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_menu`
--

INSERT INTO `tabel_menu` (`id_menu`, `nama_menu`, `url`, `aktif`) VALUES
(7, 'Politik', 'politik', 0),
(8, 'Jurnal', 'jurnal', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_pesan`
--

CREATE TABLE `tabel_pesan` (
  `id_pesan` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pesan` text NOT NULL,
  `create_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_sejarah`
--

CREATE TABLE `tabel_sejarah` (
  `id_sejarah` int(12) NOT NULL,
  `foto_sejarah` text NOT NULL,
  `sejarah` text NOT NULL,
  `create_at` date NOT NULL,
  `update_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_sejarah`
--

INSERT INTO `tabel_sejarah` (`id_sejarah`, `foto_sejarah`, `sejarah`, `create_at`, `update_at`) VALUES
(5, 'sejarah1.png', '<p>Undang-Undang Nomor 1 Tahun 2004 tentang Perbendaharaan Negara telah memberikan koridor baru bagi instansi pemerintah yang tugas pokok dan fungsinya memberikan pelayanan kepada masyarakat untuk dapat menerapkan pola keuangan yang flksibel dengan menonjolkan produktivitas, efiiensi, dan efektivitas dengan sebutan umum sebagai satuan kerja Badan Layanan Umum (satker BLU). Peluang ini diberikan kepada instansi pemerintah yang melaksanakan tugas melayani masyarakat publik (seperti layanan kesehatan, pendidikan, pengelolaan kawasan, pengelola dana khusus, dan pengelola barang jasa lainnya) untuk mengelola kegiatannya dengan ala bisnis (business like) sehingga pemberian layanan kepada masyarakat dapat lebih efiien dan efektif.<br />Sebagai pembina keuangan satker BLU, Menteri Keuangan dalam hal ini Direktorat Jenderal<br />Perbendaharaan mempunyai tugas merumuskan serta melaksanakan kebijakan dan standardisasi teknis di bidang pembinaan pengelolaan keuangan satker BLU. Dalam kerangka pembinaan tersebut, maka disusun manual yang mengacu pada paparan kebijakan teknis. Manual ini memiliki makna yang sangat penting sebagai pedoman dan informasi bagi satker BLU, pembina keuangan, Kementerian Negara/Lembaga, Dewan Pengawas, dan pemangku kepentingan lainnya terkait dengan penerapan pengelolaan satker BLU untuk meningkatkan pelayanan kepada masyarakat. Manual ini terdiri atas lima bagian yaitu (1) Memahami BLU, (2) Membentuk Satker BLU, (3) Menata Kelembagaan BLU, (4) Mengelola Keuangan BLU, dan (5) Akuntabilitas BLU. Dengan manual ini, semua pihak diharapkan dapat lebih memahami mengenai bagaimana BLU dibentuk dan dikelola. Akhirnya, semoga manual ini dapat bermanfaat bagi satker BLU, pembina keuangan, Kementerian Negara/Lembaga, Dewan Pengawas, dan pemangku kepentingan lainnya sehingga pengelolaan BLU dapat berjalan dengan baik untuk meningkatkan pelayanan kepada masyarakat dalam rangka memajukan kesejahteraan umum dan mencerdaskan kehidupan bangsa.</p>\r\n<p>&nbsp;</p>\r\n<p>Direktorat Pembinaan Pengelolaan Keuangan Badan Layanan Umum berdiri di Tahun 2006 sebagai amanat dari Undang-Undang Keuangan Negara. Hal utama yang diamanatkan adalah mengenai pola pengelolaan keuangan untuk Badan Layanan Umum yang memberikan fleksibilitas berupa keleluasaan untuk menerapkan praktik-praktik bisnis yang sehat untuk meningkatkan pelayanan kepada masyarakat dalam rangka memajukan kesejahteraan umum dan mencerdaskan kehidupan bangsa.</p>', '2017-12-25', '2017-12-25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_slideshow`
--

CREATE TABLE `tabel_slideshow` (
  `id_slideshow` int(50) NOT NULL,
  `judul` text NOT NULL,
  `keterangan` text NOT NULL,
  `picture` text NOT NULL,
  `create_at` date NOT NULL,
  `update_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_slideshow`
--

INSERT INTO `tabel_slideshow` (`id_slideshow`, `judul`, `keterangan`, `picture`, `create_at`, `update_at`) VALUES
(5, 'Gedung Dinas Pendidikan', 'Jl . agung suprapto No 77', 'slideshoww.jpg', '2017-12-24', '2017-12-25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_strukturorganisasi`
--

CREATE TABLE `tabel_strukturorganisasi` (
  `id_strukturorganisasi` int(12) NOT NULL,
  `name` varchar(50) NOT NULL,
  `posisi` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `foto` text NOT NULL,
  `create_at` date NOT NULL,
  `update_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_strukturorganisasi`
--

INSERT INTO `tabel_strukturorganisasi` (`id_strukturorganisasi`, `name`, `posisi`, `keterangan`, `foto`, `create_at`, `update_at`) VALUES
(9, 'Didit Setia Budi', 'Ketua', ' Lulusan Teknik Informatika Dari Universitas Ahmad Dahlan                                                                                                                                                                                                                                                                                                                            ', 'team-1.jpg', '2017-12-24', '2017-12-25'),
(10, 'Didit Abdul ', 'Bendahara', ' Lulusan kutansi UI dengan predikat cumlode                                                                                               ', '_MG_3336_copy-iloveimg-compressed4.jpg', '2017-12-25', '2017-12-25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_visimisi`
--

CREATE TABLE `tabel_visimisi` (
  `id_visimisi` int(12) NOT NULL,
  `foto_visimisi` text NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `create_at` date NOT NULL,
  `update_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_visimisi`
--

INSERT INTO `tabel_visimisi` (`id_visimisi`, `foto_visimisi`, `visi`, `misi`, `create_at`, `update_at`) VALUES
(10, 'visimisi.png', '<p><span style="font-size: 12pt;">Mewujudkan pembinaan pengelolaan keuangan BLU yang efektif dan efisien dalam rangka mendukung peningkatan pelayanan kepada masyarakat.</span></p>', '<p style="text-align: justify;">meningkatkan pelayanan kepada masyarakat dalam rangka meningkatkan kesejahteraan umum dan mencerdaskan kehidupan bangsa melalui fleksibilitas dalam pengelolaan keuangan berdasarkan prinsip ekonomi dan produktivitas serta penerapan praktek bisnis yang sehat.</p>\r\n<p style="text-align: justify;">&nbsp;</p>\r\n<h4 style="text-align: justify;"><strong>TUGAS &amp; FUNGSI</strong></h4>\r\n<p style="text-align: justify;"><strong>Sesuai PMK 184/PMK.01/2010</strong>&nbsp;tanggal 11 Oktober 2010 tentang Organisasi dan Tata Kerja Kementerian Keuangan dijelaskan bahwa Direktorat Pembinaan Pengelolaan Badan Layanan Umum memiliki Tugas dan Fungsi yaitu :</p>\r\n<p style="text-align: justify;"><strong>Tugas Direktorat Pembinaan PK BLU</strong></p>\r\n<p style="text-align: justify;">Direktorat Pembinaan Pengelolaan Keuangan Badan Layanan Umum mempunyai tugas merumuskan serta melaksanakan kebijakan dan standardisasi teknis di bidang pembinaan pengelolaan keuangan Badan Layanan Umum (BLU).</p>\r\n<p style="text-align: justify;"><strong>Fungsi Direktorat Pembinaan PK BLU</strong></p>\r\n<ol style="text-align: justify;">\r\n<li>perumusan kebijakan di bidang pembinaan pengelolaan keuangan Badan Layanan Umum (BLU);</li>\r\n<li>pelaksanaan kebijakan di bidang pembinaan pengelolaan keuangan Badan Layanan Umum (BLU);</li>\r\n<li>penyusunan norma, standar, prosedur, dan kriteria di bidang pembinaan pengelolaan keuangan Badan Layanan Umum (BLU);</li>\r\n<li>pemberian bimbingan teknis dan evaluasi di bidang pembinaan pengelolaan keuangan Badan Layanan Umum (BLU); dan</li>\r\n<li>pelaksanaan urusan tata usaha direktorat.</li>\r\n</ol>\r\n<p style="text-align: justify;">&nbsp;</p>\r\n<p style="text-align: justify;">&nbsp;</p>\r\n<h4 style="text-align: justify;"><strong><u>TUGAS &amp; FUNGSI SUB DIREKTORAT PPK BLU</u></strong></h4>\r\n<p style="text-align: justify;">&nbsp;</p>\r\n<p style="text-align: justify;"><strong>Tugas Subdirektorat Peraturan dan Standardisasi Teknis BLU</strong></p>\r\n<p style="text-align: justify;">Subdirektorat Peraturan dan Standardisasi Teknis Badan Layanan Umum mempunyai tugas melaksanakan penyiapan peraturan dan standar teknis Badan Layanan Umum dan melaksanakan penelitian dan pengembangan Badan Layanan Umum.</p>\r\n<p style="text-align: justify;">&nbsp;</p>\r\n<p style="text-align: justify;"><strong>Fungsi Subdirektorat Peraturan dan Standardisasi Teknis BLU</strong></p>\r\n<ol style="text-align: justify;">\r\n<li>penyusunan peraturan pengelolaan keuangan BLU;</li>\r\n<li>penyusunan peraturan penilaian, penetapan dan pencabutan status pengelolaan keuangan BLU;</li>\r\n<li>penyusunan peraturan pengawasan pengelolaan keuangan Badan Layanan Umum oleh Dewan Pengawas;</li>\r\n<li>pengembangan standar teknis pengelolaan keuangan Badan Layanan Umum;</li>\r\n<li>penelitian dan pengembangan pengelolaan keuangan Badan Layanan Umum; dan</li>\r\n<li>pelaksanaan urusan tata usaha dan rumah tangga direktorat.</li>\r\n</ol>\r\n<p style="text-align: justify;">&nbsp;</p>\r\n<p style="text-align: justify;"><strong>Tugas Subdirektorat Tarif, Remunerasi, dan Informasi BLU</strong></p>\r\n<p style="text-align: justify;">Subdirektorat Tarif, Remunerasi, dan Informasi Badan Layanan Umum mempunyai tugas melaksanakan penelaahan tarif dan remunerasi BLU, memproses penetapan tarif dan remunerasi pengelolaan keuangan BLU, pelaksanaan analisis, perancangan, implementasi, evaluasi, dan pemeliharaan sistem pengelolaan data pengelolaan keuangan BLU, dan penyajian informasi BLU.</p>\r\n<p style="text-align: justify;"><strong>Fungsi Subdirektorat Tarif, Remunerasi, dan Informasi BLU</strong></p>\r\n<ol style="text-align: justify;">\r\n<li>penelaahan tarif dan remunerasi Badan Layanan Umum;</li>\r\n<li>pemrosesan penetapan tarif dan remunerasi Badan Layanan Umum;</li>\r\n<li>analisis, perancangan, implementasi, evaluasi, dan pemeliharaan sistem pengelolaan data pengelolaan keuangan BLU; dan</li>\r\n<li>penyajian informasi BLU.</li>\r\n</ol>\r\n<p style="text-align: justify;">&nbsp;</p>\r\n<p style="text-align: justify;"><strong>Tugas Subdirektorat Pembinaan Pengelolaan Keuangan Badan Layanan Umum I/II/III</strong></p>\r\n<p style="text-align: justify;">Subdirektorat Pembinaan Pengelolaan Keuangan Badan Layanan Umum I/II/III mempunyai tugas melaksanakan penyiapan pedoman bimbingan teknis, penyuluhan, monitoring dan evaluasi, dan melaksanakan bimbingan teknis, sosialisasi, monitoring dan evaluasi pelaksanaan anggaran BLU, kinerja BLU, pengelolaan pendapatan, belanja, kas, piutang, utang, investasi, akuntansi, serta pelaporan dan pertanggungjawaban BLU, melaksanakan proses penelaahan persyaratan, penetapan, dan pencabutan instansi BLU serta peningkatan status kelembagaan BLU, memproses persetujuan Dewan Pengawas BLU, menyusun ikhtisar laporan keuangan BLU, serta menyusun laporan bimbingan teknis serta monitoring dan evaluasi, yang pembagian tugasnya diatur lebih lanjut oleh Direktur Jenderal.</p>\r\n<p style="text-align: justify;"><strong>Fungsi Subdirektorat Pembinaan Pengelolaan Keuangan Badan Layanan Umum I/II/III</strong></p>\r\n<ol>\r\n<li style="text-align: justify;">pelaksanaan penelaahan persyaratan instansi pemerintah yang akan menerapkan pengelolaan keuangan BLU;</li>\r\n<li style="text-align: justify;">pemrosesan penilaian, penetapan, dan pencabutan status intansi pengelola keuangan BLU;</li>\r\n<li style="text-align: justify;">pemrosesan persetujuan Menteri Keuangan untuk pembentukan Dewan Pengawas BLU;</li>\r\n<li style="text-align: justify;">penyiapan bahan dan pedoman bimbingan teknis serta monitoring dan evaluasi pengelolaan pendapatan, belanja, kas, piutang, utang, investasi, akuntansi, serta pelaporan dan pertanggungjawaban BLU;</li>\r\n<li style="text-align: justify;">pelaksanaan bimbingan teknis pengelolaan pendapatan, belanja, kas, piutang, utang, investasi, akuntansi serta pelaporan dan pertanggungjawaban BLU;</li>\r\n<li style="text-align: justify;">pelaksanaan sosialisasi pengelolaan pendapatan, belanja, kas, piutang, utang, investasi, akuntansi serta pelaporan dan pertanggungjawaban BLU;</li>\r\n<li style="text-align: justify;">pelaksanaan monitoring dan evaluasi terhadap pelaksanaan anggaran dan kinerja BLU;</li>\r\n<li style="text-align: justify;">pelaksanaan monitoring dan evaluasi terhadap pendapatan dan belanja, pengelolaan kas; piutang, utang, investasi, akuntansi, serta pelaporan dan pertanggungjawaban BLU;</li>\r\n<li style="text-align: justify;">pelaksanaan monitoring dan evaluasi laporan Dewan Pengawas;</li>\r\n<li style="text-align: justify;">penyusunan ikhtisar laporan keuangan BLU; dan</li>\r\n<li style="text-align: justify;">penyusunan laporan bimbingan teknis serta monitoring dan evaluasi.</li>\r\n</ol>', '2017-12-24', '2017-12-25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `picture_so`
--
ALTER TABLE `picture_so`
  ADD PRIMARY KEY (`id_picture`);

--
-- Indexes for table `tabel_admin`
--
ALTER TABLE `tabel_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tabel_berita`
--
ALTER TABLE `tabel_berita`
  ADD PRIMARY KEY (`id_berita`),
  ADD KEY `id_menu` (`id_menu`);

--
-- Indexes for table `tabel_contact`
--
ALTER TABLE `tabel_contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indexes for table `tabel_footer`
--
ALTER TABLE `tabel_footer`
  ADD PRIMARY KEY (`id_footer`);

--
-- Indexes for table `tabel_gallery`
--
ALTER TABLE `tabel_gallery`
  ADD PRIMARY KEY (`id_gallery`);

--
-- Indexes for table `tabel_header`
--
ALTER TABLE `tabel_header`
  ADD PRIMARY KEY (`id_header`);

--
-- Indexes for table `tabel_joinemail`
--
ALTER TABLE `tabel_joinemail`
  ADD PRIMARY KEY (`id_joinemail`);

--
-- Indexes for table `tabel_layanan`
--
ALTER TABLE `tabel_layanan`
  ADD PRIMARY KEY (`id_layanan`);

--
-- Indexes for table `tabel_medsos`
--
ALTER TABLE `tabel_medsos`
  ADD PRIMARY KEY (`id_medsos`);

--
-- Indexes for table `tabel_menu`
--
ALTER TABLE `tabel_menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `tabel_pesan`
--
ALTER TABLE `tabel_pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `tabel_sejarah`
--
ALTER TABLE `tabel_sejarah`
  ADD PRIMARY KEY (`id_sejarah`);

--
-- Indexes for table `tabel_slideshow`
--
ALTER TABLE `tabel_slideshow`
  ADD PRIMARY KEY (`id_slideshow`);

--
-- Indexes for table `tabel_strukturorganisasi`
--
ALTER TABLE `tabel_strukturorganisasi`
  ADD PRIMARY KEY (`id_strukturorganisasi`);

--
-- Indexes for table `tabel_visimisi`
--
ALTER TABLE `tabel_visimisi`
  ADD PRIMARY KEY (`id_visimisi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `picture_so`
--
ALTER TABLE `picture_so`
  MODIFY `id_picture` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tabel_admin`
--
ALTER TABLE `tabel_admin`
  MODIFY `id_admin` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tabel_berita`
--
ALTER TABLE `tabel_berita`
  MODIFY `id_berita` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `tabel_contact`
--
ALTER TABLE `tabel_contact`
  MODIFY `id_contact` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tabel_footer`
--
ALTER TABLE `tabel_footer`
  MODIFY `id_footer` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tabel_gallery`
--
ALTER TABLE `tabel_gallery`
  MODIFY `id_gallery` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `tabel_header`
--
ALTER TABLE `tabel_header`
  MODIFY `id_header` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tabel_joinemail`
--
ALTER TABLE `tabel_joinemail`
  MODIFY `id_joinemail` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tabel_layanan`
--
ALTER TABLE `tabel_layanan`
  MODIFY `id_layanan` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tabel_medsos`
--
ALTER TABLE `tabel_medsos`
  MODIFY `id_medsos` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tabel_menu`
--
ALTER TABLE `tabel_menu`
  MODIFY `id_menu` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tabel_pesan`
--
ALTER TABLE `tabel_pesan`
  MODIFY `id_pesan` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tabel_sejarah`
--
ALTER TABLE `tabel_sejarah`
  MODIFY `id_sejarah` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tabel_slideshow`
--
ALTER TABLE `tabel_slideshow`
  MODIFY `id_slideshow` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tabel_strukturorganisasi`
--
ALTER TABLE `tabel_strukturorganisasi`
  MODIFY `id_strukturorganisasi` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tabel_visimisi`
--
ALTER TABLE `tabel_visimisi`
  MODIFY `id_visimisi` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
