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
        if (isset($_GET['btnOffre'])) {
            if (!$_GET['idOffre'] == '') {
                if (!$_GET['descOffre'] == '') {
                    if (!$_GET['dateOffre'] == '') {
                        if (!$_GET['idServiceOffre'] == '') {
                            $idO = $this->input->get('idOffre');
                            $descO = $this->input->get('descOffre');
                            $dateO = $this->input->get('dateOffre');
                            $serviceO = $this->input->get('idServiceOffre');
                            $this->load->library('session');
                            $infoUser = $this->session->userdata('infoLog');
                            $newOffre = array(
                                'idOffre' => $idO,
                                'descriptionOffre' => $descO,
                                'dateOffre' => $dateO,
                                'idService' => $serviceO,
                                'idUser' => $infoUser['idUser'],
                            );
                            $this->load->model('Model_Offre');
                            $this->Model_Offre->insertNewOffre($newOffre);
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
                        } else {
                            echo 'id service introuvable';
                        }
                    } else {
                        echo 'Veuillez selectionner une date';
                    }
                } else {
                    echo 'Veuillez décrire votre offre';
                }
            }
        }
    }

    public function getNewDemande()
    {
        if (isset($_GET['btnDemande'])) {
            if (!$_GET['idDemande'] == '') {
                if (!$_GET['descDemande'] == '') {
                    if (!$_GET['dateDemande'] == '') {
                        if (!$_GET['idServiceDemande'] == '') {
                            $idD = $this->input->get('idDemande');
                            $descD = $this->input->get('descDemande');
                            $dateD = $this->input->get('dateDemande');
                            $serviceD = $this->input->get('idServiceDemande');
                            $this->load->library('session');
                            $infoUser = $this->session->userdata('infoLog');
                            $newDemande = array(
                                'idDemande' => $idD,
                                'descriptionDemande' => $descD,
                                'dateDemande' => $dateD,
                                'idService' => $serviceD,
                                'idUser' => $infoUser['idUser'],
                            );
                            $this->load->model('Model_Demande');
                            $this->Model_Demande->insertNewDemande($newDemande);
                            $data['lesDemandes'] = $this->Model_Demande->getAllDemande();
                            $data['IdMaxDemandes'] = $this->Model_Demande->getMaxIdDemande();
                            $data['lesServicesDemandes'] = $this->Model_Demande->getAllNomServices();
                            $this->load->model('Model_Offre');
                            $data['lesOffres'] = $this->Model_Offre->getAllOffre();
                            $data['IdMaxOffres'] = $this->Model_Offre->getMaxIdOffre();
                            $data['lesServicesOffres'] = $this->Model_Offre->getAllNomServices();
                            $this->load->model('Model_Deal');
                            $data['lesInfoDeals'] = $this->Model_Deal->getAllInfoDeal();
                            $this->load->view('view_Accueil', $data);
                        } else {
                            echo 'Id service introuvable';
                        }
                    } else {
                        echo 'Veuillez selectionner une date';
                    }
                } else {
                    echo 'Veuillez décrire votre demande';
                }
            }
        }
    }

    public function logout()
    {
        $this->load->library('session');
        $this->session->unset_userdata('infoLog');
        session_destroy();
        $this->load->view('login');
    }
}
