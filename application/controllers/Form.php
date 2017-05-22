<?php

class Form extends CI_Controller {

        public function __construct()
        {
        parent::__construct();
        $this->load->view('template/header');
        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');

               
        
        }

        public function index()
        {

            $this->load->view('main');
            $this->load->view('template/header');
        }

        public function register(){
                $data = new stdClass();

                $this->form_validation->set_rules('name', 'Name', 'trim|required');
                $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]');
                $this->form_validation->set_rules('password', 'Password', 'trim|required');
                $this->form_validation->set_rules('passconf', 'Password Confirmation',
                 'trim|required|matches[password]');
            

                if($this->form_validation->run() == FALSE){
                $this->load->view('register');
                $this->load->view('template/footer');             
                }
                else
                {
                    $this->load->model('register');

                    $data = array(
                        'name'=>$this->input->post('name'),
                        'email'=>$this->input->post('email'),
                        'password'=>md5($this->input->post('password')),
                    );
                    if($this->register->adduser($data))
                    {
                        
                        $this->session->set_flashdata('message', 'Suceessfully register, Please login now.');
                        
                        $this->load->view('formsuccess'); 
                    }
                    else
                    {
                        $this->load->view('register');
                        $this->load->view('template/footer');             
                    }
                    
                }
        }

        public function login()
        {
            $data = new stdClass();
            
            // set validation rules
            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
            $this->form_validation->set_rules('password', 'Password', 'trim|required');
        
            if ($this->form_validation->run()) {

                 // set variables from the form
            $email = $this->input->post('email');
            $password = md5($this->input->post('password'));

            $this->load->model('login');

                if($this->login->chklogin($email,$password))
                {
                    
                    $_SESSION['email'] = $email;
                    $this->load->view('loginsuccess'); 
                    $this->load->view('template/footer');

                }
                else
                {
                    // login failed
                $data->error = 'Incorrect! Email or Password.';
                
                // send error to the view
              
                $this->load->view('login',$data);
                $this->load->view('template/footer');
                }
            
           
            
            } else {

                     // validation not ok, send validation errors to the view
                $this->load->view('login');
                $this->load->view('template/footer');
             
            } 
               
        }

        public function logout()
        {
            $this->session->unset_userdata('status');
          
            $this->session->sess_destroy();
            redirect('form/login');
        }

}



/* This code is developed by Nirav Tailor. */