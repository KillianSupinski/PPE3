<?php

class Model_Offre extends CI_Model
{
    public function getAllOffre()
    {
        $this->load->library('session');
        $id = $this->session->userdata('infoLog');
        $sql = $this->db->query("select offre.idOffre, offre.descriptionOffre, offre.dateOffre, service.photoService 
            from offre, service 
            where offre.idService = service.idService
            and idUSer='".$id['idUser']."'");
        return $sql->result();
    }
    
    public function getIdServiceByIdOffre()
    {   
        $sql = $this->db->query("select offre.idOffre, service.idService
        from offre, service
        where offre.idService = service.idService
        and idOffre='".$idO['idOffre']."'");
    }
    public function getMaxIdOffreMod()
    {
        $sql = $this->db->query("select idOffre as idOffreMod
        from offre
        where idOffre='".$id['idOffre']."'");
        return $sql->result();
    }
    public function updateOffre()
    {
        $sql = $this->db->query("update demande
            set descriptionDemande = '".$tab['txtDescriptionOffre']."'
            where idUser ='".$id['idUser']."'");
    }
}