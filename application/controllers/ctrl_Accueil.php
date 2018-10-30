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
        $data['nomDealService2'] = $this->Model_Deal->getNomServiceDeal2();
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
        $data['nomDealService2'] = $this->Model_Deal->getNomServiceDeal2();
        $this->load->view('view_Deal', $data);
    }
<<<<<<< HEAD
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
=======

    public function getNewOffre()
    {
        if (isset($_GET['btnOffre'])) {
            if (!$_GET['idOffre'] == '') {
                if (!$_GET['descOffre'] == '') {
                    if (!$_GET['dateOffre'] == '') {
                        if (!$_GET['idServiceOffre'] == '') {
>>>>>>> origin/master
                            $idO = $this->input->get('idOffre');
                            $descO = $this->input->get('descOffre');
                            $dateO = $this->input->get('dateOffre');
                            $serviceO = $this->input->get('idServiceOffre');
<<<<<<< HEAD

=======
                            $this->load->library('session');
                            $infoUser = $this->session->userdata('infoLog');
>>>>>>> origin/master
                            $newOffre = array(
                                'idOffre' => $idO,
                                'descriptionOffre' => $descO,
                                'dateOffre' => $dateO,
                                'idService' => $serviceO,
<<<<<<< HEAD
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
=======
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
                            $data['nomDealService2'] = $this->Model_Deal->getNomServiceDeal2();
                            $this->load->view('view_Accueil', $data);
                        } else {
                            echo 'id service introuvable';
                        }
                    } else {
                        echo 'Veuillez selectionner une date';
                    }
                } else {
>>>>>>> origin/master
                    echo 'Veuillez décrire votre offre';
                }
            }
        }
    }
<<<<<<< HEAD
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
=======

    public function getNewDemande()
    {
        if (isset($_GET['btnDemande'])) {
            if (!$_GET['idDemande'] == '') {
                if (!$_GET['descDemande'] == '') {
                    if (!$_GET['dateDemande'] == '') {
                        if (!$_GET['idServiceDemande'] == '') {
>>>>>>> origin/master
                            $idD = $this->input->get('idDemande');
                            $descD = $this->input->get('descDemande');
                            $dateD = $this->input->get('dateDemande');
                            $serviceD = $this->input->get('idServiceDemande');
<<<<<<< HEAD

=======
                            $this->load->library('session');
                            $infoUser = $this->session->userdata('infoLog');
>>>>>>> origin/master
                            $newDemande = array(
                                'idDemande' => $idD,
                                'descriptionDemande' => $descD,
                                'dateDemande' => $dateD,
                                'idService' => $serviceD,
<<<<<<< HEAD
                                'idUser' => "2",
                            );
                            $this->load->model('Model_Demande');
                            $data['lesDemandes'] = $this->Model_Demande->getAllDemande();
                            $data = $this->Model_Demande->insertNewDemande($newDemande);

                            $this->load->model('Model_Offre');
                            $data['lesOffres'] = $this->Model_Offre->getAllOffre();
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
=======
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
                            $data['nomDealService2'] = $this->Model_Deal->getNomServiceDeal2();
                            $this->load->view('view_Accueil', $data);
                        } else {
                            echo 'Id service introuvable';
                        }
                    } else {
                        echo 'Veuillez selectionner une date';
                    }
                } else {
>>>>>>> origin/master
                    echo 'Veuillez décrire votre demande';
                }
            }
        }
    }
<<<<<<< HEAD
=======

    public function logout()
    {
        $this->load->library('session');
        $this->session->unset_userdata('infoLog');
        session_destroy();
        $this->load->view('login');
    }
>>>>>>> origin/master
}
