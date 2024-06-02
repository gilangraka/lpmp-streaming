<?php
    class HomeModel extends CI_Model
	{
         function LihatDrama()
         {
            $query = $this->db->query("SELECT * FROM video where kategori='Drama' order by id desc LIMIT 3");
            return $query;
         }

         function LihatSejarah()
         {
            $query = $this->db->query("SELECT * FROM video where kategori='Sejarah' order by id desc LIMIT 3");
            return $query;
         }

         function LihatRomance()
         {
            $query = $this->db->query("SELECT * FROM video where kategori='Romance' order by id desc LIMIT 3");
            return $query;
         }

         function LihatDokumenter()
         {
            $query = $this->db->query("SELECT * FROM video where kategori='Dokumenter' order by id desc LIMIT 3");
            return $query;
         }
    }