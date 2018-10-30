<?php

class Model_Offre extends CI_Model
{
    public function getAllOffre()
    {
        $this->load->library('session');
        $id = $this->session->userdata('infoLog');
        $sql = $this->db->query("select offre.idOffre ,offre.descriptionOffre, offre.dateOffre, service.photoService, service.nomService 
                                 from offre, service 
                                 where offre.idService=service.idService
                                 AND idUSer='".$id['idUser']."'");

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
}
