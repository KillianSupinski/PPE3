<?php
class Model_Offre extends CI_Model
{
    public function getAllOffre()
    {
        $sql = $this->db->query("select idOffre ,descriptionOffre, dateOffre 
                                 from offre 
                                 where idUSer= 2");
        return $sql->result();
    }
}
?>