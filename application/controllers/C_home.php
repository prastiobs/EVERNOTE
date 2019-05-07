<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_home extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('notebook');

	}

	public function home()
	{
		$this->load->view("content/header");
		$this->load->view("content/home");
		$this->load->view("content/footer");
	}

	public function notebook() 
	{
		$this->load->view("content/header");
		$this->load->view("content/notebooks");
		$this->load->view("content/footer");
	}

	public function tags()
	{
		$this->load->view("content/header");
		$this->load->view("content/tags");
		$this->load->view("content/footer");
	}
	
	public function trash() 
	{
		$this->load->view("content/header");
		$this->load->view("content/trash");
		$this->load->view("content/footer");
	}

	public function uploadNote()
	{
		$data = new $this->notebook($this->session->userdata('user_mail'));
		$data->setTitle($this->input->post("title"));
		$data->setNote($this->input->post("note"));
		if ($this->notebook->create($data)) {
			redirect('');
		} else {
			echo 'failed';
		}
		
	}

	public function updateNote()
	{
		if ($this->notebook->update($this->input->post('noteValue'), $this->input->post('noteId'))) {
			redirect('notebook');
		} else {
			echo 'failed';
		}
		
	}

	public function deleteNote($id)
	{
		if ($this->notebook->delete($id)) {
			redirect('notebook');
		} else {
			echo 'failed';
		}
		
	}

	public function logout()
    {
        $this->session->sess_destroy();
        redirect('');
    }
}
