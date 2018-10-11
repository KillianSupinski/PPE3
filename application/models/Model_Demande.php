<?php

class Model_Demande extends CI_Model
{
    public function getAllDemande()
    {
        $sql = $this->db->query('select demande.idDemande ,demande.descriptionDemande, demande.dateDemande,service.photoService  
                                from demande, service 
                                where demande.idService=service.idService
                                AND idUser= 1');

        return $sql->result();
    }
}
