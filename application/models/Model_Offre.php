<?php
class Model_Offre extends CI_Model
{
    public function getAllOffre()
    {
        $sql = $this->db->query("select idOffre ,descriptionOffre, dateOffre 
                                 from offre 
                                 where idUSer= 1");
        return $sql->result();
    }
}
?>