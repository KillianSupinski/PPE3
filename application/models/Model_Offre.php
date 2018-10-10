<?php

class Model_Offre extends CI_Model
{
    public function getAllOffre()
    {
        $sql = $this->db->query('select offre.idOffre ,offre.descriptionOffre, offre.dateOffre, service.photoService 
                                 from offre, service 
                                 where offre.idService=service.idService
                                 AND idUSer= 2');

        return $sql->result();
    }
}
