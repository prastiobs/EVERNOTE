<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_main extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user');
	}


	public function index()
	{
		

        if ($this->session->userdata('user_id')) {
			$this->load->view("content/header");
			$this->load->view("content/home");
			$this->load->view("content/footer");
        } else {
			$this->load->view("headerMain");
			$this->load->view("content/main");
			$this->load->view("footerMain");
		}
	}

	public function register() 
	{
		$this->load->view("headerMain");
		$this->load->view("content/sign-up");
		$this->load->view("footerMain");
	}

	public function signin() 
	{
		$this->load->view("headerMain");
		$this->load->view("content/sign-in");
		$this->load->view("footerMain");
	}

	public function loginForm()
    {
        $email = $this->input->post("email");
        $password = $this->input->post('password');
		$checking = $this->user->login(array('email' => $email), array('password' => $password));

		if ($checking != FALSE) {
			$this->load->view('content/header');
			$this->load->view('content/home');
			$this->load->view('content/footer');
            
        } else {
            $data['error'] = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                  <strong>Error!</strong><br>
                                  Your username or password is invalid!
							  </div>';
        }
    }

	public function registerForm()
    {
        $newUser = new $this->user($this->input->post("usernameR"));
        $newUser->setEmail($this->input->post("emailR"));
        $newUser->setPassword($this->input->post("passwordR"));

       if ($this->user->register($newUser) != FALSE) {
				$this->load->view('content/header');
				$this->load->view("content/sign-in");
			   	$this->load->view('content/footer');
       } else {
           $data['error'] = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                   <span aria-hidden="true">&times;</span>
                               </button>
                               <strong>Error!</strong><br>
                               Either your username or password is invalid!
						   </div>';
						   $this->load->view("headerMain");
						   $this->load->view("content/sign-up", $data);
						   $this->load->view("footerMain");
       }
    }
}
