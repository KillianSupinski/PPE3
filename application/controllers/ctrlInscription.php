<?php 
class ctrlInscription extends CI_Controller
{
    public function index()
    {
        
        $this->load->view('inscription');
        
    }
    public function getInscription($vNom, $vLogin, $vMdp)
    {
        
        $this->load->model('Model_Inscription');
        $data['lesInscription'] = $this->Model_Inscription->insertInscription($vNom, $vLogin, $vMdp);
        $this->load->view('inscription');
    }
}
    
?>