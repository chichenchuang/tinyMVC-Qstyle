<?php
class GuestBook_Controller extends TinyMVC_Controller
{
	function index()
	{
		if( $this->is_loggedin() )
		{
			//List all messages;
			$this->load->model('GuestBook_Model', 'gbm');

			$this->load->library('Qstyle_Wrapper','qstyle');

			$this->qstyle->assign('listMsg', $this->gbm->listMsg());
			$this->qstyle->assign('reBtn', null);

			$this->qstyle->display('glist');
		}else{
			
			echo "<script>alert('須要登入才可管理留言板!');location.href='./';</script>";
		}
	}
  
	function add()
	{
		$gName = test_input($_POST['gName']);
		$gEmail = test_input($_POST['gEmail']);
		$gSubject = test_input($_POST['gSubject']);
		$gContent = test_input($_POST['gContent']);
		
		$this->load->model('GuestBook_Model','gbm');

		$this->gbm->addMessage($gName,$gEmail,$_POST['gGender'],$gSubject,$gContent);

		header("Location: ../");
	}
  
	function del()
	{
		if( isset($_GET['del-btn']) )
		{
			$gId = $_GET['del-btn'];
			
			$this->load->model('GuestBook_Model','gbm');
			
			$this->gbm->delMsg( $gId );
			
			header("Location: ./");
		}
	}
	
	function reply()
	{
		if($this->is_loggedin())
		{
			if( isset($_GET['re-btn']) )
			{
				$gId = $_GET['re-btn'];
				
				$this->load->model('GuestBook_Model','gbm');
				
				$this->load->library('Qstyle_Wrapper','qstyle');

				$this->qstyle->assign('reBtn', $gId);
				$this->qstyle->assign('listMsg', Array($this->gbm->getReplyRecord( $gId )));

				$this->qstyle->display('glist');
			}
		}else{
			
			echo "<script>alert('須要登入才可管理留言板!');location.href='../';</script>";
		}
	}
	
	function submitReply()
	{
		if( !empty($_GET['id']) )
		{
			$gId = $_GET['id'];
			$replyContent = test_input($_POST['replyContent']);
			
			$this->load->model('GuestBook_Model','gbm');
			
			$this->gbm->updateReplyRecord($gId, $replyContent);
		}
		header("Location: ./");
	}
	
	function is_loggedin()
	{
		if(isset($_SESSION['username']))
		{
			return true;
		}
	}
    
	function logout()
	{
		session_destroy();
		unset($_SESSION['username']);
		header("Location: ../");
	}
}