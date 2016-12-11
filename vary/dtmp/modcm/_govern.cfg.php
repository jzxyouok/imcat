<?php
$_govern = array (
  'kid' => 'govern',
  'pid' => 'users',
  'title' => '政府机构',
  'enable' => '1',
  'etab' => '0',
  'deep' => '1',
  'cfgs' => 'defgrade=gcom
defcheck=N',
  'f' => 
  array (
    'company' => 
    array (
      'kid' => 'company',
      'model' => 'govern',
      'title' => '机构名称',
      'top' => '120',
      'enable' => '1',
      'etab' => '0',
      'type' => 'input',
      'dbtype' => 'varchar',
      'dblen' => '96',
      'dbdef' => '',
      'vreg' => 'str:2-24',
      'vtip' => '',
      'vmax' => '24',
      'fmsize' => '420',
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
    'mpic' => 
    array (
      'kid' => 'mpic',
      'model' => 'govern',
      'title' => '缩略图',
      'top' => '122',
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
    'ftype' => 
    array (
      'kid' => 'ftype',
      'model' => 'govern',
      'title' => '行业',
      'top' => '124',
      'enable' => '1',
      'etab' => '0',
      'type' => 'select',
      'dbtype' => 'varchar',
      'dblen' => '12',
      'dbdef' => '',
      'vreg' => 'str:2-12',
      'vtip' => '',
      'vmax' => '12',
      'fmsize' => '130',
      'fmline' => '1',
      'fmtitle' => '1',
      'fmextra' => '',
      'fmexstr' => '',
      'cfgs' => 'ftype',
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
      'model' => 'govern',
      'title' => '推荐',
      'top' => '128',
      'enable' => '1',
      'etab' => '0',
      'type' => 'input',
      'dbtype' => 'varchar',
      'dblen' => '255',
      'dbdef' => '',
      'vreg' => 'str:2-12',
      'vtip' => '',
      'vmax' => '255',
      'fmsize' => '150x3',
      'fmline' => '0',
      'fmtitle' => '1',
      'fmextra' => 'winpop',
      'fmexstr' => 'hinfo',
      'cfgs' => '',
      'note' => '',
      'aip' => '',
      'atime' => '0',
      'auser' => '',
      'eip' => '',
      'etime' => '0',
      'euser' => '',
    ),
    'mname' => 
    array (
      'kid' => 'mname',
      'model' => 'govern',
      'title' => '联系人',
      'top' => '129',
      'enable' => '1',
      'etab' => '0',
      'type' => 'input',
      'dbtype' => 'varchar',
      'dblen' => '96',
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
      'note' => '',
      'aip' => '',
      'atime' => '0',
      'auser' => '',
      'eip' => '',
      'etime' => '0',
      'euser' => '',
    ),
    'mtitle' => 
    array (
      'kid' => 'mtitle',
      'model' => 'govern',
      'title' => '称呼',
      'top' => '129',
      'enable' => '1',
      'etab' => '0',
      'type' => 'input',
      'dbtype' => 'varchar',
      'dblen' => '24',
      'dbdef' => '',
      'vreg' => 'nul:tit:2-24',
      'vtip' => '',
      'vmax' => '24',
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
    'miuid' => 
    array (
      'kid' => 'miuid',
      'model' => 'govern',
      'title' => '聊天号',
      'top' => '132',
      'enable' => '1',
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
      'note' => '',
      'aip' => '',
      'atime' => '0',
      'auser' => '',
      'eip' => '',
      'etime' => '0',
      'euser' => '',
    ),
    'mtel' => 
    array (
      'kid' => 'mtel',
      'model' => 'govern',
      'title' => '电话',
      'top' => '136',
      'enable' => '1',
      'etab' => '0',
      'type' => 'input',
      'dbtype' => 'varchar',
      'dblen' => '24',
      'dbdef' => '',
      'vreg' => 'fix:tel',
      'vtip' => '',
      'vmax' => '24',
      'fmsize' => '150',
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
    'memail' => 
    array (
      'kid' => 'memail',
      'model' => 'govern',
      'title' => '邮件',
      'top' => '140',
      'enable' => '1',
      'etab' => '0',
      'type' => 'input',
      'dbtype' => 'varchar',
      'dblen' => '255',
      'dbdef' => '',
      'vreg' => 'nul:fix:email',
      'vtip' => '如:peace@domain.com',
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
    'maddr' => 
    array (
      'kid' => 'maddr',
      'model' => 'govern',
      'title' => '地址',
      'top' => '144',
      'enable' => '1',
      'etab' => '0',
      'type' => 'input',
      'dbtype' => 'varchar',
      'dblen' => '120',
      'dbdef' => '',
      'vreg' => 'nul:str:5-120',
      'vtip' => '详细地址',
      'vmax' => '120',
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
    'map' => 
    array (
      'kid' => 'map',
      'model' => 'govern',
      'title' => '地图',
      'top' => '666',
      'enable' => '1',
      'etab' => '0',
      'type' => 'input',
      'dbtype' => 'varchar',
      'dblen' => '48',
      'dbdef' => '',
      'vreg' => '',
      'vtip' => '',
      'vmax' => '48',
      'fmsize' => '240',
      'fmline' => '1',
      'fmtitle' => '0',
      'fmextra' => 'map',
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
    'mweb' => 
    array (
      'kid' => 'mweb',
      'model' => 'govern',
      'title' => '网址',
      'top' => '999',
      'enable' => '1',
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
      'note' => '',
      'aip' => '',
      'atime' => '0',
      'auser' => '',
      'eip' => '',
      'etime' => '0',
      'euser' => '',
    ),
  ),
  'i' => 
  array (
    'gcom' => 
    array (
      'kid' => 'gcom',
      'title' => '一般机构',
    ),
    'gvip' => 
    array (
      'kid' => 'gvip',
      'title' => 'VIP机构',
    ),
    'gstop' => 
    array (
      'kid' => 'gstop',
      'title' => '禁用机构',
    ),
  ),
);
?>