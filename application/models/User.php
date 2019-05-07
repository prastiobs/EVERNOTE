<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Model
{
    public $username;
    public $email;
    public $password;

    public function __construct($username = NULL)
    {
        $this->username = $username;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    function logged_in()
    {
        return $this->session->userdata('user_id');
    }
    function login($email, $password)
    {
        $this->db->where($email);
        $this->db->where($password);
		$this->db->select('*');
		$query = $this->db->get('userdata');
        if ($query->num_rows() == 0) {
            return FALSE;
        } else {
            $loginData = $query->result();
            foreach ($loginData as $data) {
                $session_data = array(
                    'user_id' => $data->id,
                    'user_mail' => $data->email
                );
                $this->session->set_userdata($session_data);
            }
            return TRUE;
        }
    }
    function register($data)
    {
        return $this->db->insert('userdata', $data);
    }
}