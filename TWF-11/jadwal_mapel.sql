-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2022 at 08:19 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jadwal_mapel`
--

-- --------------------------------------------------------

--
-- Table structure for table `guru_pengajar`
--

CREATE TABLE `guru_pengajar` (
  `ID_GURU` varchar(12) NOT NULL,
  `NAMA_GURU` varchar(25) NOT NULL,
  `GELAR_DEPAN` varchar(10) DEFAULT NULL,
  `GELAR_BELAKANG` varchar(10) DEFAULT NULL,
  `JENIS_KELAMIN` char(1) DEFAULT NULL,
  `AGAMA` varchar(10) DEFAULT NULL,
  `ALAMAT_TINGGAL` varchar(100) DEFAULT NULL,
  `NO_HP` varchar(15) DEFAULT NULL,
  `NO_WA` varchar(15) DEFAULT NULL,
  `ID_TELEGRAM` varchar(25) DEFAULT NULL,
  `ID_LINE` varchar(25) DEFAULT NULL,
  `ID_FACEBOOK` varchar(25) DEFAULT NULL,
  `ID_INSTAGRAM` varchar(25) DEFAULT NULL,
  `ID_TWITTER` varchar(25) DEFAULT NULL,
  `ID_YOUTUBE` varchar(25) DEFAULT NULL,
  `EMAIL_GURU` varchar(50) DEFAULT NULL,
  `TEMPAT_LAHIR` varchar(30) DEFAULT NULL,
  `TANGGAL_LAHIR` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guru_pengajar`
--

INSERT INTO `guru_pengajar` (`ID_GURU`, `NAMA_GURU`, `GELAR_DEPAN`, `GELAR_BELAKANG`, `JENIS_KELAMIN`, `AGAMA`, `ALAMAT_TINGGAL`, `NO_HP`, `NO_WA`, `ID_TELEGRAM`, `ID_LINE`, `ID_FACEBOOK`, `ID_INSTAGRAM`, `ID_TWITTER`, `ID_YOUTUBE`, `EMAIL_GURU`, `TEMPAT_LAHIR`, `TANGGAL_LAHIR`) VALUES
('00121', 'Adi Permono', NULL, 'S.Kom', 'L', 'Islam', 'JL. Anda Buntu no. 1, Gubeng', '088123434221', '088123434221', 'adi21_', NULL, NULL, 'adi21_', NULL, NULL, 'adi21@gmail.com', 'Gubeng', '1988-01-21'),
('00122', 'Bambang Herawan', NULL, 'S.Ag', 'L', 'Kristen', 'JL. Yang Lurus no.2, Mulyorejo', '08712343222765', '08712343222765', 'bambang22_', NULL, NULL, 'bambang22_', NULL, NULL, 'bambang22@gmail.com', 'Mulyorejo', '1988-02-22'),
('00123', 'Cantika Yulandari', NULL, 'S. H.', 'p', 'Hindu', 'JL. Bersamamu no. 3, Wiyung', '032145438742122', '032145438742122', 'cantik23_', NULL, NULL, 'cantik23_', NULL, NULL, 'cantik23@gmail.com', 'Wiyung', '1998-03-23'),
('00124', 'Daniela Agustin', NULL, 'S. Pd', 'P', 'Katolik', 'JL. Menuju Tuhan no.4, Semampir', '088217321112', '088217321112', 'daniela24_', NULL, NULL, 'daniela24_', NULL, NULL, 'daniela24@gmail.com', 'Semampir', '1998-04-24'),
('00125', 'Eka Sanjaya', NULL, 'S. T.', 'L', 'Islam', 'Jl. Abu-abu no.5, Benowo', '083364321771', '083364321771', 'eka25_', NULL, NULL, 'eka25_', NULL, NULL, 'eka25@gmail.com', 'Benowo', '1998-05-25'),
('00126', 'Farah Ardila', NULL, 'S. Hum', 'P', 'Kristen', 'Jl. Kehidupan no.6, Wonokromo', '082375433218', '082375433218', 'farah26_', NULL, NULL, 'farah26_', NULL, NULL, 'farah26@gmail.com', 'Wonokromo', '1998-06-26'),
('00127', 'Galih Pratama', NULL, 'S. Si', 'L', 'Hindu', 'JL. Sakura no.7, Sukolilo', '088123215566', '088123215566', 'galih27_', NULL, NULL, 'galih27_', NULL, NULL, 'galih27@gmail.com', 'Sukolilo', '1998-07-27'),
('00128', 'Husna Salamah', NULL, 'S. Sn', 'p', 'Islam', 'JL. Ni Saja no.8, Pakal', '089723215432', '089723215432', 'husna28_', NULL, NULL, 'husna28_', NULL, NULL, 'husna28@gmail.com', 'Pakal', '1998-08-28'),
('00129', 'Indah Puspaningrum', NULL, 'S. Psi', 'p', 'Islam', 'JL. Jalan Yuk no.9, Gunung Anyar', '082165432887', '082165432887', 'indah29_', NULL, NULL, 'indah29_', NULL, NULL, 'indah@gmail.com', 'Gunung Anyar', '1998-09-29'),
('00130', 'Jatmiko Agung', NULL, 'S. Pt.', 'L', 'Budha', 'JL. Mu Bukan Jalanku, no.10, Tambaksari', '089912321165', '089912321165', 'jatmiko31_', NULL, NULL, 'jatmiko31_', NULL, NULL, 'jatmiko30@gmail.com', 'Tambaksari', '1998-10-30');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_pelajaran`
--

CREATE TABLE `jadwal_pelajaran` (
  `IDJADWAL` varchar(15) NOT NULL,
  `ID_GURU` varchar(12) DEFAULT NULL,
  `KODE_MAPEL` varchar(10) DEFAULT NULL,
  `IDRUANG` varchar(10) DEFAULT NULL,
  `NO_INDUK` varchar(10) DEFAULT NULL,
  `HARIJADWAL` varchar(6) DEFAULT NULL,
  `SESIJADWAL` char(1) DEFAULT NULL,
  `WAKTU_MULAI` time DEFAULT NULL,
  `WAKTU_SELESAI` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal_pelajaran`
