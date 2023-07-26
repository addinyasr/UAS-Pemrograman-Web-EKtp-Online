-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Jul 2023 pada 10.57
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dukcapil_online`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(5) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', '123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `akta_kelahiran`
--

CREATE TABLE `akta_kelahiran` (
  `id_akta` int(11) NOT NULL,
  `nama_akta` varchar(100) NOT NULL,
  `tgl_lahir_akta` date NOT NULL,
  `jk_akta` enum('Laki-laki','Perempuan') NOT NULL,
  `nama_ayah_akta` varchar(100) NOT NULL,
  `nama_ibu_akta` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `akta_kelahiran`
--

INSERT INTO `akta_kelahiran` (`id_akta`, `nama_akta`, `tgl_lahir_akta`, `jk_akta`, `nama_ayah_akta`, `nama_ibu_akta`) VALUES
(1, 'Ahmad Fahri', '2023-07-28', 'Laki-laki', 'guwono', 'sri'),
(2, 'Andrean', '2023-07-29', 'Laki-laki', 'yuo', 'ani'),
(3, 'Divka', '2023-07-30', 'Perempuan', 'papa', 'bibi'),
(4, 'Rafi ', '2023-03-20', 'Laki-laki', 'Mulyo', 'Suratini'),
(5, 'Sihab', '2023-02-20', 'Laki-laki', 'yudono', 'martini'),
(6, 'Tegar', '2022-12-11', 'Laki-laki', 'suwondo', 'sumartiyem'),
(7, 'Alex', '2023-05-09', 'Laki-laki', 'papo', 'bubu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ektp`
--

CREATE TABLE `ektp` (
  `id_ektp` int(11) NOT NULL,
  `id_kk` int(100) NOT NULL,
  `id_akta` int(100) NOT NULL,
  `tgl_lahir_ektp` varchar(100) NOT NULL,
  `tempat_lahir_ektp` varchar(100) NOT NULL,
  `jk_ektp` enum('Laki-laki','Perempuan') NOT NULL,
  `alamat_ektp` varchar(100) NOT NULL,
  `status_kawin` enum('Kawin','Belum Kawin') NOT NULL,
  `kewarganegaraan_ektp` enum('WNI','WNA') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `ektp`
--

INSERT INTO `ektp` (`id_ektp`, `id_kk`, `id_akta`, `tgl_lahir_ektp`, `tempat_lahir_ektp`, `jk_ektp`, `alamat_ektp`, `status_kawin`, `kewarganegaraan_ektp`) VALUES
(1, 1, 1, '2003-03-28', 'Sumatra', 'Laki-laki', 'Condong Catur', 'Kawin', 'WNI');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kartu_keluarga`
--

CREATE TABLE `kartu_keluarga` (
  `id_kk` int(11) NOT NULL,
  `nik_kk` int(11) NOT NULL,
  `nama_kk` varchar(100) NOT NULL,
  `jk_kk` enum('Laki-Laki','Perempuan') NOT NULL,
  `tgl_lahir_kk` date NOT NULL,
  `agama_kk` enum('Islam','Kristen','Katolik') NOT NULL,
  `pekerjaan_kk` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kartu_keluarga`
--

INSERT INTO `kartu_keluarga` (`id_kk`, `nik_kk`, `nama_kk`, `jk_kk`, `tgl_lahir_kk`, `agama_kk`, `pekerjaan_kk`) VALUES
(1, 10, 'Ahmad Fahri', 'Laki-Laki', '2023-07-28', 'Islam', 'Front-End Develop'),
(2, 20, 'Andrean', 'Laki-Laki', '2023-07-29', 'Islam', 'nganggur'),
(3, 30, 'Divka', 'Perempuan', '2023-07-30', 'Kristen', 'mahasiswa'),
(4, 40, 'Rafi', 'Laki-Laki', '2023-03-20', 'Kristen', 'Mekanik'),
(5, 50, 'Sihab', 'Laki-Laki', '2023-02-20', 'Islam', 'Streamer'),
(6, 60, 'Tegar', 'Laki-Laki', '2022-12-11', 'Islam', 'Mahasiswa'),
(7, 70, 'Alex', 'Laki-Laki', '2023-05-09', 'Islam', 'Programmer');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `akta_kelahiran`
--
ALTER TABLE `akta_kelahiran`
  ADD PRIMARY KEY (`id_akta`);

--
-- Indeks untuk tabel `ektp`
--
ALTER TABLE `ektp`
  ADD PRIMARY KEY (`id_ektp`),
  ADD KEY `id_kk` (`id_kk`),
  ADD KEY `id_akta` (`id_akta`);

--
-- Indeks untuk tabel `kartu_keluarga`
--
ALTER TABLE `kartu_keluarga`
  ADD PRIMARY KEY (`id_kk`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `akta_kelahiran`
--
ALTER TABLE `akta_kelahiran`
  MODIFY `id_akta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `ektp`
--
ALTER TABLE `ektp`
  MODIFY `id_ektp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kartu_keluarga`
--
ALTER TABLE `kartu_keluarga`
  MODIFY `id_kk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `ektp`
--
ALTER TABLE `ektp`
  ADD CONSTRAINT `fk_akta` FOREIGN KEY (`id_akta`) REFERENCES `akta_kelahiran` (`id_akta`),
  ADD CONSTRAINT `fk_kk` FOREIGN KEY (`id_kk`) REFERENCES `kartu_keluarga` (`id_kk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
