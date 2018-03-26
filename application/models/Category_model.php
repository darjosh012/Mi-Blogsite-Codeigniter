<?php
    class Category_model extends CI_Model {
        public function __construct() {
            $this->load->database();
        }
         public function get_categories() {
            $this->db->order_by('name');
            $query = $this->db->get('categories');
            return $query->result_array();
        }
        public function create_category() {
            $data = array (
                'name' => $this->input->post('name'),
                'slug' => strtolower(str_replace(' ', '-', $this->input->post('name')))
            );
            
            return $this->db->insert('categories', $data);
        }
        public function get_category($slug){
            $query = $this->db->get_where('categories', array ('slug' => $slug));
            return $query->row();
        }
    }