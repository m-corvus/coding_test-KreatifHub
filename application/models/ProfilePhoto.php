<?php 

class ProfilePhoto extends CI_Model
{
    public function all() 
    {
        echo 'galleries';
    }

    public function insertID()
{    
    $id = $this->db->insert_id();
    return $id;
}
}

?>