CREATE TABLE `disposisi` (
  `id_disp` int(10) NOT NULL,
  `id_surat` varchar(10) NOT NULL,
  `tujuan` varchar(50) NOT NULL,
  `isi_disposisi` varchar(250) DEFAULT NULL,
  `sifat` varchar(50) NOT NULL,
  `batas_waktu` date NOT NULL,
  `catatan` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;





INSERT INTO `disposisi` (`id_disp`, `id_surat`, `tujuan`, `isi_disposisi`, `sifat`, `batas_waktu`, `catatan`) VALUES
(1, '28', 'kepala', 'isi', 'Segera', '2020-01-11', '123'),
(2, '29', 'sekretaris', 'ifjid', 'Penting', '2020-01-11', 'catacta'),
(3, '30', 'pdik', 'isis', 'Segera', '2020-01-18', 'catatn'),
(4, '31', 'rehsos', 'isi', 'Biasa', '2020-01-11', 'k'),
(5, '31', 'dayasos', 'sdfdhgjh', 'Segera', '2020-01-17', 'shkjk'),
(6, '25', 'dayasos', '', 'Segera', '2020-01-19', 'catatan');





CREATE TABLE `instansi` (
  `id` int(5) NOT NULL,
  `nama_kepala` varchar(100) DEFAULT NULL,
  `nip` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;





INSERT INTO `instansi` (`id`, `nama_kepala`, `nip`) VALUES
(1, 'Kepala Dinas', '2020');





CREATE TABLE `surat_keluar` (
  `id` int(10) NOT NULL,
  `no_agenda` varchar(10) NOT NULL,
  `no_surat` int(20) NOT NULL,
  `jenis_surat` varchar(30) NOT NULL,
  `tanggal_kirim` date NOT NULL,
  `tujuan` varchar(50) NOT NULL,
  `isi_ringkas` varchar(250) NOT NULL,
  `file` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;





INSERT INTO `surat_keluar` (`id`, `no_agenda`, `no_surat`, `jenis_surat`, `tanggal_kirim`, `tujuan`, `isi_ringkas`, `file`) VALUES
(1, '14012000', 91837, 'DInas', '2018-02-08', 'Kodir sudrajat', 'Pengetahuan tentang hari libur', 'Picture1.jpg'),
(2, '0102937465', 1818, 'Resmi', '2018-02-08', 'SMP Yapida', 'Pengumuman', 'IMG_20161004_170504.jpg'),
(3, '19264', 146, 'Dinas', '2018-02-09', 'Anggi Fitrahandika s.kom', 'Pemberitahuan hari libur', 'IMG_0031.JPG'),
(5, '654', 6135135, 'Resmi', '2018-02-10', 'Kantor Kementrian Perhutanan', 'Hari tatanen sedunia', 'IMG_0012.JPG'),
(6, '123', 456, 'nota dinas', '2020-01-10', 'kominfo', 'isi', 'cropped-logo-kominfo.png');





CREATE TABLE `surat_masuk` (
  `id` int(10) NOT NULL,
  `no_agenda` varchar(10) NOT NULL,
  `no_surat` varchar(20) NOT NULL,
  `jenis_surat` varchar(30) NOT NULL,
  `tanggal_surat` date NOT NULL,
  `tanggal_terima` date NOT NULL,
  `asal_surat` varchar(50) NOT NULL,
  `isi_ringkas` varchar(100) NOT NULL,
  `file` varchar(50) NOT NULL,
  `user` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;





INSERT INTO `surat_masuk` (`id`, `no_agenda`, `no_surat`, `jenis_surat`, `tanggal_surat`, `tanggal_terima`, `asal_surat`, `isi_ringkas`, `file`, `user`) VALUES
(25, '38912', '363', 'Resmi', '2018-02-19', '2018-02-19', 'Kantor kementrian', 'bla bla bla', 'Ada sebuah perusahaan software house akan membuah ', ''),
(26, '875', '765', 'Resmi', '2018-02-28', '2018-02-28', 'Kantor kementrian ', 'isi', '7-2-server-picture.png', 'Administrator'),
(27, '1324354576', '2435456', '23456', '2020-01-09', '2020-01-09', 'sdfghj', 'dgfhghbnm', 'cropped-logo-kominfo.png', 'Administrator'),
(28, '12', '12', 'Undangan', '2020-01-10', '2020-01-09', 'kominfo', 'tes', 'cropped-logo-kominfo.png', 'Administrator'),
(29, '54667', '4657687', 'surat', '2020-01-10', '2020-01-10', 'banjarmasin', 'isi', 'logo.gif', 'Administrator'),
(30, '12', '123', 'surat', '2020-01-11', '2020-01-10', 'TEKNIk', 'rtj', 'logo.jpg', 'Administrator'),
(31, '133456', '12345', 'resmi', '2020-01-11', '2020-01-10', 'UNLAM', 'ringkas', 'user.png', 'Administrator'),
(32, '1', '1', 'uj', '2020-01-10', '2020-01-10', 'jhkm', 'sd', 'user5.png', 'Administrator'),
(33, '9', '2', 'nota dinas', '2020-01-10', '2020-01-22', 'banjarmasin', 'jnkn', '1541863819660.jpg', 'Administrator');





CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `level` enum('admin','user') NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `foto` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;





INSERT INTO `user` (`id`, `username`, `password`, `fullname`, `level`, `jenis_kelamin`, `foto`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator', 'admin', 'Laki Laki', 'logo.gif');








ALTER TABLE `disposisi`
  ADD PRIMARY KEY (`id_disp`);




ALTER TABLE `instansi`
  ADD PRIMARY KEY (`id`);




ALTER TABLE `surat_keluar`
  ADD PRIMARY KEY (`id`);




ALTER TABLE `surat_masuk`
  ADD PRIMARY KEY (`id`);




ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);








ALTER TABLE `disposisi`
  MODIFY `id_disp` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;




ALTER TABLE `instansi`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;




ALTER TABLE `surat_keluar`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;




ALTER TABLE `surat_masuk`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;




ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;