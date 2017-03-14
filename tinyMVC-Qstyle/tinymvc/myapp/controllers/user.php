<?php
class User_Controller extends TinyMVC_Controller
{
	function login()
	{
		$this->load->model('User_Model','user');
		  
		$manager = $this->user->getInfo();

		if( $_POST['username'] == $manager[0]['usr'] && $_POST['password'] == $manager[0]['pwd'] )
		{
			$_SESSION['username'] = $manager[0]['usr'];
		}
		header("Location: ../guestbook/");
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
		return true;
	}
}