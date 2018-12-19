<?php

class Model_Demande extends CI_Model
{
    public function getAllDemande()
    // Récupération de toutes les demandes pour les afficher dans la page d'accueil
    {
        $this->load->library('session');
        $id = $this->session->userdata('infoLog');
        $sql = $this->db->query("select demande.idDemande ,demande.descriptionDemande, demande.dateDemande,service.photoService, service.nomService  
                                 from demande, service 
                                 where demande.idService=service.idService
                                 and idUser='".$id['idUser']."'");

        return $sql->result();
    }

    public function getMaxIdDemande()
    // Récupérer l'id de la dernière demande et y ajouter un 1 pour la nouvelle demande
    {
        $sql = $this->db->query('select max(demande.idDemande) +1 as idDemandeCrea
                                from demande
                                ');
        return $sql->result();
    }

    public function getAllNomServices()
    // Récupération de tous les services
    {
        $sql = $this->db->query('select idService, nomService from service');
        return $sql->result();
    }

    public function insertNewDemande($newDemande)
    // Ajouter une nouvelle demande dans la base de données
    {
        $sql = $this->db->insert('demande', $newDemande);
        return $this->db->insert_id();
    }
    public function getIdServiceByIdDemande()
    // Récupérer l'id d'un service en fonction de l'id de la demande
    {
        $sql = $this->db->query("select demande.idDemande, service.idService
        from demande, service
        where demande.idService = service.idService
        and idDemande='".$idDemande['idDemande']."'");
    }
    public function getAllInfosDemande()
    // Récupérer toutes les informations sur la demande
    {
        $sql = $this->db->query('select idDemande, descriptionDemande, dateDemande, nomService
        from demande, service
        where idUser='.$this->session->idUser.' 
        and demande.idService=service.idService');
        return $sql->result();
    }
    public function modifierDemande($idDemande) 
    // Affichage des infos dans la fenêtre de modifications
    {
        $sql = $this->db->query("select service.idService, service.nomService, demande.descriptionDemande, demande.dateDemande
        from service, demande
        where service.idService = demande.idService
        and idDemande ='".$idDemande."'");
        return $sql->result();
    }
    public function modifierService()
    {
    $sql = $this->db->query('select distinct idService, nomService
                             from service');
        return $sql->result();
    }
    public function updateDemande()
    // Requête pour modifier la demande
    {
        $sql = $this->db->query('update demande
                                 set descriptionDemande="'.$_POST["descDemande"].'",
                                 idService='.$_POST["idService"].', dateDemande=CURRENT_DATE
                                 where idDemande='.$_POST["idDemande"].' 
                                     and idUser='.$this->session->idUser);
    }
}
