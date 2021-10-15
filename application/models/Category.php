<?php 

class Category extends CI_Model {

    public function all()
    {
        return $this->db->get('categories')->result_array();
    }
}
?>