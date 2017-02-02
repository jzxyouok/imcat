<?php
$_corder = array (
  'kid' => 'corder',
  'pid' => 'coms',
  'title' => '订单',
  'enable' => '1',
  'etab' => '0',
  'deep' => '1',
  'f' => 
  array (
    'title' => 
    array (
      'kid' => 'title',
      'title' => '订单号',
      'etab' => '0',
      'type' => 'input',
      'dbtype' => 'varchar',
      'dblen' => '24',
      'dbdef' => '',
      'vreg' => 'nul:fix:xid',
      'vtip' => '标题2-60字符',
      'vmax' => '24',
      'fmsize' => '180',
      'fmline' => '1',
      'fmtitle' => '1',
      'fmextra' => '',
      'fmexstr' => '',
      'cfgs' => '',
    ),
    'ordstat' => 
    array (
      'kid' => 'ordstat',
      'title' => '状态',
      'etab' => '0',
      'type' => 'select',
      'dbtype' => 'varchar',
      'dblen' => '12',
      'dbdef' => '',
      'vreg' => '',
      'vtip' => '',
      'vmax' => '12',
      'fmsize' => '',
      'fmline' => '0',
      'fmtitle' => '1',
      'fmextra' => '',
      'fmexstr' => '',
      'cfgs' => 'new=新建
doing=处理中
paid=已付款
send=已发货
return=退货',
    ),
    'ordcnt' => 
    array (
      'kid' => 'ordcnt',
      'title' => '总数量',
      'etab' => '0',
      'type' => 'input',
      'dbtype' => 'int',
      'dblen' => '4',
      'dbdef' => '',
      'vreg' => '',
      'vtip' => '',
      'vmax' => '4',
      'fmsize' => '',
      'fmline' => '1',
      'fmtitle' => '0',
      'fmextra' => '',
      'fmexstr' => '',
      'cfgs' => '',
    ),
    'ordweight' => 
    array (
      'kid' => 'ordweight',
      'title' => '总重量',
      'etab' => '0',
      'type' => 'input',
      'dbtype' => 'float',
      'dblen' => '4',
      'dbdef' => '',
      'vreg' => '',
      'vtip' => '',
      'vmax' => '4',
      'fmsize' => '',
      'fmline' => '0',
      'fmtitle' => '1',
      'fmextra' => '',
      'fmexstr' => '',
      'cfgs' => '',
    ),
    'ordpay' => 
    array (
      'kid' => 'ordpay',
      'title' => '支付方式',
      'etab' => '0',
      'type' => 'select',
      'dbtype' => 'varchar',
      'dblen' => '12',
      'dbdef' => '',
      'vreg' => '',
      'vtip' => '',
      'vmax' => '12',
      'fmsize' => '',
      'fmline' => '1',
      'fmtitle' => '0',
      'fmextra' => '',
      'fmexstr' => '',
      'cfgs' => 'bext_paras.paymode_cn',
    ),
    'ordship' => 
    array (
      'kid' => 'ordship',
      'title' => '运输方式',
      'etab' => '0',
      'type' => 'select',
      'dbtype' => 'varchar',
      'dblen' => '12',
      'dbdef' => '',
      'vreg' => '',
      'vtip' => '',
      'vmax' => '12',
      'fmsize' => '',
      'fmline' => '0',
      'fmtitle' => '1',
      'fmextra' => '',
      'fmexstr' => '',
      'cfgs' => 'bext_paras.logmode_cn',
    ),
    'ordshto' => 
    array (
      'kid' => 'ordshto',
      'title' => '发货地区',
      'etab' => '0',
      'type' => 'input',
      'dbtype' => 'varchar',
      'dblen' => '12',
      'dbdef' => '',
      'vreg' => '',
      'vtip' => '',
      'vmax' => '12',
      'fmsize' => '240',
      'fmline' => '1',
      'fmtitle' => '0',
      'fmextra' => 'winpop',
      'fmexstr' => 'china',
      'cfgs' => '',
    ),
    'feeamount' => 
    array (
      'kid' => 'feeamount',
      'title' => '货品金额',
      'etab' => '0',
      'type' => 'input',
      'dbtype' => 'float',
      'dblen' => '8',
      'dbdef' => '',
      'vreg' => '',
      'vtip' => '',
      'vmax' => '8',
      'fmsize' => '',
      'fmline' => '1',
      'fmtitle' => '0',
      'fmextra' => '',
      'fmexstr' => '',
      'cfgs' => '',
    ),
    'feeship' => 
    array (
      'kid' => 'feeship',
      'title' => '运费',
      'etab' => '0',
      'type' => 'input',
      'dbtype' => 'float',
      'dblen' => '8',
      'dbdef' => '',
      'vreg' => '',
      'vtip' => '',
      'vmax' => '8',
      'fmsize' => '',
      'fmline' => '0',
      'fmtitle' => '1',
      'fmextra' => '',
      'fmexstr' => '',
      'cfgs' => '',
    ),
    'feedis' => 
    array (
      'kid' => 'feedis',
      'title' => '折扣',
      'etab' => '0',
      'type' => 'input',
      'dbtype' => 'float',
      'dblen' => '8',
      'dbdef' => '',
      'vreg' => '',
      'vtip' => '',
      'vmax' => '8',
      'fmsize' => '',
      'fmline' => '1',
      'fmtitle' => '0',
      'fmextra' => '',
      'fmexstr' => '',
      'cfgs' => '',
    ),
    'feetotle' => 
    array (
      'kid' => 'feetotle',
      'title' => '总额',
      'etab' => '0',
      'type' => 'input',
      'dbtype' => 'float',
      'dblen' => '9',
      'dbdef' => '0',
      'vreg' => '',
      'vtip' => '',
      'vmax' => '9',
      'fmsize' => '',
      'fmline' => '0',
      'fmtitle' => '1',
      'fmextra' => '',
      'fmexstr' => '',
      'cfgs' => '',
    ),
    'trakeno' => 
    array (
      'kid' => 'trakeno',
      'title' => '跟踪号码',
      'etab' => '0',
      'type' => 'input',
      'dbtype' => 'varchar',
      'dblen' => '24',
      'dbdef' => '',
      'vreg' => '',
      'vtip' => '',
      'vmax' => '24',
      'fmsize' => '120',
      'fmline' => '1',
      'fmtitle' => '0',
      'fmextra' => '',
      'fmexstr' => '',
      'cfgs' => '',
    ),
    'tradeurl' => 
    array (
      'kid' => 'tradeurl',
      'title' => '跟踪Url',
      'etab' => '0',
      'type' => 'input',
      'dbtype' => 'varchar',
      'dblen' => '255',
      'dbdef' => '',
      'vreg' => '',
      'vtip' => '',
      'vmax' => '255',
      'fmsize' => '360',
      'fmline' => '1',
      'fmtitle' => '1',
      'fmextra' => '',
      'fmexstr' => '',
      'cfgs' => '',
    ),
    'part_link' => 
    array (
      'kid' => 'part_link',
      'title' => '联系方式',
      'etab' => '0',
      'type' => 'parts',
      'dbtype' => 'nodb',
      'dblen' => '0',
      'dbdef' => '',
      'vreg' => '',
      'vtip' => '',
      'vmax' => '0',
      'fmsize' => '',
      'fmline' => '1',
      'fmtitle' => '0',
      'fmextra' => '',
      'fmexstr' => '',
      'cfgs' => '',
    ),
    'mname' => 
    array (
      'kid' => 'mname',
      'title' => '会员名称',
      'etab' => '0',
      'type' => 'input',
      'dbtype' => 'varchar',
      'dblen' => '24',
      'dbdef' => '',
      'vreg' => 'str:2-24',
      'vtip' => '2-24字符',
      'vmax' => '24',
      'fmsize' => '',
      'fmline' => '1',
      'fmtitle' => '1',
      'fmextra' => '',
      'fmexstr' => '',
      'cfgs' => '',
    ),
    'mtel' => 
    array (
      'kid' => 'mtel',
      'title' => '电话',
      'etab' => '0',
      'type' => 'input',
      'dbtype' => 'varchar',
      'dblen' => '24',
      'dbdef' => '',
      'vreg' => 'fix:tel',
      'vtip' => '2-24字符',
      'vmax' => '24',
      'fmsize' => '',
      'fmline' => '0',
      'fmtitle' => '1',
      'fmextra' => '',
      'fmexstr' => '',
      'cfgs' => '',
    ),
    'miuid' => 
    array (
      'kid' => 'miuid',
      'title' => '聊天号',
      'etab' => '0',
      'type' => 'input',
      'dbtype' => 'varchar',
      'dblen' => '120',
      'dbdef' => '',
      'vreg' => 'nul:str:5-120',
      'vtip' => '聊天号:QQ,MSN等',
      'vmax' => '120',
      'fmsize' => '',
      'fmline' => '1',
      'fmtitle' => '1',
      'fmextra' => '',
      'fmexstr' => '',
      'cfgs' => '',
    ),
    'memail' => 
    array (
      'kid' => 'memail',
      'title' => '邮件',
      'etab' => '0',
      'type' => 'input',
      'dbtype' => 'varchar',
      'dblen' => '255',
      'dbdef' => '',
      'vreg' => 'nul:fix:email',
      'vtip' => '如:peace@domain.com',
      'vmax' => '255',
      'fmsize' => '',
      'fmline' => '0',
      'fmtitle' => '1',
      'fmextra' => '',
      'fmexstr' => '',
      'cfgs' => '',
    ),
    'mweb' => 
    array (
      'kid' => 'mweb',
      'title' => '网址',
      'etab' => '0',
      'type' => 'input',
      'dbtype' => 'varchar',
      'dblen' => '255',
      'dbdef' => '',
      'vreg' => 'nul:fix:uri',
      'vtip' => 'http://开头',
      'vmax' => '255',
      'fmsize' => '360',
      'fmline' => '1',
      'fmtitle' => '1',
      'fmextra' => '',
      'fmexstr' => '',
      'cfgs' => '',
    ),
    'maddr' => 
    array (
      'kid' => 'maddr',
      'title' => '地址',
      'etab' => '0',
      'type' => 'input',
      'dbtype' => 'varchar',
      'dblen' => '120',
      'dbdef' => '',
      'vreg' => 'nul:str:5-120',
      'vtip' => '详细地址',
      'vmax' => '120',
      'fmsize' => '360',
      'fmline' => '1',
      'fmtitle' => '1',
      'fmextra' => '',
      'fmexstr' => '',
      'cfgs' => '',
    ),
    'detail' => 
    array (
      'kid' => 'detail',
      'title' => '备注',
      'etab' => '0',
      'type' => 'text',
      'dbtype' => 'text',
      'dblen' => '0',
      'dbdef' => '',
      'vreg' => 'nul:str:10+',
      'vtip' => '内容10字符以上',
      'vmax' => '0',
      'fmsize' => '360',
      'fmline' => '1',
      'fmtitle' => '1',
      'fmextra' => '',
      'fmexstr' => '',
      'cfgs' => '',
    ),
  ),
);
?>