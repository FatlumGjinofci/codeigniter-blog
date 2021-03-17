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

        public function check_username_exists($username)
        {
            $query = $this->db->get_where('users', [
                'username' => $username
            ]);

            // if(empty($query->row_array()))
            // {
            //     return true;
            // }
            // else
            // {
            //     return false;
            // }

            return empty($query->row_array()) ? true : false;
        } 

        public function check_email_exists($email)
        {
            $query = $this->db->get_where('users', [
                'email' => $email
            ]);

            return empty($query) ? true : false;
        }
    }