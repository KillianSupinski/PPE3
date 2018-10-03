<?php
class Model_Inscription extends CI_Model
{
    public function insertInscription()
    {
        $sql = $this->db->query("insert into user values('', '".$vNom."', '".$vLogin."', '".$vMdp."', '')");
        return $sql->reslut();
    }
}