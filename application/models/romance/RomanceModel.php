<?php
    class RomanceModel extends CI_Model
	{
         function ListRomance()
         {
            $query = $this->db->query("SELECT * FROM video where kategori='Romance' order by id desc");
            return $query;
         }

         function get_romance_list($limit, $start)
         {
            $this->db->where('kategori', 'Romance');
            $this->db->order_by('id', 'DESC');
            $query = $this->db->get('video', $limit, $start);
            $data = $query->result_array();
            return $data;
         }

         function get_id($id)
         {
            $query = $this->db->query("SELECT * FROM video WHERE id='$id'");
            return $query;
         }
    }