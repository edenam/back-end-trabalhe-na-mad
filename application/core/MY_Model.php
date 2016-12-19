<?php


abstract class MY_Model extends CI_Model
{
    public function getAll()
    {
        if($this->tbName) {

            if($this->defaultOrderBy){
                $this->db->order_by($this->defaultOrderBy, "ASC");
            }

            $query = $this->db->get($this->tbName);

            return $query->result();
        }

        return null;

    }
}