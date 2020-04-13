/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 50553
 Source Host           : localhost:3306
 Source Schema         : fydh

 Target Server Type    : MySQL
 Target Server Version : 50553
 File Encoding         : 65001

 Date: 13/04/2020 11:25:01
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for fydh_admin
-- ----------------------------
DROP TABLE IF EXISTS `fydh_admin`;
CREATE TABLE `fydh_admin`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `token` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `status` tinyint(1) UNSIGNED DEFAULT 1,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_bin ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of fydh_admin
-- ----------------------------
INSERT INTO `fydh_admin` VALUES (1, 'admin', '10470c3b4b1fed12c3baac014be15fac67c6e815', 'ef27f98f033d7e6378d7f7856118910aded0d7df', 1);

-- ----------------------------
-- Table structure for fydh_image
-- ----------------------------
DROP TABLE IF EXISTS `fydh_image`;
CREATE TABLE `fydh_image`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `path` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL COMMENT '图片路径',
  `uploader` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL COMMENT '上传者',
  `add_time` datetime DEFAULT NULL COMMENT '上传时间',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 47 CHARACTER SET = utf8 COLLATE = utf8_bin ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of fydh_image
-- ----------------------------
INSERT INTO `fydh_image` VALUES (1, '/static/uploads/20200413/c48e5766206398164edc0a940bb56834.jpg', NULL, '2020-04-13 08:24:05');
INSERT INTO `fydh_image` VALUES (2, '/static/uploads/20200413/71ed5eb5b76ab64c28f7de6c2e2fab7b.jpg', NULL, '2020-04-13 08:26:06');
INSERT INTO `fydh_image` VALUES (3, '/static/uploads/20200413/4342ffa179a2d9ef37ee54065144f2bf.jpg', NULL, '2020-04-13 08:27:49');
INSERT INTO `fydh_image` VALUES (4, '/static/uploads/20200413/cddc5b246ebf1720b4d9b366e2068d81.jpg', NULL, '2020-04-13 08:29:21');
INSERT INTO `fydh_image` VALUES (5, '/static/uploads/20200413/e99fdf42398ac02b03c9c73c4dcf9c56.jpg', NULL, '2020-04-13 08:30:15');
INSERT INTO `fydh_image` VALUES (6, '/static/uploads/20200413/3c7ffebe4b869641d9603fb065880fc4.jpg', NULL, '2020-04-13 08:34:12');
INSERT INTO `fydh_image` VALUES (7, '/static/uploads/20200413/262b32aee6028729cfd961f00cb8baeb.jpg', NULL, '2020-04-13 08:35:24');
INSERT INTO `fydh_image` VALUES (8, '/static/uploads/20200413/76ca528756d64d55b6b2be0a4fc5ae7c.jpg', NULL, '2020-04-13 08:36:22');
INSERT INTO `fydh_image` VALUES (9, '/static/uploads/20200413/01cf5a341247861984315d01ff20f45a.jpg', NULL, '2020-04-13 08:39:13');
INSERT INTO `fydh_image` VALUES (10, '/static/uploads/20200413/1dd4311957016fdec0e548d1e035b482.jpg', NULL, '2020-04-13 08:42:26');
INSERT INTO `fydh_image` VALUES (11, '/static/uploads/20200413/e1ce8d8635597658a0aca4e75fa24f01.jpg', NULL, '2020-04-13 08:51:14');
INSERT INTO `fydh_image` VALUES (12, '/static/uploads/20200413/cac8f5341085ee14055484fbd0d0357a.jpg', NULL, '2020-04-13 08:55:38');
INSERT INTO `fydh_image` VALUES (13, '/static/uploads/20200413/bbaa96540a957dd5776b8b16589d4bcc.jpg', NULL, '2020-04-13 09:03:42');
INSERT INTO `fydh_image` VALUES (14, '/static/uploads/20200413/8f6a6da5a826482960fc8abca9ba225a.jpg', NULL, '2020-04-13 09:06:14');
INSERT INTO `fydh_image` VALUES (15, '/static/uploads/20200413/bbd14c7ef7174178412a642be5f2c576.jpg', NULL, '2020-04-13 09:07:16');
INSERT INTO `fydh_image` VALUES (16, '/static/uploads/20200413/284611dc6db6ab0a2f55562b306ea473.jpg', NULL, '2020-04-13 09:08:09');
INSERT INTO `fydh_image` VALUES (17, '/static/uploads/20200413/c531c106ea009365c3a5088dd00620a4.jpg', NULL, '2020-04-13 09:09:00');
INSERT INTO `fydh_image` VALUES (18, '/static/uploads/20200413/e9a5ec188d55099b8e86f39635f63dca.jpg', NULL, '2020-04-13 09:10:32');
INSERT INTO `fydh_image` VALUES (19, '/static/uploads/20200413/d4b8f0a2f09adc46c54470e7a6f5984d.jpg', NULL, '2020-04-13 09:11:34');
INSERT INTO `fydh_image` VALUES (20, '/static/uploads/20200413/ebfbaaa11906d84f9a3399700a881a42.jpg', NULL, '2020-04-13 09:12:27');
INSERT INTO `fydh_image` VALUES (21, '/static/uploads/20200413/1ae29b35932b837e2403d9c0ebec5e6b.jpg', NULL, '2020-04-13 09:13:32');
INSERT INTO `fydh_image` VALUES (22, '/static/uploads/20200413/e02f9c98791789737033dbab7a217677.jpg', NULL, '2020-04-13 09:16:20');
INSERT INTO `fydh_image` VALUES (23, '/static/uploads/20200413/ffa218e235191790b5e9d98cd009e40c.jpg', NULL, '2020-04-13 09:18:19');
INSERT INTO `fydh_image` VALUES (24, '/static/uploads/20200413/72c386842af8f13025ffea295a4a4edc.jpg', NULL, '2020-04-13 09:19:47');
INSERT INTO `fydh_image` VALUES (25, '/static/uploads/20200413/42523ecfc1bcd6b0eda67e0ad37d705c.jpg', NULL, '2020-04-13 09:20:49');
INSERT INTO `fydh_image` VALUES (26, '/static/uploads/20200413/a4d02cb61a1b44259b35805f65c357c4.jpg', NULL, '2020-04-13 09:23:05');
INSERT INTO `fydh_image` VALUES (27, '/static/uploads/20200413/b0faf6fc857526e73e958237df5e5547.jpg', NULL, '2020-04-13 09:26:48');
INSERT INTO `fydh_image` VALUES (28, '/static/uploads/20200413/7218b1010c31e7d65d5fa7aac0b79f0f.jpg', NULL, '2020-04-13 09:27:44');
INSERT INTO `fydh_image` VALUES (29, '/static/uploads/20200413/5251676df8c5d089ea967559a47ec7eb.jpg', NULL, '2020-04-13 09:30:27');
INSERT INTO `fydh_image` VALUES (30, '/static/uploads/20200413/853c0a64adbca104e54f5c95397d7e26.jpg', NULL, '2020-04-13 09:31:24');
INSERT INTO `fydh_image` VALUES (31, '/static/uploads/20200413/b40bca1779b7f0cb07fe185ec6a7cfe1.jpg', NULL, '2020-04-13 09:32:50');
INSERT INTO `fydh_image` VALUES (32, '/static/uploads/20200413/82d778b21129e26e0a66951f011d6b49.jpg', NULL, '2020-04-13 09:33:50');
INSERT INTO `fydh_image` VALUES (33, '/static/uploads/20200413/6c34e71c3f654cb6ea7a075ec185bcfa.jpg', NULL, '2020-04-13 09:36:52');
INSERT INTO `fydh_image` VALUES (34, '/static/uploads/20200413/813738750b1b6fe2d003ea3d16ac922b.jpg', NULL, '2020-04-13 09:37:46');
INSERT INTO `fydh_image` VALUES (35, '/static/uploads/20200413/2e5d9956dd8a0b30aef235b42d8f7e49.jpg', NULL, '2020-04-13 09:38:40');
INSERT INTO `fydh_image` VALUES (36, '/static/uploads/20200413/7bfeebcf090306c53dc8b3fca1f98451.jpg', NULL, '2020-04-13 09:56:26');
INSERT INTO `fydh_image` VALUES (37, '/static/uploads/20200413/4b7640da2ac8700b05a2749510992e4e.jpg', NULL, '2020-04-13 10:01:58');
INSERT INTO `fydh_image` VALUES (38, '/static/uploads/20200413/cbbde89b14881c3320edd8999ab25d3c.jpg', NULL, '2020-04-13 10:03:19');
INSERT INTO `fydh_image` VALUES (39, '/static/uploads/20200413/9b66ee9221b83abf85bb87570031c358.jpg', NULL, '2020-04-13 10:08:00');
INSERT INTO `fydh_image` VALUES (40, '/static/uploads/20200413/c8c558597d8b0de813cdd439bfb05c48.jpg', NULL, '2020-04-13 10:11:27');
INSERT INTO `fydh_image` VALUES (41, '/static/uploads/20200413/f7b9b6813acbcd8c6c73c3804a7530e9.jpg', NULL, '2020-04-13 10:12:41');
INSERT INTO `fydh_image` VALUES (42, '/static/uploads/20200413/2ce301b8c82515d3f8d357283cbb25fb.jpg', NULL, '2020-04-13 10:15:39');
INSERT INTO `fydh_image` VALUES (43, '/static/uploads/20200413/ab2bf7c093cd9f56d59a026ddca2fbc8.jpg', NULL, '2020-04-13 10:17:28');
INSERT INTO `fydh_image` VALUES (44, '/static/uploads/20200413/9a8d3e8f29e3024b19536404972c92e9.jpg', NULL, '2020-04-13 10:19:51');
INSERT INTO `fydh_image` VALUES (45, '/static/uploads/20200413/78970e54ff322d74a5e50a3aa60f31fd.jpg', NULL, '2020-04-13 10:24:53');
INSERT INTO `fydh_image` VALUES (46, '/static/uploads/20200413/81779a31c937b87e92f6755aa8ab5e8b.jpg', NULL, '2020-04-13 10:28:25');

