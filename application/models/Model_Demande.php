<?php
class Model_Demande extends CI_Model
{
    public function getAllDemande()
    {
       $sql = $this->db->query("select idDemande ,descriptionDemande, dateDemande
                                from demande 
                                where idUser= 1");
       return $sql->result();
    }
}
?>