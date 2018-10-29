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
        where idOffre =".$idOffre);
        return $sql->result();
    }
    public function updateOffre()
    {
        $sql = $this->db->query("update demande
            set descriptionDemande = '".$tab['txtDescriptionOffre']."'
            where idUser ='".$id['idUser']."'");
    }
}