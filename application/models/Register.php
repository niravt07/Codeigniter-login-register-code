<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Model{


	function adduser($data = array()){
		
		$add = $this->db->insert('users',$data);

		if($add)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
}
