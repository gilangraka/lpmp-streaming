<?php
    class DashboardModel extends CI_Model
	{
         function LihatDataVideo()
         {
            $query = $this->db->query("SELECT * FROM video order by id desc");

            return $query;
         }

         function Select($id) 
         {
            $query = $this->db->query("SELECT * FROM video where id='$id'");

            return $query;
         }

         function hapus($id)
         {
             $this->db->query("DELETE from video where id='$id'");
         }
    }