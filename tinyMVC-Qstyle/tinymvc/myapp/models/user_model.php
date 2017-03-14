<?php
class User_Model extends TinyMVC_Model
{
	function getInfo()
    {
        return $this->db->query_all('select * from admin');
    }
}