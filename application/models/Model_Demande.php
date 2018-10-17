<?php

class Model_Demande extends CI_Model
{
    public function getAllDemande()
    {
        $this->load->library('session');
        $id = $this->session->userdata('infoLog');
        $sql = $this->db->query("select demande.idDemande, demande.descriptionDemande, demande.dateDemande,service.photoService  
            from demande, service 
            where demande.idService = service.idService
            AND idUser='".$id['idUser']."'");
        return $sql->result();
    }

    public function updateDemande()
    {
        $sql = $this->db->query("update demande
            set descriptionDemande = '".$tab['txtDescriptionDemande']."'
            where idUser ='".$id['idUser']."'");
    }
}
