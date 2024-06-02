<?php
    class DokumenterModel extends CI_Model
	{
         function ListDokumenter()
         {
            $query = $this->db->query("SELECT * FROM video where kategori='Dokumenter' order by id desc");
            return $query;
         }

         function get_dokumenter_list($limit, $start)
         {
            $this->db->where('kategori', 'Dokumenter');
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