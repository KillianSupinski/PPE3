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
                    if (!$_POST['txtMdp'] == '') { // on verifie que le mot de passe est bien noté
                            if ($_POST['txtMdp2'] == $_POST['txtMdp']) { // on verifie que le mot de passe confirmé correspond
                                // On déclare nos variables pour les mettre ensuite dans un tableau
                                $login = $this->input->post('txtLogin');
                                $nom = $this->input->post('txtNom');
                                $mdp = $this->input->post('txtMdp');
                                // On definit un tableau pour l'envoyer au model
                                $tab = array(
                                    'nomUser' => $nom,
                                    'login' => $login,
                                    'mdp' => $mdp,
                                );
                                $this->load->model('Model_Inscription');
                                $data = $this->Model_Inscription->insertInscription($tab);
                                $this->load->view('login');
                            } else {
                                echo "<div class='sErrorLog'>Veuillez confirmer votre mot de passe</div>";
                                $this->load->view('inscription'); //envoi du message d'erreur et redirection à la page inscription
                            }
                    } else {
                        echo "<div class='sErrorLog'>Veuillez entrer votre mot de passe</div>";
                        $this->load->view('inscription'); //envoi du message d'erreur et redirection à la page inscription
                    }
                } else {
                    echo "<div class='sErrorLog'>Veuillezrentrer votre nom</div>";
                    $this->load->view('inscription'); //envoi du message d'erreur et redirection à la page inscription
                }
            } else {
                echo "<div class='sErrorLog'>Veuillez entrer votre login</div>";
                $this->load->view('inscription'); //envoi du message d'erreur et redirection à la page inscription
            }
        }
    }
}
