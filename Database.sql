CREATE TABLE IF NOT EXISTS `warga` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tempat_tanggal_lahir` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `alamat` text NOT NULL,
  `agama` varchar(20) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `file_lampiran` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
