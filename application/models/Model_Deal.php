<?php

class Model_Deal extends CI_Model
{
    public function getAllInfoDeal()
    {
        $this->load->library('session');
        $id = $this->session->userdata('infoLog');
        $sql = $this->db->query('select service.nomService, deal.idDeal, deal.dateDeal,deal.noteUser1, deal.noteUser2, user.idUser, user.nomUser, user.photoUser
        from user, offre, deal, service
        where user.idUser = offre.idUser
        AND offre.idOffre = deal.idOffreUser2
        AND offre.idService = service.idService
        AND idCreateur ="'.$id['idUser'].'"');

        return $sql->result();
    }

    public function getNomServiceDeal2()
    {
        $this->load->library('session');
        $id = $this->session->userdata('infoLog');
        $sql = $this->db->query('select service.nomService
        from user, offre, deal, service
        where user.idUser = offre.idUser
        AND offre.idOffre = deal.idOffreUser1
        AND offre.idService = service.idService
        AND idCreateur ="'.$id['idUser'].'"');

        return $sql->result();
    }

    public function getServiceRecherche($terme)
    {
        $this->load->library('session');
        $id = $this->session->userdata('infoLog');
        $sql = $this->db->query("SELECT user.idUser, user.nomUser, user.photoUser
                                 FROM user
                                 INNER JOIN offre  ON user.idUser = offre.idUser
                                 INNER JOIN service ON offre.idService = service.idService
                                 WHERE service.nomService like '".$terme."%'");

        return $sql->result();
    }
}
