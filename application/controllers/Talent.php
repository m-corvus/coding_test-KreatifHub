<?php

class Talent extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('url');
        $this->load->model('Category', 'categories');
        $this->load->model('ProfilePhoto', 'profile_photos');
        $this->load->helper('security');
    }

    public function register()
    {
        $data['title'] = 'Create a news item';
        $data['categories'] = $this->categories->all();

        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png|PNG';
        $config['max_size']             = 10000;
        $config['max_width']            = 10000;
        $config['max_height']           = 10000;

        $this->load->library('upload', $config);

        $this->form_validation->set_rules('name', 'Title', 'required');
        $this->form_validation->set_rules('email', 'Text', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('auth/register', $data);
        } else {
            if ($this->upload->do_upload('photo_profile')) {
                $gambar = $this->upload->data();
                $gambar = $gambar['file_name'];
                $this->db->insert('profile_photos', [
                    'profile_photo' => $gambar
                ]);
            }

            $data = [
                'email' => $this->input->post('email'),
                'phone_number' => $this->input->post('phone_number'),
                'age' => $this->input->post('age'),
                'id_photo_profile' => $this->profile_photos->insertID(),
                'name' => $this->input->post('name'),
                'gender' => $this->input->post('gender'),
                'skills' => $this->input->post('skills'),
                'location' => $this->input->post('location'),
                'aboutme' => $this->input->post('aboutme'),
                'id_kategori' => $this->input->post('id_kategori'),
            ];

            // var_dump($this->profile_photos->insertID());
            // die();            
            $data = $this->security->xss_clean($data);
            $this->db->insert('talents', $data);


            redirect('/');
        }
    }

    public function registration()
    {
        echo 'OK';
    }
}
