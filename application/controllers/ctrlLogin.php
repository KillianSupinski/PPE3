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
                    $this->load->model('Model_Login');

                    $data = $this->Model_Login->seConnecter($login, $mdp);
                    if (count($data['login']) != 0) {
                        $this->load->view('view_Accueil');
                    } else {
                        echo 'Cet utilisateur n/existe pas';
                        $this->load->view('login');
                    }
                } else {
                    echo 'Veuillez entrer un mot de passe pour vous connecter.';
                    $this->load->view('login');
                }
            } else {
                echo 'Veuillez entrer un identifiant pour vous connecter.';
                $this->load->view('login');
            }
        }
    }
}
