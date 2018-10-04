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
            if (!$_POST['txtLogin'] == "") { // on verifie que le nom est bien noté   
                  if(!$_POST['txtNom'] == ""){
                        if (!$_POST['txtMdp'] == "") { // on verifie que le le mot de passe est bien noté
                            if ($_POST['txtMdp2'] == $_POST['txtMdp']) { // on verifie que le mot de passe confirmé correspond
                                $login = $this->input->post('txtLogin');
                                $nom = $this->input->post('txtNom');  
                                $mdp = $this->input->post('txtMdp');
                            } else {
                                echo "Veuillez confirmer votre mot de passe";
                            }
                        } else {
                            echo "Veuillez rentrer votre mot de passe";
                        }
                    }else {
                        echo "Veuillez rentrer votre nom";
                    }
            } else {
                echo "Veuillez rentrer votre login";
            }
        } 
        $tab = array(
            
            'nomUser' => $nom,
            'login' => $login,
            'mdp' => $mdp,
            
        );
        $this->load->model('Model_Inscription');
        $data = $this->Model_Inscription->insertInscription($tab);
        $this->load->view('inscription');
    }
}
    
?>