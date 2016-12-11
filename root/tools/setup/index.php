<?php 
$_cbase['ucfg']['lang'] = '(auto)';
require(dirname(__FILE__).'/_config.php');

// Check proot
$proot = devRun::prootGet();
if($proot!=PATH_PROJ){ 
	header("Location:../adbug/start.php?FixProot"); 
	die();
}
// Check start
$csmsg = devRun::startCheck(); 
if(!empty($csmsg)){ 
	header('Location:../adbug/start.php'); 
	die(); 
}

$setCfgs = devSetup::supCfgs();
$func = "sup$act"; //print_r(devSetup::$func($tab)); //echo $func;

if($act=='EditDB'){ 
	$dbname = req('dbname'); 
	$dbnold = req('dbnold');
	if($dbname!==$dbnold){
		devData::rstVals(DIR_CODE."/cfgs/boot/cfg_db.php",array('db_name'=>$dbname),0);
	}else{
		devRun::startDbadd($dbname);
	}
	header('Location:?');
}elseif($act=='Mark'){
	@die(devSetup::$func($step));
}elseif(method_exists('devSetup',$func)){
	devSetup::$func($tab);
}

glbHtml::page(lang('tools.setup_title')." - ".$_cbase['sys_name'],1);
glbHtml::page('imp',array('css'=>'/tools/setup/style.css','js'=>'/tools/setup/sfunc.js'));
glbHtml::page('body');

$cmydb3 = devRun::runMydb3();
$cmynow = $cmydb3[glbDBObj::getCfg('db_class')];
include(DIR_CODE.'/cfgs/boot/cfg_db.php'); //print_r($cmynow);

$orguser = 'adm_'.basKeyid::kidRand(0,3);
$orgpass = 'pass_'.basKeyid::kidRand(0,3);

require(dirname(__FILE__).'/sflow.htm');
#vopShow::inc('/tools/rhome/home.htm',DIR_ROOT); //通过模板解析
glbHtml::page('end');
?>