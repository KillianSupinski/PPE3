<?php

class Model_Demande extends CI_Model
{
    public function getAllDemande()
    {
        $this->load->library('session');
        $id = $this->session->userdata('infoLog');
<<<<<<< HEAD
        $sql = $this->db->query("select demande.idDemande ,demande.descriptionDemande, demande.dateDemande,service.photoService, service.nomService, service.nomService  
=======
        $sql = $this->db->query("select demande.idDemande ,demande.descriptionDemande, demande.dateDemande,service.photoService, service.nomService  
>>>>>>> killianSupinski
                                from demande, service 
                                where demande.idService=service.idService
                                AND idUser='".$id['idUser']."'");

        return $sql->result();
    }
}
