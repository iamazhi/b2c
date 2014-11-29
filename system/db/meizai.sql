/*
 Navicat MySQL Data Transfer

 Source Server         : 192.168.1.16
 Source Server Version : 50613
 Source Host           : 192.168.1.16
 Source Database       : meizai

 Target Server Version : 50613
 File Encoding         : utf-8

 Date: 11/29/2014 16:59:51 PM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `mz_article`
-- ----------------------------
DROP TABLE IF EXISTS `mz_article`;
CREATE TABLE `mz_article` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(150) NOT NULL,
  `alias` varchar(100) NOT NULL,
  `keywords` varchar(150) NOT NULL,
  `summary` text NOT NULL,
  `content` text NOT NULL,
  `source` enum('original','copied','translational') NOT NULL,
  `copySite` varchar(60) NOT NULL,
  `copyURL` varchar(255) NOT NULL,
  `author` varchar(60) NOT NULL,
  `editor` varchar(60) NOT NULL,
  `addedDate` datetime NOT NULL,
  `editedDate` datetime NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'normal',
  `type` varchar(30) NOT NULL,
  `views` mediumint(5) unsigned NOT NULL DEFAULT '0',
  `sticky` enum('0','1','2','3') NOT NULL DEFAULT '0',
  `order` smallint(5) unsigned NOT NULL,
  `link` varchar(255) NOT NULL,
  `css` text NOT NULL,
  `js` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `order` (`order`),
  KEY `views` (`views`),
  KEY `sticky` (`sticky`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `mz_block`
-- ----------------------------
DROP TABLE IF EXISTS `mz_block`;
CREATE TABLE `mz_block` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `template` varchar(30) NOT NULL DEFAULT 'default',
  `type` varchar(20) NOT NULL,
  `title` varchar(60) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `mz_block`
-- ----------------------------
BEGIN;
INSERT INTO `mz_block` VALUES ('1', 'default', 'latestArticle', '最新文章', '{\"category\":\"0\",\"limit\":\"7\"}'), ('2', 'default', 'hotArticle', '热门文章', '{\"category\":\"0\",\"limit\":\"7\"}'), ('3', 'default', 'latestProduct', '最新产品', '{\"category\":\"0\",\"limit\":\"3\",\"image\":\"show\"}'), ('4', 'default', 'hotProduct', '热门产品', '{\"category\":\"0\",\"limit\":\"3\",\"image\":\"show\"}'), ('5', 'default', 'slide', '幻灯片', ''), ('6', 'default', 'articleTree', '文章分类', '{\"showChildren\":\"0\"}'), ('7', 'default', 'productTree', '产品分类', '{\"showChildren\":\"0\"}'), ('8', 'default', 'blogTree', '博客分类', '{\"showChildren\":\"1\"}'), ('9', 'default', 'contact', '联系我们', ''), ('10', 'default', 'about', '公司简介', ''), ('11', 'default', 'links', '友情链接', ''), ('12', 'default', 'header', '网站头部', ''), ('13', 'default', 'followUs', '关注我们', '');
COMMIT;

-- ----------------------------
--  Table structure for `mz_book`
-- ----------------------------
DROP TABLE IF EXISTS `mz_book`;
CREATE TABLE `mz_book` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(150) NOT NULL,
  `alias` varchar(100) NOT NULL,
  `keywords` varchar(150) NOT NULL,
  `summary` text NOT NULL,
  `content` text NOT NULL,
  `type` enum('book','chapter','article') NOT NULL,
  `parent` smallint(5) unsigned NOT NULL DEFAULT '0',
  `path` char(255) NOT NULL DEFAULT '',
  `grade` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `author` varchar(60) NOT NULL,
  `editor` varchar(60) NOT NULL,
  `addedDate` datetime NOT NULL,
  `editedDate` datetime NOT NULL,
  `views` mediumint(5) unsigned NOT NULL DEFAULT '0',
  `order` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `order` (`order`),
  KEY `parent` (`parent`),
  KEY `path` (`path`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `mz_category`
-- ----------------------------
DROP TABLE IF EXISTS `mz_category`;
CREATE TABLE `mz_category` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(30) NOT NULL DEFAULT '',
  `alias` varchar(100) NOT NULL,
  `desc` text NOT NULL,
  `keywords` varchar(150) NOT NULL,
  `parent` smallint(5) unsigned NOT NULL DEFAULT '0',
  `path` char(255) NOT NULL DEFAULT '',
  `grade` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `order` smallint(5) unsigned NOT NULL DEFAULT '0',
  `type` char(30) NOT NULL,
  `readonly` enum('0','1') NOT NULL DEFAULT '0',
  `moderators` varchar(255) NOT NULL,
  `threads` smallint(5) NOT NULL,
  `posts` smallint(5) NOT NULL,
  `postedBy` varchar(30) NOT NULL,
  `postedDate` datetime NOT NULL,
  `postID` mediumint(9) NOT NULL,
  `replyID` mediumint(8) unsigned NOT NULL,
  `link` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `tree` (`type`),
  KEY `order` (`order`),
  KEY `parent` (`parent`),
  KEY `path` (`path`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `mz_config`
-- ----------------------------
DROP TABLE IF EXISTS `mz_config`;
CREATE TABLE `mz_config` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `owner` char(30) NOT NULL DEFAULT '',
  `module` varchar(30) NOT NULL,
  `section` char(30) NOT NULL DEFAULT '',
  `key` char(30) DEFAULT NULL,
  `value` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique` (`owner`,`module`,`section`,`key`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `mz_config`
-- ----------------------------
BEGIN;
INSERT INTO `mz_config` VALUES ('1', 'system', 'common', 'global', 'version', '3.1'), ('6', 'system', 'common', 'site', 'lang', 'zh-cn'), ('3', 'system', 'common', 'site', 'type', 'portal'), ('4', 'system', 'common', 'site', 'name', '蝉知企业门户系统'), ('5', 'system', 'common', 'site', 'moduleEnabled', 'user'), ('7', 'system', 'common', 'site', 'copyright', ''), ('8', 'system', 'common', 'site', 'keywords', ''), ('9', 'system', 'common', 'site', 'indexKeywords', ''), ('10', 'system', 'common', 'site', 'slogan', ''), ('11', 'system', 'common', 'site', 'desc', ''), ('12', 'system', 'common', 'site', 'icp', ''), ('13', 'system', 'common', 'site', 'icpLink', 'http://www.miitbeian.gov.cn');
COMMIT;

-- ----------------------------
--  Table structure for `mz_contents`
-- ----------------------------
DROP TABLE IF EXISTS `mz_contents`;
CREATE TABLE `mz_contents` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `created` bigint(20) DEFAULT NULL,
  `intro` text,
  `author` char(16) DEFAULT NULL,
  `views` int(10) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `updated` int(10) NOT NULL DEFAULT '0',
  `url` varchar(255) DEFAULT NULL,
  `tags` varchar(50) DEFAULT NULL,
  `recommand` set('h','r','f','s') DEFAULT NULL,
  `isImage` tinyint(1) DEFAULT NULL,
  `allowComment` tinyint(1) NOT NULL DEFAULT '1',
  `commentNums` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `status` (`status`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `mz_contents`
-- ----------------------------
BEGIN;
INSERT INTO `mz_contents` VALUES ('1', '测试案例', null, '测试', null, '0', '0', '0', null, null, null, null, '1', '0'), ('2', '测试案例', null, '测试2', null, '0', '0', '0', null, null, null, null, '1', '0'), ('3', '测试案例', null, '测试2', null, '0', '0', '0', null, null, null, null, '1', '0');
COMMIT;

-- ----------------------------
--  Table structure for `mz_down`
-- ----------------------------
DROP TABLE IF EXISTS `mz_down`;
CREATE TABLE `mz_down` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `account` char(30) DEFAULT NULL,
  `file` mediumint(5) DEFAULT NULL,
  `ip` char(15) NOT NULL,
  `time` datetime NOT NULL,
  `referer` varchar(200) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fileID` (`file`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `mz_file`
-- ----------------------------
DROP TABLE IF EXISTS `mz_file`;
CREATE TABLE `mz_file` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `pathname` char(50) NOT NULL,
  `title` char(90) NOT NULL,
  `extension` char(30) NOT NULL,
  `size` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `width` smallint(5) unsigned NOT NULL DEFAULT '0',
  `height` smallint(5) unsigned NOT NULL DEFAULT '0',
  `objectType` char(20) NOT NULL,
  `objectID` mediumint(9) NOT NULL,
  `addedBy` char(30) NOT NULL DEFAULT '',
  `addedDate` datetime NOT NULL,
  `public` enum('1','0') NOT NULL DEFAULT '1',
  `downloads` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `extra` varchar(255) NOT NULL,
  `primary` enum('1','0') DEFAULT '0',
  `editor` enum('1','0') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `object` (`objectType`,`objectID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `mz_layout`
-- ----------------------------
DROP TABLE IF EXISTS `mz_layout`;
CREATE TABLE `mz_layout` (
  `template` varchar(30) NOT NULL DEFAULT 'default',
  `page` varchar(30) NOT NULL,
  `region` varchar(30) NOT NULL,
  `blocks` text NOT NULL,
  UNIQUE KEY `layout` (`template`,`page`,`region`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `mz_layout`
-- ----------------------------
BEGIN;
INSERT INTO `mz_layout` VALUES ('default', 'all', 'top', '[{\"id\":\"12\",\"grid\":\"\",\"titleless\":0,\"borderless\":0}]'), ('default', 'index_index', 'top', '[{\"id\":\"5\",\"grid\":\"\",\"titleless\":0,\"borderless\":0}]'), ('default', 'index_index', 'middle', '[{\"id\":3,\"grid\":12,\"titleless\":0,\"borderless\":0},{\"id\":\"10\",\"grid\":4,\"titleless\":0,\"borderless\":0},{\"id\":\"1\",\"grid\":4,\"titleless\":0,\"borderless\":0},{\"id\":\"9\",\"grid\":4,\"titleless\":0,\"borderless\":0}]'), ('default', 'index_index', 'bottom', '[{\"id\":\"11\",\"grid\":\"\",\"titleless\":0,\"borderless\":0}]'), ('default', 'company_index', 'side', '[{\"id\":\"9\",\"grid\":\"\",\"titleless\":0,\"borderless\":0},{\"id\":\"13\",\"grid\":\"\",\"titleless\":0,\"borderless\":0}]'), ('default', 'article_browse', 'side', '[{\"id\":\"6\",\"grid\":\"\",\"titleless\":0,\"borderless\":0},{\"id\":\"9\",\"grid\":\"\",\"titleless\":0,\"borderless\":0}]'), ('default', 'article_view', 'side', '[{\"id\":\"6\",\"grid\":\"\",\"titleless\":0,\"borderless\":0},{\"id\":\"9\",\"grid\":\"\",\"titleless\":0,\"borderless\":0}]'), ('default', 'product_browse', 'side', '[{\"id\":\"4\",\"grid\":\"\",\"titleless\":0,\"borderless\":0},{\"id\":\"7\",\"grid\":\"\",\"titleless\":0,\"borderless\":0},{\"id\":\"9\",\"grid\":\"\",\"titleless\":0,\"borderless\":0}]'), ('default', 'product_view', 'side', '[{\"id\":\"4\",\"grid\":\"\",\"titleless\":0,\"borderless\":0},{\"id\":\"7\",\"grid\":\"\",\"titleless\":0,\"borderless\":0},{\"id\":\"9\",\"grid\":\"\",\"titleless\":0,\"borderless\":0}]'), ('default', 'message_index', 'side', '[{\"id\":\"9\",\"grid\":\"\",\"titleless\":0,\"borderless\":0}]'), ('default', 'blog_index', 'side', '[{\"id\":\"8\",\"grid\":\"\",\"titleless\":0,\"borderless\":0}]'), ('default', 'blog_view', 'side', '[{\"id\":\"8\",\"grid\":\"\",\"titleless\":0,\"borderless\":0}]'), ('default', 'page_index', 'side', '[{\"id\":\"2\",\"grid\":\"\",\"titleless\":0,\"borderless\":0},{\"id\":\"9\",\"grid\":\"\",\"titleless\":0,\"borderless\":0}]'), ('default', 'page_view', 'side', '[{\"id\":\"2\",\"grid\":\"\",\"titleless\":0,\"borderless\":0},{\"id\":\"9\",\"grid\":\"\",\"titleless\":0,\"borderless\":0}]');
COMMIT;

-- ----------------------------
--  Table structure for `mz_log`
-- ----------------------------
DROP TABLE IF EXISTS `mz_log`;
CREATE TABLE `mz_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '系统日志表',
  `m` varchar(25) DEFAULT NULL COMMENT '模块',
  `c` varchar(25) DEFAULT NULL COMMENT '控制器',
  `a` varchar(25) DEFAULT NULL COMMENT '动作',
  `item_id` varchar(1000) DEFAULT NULL COMMENT '单品id',
  `sql_str` varchar(1000) DEFAULT NULL COMMENT 'sql语句',
  `sql_act` varchar(20) DEFAULT NULL,
  `sql_table` varchar(25) DEFAULT NULL,
  `add_user` varchar(25) DEFAULT NULL COMMENT '操作员',
  `add_time` datetime DEFAULT NULL COMMENT '添加时间',
  `ip` varchar(20) DEFAULT NULL COMMENT '操作IP',
  `agent` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `item_id` (`item_id`(255))
) ENGINE=InnoDB AUTO_INCREMENT=104 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `mz_log`
-- ----------------------------
BEGIN;
INSERT INTO `mz_log` VALUES ('1', 'admin', 'index', 'login', '', 'UPDATE `meizai`.`mz_admin` SET `lastloginip`=\'127.0.0.1\',`lastlogintime`=\'1411804826\' WHERE  `userid` = \'29\'', 'update', 'mz_admin', '', '2014-09-27 16:00:26', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/37.0.2062.124 Safari/537.36'), ('2', 'Content', 'index', 'saveObject', '', 'INSERT INTO `beauty`.`mz_users`(`title`,`intro`) VALUES (\'测试案例\',\'测试2\')', 'insert', 'mz_users', '', '2014-11-01 09:33:58', '192.168.1.104', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/37.0.2062.124 Safari/537.36'), ('3', 'Content', 'index', 'saveObject', '', 'INSERT INTO `beauty`.`mz_users`(`title`,`intro`) VALUES (\'测试案例\',\'测试2\')', 'insert', 'mz_users', '', '2014-11-01 09:35:42', '192.168.1.104', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/37.0.2062.124 Safari/537.36'), ('4', 'Content', 'index', 'saveObject', '', 'INSERT INTO `beauty`.`mz_content`(`title`,`intro`) VALUES (\'测试案例\',\'测试2\')', 'insert', 'mz_content', '', '2014-11-01 09:45:37', '192.168.1.104', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/37.0.2062.124 Safari/537.36'), ('5', 'Content', 'index', 'saveObject', '', 'INSERT INTO `beauty`.`mz_content`(`title`,`intro`) VALUES (\'测试案例\',\'测试2\')', 'insert', 'mz_content', '', '2014-11-01 09:47:01', '192.168.1.104', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/37.0.2062.124 Safari/537.36'), ('6', 'Content', 'index', 'saveObject', '2', 'INSERT INTO `beauty`.`mz_contents`(`title`,`intro`) VALUES (\'测试案例\',\'测试2\')', 'insert', 'mz_contents', '', '2014-11-01 09:47:30', '192.168.1.104', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/37.0.2062.124 Safari/537.36'), ('7', 'Content', 'index', 'saveObject', '3', 'INSERT INTO `beauty`.`mz_contents`(`title`,`intro`) VALUES (\'测试案例\',\'测试2\')', 'insert', 'mz_contents', '', '2014-11-01 09:53:19', '192.168.1.103', 'Dalvik/1.6.0 (Linux; U; Android 4.4.4; M355 Build/KTU84P)'), ('8', 'SecondHand', 'index', 'save', '8', 'INSERT INTO `beauty`.`mz_secondhand`(`intro`,`title`,`type`) VALUES (\'9成新二手冰箱\',\'转让二手冰箱\',\'0\')', 'insert', 'mz_secondhand', '', '2014-11-06 22:59:58', '192.168.1.100', 'Dalvik/1.6.0 (Linux; U; Android 4.4.4; M355 Build/KTU84P)'), ('9', 'SecondHand', 'index', 'save', '9', 'INSERT INTO `beauty`.`mz_secondhand`(`intro`,`title`,`type`) VALUES (\'9成新二手冰箱\',\'转让二手冰箱\',\'0\')', 'insert', 'mz_secondhand', '', '2014-11-06 23:01:09', '192.168.1.100', 'Dalvik/1.6.0 (Linux; U; Android 4.4.4; M355 Build/KTU84P)'), ('10', 'SecondHand', 'index', 'save', '10', 'INSERT INTO `beauty`.`mz_secondhand`(`intro`,`title`,`type`) VALUES (\'9成新二手冰箱\',\'转让二手冰箱\',\'0\')', 'insert', 'mz_secondhand', '', '2014-11-06 23:08:53', '192.168.1.100', 'Dalvik/1.6.0 (Linux; U; Android 4.4.4; M355 Build/KTU84P)'), ('11', 'SecondHand', 'index', 'save', '11', 'INSERT INTO `beauty`.`mz_secondhand`(`intro`,`title`,`type`) VALUES (\'9成新二手冰箱\',\'转让二手冰箱\',\'0\')', 'insert', 'mz_secondhand', '', '2014-11-06 23:08:55', '192.168.1.100', 'Dalvik/1.6.0 (Linux; U; Android 4.4.4; M355 Build/KTU84P)'), ('12', 'SecondHand', 'index', 'save', '12', 'INSERT INTO `beauty`.`mz_secondhand`(`intro`,`title`,`type`) VALUES (\'9成新二手冰箱\',\'转让二手冰箱\',\'0\')', 'insert', 'mz_secondhand', '', '2014-11-06 23:11:24', '192.168.1.100', 'Dalvik/1.6.0 (Linux; U; Android 4.4.4; M355 Build/KTU84P)'), ('13', 'test', 'index', 'insertTotuan', '11', 'INSERT INTO `beauty`.`mz_tuan`(`title`,`intro`) VALUES (\'hj\',\'wangzhiwei\')', 'insert', 'mz_tuan', '', '2014-11-08 19:07:25', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; Trident/7.0; rv:11.0) like Gecko'), ('14', 'test', 'index', 'insertTotuan', '12', 'INSERT INTO `beauty`.`mz_tuan`(`title`,`intro`) VALUES (\'hj\',\'wangzhiwei\')', 'insert', 'mz_tuan', '', '2014-11-08 19:08:30', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; Trident/7.0; rv:11.0) like Gecko'), ('15', 'test', 'index', 'insertTotuan', '13', 'INSERT INTO `beauty`.`mz_tuan`(`title`,`intro`) VALUES (\'hj\',\'wangzhiwei\')', 'insert', 'mz_tuan', '', '2014-11-08 19:09:58', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; Trident/7.0; rv:11.0) like Gecko'), ('16', 'test', 'index', 'insertTotuan', '14', 'INSERT INTO `beauty`.`mz_tuan`(`title`,`intro`) VALUES (\'hj\',\'wangzhiwei\')', 'insert', 'mz_tuan', '', '2014-11-08 19:11:35', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; Trident/7.0; rv:11.0) like Gecko'), ('17', 'test', 'index', 'insertTotuan', '15', 'INSERT INTO `beauty`.`mz_tuan`(`title`,`intro`) VALUES (\'hj\',\'wangzhiwei\')', 'insert', 'mz_tuan', '', '2014-11-08 19:12:29', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; Trident/7.0; rv:11.0) like Gecko'), ('18', 'test', 'index', 'insertTotuan', '16', 'INSERT INTO `beauty`.`mz_tuan`(`title`,`intro`) VALUES (\'hj\',\'wangzhiwei\')', 'insert', 'mz_tuan', '', '2014-11-08 19:13:24', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; Trident/7.0; rv:11.0) like Gecko'), ('19', 'test', 'index', 'insertTotuan', '17', 'INSERT INTO `beauty`.`mz_tuan`(`title`,`intro`) VALUES (\'hj\',\'wangzhiwei\')', 'insert', 'mz_tuan', '', '2014-11-08 19:19:17', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; Trident/7.0; rv:11.0) like Gecko'), ('20', 'test', 'index', 'insertTotuan', '18', 'INSERT INTO `beauty`.`mz_tuan`(`title`,`intro`) VALUES (\'hj\',\'wangzhiwei\')', 'insert', 'mz_tuan', '', '2014-11-08 19:19:54', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; Trident/7.0; rv:11.0) like Gecko'), ('21', 'test', 'index', 'insertTotuan', '19', 'INSERT INTO `beauty`.`mz_tuan`(`title`,`intro`) VALUES (\'hj\',\'wangzhiwei\')', 'insert', 'mz_tuan', '', '2014-11-08 19:19:56', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; Trident/7.0; rv:11.0) like Gecko'), ('22', 'test', 'index', 'insertTotuan', '20', 'INSERT INTO `beauty`.`mz_tuan`(`title`,`intro`) VALUES (\'hj\',\'wangzhiwei\')', 'insert', 'mz_tuan', '', '2014-11-08 19:19:57', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; Trident/7.0; rv:11.0) like Gecko'), ('23', 'test', 'index', 'insertTotuan', '21', 'INSERT INTO `beauty`.`mz_tuan`(`title`,`intro`) VALUES (\'诚毅一日游\',\'不用钱\')', 'insert', 'mz_tuan', '', '2014-11-08 19:24:03', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; Trident/7.0; rv:11.0) like Gecko'), ('24', 'test', 'index', 'insertTotuan', '22', 'INSERT INTO `beauty`.`mz_tuan`(`title`,`intro`) VALUES (\'诚毅一日游\',\'不用钱\')', 'insert', 'mz_tuan', '', '2014-11-08 19:24:26', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; Trident/7.0; rv:11.0) like Gecko'), ('25', 'test', 'index', 'insertTotuan', '23', 'INSERT INTO `beauty`.`mz_tuan`(`title`,`intro`) VALUES (\'诚毅一日游\',\'不用钱\')', 'insert', 'mz_tuan', '', '2014-11-08 19:24:58', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; Trident/7.0; rv:11.0) like Gecko'), ('26', 'test', 'index', 'insertTotuan', '24', 'INSERT INTO `beauty`.`mz_tuan`(`title`,`intro`) VALUES (\'诚毅一日游\',\'不用钱\')', 'insert', 'mz_tuan', '', '2014-11-08 19:27:30', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; Trident/7.0; rv:11.0) like Gecko'), ('27', 'test', 'index', 'deleteTotuan', '', 'DELETE FROM `beauty`.`mz_tuan` WHERE  `id` = \'24\'', 'delete', 'mz_tuan', '', '2014-11-08 19:32:40', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; Trident/7.0; rv:11.0) like Gecko'), ('28', 'test', 'index', 'deleteTotuan', '', 'DELETE FROM `beauty`.`mz_tuan` WHERE  `id` = \'24\'', 'delete', 'mz_tuan', '', '2014-11-08 19:35:50', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; Trident/7.0; rv:11.0) like Gecko'), ('29', 'test', 'index', 'deleteTotuan', '', 'DELETE FROM `beauty`.`mz_tuan` WHERE  `id` = \'23\'', 'delete', 'mz_tuan', '', '2014-11-08 19:36:11', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; Trident/7.0; rv:11.0) like Gecko'), ('30', 'test', 'index', 'deleteTotuan', '', 'DELETE FROM `beauty`.`mz_tuan` WHERE  `id` = \'23\'', 'delete', 'mz_tuan', '', '2014-11-08 19:36:13', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; Trident/7.0; rv:11.0) like Gecko'), ('31', 'test', 'index', 'deleteTotuan', '', 'DELETE FROM `beauty`.`mz_tuan` WHERE  `id` = \'22\'', 'delete', 'mz_tuan', '', '2014-11-08 19:36:19', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; Trident/7.0; rv:11.0) like Gecko'), ('32', 'test', 'index', 'updateTotuan', '', 'UPDATE `beauty`.`Array` SET `title`=\'诚毅二日游\' WHERE mz_tuan', 'update', 'Array', '', '2014-11-08 19:43:51', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; Trident/7.0; rv:11.0) like Gecko'), ('33', 'test', 'index', 'updateTotuan', '', 'UPDATE `beauty`.`Array` SET mz_tuan WHERE  `title` = \'诚毅二日游\'', 'update', 'Array', '', '2014-11-08 19:46:13', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; Trident/7.0; rv:11.0) like Gecko'), ('34', 'test', 'index', 'updateTotuan', '', 'UPDATE `beauty`.`mz_tuan` SET `title`=\'诚毅二日游\' WHERE  `id` = \'11\'', 'update', 'mz_tuan', '', '2014-11-08 19:46:50', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; Trident/7.0; rv:11.0) like Gecko'), ('35', 'SecondHand', 'index', 'save', '13', 'INSERT INTO `beauty`.`mz_secondhand`(`author`,`intro`,`price`,`secondPrice`,`title`) VALUES (\'613ee4faef\',\'gghcv\',\'80\',\'45\',\'test\')', 'insert', 'mz_secondhand', '', '2014-11-09 19:10:49', '36.248.229.215', 'Dalvik/1.6.0 (Linux; U; Android 4.1.2; MI-ONE Plus MIUI/4.2.7)'), ('36', 'SecondHand', 'index', 'save', '14', 'INSERT INTO `beauty`.`mz_secondhand`(`author`,`intro`,`secondPrice`,`title`,`type`) VALUES (\'613ee4faef\',\'fghhh\',\'666\',\'ghhb\',\'1\')', 'insert', 'mz_secondhand', '', '2014-11-09 19:17:47', '36.248.229.215', 'Dalvik/1.6.0 (Linux; U; Android 4.1.2; MI-ONE Plus MIUI/4.2.7)'), ('37', 'SecondHand', 'index', 'save', '15', 'INSERT INTO `beauty`.`mz_secondhand`(`author`,`intro`,`price`,`secondPrice`,`title`,`type`) VALUES (\'613ee4faef\',\'eedsd\',\'668\',\'25\',\'ghhjbh\',\'0\')', 'insert', 'mz_secondhand', '', '2014-11-09 19:18:24', '36.248.229.215', 'Dalvik/1.6.0 (Linux; U; Android 4.1.2; MI-ONE Plus MIUI/4.2.7)'), ('38', 'SecondHand', 'index', 'save', '16', 'INSERT INTO `beauty`.`mz_secondhand`(`author`,`intro`,`secondPrice`,`title`,`type`) VALUES (\'7095d0df5d\',\'求购\',\'50\',\'宝贝\',\'1\')', 'insert', 'mz_secondhand', '', '2014-11-10 07:02:26', '222.79.77.77', 'Dalvik/1.6.0 (Linux; U; Android 4.4.4; M355 Build/KTU84P)'), ('39', 'SecondHand', 'index', 'save', '17', 'INSERT INTO `beauty`.`mz_secondhand`(`author`,`intro`,`price`,`secondPrice`,`title`,`type`) VALUES (\'8fe2db45e1\',\'健康快乐\',\'255\',\'12\',\'爸爸\',\'0\')', 'insert', 'mz_secondhand', '', '2014-11-12 21:06:13', '117.136.11.73', 'Dalvik/1.6.0 (Linux; U; Android 4.0.4; GT-S7562 Build/IMM76I)'), ('40', 'SecondHand', 'index', 'save', '18', 'INSERT INTO `beauty`.`mz_secondhand`(`author`,`intro`,`secondPrice`,`title`,`type`) VALUES (\'8fe2db45e1\',\'qqq\',\'58\',\'eee\',\'1\')', 'insert', 'mz_secondhand', '', '2014-11-13 01:01:40', '117.136.11.73', 'Dalvik/1.6.0 (Linux; U; Android 4.0.4; GT-S7562 Build/IMM76I)'), ('41', 'SecondHand', 'index', 'save', '19', 'INSERT INTO `beauty`.`mz_secondhand`(`author`,`intro`,`price`,`secondPrice`,`title`,`type`,`created`) VALUES (\'8fe2db45e1\',\'qqqq\',\'34\',\'12\',\'aaa\',\'0\',\'1415812006472\')', 'insert', 'mz_secondhand', '', '2014-11-13 01:06:46', '117.136.11.73', 'Dalvik/1.6.0 (Linux; U; Android 4.0.4; GT-S7562 Build/IMM76I)'), ('42', 'SecondHand', 'index', 'save', '20', 'INSERT INTO `beauty`.`mz_secondhand`(`author`,`intro`,`price`,`secondPrice`,`title`,`type`,`created`) VALUES (\'8fe2db45e1\',\'qq\',\'13\',\'12\',\'qwr\',\'0\',\'1415812312426\')', 'insert', 'mz_secondhand', '', '2014-11-13 01:11:53', '117.136.11.73', 'Dalvik/1.6.0 (Linux; U; Android 4.0.4; GT-S7562 Build/IMM76I)'), ('43', 'SecondHand', 'index', 'save', '21', 'INSERT INTO `beauty`.`mz_secondhand`(`author`,`intro`,`price`,`secondPrice`,`title`,`type`,`created`) VALUES (\'8fe2db45e1\',\'qqq\',\'187\',\'144\',\'www\',\'0\',\'1415812561078\')', 'insert', 'mz_secondhand', '', '2014-11-13 01:16:01', '117.136.11.73', 'Dalvik/1.6.0 (Linux; U; Android 4.0.4; GT-S7562 Build/IMM76I)'), ('44', 'SecondHand', 'index', 'save', '22', 'INSERT INTO `beauty`.`mz_secondhand`(`author`,`intro`,`price`,`secondPrice`,`title`,`type`,`created`) VALUES (\'8fe2db45e1\',\'jjjj\',\'14\',\'12\',\'kjkk\',\'0\',\'1415812717702\')', 'insert', 'mz_secondhand', '', '2014-11-13 01:18:37', '117.136.11.73', 'Dalvik/1.6.0 (Linux; U; Android 4.0.4; GT-S7562 Build/IMM76I)'), ('45', 'SecondHand', 'index', 'save', '23', 'INSERT INTO `beauty`.`mz_secondhand`(`author`,`intro`,`price`,`secondPrice`,`title`,`type`,`created`) VALUES (\'8fe2db45e1\',\'全新\',\'4000\',\'2080\',\'2笔记本\',\'0\',\'1415870516034\')', 'insert', 'mz_secondhand', '', '2014-11-13 17:22:00', '117.136.11.72', 'Dalvik/1.6.0 (Linux; U; Android 4.0.4; GT-S7562 Build/IMM76I)'), ('46', 'SecondHand', 'index', 'save', '24', 'INSERT INTO `beauty`.`mz_secondhand`(`author`,`intro`,`price`,`secondPrice`,`title`,`type`,`created`) VALUES (\'8fe2db45e1\',\'全新\',\'4000\',\'2080\',\'2笔记本\',\'0\',\'1415870652870\')', 'insert', 'mz_secondhand', '', '2014-11-13 17:24:14', '117.136.11.72', 'Dalvik/1.6.0 (Linux; U; Android 4.0.4; GT-S7562 Build/IMM76I)'), ('47', 'SecondHand', 'index', 'save', '25', 'INSERT INTO `beauty`.`mz_secondhand`(`author`,`intro`,`price`,`secondPrice`,`title`,`type`,`created`) VALUES (\'8fe2db45e1\',\'音乐\',\'14\',\'12\',\'贝多芬\',\'0\',\'1415955186114\')', 'insert', 'mz_secondhand', '', '2014-11-14 16:53:05', '117.136.11.64', 'Dalvik/1.6.0 (Linux; U; Android 4.0.4; GT-S7562 Build/IMM76I)'), ('48', 'SecondHand', 'index', 'save', '26', 'INSERT INTO `beauty`.`mz_secondhand`(`author`,`intro`,`price`,`secondPrice`,`title`,`type`,`created`) VALUES (\'8fe2db45e1\',\'布局\',\'34\',\'12\',\'吧\',\'0\',\'1415955420433\')', 'insert', 'mz_secondhand', '', '2014-11-14 16:56:59', '117.136.11.64', 'Dalvik/1.6.0 (Linux; U; Android 4.0.4; GT-S7562 Build/IMM76I)'), ('49', 'Tuan', 'index', 'save', '25', 'INSERT INTO `beauty`.`mz_tuan`(`author`,`intro`,`price`,`specialPrice`,`title`,`created`) VALUES (\'8fe2db45e1\',\'aaaa\',\'1000\',\'123\',\'asd\',\'1416051418319\')', 'insert', 'mz_tuan', '', '2014-11-15 19:36:56', '218.85.118.193', 'Dalvik/1.6.0 (Linux; U; Android 4.0.4; GT-S7562 Build/IMM76I)'), ('50', 'Tuan', 'index', 'save', '26', 'INSERT INTO `beauty`.`mz_tuan`(`author`,`intro`,`price`,`specialPrice`,`title`,`created`) VALUES (\'8fe2db45e1\',\'aaaa\',\'1000\',\'123\',\'asd\',\'1416051426753\')', 'insert', 'mz_tuan', '', '2014-11-15 19:37:03', '218.85.118.193', 'Dalvik/1.6.0 (Linux; U; Android 4.0.4; GT-S7562 Build/IMM76I)'), ('51', 'SecondHand', 'index', 'save', '', 'INSERT INTO `beauty`.`mz_secondhand`(`author`,`intro`,`price`,`secondPrice`,`title`,`type`,`created`) VALUES (\'8fe2db45e1\',\'把\',\'14\',\'12\',\'吧，\',\'0\',\'1416052281692\')', 'insert', 'mz_secondhand', '', '2014-11-15 19:51:18', '218.85.118.193', 'Dalvik/1.6.0 (Linux; U; Android 4.0.4; GT-S7562 Build/IMM76I)'), ('52', 'SecondHand', 'index', 'save', '27', 'INSERT INTO `beauty`.`mz_secondhand`(`author`,`intro`,`price`,`secondPrice`,`title`,`type`,`created`) VALUES (\'8fe2db45e1\',\'把\',\'14\',\'12\',\'吧，\',\'0\',\'1416052505440\')', 'insert', 'mz_secondhand', '', '2014-11-15 19:55:02', '218.85.118.193', 'Dalvik/1.6.0 (Linux; U; Android 4.0.4; GT-S7562 Build/IMM76I)'), ('53', 'SecondHand', 'index', 'save', '', 'INSERT INTO `beauty`.`mz_secondhand`(`author`,`intro`,`price`,`secondPrice`,`title`,`type`,`created`) VALUES (\'8fe2db45e1\',\'，吧\',\'22\',\'222\',\'吧\',\'0\',\'1416053377370\')', 'insert', 'mz_secondhand', '', '2014-11-15 20:09:34', '218.85.118.193', 'Dalvik/1.6.0 (Linux; U; Android 4.0.4; GT-S7562 Build/IMM76I)'), ('54', 'Tuan', 'index', 'save', '27', 'INSERT INTO `beauty`.`mz_tuan`(`author`,`intro`,`price`,`specialPrice`,`title`,`created`) VALUES (\'8fe2db45e1\',\'aaaa\',\'1000\',\'123\',\'asd\',\'1416053396906\')', 'insert', 'mz_tuan', '', '2014-11-15 20:09:53', '218.85.118.193', 'Dalvik/1.6.0 (Linux; U; Android 4.0.4; GT-S7562 Build/IMM76I)'), ('55', 'Tuan', 'index', 'save', '28', 'INSERT INTO `beauty`.`mz_tuan`(`author`,`intro`,`price`,`specialPrice`,`title`,`created`) VALUES (\'8fe2db45e1\',\'aaaa\',\'1000\',\'123\',\'asd\',\'1416053683336\')', 'insert', 'mz_tuan', '', '2014-11-15 20:14:40', '218.85.118.193', 'Dalvik/1.6.0 (Linux; U; Android 4.0.4; GT-S7562 Build/IMM76I)'), ('56', 'SecondHand', 'index', 'save', '28', 'INSERT INTO `beauty`.`mz_secondhand`(`author`,`intro`,`title`,`type`,`created`) VALUES (\'8fe2db45e1\',\'还\',\'，哈哈哈\',\'0\',\'1416053824836\')', 'insert', 'mz_secondhand', '', '2014-11-15 20:17:01', '218.85.118.193', 'Dalvik/1.6.0 (Linux; U; Android 4.0.4; GT-S7562 Build/IMM76I)'), ('57', 'Tuan', 'index', 'save', '29', 'INSERT INTO `beauty`.`mz_tuan`(`author`,`intro`,`price`,`specialPrice`,`title`,`created`) VALUES (\'8fe2db45e1\',\'aaaa\',\'1000\',\'123\',\'asd\',\'1416054065435\')', 'insert', 'mz_tuan', '', '2014-11-15 20:21:02', '218.85.118.193', 'Dalvik/1.6.0 (Linux; U; Android 4.0.4; GT-S7562 Build/IMM76I)'), ('58', 'SecondHand', 'index', 'save', '29', 'INSERT INTO `beauty`.`mz_secondhand`(`author`,`intro`,`title`,`type`,`created`) VALUES (\'8fe2db45e1\',\'\',\'刹那间隙，\',\'1\',\'1416054729256\')', 'insert', 'mz_secondhand', '', '2014-11-15 20:32:06', '218.85.118.193', 'Dalvik/1.6.0 (Linux; U; Android 4.0.4; GT-S7562 Build/IMM76I)'), ('59', 'Tuan', 'index', 'save', '30', 'INSERT INTO `beauty`.`mz_tuan`(`author`,`intro`,`orderNum`,`price`,`specialPrice`,`title`,`created`) VALUES (\'8fe2db45e1\',\'轰轰烈烈丽公交来看看挥金如土嗯剧他共和国内\',\'0\',\'123\',\'100\',\'集美大学旅游\',\'1416062466637\')', 'insert', 'mz_tuan', '', '2014-11-15 22:41:03', '218.85.118.193', 'Dalvik/1.6.0 (Linux; U; Android 4.0.4; GT-S7562 Build/IMM76I)'), ('60', 'Tuan', 'index', 'save', '31', 'INSERT INTO `beauty`.`mz_tuan`(`author`,`intro`,`orderNum`,`price`,`specialPrice`,`title`,`created`) VALUES (\'8fe2db45e1\',\'方法\',\'0\',\'\',\'12\',\'方法\',\'1416064896337\')', 'insert', 'mz_tuan', '', '2014-11-15 23:21:33', '218.85.118.193', 'Dalvik/1.6.0 (Linux; U; Android 4.0.4; GT-S7562 Build/IMM76I)'), ('61', 'SecondHand', 'index', 'save', '30', 'INSERT INTO `beauty`.`mz_secondhand`(`author`,`intro`,`secondPrice`,`title`,`type`,`created`) VALUES (\'8fe2db45e1\',\'干货红红火火车站\',\'14\',\'哈哈哈\',\'1\',\'1416066107543\')', 'insert', 'mz_secondhand', '', '2014-11-15 23:41:44', '218.85.118.193', 'Dalvik/1.6.0 (Linux; U; Android 4.0.4; GT-S7562 Build/IMM76I)'), ('62', 'Tuan', 'index', 'save', '', 'INSERT INTO `beauty`.`mz_tuan`(`intro`,`orderNum`,`price`,`specialPrice`,`title`,`uid`,`user`,`created`) VALUES (\'，方法师\',\'0\',\'12\',\'10\',\'方法\',\'8fe2db45e1\',\'Array\',\'1416117566309\')', 'insert', 'mz_tuan', '', '2014-11-16 13:59:24', '117.136.11.65', 'Dalvik/1.6.0 (Linux; U; Android 4.0.4; GT-S7562 Build/IMM76I)'), ('63', 'Tuan', 'index', 'save', '32', 'INSERT INTO `beauty`.`mz_tuan`(`intro`,`orderNum`,`price`,`specialPrice`,`title`,`uid`,`created`) VALUES (\'\',\'0\',\'\',\'12\',\'流量\',\'8fe2db45e1\',\'1416117706133\')', 'insert', 'mz_tuan', '', '2014-11-16 14:01:43', '117.136.11.65', 'Dalvik/1.6.0 (Linux; U; Android 4.0.4; GT-S7562 Build/IMM76I)'), ('64', 'Tuan', 'index', 'save', '', 'INSERT INTO `beauty`.`mz_tuan`(`intro`,`orderNum`,`price`,`specialPrice`,`title`,`uid`,`user`,`created`) VALUES (\'\',\'0\',\'\',\'12\',\'流量\',\'1\',\'Array\',\'1416119554334\')', 'insert', 'mz_tuan', '', '2014-11-16 14:32:33', '117.136.11.65', 'Dalvik/1.6.0 (Linux; U; Android 4.0.4; GT-S7562 Build/IMM76I)'), ('65', 'Tuan', 'index', 'save', '', 'INSERT INTO `beauty`.`mz_tuan`(`intro`,`orderNum`,`price`,`specialPrice`,`title`,`uid`,`user`,`created`) VALUES (\'\',\'0\',\'\',\'12\',\'流量\',\'1\',\'Array\',\'1416119554334\')', 'insert', 'mz_tuan', '', '2014-11-16 14:32:36', '117.136.11.65', 'Dalvik/1.6.0 (Linux; U; Android 4.0.4; GT-S7562 Build/IMM76I)'), ('66', 'user', 'index', 'register', '', 'INSERT INTO `beauty`.`mz_users`(`collegeId`,`location`,`appVersion`,`password`,`userType`) VALUES (\'0\',\'24.585667,118.104096\',\'1.0\',\'123456\',\'0\')', 'insert', 'mz_users', '', '2014-11-17 20:50:07', '27.149.144.181', 'Dalvik/1.6.0 (Linux; U; Android 4.1.2; HUAWEI C8815 Build/HuaweiC8815)'), ('67', 'user', 'index', 'register', '', 'INSERT INTO `beauty`.`mz_users`(`collegeId`,`location`,`appVersion`,`password`,`userType`) VALUES (\'0\',\'24.588136,118.101298\',\'1.0\',\'123456\',\'0\')', 'insert', 'mz_users', '', '2014-11-17 21:01:54', '27.149.144.181', 'Dalvik/1.6.0 (Linux; U; Android 4.1.2; HUAWEI C8815 Build/HuaweiC8815)'), ('68', 'SecondHand', 'index', 'save', '31', 'INSERT INTO `beauty`.`mz_secondhand`(`author`,`intro`,`price`,`secondPrice`,`title`,`type`,`created`) VALUES (\'0d07824bc3\',\'超卡哇伊\',\'3000\',\'2000\',\'猫猫\',\'0\',\'1416268957960\')', 'insert', 'mz_secondhand', '', '2014-11-18 08:02:40', '27.149.151.170', 'Dalvik/1.6.0 (Linux; U; Android 4.1.2; HUAWEI C8815 Build/HuaweiC8815)'), ('69', 'SecondHand', 'index', 'save', '32', 'INSERT INTO `beauty`.`mz_secondhand`(`author`,`intro`,`price`,`secondPrice`,`title`,`type`,`created`) VALUES (\'0d07824bc3\',\'嗯\',\'1200\',\'1000\',\'123\',\'0\',\'1416284443661\')', 'insert', 'mz_secondhand', '', '2014-11-18 12:20:27', '27.149.146.251', 'Dalvik/1.6.0 (Linux; U; Android 4.1.2; HUAWEI C8815 Build/HuaweiC8815)'), ('70', 'SecondHand', 'index', 'save', '33', 'INSERT INTO `beauty`.`mz_secondhand`(`author`,`intro`,`price`,`secondPrice`,`title`,`type`,`created`) VALUES (\'0d07824bc3\',\'22222\',\'2222\',\'1111\',\'123\',\'0\',\'1416286263926\')', 'insert', 'mz_secondhand', '', '2014-11-18 12:50:48', '27.149.146.251', 'Dalvik/1.6.0 (Linux; U; Android 4.1.2; HUAWEI C8815 Build/HuaweiC8815)'), ('71', 'SecondHand', 'index', 'save', '34', 'INSERT INTO `beauty`.`mz_secondhand`(`author`,`intro`,`price`,`secondPrice`,`title`,`type`,`created`) VALUES (\'0d07824bc3\',\'喵喵喵\',\'223\',\'123\',\'猫咪\',\'0\',\'1416287807553\')', 'insert', 'mz_secondhand', '', '2014-11-18 13:16:30', '27.149.146.251', 'Dalvik/1.6.0 (Linux; U; Android 4.1.2; HUAWEI C8815 Build/HuaweiC8815)'), ('72', 'SecondHand', 'index', 'save', '35', 'INSERT INTO `beauty`.`mz_secondhand`(`author`,`intro`,`price`,`secondPrice`,`title`,`type`,`created`) VALUES (\'7095d0df5d\',\'测试一下\',\'6000\',\'500\',\'转二手电脑\',\'0\',\'1416296609793\')', 'insert', 'mz_secondhand', '', '2014-11-18 15:43:30', '117.136.11.65', 'Dalvik/1.6.0 (Linux; U; Android 4.4.4; M355 Build/KTU84P)'), ('73', 'SecondHand', 'index', 'save', '36', 'INSERT INTO `beauty`.`mz_secondhand`(`author`,`intro`,`price`,`secondPrice`,`title`,`type`,`created`) VALUES (\'7095d0df5d\',\'111\',\'60\',\'50\',\'111\',\'0\',\'1416297254103\')', 'insert', 'mz_secondhand', '', '2014-11-18 15:54:15', '117.136.11.65', 'Dalvik/1.6.0 (Linux; U; Android 4.4.4; M355 Build/KTU84P)'), ('74', 'SecondHand', 'index', 'save', '37', 'INSERT INTO `beauty`.`mz_secondhand`(`author`,`intro`,`title`,`type`,`created`) VALUES (\'7095d0df5d\',\'11\',\'测试\',\'0\',\'1416298224801\')', 'insert', 'mz_secondhand', '', '2014-11-18 16:10:27', '117.136.11.65', 'Dalvik/1.6.0 (Linux; U; Android 4.4.4; M355 Build/KTU84P)'), ('75', 'Tuan', 'index', 'save', '33', 'INSERT INTO `beauty`.`mz_tuan`(`intro`,`orderNum`,`price`,`specialPrice`,`title`,`uid`,`created`) VALUES (\'60\',\'0\',\'14\',\'5\',\'测试\',\'1\',\'1416299747894\')', 'insert', 'mz_tuan', '', '2014-11-18 16:35:48', '117.136.11.66', 'Dalvik/1.6.0 (Linux; U; Android 4.4.4; M355 Build/KTU84P)'), ('76', 'SecondHand', 'index', 'save', '38', 'INSERT INTO `beauty`.`mz_secondhand`(`author`,`intro`,`price`,`secondPrice`,`shLocation`,`title`,`type`,`created`) VALUES (\'7095d0df5d\',\'22\',\'60\',\'50\',\'24.4918,118.191627\',\'22\',\'0\',\'1416300039759\')', 'insert', 'mz_secondhand', '', '2014-11-18 16:40:40', '117.136.11.66', 'Dalvik/1.6.0 (Linux; U; Android 4.4.4; M355 Build/KTU84P)'), ('77', 'SecondHand', 'index', 'save', '39', 'INSERT INTO `beauty`.`mz_secondhand`(`author`,`intro`,`price`,`secondPrice`,`shLocation`,`title`,`type`,`created`) VALUES (\'7095d0df5d\',\'8888\',\'60\',\'50\',\'118.191627,24.4918\',\'333\',\'0\',\'1416300168117\')', 'insert', 'mz_secondhand', '', '2014-11-18 16:42:48', '117.136.11.66', 'Dalvik/1.6.0 (Linux; U; Android 4.4.4; M355 Build/KTU84P)'), ('78', 'SecondHand', 'index', 'save', '40', 'INSERT INTO `beauty`.`mz_secondhand`(`author`,`intro`,`price`,`secondPrice`,`shLocation`,`title`,`type`,`created`) VALUES (\'7095d0df5d\',\'8888\',\'70\',\'60\',\'118.191627,24.4918\',\'5555\',\'0\',\'1416300670759\')', 'insert', 'mz_secondhand', '', '2014-11-18 16:51:10', '117.136.11.66', 'Dalvik/1.6.0 (Linux; U; Android 4.4.4; M355 Build/KTU84P)'), ('79', 'SecondHand', 'index', 'save', '41', 'INSERT INTO `beauty`.`mz_secondhand`(`author`,`intro`,`price`,`secondPrice`,`shLocation`,`title`,`type`,`created`) VALUES (\'7095d0df5d\',\'999\',\'60\',\'50\',\'118.191627,24.4918\',\'888\',\'0\',\'1416301004549\')', 'insert', 'mz_secondhand', '', '2014-11-18 16:56:44', '117.136.11.66', 'Dalvik/1.6.0 (Linux; U; Android 4.4.4; M355 Build/KTU84P)'), ('80', 'SecondHand', 'index', 'save', '42', 'INSERT INTO `beauty`.`mz_secondhand`(`author`,`intro`,`title`,`type`,`created`) VALUES (\'7095d0df5d\',\'666\',\'111\',\'0\',\'1416301173361\')', 'insert', 'mz_secondhand', '', '2014-11-18 17:00:01', '117.136.11.66', 'Dalvik/1.6.0 (Linux; U; Android 4.4.4; M355 Build/KTU84P)'), ('81', 'SecondHand', 'index', 'save', '43', 'INSERT INTO `beauty`.`mz_secondhand`(`author`,`intro`,`title`,`type`,`created`) VALUES (\'0d07824bc3\',\'123\',\'123321\',\'0\',\'1416302381729\')', 'insert', 'mz_secondhand', '', '2014-11-18 17:19:27', '27.149.158.24', 'Dalvik/1.6.0 (Linux; U; Android 4.1.2; HUAWEI C8815 Build/HuaweiC8815)'), ('82', 'SecondHand', 'index', 'save', '44', 'INSERT INTO `beauty`.`mz_secondhand`(`author`,`intro`,`price`,`secondPrice`,`title`,`type`,`created`) VALUES (\'0d07824bc3\',\'有一只小猫\',\'1001\',\'1000\',\'小小\',\'0\',\'1416304397375\')', 'insert', 'mz_secondhand', '', '2014-11-18 17:53:02', '27.149.158.24', 'Dalvik/1.6.0 (Linux; U; Android 4.1.2; HUAWEI C8815 Build/HuaweiC8815)'), ('83', 'SecondHand', 'index', 'save', '45', 'INSERT INTO `beauty`.`mz_secondhand`(`author`,`intro`,`price`,`secondPrice`,`title`,`type`,`created`) VALUES (\'8fe2db45e1\',\'\',\'14\',\'12\',\'查查那插件健康快乐吧健康快乐的，我们\',\'0\',\'1416310203681\')', 'insert', 'mz_secondhand', '', '2014-11-18 19:30:05', '117.136.11.72', 'Dalvik/1.6.0 (Linux; U; Android 4.0.4; GT-S7562 Build/IMM76I)'), ('84', 'admin', 'index', 'login', '', 'UPDATE `beauty`.`mz_admin` SET `lastloginip`=\'222.76.241.234\',`lastlogintime`=\'1416365973\' WHERE  `userid` = \'29\'', 'update', 'mz_admin', '', '2014-11-19 10:59:33', '222.76.241.234', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/37.0.2062.124 Safari/537.36'), ('85', 'admin', 'menu', 'add', '422', 'INSERT INTO `beauty`.`mz_admin_menu`(`parentid`,`name`,`m`,`c`,`a`,`data`,`display`) VALUES (\'0\',\'tuiguang\',\'lottery\',\'index\',\'ajax_edit_myaction\',\'\',\'1\')', 'insert', 'mz_admin_menu', '尤齐城', '2014-11-19 11:19:51', '222.76.241.234', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/37.0.2062.124 Safari/537.36'), ('86', 'admin', 'menu', 'delete', '', 'DELETE FROM `beauty`.`mz_admin_menu` WHERE  `id` = \'422\'', 'delete', 'mz_admin_menu', '尤齐城', '2014-11-19 11:20:13', '222.76.241.234', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/37.0.2062.124 Safari/537.36'), ('87', 'user', 'index', 'register', '4', 'INSERT INTO `beauty`.`mz_users`(`password`) VALUES (\'123\')', 'insert', 'mz_users', '', '2014-11-21 14:41:09', '27.149.154.26', 'Dalvik/1.6.0 (Linux; U; Android 4.1.2; HUAWEI C8815 Build/HuaweiC8815)'), ('88', 'user', 'index', 'register', '5', 'INSERT INTO `beauty`.`mz_users`(`password`) VALUES (\'1234\')', 'insert', 'mz_users', '', '2014-11-21 14:42:39', '27.149.154.26', 'Dalvik/1.6.0 (Linux; U; Android 4.1.2; HUAWEI C8815 Build/HuaweiC8815)'), ('89', 'user', 'index', 'register', '6', 'INSERT INTO `beauty`.`mz_users`(`password`) VALUES (\'123\')', 'insert', 'mz_users', '', '2014-11-21 14:44:18', '27.149.150.3', 'Dalvik/1.6.0 (Linux; U; Android 4.1.2; HUAWEI C8815 Build/HuaweiC8815)'), ('90', 'user', 'index', 'register', '7', 'INSERT INTO `beauty`.`mz_users`(`password`) VALUES (\'123\')', 'insert', 'mz_users', '', '2014-11-21 14:51:28', '27.149.150.3', 'Dalvik/1.6.0 (Linux; U; Android 4.1.2; HUAWEI C8815 Build/HuaweiC8815)'), ('91', 'user', 'index', 'register', '8', 'INSERT INTO `beauty`.`mz_users`(`password`) VALUES (\'爸\')', 'insert', 'mz_users', '', '2014-11-21 14:55:38', '27.149.150.3', 'Dalvik/1.6.0 (Linux; U; Android 4.1.2; HUAWEI C8815 Build/HuaweiC8815)'), ('92', 'user', 'index', 'register', '9', 'INSERT INTO `beauty`.`mz_users`(`password`) VALUES (\'123\')', 'insert', 'mz_users', '', '2014-11-21 15:02:36', '27.149.150.3', 'Dalvik/1.6.0 (Linux; U; Android 4.1.2; HUAWEI C8815 Build/HuaweiC8815)'), ('93', 'user', 'index', 'register', '10', 'INSERT INTO `beauty`.`mz_users`(`phone`,`password`) VALUES (\'13779988849\',\'1\')', 'insert', 'mz_users', '', '2014-11-21 17:09:05', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/37.0.2062.124 Safari/537.36'), ('94', 'user', 'index', 'register', '11', 'INSERT INTO `beauty`.`mz_users`(`phone`,`password`) VALUES (\'13779988849\',\'1\')', 'insert', 'mz_users', '', '2014-11-21 17:12:23', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/37.0.2062.124 Safari/537.36'), ('95', 'user', 'index', 'register', '12', 'INSERT INTO `beauty`.`mz_users`(`phone`,`password`) VALUES (\'13779988849\',\'1\')', 'insert', 'mz_users', '', '2014-11-23 08:57:22', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/37.0.2062.124 Safari/537.36'), ('96', 'admin', 'index', 'login', '', 'UPDATE `beauty`.`mz_admin` SET `lastloginip`=\'127.0.0.1\',`lastlogintime`=\'1416709525\' WHERE  `userid` = \'29\'', 'update', 'mz_admin', '', '2014-11-23 10:25:17', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/37.0.2062.124 Safari/537.36'), ('97', 'user', 'index', 'register', '13', 'INSERT INTO `beauty`.`mz_users`(`phone`,`password`) VALUES (\'123\',\'202cb962ac59075b964b07152d234b70\')', 'insert', 'mz_users', '', '2014-11-24 20:07:37', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.65 Safari/537.36'), ('98', 'user', 'index', 'register', '14', 'INSERT INTO `beauty`.`mz_users`(`phone`,`password`) VALUES (\'123\',\'a8f5f167f44f4964e6c998dee827110c\')', 'insert', 'mz_users', '', '2014-11-24 20:12:50', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.65 Safari/537.36'), ('99', 'user', 'index', 'register', '15', 'INSERT INTO `beauty`.`mz_users`(`phone`,`password`,`name`,`email`,`realName`,`location`,`appVersion`,`colleageId`,`collegeName`,`profession`,`grade`) VALUES (\'123\',\'b3ddbc502e307665f346cbd6e52cc10d\',\'123123\',\'1231231\',\'123123\',\'123123\',\'123123\',\'123123\',\'123123\',\'233333\',\'123123123\')', 'insert', 'mz_users', '', '2014-11-24 20:36:06', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.65 Safari/537.36'), ('100', 'user', 'index', 'register', '16', 'INSERT INTO `beauty`.`mz_users`(`phone`,`password`,`name`,`email`,`realName`,`location`,`appVersion`,`colleageId`,`collegeName`,`profession`,`grade`) VALUES (\'123434444\',\'7c4f6b2b09c73c797e036ec6158b0112\',\'123123444\',\'1231231444\',\'12312344\',\'123123444\',\'123123444\',\'123123444\',\'123123444\',\'233333444\',\'123123123444\')', 'insert', 'mz_users', '', '2014-11-24 20:36:48', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.65 Safari/537.36'), ('101', 'user', 'index', 'register', '17', 'INSERT INTO `beauty`.`mz_users`(`phone`,`password`,`name`,`email`,`realName`,`location`,`appVersion`,`colleageId`,`collegeName`,`profession`,`grade`) VALUES (\'123456789\',\'e10adc3949ba59abbe56e057f20f883e\',\'sssssss\',\'\',\'\',\'\',\'\',\'\',\'\',\'\',\'\')', 'insert', 'mz_users', '', '2014-11-24 21:02:21', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.65 Safari/537.36'), ('102', 'secondhand', 'index', 'saveSecondHand', '46', 'INSERT INTO `beauty`.`mz_secondhand`(`title`,`intro`,`type`,`shLocation`,`phoneNumber`) VALUES (\'二手测试黑乎乎\',\'二手测试黑乎乎\',\'0\',\'118.174576,24.478384\',\'15306093806\')', 'insert', 'mz_secondhand', '尤齐城', '2014-11-26 10:21:02', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/37.0.2062.124 Safari/537.36'), ('103', 'admin', 'index', 'login', '', 'UPDATE `beauty`.`mz_admin` SET `lastloginip`=\'121.204.148.226\',`lastlogintime`=\'1417009195\' WHERE  `userid` = \'29\'', 'update', 'mz_admin', '尤齐城', '2014-11-26 21:39:55', '121.204.148.226', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/37.0.2062.124 Safari/537.36');
COMMIT;

-- ----------------------------
--  Table structure for `mz_message`
-- ----------------------------
DROP TABLE IF EXISTS `mz_message`;
CREATE TABLE `mz_message` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `type` char(20) NOT NULL,
  `objectType` varchar(30) NOT NULL DEFAULT '',
  `objectID` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `account` char(30) DEFAULT NULL,
  `from` char(30) NOT NULL,
  `to` char(30) NOT NULL,
  `phone` char(30) NOT NULL,
  `email` varchar(90) NOT NULL,
  `qq` char(30) NOT NULL,
  `date` datetime NOT NULL,
  `content` text NOT NULL,
  `link` varchar(100) NOT NULL,
  `ip` varchar(15) NOT NULL,
  `status` char(20) NOT NULL,
  `public` enum('0','1') NOT NULL DEFAULT '1',
  `readed` enum('0','1') NOT NULL,
  `receiveEmail` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `status` (`status`),
  KEY `object` (`objectType`,`objectID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `mz_oauth`
-- ----------------------------
DROP TABLE IF EXISTS `mz_oauth`;
CREATE TABLE `mz_oauth` (
  `account` varchar(30) NOT NULL,
  `provider` varchar(30) NOT NULL,
  `openID` varchar(60) NOT NULL,
  UNIQUE KEY `account` (`account`,`provider`,`openID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `mz_package`
-- ----------------------------
DROP TABLE IF EXISTS `mz_package`;
CREATE TABLE `mz_package` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `code` varchar(30) NOT NULL,
  `version` varchar(50) NOT NULL,
  `author` varchar(100) NOT NULL,
  `desc` text NOT NULL,
  `license` text NOT NULL,
  `type` varchar(20) NOT NULL DEFAULT 'extension',
  `site` varchar(150) NOT NULL,
  `chanzhiCompatible` varchar(100) NOT NULL,
  `templateCompatible` varchar(100) NOT NULL,
  `installedTime` datetime NOT NULL,
  `depends` varchar(100) NOT NULL,
  `dirs` text NOT NULL,
  `files` text NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`),
  KEY `name` (`name`),
  KEY `addedTime` (`installedTime`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `mz_product`
-- ----------------------------
DROP TABLE IF EXISTS `mz_product`;
CREATE TABLE `mz_product` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `alias` varchar(100) NOT NULL,
  `mall` varchar(255) NOT NULL,
  `brand` varchar(100) DEFAULT NULL,
  `model` char(30) DEFAULT NULL,
  `color` char(20) NOT NULL,
  `origin` varchar(50) NOT NULL,
  `unit` char(20) NOT NULL,
  `price` float(8,2) NOT NULL,
  `promotion` float(8,2) NOT NULL,
  `amount` mediumint(8) unsigned DEFAULT NULL,
  `keywords` varchar(150) NOT NULL,
  `desc` text NOT NULL,
  `content` text NOT NULL,
  `author` varchar(60) NOT NULL,
  `editor` varchar(60) NOT NULL,
  `addedDate` datetime NOT NULL,
  `editedDate` datetime NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'normal',
  `views` mediumint(5) unsigned NOT NULL DEFAULT '0',
  `sticky` enum('0','1','2','3') NOT NULL DEFAULT '0',
  `order` smallint(5) unsigned NOT NULL,
  `css` text NOT NULL,
  `js` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `order` (`order`),
  KEY `views` (`views`),
  KEY `sticky` (`sticky`),
  KEY `model` (`model`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `mz_product_custom`
-- ----------------------------
DROP TABLE IF EXISTS `mz_product_custom`;
CREATE TABLE `mz_product_custom` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `product` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `label` varchar(100) NOT NULL,
  `value` varchar(200) NOT NULL,
  `order` smallint(5) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `label` (`product`,`label`),
  KEY `product` (`product`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `mz_relation`
-- ----------------------------
DROP TABLE IF EXISTS `mz_relation`;
CREATE TABLE `mz_relation` (
  `type` char(20) NOT NULL,
  `id` mediumint(9) NOT NULL,
  `category` smallint(5) NOT NULL,
  UNIQUE KEY `relation` (`type`,`id`,`category`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `mz_reply`
-- ----------------------------
DROP TABLE IF EXISTS `mz_reply`;
CREATE TABLE `mz_reply` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `thread` mediumint(8) unsigned NOT NULL,
  `content` text NOT NULL,
  `author` char(30) NOT NULL,
  `editor` char(30) NOT NULL,
  `addedDate` datetime NOT NULL,
  `editedDate` datetime NOT NULL,
  `hidden` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `thread` (`thread`),
  KEY `author` (`author`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `mz_secondhand`
-- ----------------------------
DROP TABLE IF EXISTS `mz_secondhand`;
CREATE TABLE `mz_secondhand` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `intro` text,
  `created` bigint(20) DEFAULT NULL,
  `author` char(16) DEFAULT NULL,
  `type` int(10) DEFAULT NULL COMMENT '0 求购 1 转让',
  `imageUrl` varchar(2000) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `updated` int(10) NOT NULL DEFAULT '0',
  `shLocation` varchar(1000) DEFAULT NULL,
  `phoneNumber` varchar(100) NOT NULL,
  `price` double(15,2) DEFAULT '0.00' COMMENT '原价',
  `secondPrice` double(15,2) DEFAULT '0.00' COMMENT '二手价（期望价）',
  `uid` int(10) DEFAULT NULL,
  `shAddress` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=48 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `mz_secondhand`
-- ----------------------------
BEGIN;
INSERT INTO `mz_secondhand` VALUES ('1', '低价出售', '三网的苹果5C，五id，无锁，没有内置卡贴。网上买的。有个 小问题就是时间不准。网上搜索原因，不解，有教程下载了一个来电显示的软件就正常了。机子为蓝色16G。现在是8.1越狱。价格就1450。新旧8成吧。有意就打电话1322 5929 117。短信恕不回复。欢迎大家发表各种言论顶帖。但是不要短信骚扰。谢谢。', '1415955100002', '8fe2db45e1', '0', 'http://121.40.155.88/beauty/uploadimg/111.jpg;http://121.40.155.88/beauty/uploadimg/112.jpg;http://121.40.155.88/beauty/uploadimg/112.jpg;http://121.40.155.88/beauty/uploadimg/112.jpg', '0', '0', '118.122079,24.43638', '15005008489', '3000.00', '1450.00', '2', '曾厝垵厦门软件园1～3'), ('2', '超低价转让全新十月妈咪防辐射服（上衣）', '超低价转让全新十月妈咪防辐射服（上衣）\n\n\n买了一件十月妈咪防辐射上衣，家里人不知道也买了一件。多出这一件低价转让。这件是商场柜台正价买来，完完全全新的，吊牌都还在。\n\n\n原价：428元　\n现超低价转让：310元\n品牌：十月妈咪　（小Ｓ代言）\n材质：金属纤维防辐射\n颜色：灰色\n款式：吊带款，方便搭衣服，在衣服外面套一下就可以了，方便穿脱。侧边还有拉链可以调节大小，人性化设计。\n尺码：Ｌ码\n可以包邮', '1415955100003', '8fe2db45e1', '1', 'http://121.40.155.88/beauty/uploadimg/113.jpg;http://121.40.155.88/beauty/uploadimg/114.jpg', '0', '0', '118.179788,24.490215', '18046236745', '428.00', '310.00', '3', '吕岭路1388之9（软件园二期旁)'), ('3', '日月谷温泉票周末也可以用不要补差价130!!', '物品名称：日月谷温泉乐享券\n物品分类：卡券票务 - 景点门票\n转让价格：130\n数量：9\n新旧程度：全新\n购买日期：2014-11-10\n保质/保修：有\n保质/保修时限：2014-12-15\n地区：海沧区\n只要130了。最后几张甩完就没了。 错过这个村就没这个店了!赶紧抢咯！！', '1415955100004', '8fe2db45e1', '0', 'http://121.40.155.88/beauty/uploadimg/115.jpg;http://121.40.155.88/beauty/uploadimg/116.jpg;http://121.40.155.88/beauty/uploadimg/117.jpg;', '0', '0', '118.19703,24.488127', '18559281216', '200.00', '130.00', '2', '何厝村下何社26号'), ('5', '全新智能电饭煲低价转让', '物品名称：红双喜智能电饭煲\n物品分类：家用电器 - 小家电\n转让价格：700\n数量：1\n新旧程度：全新\n购买日期：2014-11-08\n保质/保修：有\n保质/保修时限：2014-11-17\n地区：思明区\n单位活动赠送的电饭煲，暂时用不到，闲置转让。 红双喜牌，5L，功能：保温、快煮、粥/汤、蒸煮、预约、蛋糕、开关 带有保修卡，说明书，插头等齐全 原价1180元，现700元， 如有意向， 可直接电话联系。\n 注：因工作忙，没多少时间上小鱼， 请直接电话联系，谢谢！ ', '1415955100005', '8fe2db45e1', '0', 'http://121.40.155.88/beauty/uploadimg/132.jpg;http://121.40.155.88/beauty/uploadimg/133.jpg;http://121.40.155.88/beauty/uploadimg/133.jpg;http://121.40.155.88/beauty/uploadimg/134.jpg', '0', '0', '118.189567,24.489804', '13950265243', '1180.00', '700.00', '2', '软件园观日路52号a栋101'), ('6', '11月29日小野丽莎厦门演唱会门票', '11月29日小野丽莎厦门演唱会门票，原价380元/张，现在只要350元/张低价转手出售。共有两张，包邮顺丰。有需要，请联系13600927699。非常感谢！', '1415955100006', '8fe2db45e1', '0', 'http://121.40.155.88/beauty/uploadimg/128.jpg;http://121.40.155.88/beauty/uploadimg/129.jpg;http://121.40.155.88/beauty/uploadimg/130.jpg;http://121.40.155.88/beauty/uploadimg/131.jpg', '0', '0', '118.184135,24.497293', '15006016134', '380.00', '350.00', '2', '望海路17号厦软件园2期'), ('7', '浩沙两年卡转', '物品名称：健身两年卡\n物品分类：卡券票务 - 健身卡\n品牌型号：海景店\n转让价格：2200\n数量：1\n新旧程度：全新\n购买日期：2014-07-26\n保质/保修：有\n保质/保修时限：2014-11-16\n地区：思明区\n7月25号开通、一次都没去过！所以不需要300转让费。还剩下将近21个月，现在一张新的一年卡都要1800了。而且之后还会涨价.所以便宜2200转了！有需要的联系', '1415955100007', '8fe2db45e1', '0', 'http://121.40.155.88/beauty/uploadimg/126.jpg;http://121.40.155.88/beauty/uploadimg/127.jpg', '0', '0', '118.178618,24.4791', '18250816047', '3600.00', '2200.00', '2', '前埔二里国贸新城28-5号店面'), ('8', 'TP迷你无线路由器', '买来出差用的，没用几次，不用了，98新，全部正常，50转，不议价，要的联系我，白天上班，晚上交易(前坑站)', '1415955100008', '8fe2db45e1', '0', 'http://121.40.155.88/beauty/uploadimg/122.jpg;http://121.40.155.88/beauty/uploadimg/123.jpg;http://121.40.155.88/beauty/uploadimg/124.jpg;http://121.40.155.88/beauty/uploadimg/125.jpg', '0', '0', '118.174576,24.478384', '15306093806', '89.00', '50.00', '1', '前埔五里191号'), ('23', '全新新百伦M980OR', '一双41.5码的M980OR 银泰购入，全新，支持验货保证正品，需要的联系', '1415955180009', '8fe2db45e1', '1', 'http://121.40.155.88/beauty/uploadimg/118.jpg;http://121.40.155.88/beauty/uploadimg/119.jpg;http://121.40.155.88/beauty/uploadimg/120.jpg;http://121.40.155.88/beauty/uploadimg/121.jpg', '0', '0', '118.185185,24.472119', '13666075059', '980.00', '600.00', '3', '会展路1号	'), ('46', '二手测试黑乎乎', '二手测试黑乎乎', null, null, '0', null, '0', '0', '118.174576,24.478384', '15306093806', '0.00', '0.00', null, null), ('47', '现代悦动 2012款 1.6手动顶配 2012年上牌  [支', '车辆配置：1.6手动 带导航 DVD 高清倒车影像雷达，恒温', null, null, '0', null, '0', '0', '118.174576,24.478384', '15306093806', '0.00', '0.00', null, null);
COMMIT;

-- ----------------------------
--  Table structure for `mz_shop`
-- ----------------------------
DROP TABLE IF EXISTS `mz_shop`;
CREATE TABLE `mz_shop` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `cateName` varchar(100) NOT NULL COMMENT '????',
  `description` text COMMENT '????',
  `linkmanName` varchar(100) DEFAULT NULL COMMENT '?????.?????????',
  `linkmanPhone` varchar(100) DEFAULT NULL COMMENT '?????.?????????',
  `minDeliverPrice` char(20) DEFAULT NULL COMMENT '??????',
  `news` varchar(200) DEFAULT NULL COMMENT '??????',
  `uid` int(10) DEFAULT NULL COMMENT '???????ID',
  `cLocation` varchar(100) DEFAULT NULL COMMENT '?????',
  `cAddress` varchar(200) DEFAULT NULL COMMENT '????',
  `created` int(10) DEFAULT NULL,
  `imageUrl` varchar(2000) DEFAULT NULL COMMENT '??????? ??',
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '????',
  `updated` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `mz_shop`
-- ----------------------------
BEGIN;
INSERT INTO `mz_shop` VALUES ('1', '咏蛙田鸡（世贸店）', '厦门咏蛙田鸡餐饮有限公司创立于2009年，是一家以经营干锅、火锅系列美食、融汇川味特色为一体的餐饮企业', '张勇', '15306093806', '34', '仅售67元！价值100元的代金券1张，全场通用，可叠加使用，提供免费WiFi。可打包，可外送，咏蛙全新菜单，菜金更亲民。上美团，大锅田鸡仅需58元，点了一锅又一锅，土豪就是这么任性。', '3', '118.174576,24.478384', '思明区东百购物中心3楼', null, null, '0', '0'), ('2', '咏蛙田鸡（世贸店）', '厦门咏蛙田鸡餐饮有限公司创立于2009年，是一家以经营干锅、火锅系列美食、融汇川味特色为一体的餐饮企业', '张勇', '15306093806', '34', '仅售67元！价值100元的代金券1张，全场通用，可叠加使用，提供免费WiFi。可打包，可外送，咏蛙全新菜单，菜金更亲民。上美团，大锅田鸡仅需58元，点了一锅又一锅，土豪就是这么任性。', '3', '118.174576,24.478384', '思明区东百购物中心3楼', '0', null, '0', '0'), ('3', '咏蛙田鸡（世贸店）', '厦门咏蛙田鸡餐饮有限公司创立于2009年，是一家以经营干锅、火锅系列美食、融汇川味特色为一体的餐饮企业', '张勇', '15306093806', '34', '仅售67元！价值100元的代金券1张，全场通用，可叠加使用，提供免费WiFi。可打包，可外送，咏蛙全新菜单，菜金更亲民。上美团，大锅田鸡仅需58元，点了一锅又一锅，土豪就是这么任性。', '5', '118.174576,24.478384', '思明区东百购物中心3楼', '1417094700', null, '0', '0');
COMMIT;

-- ----------------------------
--  Table structure for `mz_tag`
-- ----------------------------
DROP TABLE IF EXISTS `mz_tag`;
CREATE TABLE `mz_tag` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `tag` varchar(50) NOT NULL,
  `link` varchar(100) NOT NULL,
  `rank` smallint(5) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `tag` (`tag`),
  KEY `rank` (`rank`),
  KEY `link` (`link`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `mz_thread`
-- ----------------------------
DROP TABLE IF EXISTS `mz_thread`;
CREATE TABLE `mz_thread` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `board` mediumint(9) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `author` varchar(60) NOT NULL,
  `editor` varchar(60) NOT NULL,
  `addedDate` datetime NOT NULL,
  `editedDate` datetime NOT NULL,
  `readonly` tinyint(1) NOT NULL DEFAULT '0',
  `views` smallint(5) unsigned NOT NULL DEFAULT '0',
  `stick` enum('0','1','2','3') NOT NULL DEFAULT '0',
  `replies` smallint(6) NOT NULL,
  `repliedBy` varchar(30) NOT NULL,
  `repliedDate` datetime NOT NULL,
  `replyID` mediumint(8) unsigned NOT NULL,
  `hidden` enum('0','1') NOT NULL DEFAULT '0',
  `link` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `category` (`board`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `mz_tuan`
-- ----------------------------
DROP TABLE IF EXISTS `mz_tuan`;
CREATE TABLE `mz_tuan` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `intro` text,
  `created` bigint(20) DEFAULT NULL,
  `price` varchar(20) DEFAULT NULL COMMENT '原价',
  `specialPrice` varchar(20) DEFAULT NULL COMMENT '组团价',
  `orderNum` int(10) DEFAULT NULL COMMENT '已参团人数',
  `categoryId` int(10) DEFAULT NULL COMMENT '分类',
  `imageUrl` varchar(2000) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `updated` int(10) NOT NULL DEFAULT '0',
  `uid` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `mz_tuan`
-- ----------------------------
BEGIN;
INSERT INTO `mz_tuan` VALUES ('1', '[19店通用] 重庆小天鹅', '仅售85元，价值100元现金抵用券，不限时段通用，免费WiFi，可累积使用！可累计使用！', '1416051418319', '100', '85', '235648', '3', '鲍鱼老鸡香菌锅\r\n龙王海鲜锅\r\n秘制骨汤锅\r\n\r\n秘制香辣锅\r\n野生菌王锅\r\n鸳鸯锅\r\n\r\n巴蜀牛肉\r\n犇三鱻\r\n冰鲜鱿鱼\r\n', '0', '0', '1'), ('2', '莲坂明发/火车站 仅108元，享价值470元皇家一号4人啤酒套餐！', '【莲坂明发/火车站】仅108元，享价值470元皇家一号4人啤酒套餐！优秀的音乐团队，环境复古优雅，身处繁嚣都市，享受英式的闲适和慵懒理想之地！节假日通用！！另有多种套餐可选！', '1416051418319', '470', '108', '635248', '3', null, '0', '0', '1'), ('3', '厦门日月谷温泉渡假村】[平日]日月谷温泉+鱼疗双人票（含巴士）', '【厦门日月谷温泉渡假村】[平日]日月谷温泉+鱼疗双人票（含巴士）\n与大自然亲密融合，一片宁谧安祥的绿洲。', '1416051418319', '796', '328', '356985', '3', null, '0', '0', '2'), ('4', '厦门翠丰温泉 厦门翠丰温泉成人票', '厦门翠丰温泉 厦门翠丰温泉成人票 收藏景点 【厦门】厦门翠丰温泉团购,仅需99元即可享受原价228元厦门翠丰温泉票型厦门翠丰温泉成人票平日价门票一张!机会不容错过,赶紧预订吧!', '1416051426753', '228', '99', '158965', '3', null, '0', '0', '3'), ('5', '黄厝一首歌一个故事精品民宿', '【黄厝】一首歌一个故事精品民宿\n仅118元！价值398元的一首歌一个故事精品民宿入住1晚，温馨大床房/温馨双床房2选1。', '1416051426753', '398', '119', '856945', null, null, '0', '0', '2'), ('6', '幻影星空7D互动电影院', '幻影星空7D互动电影院\n仅售24元，价值50元局口街店7D电影票！尖端设备，超震撼的视听享受，高清巨幕，让你感受娱乐的享受性、猎奇性、冒险性和对抗性，精彩大片，不容错过！', '1416051426753', '50', '24', '789554', '4', null, '0', '0', '2'), ('7', '[湖里区]厦门空港佰翔花园酒店（标准房-无窗2晚）', '[湖里区]厦门空港佰翔花园酒店（标准房-无窗2晚） 国家旅游局评定为四星级（携程用户评定为4钻）\n【预约有房才能消费】尊享厦门空港佰翔花园酒店（原厦门国际航空港花园酒店）标准房（无窗）2晚＋每日2份早餐＋免费wifi＋免费停车＋更多优惠！酒店是机场附近唯一一家集客房、餐饮、娱乐、健身于一体的高品质酒店！', '1416051418319', '2272', '588', '654254', '4', null, '0', '0', '2'), ('8', '文灶厦门王妃婚纱摄影', '仅售9999元，价值39999元的厦门王妃婚纱摄影婚纱照美丽厦门+浪漫漳州火山岛两天蜜月畅拍，由荣获多项大奖国际级摄影师全程一对一掌镜拍摄+拍摄底片全送+6本豪华相册+经典放大相框制作+时尚摆台赠送！团购成功后更送价值万元幸福大礼包。', '1416051418319', '39999', '9999', '456785', '4', null, '0', '0', '1'), ('9', '同集南路美颜堂美容spa会所', '【同集南路】美颜堂美容spa会所\n仅售68元，价值582元的美颜堂美容spa会所美容美体节假日通用。与您浪漫醉心邂逅，尊尚惬意享受，青春光彩轻舞飞扬！', '1416051426753', '582', '68', '235418', '4', null, '0', '0', '1'), ('10', '斗牛士牛排', '仅售89元，价值118元的明发店单人精品套餐！霜降牛排/主厨推荐牛排/鸭胸肥肝佐西梅酱/香煎羊腿4选1！配餐无限量，独家合作，超长有效期！', '1416051418319', '118', '89', '456745', null, null, '0', '0', '3'), ('11', '欢唱KTV', '欢唱KTV\n仅售398元，价值1288元同安店中秋豪华套餐！菜品丰盛，营养搭配，新鲜美味，环境优雅，时尚感十足，专业音效设备，设备齐全，营业时间内无限时欢唱！', '1416051418319', '1288', '398', '458772', null, null, '0', '0', '3'), ('30', '美悦四季铁板烧', '美悦四季铁板烧\n仅售298元，价值468元商务午间套餐！经典美食，原料新鲜，造型精致，绿色健康，口感地道正宗，老少皆宜，就餐首选！免费停车，免费WiFi！', '1416062466637', '468', '292', '658214', null, null, '0', '0', '3'), ('31', '松柏 安恣兰国际美容SPA', '仅售98元，尊享价值1700元安恣兰国际意大利SPA全身护理套餐,经典5项打包，再赠免费超值3项：意大利专业面部护理+天然香柏木养生药浴+欧式名妆发部护理+纤手精油养护SPA+阿娜律瑜伽月度课程。安恣兰豪礼酬宾，男女通用！', '1416064896337', '1700', '98', '985375', null, null, '0', '0', '1'), ('32', '多店通用 倾世皇妃婚纱摄影', '仅售198元，价值2388元的倾世皇妃婚纱摄影儿童摄影，独家摄影棚拍摄75张以上+底片全送+倾世皇妃独家精修调色32张+免费设计12寸高级数码烫金杂志册一本10p（从精修中选30张入册）+3D动感电子相册一辑（32张入册）等超多礼品！', '1416117706133', '2388', '198', '568444', null, null, '0', '0', '1'), ('34', '大歌星量贩KTV', '大家爱K歌！仅售19.90元，最高价值1043元的大歌星量贩KTV周日至周四23:00-次日06:00包段7小时/周一至周五11:00-18:00任选2小时欢唱套餐2选1，可升级，大包厢/中包厢/小包厢可用，适合1-8人。', null, '1043', '19.9', null, '2', null, '0', '0', null), ('35', '大歌星量贩KTV', '大家爱K歌！仅售19.90元，最高价值1043元的大歌星量贩KTV周日至周四23:00-次日06:00包段7小时/周一至周五11:00-18:00任选2小时欢唱套餐2选1，可升级，大包厢/中包厢/小包厢可用，适合1-8人。', '1417095279', '1043', '19.9', null, '2', null, '0', '0', null), ('36', '大歌星量贩KTV', '大家爱K歌！仅售19.90元，最高价值1043元的大歌星量贩KTV周日至周四23:00-次日06:00包段7小时/周一至周五11:00-18:00任选2小时欢唱套餐2选1，可升级，大包厢/中包厢/小包厢可用，适合1-8人。', '1417095390', '1043', '19.9', '0', '2', null, '0', '0', null);
COMMIT;

-- ----------------------------
--  Table structure for `mz_user`
-- ----------------------------
DROP TABLE IF EXISTS `mz_user`;
CREATE TABLE `mz_user` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `account` char(30) NOT NULL DEFAULT '',
  `password` char(32) NOT NULL DEFAULT '',
  `realname` char(30) NOT NULL DEFAULT '',
  `nickname` char(60) NOT NULL DEFAULT '',
  `admin` enum('no','common','super') NOT NULL DEFAULT 'no',
  `avatar` char(30) NOT NULL DEFAULT '',
  `birthday` date NOT NULL,
  `gender` enum('f','m','u') NOT NULL DEFAULT 'u',
  `email` char(90) NOT NULL DEFAULT '',
  `skype` char(90) NOT NULL,
  `qq` char(20) NOT NULL DEFAULT '',
  `yahoo` char(90) NOT NULL DEFAULT '',
  `gtalk` char(90) NOT NULL DEFAULT '',
  `wangwang` char(90) NOT NULL DEFAULT '',
  `site` varchar(100) NOT NULL,
  `mobile` char(11) NOT NULL DEFAULT '',
  `phone` char(20) NOT NULL DEFAULT '',
  `company` varchar(255) NOT NULL,
  `address` char(120) NOT NULL DEFAULT '',
  `zipcode` char(10) NOT NULL DEFAULT '',
  `visits` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `ip` char(15) NOT NULL DEFAULT '',
  `last` datetime NOT NULL,
  `fails` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `referer` varchar(255) NOT NULL,
  `join` datetime NOT NULL,
  `reset` char(64) NOT NULL,
  `locked` datetime NOT NULL,
  `public` varchar(30) NOT NULL DEFAULT '0',
  `collegeID` varchar(255) DEFAULT NULL,
  `collegeName` varchar(255) DEFAULT NULL,
  `profession` varchar(255) DEFAULT NULL,
  `grade` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `appVersion` varchar(10) DEFAULT NULL,
  `userType` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `admin` (`admin`),
  KEY `account` (`account`,`password`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `mz_user`
-- ----------------------------
BEGIN;
INSERT INTO `mz_user` VALUES ('1', 'admin', '86f3059b228c8acf99e69734b6bb32cc', 'admin', '', 'super', '', '0000-00-00', 'u', '', '', '', '', '', '', '', '', '', '', '', '', '3', '127.0.0.1', '2014-11-29 16:52:25', '0', '', '2014-11-29 14:57:27', '', '0000-00-00 00:00:00', '0', null, null, null, null, null, null, null), ('2', 'azhi', '0a5656f130702beb94142984b1f499ff', '陈聪智', '', 'no', '', '0000-00-00', 'u', '382455292@qq.com', '', '', '', '', '', '', '', '', '', '', '', '2', '127.0.0.1', '2014-11-29 16:52:52', '0', '', '2014-11-29 16:52:52', '', '0000-00-00 00:00:00', '0', null, null, null, null, null, null, null);
COMMIT;

-- ----------------------------
--  Table structure for `mz_wx_message`
-- ----------------------------
DROP TABLE IF EXISTS `mz_wx_message`;
CREATE TABLE `mz_wx_message` (
  `id` mediumint(10) unsigned NOT NULL AUTO_INCREMENT,
  `public` smallint(3) NOT NULL,
  `wid` char(64) NOT NULL,
  `to` varchar(50) NOT NULL,
  `from` varchar(50) NOT NULL,
  `response` mediumint(8) unsigned NOT NULL,
  `content` text NOT NULL,
  `type` char(30) NOT NULL,
  `replied` tinyint(3) NOT NULL DEFAULT '0',
  `time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `mz_wx_public`
-- ----------------------------
DROP TABLE IF EXISTS `mz_wx_public`;
CREATE TABLE `mz_wx_public` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `account` varchar(30) NOT NULL,
  `name` varchar(60) NOT NULL,
  `appID` char(30) NOT NULL,
  `appSecret` char(32) NOT NULL,
  `url` varchar(100) NOT NULL,
  `token` varchar(100) NOT NULL,
  `qrcode` varchar(100) NOT NULL,
  `primary` tinyint(3) NOT NULL DEFAULT '0',
  `type` enum('subscribe','service') NOT NULL,
  `status` enum('wait','normal') NOT NULL,
  `certified` enum('1','0') NOT NULL DEFAULT '0',
  `addedDate` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `mz_wx_response`
-- ----------------------------
DROP TABLE IF EXISTS `mz_wx_response`;
CREATE TABLE `mz_wx_response` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `public` smallint(3) NOT NULL,
  `key` varchar(100) NOT NULL,
  `group` varchar(100) NOT NULL,
  `type` enum('text','news','link') NOT NULL DEFAULT 'text',
  `source` varchar(100) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `key` (`public`,`key`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

SET FOREIGN_KEY_CHECKS = 1;
