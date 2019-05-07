<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Notebook extends CI_Model
{
    public $creator;
    public $title;
    public $note;

    public function __construct($creator = NULL)
    {
        $this->creator = $creator;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function setnote($note)
    {
        $this->note = $note;
    }

    function create($data)
    {
        if ( $this->db->insert('notebook', $data)) {
            return TRUE;
        } else {
            return FALSE;
        }
       
    }

    public function update($note, $id)
    {
        $data = array(
            'note' => $note
        );
        $this->db->where('id', $id);
        if ($this->db->update('notebook', $data)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        if ($this->db->delete('notebook')) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
}