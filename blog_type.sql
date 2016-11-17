/*
Navicat MySQL Data Transfer

Source Server         : 127.0.0.1
Source Server Version : 50540
Source Host           : localhost:3306
Source Database       : blog

Target Server Type    : MYSQL
Target Server Version : 50540
File Encoding         : 65001

Date: 2016-11-17 18:25:20
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `blog_type`
-- ----------------------------
DROP TABLE IF EXISTS `blog_type`;
CREATE TABLE `blog_type` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id 自增',
  `name` varchar(50) CHARACTER SET utf8 NOT NULL COMMENT '分类名称',
  `pid` int(255) NOT NULL COMMENT '父id',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of blog_type
-- ----------------------------
INSERT INTO `blog_type` VALUES ('7', '技术', '0');
INSERT INTO `blog_type` VALUES ('8', 'H5', '0');
INSERT INTO `blog_type` VALUES ('9', 'html', '7');
INSERT INTO `blog_type` VALUES ('10', 'mysql', '7');
INSERT INTO `blog_type` VALUES ('11', 'create', '10');
INSERT INTO `blog_type` VALUES ('12', 'falsh动画要失业', '8');
