<?php
class Product_model extends CI_Model
{
    public function productselect()
    {
        $sql = 'SElECT * FROM Product';
        $result = $this->db->query($sql);
        return $result->result_array();
    }
 
}
?>