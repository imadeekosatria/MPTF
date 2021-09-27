-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Sep 2021 pada 02.38
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_resep`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `resep`
--

CREATE TABLE `resep` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `alat` text NOT NULL,
  `petunjuk` text NOT NULL,
  `kategori` enum('makanan','minuman') NOT NULL,
  `cover` varchar(255) NOT NULL,
  `rating` int(11) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `resep`
--

INSERT INTO `resep` (`id`, `judul`, `alat`, `petunjuk`, `kategori`, `cover`, `rating`, `time`) VALUES
(1, 'Bebek panggang kemangi', '1 ekor bebek\r\n\r\nBahan A:\r\n	- Jeruk nipis\r\n	- 3 Bawang putih\r\n	- Jahe\r\n\r\nBahan B:\r\n	- 6 bamer\r\n	- 4 baput\r\n	- 8 cabe merah besar\r\n	- seibu jari Laos\r\n	- sedikit Kunir\r\n	- sedikit Jahe\r\n	- 2 Kemiri\r\n	- Daun jeruk\r\n	- Daun salam\r\n	- Serai\r\n	- Asem\r\n	- Garam\r\n	- Gula putih\r\n	- Gula merah\r\n	- Penyedap rasa\r\n	- Kemangi', '1. Lumuri bebek yg sudah dipotong dengan air jeruk diamkan 15 menit\r\n2. Bersihkan kembali bebek yg sudah dilumuri jeruk. Lalu rebus di air mendidih dengan bumbu bahan A dihaluskan...ungkep selama 1-2 jam\r\n3. Haluskan bahan B kecuali daun jeruk. Daun salam, asem dan serai...diblender aku y mak, pakai minyak ngeblendernya ya bukan air\r\n4. Lalu tumis bumbu yg sudah dihaluskan, masukkan daun salam, daun jeruk, asem, gula putih, gula merah, garam, penyedap rasa dan terakhir kemangi...tes rasa ya\r\n5. Campur bumbu yg sudah ditumis dengan daging bebek yg sudah diungkep\r\n6. Panggang di oven/ di panggangan bisa\r\n\r\nTara....selesai deh', 'makanan', 'bebek_panggang_kemangi.webp', 4, '2021-09-11 20:28:17'),
(2, 'Kepiting Saos Padang', '4 ekor kepiting\r\n\r\nBumbu halus :\r\n	- 10 siung bawang merah\r\n	- 10 siung bawang putih\r\n	- 20 batang cabe merah\r\n	- 2 ruas jahe\r\n	- 5 bh kemiri\r\n	- 1 sdt kunyit bubuk\r\n\r\nDaun pelengkap :\r\n	- 4 batang daun bawang\r\n	- 4 lembar daun jeruk\r\n	- 4 lembar daun salam\r\n	- 2 bh bawang bombay\r\n	- 1000 ml air\r\n	- 2 sdm gula pasir\r\n	- 1 sdm garam\r\n	- 1 sdt merica\r\n	- 1 sdm kaldu ayam bubuk\r\n	- secukupnya Saos tiram\r\n	- secukupnya Saos tomat\r\n	- secukupnya Saos cabe\r\n\r\nTopping :\r\n	-Jagung manis rebus', '1. Rebus kepiting yang sudah dibersihkan selama 10 menit, jangan lupa rebusan dikasih garam 1 sdt\r\n2. Bumbu halus diblend sampai halus, kemudian tumis sampai harum..\r\n3. Tambahkan daun pelengkap kemudian aduk merata..\r\n4. Tambahkan 1000 ml air..\r\n5. Masukkan pelengkap saos dan 1 sdt merica dan 2 sdm gula pasir..\r\n6. Masukkan kaldu ayam bubuk, dan aduk merata tunggu sampai mendidih..\r\n7. Setelah mendidih masukkan kepiting, aduk pelan² sampai kepiting semua tenggelam\r\n8. Tunggu sampai kuah meresep dan berkurang, masukkan jagung yang sudab direbus sebelumnya..\r\n9. Cicip rasa, dan siap disajikan..', 'makanan', 'kepiting-saos-padang.webp', 4, '2021-09-11 20:28:17'),
(3, 'Ayam bakar santan', '1 ekor ayam, dipotong 4 atau sesuai selera\r\n8 siung bawang merah\r\n5 siung bawang putih\r\n10 bh cabe merah keriting\r\n15 bh cabe rawit merah\r\n1/2 ruas jempol kencur\r\n5 bh kemiri\r\n1 sdt terasi\r\n1 sdm gula pasir/ gula merah\r\n1 sdt garam\r\n250 ml santan encer', '1. Cuci bersih ayam, bumbuin dengan garam, merica dan 2 sdm air jeruk nipis, aduk rata, sisihkan, biarkan selama 30 mnt disuhu ruang\r\n2. Haluskan bawang merah, bawang putih, cabe keriting, cabe rawit, kencur, kemiri\r\n3. Panaskan 5 sdm minyak goreng, tumis bumbu yg sudah dihaluskan hingga harum, kemudian tambahkan gula, garam dan terasi, aduk rata\r\n4. Tuangkan santan encer, aduk-aduk bumbu, masak hingga santan setengah mendidih, masukkan ayam, aduk rata, masak terus hingga ayam empuk dan santan habis, matikan kompor.\r\n5. Bakar ayam diteflon atau tempat pembakaran lainnya. Bakar menggunakan arang lbh nikmat. Hidangkan ayam bakar dengan nasi hangat dan lalapan. Selamat menikmati.\r\n', 'makanan', 'ayam-bakar-santan.webp', 3, '2021-09-11 20:28:17'),
(4, 'Kerang dara kuah pedas', '500 gram kerang dara\r\n3 lembar daun jeruk\r\n1 serai geprek\r\n3 cm lengkuas di geprek\r\n2 batang daun bawang\r\n4 sdm minyak goreng\r\n400 ml air\r\nGula pasir\r\nGaram\r\nLada bubuk\r\n\r\nBumbu halus:\r\n	- 8 cabe merah keriting\r\n	- 10 cabe rawit\r\n	- 7 bawang merah\r\n	- 3 bawang putih\r\n	- 4 cm kunyit\r\n	- 2 cm jahe\r\n	- 1/2 sdm ketumbar', '1. Tumis bumbu halus sampai harum\r\n2. Masukkan daun jeruk, serai dan lengkuas yg sudah digeprek\r\n3. Masukan garam,gula, dan lada sesuai selera\r\n4. Tambahkan air dan masukan kerang dara nya, sesekali di aduk dan masak hingga air menyusut menyerap ke dalam kerang\r\n5. Setelah hampir matang jangan lupa cek rasa nya, kalo udah pas masukan irisan daun bawang\r\n6. Selesai !', 'makanan', 'kerang-dara-kuah-pedas.webp', 5, '2021-09-11 20:31:36'),
(5, 'Bakso LoHoa', '400 gar ayam fillet\r\n4 sdm tepung tapioka\r\n2 btr putih telur\r\n4 siung bawang putih haluskan\r\n1/2 sdt merica butir haluskan\r\n1 sdm kaldu jamur\r\n1 sdm bawang goreng\r\n1 sdm garam(sesuai selera)\r\n1 sdm minyak wijen\r\n1 buah wortel potong dadu kecil²\r\n3 lembar jamur kuping iris kecil²\r\n\r\nBahan Kuah:\r\n	- 2 liter air kaldu\r\n	- 2 sdm bawang goreng haluskan\r\n	- 1 sdm bawang putih haluskan\r\n	- 1 sdt merica bubuk\r\n	- 1 sdm kaldu jamur\r\n	- secukupnya Garam\r\n\r\nPelengkap :\r\n	- Bihun jagung rebus\r\n	- Sawi rebus\r\n	- Jamur kuping', '1. Masukan daging ayam yg sudah dipotong² kedalam food procecor,lalu tambahkan garam,kaldu jamur,bawang goreng,bawang putih dan lada giling hingga halus\r\n2. Lalu tambahkan putih telur giling rata lalu masukan tepung tapioka giling lagi hingga rata\r\n3. Masukan jamur kuping dan wortel giling hingga tercampur rata dengan adonan\r\n4. Panaskan air tidak perlu sampai mendidih lalu matikan api,be.tuk adoanan baksienggunakan tangan atau sendok masukan kedalam air panas\r\n5. Setelah selesai nyalakan api sedang rebus bakso hingga matang/mengapung\r\n6. Kuah ; rebus air kaldu masukan semua bumbu halus kmasak hingga mendidih koreksi rasa\r\n7. Rebus bibun dan sayuran, Sajikan bakso lohoa beserta pelengkapmya', 'makanan', 'bakso-lohoa.webp', 3, '2021-09-15 11:20:47'),
(6, 'Resep Bebek Bacem Bakar Kecap', '1 ekor bebek muda (potong menjadi 6 bagian, cuci bersih, beri perasan jeruk nipis, tiriskan)\r\n500 ml air kelapa\r\n5 lembar daun pandan\r\n5 sendok makan minyak goreng\r\n100 gram gula merah\r\n2 sendok makan kecap manis\r\n4 cm jahe (parut kasar)\r\n2 batang sereh\r\n2 bungkus KOBE Bumbu Kalasan @ 35 gr', '1. Masak bebek dengan air kelapa dan daun pandan hingga empuk.\r\n2. Tuang bebek ke dalam wajan. Tambahkan minyak goreng, gula merah dan kecap manis. Masukkan jahe, sereh dan 2 bungkus KOBE Bumbu Kalasan.\r\n3. Masak hingga bumbu meresep dan air asat. Angkat.\r\n4. Akar bebek sambil diolesi sisa bumbu sampai berwarna kecoklatan.\r\n5. Bebek Bacem Bakar Kecap siap disajikan.', 'makanan', 'resep-bebek-bacem-bakar-kecap.webp', 4, '2021-09-11 20:38:27'),
(7, 'Sate Kambing Ala Kudus', '500 gram daging kambing\r\nTusuk sate 25 biji\r\n5 siung bawang merah\r\n1 butir jeruk nipis\r\nsecukupnya Merica\r\nsecukupnya Kecap manis\r\n2 siung bawang putih\r\n3 ons tomat merah\r\n10 buah cabe rawit\r\n\r\nCoba Update', '1. Iris dadu daging kambing. Tusuk 6 irisan\r\n2. Bawang putih, merica di haluskan\r\n3. Bakar daging kambing.\r\n4. Sedikit matang daging olesi kecap manis.\r\n5. Iris tomat\r\n6. Iris bawang kasar merah merah\r\n7. Cabe rawit di rebus dan dihaluskan\r\n8. Haluskan bawang putih dan merica\r\n9. Campur bumbu halus, cabe rawit halus dan tomat dengan kecap manis\r\n10. Sajikan daging tusuk dalam piring taburi bawang merah mentah, siram dengan kecap manis\r\n11. Kasih perasan jerup nipis.\r\n\r\nCoba Update', 'makanan', 'sate-kambing-ala-kota-kudus.webp', 5, '2021-09-14 21:10:53'),
(8, 'Rendang Ayam', '5 potong Ayam dari 1/2 ekor ayam\r\n450 ml Air\r\n65 ml Santan Instan\r\nSegenggam Kelapa Parut\r\n1 batang Serai, geprek\r\n2 lembar Daun Jeruk\r\n2 lembar Daun Salam\r\n1 buah Asam Kandis\r\nSecukupnya Garam dan bumbu penyedap\r\n1 buah Bunga Lawang, kapulaga, cengkeh, dan kayu manis\r\n\r\nBumbu yang dihaluskan :\r\n9 buah Cabai Merah Keriting (buang bijinya)\r\n1 buah Cabai Rawit Merah\r\n6 siung Bawang Merah\r\n3 siung Bawang Putih\r\n1/2 sdt Ketumbar\r\n1/2 sdt Lada bubuk\r\n3 butir Kemiri Sangrai\r\n1 ruas Lengkuas\r\n1/2 ruas Jahe\r\n\r\nCOba Update', '1. Sangrai terlebih dahulu, kelapa parut sampai kecoklatan kemudian haluskan (tanpa air)\r\n2. Cuci bersih ayam, beri perasa air jeruk nipis diamkan 10 menit kemudian cuci kembali\r\n3. Tumis bumbu halus, sereh, daun jeruk, daun salam, daun kunyit, asam kandis, bunga lawang, cengkeh, kapulaga, dan kayu manis sampai harum dan mengeluarkan minyak\r\n4. Setelah itu masukkan ayam, aduk rata sampai berubah warna. Masukkan air dan santan\r\n5. Masukkan kelapa yg sudah disangrai dan dihaluskan, garam, dan bumbu penyedap, aduk rata. Masak sampai airnya menyusut dan bumbu terpisah dengan minyak\r\n\r\nCoba Update', 'makanan', 'rendang-ayam.webp', 4, '2021-09-15 11:20:24'),
(13, 'Es Kopi Bunga Telang', '40 kuntum bunga telang segar\r\n300 ml air\r\n300 gram gula pasir\r\n150 ml susu uht full cream\r\n2 sachet nescafe classic\r\n150 ml air mendidih\r\nEs batu', '1. Rebus bahan sirup telangnya hingga mendidih dan gula larut (sebentar saja). Biarkan hingga dingin. Saring sambil tekan tekan ampas bunganya. Ambil kisaran 50 ml, sisanya bisa disimpan di wadah tertutup dan ditaruh di kulkas.\r\n2. Membuat es kopi telang : Siapkan bahan bahannya. Seduh nescafe dengan air panas.\r\n3. Siapkan gelas. Beri sirup telang. Masukkan es batu hingga penuh. Perlahan lahan masukkan susu uht (bisa dengan bantuan punggung sendok). Lalu masukkan seduhan kopi. Sajikan. Jangan lupa diaduk dulu. Segarrr, enak dinikmati dikala cuaca sedang panas panasnya 😀', 'minuman', 'es-kopi-bunga-telang.webp', 5, '2021-09-12 07:16:45'),
(15, 'Es Cincau Susu', 'Bahan Cincau KW: \r\n	- 1 sachet bubuk cincau (aslinya pk nutrijell)\r\n	- 60 gr gula pasir\r\n	- 600 ml air\r\nsecukupnya susu UHT dingin\r\nEs batu (skip)\r\nsesuai selera SKM putih', '1. Siapkan bahan nya\r\n2. Masukkan semua bahan dalam panci, masak sampai mendidih, sesekali diaduk.\r\n3. Setelah mendidih hilangkan uap panasnya lalu tuang dalam cetakan. Setelah dingin simpan dalam kulkas.\r\n4. Setelah set cincau kw bisa di potong2\r\n5. Masukkan cincau dalam gelas\r\n6. Masukkan susu UHT dingin (kalau mau di tambah es batu boleh, disini sy pake susu UHT dingin jadi udh ga di tambah Es batu lagi)\r\n7. Masukkan SKM, aduk rata di icip yaa suka manis atau ngga.\r\n8. Es cincau susu siap di sajikan. Seger banget', 'minuman', 'es-cincau-susu.webp', 4, '2021-09-12 07:25:20'),
(16, 'Es Jus Mangga Kuweni', '2 buah mangga kuweni matang (aslinya 1 buah)\r\n4 sdm Gula pasir (aslinya 2 sdm)\r\nSesuai selera susu kental manis\r\nSesuai selera es batu\r\n350 ml air dingin (aslinya 150 ml)\r\nGarnish : daun mint dan bunga krisan', '1. Kupas mangga kuweni, cuci bersih kemudian potong dadu\r\n2. Masukkan potongan kuweni ke blender lalu beri air, skm dan gula pasir. Kemudian haluskan (jika kurang encer tambahkan air sesuai selera).\r\n3. Sajikan dengan es batu. Hias dengan daun mint dan bunga krisan. Siap dinikmati. Selamat mencoba💜', 'minuman', 'es-jus-mangga-kuweni.webp', 4, '2021-09-12 07:28:20'),
(17, 'Es Campur', 'Buah pir\r\nBuah sawo\r\nBuah pepaya\r\nBuah nangka\r\nCincau hitam\r\nNata de coco\r\nSirup cocopandan\r\nSkm\r\nAir mineral/matang\r\nSemua bahan dengan takaran sesuai selera ya', '1. Siapkan bahan-bahan. Potong-potong buah, cincau. Masukkan ke dalam wadah.\r\n2. Tambahkan air, sirup cocopandan dan skm. Aduk rata. Tes rasa. Manisnya disesuaikan selera ya.\r\n3. Es campur siap dinikmati. Bisa ditambahkan es batu. Saya hanya dimasukkan ke kulkas karena buatnya pagi diminumnya siang.', 'minuman', 'es-campur.webp', 3, '2021-09-12 11:29:23'),
(18, 'Es Delima Susu Kelapa', '* 1 bh plum (bisa diganti apel)\r\n* 1 bh kiwi\r\n* 1 bh delima\r\n* Susu rasa kelapa (coconut delight milk)\r\n* Whipcream (optional)\r\n* Es batu\r\n* Daun mint', '1. Cuci bersih semua buah. Kupas kiwi, potong2. Belah delima, ambil bijinya. Buah plum dipotong2 juga\r\n2. Kocok sebentar susu kelapa. Saya tambahkan whipcream sisa tp dikocok sdh gak jd krim lg, cuma rasanya aj jd lbh creamy.\r\n3. Tata potongan buah secukupnya di gelas saji. Tuang susu yg sdh dikocok. Beri tambahan es batu spy awet dinginnya. Terakhir, hiasi daun mint. Hmm.. uenak poll😍 rasanya manis, tp gak giung krn ada asem2 segernya dr kiwi dan plum.', 'minuman', 'es-delima-susu-kelapa.webp', 5, '2021-09-12 11:32:17'),
(20, 'Es Kopi susu gula aren coklat', '* 4 sdt Kopi bubuk\r\n* 100 ml susu full cream\r\n* 3 buah wafer coklat (astor)', '1. Siapkan semua bahan - bahan. Selanjutnya hancurkan coklat astor.\r\n2. Setelah dihancurkan coklat astornya. Masukan serbuknya kedalam gelas. Sebelumnya bubuk kopi, gula aren dan susu full cream dicampur dan diaduk secara merata.\r\n3. Jika sudah dicampur, tambahkan sedikit air dan es secukupnya lalu aduk sampai merata beserta coklat astornya. Tambahkan topping kopi atau gula aren hias sekreatif mungkin ya. Selamat mencoba.', 'minuman', 'es-kopi-susu-gula-aren-coklat.webp', 4, '2021-09-12 12:32:56'),
(21, 'Ice Vanila Regal Milk', '* 3 keping Regal\r\n* 1 sdm susu kental manis putih\r\n* 50 cc air\r\n* 150 cc Susu indomilk plain\r\n* 1 sdt Vanila essence\r\n* Secukupnya Es batu', '1. Persiapkan bahan2nya. Remukan regal dlm mangkok\r\n2. Dalam gelas masukan susu kental manis beri sedikit air lalu aduk2 setelah itu masukan es batu,tambahkan vanila lalu masukan susu plain terakhir taburi dgn remukan regal\r\n3. Sajikan', 'minuman', 'ice-vanila-regal-milk.webp', 3, '2021-09-12 12:32:56'),
(22, 'Es Tomat Campur Segar', '* 1 buah tomat\r\n* 1 sdt chia seed, di rendam air matang\r\n* 2 sdm gula pasir\r\n* 200 ml air matang', '1. Buat air gula di dlm gelas, aduk rata masukkan es batu, tomat, nata decoco, chia seed\r\n2. Aduk rata dan siap di nikmati', 'minuman', 'es-tomat-campur-segar.webp', 4, '2021-09-12 12:34:46'),
(24, 'Korean Strawberry Milk', '* Secukupnya es batu\r\n* Secukupnya susu uht\r\n* 2 sdm selai stroberi (boleh pakai homemade)', '1. Siapkan gelas\r\n2. Beri 2 - 3 sdm selai stroberi\r\n3. Tambhakn es batu yg banyak lalu tuang susu cair. \r\n4. Sajkan', 'minuman', 'korean-strawberry-milk.webp', 2, '2021-09-15 11:23:57'),
(40, 'COba Tambah', 'kskskasa', 'slaalskadsd', 'makanan', 'undraw_under_construction_46pa.svg', 1, '2021-09-15 11:23:19');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `resep`
--
ALTER TABLE `resep`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `resep`
--
ALTER TABLE `resep`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
