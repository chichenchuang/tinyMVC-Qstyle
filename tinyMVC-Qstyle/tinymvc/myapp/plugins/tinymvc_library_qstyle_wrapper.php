<?php
// important so the TinyMVC and Qstyle autoloaders work together!
define('SMARTY_SPL_AUTOLOAD', 1);
 
// require the Qstyle class
require(TMVC_MYAPPDIR . "plugins" . DS . 'Qstyle.class.php');
 
class TinyMVC_Library_Qstyle_Wrapper Extends Qstyle
{
  function __construct()
  {
    parent::__construct();
  }
}