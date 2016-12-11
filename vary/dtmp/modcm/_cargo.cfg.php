<?php
$_cargo = array (
  'kid' => 'cargo',
  'pid' => 'docs',
  'title' => '商品展销',
  'enable' => '1',
  'etab' => '1',
  'deep' => '2',
  'f' => 
  array (
    'brand' => 
    array (
      'kid' => 'brand',
      'model' => 'cargo',
      'title' => '品牌',
      'top' => '108',
      'enable' => '1',
      'etab' => '0',
      'type' => 'select',
      'dbtype' => 'varchar',
      'dblen' => '12',
      'dbdef' => '',
      'vreg' => '',
      'vtip' => '',
      'vmax' => '48',
      'fmsize' => '',
      'fmline' => '1',
      'fmtitle' => '0',
      'fmextra' => '',
      'fmexstr' => '',
      'cfgs' => 'brand',
      'note' => '',
      'aip' => '',
      'atime' => '0',
      'auser' => '',
      'eip' => '',
      'etime' => '0',
      'euser' => '',
    ),
    'hinfo' => 
    array (
      'kid' => 'hinfo',
      'model' => 'cargo',
      'title' => '推荐',
      'top' => '109',
      'enable' => '1',
      'etab' => '0',
      'type' => 'select',
      'dbtype' => 'varchar',
      'dblen' => '12',
      'dbdef' => '',
      'vreg' => '',
      'vtip' => '',
      'vmax' => '48',
      'fmsize' => '',
      'fmline' => '0',
      'fmtitle' => '1',
      'fmextra' => '',
      'fmexstr' => '',
      'cfgs' => 'hinfo',
      'note' => '',
      'aip' => '',
      'atime' => '0',
      'auser' => '',
      'eip' => '',
      'etime' => '0',
      'euser' => '',
    ),
    'title' => 
    array (
      'kid' => 'title',
      'model' => 'cargo',
      'title' => '标题',
      'top' => '120',
      'enable' => '1',
      'etab' => '0',
      'type' => 'input',
      'dbtype' => 'varchar',
      'dblen' => '255',
      'dbdef' => '',
      'vreg' => 'tit:2-60',
      'vtip' => '标题2-60字符',
      'vmax' => '60',
      'fmsize' => '360',
      'fmline' => '1',
      'fmtitle' => '1',
      'fmextra' => '',
      'fmexstr' => '',
      'cfgs' => '',
      'note' => '',
      'aip' => '',
      'atime' => '0',
      'auser' => '',
      'eip' => '',
      'etime' => '0',
      'euser' => '',
    ),
    'color' => 
    array (
      'kid' => 'color',
      'model' => 'cargo',
      'title' => '标题颜色',
      'top' => '121',
      'enable' => '1',
      'etab' => '0',
      'type' => 'input',
      'dbtype' => 'varchar',
      'dblen' => '12',
      'dbdef' => '',
      'vreg' => 'nul:str:4-7',
      'vtip' => '如:#FF00FF',
      'vmax' => '8',
      'fmsize' => '',
      'fmline' => '0',
      'fmtitle' => '0',
      'fmextra' => 'color',
      'fmexstr' => 'title',
      'cfgs' => '',
      'note' => '',
      'aip' => '',
      'atime' => '0',
      'auser' => '',
      'eip' => '',
      'etime' => '0',
      'euser' => '',
    ),
    'ndb_repeat' => 
    array (
      'kid' => 'ndb_repeat',
      'model' => 'cargo',
      'title' => '检查重复',
      'top' => '122',
      'enable' => '1',
      'etab' => '0',
      'type' => 'repeat',
      'dbtype' => 'nodb',
      'dblen' => '0',
      'dbdef' => '',
      'vreg' => '',
      'vtip' => '',
      'vmax' => '0',
      'fmsize' => '',
      'fmline' => '0',
      'fmtitle' => '0',
      'fmextra' => 'repeat',
      'fmexstr' => '',
      'cfgs' => 'pro,title',
      'note' => '',
      'aip' => '',
      'atime' => '0',
      'auser' => '',
      'eip' => '',
      'etime' => '0',
      'euser' => '',
    ),
    'xinghao' => 
    array (
      'kid' => 'xinghao',
      'model' => 'cargo',
      'title' => '型号',
      'top' => '123',
      'enable' => '1',
      'etab' => '0',
      'type' => 'input',
      'dbtype' => 'varchar',
      'dblen' => '255',
      'dbdef' => '',
      'vreg' => '',
      'vtip' => '',
      'vmax' => '255',
      'fmsize' => '180',
      'fmline' => '1',
      'fmtitle' => '1',
      'fmextra' => '',
      'fmexstr' => '',
      'cfgs' => '',
      'note' => '',
      'aip' => '',
      'atime' => '0',
      'auser' => '',
      'eip' => '',
      'etime' => '0',
      'euser' => '',
    ),
    'guige' => 
    array (
      'kid' => 'guige',
      'model' => 'cargo',
      'title' => '规格',
      'top' => '124',
      'enable' => '1',
      'etab' => '0',
      'type' => 'input',
      'dbtype' => 'varchar',
      'dblen' => '255',
      'dbdef' => '',
      'vreg' => '',
      'vtip' => '',
      'vmax' => '255',
      'fmsize' => '180',
      'fmline' => '0',
      'fmtitle' => '1',
      'fmextra' => '',
      'fmexstr' => '',
      'cfgs' => '',
      'note' => '',
      'aip' => '',
      'atime' => '0',
      'auser' => '',
      'eip' => '',
      'etime' => '0',
      'euser' => '',
    ),
    'price' => 
    array (
      'kid' => 'price',
      'model' => 'cargo',
      'title' => '价格',
      'top' => '125',
      'enable' => '1',
      'etab' => '0',
      'type' => 'input',
      'dbtype' => 'float',
      'dblen' => '0',
      'dbdef' => '0.0',
      'vreg' => '',
      'vtip' => '元',
      'vmax' => '0',
      'fmsize' => '80',
      'fmline' => '1',
      'fmtitle' => '0',
      'fmextra' => '',
      'fmexstr' => '',
      'cfgs' => '',
      'note' => '',
      'aip' => '',
      'atime' => '0',
      'auser' => '',
      'eip' => '',
      'etime' => '0',
      'euser' => '',
    ),
    'pbat' => 
    array (
      'kid' => 'pbat',
      'model' => 'cargo',
      'title' => '批量价',
      'top' => '126',
      'enable' => '1',
      'etab' => '1',
      'type' => 'input',
      'dbtype' => 'varchar',
      'dblen' => '255',
      'dbdef' => '',
      'vreg' => '',
      'vtip' => '1-5:68;6-12:58;',
      'vmax' => '255',
      'fmsize' => '240',
      'fmline' => '0',
      'fmtitle' => '1',
      'fmextra' => '',
      'fmexstr' => '',
      'cfgs' => '',
      'note' => '',
      'aip' => '',
      'atime' => '0',
      'auser' => '',
      'eip' => '',
      'etime' => '0',
      'euser' => '',
    ),
    'weight' => 
    array (
      'kid' => 'weight',
      'model' => 'cargo',
      'title' => '重量',
      'top' => '128',
      'enable' => '1',
      'etab' => '0',
      'type' => 'input',
      'dbtype' => 'float',
      'dblen' => '6',
      'dbdef' => '0',
      'vreg' => 'nul:',
      'vtip' => '',
      'vmax' => '6',
      'fmsize' => '60',
      'fmline' => '0',
      'fmtitle' => '1',
      'fmextra' => '',
      'fmexstr' => '',
      'cfgs' => '',
      'note' => '',
      'aip' => '',
      'atime' => '0',
      'auser' => '',
      'eip' => '',
      'etime' => '0',
      'euser' => '',
    ),
    'detail' => 
    array (
      'kid' => 'detail',
      'model' => 'cargo',
      'title' => '内容',
      'top' => '132',
      'enable' => '1',
      'etab' => '1',
      'type' => 'text',
      'dbtype' => 'mediumtext',
      'dblen' => '0',
      'dbdef' => '',
      'vreg' => 'nul:str:10+',
      'vtip' => '内容10字符以上',
      'vmax' => '0',
      'fmsize' => '640x320',
      'fmline' => '1',
      'fmtitle' => '1',
      'fmextra' => 'editor',
      'fmexstr' => 'full,exbar',
      'cfgs' => '',
      'note' => '',
      'aip' => '',
      'atime' => '0',
      'auser' => '',
      'eip' => '',
      'etime' => '0',
      'euser' => '',
    ),
    'seo_key' => 
    array (
      'kid' => 'seo_key',
      'model' => 'cargo',
      'title' => '关键字',
      'top' => '136',
      'enable' => '1',
      'etab' => '1',
      'type' => 'input',
      'dbtype' => 'varchar',
      'dblen' => '255',
      'dbdef' => '',
      'vreg' => '',
      'vtip' => '',
      'vmax' => '255',
      'fmsize' => '480',
      'fmline' => '1',
      'fmtitle' => '1',
      'fmextra' => '',
      'fmexstr' => '',
      'cfgs' => '',
      'note' => '',
      'aip' => '',
      'atime' => '0',
      'auser' => '',
      'eip' => '',
      'etime' => '0',
      'euser' => '',
    ),
    'seo_des' => 
    array (
      'kid' => 'seo_des',
      'model' => 'cargo',
      'title' => '描述',
      'top' => '140',
      'enable' => '1',
      'etab' => '1',
      'type' => 'input',
      'dbtype' => 'varchar',
      'dblen' => '255',
      'dbdef' => '',
      'vreg' => '',
      'vtip' => '',
      'vmax' => '255',
      'fmsize' => '480',
      'fmline' => '1',
      'fmtitle' => '1',
      'fmextra' => '',
      'fmexstr' => '',
      'cfgs' => '',
      'note' => '',
      'aip' => '',
      'atime' => '0',
      'auser' => '',
      'eip' => '',
      'etime' => '0',
      'euser' => '',
    ),
    'seo_tag' => 
    array (
      'kid' => 'seo_tag',
      'model' => 'cargo',
      'title' => '标签',
      'top' => '144',
      'enable' => '1',
      'etab' => '1',
      'type' => 'input',
      'dbtype' => 'varchar',
      'dblen' => '255',
      'dbdef' => '',
      'vreg' => '',
      'vtip' => '',
      'vmax' => '255',
      'fmsize' => '480',
      'fmline' => '1',
      'fmtitle' => '1',
      'fmextra' => '',
      'fmexstr' => '',
      'cfgs' => '',
      'note' => '',
      'aip' => '',
      'atime' => '0',
      'auser' => '',
      'eip' => '',
      'etime' => '0',
      'euser' => '',
    ),
    'mpic' => 
    array (
      'kid' => 'mpic',
      'model' => 'cargo',
      'title' => '缩略图',
      'top' => '148',
      'enable' => '1',
      'etab' => '0',
      'type' => 'file',
      'dbtype' => 'varchar',
      'dblen' => '255',
      'dbdef' => '',
      'vreg' => 'nul:fix:image',
      'vtip' => 'gif/jpg/jpeg/png格式.',
      'vmax' => '255',
      'fmsize' => '320',
      'fmline' => '1',
      'fmtitle' => '1',
      'fmextra' => '',
      'fmexstr' => '',
      'cfgs' => '',
      'note' => '',
      'aip' => '',
      'atime' => '0',
      'auser' => '',
      'eip' => '',
      'etime' => '0',
      'euser' => '',
    ),
    'source' => 
    array (
      'kid' => 'source',
      'model' => 'cargo',
      'title' => '来源',
      'top' => '156',
      'enable' => '1',
      'etab' => '1',
      'type' => 'input',
      'dbtype' => 'varchar',
      'dblen' => '255',
      'dbdef' => '',
      'vreg' => '',
      'vtip' => '',
      'vmax' => '255',
      'fmsize' => '480',
      'fmline' => '1',
      'fmtitle' => '0',
      'fmextra' => '',
      'fmexstr' => '',
      'cfgs' => '',
      'note' => '',
      'aip' => '',
      'atime' => '0',
      'auser' => '',
      'eip' => '',
      'etime' => '0',
      'euser' => '',
    ),
    'ordcnt' => 
    array (
      'kid' => 'ordcnt',
      'model' => 'cargo',
      'title' => '订购次数',
      'top' => '158',
      'enable' => '1',
      'etab' => '0',
      'type' => 'input',
      'dbtype' => 'int',
      'dblen' => '10',
      'dbdef' => '0',
      'vreg' => '',
      'vtip' => '',
      'vmax' => '8',
      'fmsize' => '',
      'fmline' => '1',
      'fmtitle' => '0',
      'fmextra' => '',
      'fmexstr' => '',
      'cfgs' => '',
      'note' => '',
      'aip' => '',
      'atime' => '0',
      'auser' => '',
      'eip' => '',
      'etime' => '0',
      'euser' => '',
    ),
    'click' => 
    array (
      'kid' => 'click',
      'model' => 'cargo',
      'title' => '点击',
      'top' => '160',
      'enable' => '1',
      'etab' => '0',
      'type' => 'input',
      'dbtype' => 'int',
      'dblen' => '10',
      'dbdef' => '0',
      'vreg' => 'n+i',
      'vtip' => '如:888',
      'vmax' => '8',
      'fmsize' => '',
      'fmline' => '0',
      'fmtitle' => '1',
      'fmextra' => '',
      'fmexstr' => '',
      'cfgs' => '',
      'note' => '',
      'aip' => '',
      'atime' => '0',
      'auser' => '',
      'eip' => '',
      'etime' => '0',
      'euser' => '',
    ),
    'author' => 
    array (
      'kid' => 'author',
      'model' => 'cargo',
      'title' => '作者',
      'top' => '164',
      'enable' => '1',
      'etab' => '1',
      'type' => 'input',
      'dbtype' => 'varchar',
      'dblen' => '255',
      'dbdef' => '',
      'vreg' => '',
      'vtip' => '',
      'vmax' => '255',
      'fmsize' => '',
      'fmline' => '0',
      'fmtitle' => '1',
      'fmextra' => '',
      'fmexstr' => '',
      'cfgs' => '',
      'note' => '',
      'aip' => '',
      'atime' => '0',
      'auser' => '',
      'eip' => '',
      'etime' => '0',
      'euser' => '',
    ),
    'rel_pic' => 
    array (
      'kid' => 'rel_pic',
      'model' => 'cargo',
      'title' => '相关图片',
      'top' => '666',
      'enable' => '1',
      'etab' => '1',
      'type' => 'text',
      'dbtype' => 'text',
      'dblen' => '0',
      'dbdef' => '',
      'vreg' => '',
      'vtip' => '',
      'vmax' => '0',
      'fmsize' => '',
      'fmline' => '1',
      'fmtitle' => '0',
      'fmextra' => 'pics',
      'fmexstr' => '',
      'cfgs' => 'full=外观图
side=侧面图
inn=内部图
att=附件图',
      'note' => '',
      'aip' => '',
      'atime' => '0',
      'auser' => '',
      'eip' => '127.0.0.1',
      'etime' => '1479903900',
      'euser' => 'peace',
    ),
    'diggtop' => 
    array (
      'kid' => 'diggtop',
      'model' => 'cargo',
      'title' => 'diggtop',
      'top' => '720',
      'enable' => '1',
      'etab' => '0',
      'type' => 'input',
      'dbtype' => 'int',
      'dblen' => '12',
      'dbdef' => '0',
      'vreg' => '',
      'vtip' => '',
      'vmax' => '12',
      'fmsize' => '',
      'fmline' => '1',
      'fmtitle' => '0',
      'fmextra' => '',
      'fmexstr' => '',
      'cfgs' => '',
      'note' => '',
      'aip' => '127.0.0.1',
      'atime' => '1478951289',
      'auser' => 'peace',
      'eip' => '127.0.0.1',
      'etime' => '1479903900',
      'euser' => 'peace',
    ),
    'diggdown' => 
    array (
      'kid' => 'diggdown',
      'model' => 'cargo',
      'title' => 'diggdown',
      'top' => '721',
      'enable' => '1',
      'etab' => '0',
      'type' => 'input',
      'dbtype' => 'int',
      'dblen' => '12',
      'dbdef' => '0',
      'vreg' => '',
      'vtip' => '',
      'vmax' => '12',
      'fmsize' => '',
      'fmline' => '0',
      'fmtitle' => '1',
      'fmextra' => '',
      'fmexstr' => '',
      'cfgs' => '',
      'note' => '',
      'aip' => '127.0.0.1',
      'atime' => '1478951419',
      'auser' => 'peace',
      'eip' => '127.0.0.1',
      'etime' => '1479903900',
      'euser' => 'peace',
    ),
  ),
  'i' => 
  array (
    'p1012' => 
    array (
      'kid' => 'p1012',
      'pid' => '0',
      'title' => '手机配件',
      'deep' => '1',
      'frame' => '1',
      'char' => 'C',
      'cfgs' => '',
    ),
    'p2012' => 
    array (
      'kid' => 'p2012',
      'pid' => 'p1012',
      'title' => '手机主机',
      'deep' => '2',
      'frame' => '0',
      'char' => 'C',
      'cfgs' => '',
    ),
    'p2014' => 
    array (
      'kid' => 'p2014',
      'pid' => 'p1012',
      'title' => '手机配件',
      'deep' => '2',
      'frame' => '0',
      'char' => 'C',
      'cfgs' => '',
    ),
    'p2016' => 
    array (
      'kid' => 'p2016',
      'pid' => 'p1012',
      'title' => '手机套卡',
      'deep' => '2',
      'frame' => '0',
      'char' => 'C',
      'cfgs' => '',
    ),
    'p1014' => 
    array (
      'kid' => 'p1014',
      'pid' => '0',
      'title' => '书籍音像',
      'deep' => '1',
      'frame' => '1',
      'char' => 'C',
      'cfgs' => '',
    ),
    'p2018' => 
    array (
      'kid' => 'p2018',
      'pid' => 'p1014',
      'title' => '普通书',
      'deep' => '2',
      'frame' => '0',
      'char' => 'C',
      'cfgs' => '',
    ),
    'p2020' => 
    array (
      'kid' => 'p2020',
      'pid' => 'p1014',
      'title' => '电子书',
      'deep' => '2',
      'frame' => '0',
      'char' => 'C',
      'cfgs' => '',
    ),
    'c2014' => 
    array (
      'kid' => 'c2014',
      'pid' => 'p1014',
      'title' => '益智玩具',
      'deep' => '2',
      'frame' => '0',
      'char' => 'Y',
      'cfgs' => '',
    ),
    'c2012' => 
    array (
      'kid' => 'c2012',
      'pid' => 'p1014',
      'title' => '教具仪器',
      'deep' => '2',
      'frame' => '0',
      'char' => 'J',
      'cfgs' => '',
    ),
    'p1016' => 
    array (
      'kid' => 'p1016',
      'pid' => '0',
      'title' => '服装饰品',
      'deep' => '1',
      'frame' => '1',
      'char' => 'C',
      'cfgs' => '',
    ),
    'p2022' => 
    array (
      'kid' => 'p2022',
      'pid' => 'p1016',
      'title' => '外衣',
      'deep' => '2',
      'frame' => '0',
      'char' => 'C',
      'cfgs' => '',
    ),
    'c2016' => 
    array (
      'kid' => 'c2016',
      'pid' => 'p1016',
      'title' => '外裤',
      'deep' => '2',
      'frame' => '0',
      'char' => 'W',
      'cfgs' => '',
    ),
    'c2020' => 
    array (
      'kid' => 'c2020',
      'pid' => 'p1016',
      'title' => '内裤',
      'deep' => '2',
      'frame' => '0',
      'char' => 'N',
      'cfgs' => '',
    ),
    'c2018' => 
    array (
      'kid' => 'c2018',
      'pid' => 'p1016',
      'title' => '女内衣',
      'deep' => '2',
      'frame' => '0',
      'char' => 'N',
      'cfgs' => '',
    ),
    'c2022' => 
    array (
      'kid' => 'c2022',
      'pid' => 'p1016',
      'title' => '孕妇装',
      'deep' => '2',
      'frame' => '0',
      'char' => 'Y',
      'cfgs' => '',
    ),
    'c2024' => 
    array (
      'kid' => 'c2024',
      'pid' => 'p1016',
      'title' => '童装',
      'deep' => '2',
      'frame' => '0',
      'char' => 'T',
      'cfgs' => '',
    ),
    'p1018' => 
    array (
      'kid' => 'p1018',
      'pid' => '0',
      'title' => '家电家具',
      'deep' => '1',
      'frame' => '1',
      'char' => 'C',
      'cfgs' => '',
    ),
    'p2024' => 
    array (
      'kid' => 'p2024',
      'pid' => 'p1018',
      'title' => '电视机',
      'deep' => '2',
      'frame' => '0',
      'char' => 'C',
      'cfgs' => '',
    ),
    'p2026' => 
    array (
      'kid' => 'p2026',
      'pid' => 'p1018',
      'title' => '冰箱',
      'deep' => '2',
      'frame' => '0',
      'char' => 'C',
      'cfgs' => '',
    ),
    'c2026' => 
    array (
      'kid' => 'c2026',
      'pid' => 'p1018',
      'title' => '空调',
      'deep' => '2',
      'frame' => '0',
      'char' => 'K',
      'cfgs' => '',
    ),
  ),
);
?>