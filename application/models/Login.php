<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Model{


	function chklogin($email,$pass){
		
		$this->db->where('email',$email);
		$this->db->where('password',$pass);
		$query = $this->db->get('users');

		if($query->num_rows() > 0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
}
