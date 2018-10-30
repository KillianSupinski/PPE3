<?php

class Model_Login extends CI_Model
{
    public function seConnecter($tab)
    {
<<<<<<< HEAD
        $sql = $this->db->query("select idUser, login, mdp from user where login='".$tab['login']."' and mdp='".$tab['mdp']."'");
=======
        $sql = $this->db->query("select idUser, login, mdp, photoUser from user where login='".$tab['login']."' and mdp='".$tab['mdp']."'");
>>>>>>> origin/master

        return $sql->result();
    }
}
