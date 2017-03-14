<?php
class GuestBook_Model extends TinyMVC_Model
{
	function listMsg()
	{
		return $this->db->query_all('SELECT * FROM `guestbook`');
	}
	
	function addMessage($gName, $gEmail, $gGender, $gSubject, $gContent)
	{
		return $this->db->insert('guestbook', 
			array(
				'gName'=>$gName,
				'gEmail'=>$gEmail,
				'gGender'=>$gGender,
				'gSubject'=>$gSubject,
				'gContent'=>$gContent,
				'gTime'=>date( "Y:m:d H:i:s", time()+28800 )
			)
		);
	}
	
	function delMsg($id)
	{
		$this->db->where("id", $id);
		
		return $this->db->delete('guestbook');
	}
	
	function getReplyRecord($id)
	{
		return $this->db->query_one('select * from guestbook where id=?', array($id));
	}
	
	function updateReplyRecord($id, $content)
	{
		$this->db->where('id', $id); 
		
		$time = date( "Y:m:d H:i:s", time()+28800 );
		
		return $this->db->update('guestbook',array('gReply'=>$content,'gReplyTime'=>$time));
	}
}
