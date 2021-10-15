<?php 

class Talent extends CI_Model
{
    public function all() 
    {
        return $this->db->get('talents')->result_array();        
    }

    public function selectSkills()
    {
        $query = $this->db->query('select skills from talents')->result_array();
        return $query;
    }

    public function category($limit, $start)
    {
        $this->db->select('*');
        $this->db->from('talents t');        
        $this->db->join('categories c', 'c.id = t.id_kategori', 'left');
        $this->db->join('profile_photos p', 'p.id = t.id_photo_profile', 'left');
        $this->db->limit($limit, $start);
        
        return $this->db->get();        
    }

    public function where($keyword, $categories, $skills, $limit, $start)
    {
        $this->db->select('*');
        $this->db->from('talents t');        
        $this->db->join('categories c', 'c.id = t.id_kategori', 'left');
        $this->db->join('profile_photos p', 'p.id = t.id_photo_profile', 'left');
        if($keyword) {
            $this->db->like('name', $keyword);        
        }
        $this->db->or_where_in('c.id', $categories);
        if($skills) {
            foreach($skills as $skill) {
                $this->db->or_like('t.skills', $skill);
            }
        }
        $this->db->limit($limit, $start);
        $data = $this->db->get();
        return $data;                
    }

    public function countAllTalents()
    {
        return $this->db->get('talents')->num_rows();
    }
}

?>