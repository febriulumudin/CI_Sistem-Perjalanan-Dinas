-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Nov 2021 pada 20.02
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perjalanan_dinas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_bukti_pembayaran`
--

CREATE TABLE `data_bukti_pembayaran` (
  `id_bukti_pembayaran` int(11) NOT NULL,
  `id_spt` int(255) NOT NULL,
  `jenis_bukti` varchar(255) NOT NULL,
  `bukti_pembayaran` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_golongan`
--

CREATE TABLE `data_golongan` (
  `id_golongan` int(35) NOT NULL,
  `golongan` varchar(255) NOT NULL,
  `nama_golongan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_golongan`
--

INSERT INTO `data_golongan` (`id_golongan`, `golongan`, `nama_golongan`) VALUES
(1, 'I/A', 'Juru Muda'),
(2, 'I/B', 'Juru Muda Tingkat 1'),
(3, 'I/C', 'Juru'),
(4, 'I/D', 'Juru Tingkat 1'),
(5, 'II/A', 'Pengatur Muda'),
(6, 'II/B', 'Pengatur Muda Tingkat 1'),
(7, 'II/C', 'Pengatur'),
(8, 'II/D', 'Pengatur Tingkat 1'),
(9, 'III/A', 'Penata Muda'),
(10, 'III/B', 'Penata Muda Tingkat 1'),
(11, 'III/C', 'Penata'),
(12, 'III/D', 'Penata Tingkat 1'),
(13, 'IV/A', 'Pembina'),
(14, 'IV/B', 'Pembina Tingkat 1'),
(15, 'IV/C', 'Pembina Utama Muda'),
(16, 'IV/D', 'Pembina Utama Madya'),
(17, 'IV/E', 'Pembina Utama');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_jabatan`
--

CREATE TABLE `data_jabatan` (
  `id_jabatan` int(35) NOT NULL,
  `nama_jabatan` varchar(255) NOT NULL,
  `kode_jabatan` int(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_jabatan`
--

INSERT INTO `data_jabatan` (`id_jabatan`, `nama_jabatan`, `kode_jabatan`) VALUES
(1, 'Ketua', 1),
(2, 'Wakil Ketua', 2),
(3, 'Staf Ahli', 3),
(4, 'Staf Humas', 4),
(5, 'Anggota', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pegawai`
--

CREATE TABLE `data_pegawai` (
  `id_pegawai` int(35) NOT NULL,
  `nip` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `no_hp` varchar(35) DEFAULT NULL,
  `jen_kel` varchar(35) DEFAULT NULL,
  `gol_pegawai` int(35) NOT NULL,
  `kode_jabatan` int(35) NOT NULL,
  `pendidikan_ijasah` varchar(35) DEFAULT NULL,
  `sts_pns` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_pegawai`
--

INSERT INTO `data_pegawai` (`id_pegawai`, `nip`, `nama`, `no_hp`, `jen_kel`, `gol_pegawai`, `kode_jabatan`, `pendidikan_ijasah`, `sts_pns`) VALUES
(1, '196806141993032010', 'Anny Saulina', '00000111', 'P', 1, 1, 'S2', 'IYA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_rekening`
--

CREATE TABLE `data_rekening` (
  `id_rekening` int(25) NOT NULL,
  `kode_rekening` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_rekening`
--

INSERT INTO `data_rekening` (`id_rekening`, `kode_rekening`) VALUES
(1, '5.2.2.15.01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_rincian_biaya`
--

CREATE TABLE `data_rincian_biaya` (
  `id_rincian_biaya` int(35) NOT NULL,
  `uang_harian` int(35) DEFAULT NULL,
  `biaya_penginapan` int(35) DEFAULT NULL,
  `nama_tempat` varchar(255) DEFAULT NULL,
  `uang_representasi` int(35) DEFAULT NULL,
  `sewa_kendaraan` int(35) DEFAULT NULL,
  `br_pesawat/ka` varchar(255) DEFAULT NULL,
  `br_no_tiket` varchar(255) DEFAULT NULL,
  `br_no_terbang` varchar(255) DEFAULT NULL,
  `br_jam` time DEFAULT NULL,
  `br_no_tempat_duduk` int(35) DEFAULT NULL,
  `br_tanggal` date DEFAULT NULL,
  `br_asal` varchar(255) DEFAULT NULL,
  `br_tujuan` varchar(255) DEFAULT NULL,
  `br_harga` int(35) DEFAULT NULL,
  `kmb_pesawat/ka` varchar(255) DEFAULT NULL,
  `kmb_no_tiket` varchar(255) DEFAULT NULL,
  `kmb_no_terbang` varchar(255) DEFAULT NULL,
  `kmb_jam` time DEFAULT NULL,
  `kmb_no_tempat_duduk` int(35) DEFAULT NULL,
  `kmb_tanggal` date DEFAULT NULL,
  `kmb_asal` varchar(255) DEFAULT NULL,
  `kmb_tujuan` varchar(255) DEFAULT NULL,
  `kmb_harga` int(35) DEFAULT NULL,
  `id_spt` int(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_rincian_biaya`
--

INSERT INTO `data_rincian_biaya` (`id_rincian_biaya`, `uang_harian`, `biaya_penginapan`, `nama_tempat`, `uang_representasi`, `sewa_kendaraan`, `br_pesawat/ka`, `br_no_tiket`, `br_no_terbang`, `br_jam`, `br_no_tempat_duduk`, `br_tanggal`, `br_asal`, `br_tujuan`, `br_harga`, `kmb_pesawat/ka`, `kmb_no_tiket`, `kmb_no_terbang`, `kmb_jam`, `kmb_no_tempat_duduk`, `kmb_tanggal`, `kmb_asal`, `kmb_tujuan`, `kmb_harga`, `id_spt`) VALUES
(1, 50000, 600000, 'Hotel Sriwijaya', 0, 60000, 'Pesawat', '', 'B1123', '05:00:00', 11, '2020-08-31', 'Surabaya', 'Semarang', 30000, 'Pesawat', '', 'B3321', '05:00:00', 2, '2020-09-01', 'Semarang', 'Surabaya', 32000, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_setting_ttd`
--

CREATE TABLE `data_setting_ttd` (
  `id_setting_ttd` int(35) NOT NULL,
  `nama_ttd` varchar(255) NOT NULL,
  `nip` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_setting_ttd`
--

INSERT INTO `data_setting_ttd` (`id_setting_ttd`, `nama_ttd`, `nip`, `jabatan`) VALUES
(1, 'Dra. ETY PRAWESTI,M.Si', '19680513 198903 2 006', 'Kuasa Pengguna Anggaran'),
(2, 'ESTI WULANDARI,S.E', '19710606 200701 2 010', 'Bendahara Pengeluaran Pembantu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_spt_pegawai`
--

CREATE TABLE `data_spt_pegawai` (
  `id_spt_pegawai` int(35) NOT NULL,
  `nomor_program` varchar(255) NOT NULL,
  `nip_pegawai` varchar(255) NOT NULL,
  `approval` varchar(255) NOT NULL,
  `status_dilihat` int(11) NOT NULL,
  `status_pengajuan` int(35) NOT NULL,
  `komentar` text DEFAULT NULL,
  `dilihat_admin` int(35) NOT NULL,
  `status_data` varchar(255) NOT NULL,
  `no_bukti` int(35) DEFAULT NULL,
  `tgl_bukti` date DEFAULT NULL,
  `jml_seluruh` int(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_spt_pegawai`
--

INSERT INTO `data_spt_pegawai` (`id_spt_pegawai`, `nomor_program`, `nip_pegawai`, `approval`, `status_dilihat`, `status_pengajuan`, `komentar`, `dilihat_admin`, `status_data`, `no_bukti`, `tgl_bukti`, `jml_seluruh`) VALUES
(1, '011', '196806141993032010', 'IYA', 1, 1, NULL, 0, 'SUDAH', NULL, NULL, 772000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_perintah`
--

CREATE TABLE `surat_perintah` (
  `id_surat_perintah` int(35) NOT NULL,
  `no_program` varchar(255) DEFAULT NULL,
  `dalam_rangka` text NOT NULL,
  `tujuan` varchar(255) NOT NULL,
  `no_rekening` int(35) NOT NULL,
  `instansi` varchar(255) NOT NULL,
  `berangkat` date NOT NULL,
  `kembali` date NOT NULL,
  `lama_hari` int(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `surat_perintah`
--

INSERT INTO `surat_perintah` (`id_surat_perintah`, `no_program`, `dalam_rangka`, `tujuan`, `no_rekening`, `instansi`, `berangkat`, `kembali`, `lama_hari`) VALUES
(1, '011', 'Mendampingi Kunjungan Kerja Komisi E (KESRA) DPRD Provinsi Jawa Timur', 'Semarang', 0, 'Dinas Pendidikan dan Kebudayaan Jawa Tengah ', '2021-06-01', '2021-06-03', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(35) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `hak_akses` int(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `hak_akses`) VALUES
(1, 'admin', 'admin', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_bukti_pembayaran`
--
ALTER TABLE `data_bukti_pembayaran`
  ADD PRIMARY KEY (`id_bukti_pembayaran`);

--
-- Indeks untuk tabel `data_golongan`
--
ALTER TABLE `data_golongan`
  ADD PRIMARY KEY (`id_golongan`);

--
-- Indeks untuk tabel `data_jabatan`
--
ALTER TABLE `data_jabatan`
  ADD PRIMARY KEY (`id_jabatan`),
  ADD UNIQUE KEY `kode_jabatan` (`kode_jabatan`);

--
-- Indeks untuk tabel `data_pegawai`
--
ALTER TABLE `data_pegawai`
  ADD PRIMARY KEY (`id_pegawai`),
  ADD UNIQUE KEY `nip` (`nip`);

--
-- Indeks untuk tabel `data_rekening`
--
ALTER TABLE `data_rekening`
  ADD PRIMARY KEY (`id_rekening`);

--
-- Indeks untuk tabel `data_rincian_biaya`
--
ALTER TABLE `data_rincian_biaya`
  ADD PRIMARY KEY (`id_rincian_biaya`),
  ADD UNIQUE KEY `id_spt` (`id_spt`);

--
-- Indeks untuk tabel `data_setting_ttd`
--
ALTER TABLE `data_setting_ttd`
  ADD PRIMARY KEY (`id_setting_ttd`);

--
-- Indeks untuk tabel `data_spt_pegawai`
--
ALTER TABLE `data_spt_pegawai`
  ADD PRIMARY KEY (`id_spt_pegawai`);

--
-- Indeks untuk tabel `surat_perintah`
--
ALTER TABLE `surat_perintah`
  ADD PRIMARY KEY (`id_surat_perintah`),
  ADD UNIQUE KEY `no_program` (`no_program`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_bukti_pembayaran`
--
ALTER TABLE `data_bukti_pembayaran`
  MODIFY `id_bukti_pembayaran` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `data_golongan`
--
ALTER TABLE `data_golongan`
  MODIFY `id_golongan` int(35) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `data_jabatan`
--
ALTER TABLE `data_jabatan`
  MODIFY `id_jabatan` int(35) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `data_pegawai`
--
ALTER TABLE `data_pegawai`
  MODIFY `id_pegawai` int(35) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `data_rekening`
--
ALTER TABLE `data_rekening`
  MODIFY `id_rekening` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `data_rincian_biaya`
--
ALTER TABLE `data_rincian_biaya`
  MODIFY `id_rincian_biaya` int(35) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `data_setting_ttd`
--
ALTER TABLE `data_setting_ttd`
  MODIFY `id_setting_ttd` int(35) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `data_spt_pegawai`
--
ALTER TABLE `data_spt_pegawai`
  MODIFY `id_spt_pegawai` int(35) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `surat_perintah`
--
ALTER TABLE `surat_perintah`
  MODIFY `id_surat_perintah` int(35) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(35) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
