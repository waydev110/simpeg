/*
 Navicat Premium Data Transfer

 Source Server         : conn_mysql
 Source Server Type    : MySQL
 Source Server Version : 100406
 Source Host           : localhost:3306
 Source Schema         : dbkepegawaian

 Target Server Type    : MySQL
 Target Server Version : 100406
 File Encoding         : 65001

 Date: 02/10/2019 20:47:41
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for employees
-- ----------------------------
DROP TABLE IF EXISTS `employees`;
CREATE TABLE `employees`  (
  `nik` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip` varchar(18) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama` varchar(7) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `golongan_darah` varchar(2) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_anak` int(10) UNSIGNED NOT NULL,
  `golongan` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `masa_kerja` int(10) UNSIGNED NOT NULL,
  `tmt_cpns` date NOT NULL,
  `tmt_pns` date NOT NULL,
  `alamat` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telepon` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `e_mail` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`nik`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of employees
-- ----------------------------
INSERT INTO `employees` VALUES ('1231234', '123456789123456789', 'Reza', 'Bandung', '1997-09-30', 'Laki-laki', 'Islam', 'A', 'Lajang', 1, '3A', 'Manager', 1, '2019-09-30', '2019-09-30', 'Bandung', '082119632854', 'wayseptian@gmail.com');
INSERT INTO `employees` VALUES ('223344', '123456789121212121', 'Budi Hamdani', 'Jakarta', '2005-02-02', 'Laki-laki', 'Islam', 'AB', 'Lajang', 1, '3A', 'Manager', 1, '2019-10-02', '2019-10-02', 'Bandung', '082119632854', 'budi@gmail.com');

-- ----------------------------
-- Table structure for education
-- ----------------------------
DROP TABLE IF EXISTS `education`;
CREATE TABLE `education`  (
  `kode_pendidikan` int(11) NOT NULL AUTO_INCREMENT,
  `prodi` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenjang` varchar(2) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `asal_sekolah` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_lulus` date NOT NULL,
  `nik` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`kode_pendidikan`) USING BTREE,
  INDEX `education_nik_foreign`(`nik`) USING BTREE,
  CONSTRAINT `education_nik_foreign` FOREIGN KEY (`nik`) REFERENCES `employees` (`nik`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of education
-- ----------------------------
INSERT INTO `education` VALUES (2, 'Manajemen Keuangan', 'S1', 'ITB', '2018-01-22', '1231234');
INSERT INTO `education` VALUES (3, 'Teknik Informatika', 'S1', 'STMIK JABAR', '2019-10-02', '223344');

-- ----------------------------
-- Table structure for grades
-- ----------------------------
DROP TABLE IF EXISTS `grades`;
CREATE TABLE `grades`  (
  `kode_pangkat` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `golongan` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pangkat` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `masa_kerja_golongan` int(10) UNSIGNED NOT NULL,
  `tmt_pangkat` date NOT NULL,
  `no_sk` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit_kerja` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`kode_pangkat`) USING BTREE,
  INDEX `grades_nik_foreign`(`nik`) USING BTREE,
  CONSTRAINT `grades_nik_foreign` FOREIGN KEY (`nik`) REFERENCES `employees` (`nik`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of grades
-- ----------------------------
INSERT INTO `grades` VALUES (2, '3A', 'Manajer', 2, '2019-09-30', '12/DSTR/IX/2019', 'Bandung', '1231234');

-- ----------------------------
-- Table structure for leaves
-- ----------------------------
DROP TABLE IF EXISTS `leaves`;
CREATE TABLE `leaves`  (
  `kode_cuti` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `jenis_cuti` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_akhir` date NOT NULL,
  `sisa_cuti` int(10) UNSIGNED NOT NULL,
  `nik` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`kode_cuti`) USING BTREE,
  INDEX `leaves_nik_foreign`(`nik`) USING BTREE,
  CONSTRAINT `leaves_nik_foreign` FOREIGN KEY (`nik`) REFERENCES `employees` (`nik`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of leaves
-- ----------------------------
INSERT INTO `leaves` VALUES (1, 'Tahunan', '2019-10-01', '2019-10-05', 5, '1231234');
INSERT INTO `leaves` VALUES (2, 'Tahunan', '2019-02-01', '2019-10-12', 2, '1231234');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 39 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (13, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (14, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (30, '2019_08_21_123629_create_employees_table', 2);
INSERT INTO `migrations` VALUES (34, '2019_09_30_002057_create_education_table', 2);
INSERT INTO `migrations` VALUES (35, '2019_08_25_043128_create_grades_table', 3);
INSERT INTO `migrations` VALUES (36, '2019_08_25_043259_create_leaves_table', 3);
INSERT INTO `migrations` VALUES (38, '2019_08_25_043523_create_performances_table', 4);

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for performances
-- ----------------------------
DROP TABLE IF EXISTS `performances`;
CREATE TABLE `performances`  (
  `kode_kinerja` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `jumlah_presensi` int(10) UNSIGNED NOT NULL,
  `jumlah_ijin` int(10) UNSIGNED NOT NULL,
  `jumlah_absen` int(10) UNSIGNED NOT NULL,
  `kelebihan_jam_kerja` int(10) UNSIGNED NOT NULL,
  `kesimpulan` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tunj_kinerja` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` int(10) UNSIGNED NOT NULL,
  `bulan` int(10) UNSIGNED NOT NULL,
  `nik` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`kode_kinerja`) USING BTREE,
  INDEX `performances_nik_foreign`(`nik`) USING BTREE,
  CONSTRAINT `performances_nik_foreign` FOREIGN KEY (`nik`) REFERENCES `employees` (`nik`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of performances
-- ----------------------------
INSERT INTO `performances` VALUES (1, 2, 1, 2, 2, 'Baik', '100000', 2019, 9, '1231234');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp(0) NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (3, 'admin', 'distaru@gmail.com', NULL, '$2y$10$cYNHNk1PZZgIjaBqSV.hZODUJINbb5nNn5UOh1MZH.HVYDIPznpU6', NULL, '2019-10-02 11:50:24', '2019-10-02 11:50:24');

SET FOREIGN_KEY_CHECKS = 1;
