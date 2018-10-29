<?php

class ctrl_Accueil extends CI_Controller
{
    public function index()
    {
        $this->load->model('Model_Offre');
        $data['lesOffres'] = $this->Model_Offre->getAllOffre();
        $data['IdMaxOffres'] = $this->Model_Offre->getMaxIdOffre();
        $data['lesServicesOffres'] = $this->Model_Offre->getAllNomServices();
        $this->load->model('Model_Demande');
        $data['lesDemandes'] = $this->Model_Demande->getAllDemande();
        $data['IdMaxDemandes'] = $this->Model_Demande->getMaxIdDemande();
        $data['lesServicesDemandes'] = $this->Model_Demande->getAllNomServices();
        $this->load->model('Model_Deal');
        $data['lesInfoDeals'] = $this->Model_Deal->getAllInfoDeal();
        $this->load->view('view_Accueil', $data);
        
    }

    public function getOffre()
    {
        $this->load->model('Model_Offre');
        $data['lesOffres'] = $this->Model_Offre->getAllOffre();
        $data['IdMaxOffres'] = $this->Model_Offre->getMaxIdOffre();
        $data['lesServicesOffres'] = $this->Model_Offre->getAllNomServices();
        $this->load->view('view_Offre', $data);
    }

    public function getDemande()
    {
        $this->load->model('Model_Demande');
        $data['lesDemandes'] = $this->Model_Demande->getAllDemande();
        $data['IdMaxDemandes'] = $this->Model_Demande->getMaxIdDemande();
        $data['lesServicesDemandes'] = $this->Model_Demande->getAllNomServices();
        $this->load->view('view_Demande', $data);
    }

    public function getDeal()
    {
        $this->load->model('Model_Deal');
        $data['lesInfoDeals'] = $this->Model_Deal->getAllInfoDeal();
        $this->load->view('view_Deal', $data);
    }
    public function getNewOffre()
    {
        if(isset($_GET['btnOffre']))
        {
            if(!$_GET['idOffre'] == '')
            {
                if(!$_GET['descOffre'] == '')
                {
                    if(!$_GET['dateOffre'] == '')
                    {
                        if(!$_GET['idServiceOffre'] == '')
                        {
                            $idO = $this->input->get('idOffre');
                            $descO = $this->input->get('descOffre');
                            $dateO = $this->input->get('dateOffre');
                            $serviceO = $this->input->get('idServiceOffre');

                            $newOffre = array(
                                'idOffre' => $idO,
                                'descriptionOffre' => $descO,
                                'dateOffre' => $dateO,
                                'idService' => $serviceO,
                                'idUser' => "2",
                            );
                            $this->load->model('Model_Offre');
                            $data['lesOffres'] = $this->Model_Offre->getAllOffre();
                            $data = $this->Model_Offre->insertNewOffre($newOffre);

                            $this->load->model('Model_Demande');
                            $data['lesDemandes'] = $this->Model_Demande->getAllDemande();
                            $this->load->model('Model_Deal');
                            $data['lesInfoDeals'] = $this->Model_Deal->getAllInfoDeal();
                            $this->load->view('view_Accueil');
                        }
                        else
                        {
                            echo "id service introuvable";
                        }
                    }
                    else 
                    {
                        echo 'Veuillez selectionner une date';
                    }
                }
                else
                {
                    echo 'Veuillez décrire votre offre';
                }
            }
        }
    }
    public function getNewDemande()
    {
        if(isset($_GET['btnDemande']))
        {
            if(!$_GET['idDemande'] == '')
            {
                if(!$_GET['descDemande'] == '')
                {
                    if(!$_GET['dateDemande'] == '')
                    {
                        if(!$_GET['idServiceDemande'] == '')
                        {
                            $idD = $this->input->get('idDemande');
                            $descD = $this->input->get('descDemande');
                            $dateD = $this->input->get('dateDemande');
                            $serviceD = $this->input->get('idServiceDemande');

                            $newDemande = array(
                                'idDemande' => $idD,
                                'descriptionDemande' => $descD,
                                'dateDemande' => $dateD,
                                'idService' => $serviceD,
                                'idUser' => "2",
                            );
                            $this->load->model('Model_Demande');
                            $data['lesDemandes'] = $this->Model_Demande->getAllDemande();
                            $data = $this->model_Demande->insertNewDemande($newDemande);

                            $this->load->model('Model_Offre');
                            $data['lesOffres'] = $this->model_Offre->getAllOffre();
                            $this->load->model('Model_Deal');
                            $data['lesInfoDeals'] = $this->Model_Deal->getAllInfoDeal();
                            $this->load->view('view_Accueil');
                        }
                        else
                        {
                            echo "Id service introuvable";
                        }
                    }
                    else 
                    {
                        echo 'Veuillez selectionner une date';
                    }
                }
                else
                {
                    echo 'Veuillez décrire votre demande';
                }
            }
        }
    }
}
