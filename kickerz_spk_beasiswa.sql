-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 21, 2021 at 03:01 AM
-- Server version: 5.6.41-84.1
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kickerz_spk_beasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `crips`
--

CREATE TABLE `crips` (
  `crips_id` int(11) NOT NULL,
  `kriteria_id` int(11) NOT NULL,
  `nama_crips` varchar(100) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `bobot` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `crips`
--

INSERT INTO `crips` (`crips_id`, `kriteria_id`, `nama_crips`, `keterangan`, `bobot`) VALUES
(1, 1, 'International', 'Sangat Baik', 5),
(2, 1, 'Nasional', 'Baik', 4),
(3, 1, 'Provinsi', 'Cukup', 3),
(4, 1, 'Regional', 'Kurang', 2),
(5, 1, 'Institusi', 'Sangat Kurang', 1),
(6, 3, '1', 'Sangat Baik', 5),
(7, 3, '2', 'Baik', 4),
(8, 3, '3', 'Cukup', 3),
(9, 3, '4', 'Kurang', 2),
(10, 4, '1', 'Sangat Baik', 5),
(11, 4, '2', 'Baik', 4),
(12, 4, '3', 'Cukup', 3),
(13, 5, 'International', 'Sangat Baik', 5),
(14, 5, 'Nasional', 'Baik', 4),
(15, 5, 'Provinsi', 'Cukup', 3),
(16, 5, 'Regional', 'Kurang', 2),
(17, 5, 'Institusi', 'Sangat Kurang', 1),
(25, 3, '> 4', 'Sangat Kurang', 1),
(26, 4, '> 3', 'Kurang', 2);

-- --------------------------------------------------------

--
-- Table structure for table `data_diri`
--

CREATE TABLE `data_diri` (
  `pendaftar_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `ktp` varchar(17) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` varchar(100) NOT NULL,
  `jk` varchar(50) NOT NULL,
  `status` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `kota_kabupaten` varchar(255) NOT NULL,
  `provinsi` varchar(100) NOT NULL,
  `kode_pos` int(10) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `no_tlp_rumah` varchar(15) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `ktp_img` varchar(100) NOT NULL,
  `kk` varchar(100) NOT NULL,
  `akta_lahir` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `data_diri`
--

INSERT INTO `data_diri` (`pendaftar_id`, `user_id`, `nama_lengkap`, `ktp`, `tempat_lahir`, `tanggal_lahir`, `agama`, `jk`, `status`, `alamat`, `kota_kabupaten`, `provinsi`, `kode_pos`, `no_hp`, `no_tlp_rumah`, `foto`, `ktp_img`, `kk`, `akta_lahir`) VALUES
(17, 29, 'Pendaftar 4', '32720184783434', 'Sukasuka', '2021-07-22', 'Islam', 'Perempuan', 'Belum Menikah', 'Alamat', 'Sukasuka', 'Jawa Barat', 32123, '08973473', '08231', 'image1626905257.jpg', 'image1626905258.jpg', 'image1626905258.jpg', 'image1626905258.jpg'),
(18, 30, 'Pendaftar 5', '32720184783437', 'Sukasuka', '2021-07-22', 'Islam', 'Laki-laki', 'Belum Menikah', 'Alamt', 'Sukasuka', 'Jawa Barat', 32123, '898989', '08231', 'image1626905462.jpg', 'image1626905462.jpg', 'image1626905462.jpg', 'image1626905462.jpg'),
(19, 31, 'Idaa', '32720184783439', 'Sukasuka', '2021-07-22', 'Islam', 'Laki-laki', 'Belum Menikah', 'Alamat', 'Sukasuka', 'Jawa Barat', 32123, '08973473', '08231', 'image1626905596.jpg', 'image1626905596.jpg', 'image1626905596.jpg', 'image1626905596.jpg'),
(20, 33, 'Devira Asha', '123574215678', 'Jakarta', '2021-10-12', 'Islam', 'Perempuan', 'Menikah', 'Jl. Raya Palangkaraya - Buntok KM 60, Kapuas, Kalimantan Tengah ', 'Kapuas', 'Kalimantan', 15428, '081247533569', '02177843699', 'image1634047962.jpg', 'image1634047962.jpg', 'image1634047963.jpg', 'image1634047963.jpg'),
(21, 34, 'Hafizah Safira', '123574215678', 'Jakarta', '2021-10-13', 'Islam', 'Perempuan', 'Menikah', 'Jl. Raya Palangkaraya - Buntok KM 60, Kapuas, Kalimantan Tengah ', 'Kapuas', 'DKI Jakarta', 15428, '081247533569', '02177843699', 'image1634061975.jpg', 'image1634061975.jpg', 'image1634061975.jpg', 'image1634061975.jpg'),
(22, 35, 'Ana Nur', '123574215678', 'Jakarta', '2021-10-13', 'Islam', 'Perempuan', 'Menikah', 'Jl. Raya Palangkaraya - Buntok KM 60, Kapuas, Kalimantan Tengah ', 'Indragiri', 'Kalimantan', 15428, '081247533569', '02177843699', 'image1634062281.jpg', 'image1634062281.jpg', 'image1634062281.jpg', 'image1634062281.jpg'),
(23, 42, 'Arif Rahman', '1234567891231', 'Jakarta', '1999-07-08', 'Islam', 'Laki-laki', 'Belum Menikah', 'Jl. Pelopor rt 07 rw 11 No. 04', 'Jakarta Barat', 'DKI Jakarta', 11820, '081282341589', '081282341580', 'image1634966130.jpg', 'image1634966130.jpg', 'image1634966130.jpg', 'image1634966130.jpg'),
(24, 48, 'Lita Ameilia', '123574215678', 'Jakarta', '2021-11-10', 'Islam', 'Perempuan', 'Belum Menikah', 'Sungai Pebuaran RT. 05 RW 03., Kelurahan Selensen, Kecamatan Kemuning, Kabupaten Indragiri Hilir, Riau', 'Kapuas', 'Kalimantan', 15428, '081247533569', '02177843699', 'image1637395305.jpg', 'image1637395305.jpg', 'image1637395305.jpg', 'image1637395305.jpg'),
(25, 49, 'Rachmat Efendi', '123574215678', 'Jakarta', '2021-11-17', 'Islam', 'Laki-laki', 'Belum Menikah', 'Jl. Raya Palangkaraya - Buntok KM 60, Kapuas, Kalimantan Tengah ', 'Kapuas', 'DKI Jakarta', 15428, '081247533569', '02177843699', 'image1637395779.jpg', 'image1637395779.jpg', 'image1637395779.jpg', 'image1637395779.jpg'),
(26, 50, 'Moch Boediono', '123574215678', 'Jakarta', '2021-11-17', 'Islam', 'Laki-laki', 'Menikah', 'Jl. Raya Palangkaraya - Buntok KM 60, Kapuas, Kalimantan Tengah ', 'Kapuas', 'Kalimantan', 15428, '089502233090', '02177843699', 'image1637396826.jpg', 'image1637396826.jpg', 'image1637396826.jpg', 'image1637396826.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `data_ortu`
--

CREATE TABLE `data_ortu` (
  `data_ortu_id` int(11) NOT NULL,
  `nama_lengkap_ayah` varchar(100) DEFAULT NULL,
  `pekerjaan_ayah` varchar(255) DEFAULT NULL,
  `no_tlp_ayah` varchar(15) DEFAULT NULL,
  `ktp_ayah` varchar(100) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `nama_lengkap_ibu` varchar(50) DEFAULT NULL,
  `pekerjaan_ibu` varchar(100) DEFAULT NULL,
  `no_tlp_ibu` varchar(15) DEFAULT NULL,
  `ktp_ibu` varchar(100) DEFAULT NULL,
  `nama_lengkap_wali` varchar(100) DEFAULT NULL,
  `pekerjaan_wali` varchar(100) DEFAULT NULL,
  `no_tlp_wali` varchar(100) DEFAULT NULL,
  `ktp_wali` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `data_ortu`
--

INSERT INTO `data_ortu` (`data_ortu_id`, `nama_lengkap_ayah`, `pekerjaan_ayah`, `no_tlp_ayah`, `ktp_ayah`, `user_id`, `nama_lengkap_ibu`, `pekerjaan_ibu`, `no_tlp_ibu`, `ktp_ibu`, `nama_lengkap_wali`, `pekerjaan_wali`, `no_tlp_wali`, `ktp_wali`) VALUES
(16, 'Bapa Ida', 'Swast', '0873843', 'image1626905270ktp_ayah.jpg', 29, '', '', '', NULL, '', '', '', ''),
(17, 'Bapa Ida', 'Swast', '0873843', 'image1626905475ktp_ayah.jpg', 30, '', '', '', NULL, '', '', '', ''),
(18, 'Bapa Ida', 'Swast', '0873843', 'image1626905621ktp_ayah.jpg', 31, '', '', '', NULL, '', '', '', ''),
(20, ' bin Fulan', 'Apa aja', '082133774890', 'image1634051249ktp_ayah.jpg', 33, 'binti Fulan', 'Apa aja', '082133774890', 'image1634051249ktp_ibu.jpg', 'Fulan', 'Apa aja', '082133774890', 'image1634051249ktp_wali.jpg'),
(21, ' bin Fulan', 'Apa aja', '082133774890', 'image1634069804ktp_ayah.jpg', 34, 'binti Fulan', 'Apa aja', '082133774890', 'image1634069804ktp_ibu.jpg', 'Fulan', 'Apa aja', '082133774890', 'image1634069804ktp_wali.jpg'),
(22, ' bin Fulan', 'Apa aja', '082133774890', 'image1634069873ktp_ayah.jpg', 35, 'binti Fulan', 'Apa aja', '082133774890', 'image1634069873ktp_ibu.jpg', 'Fulan', 'Apa aja', '082133774890', 'image1634069873ktp_wali.jpg'),
(23, 'Beni', 'Wiraswasta', '0812545245', 'image1634970148ktp_ayah.jpg', 42, 'Putri', 'Ibu rumah tangga', '22545215211', 'image1634970148ktp_ibu.jpeg', 'Pudin', 'Wiraswasta', '08123552155', 'image1634970148ktp_wali.jpg'),
(24, ' bin Fulan', 'PNS', '082133774890', 'image1637395423ktp_ayah.jpg', 48, 'binti Fulan', 'Apa aja', '082133774890', 'image1637395423ktp_ibu.jpg', 'Fulan', 'Pedagang', '082133774890', 'image1637395423ktp_wali.jpg'),
(25, ' bin Fulan', 'Apa aja', '082133774890', 'image1637395813ktp_ayah.jpg', 49, 'binti Fulan', 'Ibu Rumah Tangga', '082133774890', 'image1637395813ktp_ibu.jpg', 'Fulan', 'Polisi', '082133774890', 'image1637395813ktp_wali.jpg'),
(26, ' bin Fulan', 'Apa aja', '082133774890', 'image1637396878ktp_ayah.jpg', 50, 'binti Fulan', 'Apa aja', '082133774890', 'image1637396878ktp_ibu.jpg', 'Fulan', 'Apa aja', '082133774890', 'image1637396878ktp_wali.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `data_pendidikan`
--

CREATE TABLE `data_pendidikan` (
  `pendidikan_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `pendidikan_terakhir` varchar(100) NOT NULL,
  `nama_instansi` varchar(100) NOT NULL,
  `program_studi` varchar(100) NOT NULL,
  `tahun_lulus` year(4) NOT NULL,
  `nilai` varchar(50) NOT NULL,
  `pendidikan_tuju` varchar(100) NOT NULL,
  `kampus_pilihan` varchar(100) NOT NULL,
  `fakultas` varchar(100) NOT NULL,
  `prodi_1` varchar(100) NOT NULL,
  `prodi_2` varchar(100) NOT NULL,
  `rapot` varchar(100) NOT NULL,
  `ijazah` varchar(100) NOT NULL,
  `skhun` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `data_pendidikan`
--

INSERT INTO `data_pendidikan` (`pendidikan_id`, `user_id`, `pendidikan_terakhir`, `nama_instansi`, `program_studi`, `tahun_lulus`, `nilai`, `pendidikan_tuju`, `kampus_pilihan`, `fakultas`, `prodi_1`, `prodi_2`, `rapot`, `ijazah`, `skhun`) VALUES
(11, 29, 'D4', 'Politeknik Negero', 'Elektronika', 2020, '3.30', 'S1', 'Citra Raya', '2', '3', '4', 'image1626905307.jpg', 'image1626905307.jpg', 'image1626905307.jpg'),
(12, 30, 'SMK/MK', 'SMK Madani', 'Elektronika', 2020, '86', 'S1', 'Kebon Jeruk', '4', '7', '6', 'image1626905510.jpg', 'image1626905510.jpg', 'image1626905510.jpg'),
(13, 31, 'D3', 'Politeknik Negero', 'Elektronika', 2020, '3', 'S1', 'Harapan Indah', '1', '1', '2', 'image1626905655.jpg', 'image1626905655.jpg', 'image1626905655.jpg'),
(14, 33, 'SMK/MK', 'Universitas Esa Unggul', 'Teknik Informatika', 2020, '3,50', 'D3', 'Kebon Jeruk', '5', '26', '26', 'image1634047814.jpg', 'image1634047815.jpg', 'image1634047815.jpg'),
(15, 34, 'SMK/MK', 'Universitas Esa Unggul', 'Teknik Informatika', 2020, '3,50', 'D3', 'Kebon Jeruk', '9', '36', '37', 'image1634062184.jpg', 'image1634062184.jpg', 'image1634062184.jpg'),
(16, 35, 'SMK/MK', 'Universitas Esa Unggul', 'Teknik Informatika', 2020, '3,50', 'S1', 'Kebon Jeruk', '5', '26', '26', 'image1634062318.jpg', 'image1634062318.jpg', 'image1634062318.jpg'),
(17, 42, 'SMK/MK', 'Esa Unggul', 'Sistem Informasi', 2021, '3,75', 'S1', 'Kebon Jeruk', '9', '37', '37', 'image1634970364.png', 'image1634970364.jpg', 'image1634970364.jpg'),
(18, 48, 'S1', 'ITI', 'Perencanaan Wilayah dan Kota', 2017, '3,45', 'S1', 'Kebon Jeruk', '2', '7', '12', 'image1637395538.jpg', 'image1637395538.jpg', 'image1637395538.jpg'),
(19, 49, 'S1', 'Universitas Esa Unggul', 'Manajemen', 2020, '3,98', 'S2', 'Kebon Jeruk', '1', '3', '3', 'image1637395984.jpg', 'image1637395984.jpg', 'image1637395984.jpg'),
(20, 50, 'D3', 'ITB', 'DKV', 2008, '3,47', 'S1', 'Kebon Jeruk', '3', '13', '13', 'image1637396977.jpg', 'image1637396977.jpg', 'image1637396977.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `data_prestasi`
--

CREATE TABLE `data_prestasi` (
  `prestasi_id` int(11) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `nama_lomba` varchar(100) NOT NULL,
  `tingkat_kejuaraan` varchar(100) NOT NULL,
  `peringkat` int(11) NOT NULL,
  `tempat` varchar(100) NOT NULL,
  `tahun` year(4) NOT NULL,
  `sertifikat` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `data_prestasi`
--

INSERT INTO `data_prestasi` (`prestasi_id`, `jenis`, `nama_lomba`, `tingkat_kejuaraan`, `peringkat`, `tempat`, `tahun`, `sertifikat`, `user_id`) VALUES
(20, '', 'A', 'Nasional', 1, 'Gedung', 2020, 'image1626905353.jpg', 29),
(23, 'Non Akademik', 'Mewarnai', 'Nasional', 1, 'DKI Jakarta', 2019, 'image1634052485.jpg', 33),
(27, 'Non Akademik', 'Pidato Bahasa Inggris ', 'Nasional', 2, 'DKI Jakarta', 2018, 'image1634067973.jpg', 35),
(32, 'Akademik', 'Pidato Bahasa Inggris ', 'International', 2, 'DKI Jakarta', 2019, 'image1634931154.jpg', 34),
(34, 'Non Akademik', 'Pidato Bahasa Indonesia ', 'Nasional', 1, 'DKI Jakarta', 2019, 'image1634961384.pdf', 34),
(35, 'Non Akademik', 'Futsal Competition National', 'Nasional', 1, 'Jakarta', 2016, 'image1634970441.jpg', 42),
(36, 'Non Akademik', 'Puisi', 'Nasional', 2, 'DKI Jakarta', 2019, 'image1637395568.jpg', 48),
(37, 'Akademik', 'Mengaji', 'Nasional', 1, 'DKI Jakarta', 2020, 'image1637397015.jpg', 50);

-- --------------------------------------------------------

--
-- Table structure for table `data_seminar`
--

CREATE TABLE `data_seminar` (
  `seminar_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `penyelenggara` varchar(100) NOT NULL,
  `scala` varchar(100) NOT NULL,
  `tahun` year(4) NOT NULL,
  `sertifikat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `data_seminar`
--

INSERT INTO `data_seminar` (`seminar_id`, `user_id`, `kategori`, `judul`, `penyelenggara`, `scala`, `tahun`, `sertifikat`) VALUES
(12, 30, 'Olahraga', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 'A', 'Regional', 2019, 'image1626905533.jpg'),
(13, 33, 'Seminar', 'Apa Aja', 'DKI Jakarta', 'Nasional', 2019, 'image1634052584.jpg'),
(16, 34, 'Pelatihan', 'COC Season 2 ', 'DKI Jakarta', 'Provinsi', 2019, 'image1634067874.jpg'),
(17, 34, 'Workshop', 'Remaja Pelopor Cerdas Hukum dan HAM ', 'DKI Jakarta', 'Provinsi', 2020, 'image1634067897.jpg'),
(18, 35, 'Workshop', 'Seminar RTS NIAS ', 'DKI Jakarta', 'Nasional', 2020, 'image1634067992.jpg'),
(22, 42, 'Seminar', 'Workship', 'Universitas Esa Unggul', 'Nasional', 2016, 'image1634970511.png'),
(23, 49, 'Seminar', 'Remaja Pelopor Cerdas Hukum dan HAM ', 'DKI Jakarta', 'Nasional', 2020, 'image1637395857.jpg'),
(24, 49, 'Pelatihan', 'Seminar Membangun Kemandirian Pemuda Indonesia Secara Mental, Wawasan, dan Keuangan ', 'UEU', 'Nasional', 2019, 'image1637395877.jpg'),
(25, 50, 'Pelatihan', 'Apa Aja', 'DKI Jakarta', 'Provinsi', 2020, 'image1637397053.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `fakultas`
--

CREATE TABLE `fakultas` (
  `id` int(11) NOT NULL,
  `fakultas` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `fakultas`
--

INSERT INTO `fakultas` (`id`, `fakultas`) VALUES
(1, 'Ekonomi dan Bisnis'),
(2, 'Teknik'),
(3, 'Desain & Industri Kreatif'),
(4, 'Ilmu – Ilmu Kesehatan'),
(5, 'Hukum'),
(6, 'Ilmu Komunikasi'),
(7, 'Fisioterapi'),
(8, 'Psikologi'),
(9, 'Ilmu Komputer'),
(10, 'Keguruan dan Ilmu Pendidikan');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id_history` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `positif` varchar(100) NOT NULL,
  `negatif` varchar(100) NOT NULL,
  `preferensi` varchar(100) NOT NULL,
  `ranking` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id` int(11) NOT NULL,
  `fakultas_id` int(11) DEFAULT NULL,
  `jurusan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id`, `fakultas_id`, `jurusan`) VALUES
(1, 1, 'Manajemen Bisnis'),
(2, 1, 'Akuntansi Sektor Bisnis'),
(3, 1, 'Magister Manajemen (S2)'),
(4, 1, 'Magister Administrasi Publik (S2)'),
(5, 1, 'Magister Akuntansi (S2)'),
(6, 2, 'Teknik Industri'),
(7, 2, 'Perencanaan Wilayah & Kota'),
(12, 2, 'Survei & Pemetaan'),
(13, 3, 'Desain Produk'),
(14, 3, 'Desain Komunikasi Visual'),
(15, 3, 'Desain Interior'),
(16, 4, 'Kesehatan Masyarakat'),
(17, 4, 'Ilmu Gizi'),
(18, 4, 'Pendidikan Profesi Dietisien'),
(19, 4, 'NERS dan Keperawatan'),
(20, 4, 'Manajemen Informasi Kesehatan'),
(22, 4, 'Rekam Medik & Informasi Kesehatan'),
(23, 4, 'Bioteknologi'),
(24, 4, 'Farmasi'),
(25, 4, 'Magister Administrasi Rumah Sakit (S2)	'),
(26, 5, 'Ilmu Hukum'),
(27, 5, 'Magister Ilmu Hukum (S2)'),
(28, 6, 'Ilmu Komunikasi'),
(29, 6, 'Magister Ilmu Komunikasi (S2)'),
(31, 7, 'Fisioterapi'),
(35, 8, 'Psikologi'),
(36, 9, 'Teknik Informatika'),
(37, 9, 'Sistem Informasi'),
(38, 9, 'Magister Ilmu Komputer (S2)'),
(39, 12, 'Pendidikan Guru Sekolah Dasar'),
(40, 12, 'Bahasa Inggris');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `kriteria_id` int(11) NOT NULL,
  `nama_kriteria` varchar(100) NOT NULL,
  `attribut` varchar(50) NOT NULL,
  `bobot` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`kriteria_id`, `nama_kriteria`, `attribut`, `bobot`) VALUES
(1, 'Prestasi', 'Benefit', 5),
(3, 'Tahun Perolehan', 'Benefit', 4),
(4, 'Peringkat Kejuaraan', 'Benefit', 4),
(5, 'Seminar', 'Benefit', 3);

-- --------------------------------------------------------

--
-- Table structure for table `penilaian`
--

CREATE TABLE `penilaian` (
  `penilaian_id` int(11) NOT NULL,
  `alternatif_id` int(11) NOT NULL,
  `subkriteria_id` int(11) NOT NULL,
  `nilai` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nama_user` varchar(100) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `role` int(11) NOT NULL DEFAULT '1',
  `jenis_beasiswa` int(11) DEFAULT NULL,
  `status` varchar(110) DEFAULT NULL,
  `tahun` year(4) DEFAULT NULL,
  `pertanyaan` varchar(255) DEFAULT NULL,
  `jawaban` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `email`, `nama_user`, `password`, `role`, `jenis_beasiswa`, `status`, `tahun`, `pertanyaan`, `jawaban`) VALUES
(1, 'beasiswa.ueu@gmail.com', 'Admin', '$2b$12$D/ykGxM7dGkyq4ajLB8WDuMFNVPs0vxIhefJet.Q9bAd2bvzT0Rsa', 0, NULL, NULL, 2021, NULL, NULL),
(29, 'pendaftar4@gmail.com', 'Pendaftar 4', '$2y$10$tn9WKVb2g9XZ1Y2rGPNLou.DR3BzpIuKK53JH94dq4LRoJ3X1Ke6u', 1, 0, 'LULUS', 2020, 'Siapa nama salah satu guru anda?', 'siapa'),
(30, 'pendaftar5@gmail.com', 'Pendaftar 5', '$2y$10$tmJ0l/ThTItSrJsCdL/YU.KaW6LbVFblr12NxDsef/teADTHZ6/0q', 1, 0, 'LULUS', 2020, 'Siapa nama salah satu guru anda?', 'siapa'),
(31, 'pendaftar6@gmail.com', 'Idaa', '$2y$10$jjNqMD1ocPCJzJlkl3AM6ecyJ8B/uD7.rPYpLy8RI3r1RE12ldrdG', 1, 0, 'LULUS', 2020, 'Siapa nama salah satu guru anda?', 'siapa'),
(33, 'blue.apple1004@gmail.com', 'Devira Asha', '$2y$10$W4VbOkPe4pB8XRcWzaQpOewYrfNONj4f4LiHVs7oV0crbKtrwMnA6', 1, 0, NULL, 2021, 'Siapa nama salah satu guru anda?', 'gak ada'),
(34, 'paparonhusky78@gmail.com', 'Hafizah Safira', '$2y$10$/zwYJfVNZ6cFryg44fqT/OTwrfxaF2n1a9dXvm/tqaTA1D2pdgVr2', 1, 0, NULL, 2021, 'Siapa nama salah satu guru anda?', 'gak ada'),
(35, 'earl.grey91@gmail.com', 'Ana Nur', '$2y$10$0NYd1BwIFnkW8aIbf7e3d.4tEH/rXy0CHFBKMYAtim256Qlredruy', 1, 0, NULL, 2021, 'Siapa nama salah satu guru anda?', 'gak ada'),
(36, 'alim.sabri6@gmail.com', NULL, '$2y$10$79xogEqH5EXHbs3nid2r8e7Hj2YjEm/2uR9o4FQG0oSjtcitD7EkK', 1, 0, NULL, 2021, 'Siapa orang yang paling berarti buat anda?', 'Dia'),
(39, 'rosefamilia.inbox@gmail.com', NULL, '$2y$10$qrlGx.gWWwELaOcZSAqi.uweDc6uosN1ce4WOec47zNOIo7QPtHS.', 1, 0, NULL, 2021, 'Apa makanan favorit anda?', 'Sushi'),
(40, 'arifoppo420@gmail.com', NULL, '$2y$10$AzdDWR2R5MkhqhGhRexmvePkSze68B7aB52l9oawvCqtMfXYwf64i', 1, 0, NULL, 2021, 'Tempat apa yang ingin anda kunjungi?', 'Mekah'),
(41, 'arifrhmn1999@gmail.com', NULL, '$2y$10$fEFuqeAHKWpE0pEfknBSdemEmxWWLgEkhRTkUMmsWqTBZuLg2lA8i', 1, 0, NULL, 2021, 'Apa makanan favorit anda?', 'Gado gado'),
(42, 'arifuhuy99@gmail.com', 'Arif Rahman', '$2y$10$Xqm.As3OYZpr36BR43/FFuIdGkoAzMwkmZwG5DlisQFhOgs6KP7H6', 1, 0, NULL, 2021, 'Apa makanan favorit anda?', 'Soto Ayam'),
(43, 'm.nurohmat03@gmail.com', NULL, '$2y$10$nXzCSxVshhwN8MoTvOTm4eEE1QxJTsn8x31Vqi9xYS9fe48QxMrsm', 1, 0, NULL, 2021, 'Apa cita-cita anda?', 'jadi presiden'),
(44, 'arpampam2018@gmail.com', NULL, '$2y$10$RNps70Rk5b93HODsuAkVjezNjvjJX68yzK4Lns0GUZ87JaD/HgbxC', 1, 0, NULL, 2021, 'Apa makanan favorit anda?', 'Gadogado'),
(45, 'prakarsaggh@yahoo.com', NULL, '$2y$10$jYtula/Uxk.ZRI0ya4GQpu8Anr4aZUXOP1a.ingpak/iYmQXOV90S', 1, 0, NULL, 2021, 'Apa cita-cita anda?', 'Tentara'),
(46, 'ashacantik@gmail.com', NULL, '$2y$10$uP9F1SH1Df8L0F6OzakKluvQVyP5dRsS94oz4tCmt1VtlF.tjf2vO', 1, 0, NULL, 2021, 'Apa makanan favorit anda?', 'bebek madura'),
(47, 'ashacantik@gmail.con', NULL, '$2y$10$8mPXjRjGKcKb7/JdQBvdruP.IVen1zztnC.TryLUoznQPkwrjX41S', 1, 0, NULL, 2021, 'Apa makanan favorit anda?', 'bebek madura'),
(48, 'hafizah.safira223@gmail.com', 'Lita Ameilia', '$2y$10$MKbMNiSLP633DttEOf34GOhvM8/VIyUQ23Z0QeRqw.IA.cg2AutUm', 1, 2, NULL, 2021, 'Tempat apa yang ingin anda kunjungi?', 'Lombok'),
(49, 'rachmatefendi2@gmail.com', 'Rachmat Efendi', '$2y$10$0gpjqLX0H6kk3U3LGsokxOJfvYqu1K3F8APaUrwHX.KP7G5tKnNzK', 1, 2, NULL, 2021, 'Apa makanan favorit anda?', 'Nasi Padang'),
(50, 'mochamadboediono@gmail.com', 'Moch Boediono', '$2y$10$GrKVRii7LV4WqWBq4LfciuGxGrVGOh.0eZXwLK56eckGw8emQ62bS', 1, 2, NULL, 2021, 'Apa cita-cita anda?', 'Graphic Designer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crips`
--
ALTER TABLE `crips`
  ADD PRIMARY KEY (`crips_id`) USING BTREE;

--
-- Indexes for table `data_diri`
--
ALTER TABLE `data_diri`
  ADD PRIMARY KEY (`pendaftar_id`) USING BTREE;

--
-- Indexes for table `data_ortu`
--
ALTER TABLE `data_ortu`
  ADD PRIMARY KEY (`data_ortu_id`) USING BTREE;

--
-- Indexes for table `data_pendidikan`
--
ALTER TABLE `data_pendidikan`
  ADD PRIMARY KEY (`pendidikan_id`) USING BTREE;

--
-- Indexes for table `data_prestasi`
--
ALTER TABLE `data_prestasi`
  ADD PRIMARY KEY (`prestasi_id`) USING BTREE;

--
-- Indexes for table `data_seminar`
--
ALTER TABLE `data_seminar`
  ADD PRIMARY KEY (`seminar_id`) USING BTREE;

--
-- Indexes for table `fakultas`
--
ALTER TABLE `fakultas`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id_history`) USING BTREE;

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`kriteria_id`) USING BTREE;

--
-- Indexes for table `penilaian`
--
ALTER TABLE `penilaian`
  ADD PRIMARY KEY (`penilaian_id`) USING BTREE;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `crips`
--
ALTER TABLE `crips`
  MODIFY `crips_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `data_diri`
--
ALTER TABLE `data_diri`
  MODIFY `pendaftar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `data_ortu`
--
ALTER TABLE `data_ortu`
  MODIFY `data_ortu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `data_pendidikan`
--
ALTER TABLE `data_pendidikan`
  MODIFY `pendidikan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `data_prestasi`
--
ALTER TABLE `data_prestasi`
  MODIFY `prestasi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `data_seminar`
--
ALTER TABLE `data_seminar`
  MODIFY `seminar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `fakultas`
--
ALTER TABLE `fakultas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id_history` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `kriteria_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `penilaian`
--
ALTER TABLE `penilaian`
  MODIFY `penilaian_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
