/*
 Navicat Premium Data Transfer

 Source Server         : nusatani
 Source Server Type    : MariaDB
 Source Server Version : 100137
 Source Host           : localhost:3306
 Source Schema         : nusa

 Target Server Type    : MariaDB
 Target Server Version : 100137
 File Encoding         : 65001

 Date: 20/01/2020 12:18:52
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for fosfor_file
-- ----------------------------
DROP TABLE IF EXISTS `fosfor_file`;
CREATE TABLE `fosfor_file`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `namafile` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tanggal` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `url` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status` int(1) NULL DEFAULT NULL,
  `nutrisi_id` int(1) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of fosfor_file
-- ----------------------------
INSERT INTO `fosfor_file` VALUES (1, 'fosfor_2019', '14-02-2019', 'fosfor_2019.geojson', 1, 2);
INSERT INTO `fosfor_file` VALUES (3, 'Data Dummy 2018', '10-01-2018', 'fosfor_2018.geojson', 0, 2);

-- ----------------------------
-- Table structure for kalium_file
-- ----------------------------
DROP TABLE IF EXISTS `kalium_file`;
CREATE TABLE `kalium_file`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `namafile` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tanggal` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `url` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status` int(1) NULL DEFAULT NULL,
  `nutrisi_id` int(1) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of kalium_file
-- ----------------------------
INSERT INTO `kalium_file` VALUES (1, 'kalium_2019', '14-02-2019', 'kalium_2019.geojson', 1, 3);
INSERT INTO `kalium_file` VALUES (4, 'Data Dummy 2018', '10-01-2018', 'kalium_2018.geojson', 0, 3);

-- ----------------------------
-- Table structure for kalsium_file
-- ----------------------------
DROP TABLE IF EXISTS `kalsium_file`;
CREATE TABLE `kalsium_file`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `namafile` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tanggal` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `url` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status` int(1) NULL DEFAULT NULL,
  `nutrisi_id` int(1) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of kalsium_file
-- ----------------------------
INSERT INTO `kalsium_file` VALUES (1, 'kalsium_2019', '14-02-2019', 'kalsium_2019.geojson', 1, 5);
INSERT INTO `kalsium_file` VALUES (3, 'Data Dummy 2018', '10-01-2018', 'kalsium_2018.geojson', 0, 5);

-- ----------------------------
-- Table structure for magnesium_file
-- ----------------------------
DROP TABLE IF EXISTS `magnesium_file`;
CREATE TABLE `magnesium_file`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `namafile` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tanggal` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `url` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status` int(1) NULL DEFAULT NULL,
  `nutrisi_id` int(1) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of magnesium_file
-- ----------------------------
INSERT INTO `magnesium_file` VALUES (1, 'magnesium_2019', '14-02-2019', 'magnesium_2019.geojson', 1, 4);
INSERT INTO `magnesium_file` VALUES (3, 'Data Dummy 2018', '10-01-2018', 'magnesium_2018.geojson', 0, 4);

-- ----------------------------
-- Table structure for nitrogen_file
-- ----------------------------
DROP TABLE IF EXISTS `nitrogen_file`;
CREATE TABLE `nitrogen_file`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `namafile` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tanggal` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `url` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status` int(1) NULL DEFAULT NULL,
  `nutrisi_id` int(1) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 45 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of nitrogen_file
-- ----------------------------
INSERT INTO `nitrogen_file` VALUES (1, 'Data Nitrogen 2019', '14-02-2019', 'nitrogen_2019.geojson', 1, 1);
INSERT INTO `nitrogen_file` VALUES (44, 'Data Dummy 2018', '10-01-2018', 'nitrogen_2018.geojson', 0, 1);

-- ----------------------------
-- Table structure for nutrisi
-- ----------------------------
DROP TABLE IF EXISTS `nutrisi`;
CREATE TABLE `nutrisi`  (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `nama_nutrisi` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `alias` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of nutrisi
-- ----------------------------
INSERT INTO `nutrisi` VALUES (1, 'nitrogen', 'n');
INSERT INTO `nutrisi` VALUES (2, 'fosfor', 'p');
INSERT INTO `nutrisi` VALUES (3, 'kalium', 'k');
INSERT INTO `nutrisi` VALUES (4, 'magnesium', 'mg');
INSERT INTO `nutrisi` VALUES (5, 'kalsium', 'ca');
INSERT INTO `nutrisi` VALUES (6, 'sulfur', 's');

-- ----------------------------
-- Table structure for sulfur_file
-- ----------------------------
DROP TABLE IF EXISTS `sulfur_file`;
CREATE TABLE `sulfur_file`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `namafile` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tanggal` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `url` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status` int(1) NULL DEFAULT NULL,
  `nutrisi_id` int(1) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of sulfur_file
-- ----------------------------
INSERT INTO `sulfur_file` VALUES (1, 'sulfur_2019', '14-02-2019', 'sulfur_2019.geojson', 1, 6);
INSERT INTO `sulfur_file` VALUES (9, 'Data Dummy 2018', '10-01-2018', 'sulfur_2018.geojson', 0, 6);

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `user_id` int(64) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `role_id` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`user_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 14 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES (1, 'superadmin', 'superadmin', 1);
INSERT INTO `user` VALUES (2, 'admin', 'admin', 2);
INSERT INTO `user` VALUES (3, 'user', 'user', 3);
INSERT INTO `user` VALUES (5, 'user1', '$2y$10$yoLaglHdGXgMbeR.Myxp4.G5JMyHLvmj/E1r2XYMQuiFpNtelEeFy', 3);
INSERT INTO `user` VALUES (6, 'admin2', '$2y$10$NeIZ6sQFNCaIdD9Ro9k9tuO21WKjFGf2V212onEUfrMsZ47ggWv5C', 2);
INSERT INTO `user` VALUES (7, 'superadmin1', '$2y$10$cvU/BZPRfgr.SCJxjJfgn.Zbrmbsdk1pSH9pkg5na7epKe/wSQFqq', 1);
INSERT INTO `user` VALUES (8, 'user2', '$2y$10$X8wecTkFSdCBRWHnk9JJGeGNHovyTbCZPmEE2g.l9ziyx8MlqytVy', 3);
INSERT INTO `user` VALUES (9, 'user3', '$2y$10$5mVfHWRTRbIBb.ZZIxos0ek4PKGVSbEL3weuM6B0fwA0l2Fx9Gb7q', 3);
INSERT INTO `user` VALUES (11, 'admin3', '$2y$10$6H8YX41naTZYMu4y9iGD4uF22bemXqC6fSYMLa0zpDJJT322QpgWa', 2);
INSERT INTO `user` VALUES (12, 'admin1', '$2y$10$18KJQO0dXeeAX99v3SmaZulR/RkUZ.qq7nLoj7NOoY1nGizhc95v.', 2);
INSERT INTO `user` VALUES (13, 'user4', '$2y$10$crsNV8rWQg7Mh6oOtpqX5.8IG44mlpGrEO4jsaN0b.dtbJVZQUGBK', 3);

-- ----------------------------
-- Table structure for user_access_menu
-- ----------------------------
DROP TABLE IF EXISTS `user_access_menu`;
CREATE TABLE `user_access_menu`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NULL DEFAULT NULL,
  `menu_id` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of user_access_menu
-- ----------------------------
INSERT INTO `user_access_menu` VALUES (1, 1, 1);
INSERT INTO `user_access_menu` VALUES (2, 1, 2);
INSERT INTO `user_access_menu` VALUES (3, 1, 3);
INSERT INTO `user_access_menu` VALUES (4, 2, 2);
INSERT INTO `user_access_menu` VALUES (5, 2, 3);
INSERT INTO `user_access_menu` VALUES (6, 3, 3);

-- ----------------------------
-- Table structure for user_menu
-- ----------------------------
DROP TABLE IF EXISTS `user_menu`;
CREATE TABLE `user_menu`  (
  `id` int(11) NOT NULL,
  `menu` varchar(128) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of user_menu
-- ----------------------------
INSERT INTO `user_menu` VALUES (1, 'Superadmin');
INSERT INTO `user_menu` VALUES (2, 'Admin');
INSERT INTO `user_menu` VALUES (3, 'User');

-- ----------------------------
-- Table structure for user_role
-- ----------------------------
DROP TABLE IF EXISTS `user_role`;
CREATE TABLE `user_role`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of user_role
-- ----------------------------
INSERT INTO `user_role` VALUES (1, 'superadmin');
INSERT INTO `user_role` VALUES (2, 'admin');
INSERT INTO `user_role` VALUES (3, 'user');

-- ----------------------------
-- Table structure for user_sub_menu
-- ----------------------------
DROP TABLE IF EXISTS `user_sub_menu`;
CREATE TABLE `user_sub_menu`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_id` int(11) NULL DEFAULT NULL,
  `title` varchar(128) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `url` varchar(128) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `icon` varchar(128) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `is_active` int(1) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of user_sub_menu
-- ----------------------------
INSERT INTO `user_sub_menu` VALUES (1, 1, 'Manajemen', 'superadmin', 'fas fa-fw fa-table', 1);
INSERT INTO `user_sub_menu` VALUES (2, 2, 'Ubah data', 'admin/save_data', 'fas fa-fw fa-wrench', 1);
INSERT INTO `user_sub_menu` VALUES (3, 3, 'Download data', 'user/download_data', 'fas fa-cloud-download-alt', 1);

SET FOREIGN_KEY_CHECKS = 1;
