<?php

class Model_Login extends CI_Model
{
    public function seConnecter($tab)
    {
        $sql = $this->db->query("select idUser, login, mdp from user 
            where login='".$tab['login']."' and mdp='".$tab['mdp']."'");
        return $sql->result();
    }
}