-- ----------------------------
-- Table structure for fydh_links
-- ----------------------------
DROP TABLE IF EXISTS `fydh_links`;
CREATE TABLE `fydh_links`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `mt_id` int(10) UNSIGNED NOT NULL COMMENT '分类id',
  `link_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL COMMENT '名称',
  `link_address` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL COMMENT '地址',
  `link_icon` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL COMMENT '图标',
  `link_note` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL COMMENT '说明/备注',
  `link_order` int(10) UNSIGNED DEFAULT 1 COMMENT '排序',
  `add_time` datetime DEFAULT NULL COMMENT '添加时间',
  `status` tinyint(1) UNSIGNED DEFAULT 1 COMMENT '状态',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 50 CHARACTER SET = utf8 COLLATE = utf8_bin ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of fydh_links
-- ----------------------------
INSERT INTO `fydh_links` VALUES (1, 4, 'UI中国', 'https://www.ui.cn/', '/static/uploads/20200413/c48e5766206398164edc0a940bb56834.jpg', '图形交互与界面设计交流、作品展示、学习平台。', 1, '2020-04-13 08:24:11', 1);
INSERT INTO `fydh_links` VALUES (2, 4, '站酷', 'https://www.zcool.com.cn/', '/static/uploads/20200413/71ed5eb5b76ab64c28f7de6c2e2fab7b.jpg', '中国人气设计师互动平台', 1, '2020-04-13 08:26:09', 1);
INSERT INTO `fydh_links` VALUES (3, 4, '花瓣', 'https://huaban.com/', '/static/uploads/20200413/4342ffa179a2d9ef37ee54065144f2bf.jpg', '花瓣，陪你做生活的设计师', 1, '2020-04-13 08:28:00', 1);
INSERT INTO `fydh_links` VALUES (4, 4, '优设网', 'http://www.uisdc.com/', '/static/uploads/20200413/cddc5b246ebf1720b4d9b366e2068d81.jpg', '国内优秀的设计师学习平台', 1, '2020-04-13 08:29:22', 1);
INSERT INTO `fydh_links` VALUES (5, 4, 'Producthunt', 'https://www.producthunt.com/', '/static/uploads/20200413/e99fdf42398ac02b03c9c73c4dcf9c56.jpg', '发现有趣的产品', 1, '2020-04-13 08:30:17', 1);
INSERT INTO `fydh_links` VALUES (6, 4, '小众软件', 'https://faxian.appinn.com/', '/static/uploads/20200413/3c7ffebe4b869641d9603fb065880fc4.jpg', '在这里发现更多有趣的应用', 1, '2020-04-13 08:34:14', 1);
INSERT INTO `fydh_links` VALUES (7, 4, 'Pttrns', 'https://www.pttrns.com', '/static/uploads/20200413/262b32aee6028729cfd961f00cb8baeb.jpg', 'Check out the finest collection of design patterns, resources, mobile apps and inspiration', 1, '2020-04-13 08:35:34', 1);
INSERT INTO `fydh_links` VALUES (8, 4, 'CollectUI', 'http://collectui.com', '/static/uploads/20200413/76ca528756d64d55b6b2be0a4fc5ae7c.jpg', 'Daily inspiration collected from daily ui archive and beyond.', 1, '2020-04-13 08:36:56', 1);
INSERT INTO `fydh_links` VALUES (9, 4, 'Awwwards', 'https://www.awwwards.com', '/static/uploads/20200413/01cf5a341247861984315d01ff20f45a.jpg', 'Awwwards are the Website Awards that recognize and promote the talent and effort of the best developers, designers and web agencies in the world.', 1, '2020-04-13 08:39:27', 1);
INSERT INTO `fydh_links` VALUES (10, 4, 'CSSDesignAwards', 'https://www.cssdesignawards.com', '/static/uploads/20200413/1dd4311957016fdec0e548d1e035b482.jpg', 'Website Awards & Inspiration - CSS Gallery', 1, '2020-04-13 08:42:48', 1);
INSERT INTO `fydh_links` VALUES (11, 5, 'khroma', 'http://khroma.co', '/static/uploads/20200413/e1ce8d8635597658a0aca4e75fa24f01.jpg', 'Khroma is the fastest way to discover, search, and save color combos you\'ll want to use.', 1, '2020-04-13 08:51:25', 1);
INSERT INTO `fydh_links` VALUES (12, 5, 'uigradients', 'https://uigradients.com', '/static/uploads/20200413/cac8f5341085ee14055484fbd0d0357a.jpg', 'Beautiful colored gradients', 1, '2020-04-13 08:55:56', 1);
INSERT INTO `fydh_links` VALUES (13, 5, 'webgradients', 'https://webgradients.com', '/static/uploads/20200413/bbaa96540a957dd5776b8b16589d4bcc.jpg', 'WebGradients is a free collection of 180 linear gradients that you can use as content backdrops in any part of your website. ', 1, '2020-04-13 09:03:58', 1);
INSERT INTO `fydh_links` VALUES (14, 5, 'TheDaysColor', 'http://www.thedayscolor.com', '/static/uploads/20200413/8f6a6da5a826482960fc8abca9ba225a.jpg', 'The daily color digest', 1, '2020-04-13 09:05:43', 1);
INSERT INTO `fydh_links` VALUES (15, 5, 'FlatuiColors', 'https://flatuicolors.com', '/static/uploads/20200413/bbd14c7ef7174178412a642be5f2c576.jpg', 'Copy Paste Color Pallette from Flat UI Theme', 1, '2020-04-13 09:07:18', 1);
INSERT INTO `fydh_links` VALUES (16, 5, 'Coolors', 'https://coolors.co', '/static/uploads/20200413/284611dc6db6ab0a2f55562b306ea473.jpg', 'The super fast color schemes generator!', 1, '2020-04-13 09:08:24', 1);
INSERT INTO `fydh_links` VALUES (17, 5, 'ColorHunt', 'https://colorhunt.co', '/static/uploads/20200413/c531c106ea009365c3a5088dd00620a4.jpg', 'Beautiful Color Palettes', 1, '2020-04-13 09:09:13', 1);
INSERT INTO `fydh_links` VALUES (18, 5, 'Adobe_Color_CC', 'https://color.adobe.com', '/static/uploads/20200413/e9a5ec188d55099b8e86f39635f63dca.jpg', 'Create color schemes with the color wheel or browse thousands of color combinations from the Color community.', 1, '2020-04-13 09:10:47', 1);
INSERT INTO `fydh_links` VALUES (19, 5, 'FlatuiColorPicker', 'http://www.flatuicolorpicker.com', '/static/uploads/20200413/d4b8f0a2f09adc46c54470e7a6f5984d.jpg', 'Best Flat Colors For UI Design', 1, '2020-04-13 09:11:47', 1);
INSERT INTO `fydh_links` VALUES (20, 5, 'Trianglify', 'https://trianglify.io', '/static/uploads/20200413/ebfbaaa11906d84f9a3399700a881a42.jpg', 'Trianglify Generator', 1, '2020-04-13 09:12:38', 1);
INSERT INTO `fydh_links` VALUES (21, 5, 'Klart', 'https://klart.io/colors/', '/static/uploads/20200413/1ae29b35932b837e2403d9c0ebec5e6b.jpg', 'Beautiful colors and designs to your inbox every week', 1, '2020-04-13 09:13:46', 1);
INSERT INTO `fydh_links` VALUES (22, 6, 'GoQr', 'http://goqr.me', '/static/uploads/20200413/e02f9c98791789737033dbab7a217677.jpg', 'create QR codes for free (Logo, T-Shirt, vCard, EPS)', 1, '2020-04-13 09:16:56', 1);
INSERT INTO `fydh_links` VALUES (23, 6, 'ezgif', 'https://ezgif.com', '/static/uploads/20200413/ffa218e235191790b5e9d98cd009e40c.jpg', 'simple online GIF maker and toolset for basic animated GIF editing.', 1, '2020-04-13 09:18:29', 1);
INSERT INTO `fydh_links` VALUES (24, 6, 'SvgOmg', 'https://jakearchibald.github.io/svgomg/', '/static/uploads/20200413/72c386842af8f13025ffea295a4a4edc.jpg', 'SVG在线压缩平台', 1, '2020-04-13 09:20:02', 1);
INSERT INTO `fydh_links` VALUES (25, 6, '稿定抠图', 'https://www.gaoding.com', '/static/uploads/20200413/42523ecfc1bcd6b0eda67e0ad37d705c.jpg', '免费在线抠图软件,图片快速换背景-抠白底图', 1, '2020-04-13 09:20:59', 1);
INSERT INTO `fydh_links` VALUES (26, 6, '在线工具', 'https://tool.lu', '/static/uploads/20200413/a4d02cb61a1b44259b35805f65c357c4.jpg', '程序员的工具箱', 2, '2020-04-13 09:24:42', 1);
INSERT INTO `fydh_links` VALUES (27, 7, 'iconfont', 'https://www.iconfont.cn', '/static/uploads/20200413/b0faf6fc857526e73e958237df5e5547.jpg', '阿里巴巴矢量图标库', 1, '2020-04-13 09:26:52', 1);
INSERT INTO `fydh_links` VALUES (28, 7, 'IonMonstr', 'https://iconmonstr.com', '/static/uploads/20200413/7218b1010c31e7d65d5fa7aac0b79f0f.jpg', 'Free simple icons for your next project', 1, '2020-04-13 09:29:54', 1);
INSERT INTO `fydh_links` VALUES (29, 7, 'EasyIcon', 'http://www.easyicon.net', '/static/uploads/20200413/5251676df8c5d089ea967559a47ec7eb.jpg', 'PNG、ICO、ICNS格式图标搜索、图标下载服务', 1, '2020-04-13 09:30:39', 1);
INSERT INTO `fydh_links` VALUES (30, 7, 'IconsFeed', 'http://www.iconsfeed.com', '/static/uploads/20200413/853c0a64adbca104e54f5c95397d7e26.jpg', 'iOS icons gallery', 1, '2020-04-13 09:31:46', 1);
INSERT INTO `fydh_links` VALUES (31, 7, 'World_Vector_Logo', 'https://worldvectorlogo.com', '/static/uploads/20200413/b40bca1779b7f0cb07fe185ec6a7cfe1.jpg', 'Brand logos free to download', 1, '2020-04-13 09:33:02', 1);
INSERT INTO `fydh_links` VALUES (32, 7, 'Instant_Logo_Search', 'http://instantlogosearch.com', '/static/uploads/20200413/82d778b21129e26e0a66951f011d6b49.jpg', 'Search & download thousands of logos instantly', 1, '2020-04-13 09:34:01', 1);
INSERT INTO `fydh_links` VALUES (33, 7, '咕噜素材', 'https://www.gulusucai.com', '/static/uploads/20200413/6c34e71c3f654cb6ea7a075ec185bcfa.jpg', '质量很高的设计素材网站（良心推荐）', 1, '2020-04-13 09:37:03', 1);
INSERT INTO `fydh_links` VALUES (34, 7, '懒人图库', 'https://www.lanrentuku.com', '/static/uploads/20200413/813738750b1b6fe2d003ea3d16ac922b.jpg', '懒人图库专注于提供网页素材下载', 1, '2020-04-13 09:38:06', 1);
INSERT INTO `fydh_links` VALUES (35, 7, '365PSD', 'https://365psd.com', '/static/uploads/20200413/2e5d9956dd8a0b30aef235b42d8f7e49.jpg', 'Free PSD & Graphics, Illustrations', 1, '2020-04-13 09:38:59', 1);
INSERT INTO `fydh_links` VALUES (36, 8, '字体仓库', 'https://www.ziticangku.com', '/static/uploads/20200413/7bfeebcf090306c53dc8b3fca1f98451.jpg', '最全的免费商用字体库', 1, '2020-04-13 09:56:56', 1);
INSERT INTO `fydh_links` VALUES (37, 8, 'Google_Fonts', 'https://fonts.google.com', '/static/uploads/20200413/4b7640da2ac8700b05a2749510992e4e.jpg', 'Making the web more beautiful, fast, and open through great typography', 1, '2020-04-13 10:02:20', 1);
INSERT INTO `fydh_links` VALUES (38, 8, '方正字库', 'http://www.foundertype.com', '/static/uploads/20200413/cbbde89b14881c3320edd8999ab25d3c.jpg', '方正字库官方网站', 1, '2020-04-13 10:03:30', 1);
INSERT INTO `fydh_links` VALUES (39, 8, '字体传奇网', 'http://ziticq.com', '/static/uploads/20200413/9b66ee9221b83abf85bb87570031c358.jpg', '中国首个字体品牌设计师交流网', 1, '2020-04-13 10:08:05', 1);
INSERT INTO `fydh_links` VALUES (40, 1, '百度', 'https://www.baidu.com', '/static/uploads/20200413/c8c558597d8b0de813cdd439bfb05c48.jpg', '百度一下, 你就知道', 1, '2020-04-13 10:11:31', 1);
INSERT INTO `fydh_links` VALUES (41, 1, 'Google', 'https://www.google.com/', '/static/uploads/20200413/f7b9b6813acbcd8c6c73c3804a7530e9.jpg', '百度不到就用Google', 1, '2020-04-13 10:13:04', 1);
INSERT INTO `fydh_links` VALUES (42, 1, '必应', 'https://cn.bing.com', '/static/uploads/20200413/2ce301b8c82515d3f8d357283cbb25fb.jpg', '微软Bing搜索是国际领先的搜索引擎，为中国用户提供信息搜索服务', 1, '2020-04-13 10:15:43', 1);
INSERT INTO `fydh_links` VALUES (43, 1, '谷歌翻译', 'https://translate.google.cn', '/static/uploads/20200413/ab2bf7c093cd9f56d59a026ddca2fbc8.jpg', '推荐使用谷歌翻译', 1, '2020-04-13 10:17:45', 1);
INSERT INTO `fydh_links` VALUES (44, 2, '风影OvO博客', 'https://www.fyovo.com', '/static/uploads/20200413/9a8d3e8f29e3024b19536404972c92e9.jpg', '一只普通的网络小白', 66, '2020-04-13 10:20:08', 1);
INSERT INTO `fydh_links` VALUES (45, 1, '码云', 'https://gitee.com', '/static/uploads/20200413/78970e54ff322d74a5e50a3aa60f31fd.jpg', '代码托管平台，支持 Git 和 SVN，提供免费的私有仓库托管', 1, '2020-04-13 10:25:30', 1);
INSERT INTO `fydh_links` VALUES (46, 1, 'GitHub', 'https://github.com', '/static/uploads/20200413/81779a31c937b87e92f6755aa8ab5e8b.jpg', '全球同性交友网站', 1, '2020-04-13 10:28:26', 1);
INSERT INTO `fydh_links` VALUES (47, 2, '白俊遥博客', 'https://baijunyao.com', '/static/uploads/default.jpg', 'PHP技术大佬', 1, '2020-04-13 10:33:44', 1);
INSERT INTO `fydh_links` VALUES (48, 2, '张自然个人博客', 'http://www.zhangziran.com', '/static/uploads/default.jpg', '既是个人原创独立日记，也是汇聚优品的个人网站', 1, '2020-04-13 10:36:45', 1);
INSERT INTO `fydh_links` VALUES (49, 2, '仙士可博客', 'http://www.php20.cn', '/static/uploads/default.jpg', '专注分享原创技术,记录了仙士可的后端工程师学习历程,php,mysql,js,jq,linux,swoole等后端相关技术知识', 1, '2020-04-13 10:37:57', 1);

-- ----------------------------
-- Table structure for fydh_menu_type
-- ----------------------------
DROP TABLE IF EXISTS `fydh_menu_type`;
CREATE TABLE `fydh_menu_type`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `type_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL COMMENT '分类名称',
  `pid` int(10) UNSIGNED DEFAULT NULL,
  `menu_order` int(10) UNSIGNED DEFAULT 1 COMMENT '排序',
  `menu_icon` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL COMMENT '分类栏图标',
  `add_time` datetime DEFAULT NULL COMMENT '添加时间',
  `status` tinyint(1) UNSIGNED DEFAULT 1 COMMENT '状态',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 9 CHARACTER SET = utf8 COLLATE = utf8_bin ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of fydh_menu_type
