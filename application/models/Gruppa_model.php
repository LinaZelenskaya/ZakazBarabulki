<?php
class Gruppa_model extends CI_Model
{

public function gruppa_select()
{
    $sql = 'select * from gruppa';
    $result = $this->db->query($sql);
    return $result->result_array();
}
public function gruppa_insert($name_gruppa, $spec){
    $sql = 'insert into gruppa(name_gruppa, spec) values(?, ?)';
    $result = $this->db->query($sql,array($name_gruppa, $spec));
    return $this->db->insert_id();
     }
 
}
?>