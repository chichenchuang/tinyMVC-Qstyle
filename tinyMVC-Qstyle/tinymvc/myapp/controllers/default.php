<?php

/**
 * default.php
 *
 * default application controller
 *
 * @package		TinyMVC
 * @author		Monte Ohrt
 */

class Default_Controller extends TinyMVC_Controller
{
  function index()
  {
    $this->load->model('GuestBook_Model', 'gbm');  
    $this->load->library('Qstyle_Wrapper','qstyle');
      
    $this->qstyle->assign('listMsg', $this->gbm->listMsg());
    $this->qstyle->assign('reBtn', null);
    if( !empty($_SESSION['username']) )
    {
        $this->qstyle->assign('status', "yes");
    }else{
        $this->qstyle->assign('status', "no");
    }
    $this->qstyle->display('index');
  }
}

?>
