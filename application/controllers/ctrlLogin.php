<?php

class ctrlLogin extends CI_Controller
{
    public function index()
    {
        $this->load->view('login');
    }

    public function seConnecter()
    {
        if (isset($_POST['btnConnexion'])) {
            if (!$_POST['nomIdentifiant'] == '') {
                if (!$_POST['nomPassword'] == '') {
                    $login = $this->input->post('nomIdentifiant');
                    $mdp = $this->input->post('nomPassword');

                    $tab = array(
                        'login' => $login,
                        'mdp' => $mdp,
                    );
                    $this->load->model('Model_Login');

                    $data = $this->Model_Login->seConnecter($tab);
                    if (count($data) != 0) {
                        foreach ($data as $row) {
                            $this->load->library('session');
                            $session_id = [
                                'idUser' => $row->idUser,
                                'login' => $row->login,
<<<<<<< HEAD
=======
                                'photoUser' => $row->photoUser,
>>>>>>> origin/master
                            ];
                            $this->session->set_userdata('infoLog', $session_id);
                        }
                        $this->load->model('Model_Offre');
                        $data['lesOffres'] = $this->Model_Offre->getAllOffre();
<<<<<<< HEAD
                        $this->load->model('Model_Demande');
                        $data['lesDemandes'] = $this->Model_Demande->getAllDemande();
                        $this->load->model('Model_Deal');
                        $data['lesInfoDeals'] = $this->Model_Deal->getAllInfoDeal();
=======
                        $data['IdMaxOffres'] = $this->Model_Offre->getMaxIdOffre();
                        $data['lesServicesOffres'] = $this->Model_Offre->getAllNomServices();
                        $this->load->model('Model_Demande');
                        $data['lesDemandes'] = $this->Model_Demande->getAllDemande();
                        $data['IdMaxDemandes'] = $this->Model_Demande->getMaxIdDemande();
                        $data['lesServicesDemandes'] = $this->Model_Demande->getAllNomServices();
                        $this->load->model('Model_Deal');
                        $data['lesInfoDeals'] = $this->Model_Deal->getAllInfoDeal();
                        $data['nomDealService2'] = $this->Model_Deal->getNomServiceDeal2();
>>>>>>> origin/master
                        $this->load->view('view_Accueil', $data);
                    } else {
                        echo "<div class='sErrorLog'>Cet utilisateur n/existe pas</div>";
                        $this->load->view('login');
                    }
                } else {
                    echo "<div class='sErrorLog'>Veuillez entrer un mot de passe pour vous connecter.</div>";
                    $this->load->view('login');
                }
            } else {
                echo "<div class='sErrorLog'>Veuillez entrer un identifiant pour vous connecter.</div>";
                $this->load->view('login');
            }
        }
    }
}
