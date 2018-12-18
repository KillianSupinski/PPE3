<?php

class Model_Demande extends CI_Model
{
    public function getAllDemande()
    {
        $this->load->library('session');
        $id = $this->session->userdata('infoLog');
        $sql = $this->db->query("select demande.idDemande ,demande.descriptionDemande, demande.dateDemande,service.photoService, service.nomService  
                                from demande, service 
                                where demande.idService=service.idService
                                AND idUser='".$id['idUser']."'");

        return $sql->result();
    }
    public function getMaxIdDemande()
    {
        $sql = $this->db->query('select max(demande.idDemande) +1 as idDemandeCrea
                                from demande
                                ');

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

    public function getIdServiceByIdDemande()
    {
        $sql = $this->db->query("select demande.idDemande, service.idService
        from demande, service
        where demande.idService = service.idService
        and idDemande='".$idDemande['idDemande']."'");
    }

    public function getIdDemandeMod()
    {
        $sql = $this->db->query("select idDemande as idDemandeMod
        from demande
        where idDemande='".$id['idDemande']."'");

        return $sql->result();
    }

    public function getAllInfosDemande($idDemande)
    {
        $sql = $this->db->query('select demande.idDemande, demande.descriptionDemande, demande.dateDemande, service.nomService
        from demande, service
        where idDemande ='.$idDemande);

        return $sql->result();
    }

    public function updateDemande()
    {
        $sql = $this->db->query("update demande
            set descriptionDemande = '".$tab['txtDescriptionDemande']."'
            where idUser ='".$id['idUser']."'");
    }

    public function getDemandeUserDeal($idUser)
    {
        $sql = $this->db->query('select demande.idDemande ,demande.descriptionDemande, demande.dateDemande,service.photoService, service.nomService  
        from demande, service 
        where demande.idService=service.idService
        AND idUser='.$idUser);

        return $sql->result();
    }

    public function compareDemandeCreaDeal($idDemande) // recup idService pour le comparer
    {
        $sql = $this->db->query("select demande.idDemande, service.idService
        from demande, service
        where demande.idService = service.idService
        and idDemande='".$idDemande."'");

        return $sql->result();
    }

    public function compareDemandeUserDeal($idDemande) // recup idService pour le comparer
    {
        $sql = $this->db->query("select demande.idDemande, service.idService
        from demande, service
        where demande.idService = service.idService
        and idDemande='".$idDemande."'");

        return $sql->result();
    }
}
