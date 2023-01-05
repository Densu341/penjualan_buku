-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Jan 2023 pada 17.17
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store_book`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `id_katalog` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `judul` varchar(90) NOT NULL,
  `pengarang` varchar(50) NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `hal` varchar(4) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `harga` varchar(11) NOT NULL,
  `deskripsi` varchar(300) NOT NULL,
  `tanggal` date NOT NULL,
  `tanggal_edit` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id_buku`, `id_katalog`, `id_kategori`, `judul`, `pengarang`, `penerbit`, `hal`, `gambar`, `harga`, `deskripsi`, `tanggal`, `tanggal_edit`) VALUES
(7, 2, 5, 'Atomic Habits', 'James Clear', 'Gramedia Pustaka Utama', '320', '20230105095344.jpg', '97000', 'Perubahan Kecil, Hasil Luar Biasa!\r\nJika Anda kesulitan mengubah kebiasaan, masalahnya bukan Anda. Masalahnya adalah sistem Anda. Kebiasaan buruk berulang lagi dan lagi bukan karena Anda tidak ingin berubah, tetapi karena Anda memiliki sistem perubahan yang salah. Anda tidak naik ke tingkat tujuan A', '2023-01-05', '0000-00-00'),
(8, 2, 1, 'Melangkah', 'Js. Khairen', 'Gramedia Widiasarana indonesia', '372', '20230105095526.jpg', '93000', 'Listrik padam di seluruh Jawa dan Bali secara misterius! Ancaman nyata kekuatan baru yang hendak menaklukkan Nusantara. Saat yang sama, empat sahabat mendarat di Sumba, hanya untuk mendapati nasib ratusan juta manusia ada di tangan mereka! Empat mahasiswa ekonomi ini, harus bertarung melawan pasukan', '2023-01-05', '0000-00-00'),
(9, 5, 1, 'Emas Indonesia', 'IRWANDY ARIF', 'Gramedia Pustaka Utama', '360', '20230105095745.jpg', '210000', 'Sejak dulu, emas adalah salah satu logam yang paling banyak digunakan di dunia. Sifatnya yang kuat, tahan korosi, dan mudah dibentuk, serta warnanya yang menarik, membuatnya sangat populer untuk dimanfaatkan. Di Indonesia, pertambangan emas memiliki sejarah panjang. Mulai dari ribuan tahun lalu, ke ', '2020-05-01', '0000-00-00'),
(10, 5, 3, 'Mikroorganisme dan Aplikasinya dalam Berbagai Industri', 'Diana E. Waturangi', 'Gramedia Pustaka Utama', '196', '20230105095936.jpg', '95000', 'Mikrobiologi industri adalah salah satu cabang dari ilmu mikrobiologi yang khusus mempelajari tentang pemanfaatan mikroorganisme untuk kepentingan industri, baik itu industri kimia, pangan, farmasi, obat-obatan serta pemanfaatan mikroorganisme untuk mengolah hasil samping industri, yaitu limbah.', '2022-05-01', '0000-00-00'),
(11, 7, 1, 'Mastering AutoCAD 3D Modeling', 'Hari Aria Soma', 'Elex Media Komputindo', '240', '20230105100203.jpg', '85000', 'Berisi kumpulan soal latihan dari berbagai model 3D termasuk langkah-langkah penyelesaiannya. Materi soal mencakup hampir semua perintah yang diperlukan, mulai dari pemodelan 3D (Extrude, Sweep, Presspull, Subtract, Union, Revolve, dan sebagainya), UCS, Dimensioning 3D, Profiling & Proyeksi, dan Lay', '2022-10-01', '0000-00-00'),
(12, 7, 3, 'Explainable Artificial Intelligence', 'Prof.Dr. Suyanto & Kk', 'Penerbit Informatika', '222', '20230105100419.jpg', '80000', 'Explainable Artificial Intelligence', '2022-09-22', '0000-00-00'),
(13, 8, 1, 'Rahasia Sukses Bertanam Anggur', 'Hadi Tribowo', 'Yrama Widyaa', '174', '20230105100625.jpg', '49000', 'Saat ini, sebagian besar anggur yang beredar di Indonesia, merupakan anggur impor. Tidak heran jika negara kita masuk ke dalam sepuluh besar pengimpor anggur terbesar di dunia. Permintaan konsumen akan buah ini juga terus meningkat setiap tahunnya.', '2022-09-16', '0000-00-00'),
(14, 8, 1, 'Semua Bisa Budidaya Lobster', 'Gema Paku Bumi', 'Pt.Niaga Swadaya', '68', '20230105100810.jpg', '65000', 'Lobster air tawar merupakan salah satu komoditas perikanan air tawar yang belum banyak dibudidayakan. Padahal, antusiasme masyarakat terhadap komoditas ini cukup tinggi. Harganya pun terbilang tinggi yang bisa mencapai Rp180.000 per kg. Masih minimnya pengetahuan atau acuan pada komoditas ini membua', '2022-10-12', '0000-00-00'),
(15, 6, 5, 'The Alchemyst', 'Michael Scott', ' Qantara', '503', '20230105100954.jpg', '108000', 'Kebenaran: Makam Nicholas Flamel kosong. Nicholas Flamel, yang lahir di Paris pada tanggal 28 September 1330, dikenal sebagai Alchemyst termasyhur di masanya. Ia berusaha menciptakan ramuan untuk hidup abadi dan mengubah logam biasa menjadi emas murni. Menurut catatan, sang Alchemyst meninggal tahun', '2022-07-04', '0000-00-00'),
(16, 6, 2, 'Damar Kambang', 'MUNA MASYARI', 'Kepustakaan Populer Gramedia', '208', '20230105101142.jpg', '75000', 'Damar Kambang menyingkap tirai kusam tradisi pernikahan Madura, di mana harkat dan martabat dijunjung tinggi melebihi segalanya. Cebbhing, gadis 14 tahun dari Desa Karang Penang, menjadi tumbal tradisi pernikahan itu. la terjebak dalam pergulatan hidup yang disebabkan oleh keputusan-keputusan sepiha', '2020-06-09', '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `id_cus` int(11) NOT NULL,
  `nama_cus` varchar(40) NOT NULL,
  `email_cus` varchar(40) NOT NULL,
  `password_cus` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`id_cus`, `nama_cus`, `email_cus`, `password_cus`) VALUES
