<?php
    class LoginModel extends CI_Model
	{
         function CekData($username)
         {
            $user = $this->db->get_where('admin', ['username' => $username]);
            return $user;
         }
    }