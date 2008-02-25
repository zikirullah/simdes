-- phpMyAdmin SQL Dump
-- version 2.10.2
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Feb 24, 2008 at 09:21 AM
-- Server version: 5.0.45
-- PHP Version: 5.2.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `simdes_demo`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `m_agama`
-- 

CREATE TABLE `m_agama` (
  `k_agama` int(11) NOT NULL auto_increment,
  `singkat` varchar(20) collate latin1_general_ci NOT NULL,
  `content` varchar(255) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`k_agama`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=6 ;

-- 
-- Dumping data for table `m_agama`
-- 

INSERT INTO `m_agama` (`k_agama`, `singkat`, `content`) VALUES 
(1, 'Islam', 'Islam'),
(2, 'Hindu', 'Hindu'),
(3, 'Kristen', 'Kristen'),
(4, 'Kristen Katolik', 'Kristen Katolik'),
(5, 'Budha', 'Budha');

-- --------------------------------------------------------

-- 
-- Table structure for table `m_dusun`
-- 

CREATE TABLE `m_dusun` (
  `k_dusun` int(11) NOT NULL auto_increment,
  `singkat` varchar(50) collate latin1_general_ci default NULL,
  `content` varchar(255) collate latin1_general_ci default NULL,
  PRIMARY KEY  (`k_dusun`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=4 ;

-- 
-- Dumping data for table `m_dusun`
-- 

INSERT INTO `m_dusun` (`k_dusun`, `singkat`, `content`) VALUES 
(1, NULL, 'Selokajang'),
(2, NULL, 'Maron'),
(3, NULL, 'Ngluweng');

-- --------------------------------------------------------

-- 
-- Table structure for table `m_kawin`
-- 

CREATE TABLE `m_kawin` (
  `k_kawin` int(11) NOT NULL auto_increment,
  `singkat` varchar(50) collate latin1_general_ci NOT NULL,
  `content` varchar(255) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`k_kawin`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=4 ;

-- 
-- Dumping data for table `m_kawin`
-- 

INSERT INTO `m_kawin` (`k_kawin`, `singkat`, `content`) VALUES 
(1, '', 'Tidak kawin'),
(2, '', 'Kawin'),
(3, '', 'Janda/duda');

-- --------------------------------------------------------

-- 
-- Table structure for table `m_kerja`
-- 

CREATE TABLE `m_kerja` (
  `k_kerja` int(11) NOT NULL auto_increment,
  `singkat` varchar(50) collate latin1_general_ci NOT NULL,
  `content` varchar(255) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`k_kerja`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=5 ;

-- 
-- Dumping data for table `m_kerja`
-- 

INSERT INTO `m_kerja` (`k_kerja`, `singkat`, `content`) VALUES 
(1, 'Swasta', 'Swasta'),
(2, 'Petani', 'Petani'),
(3, 'PNS', 'Pegawai Negeri Sipil'),
(0, '', 'Lain-lain');

-- --------------------------------------------------------

-- 
-- Table structure for table `m_pendidikan`
-- 

CREATE TABLE `m_pendidikan` (
  `k_pendidikan` int(11) NOT NULL auto_increment,
  `singkat` varchar(50) collate latin1_general_ci default NULL,
  `content` varchar(255) collate latin1_general_ci default NULL,
  PRIMARY KEY  (`k_pendidikan`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=6 ;

-- 
-- Dumping data for table `m_pendidikan`
-- 

INSERT INTO `m_pendidikan` (`k_pendidikan`, `singkat`, `content`) VALUES 
(1, 'SD', 'SD'),
(2, 'SMP', 'SMP'),
(3, 'SMA', 'SMA'),
(4, 'PT', 'Perguruan Tinggi'),
(0, NULL, 'Lain-lain');

-- --------------------------------------------------------

-- 
-- Table structure for table `m_tipe`
-- 

CREATE TABLE `m_tipe` (
  `k_tipe` int(11) NOT NULL auto_increment,
  `singkat` varchar(50) collate latin1_general_ci NOT NULL,
  `content` varchar(255) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`k_tipe`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `m_tipe`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `m_warga`
-- 

CREATE TABLE `m_warga` (
  `k_warga` int(11) NOT NULL auto_increment,
  `singkat` varchar(20) collate latin1_general_ci NOT NULL,
  `content` varchar(255) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`k_warga`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=3 ;

-- 
-- Dumping data for table `m_warga`
-- 

INSERT INTO `m_warga` (`k_warga`, `singkat`, `content`) VALUES 
(1, 'WNI', 'Warga Negara Indonesia'),
(2, 'WNA', 'Warga Negara Asing');

-- --------------------------------------------------------

-- 
-- Table structure for table `penduduk`
-- 

CREATE TABLE `penduduk` (
  `id` int(11) NOT NULL auto_increment,
  `nik` varchar(25) collate latin1_general_ci default NULL,
  `no_ktp` varchar(50) collate latin1_general_ci default NULL,
  `nama` varchar(255) collate latin1_general_ci NOT NULL,
  `k_agama` int(11) default NULL,
  `k_kerja` int(11) default NULL,
  `pekerjaan` varchar(255) collate latin1_general_ci default NULL,
  `alamat` varchar(255) collate latin1_general_ci default NULL,
  `k_dusun` int(11) default NULL,
  `rt` int(11) default NULL,
  `rw` int(11) default NULL,
  `tempat_lahir` varchar(50) collate latin1_general_ci default NULL,
  `kelamin` varchar(1) collate latin1_general_ci default NULL,
  `k_warga` int(11) default NULL,
  `k_kawin` int(11) default NULL,
  `k_pendidikan` int(11) default NULL,
  `pendidikan` varchar(255) collate latin1_general_ci default NULL,
  `suku` varchar(50) collate latin1_general_ci default NULL,
  `tgl_lahir` date default NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `nik` (`nik`),
  KEY `no_ktp` (`no_ktp`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=17 ;

-- 
-- Dumping data for table `penduduk`
-- 

INSERT INTO `penduduk` (`id`, `nik`, `no_ktp`, `nama`, `k_agama`, `k_kerja`, `pekerjaan`, `alamat`, `k_dusun`, `rt`, `rw`, `tempat_lahir`, `kelamin`, `k_warga`, `k_kawin`, `k_pendidikan`, `pendidikan`, `suku`, `tgl_lahir`) VALUES 
(5, '2131231', '123123123', 'amir udin', 2, 3, '', 'jalan rsfs', 2, 3, 2, 'malang', 'L', 1, 3, 0, 'DSASDA', 'sunda', NULL),
(6, '5435345232', '12', 'sfsfsf', 1, 0, 'fdsfs', 'fsdf', 12, 23, 0, 'fsfs', 'P', 1, 1, 2, '', 'dsa', '2007-01-01'),
(10, '0410963041', '0410963041', 'Priyo Cahyadi', 1, 0, 'Programmer2an', 'embong anyar 2', 0, 2, 1, 'philadelphia', 'l', 1, 2, 0, '', 'indonesia', '1986-02-07'),
(11, '0410963042', '0410963041', 'Priyo Cahyadi', 1, 0, 'Programmer2an', 'embong anyar 2', 3, 2, 3, 'philadelphia', 'P', 2, 3, 3, '', 'indonesia', '1990-02-07'),
(12, '', '', 'hkh', 1, 1, '', '', 0, 0, 0, '', 'L', 1, 1, 0, '', '', '2004-01-01'),
(13, '4444', '34343', 'amier', 1, 2, '', 'fdffgdfgdfgfdg', 2, 2, 4, 'sdfsfs', 'L', 2, 2, 3, '', 'sfsdf', NULL),
(14, '1', '1', 'dsa', 2, 2, '', 'das', 1, 1, 1, 'dsa', 'P', 2, 2, 2, '', 'dsa', '2000-01-01');

-- --------------------------------------------------------

-- 
-- Table structure for table `surat`
-- 

CREATE TABLE `surat` (
  `id` int(11) NOT NULL auto_increment,
  `k_surat` int(11) NOT NULL,
  `no_surat` varchar(50) collate latin1_general_ci default NULL,
  `userid` varchar(50) collate latin1_general_ci NOT NULL,
  `tgl_buat` date NOT NULL,
  `content` text collate latin1_general_ci,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=12 ;

-- 
-- Dumping data for table `surat`
-- 

INSERT INTO `surat` (`id`, `k_surat`, `no_surat`, `userid`, `tgl_buat`, `content`) VALUES 
(2, 1, '324234', 'admin', '2008-02-23', '{"form":"C.02","noSurat":"324234","nama":"Priyo Cahyadi","umur":"2008","pekerjaan":"Programmer2an","kelas":"dsadas","noKTP":"0410963041","alamat":"embong anyar 2","keperluan":"sad","namaOrtu":"sad","umurOrtu":"sda","pekerjaanOrtu":"dsa","alamatOrtu":"sa","tglSurat":"sad","kades":"sad","next_x":"64","next_y":"9","next":"true","kSurat":"1","PHPSESSID":"522bc83bc7be624b27cb1ff54f5527fe"}'),
(3, 1, '3', '0', '2008-02-23', '{"form":"C.02","noSurat":"3","nama":"Priyo Cahyadi","umur":"1","kAgama":"1","pekerjaan":"Programmer2an","kelas":"fds","noKTP":"0410963041","alamat":"embong anyar 2","keperluan":"fds","namaOrtu":"fds","umurOrtu":"ds","kAgamaOrtu":"1","pekerjaanOrtu":"ds","alamatOrtu":"fds","tglSurat":"ds","kades":"fds","next_x":"45","next_y":"8","next":"true","kSurat":"1","PHPSESSID":"522bc83bc7be624b27cb1ff54f5527fe"}'),
(4, 1, 'dsa', '0', '2008-02-23', '{"form":"C.02","noSurat":"dsa","nama":"","umur":"","kAgama":"1","pekerjaan":"","kelas":"","noKTP":"","alamat":"","keperluan":"","namaOrtu":"","umurOrtu":"","kAgamaOrtu":"1","pekerjaanOrtu":"","alamatOrtu":"","tglSurat":"","kades":"","next_x":"51","next_y":"8","next":"true","kSurat":"1","PHPSESSID":"522bc83bc7be624b27cb1ff54f5527fe"}'),
(5, 1, '34', '0', '2008-02-23', '{"form":"C.02","noSurat":"34","nama":"dsad","umur":"dsa","kAgama":"1","pekerjaan":"dsa","kelas":"dsa","noKTP":"dsa","alamat":"dsa","keperluan":"","namaOrtu":"","umurOrtu":"","kAgamaOrtu":"1","pekerjaanOrtu":"","alamatOrtu":"","tglSurat":"","kades":"","next_x":"37","next_y":"9","next":"true","kSurat":"1","PHPSESSID":"79d6abe8d47fe825a8e40127e0afcdc7"}'),
(6, 1, '121/3213/2008', '0', '2008-02-23', '{"form":"C.02","noSurat":"121\\/3213\\/2008","nama":"Priyo Cahyadi","umur":"","kAgama":"1","sekolah":"","kelas":"","noKTP":"0410963041","alamat":"embong anyar 2","keperluan":"","namaOrtu":"","umurOrtu":"","kAgamaOrtu":"1","pekerjaanOrtu":"","alamatOrtu":"","tglSurat":"","kades":"","next_x":"0","next_y":"0","next":"true","kSurat":"1","PHPSESSID":"79d6abe8d47fe825a8e40127e0afcdc7"}'),
(7, 1, 'no surat', '0', '2008-02-23', '{"form":"C.02","noSurat":"no surat","nama":"Priyo Cahyadi","umur":"","kAgama":"1","sekolah":"","kelas":"","noKTP":"0410963041","alamat":"embong anyar 2","keperluan":"","namaOrtu":"","umurOrtu":"","kAgamaOrtu":"1","pekerjaanOrtu":"","alamatOrtu":"","tglSurat":"","kades":"","next_x":"0","next_y":"0","next":"true","kSurat":"1","PHPSESSID":"79d6abe8d47fe825a8e40127e0afcdc7"}'),
(8, 1, 'no surat', '0', '2008-02-23', '{"form":"C.02","noSurat":"no surat","nama":"Priyo Cahyadi","umur":"as","kAgama":"1","sekolah":"smu 5 selokajang","kelas":"4","noKTP":"0410963041","alamat":"embong anyar 2","keperluan":"untuk dibawa bawa","namaOrtu":"dsa","umurOrtu":"8","kAgamaOrtu":"2","pekerjaanOrtu":"dukun","alamatOrtu":"das","tglSurat":"10-10-08","kades":"SARJUNI BE","next_x":"47","next_y":"6","next":"true","kSurat":"1","PHPSESSID":"79d6abe8d47fe825a8e40127e0afcdc7"}'),
(9, 1, '10/DJD/KDSJ/2008', '0', '2008-02-23', '{"form":"C.02","noSurat":"10\\/DJD\\/KDSJ\\/2008","nama":"Priyo Cahyadi","umur":"20","kAgama":"1","sekolah":"SMU 5 SELOKAJANG","kelas":"10.1","noKTP":"0410963041","alamat":"embong anyar 2","keperluan":"Pindah sekolah dari yang lama ke sekolah baru","namaOrtu":"amir udin","umurOrtu":"45","kAgamaOrtu":"4","pekerjaanOrtu":"petani","alamatOrtu":"jalan rsfs","tglSurat":"20 Februari 2008","kades":"SARJUNI B.E","next":"true","kSurat":"1","PHPSESSID":"79d6abe8d47fe825a8e40127e0afcdc7"}'),
(10, 1, 'fdsjkhfsh', '0', '2008-02-23', '{"form":"C.02","noSurat":"fdsjkhfsh","nama":"Priyo Cahyadi","umur":"20","kAgama":"1","sekolah":"dsada","kelas":"hhh","noKTP":"h","alamat":"embong anyar 2h","keperluan":"h","namaOrtu":"h","umurOrtu":"h","kAgamaOrtu":"2","pekerjaanOrtu":"hh","alamatOrtu":"h","tglSurat":"h","kades":"h","next":"true","kSurat":"1","PHPSESSID":"79d6abe8d47fe825a8e40127e0afcdc7"}'),
(11, 2, '32424234234', 'admin', '2008-02-24', '{"form":"C.02","noSurat":"32424234234","tglSurat":"24 Feb 2008","kades":"Sarjuni, BE","nama":"Priyo Cahyadi","tempatLahir":"philadelphia","tglLahir":"07-02-1986","umur":"22","wargaNegara":"Warga Negara Indonesia","kAgama":"1","kKawin":"2","alamat":"embong anyar 2","pekerjaan":"Programmer2an","pendidikan":"Lain-lain","noKTP":"0410963041","desa":"fdsfsdf","kecamatan":"fdsfsdkl","kabupaten":";k;k","propinsi":"k;","dariTgl":"k;k","hinggaTgl":"k","alasan":";","jmlPengikut":"k;","pengikut_nama_1":"k;","pengikut_kelamin_1":"k","pengikut_kawin_1":"k;","pengikut_pendidikan_1":"k;k","pengikut_noKtp_1":";k","pengikut_ket_1":";k","pengikut_nama_2":";k","pengikut_kelamin_2":";k","pengikut_kawin_2":";k;","pengikut_pendidikan_2":"k;","pengikut_noKtp_2":"k;","pengikut_ket_2":"k;","pengikut_nama_3":"k;","pengikut_kelamin_3":"k;k;","pengikut_kawin_3":"k;","pengikut_pendidikan_3":"k;","pengikut_noKtp_3":"k","pengikut_ket_3":"k;","pengikut_nama_4":"k;","pengikut_kelamin_4":";","pengikut_kawin_4":"k;","pengikut_pendidikan_4":"k;","pengikut_noKtp_4":"k;","pengikut_ket_4":"k;","pengikut_nama_5":"k;kk","pengikut_kelamin_5":"k;","pengikut_kawin_5":"k","pengikut_pendidikan_5":";k","pengikut_noKtp_5":";k","pengikut_ket_5":";k","pengikut_nama_6":";k;","pengikut_kelamin_6":"","pengikut_kawin_6":"k;","pengikut_pendidikan_6":"k;","pengikut_noKtp_6":"k;k","pengikut_ket_6":";k","pengikut_nama_7":";k","pengikut_kelamin_7":";k","pengikut_kawin_7":";k;","pengikut_pendidikan_7":"k;","pengikut_noKtp_7":"k;","pengikut_ket_7":"k;","pengikut_nama_8":"k;","pengikut_kelamin_8":"k;k","pengikut_kawin_8":";k","pengikut_pendidikan_8":";k","pengikut_noKtp_8":";k","pengikut_ket_8":";k","next":"true","kSurat":"2","PHPSESSID":"79d6abe8d47fe825a8e40127e0afcdc7"}');

-- --------------------------------------------------------

-- 
-- Table structure for table `user`
-- 

CREATE TABLE `user` (
  `userid` int(11) NOT NULL auto_increment,
  `username` varchar(30) collate latin1_general_ci NOT NULL,
  `password` varchar(40) collate latin1_general_ci NOT NULL,
  `nama` varchar(50) collate latin1_general_ci NOT NULL,
  `is_admin` int(11) NOT NULL default '0',
  PRIMARY KEY  (`userid`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=5 ;

-- 
-- Dumping data for table `user`
-- 

INSERT INTO `user` (`userid`, `username`, `password`, `nama`, `is_admin`) VALUES 
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin keren', 1),
(4, 'operator', '4b583376b2767b923c3e1da60d10de59', 'Operator', 0);
