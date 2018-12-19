<?php

class Model_Offre extends CI_Model
{
    public function getAllOffre()
    // Récupérer toutes les offres à afficher dans la page d'accueil
    {
        $this->load->library('session');
        $id = $this->session->userdata('infoLog');
        $sql = $this->db->query("select offre.idOffre ,offre.descriptionOffre, offre.dateOffre, service.photoService, service.nomService, service.idService   
                                 from offre, service 
                                 where offre.idService=service.idService
                                 AND idUser='".$id['idUser']."'");

        return $sql->result();
    }

    public function getMaxIdOffre()
    {
        $sql = $this->db->query('select max(offre.idOffre) +1 as idOffreCrea
                                from offre
                                ');

        return $sql->result();
    }

    public function getAllNomServices()
    {
        $sql = $this->db->query('select idService, nomService from service');

        return $sql->result();
    }

    public function insertNewOffre($newOffre)
    {
        $sql = $this->db->insert('offre', $newOffre);

        return $this->db->insert_id();
    }

    public function getIdServiceByIdOffre()
    {
        $sql = $this->db->query("select offre.idOffre, service.idService
        from offre, service
        where offre.idService = service.idService
        and idOffre='".$idOffre['idOffre']."'");
    }

    public function getIdOffreMod()
    {
        $sql = $this->db->query("select idOffre as idOffreMod
        from offre
        where idOffre='".$id['idOffre']."'");

        return $sql->result();
    }

    public function getAllInfosOffre($idOffre)
    {
        $sql = $this->db->query("select offre.idOffre, offre.descriptionOffre, offre.dateOffre, service.nomService
        from offre, service
        where idOffre ='".$idOffre."'");

        return $sql->result();
    }

    public function getOffreUserDeal($idUser)
    {
        $sql = $this->db->query('select offre.idOffre ,offre.descriptionOffre, offre.dateOffre, service.photoService, service.nomService, service.idService 
        from offre, service 
        where offre.idService=service.idService
        AND idUSer='.$idUser);

        return $sql->result();
    }

    public function compareOffreCreaDeal($idOffre) // recup idService pour le comparer
    {
        $sql = $this->db->query("select offre.idOffre, service.idService
        from offre, service
        where offre.idService = service.idService
        and idOffre='".$idOffre."'");

        return $sql->result();
    }

    public function compareOffreUserDeal($idOffre) // recup idService pour le comparer
    {
        $sql = $this->db->query("select offre.idOffre, service.idService
        from offre, service
        where offre.idService = service.idService
        and idOffre='".$idOffre."'");
    }

    public function getAllInfosOffres()
    // Récupérer toutes les informations de l'offre que l'on va modifier
    {
        $sql = $this->db->query('select descriptionOffre, idOffre, dateOffre, idService
        from offre, service
        where idUser='.$this->session->idUser.' 
        and offre.idService=service.idService
        and idOffre='.$_POST[$idOffre]);

        return $sql->result();
    }

    public function modifierService()
    {
        $sql = $this->db->query('select distinct idService, nomService
                             from service');

        return $sql->result();
    }

    public function updateOffre($descOffre, $idService, $idOffre)
    // Modification de l'offre dans la base de données
    {
        $sql = $this->db->query('update offre
        set descriptionOffre="'.$descOffre.'", idService="'.$idService.'", dateDemande=CURRENT_DATE
        where idOffre="'.$idOffre.'"
        and idUser='.$this->session->idUser);
    }
}
