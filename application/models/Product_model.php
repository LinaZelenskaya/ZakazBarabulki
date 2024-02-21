<?php
class Product_model extends CI_Model
{
    public function productselect()
    {
        $sql = 'SElECT * FROM Product';
        $result = $this->db->query($sql);
        return $result->result_array();
    }

    public function filterproduct()
    {
        $sql = 'SELECT * FROM product';
        $result = $this->db->query($sql);
        return $result->result_array();
    }  

    public function product()
    {
        $sql = 'SELECT ProductID, ProductName, ProductCount, ProductPrice FROM product';
        $result = $this->db->query($sql);
        return $result->result_array();
    }   
    
    public function selectproductfilter($Searchproduct,$SearchPrice)
    {
        $sql = 'SELECT ProductID, ProductName, ProductCount, ProductPrice 
        FROM product where ProductName=? and ProductPrice<=?';
        $result = $this->db->query($sql, array($Searchproduct,$SearchPrice));
        return $result->result_array();
    }  

    public function fishselect()
    {
        $sql = 'SELECT ProductID, ProductName FROM Product';
        $result = $this->db->query($sql);
        return $result->result_array();
    }  

    public function productfilter($fishname, $searchproductpriceC, $searchproductpricePo)
    {
        $sql = 'SElECT * FROM Product WHERE ProductID=? AND ProductPrice>=? AND ProductPrice<=?';
        $result = $this->db->query($sql, array($fishname, $searchproductpriceC, $searchproductpricePo));
        return $result->result_array();
    }
}
?>