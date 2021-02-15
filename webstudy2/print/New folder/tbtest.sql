/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : stockit

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-08-15 16:21:17
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `tbtest`
-- ----------------------------
DROP TABLE IF EXISTS `tbtest`;
CREATE TABLE `tbtest` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbtest
-- ----------------------------
INSERT INTO `tbtest` VALUES ('1', 'webapponsite1');
INSERT INTO `tbtest` VALUES ('2', 'webapponsite2');
INSERT INTO `tbtest` VALUES ('3', 'webapponsite3');
INSERT INTO `tbtest` VALUES ('4', 'webapponsite4');
INSERT INTO `tbtest` VALUES ('5', 'webapponsite5');
INSERT INTO `tbtest` VALUES ('6', 'webapponsite6');
INSERT INTO `tbtest` VALUES ('7', 'webapponsite7');
INSERT INTO `tbtest` VALUES ('8', 'webapponsite8');
INSERT INTO `tbtest` VALUES ('9', 'webapponsite9');
INSERT INTO `tbtest` VALUES ('10', 'webapponsite10');
