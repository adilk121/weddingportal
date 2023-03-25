<?php
/*session_set_cookie_params(0);
ini_set('session.gc_maxlifetime', 0);*/

if(!defined('LOCAL_MODE')) {
	die('<span style="font-family: tahoma, arial; font-size: 11px">config file cannot be included directly');
}

if (LOCAL_MODE) {
    // Settings for local midas server do not edit here
	
	// database settings 
    $ARR_CFGS["db_host"] = 'localhost';
	$ARR_CFGS["db_name"] = 'thebestw_bestwedding';
    $ARR_CFGS["db_user"] = 'root';
    $ARR_CFGS["db_pass"] = '';
	define('SITE_SUB_PATH', '');
} else {
   // database settings 
    $ARR_CFGS["db_host"] = 'localhost';
	$ARR_CFGS["db_name"] = 'thebestw_bestwedding';
    $ARR_CFGS["db_user"] = 'thebestw_bestwedding';
    $ARR_CFGS["db_pass"] = '!+.ub,fL$O7Y';
	define('SITE_SUB_PATH', '');



}

define('SITE_WS_PATH', 'https://'.$_SERVER['HTTP_HOST'].SITE_SUB_PATH);
define('SITE_FS_PATH', 'https://'.$_SERVER['HTTP_HOST'].SITE_SUB_PATH);
define('THUMB_CACHE_DIR', 'thumb_cache');
define('PLUGINS_DIR', 'includes/plugins');

define('UP_FILES_FS_PATH', SITE_FS_PATH.'/uploaded_files');
define('UP_FILES_WS_PATH', SITE_WS_PATH.'/uploaded_files');

define('DEFAULT_START_YEAR', 2012);
define('DEFAULT_END_YEAR', date('Y')+10);

define('SITE_NAME', 'Thebestweddinghub');
define('DEF_PAGE_SIZE', 25);

define('ADMIN_DIR', 'admin');

define('ADIM_EMAIL','info@thebestweddinghub.com');

define('SITE_MAIN_PATH','https://'.$_SERVER['HTTP_HOST'].'/');

$currDate=date("Y-m-d");
$currTime=date("h:i:s");
?>