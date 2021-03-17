<?php  
    class User_model extends CI_Model {
        
        public function register($enc_pass)
        {
            $data = [
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'username' => $this->input->post('username'),
                'password' => $enc_pass,
                'zipcode' => $this->input->post('zipcode'),
            ];

            return $this->db->insert('users', $data);
        }
    }