--

INSERT INTO `jadwal_pelajaran` (`IDJADWAL`, `ID_GURU`, `KODE_MAPEL`, `IDRUANG`, `NO_INDUK`, `HARIJADWAL`, `SESIJADWAL`, `WAKTU_MULAI`, `WAKTU_SELESAI`) VALUES
('J01', '00121', 'G01', 'R01', '2008101001', 'Senin', '1', '07:00:00', '09:00:00'),
('J02', '00122', 'G01', 'R01', '2008101002', 'Senin', '2', '09:30:00', '11:30:00'),
('J03', '00123', 'G02', 'R02', '2008101003', 'Senin', '3', '12:00:00', '14:00:00'),
('J04', '00124', 'G02', 'R02', '2008101004', 'Senin', '4', '14:30:00', '16:30:00'),
('J05', '00125', 'G03', 'R03', '2008101005', 'Selasa', '1', '07:00:00', '09:00:00'),
('J06', '00126', 'G03', 'R03', '2008101006', 'Selasa', '2', '09:30:00', '11:30:00'),
('J07', '00127', 'G04', 'R04', '2008101007', 'Selasa', '3', '12:00:00', '14:00:00'),
('J08', '00128', 'G04', 'R04', '2008101008', 'Selasa', '4', '14:30:00', '16:30:00'),
('J09', '00129', 'G05', 'R01', '2008101009', 'Rabu', '1', '07:00:00', '09:00:00'),
('J10', '00130', 'G05', 'R01', '2008101010', 'Rabu', '2', '09:30:00', '11:30:00'),
('J11', '00121', 'G06', 'R02', '2008101011', 'Rabu', '3', '12:00:00', '14:00:00'),
('J12', '00122', 'G06', 'R02', '2008101012', 'Rabu', '4', '14:30:00', '16:30:00'),
('J13', '00123', 'G07', 'R03', '2008101013', 'Kamis', '1', '07:00:00', '09:00:00'),
('J14', '00124', 'G07', 'R03', '2008101014', 'Kamis', '2', '09:30:00', '11:30:00'),
('J15', '00125', 'G01', 'R04', '2008101015', 'Kamis', '3', '12:00:00', '14:00:00'),
('J16', '00126', 'G02', 'R04', '2008101016', 'Kamis', '4', '14:30:00', '16:30:00'),
('J17', '00127', 'G03', 'R01', '2008101017', 'Jum\'at', '1', '07:00:00', '09:00:00'),
('J18', '00128', 'G04', 'R02', '2008101018', 'Jum\'at', '2', '09:30:00', '11:30:00'),
('J19', '00129', 'G05', 'R03', '2008101019', 'Jum\'at', '3', '12:00:00', '14:00:00'),
('J20', '00130', 'G06', 'R04', '2008101020', 'Jum\'at', '4', '14:30:00', '16:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `mata_pelajaran`
--

CREATE TABLE `mata_pelajaran` (
  `KODE_MAPEL` varchar(10) NOT NULL,
  `NAMA_MAPEL` varchar(30) DEFAULT NULL,
  `BIDANG_MAPEL` varchar(10) DEFAULT NULL,
  `JENIS_MAPEL` varchar(10) DEFAULT NULL,
  `TIPE_MAPEL` varchar(10) DEFAULT NULL,
  `JUMLAH_PERTEMUAN` decimal(2,0) DEFAULT NULL,
  `DURASI_MAPEL` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mata_pelajaran`
--

INSERT INTO `mata_pelajaran` (`KODE_MAPEL`, `NAMA_MAPEL`, `BIDANG_MAPEL`, `JENIS_MAPEL`, `TIPE_MAPEL`, `JUMLAH_PERTEMUAN`, `DURASI_MAPEL`) VALUES
('G01', 'Pemrograman Web', 'IT', 'IT', 'IT', '1', '02:30:00'),
('G02', 'Pemrograman Berorientasi Objek', 'IT', 'IT', 'IT', '1', '02:30:00'),
('G03', 'Kecerdasan Buatan', 'IT', 'IT', 'IT', '1', '02:30:00'),
('G04', 'Desain Antar Muka', 'IT', 'IT', 'IT', '1', '02:30:00'),
('G05', 'Rekayasa Perangkat Lunak', 'IT', 'IT', 'IT', '1', '02:30:00'),
('G06', 'Analisis Desain &amp; Sistem', 'IT', 'IT', 'IT', '1', '02:30:00'),
('G07', 'Jaringan Komputer', 'IT', 'IT', 'IT', '1', '02:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `murid`
--

CREATE TABLE `murid` (
  `NO_INDUK` varchar(10) NOT NULL,
  `NAMA_MURID` varchar(25) NOT NULL,
  `JEN_KEL` char(1) DEFAULT NULL,
  `AGAMA_MURID` varchar(10) DEFAULT NULL,
  `ALAMAT_RUMAH` varchar(50) DEFAULT NULL,
  `TEMPATLAHIR` varchar(25) DEFAULT NULL,
  `TGL_LAHIR` date DEFAULT NULL,
  `NOHP` varchar(14) DEFAULT NULL,
  `NOWA` varchar(14) DEFAULT NULL,
  `IDTELEGRAM` varchar(20) DEFAULT NULL,
  `IDLINE` varchar(20) DEFAULT NULL,
  `IDFACEBOOK` varchar(20) DEFAULT NULL,
  `IDINSTAGRAM` varchar(20) DEFAULT NULL,
  `IDTWITTER` varchar(20) DEFAULT NULL,
  `IDYOUTUBE` varchar(20) DEFAULT NULL,
  `EMAIL` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `murid`
--

INSERT INTO `murid` (`NO_INDUK`, `NAMA_MURID`, `JEN_KEL`, `AGAMA_MURID`, `ALAMAT_RUMAH`, `TEMPATLAHIR`, `TGL_LAHIR`, `NOHP`, `NOWA`, `IDTELEGRAM`, `IDLINE`, `IDFACEBOOK`, `IDINSTAGRAM`, `IDTWITTER`, `IDYOUTUBE`, `EMAIL`) VALUES
('2008101001', 'Tony Stark', 'L', 'Islam', 'Jl. Yang Lurus no.1 Sabang', 'Sabang', '2002-01-01', '08111111111111', '08111111111111', 'tonyStark_', NULL, NULL, 'tonyStark_', NULL, NULL, 'tonystark@gmail.com'),
('2008101002', 'Steve Rogers', 'L', 'Kristen', 'Jl. Yang Mana no.2 Denpasar', 'Denpasar', '2002-01-02', '08111111111112', '08111111111112', 'steveRogers_', NULL, NULL, 'steveRogers_', NULL, NULL, 'steverogers@gmail.com'),
('2008101003', 'Bruce Banner', 'L', 'Budha', 'Jl. Yang Terjal no.3 Cilegon', 'Cilegon', '2002-01-03', '08111111111113', '08111111111113', 'bruceBanner_', NULL, NULL, 'bruceBanner_', NULL, NULL, 'brucebanner@gmail.com'),
('2008101004', 'Thor', 'L', 'Katolik', 'Jl. Yang Kanan no.4 Serang', 'Serang', '2002-01-04', '08111111111114', '08111111111114', 'thor_', NULL, NULL, 'thor_', NULL, NULL, 'thor@gmail.com'),
('2008101005', 'Loki', 'L', 'Katolik', 'Jl. Yang Kiri no.5 Tangerang', 'Tangerang', '2002-01-05', '08111111111115', '08111111111115', 'loki_', NULL, NULL, 'loki_', NULL, NULL, 'loki@gmail.com'),
('2008101006', 'Peter Parker', 'L', 'Kristen', 'Jl. Yang Landai no.6 Bengkulu', 'Bengkulu', '2002-01-06', '08111111111116', '08111111111116', 'peterParker_', NULL, NULL, 'peterParker_', NULL, NULL, 'peterparker@gmail.com'),
('2008101007', 'Scott Lang', 'L', 'Islam', 'Jl. Yang Curam no.7 Yogyakarta', 'Yogyakarta', '2002-01-07', '08111111111117', '08111111111117', 'scottLang_', NULL, NULL, 'scottLang_', NULL, NULL, 'scottlang@gmail.com'),
('2008101008', 'Natasha Romanoff', 'P', 'Hindu', 'Jl. Yang Belok no. 8 Gorontalo', 'Gorontalo', '2002-01-08', '08111111111118', '08111111111118', 'natRomanoff_', NULL, NULL, 'natRomanoff_', NULL, NULL, 'natromanoff@gmail.com'),
('2008101009', 'Stephen Strange', 'L', 'Budha', 'Jl. Yang Berlubang no. 9 Jakarta Selatan', 'Jakarta Selatan', '2002-01-09', '08111111111119', '08111111111119', 'stephenStrage_', NULL, NULL, 'stephenStrage_', NULL, NULL, 'stephenstrage@gmail.com'),
('2008101010', 'Rocket Raccoon', 'L', 'Islam', 'Jl. Yang diridhoi no. 10 Jakarta Utara', 'Jakarta Utara', '2002-01-10', '08111111111120', '08111111111120', 'rocketRaccoon_', NULL, NULL, 'rocketRaccoon_', NULL, NULL, 'rocketraccoon@gmail.com'),
('2008101011', 'Groot', 'P', 'Kristen', 'Jl. Yang putus no. 11 Jakarta Barat', 'Jakarta Barat', '2002-01-11', '08111111111121', '08111111111121', 'groot_', NULL, NULL, 'groot_', NULL, NULL, 'groot@gmail.com'),
('2008101012', 'Star Lord', 'L', 'Islam', 'Jl. Yang sempit no. 12 Jakarta Timur', 'Jakarta Timur', '2002-01-12', '08111111111122', '08111111111122', 'starLord_', NULL, NULL, 'starLord_', NULL, NULL, 'starlord@gmail.com'),
('2008101013', 'T\'Challa', 'L', 'Islam', 'Jl. Yang Lebar no. 13 Jakarta Pusat', 'Jakarta Pusat', '2002-01-13', '08111111111123', '08111111111123', 'TChalla_', NULL, NULL, 'TChalla_', NULL, NULL, 'tchalla@gmail.com'),
('2008101014', 'Vision', 'L', 'Katolik', 'Jl. Yang buntu no. 14 Jambi', 'Jambi', '2002-01-14', '08111111111124', '08111111111124', 'Vision_', NULL, NULL, 'Vision_', NULL, NULL, 'vision@gmail.com'),
('2008101015', 'Wanda Maximoff', 'P', 'Konghucu', 'Jl. Yang Rusak no. 15 Bandung', 'Bandung', '2002-01-15', '08111111111125', '08111111111125', 'wandaMaximoff_', NULL, NULL, 'wandaMaximoff_', NULL, NULL, 'wandamaximoff@gmail.com'),
('2008101016', 'Pietro Maximoff', 'L', 'Konghucu', 'Jl. Yang Ku Cari no. 16 Bekasi', 'Bekasi', '2002-01-16', '08111111111126', '08111111111126', 'pietroMaximoff_', NULL, NULL, 'pietroMaximoff_', NULL, NULL, 'pietromaximoff@gmail.com'),
('2008101017', 'Nick Fury', 'L', 'Budha', 'Jl. Yang Hilang no. 17 Bogor', 'Bogor', '2002-01-17', '08111111111127', '08111111111127', 'nickFury_', NULL, NULL, 'nickFury_', NULL, NULL, 'nickfury@gmail.com'),
('2008101018', 'Carrol Danvers', 'P', 'Hindu', 'Jl. Yang baru no. 18 Cimahi', 'Cimahi', '2002-01-18', '08111111111128', '08111111111128', 'carrolDanvers_', NULL, NULL, 'carrolDanvers_', NULL, NULL, 'carroldanvers@gmail.com'),
('2008101019', 'Thanos', 'L', 'Kristen', 'Jl. Yang Licin no. 19 Depok', 'Depok', '2002-01-19', '08111111111129', '08111111111129', 'Thanos_', NULL, NULL, 'Thanos_', NULL, NULL, 'thanos@gmail.com'),
('2008101020', 'Clint Barton', 'L', 'Islam', 'Jl. Yang Berbatu no. 20 Cirebon', 'Cirebon', '2002-01-20', '08111111111130', '08111111111130', 'clintBarton_', NULL, NULL, 'clintBarton_', NULL, NULL, 'clintbarton@gmail.com'),
('2008101021', 'Yelena Belova', 'P', 'katolik', 'Jl. Yang rapuh no. 21 Sukabumi', 'Sukabumi', '2002-01-21', '08111111111131', '08111111111131', 'yelenaBelova_', NULL, NULL, 'yelenaBelova_', NULL, NULL, 'yelenabelova@gmail.com'),
('2008101022', 'Bucky Barners', 'L', 'Islam', 'Jl. Yang retak no. 22 Banjar', 'Banjar', '2002-01-22', '08111111111132', '08111111111132', 'buckyBarners_', NULL, NULL, 'buckyBarners_', NULL, NULL, 'buckybarners@gmail.com'),
('2008101023', 'Yondu', 'L', 'Konghucu', 'Jl. Yang pupus no. 23 Magelang', 'Magelang', '2002-01-23', '08111111111133', '08111111111133', 'yondu_', NULL, NULL, 'yondu_', NULL, NULL, 'yondu@gmail.com'),
('2008101024', 'Gamora', 'P', 'Islam', 'Jl. Yang hancur no. 24 Pekalongan', 'Pekalongan', '2002-01-24', '08111111111134', '08111111111134', 'gamora_', NULL, NULL, 'gamora_', NULL, NULL, 'gamora@gmail.com'),
('2008101025', 'Valkyrie', 'P', 'Islam', 'Jl. Yang Terbelah no. 25 Salatiga', 'Salatiga', '2002-01-25', '08111111111135', '08111111111135', 'valkyrie_', NULL, NULL, 'valkyrie_', NULL, NULL, 'valkyrie@gmail.com'),
('2008101026', 'Heimdal', 'L', 'Hindu', 'Jl. Yang Berbelit no. 26 Semarang', 'Semarang', '2002-01-26', '08111111111136', '08111111111136', 'heimdal_', NULL, NULL, 'heimdal_', NULL, NULL, 'heimdal@gmail.com'),
('2008101027', 'Happy Hogan', 'L', 'Budha', 'Jl. Yang Bengkok no. 27 Surakarta', 'Surakarta', '2002-01-27', '08111111111137', '08111111111137', 'happyHagen_', NULL, NULL, 'happyHagen_', NULL, NULL, 'happyhagen@gmail.com'),
('2008101028', 'Nebula', 'P', 'Islam', 'Jl. Yang Lama no. 28 Tegal', 'Tegal', '2002-01-28', '08111111111138', '08111111111138', 'nebula_', NULL, NULL, 'nebula_', NULL, NULL, 'nebula@gmail.com'),
('2008101029', 'Sam Wilson', 'L', 'Konghucu', 'Jl. Yang Sesat no. 29 Batu', 'Batu', '2002-01-29', '08111111111139', '08111111111139', 'samWilson_', NULL, NULL, 'samWilson_', NULL, NULL, 'samwilson@gmail.com'),
('2008101030', 'Wong', 'L', 'Budha', 'Jl. Yang Pahit no. 30 Malang', 'Malang', '2002-01-30', '08111111111140', '08111111111140', 'wong_', NULL, NULL, 'wong_', NULL, NULL, 'wong@gmail.com'),
('2008101031', 'Pepper Pots', 'P', 'Islam', 'Jl. Yang Hitam no. 31 Blitar', 'Blitar', '2002-01-31', '08111111111141', '08111111111141', 'pepperPots_', NULL, NULL, 'pepperPots_', NULL, NULL, 'pepperpots@gmail.com'),
('2008101032', 'Peggy Charter', 'P', 'Kristen', 'Jl. Yang Panas no. 32 Kediri', 'Kediri', '2002-02-01', '08111111111142', '08111111111142', 'peggyCharter_', NULL, NULL, 'peggyCharter_', NULL, NULL, 'peggycharter@gmail.com'),
('2008101033', 'Cassie Lang', 'P', 'Islam', 'Jl. Yang Panjang no. 33 Madiun', 'Madiun', '2002-02-02', '08111111111143', '08111111111143', 'cassieLang_', NULL, NULL, 'cassieLang_', NULL, NULL, 'cassielang@gmail.com'),
('2008101034', 'Ancient One', 'P', 'Budha', 'Jl. Yang Selamat no. 35 Mojokerto', 'Mojokerto', '2002-02-03', '08111111111144', '08111111111144', 'ancientOne_', NULL, NULL, 'ancientOne_', NULL, NULL, 'ancientone@gmail.com'),
('2008101035', 'Michael Jonson', 'P', 'Katolik', 'Jl. Yang Buntu no. 35 Pasuruan', 'Pasuruan', '2002-02-04', '08111111111145', '08111111111145', 'michaelJonson_', NULL, NULL, 'michaelJonson_', NULL, NULL, 'michaeljonson@gmail.com'),
('2008101036', 'Ikaris', 'L', 'Islam', 'Jl. Yang Sepi no. 36 Probolinggo', 'Probolinggo', '2002-02-05', '08111111111146', '08111111111146', 'Ikaris_', NULL, NULL, 'Ikaris_', NULL, NULL, 'Ikaris@gmail.com'),
('2008101037', 'Thena', 'P', 'Katolik', 'Jl. Yang Ramai no. 37 Surabaya', 'Surabaya', '2002-02-06', '08111111111147', '08111111111147', 'Thena_', NULL, NULL, 'Thena_', NULL, NULL, 'Thena@gmail.com'),
('2008101038', 'Sersi', 'P', 'Kristen', 'Jl. Yang Baru no. 38 Pontianak', 'Pontianak', '2002-02-07', '08111111111148', '08111111111148', 'Sersi_', NULL, NULL, 'Sersi_', NULL, NULL, 'Sersi@gmail.com'),
('2008101039', 'Kingo', 'L', 'Hindu', 'Jl. Yang Turun no. 39 Singkawang', 'Singkawang', '2002-02-08', '08111111111149', '08111111111149', 'kingo_', NULL, NULL, 'kingo_', NULL, NULL, 'kingo@gmail.com'),
('2008101040', 'Sprite', 'P', 'Islam', 'Jl. Yang Naik no. 40 Banjar Baru', 'Banjar Baru', '2002-02-09', '08111111111150', '08111111111150', 'sprite_', NULL, NULL, 'sprite_', NULL, NULL, 'sprite@gmail.com'),
('2008101041', 'Makkari', 'P', 'Islam', 'Jl. Yang Tak Berujung no. 41 Banjarmasin', 'Banjarmasin', '2002-02-10', '08111111111151', '08111111111151', 'makkari_', NULL, NULL, 'makkari_', NULL, NULL, 'makkari@gmail.com'),
('2008101042', 'Phastos', 'L', 'Kristen', 'Jl. Yang Tersembunyi no. 42 Palangkaraya', 'Palangkaraya', '2002-02-11', '08111111111152', '08111111111152', 'phastos_', NULL, NULL, 'phastos_', NULL, NULL, 'phastos@gmail.com'),
('2008101043', 'Gilgamesh', 'L', 'Konghucu', 'Jl. Yang Terselubung no. 42 Tarakan', 'Tarakan', '2002-02-12', '08111111111153', '08111111111153', 'gilgamesh_', NULL, NULL, 'gilgamesh_', NULL, NULL, 'gilgamesh@gmail.com'),
('2008101044', 'Druig', 'L', 'Budha', 'Jl. Yang Misterius no. 44 Batam', 'Batam', '2002-02-13', '08111111111154', '08111111111154', 'druig_', NULL, NULL, 'druig_', NULL, NULL, 'druig@gmail.com'),
('2008101045', 'Ajak', 'P', 'Islam', 'Jl. Yang Jelas no. 45 Bandar Lampung', 'Bandar Lampung', '2002-02-14', '08111111111155', '08111111111155', 'ajak_', NULL, NULL, 'ajak_', NULL, NULL, 'ajak@gmail.com'),
('2008101046', 'Shang Chi', 'L', 'Konghucu', 'Jl. Yang Suram no. 46 Ternate', 'Ternate', '2002-02-15', '08111111111156', '08111111111156', 'sangchi_', NULL, NULL, 'sangchi_', NULL, NULL, 'sangchi@gmail.com'),
('2008101047', 'Xu Wenwu', 'L', 'Budha', 'Jl. Yang Diberkati no. 47 Tidore', 'Tidore', '2002-02-16', '08111111111157', '08111111111157', 'wenwu_', NULL, NULL, 'wenwu_', NULL, NULL, 'wenwu@gmail.com'),
('2008101048', 'Xialing', 'P', 'Islam', 'Jl. Orang yang Sabar no. 47 Ambon', 'Ambon', '2002-02-17', '08111111111158', '08111111111158', 'xialing_', NULL, NULL, 'xialing_', NULL, NULL, 'xialing@gmail.com'),
('2008101049', 'Katty', 'P', 'Islam', 'Jl. Yang Jalan-jalan no. 49 Sorong', 'Sorong', '2002-02-18', '08111111111159', '08111111111159', 'katty_', NULL, NULL, 'katty_', NULL, NULL, 'katty@gmail.com'),
('2008101050', 'Ying Nan', 'P', 'Kristen', 'Jl. Yang &amp; Ying no. 49 Jayapura', 'Jayapura', '2002-02-19', '08111111111160', '08111111111160', 'yingnan_', NULL, NULL, 'yingnan_', NULL, NULL, 'yingnan@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `ruang_kelas`
--

CREATE TABLE `ruang_kelas` (
  `IDRUANG` varchar(10) NOT NULL,
  `NAMA_RUANG` varchar(15) NOT NULL,
  `TIPE_RUANG` varchar(10) DEFAULT NULL,
  `UKURAN_RUANG` varchar(10) DEFAULT NULL,
  `KAPASITAS_RUANG` decimal(3,0) DEFAULT NULL,
  `JUMLAH_MEJA` decimal(3,0) DEFAULT NULL,
  `JUMLAH_KURSI` decimal(3,0) DEFAULT NULL,
  `KETERANGAN_RUANG` varchar(200) DEFAULT NULL,
  `KELENGKAPAN_ALAT` varchar(200) DEFAULT NULL,
  `RENOVASI_TERAKHIR` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ruang_kelas`
--

INSERT INTO `ruang_kelas` (`IDRUANG`, `NAMA_RUANG`, `TIPE_RUANG`, `UKURAN_RUANG`, `KAPASITAS_RUANG`, `JUMLAH_MEJA`, `JUMLAH_KURSI`, `KETERANGAN_RUANG`, `KELENGKAPAN_ALAT`, `RENOVASI_TERAKHIR`) VALUES
('R01', 'Ruang 1', 'Kelas', '20x20 m', '30', '30', '30', 'Untuk kegiatan KBM', 'lengkap', '2002-04-05'),
('R02', 'Ruang 2', 'Kelas', '20x20 m', '30', '30', '30', 'Untuk kegiatan KBM', 'lengkap', '2002-04-06'),
('R03', 'Ruang 3', 'Kelas', '20x20 m', '30', '30', '30', 'Untuk kegiatan KBM', 'lengkap', '2002-04-07'),
('R04', 'Ruang 4', 'Kelas', '20x20 m', '30', '30', '30', 'Untuk kegiatan KBM', 'lengkap', '2002-04-08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guru_pengajar`
--
ALTER TABLE `guru_pengajar`
  ADD PRIMARY KEY (`ID_GURU`);

--
-- Indexes for table `jadwal_pelajaran`
--
ALTER TABLE `jadwal_pelajaran`
  ADD PRIMARY KEY (`IDJADWAL`),
  ADD KEY `FK_JADWAL_P_MATERI_DI_MATA_PEL` (`KODE_MAPEL`),
  ADD KEY `FK_JADWAL_P_MENERIMA__MURID` (`NO_INDUK`),
  ADD KEY `FK_JADWAL_P_MENGAJAR_GURU_PEN` (`ID_GURU`),
  ADD KEY `FK_JADWAL_P_TEMPATKBM_RUANG_KE` (`IDRUANG`);

--
-- Indexes for table `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  ADD PRIMARY KEY (`KODE_MAPEL`);

--
-- Indexes for table `murid`
--
ALTER TABLE `murid`
  ADD PRIMARY KEY (`NO_INDUK`);

--
-- Indexes for table `ruang_kelas`
--
ALTER TABLE `ruang_kelas`
  ADD PRIMARY KEY (`IDRUANG`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jadwal_pelajaran`
--
ALTER TABLE `jadwal_pelajaran`
  ADD CONSTRAINT `FK_JADWAL_P_MATERI_DI_MATA_PEL` FOREIGN KEY (`KODE_MAPEL`) REFERENCES `mata_pelajaran` (`KODE_MAPEL`),
  ADD CONSTRAINT `FK_JADWAL_P_MENERIMA__MURID` FOREIGN KEY (`NO_INDUK`) REFERENCES `murid` (`NO_INDUK`),
  ADD CONSTRAINT `FK_JADWAL_P_MENGAJAR_GURU_PEN` FOREIGN KEY (`ID_GURU`) REFERENCES `guru_pengajar` (`ID_GURU`),
  ADD CONSTRAINT `FK_JADWAL_P_TEMPATKBM_RUANG_KE` FOREIGN KEY (`IDRUANG`) REFERENCES `ruang_kelas` (`IDRUANG`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
