<?php

class Model_Demande extends CI_Model
{
    public function getAllDemande()
    {
        $sql = $this->db->query('select demande.idDemande ,demande.descriptionDemande, demande.dateDemande,service.photoService  
                                from demande, service 
                                where demande.idService=service.idService
                                AND idUser= 2');

        return $sql->result();
    }
    public function getMaxIdDemande()
    {
        $sql = $this->db->query('select max(demande.idDemande) +1 as idDemandeCrea
                                from demande
                                where idUser=2');

        return $sql->result();
    }
    public function getAllNomServices()
    {
        $sql = $this->db->query('select idService, nomService from service');

        return $sql->result();
    }
    public function insertNewDemande($newDemande)
    {
        $sql = $this->db->insert('demande', $newDemande);
        return $this->db->insert_id();
    }
}
