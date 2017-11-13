/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : yichen

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2017-11-12 20:32:08
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for cms
-- ----------------------------
DROP TABLE IF EXISTS `cms`;
CREATE TABLE `cms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `link` varchar(255) COLLATE utf8_bin DEFAULT NULL COMMENT '外链',
  `cate` varchar(255) COLLATE utf8_bin NOT NULL COMMENT '所属位置',
  `title` varchar(255) COLLATE utf8_bin DEFAULT NULL COMMENT '标题',
  `content` varchar(255) COLLATE utf8_bin DEFAULT NULL COMMENT '内容',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of cms
-- ----------------------------
INSERT INTO `cms` VALUES ('2', '/web/index/01.jpg', null, 'index_img', null, null);
INSERT INTO `cms` VALUES ('3', '/upload/index/201711121745355a08183f80561.jpg', null, 'index_img', null, null);
INSERT INTO `cms` VALUES ('4', '/web/index/03.jpg', null, 'index_img', null, null);
INSERT INTO `cms` VALUES ('5', '/web/index/04.jpg', null, 'index_img', null, null);
INSERT INTO `cms` VALUES ('6', '/web/images/i_04.jpg', null, 'index_card', '创新工艺', '<p>精湛工艺彰显卓越品质始终如一</p>');
INSERT INTO `cms` VALUES ('7', '/web/images/i_06.jpg', null, 'index_card', '木材加工基地', '基地拥有先进的木材加工设备和深厚的技术力量，根据生产所需木材的大小规格，负责前期的木材加工、防腐、烘干等工作。目前，每年可加工近20万立方米的实木供货量。');
INSERT INTO `cms` VALUES ('8', '/web/images/i_05.jpg', null, 'index_card', '品质管控', '精选、精制、精雕细琢');
INSERT INTO `cms` VALUES ('9', null, null, 'index_text', '工厂概况', '<p>亿臣十余载在家具行业的发展历程，为酒店家具的生产和研发打下了坚实的基础。我们拥有18个先进的专业化生产车间，400余名生产员工，10条全自动油漆涂装智能流水生产线。上万立方米的原木储存、上万平方米的木皮备货。几百台专业的生产设备，引进了德国IMA、意大利SCM等配套生产流水线、全自动五底三面PU油漆涂装线、高频曲压机、微波烘干机、CNC加工中心等，实现打磨、喷涂、烘干等工序的集约化生产。整体配套加工能力实力雄厚，为高效率、高品质生产提供了可靠的保证。</p>');

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

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `mobile` char(11) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', '管理员01', '12345678901', '$2y$10$xjP/jeWWZtfyzMj7mzCd6u1DtxLGwdomeF7s6/tI4EfkcbkupASUG');
