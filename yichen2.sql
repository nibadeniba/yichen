/*
Navicat MySQL Data Transfer

Source Server         : yichen
Source Server Version : 50612
Source Host           : localhost:3306
Source Database       : yichen

Target Server Type    : MYSQL
Target Server Version : 50612
File Encoding         : 65001

Date: 2017-11-19 14:33:52
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `cms`
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
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of cms
-- ----------------------------
INSERT INTO `cms` VALUES ('2', '/web/index/01.jpg', null, 'index_img', null, null);
INSERT INTO `cms` VALUES ('3', '/upload/index/201711121745355a08183f80561.jpg', null, 'index_img', null, null);
INSERT INTO `cms` VALUES ('4', '/web/index/03.jpg', null, 'index_img', null, null);
INSERT INTO `cms` VALUES ('5', '/web/index/04.jpg', null, 'index_img', null, null);
INSERT INTO `cms` VALUES ('6', '/web/images/i_04.jpg', null, 'index_card', '创新工艺', '<p>精湛工艺彰显卓越品质始终如一1</p>');
INSERT INTO `cms` VALUES ('7', '/web/images/i_06.jpg', null, 'index_card', '木材加工基地', '基地拥有先进的木材加工设备和深厚的技术力量，根据生产所需木材的大小规格，负责前期的木材加工、防腐、烘干等工作。目前，每年可加工近20万立方米的实木供货量。');
INSERT INTO `cms` VALUES ('8', '/web/images/i_05.jpg', null, 'index_card', '品质管控', '精选、精制、精雕细琢');
INSERT INTO `cms` VALUES ('9', null, null, 'index_text', '工厂概况', '<p>亿臣十余载在家具行业的发展历程，为酒店家具的生产和研发打下了坚实的基础。我们拥有18个先进的专业化生产车间，400余名生产员工，10条全自动油漆涂装智能流水生产线。上万立方米的原木储存、上万平方米的木皮备货。几百台专业的生产设备，引进了德国IMA、意大利SCM等配套生产流水线、全自动五底三面PU油漆涂装线、高频曲压机、微波烘干机、CNC加工中心等，实现打磨、喷涂、烘干等工序的集约化生产。整体配套加工能力实力雄厚，为高效率、高品质生产提供了可靠的保证。.</p>');
INSERT INTO `cms` VALUES ('10', '/web/images/pos.jpg', null, 'contact_map', '联系我们-地图', null);
INSERT INTO `cms` VALUES ('11', null, null, 'contact_text', '联系我们-宣传语', '<h2>与我们保持联络是快速解决您问题的唯一途径！</h2>');
INSERT INTO `cms` VALUES ('12', '/web/images/share.png', null, 'contact_share', '联系我们-图标、标语', '<p>改变自己，从联系微享开始。</p>\n<p>创造有活力的微信网站，提升用户体验和品牌价值感</p>');
INSERT INTO `cms` VALUES ('13', null, null, 'contact_companyinfo', '联系我们-公司介绍', '<p>广东澳新考拉信息技术有限公司</p>\r\n    	    		<p>地 址：汕头市龙湖区高新区嘉泽中心大厦7B01</p>\r\n    	    		<p>联系方式：0754-87263166</p>\r\n    	    		<p>公司官网： <a href=\"http://www.ozkoalas.com/\" target=\"_blank\"></a>http://www.ozkoalas.com/</p>');
INSERT INTO `cms` VALUES ('16', '/web/images/contactwx.png', null, 'contact_wechatimg', '联系我们-微信二维码', null);
INSERT INTO `cms` VALUES ('17', '/web/images/contactindex.png', null, 'contact_offwebimg', '联系我们-官网二维码', null);
INSERT INTO `cms` VALUES ('18', '/web/images/contactgzh.png', null, 'contact_publicimg', '联系我们-公众号二维码', null);
INSERT INTO `cms` VALUES ('21', '/web/images/pic.jpg', '', 'about_info', '关于我们-内容', '<h2>微享，不只是朋友圈中的分享</h2>\r\n    			<p>微享基于微信为用户提供开发、运营、培训、推广一体化解决方案，帮助用户搭建新一代微商分销体系，实现线上线下互通和客户沉淀。微享以直销模式+代理+熟人经济的模式帮助微商快速建立分销渠道，让粉丝主动传播和宣传产品。</p>');
INSERT INTO `cms` VALUES ('22', '/web/images/a_03.jpg', '', 'about_feature', '关于我们-特色', '<h2>经验</h2>\r\n    			<p>拥有超过2年行业经验的资深团队及设计开发经验，服务上百家品牌企业。</p>');
INSERT INTO `cms` VALUES ('23', '/web/images/a_05.jpg', null, 'about_feature', '关于我们-特色', '<h2>专业</h2>\r\n    			<p>我们整合商业思考，不断追求完美和卓越，渴望成为潮流的引领者。</p>');
INSERT INTO `cms` VALUES ('24', '/web/images/a_07.jpg', null, 'about_feature', '关于我们-特色', '<h2>创新</h2>\r\n    			<p>我们摒弃墨守成规、腐朽不堪的设计理念和页面风格设计，希望能创造更多独特精彩的作品。</p>');
INSERT INTO `cms` VALUES ('25', '', null, 'product', '111', '11<p>\n				</p>');
INSERT INTO `cms` VALUES ('27', '/web/images/ser1.jpg', null, 'indexo_team', '设计团队：', '亿臣现汇聚了30余名设计经验丰富的专业家具设计师，他们保持与国内外顶尖的设计公司合作，把握世界顶级设计理念，对产品进行整体设计开发；这支团队同时提供专业咨询服务，结合环境与功能要求，为客户做出周全详尽的工程配套建议、实地测量并量身定制的设计方案。');
INSERT INTO `cms` VALUES ('28', '/web/images/ser2.jpg', null, 'indexo_team', '技术团队：', '我们拥有近50多位结构工艺师，负责深化设计图纸，在每批产品生产前均召开产前会议，给生产制造提供了最全面的技术支持和质量管控标准，并积极推动酒店家具行业实现国际标准化的生产。拥有多名高级技工，是产品从生产、安装直至售后服务全过程的重要技术力量；300多名生产制造团队是生产交期的有力保证。');
INSERT INTO `cms` VALUES ('29', '/web/images/ser3.jpg', null, 'indexo_team', '工程团队：', '亿臣拥有一支精通技术又有长期实践的工程服务团队，负责现场监理，现场安装，高品质的完成现场装配化施工安装工作，让工程进展更顺利，工期更短，质量更好，管理更方便，为客户赢得时间和品质，为公司赢得信誉和口碑。');
INSERT INTO `cms` VALUES ('30', '/web/images/ser4.jpg', null, 'indexo_team', '服务团队：', '以服务为核心是我们亿臣服务团队的持续使命。着力于“服务前探”的思路，将售前、售中服务作为服务的重点，并延伸至客户的使用体验中。建立计划小组，负责前期加工、安装进度计划及与客户的协调计划服务工作；建立客户意见档案，及时收集信息并反馈；制定专业规范的《家具保养条例》，协助客户正确使用、专业维护保养产品，解决业主的一切后顾之忧。');

-- ----------------------------
-- Table structure for `customer`
-- ----------------------------
DROP TABLE IF EXISTS `customer`;
CREATE TABLE `customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键ID',
  `customer_name` varchar(255) COLLATE utf8_bin DEFAULT NULL COMMENT '客户名',
  `customer_type` int(11) DEFAULT NULL COMMENT '客户类型（1地产:2:酒店3:设计）',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of customer
-- ----------------------------
INSERT INTO `customer` VALUES ('1', '绿城集团', '2');
INSERT INTO `customer` VALUES ('2', '万科集团', '1');
INSERT INTO `customer` VALUES ('3', '滨江房产集团', '1');
INSERT INTO `customer` VALUES ('4', '中南建设集团', '1');
INSERT INTO `customer` VALUES ('5', '莱茵达集团', '1');
INSERT INTO `customer` VALUES ('6', '坤和建设集团', '1');
INSERT INTO `customer` VALUES ('7', '雅戈尔集团', '1');
INSERT INTO `customer` VALUES ('8', '华润集团', '1');
INSERT INTO `customer` VALUES ('9', '世茂集团', '1');
INSERT INTO `customer` VALUES ('10', '万达集团', '1');
INSERT INTO `customer` VALUES ('11', '上海温德姆大酒店', '2');
INSERT INTO `customer` VALUES ('12', '上海柏悦大酒店', '2');
INSERT INTO `customer` VALUES ('13', '杭州宝盛水博园大酒店', '2');
INSERT INTO `customer` VALUES ('14', '杭州三立大酒店', '2');
INSERT INTO `customer` VALUES ('15', 'JW万豪大酒店', '2');
INSERT INTO `customer` VALUES ('16', '白马湖建国大酒店', '2');
INSERT INTO `customer` VALUES ('17', '中国美院设计所', '3');
INSERT INTO `customer` VALUES ('18', '美国HBA酒店设计公司', '3');
INSERT INTO `customer` VALUES ('19', '金螳螂建筑装饰股份有限公司', '3');
INSERT INTO `customer` VALUES ('20', '九鼎装修', '3');
INSERT INTO `customer` VALUES ('21', '中国美术学院建筑装饰工程公司', '3');
INSERT INTO `customer` VALUES ('22', '浙江农林大学园林设计院', '3');
INSERT INTO `customer` VALUES ('23', '111', '2');

-- ----------------------------
-- Table structure for `news`
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
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of news
-- ----------------------------
INSERT INTO `news` VALUES ('2', '测试新闻', '测试副标题', '/upload/news/201711101152085a0522686d56c.jpg', '2017-11-10 11:53:26', '2017-11-17 20:50:00', '23', '1');
INSERT INTO `news` VALUES ('3', '1', '1', '/web/wu.jpg', '2017-11-17 01:24:41', null, '0', '1');
INSERT INTO `news` VALUES ('4', '111', '111', '/web/wu.jpg', '2017-11-17 20:50:19', null, '0', '1');

-- ----------------------------
-- Table structure for `news_content`
-- ----------------------------
DROP TABLE IF EXISTS `news_content`;
CREATE TABLE `news_content` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `news_id` int(11) NOT NULL,
  `content` text COLLATE utf8_unicode_ci COMMENT '新闻内容',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of news_content
-- ----------------------------
INSERT INTO `news_content` VALUES ('1', '2', '<p>					</p><p>					</p><p>					</p><p>					</p><p>\n					测试123241</p><p>\n				</p><p>\n				</p><p>\n				</p><p>\n				</p><p>\n				</p><p>\n				</p>', '2017-11-10 11:53:26', '2017-11-17 20:50:00');
INSERT INTO `news_content` VALUES ('2', '3', '11<p>\n				</p>', '2017-11-17 01:24:41', null);
INSERT INTO `news_content` VALUES ('3', '4', '111<p>\n				</p>', '2017-11-17 20:50:19', null);

-- ----------------------------
-- Table structure for `talent`
-- ----------------------------
DROP TABLE IF EXISTS `talent`;
CREATE TABLE `talent` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `talent_name` varchar(255) COLLATE utf8_bin NOT NULL,
  `requirement` varchar(255) COLLATE utf8_bin NOT NULL,
  `is_show` int(11) NOT NULL DEFAULT '1' COMMENT '是否显示（1：显示 0：隐藏）',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of talent
-- ----------------------------
INSERT INTO `talent` VALUES ('1', '销售经理12', '销售经理，Sales Manager ，是指导产品和服务的实际销售的人。通过确定销售领域、配额、目标来协调销售工作，并为销售代表制定培训项目。分析销售数据，确定销售潜力并监控客户的偏好。有较强的组织能力，沟通能力，交际能力，创造能力，商务技能，谈判策略以及管理下属能力。\n				\n				', '1');
INSERT INTO `talent` VALUES ('2', '产品经理', '产品经理（Product Manager）是企业中专门负责产品管理的职位，产品经理负责市场调查并根据用户的需求，确定开发何种产品，选择何种技术、商业模式等。并推动相应产品的开发组织，他还要根据产品的生命周期，协调研发、营销、运营等，确定和组织实施相应的产品策略，以及其他一系列相关的产品管理活动。', '1');
INSERT INTO `talent` VALUES ('5', '产品助理', '产品助理，是产品经理的协助人员，在产品经理的工作职能之内，进行产品相关的市场调研、产品策划、部门沟通等相关工作。', '1');
INSERT INTO `talent` VALUES ('6', '研发人员', '研发即研究开发、研究与开发、研究发展，是指各种研究机构、企业或个人为获得科学技术（不包括人文、社会科学）新知识，创造性运用科学技术新知识，或实质性改进技术、产品和服务而持续进行的具有明确目标的系统活动。', '1');
INSERT INTO `talent` VALUES ('7', '技术人员', '专业技术人员 指依照国家人才法律法规，经过国家人事部门全国统考合格，并经国家主管部委注册备案，颁发注册执业证书，在企业或事业单位从事专业技术工作的技术人员及具有前述执业证书并从事专业技术管理工作，在1983年以前评定了专业技术职称或在1984年以后考取了国家执行资格并具有专业技术执业证书的人员。', '1');
INSERT INTO `talent` VALUES ('8', '前台', '前台文员负责前台服务热线的接听和电话转接，做好来电咨询工作，邮件处理、重要事项认真记录并传达给相关人员，不遗漏、延误，等工作。', '1');
INSERT INTO `talent` VALUES ('9', '财务', '财务负责人，是指一般由总会计师或财务总监担任，全面负责公司的财务管理、会计核算与监督工作的人。\r\n严格的说必须有会计师资格、从事会计工作多年、经验丰富的人才能胜任。\r\n', '1');
INSERT INTO `talent` VALUES ('10', '111', '1111', '1');
INSERT INTO `talent` VALUES ('11', '111', '1111', '1');
INSERT INTO `talent` VALUES ('12', '111', '1111', '1');
INSERT INTO `talent` VALUES ('13', '111', '1111', '1');
INSERT INTO `talent` VALUES ('14', '111', '1111', '1');
INSERT INTO `talent` VALUES ('15', '111', '1111', '1');
INSERT INTO `talent` VALUES ('16', '111', '1111', '1');
INSERT INTO `talent` VALUES ('17', '11', '				\n	222			', '1');
INSERT INTO `talent` VALUES ('18', '333', '333', '1');

-- ----------------------------
-- Table structure for `user`
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
