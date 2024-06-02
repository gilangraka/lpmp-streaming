<?php
    class SejarahModel extends CI_Model
	{
         function ListSejarah()
         {
            $query = $this->db->query("SELECT * FROM video where kategori='Sejarah' order by id desc");
            return $query;
         }

         function get_sejarah_list($limit, $start)
         {
            $this->db->where('kategori', 'Sejarah');
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