<?php
    class DramaModel extends CI_Model
	{
         function ListDrama()
         {
            $query = $this->db->query("SELECT * FROM video where kategori='Drama' order by id desc");
            return $query;
         }

         function get_drama_list($limit, $start)
         {
            $this->db->where('kategori', 'Drama');
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