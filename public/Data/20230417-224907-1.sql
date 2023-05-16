
-- -----------------------------
-- Table structure for `tp_table_tem_set`
-- -----------------------------
DROP TABLE IF EXISTS `tp_table_tem_set`;
CREATE TABLE `tp_table_tem_set` (
  `id` int(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '编号',
  `create_time` int(11) NOT NULL DEFAULT 0 COMMENT '添加时间',
  `update_time` int(11) NOT NULL DEFAULT 0 COMMENT '更新时间',
  `classes` varchar(255) NOT NULL DEFAULT '' COMMENT '表格样式',
  `row_style` text DEFAULT NULL COMMENT '行样式',
  `table_sort` varchar(255) NOT NULL DEFAULT '' COMMENT '默认排序',
  `sort_name` varchar(255) NOT NULL DEFAULT '' COMMENT '默认排序列',
  `page_ize` int(10) NOT NULL DEFAULT 10 COMMENT '默认每页行数',
  `empty_tips` varchar(255) NOT NULL DEFAULT '' COMMENT '空数据提示',
  `others` text DEFAULT NULL COMMENT '其它设置',
  `extra_js` text DEFAULT NULL COMMENT '额外JS',
  `extra_css` text DEFAULT NULL COMMENT '额外CSS',
  `extra_html` text DEFAULT NULL COMMENT '额外html',
  `name` varchar(255) NOT NULL DEFAULT '' COMMENT '模板名称',
  `escape` varchar(255) NOT NULL DEFAULT '' COMMENT '是否转义html',
  `border_color` varchar(10) NOT NULL DEFAULT '' COMMENT '边框颜色',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COMMENT='表格全局设置的模板';

-- -----------------------------
-- Records of `tp_table_tem_set`
-- -----------------------------
INSERT INTO `tp_table_tem_set` VALUES ('1', '1651544125', '1661154502', 'table table-hover', '//rowStyle: function(row, index) {   \n//if (index % 2 === 0 ) {  \n// return { css:{ \"background-color\":\'rgba(78,238,148,0.8)\' } } \n//}else{   \n//return  { css:{ \"background-color\":\'rgba(245,222,179,0.3)\' } };  \n//} \n//},', 'asc', '', '10', '没有载入数据哦', '', '', '', '', '基本模板', 'true', '');
INSERT INTO `tp_table_tem_set` VALUES ('4', '1661154608', '1661155382', 'table table-striped', '//\nrowStyle: function(row, index) {  \n  //\n  if (index % 2 === 0 ) {  \n    //\n    return { css:{ \"background-color\":\'rgba(78,238,148,0.8)\' } }\n    //\n  }else{  \n    //\n    return  { css:{ \"background-color\":\'rgba(245,222,179,0.3)\' } }; \n    //\n  }\n  //\n},', 'desc', '', '10', '', '', '', '', '', '真条纹样式', 'true', '#000000');
