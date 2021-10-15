<?php 

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('url');
        $this->load->model('Category', 'categories');
        $this->load->model('Talent', 'talents');
    }

    public function index()
    {        

        $data['categories'] = $this->categories->all();
        $data['select_skills'] = $this->talents->selectSkills();                   

        $this->load->view('layouts/master', $data);        
    }

    public function result()
    {
        $this->load->library('pagination');

        $config['base_url'] = 'http://localhost/kreativhub/home/result/';
        $config['total_rows'] = $this->talents->countAllTalents();
        $config['per_page'] = 4;

        $config['full_tag_open'] = '<nav><ul class="pagination justify-content-center">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';
        
        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';      

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';       

        $config['attributes'] = array('class' => 'page-link');

        $this->pagination->initialize($config);

        $start = $this->uri->segment(3);
        $search = $this->input->post();
        
        if ($search) {
            $keyword = $this->input->post('keyword');
            $categories = $this->input->post('category');
            $skills = $this->input->post('skill');        
            $data['talents'] = $this->talents->where($keyword, $categories, $skills, $config['per_page'], $start);     

            $this->load->view('home/result', $data);        
        } else {
            $data['talents'] = $this->talents->category($config['per_page'], $start);      

            $this->load->view('home/result', $data); 
        }


    }
}