-- ----------------------------
INSERT INTO `fydh_menu_type` VALUES (1, '常用推荐', NULL, 2, 'linecons-star', '2020-04-10 15:57:51', 1);
INSERT INTO `fydh_menu_type` VALUES (2, '技术博客', NULL, 1, 'linecons-diamond', '2020-04-10 16:02:22', 1);
INSERT INTO `fydh_menu_type` VALUES (4, '灵感采集', NULL, 1, 'linecons-heart', '2020-04-12 19:54:22', 1);
INSERT INTO `fydh_menu_type` VALUES (5, '在线配色', NULL, 1, 'linecons-eye', '2020-04-13 08:45:34', 1);
INSERT INTO `fydh_menu_type` VALUES (6, '在线工具', NULL, 1, 'linecons-desktop', '2020-04-13 09:15:40', 1);
INSERT INTO `fydh_menu_type` VALUES (7, '图标素材', NULL, 1, 'linecons-note', '2020-04-13 09:25:51', 1);
INSERT INTO `fydh_menu_type` VALUES (8, '字体资源', NULL, 1, 'linecons-pencil', '2020-04-13 09:53:16', 1);

-- ----------------------------
-- Table structure for fydh_site
-- ----------------------------
DROP TABLE IF EXISTS `fydh_site`;
CREATE TABLE `fydh_site`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL COMMENT '站点标题',
  `keywords` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL COMMENT '关键词',
  `description` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL COMMENT '网站内容描述',
  `logo` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL COMMENT '前端页面左上角主logo',
  `logo_collapsed` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL COMMENT '左侧菜单折叠后的logo',
  `icon` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL COMMENT '浏览器标签ico',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_bin ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of fydh_site
-- ----------------------------
INSERT INTO `fydh_site` VALUES (1, '风影导航', '风影导航,网址导航,设计资源,创意导航,创意网站导航,个人导航,网址收藏', '风影导航:收集国内外优秀实用网站、技术资源网站、UI设计资源网站、灵感创意网站、素材资源网站，分享优质产品设计技术类书签。', '/static/index/assets/images/logo@2x.png', '/static/index/assets/images/logo-collapsed@2x.png', '/static/index/assets/images/favicon.png');

SET FOREIGN_KEY_CHECKS = 1;
