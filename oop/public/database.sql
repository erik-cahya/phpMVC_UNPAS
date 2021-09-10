
-- SHOW CREATE table jabatan
CREATE TABLE `jabatan` (
  `id_jabatan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_jabatan` varchar(50) DEFAULT NULL,
  `gaji_tunjangan` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id_jabatan`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4

-- SHOW CREATE table pegawai
CREATE TABLE `pegawai` (
  `nik` int(11) NOT NULL,
  `id_jabatan` int(11) NOT NULL,
  `nama_pegawai` varchar(100) DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` varchar(10) DEFAULT NULL,
  `no_hp` varchar(15) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `lulusan` varchar(50) DEFAULT NULL,
  `skill` varchar(100) DEFAULT NULL,
  `fb_links` varchar(250) DEFAULT NULL,
  `ig_links` varchar(250) DEFAULT NULL,
  `linked_links` varchar(250) DEFAULT NULL,
  `gambar` varchar(250) DEFAULT NULL,
  `level` int(11) NOT NULL,

  PRIMARY KEY (`nik`),
  KEY `pegawai` (`id_jabatan`),
  CONSTRAINT `pegawai` FOREIGN KEY (`id_jabatan`) REFERENCES `jabatan` (`id_jabatan`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4

-- SHOW CREATE table absensi
CREATE TABLE `absensi` (
  `id_absensi` int(11) NOT NULL AUTO_INCREMENT,
  `nik` int(11) DEFAULT NULL,
  `waktu` time DEFAULT NULL,
  `tanggal` date NOT NULL,
  `status` int(11) DEFAULT NULL,

  PRIMARY KEY (`id_absensi`),
  KEY `absensi` (`nik`),
  CONSTRAINT `absensi` FOREIGN KEY (`nik`) REFERENCES `pegawai` (`nik`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=utf8mb4

-- SHOW CREATE table cuti
CREATE TABLE `cuti` (
  `id_cuti` int(11) NOT NULL AUTO_INCREMENT,
  `nik` int(11) DEFAULT NULL,
  `mulai_cuti` date DEFAULT NULL,
  `selesai_cuti` date DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,

  PRIMARY KEY (`id_cuti`),
  KEY `cuti` (`nik`),
  CONSTRAINT `cuti` FOREIGN KEY (`nik`) REFERENCES `pegawai` (`nik`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4


-- SHOW CREATE table users
CREATE TABLE `users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nik` int(11) NOT NULL,
  `password` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,

  PRIMARY KEY (`id_user`),
  KEY `users` (`nik`),
  CONSTRAINT `users` FOREIGN KEY (`nik`) REFERENCES `pegawai` (`nik`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4
