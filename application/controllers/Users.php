<?php 
    class Users extends CI_Controller {

        public function register()
        {
            $data['title'] = 'Sign Up';

            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('username', 'Username', 
                    'required|callback_check_username_exists');
            $this->form_validation->set_rules('email', 'Email', 
                    'required|callback_check_email_exists');
            $this->form_validation->set_rules('password', 'Password', 'required');
            $this->form_validation->set_rules('password2', 'Confirm Password', 'matches[password]');

            if($this->form_validation->run() === false)
            {
                $this->load->view('templates/header');
                $this->load->view('users/register', $data);
                $this->load->view('templates/footer');
            }
            else
            {
                $enc_pass = password_hash($this->input->post('password'), PASSWORD_BCRYPT);
                // die($enc_pass);

                $this->user_model->register($enc_pass);

                // set flash message
                $this->session->set_flashdata('user_registered', 'You are now registered');
                redirect('posts');
            }
        }

        public function check_username_exists($username)
        {
            $this->form_validation
                ->set_message('check_username_exists', 'That username has been taken!');
            
            // if($this->user_model->check_username_exists($username))
            // {
            //     return true;
            // }
            // else
            // {
            //     return false;
            // }

            return $this->user_model->check_username_exists($username) ? true : false;
        }

        public function check_email_exists($email)
        {
            $this->form_validation
                    ->set_message('check_email_exists', 'That Email has been taken!');

            return $this->user_model->check_email_exists($email) ? true : false;
        }
    }