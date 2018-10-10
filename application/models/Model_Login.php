<?php
class Model_Login extends CI_Model
{
    public function seConnecter($userLogin)
    {
        $sql = $this->db->query("select iduser, login, mdp from user where login='".$login."' and mdp='".$mdp."'");
        return $sql->result();
    }
}
?>