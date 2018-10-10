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
}