(15, 'Deni Irawan', 'denyirawan341@gmail.com', '12345678');

-- --------------------------------------------------------

--
-- Struktur dari tabel `katalog`
--

CREATE TABLE `katalog` (
  `id_katalog` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `katalog` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `katalog`
--

INSERT INTO `katalog` (`id_katalog`, `id_kategori`, `katalog`) VALUES
(2, 3, 'Novel'),
(5, 1, 'Sains'),
(6, 1, 'Sastra'),
(7, 5, 'Komputer & Teknologi'),
(8, 5, 'Pertanian');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`) VALUES
(1, 'Dewasa'),
(2, 'Anak'),
(3, 'Remaja'),
(4, 'Pendidikan'),
(5, 'Umum');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keranjang`
--

CREATE TABLE `keranjang` (
  `id_keranjang` int(11) NOT NULL,
  `kode_beli` varchar(100) NOT NULL,
  `id_cus` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `qty` varchar(5) NOT NULL,
  `harga` varchar(12) NOT NULL,
  `total_harga` varchar(12) NOT NULL,
  `total_bayar` varchar(20) NOT NULL,
  `qty_total` varchar(10) NOT NULL,
  `status_beli` enum('order','lunas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian`
--

CREATE TABLE `pembelian` (
  `id_beli` int(11) NOT NULL,
  `kode_beli` varchar(100) NOT NULL,
  `id_cus` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `qty` varchar(10) NOT NULL,
  `harga` varchar(15) NOT NULL,
  `total_harga` varchar(15) NOT NULL,
  `total_bayar` varchar(15) NOT NULL,
  `qty_total` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembelian`
--

INSERT INTO `pembelian` (`id_beli`, `kode_beli`, `id_cus`, `id_buku`, `qty`, `harga`, `total_harga`, `total_bayar`, `qty_total`) VALUES
(1, '8923', 15, 8, '1', '93000', '93000', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `provinsi`
--

CREATE TABLE `provinsi` (
  `id_provinsi` int(11) NOT NULL,
  `provinsi` varchar(30) NOT NULL,
  `tarif` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `provinsi`
--

INSERT INTO `provinsi` (`id_provinsi`, `provinsi`, `tarif`) VALUES
(1, 'Jawa Timur', '11000'),
(2, 'Jawa Tengah', '12500'),
(3, 'Jawa Barat', '18000'),
(4, 'Kalimantan Barat', '48500');

-- --------------------------------------------------------

--
-- Struktur dari tabel `selesai`
--

CREATE TABLE `selesai` (
  `kode_beli` varchar(100) NOT NULL,
  `id_cus` int(11) NOT NULL,
  `qty_total` varchar(10) NOT NULL,
  `bayar` varchar(15) NOT NULL,
  `total_bayar` varchar(15) NOT NULL,
  `tgl_order` text NOT NULL,
  `status_beli` enum('order','lunas') NOT NULL,
  `status_pengiriman` enum('belum dikirim','dikirim','diterima') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `selesai`
--

INSERT INTO `selesai` (`kode_beli`, `id_cus`, `qty_total`, `bayar`, `total_bayar`, `tgl_order`, `status_beli`, `status_pengiriman`) VALUES
('8923', 15, '', '', '101923', '2023-01-05', 'order', 'belum dikirim');

-- --------------------------------------------------------

--
-- Struktur dari tabel `stok`
--

CREATE TABLE `stok` (
  `id_stok` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `stok` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `stok`
--

INSERT INTO `stok` (`id_stok`, `id_buku`, `stok`) VALUES
(7, 7, '10'),
(8, 16, '10'),
(9, 9, '10'),
(10, 12, '10'),
(11, 11, '10'),
(12, 8, '9'),
(13, 10, '10'),
(14, 13, '10'),
(15, 14, '10'),
(16, 15, '10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `superuser`
--

CREATE TABLE `superuser` (
  `id_su` int(11) NOT NULL,
  `nama_su` varchar(40) NOT NULL,
  `email_su` varchar(40) NOT NULL,
  `password_su` varchar(40) NOT NULL,
  `level` enum('owner','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `superuser`
--

INSERT INTO `superuser` (`id_su`, `nama_su`, `email_su`, `password_su`, `level`) VALUES
(1, 'Serlyana', 'owner@mail.com', 'owner', 'owner'),
(2, 'Deni Sumaker', 'admin@mail.com', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tujuan`
--

CREATE TABLE `tujuan` (
  `id_tujuan` int(11) NOT NULL,
  `kode_beli` varchar(110) NOT NULL,
  `nama_penerima` varchar(50) NOT NULL,
  `provinsi` varchar(30) NOT NULL,
  `kabupaten` varchar(25) NOT NULL,
  `kecamatan` varchar(25) NOT NULL,
  `kode_pos` varchar(5) NOT NULL,
  `desa` varchar(25) NOT NULL,
  `rw` varchar(3) NOT NULL,
  `rt` varchar(3) NOT NULL,
  `no_rumah` varchar(5) NOT NULL,
  `no_telp` varchar(12) NOT NULL,
  `tarif` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tujuan`
--

INSERT INTO `tujuan` (`id_tujuan`, `kode_beli`, `nama_penerima`, `provinsi`, `kabupaten`, `kecamatan`, `kode_pos`, `desa`, `rw`, `rt`, `no_rumah`, `no_telp`, `tarif`) VALUES
(1, '2994', 'Atokillah', 'Jawa Tengah', 'xx', 'xxx', 'xxxx', 'xxxxx', '5', '6', '32', '082453456754', '12500'),
(2, '10472', 'Fulan', 'Jawa Tengah', 'xx', 'xxxx', 'xxxxx', 'xxxxxx', '2', '5', '27', '081252258465', '12500'),
(3, '21628', 'Fulan bin Fulan', 'Jawa Barat', 'ciamis', 'ciamos', '87654', 'cibadut', '9', '6', '24', '081234567678', '18000'),
(4, '19201', 'Zaki', 'Jawa Tengah', 'xx', 'xxx', 'xxx', 'xx', '6', '7', '43', '08123456634', '12500'),
(5, '27569', 'zakia', 'Kalimantan Barat', 'x', 'x', 'x', 'x', '6', '7', '25', '085676554123', '48500'),
(6, '21866', 'siti zulaikha', 'Jawa Barat', 'xx', 'xx', 'xx', 'xx', '6', '4', '47', '086576542341', '18000'),
(7, '23131', 'Siti Zulaikha', 'Jawa Tengah', 'xxx', 'xx', 'xx', 'xx', '6', '5', '76', '085678765345', '12500'),
(8, '12786', 'bang boby', 'Jawa Tengah', 'x', 'x', 'x', 'x', '4', '2', '12', '085853480591', '12500'),
(9, '30870', 'AHMAD', 'Jawa Timur', 'nganjuk', 'baron', '64394', 'jekek', '09', '02', '22', '085853480591', '11000'),
(13, '14830', 'Widi', 'Jawa Barat', 'Jatiasih', 'Jatiasih', '17423', 'Jatiasih', '01', '15', '10', '085694203781', '18000'),
(14, '8923', 'Deni Irawan', 'Jawa Timur', 'Kab. Sleman', 'Depok', '55281', 'Kledokan', '1', '2', '23', '085783323182', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_cus`);

--
-- Indeks untuk tabel `katalog`
--
ALTER TABLE `katalog`
  ADD PRIMARY KEY (`id_katalog`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id_keranjang`);

--
-- Indeks untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id_beli`);

--
-- Indeks untuk tabel `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`id_provinsi`);

--
-- Indeks untuk tabel `selesai`
--
ALTER TABLE `selesai`
  ADD PRIMARY KEY (`kode_beli`);

--
-- Indeks untuk tabel `stok`
--
ALTER TABLE `stok`
  ADD PRIMARY KEY (`id_stok`);

--
-- Indeks untuk tabel `superuser`
--
ALTER TABLE `superuser`
  ADD PRIMARY KEY (`id_su`);

--
-- Indeks untuk tabel `tujuan`
--
ALTER TABLE `tujuan`
  ADD PRIMARY KEY (`id_tujuan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `customer`
--
ALTER TABLE `customer`
  MODIFY `id_cus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `katalog`
--
ALTER TABLE `katalog`
  MODIFY `id_katalog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id_keranjang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id_beli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `provinsi`
--
ALTER TABLE `provinsi`
  MODIFY `id_provinsi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `stok`
--
ALTER TABLE `stok`
  MODIFY `id_stok` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `superuser`
--
ALTER TABLE `superuser`
  MODIFY `id_su` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tujuan`
--
ALTER TABLE `tujuan`
  MODIFY `id_tujuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
