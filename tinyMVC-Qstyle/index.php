 <?php
Session_Start();
/***
 * Name:       TinyMVC
 * About:      An MVC application framework for PHP
 * Copyright:  (C) 2007, New Digital Group Inc.
 * Author:     Monte Ohrt, monte [at] ohrt [dot] com
 * License:    LGPL, see included license file  
 ***/

/* PHP error reporting level, if different from default */
error_reporting(E_ALL);

/* define to 0 if you want errors/exceptions handled externally */
define('TMVC_ERROR_HANDLING',1);

/* directory separator alias */
if(!defined('DS'))
	define('DS',DIRECTORY_SEPARATOR);

/* set the base directory */
if(!defined('TMVC_BASEDIR'))
	define('TMVC_BASEDIR', dirname(__FILE__) . DS . 'tinymvc' . DS);

if(!defined('TMVC_MYAPPDIR'))
	define('TMVC_MYAPPDIR', TMVC_BASEDIR . 'myapp' .DS);

/* include main tmvc class */
require(TMVC_BASEDIR . 'sysfiles' . DS . 'TinyMVC.php');

/* include common function */
include 'libs/common.function.php';

/* instantiate */
$tmvc = new tmvc();

/* tally-ho! */
$tmvc->main();

?>