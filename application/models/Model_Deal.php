<?php

class Model_Deal extends CI_Model
{
    public function getAllInfoDeal()
    {
        $this->load->library('session');
        $id = $this->session->userdata('infoLog');
        $sql = $this->db->query("select  deal.idDeal, deal.dateDeal,deal.noteUser1, deal.noteUser2, user.idUser, user.nomUser, user.photoUser
                                from user, offre, deal
                                where user.idUser = offre.idUser
                                AND offre.idOffre = deal.idOffreUser2 
                                AND idCreateur ='".$id['idUser']."'");

        return $sql->result();
    }
}
