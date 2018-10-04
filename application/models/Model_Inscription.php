<?php
class Model_Inscription extends CI_Model
{
    public function insertInscription($tab)
    {
        $sql = $this->db->insert('user', $tab);
        return $this->db->insert_id();
    }
}