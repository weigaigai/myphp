/*
 Navicat Premium Data Transfer

 Source Server         : vm-local
 Source Server Type    : MySQL
 Source Server Version : 50642
 Source Host           : 192.2.2.2:3306
 Source Schema         : edu

 Target Server Type    : MySQL
 Target Server Version : 50642
 File Encoding         : 65001

 Date: 08/04/2019 18:30:15
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for student
-- ----------------------------
DROP TABLE IF EXISTS `student`;
CREATE TABLE `student`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `course` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `grade` int(10) UNSIGNED NOT NULL,
  `create_time` int(10) UNSIGNED NOT NULL,
  `update_time` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of student
-- ----------------------------
INSERT INTO `student` VALUES (1, '郭靖', '', 'php', 99, 1505054471, 1505054471);
INSERT INTO `student` VALUES (2, '黄蓉', '', 'mysql', 88, 1505054471, 1505054471);

SET FOREIGN_KEY_CHECKS = 1;
