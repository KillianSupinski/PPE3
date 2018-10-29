<?php

class Model_Deal extends CI_Model
{
    public function getAllInfoDeal()
    {
        $this->load->library('session');
        $id = $this->session->userdata('infoLog');
        $sql = $this->db->query('select (select service.nomService 
                                from service, offre, user, deal 
                                WHERE service.idService = offre.idService 
                                AND offre.idUser = user.idUser 
                                AND user.idUser = deal.idCreateur 
                                AND offre.idOffre = deal.idOffreUser1 
                                AND deal.idCreateur = '.$id['idUser'].') as nomService,
                                (select service.nomService 
                                FROM service, demande, user, deal, offre 
                                WHERE service.idService = demande.idService 
                                AND demande.idUser = user.idUser 
                                AND user.idUser = deal.idCreateur 
                                AND service.idService = offre.idService 
                                AND offre.idOffre = deal.idOffreUser2 
                                AND deal.idCreateur= '.$id['idUser'].") as nomService2, deal.idDeal, deal.dateDeal,deal.noteUser1, deal.noteUser2, user.idUser, user.nomUser, user.photoUser
                                from user, offre, deal
                                where user.idUser = offre.idUser
                                AND offre.idOffre = deal.idOffreUser2 
                                AND idCreateur ='".$id['idUser']."'");

        return $sql->result();
    }
}
