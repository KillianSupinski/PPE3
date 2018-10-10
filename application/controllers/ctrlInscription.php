<?php

class ctrlInscription extends CI_Controller
{
    public function index()
    {
        $this->load->view('inscription');
    }

    public function getInscription()
    {
        if (isset($_POST['btn'])) {
            if (!$_POST['txtLogin'] == '') { // on verifie que le nom est bien noté
                if (!$_POST['txtNom'] == '') {
                    if (!$_POST['txtMdp'] == '') { // on verifie que le le mot de passe est bien noté
                            if ($_POST['txtMdp2'] == $_POST['txtMdp']) { // on verifie que le mot de passe confirmé correspond
                                // On declare nos variables pour les mettres ensuite dans un tableau
                                $login = $this->input->post('txtLogin');
                                $nom = $this->input->post('txtNom');
                                $mdp = $this->input->post('txtMdp');
                                // On defini un tableau pour l'envoyé au model
                                $tab = array(
                                    'nomUser' => $nom,
                                    'login' => $login,
                                    'mdp' => $mdp,
                                );
                                $this->load->model('Model_Inscription');
                                $data = $this->Model_Inscription->insertInscription($tab);
                                $this->load->view('inscription');
                            } else {
                                echo 'Veuillez confirmé votre mot de passe';
                                $this->load->view('inscription'); //envoie du message d'erreur et redirection a la page inscription
                            }
                    } else {
                        echo 'Veuillez rentrer votre mot de passe';
                        $this->load->view('inscription'); //envoie du message d'erreur et redirection a la page inscription
                    }
                } else {
                    echo 'Veuillez rentrer votre nom';
                    $this->load->view('inscription'); //envoie du message d'erreur et redirection a la page inscription
                }
            } else {
                echo 'Veuillez rentrer votre login';

                $this->load->view('inscription'); //envoie du message d'erreur et redirection a la page inscription
            }
        }
    }
}
