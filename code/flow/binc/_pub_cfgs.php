<?php
(!defined('RUN_INIT')) && die('No Init');
usrPerm::run('pfile','(auto)'); 

$view = empty($view) ? 'list' : $view;
$fs_do = req('fs_do');
$fs = basReq::arr('fs'); 
#$fm = basReq::arr('fm');

$msg = ''; $cnt = 0; 
