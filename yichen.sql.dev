/*
Navicat MySQL Data Transfer

Source Server         : lzh
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : yichen

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2017-11-10 16:17:45
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for news
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `news_title` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `news_upper_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '副标题',
  `news_image` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `clicks` int(11) DEFAULT '0' COMMENT '点击量',
  `is_show` int(11) DEFAULT NULL COMMENT '1 显示 0 不显示',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of news
-- ----------------------------
INSERT INTO `news` VALUES ('2', '测试新闻', '测试副标题', '/upload/news/201711101152085a0522686d56c.jpg', '2017-11-10 11:53:26', '2017-11-10 14:12:17', '22', '1');

-- ----------------------------
-- Table structure for news_content
-- ----------------------------
DROP TABLE IF EXISTS `news_content`;
CREATE TABLE `news_content` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `news_id` int(11) NOT NULL,
  `content` text COLLATE utf8_unicode_ci COMMENT '新闻内容',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of news_content
-- ----------------------------
INSERT INTO `news_content` VALUES ('1', '2', '<p>					</p><p>					</p><p>\n					测试12324</p><p>\n				</p><p>\n				</p><p>\n				</p><p>\n				</p>', '2017-11-10 11:53:26', '2017-11-10 13:40:21');
