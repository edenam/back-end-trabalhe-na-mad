<?php


abstract class MY_Model extends CI_Model
{
    public function getAll()
    {
        $query = $this->db->get($this->tbName);
        return $query->result();
    }
}