<?php

class ctrl_Accueil extends CI_Controller
{
    public function index()
    {
        $this->load->model('Model_Offre');
        $data['lesOffres'] = $this->Model_Offre->getAllOffre();
        $this->load->model('Model_Demande');
        $data['lesDemandes'] = $this->Model_Demande->getAllDemande();
        $this->load->model('Model_Deal');
        $data['lesInfoDeals'] = $this->Model_Deal->getAllInfoDeal();
        $this->load->view('view_Accueil', $data);
    }

    public function getOffre()
    {
        $this->load->model('Model_Offre');
        $data['lesOffres'] = $this->Model_Offre->getAllOffre();
        $this->load->view('view_Offre', $data);
    }

    public function getDemande()
    {
        $this->load->model('Model_Demande');
        $data['lesDemandes'] = $this->Model_Demande->getAllDemande();
        $this->load->view('view_Demande', $data);
    }

    public function getDeal()
    {
        $this->load->model('Model_Deal');
        $data['lesInfoDeals'] = $this->Model_Deal->getAllInfoDeal();
        $this->load->view('view_Deal', $data);
    }

    public function logout()
    {
        $this->load->library('session');
        $this->session->unset_userdata('infoLog');
        session_destroy();
        $this->load->view('login');
    }
    public function afficherModOffre()
    {
        $this->load->model('Model_Offre');
        $data['lesInfosModOffre'] = $this->Model_Offre->getAllInfosOffre($_GET['idOffre']);
        $this->load->view('view_ModalOffre', $data);
    }
    public function afficherIdServiceParIdOffre()
    {
        $this->load->model('Model_Offre');
        $data['modOffre'] = $this->Model_Offre->getIdServiceByIdOffre();
        $this->load->view('view_Accueil', $data);
    }
}
