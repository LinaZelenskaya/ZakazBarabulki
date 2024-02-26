<?php
class Contr_model extends CI_Model
{
    public function filterkontr()
    {
        $sql = 'SELECT ContragentID, ContragentName, ContragentAdress, ContragentPhone, ContragentBankRecvezit FROM contragent';
        $result = $this->db->query($sql);
        return $result->result_array();
    }

    public function selectaddzakaz($ProductID)
    {
        $sql = 'SELECT Product.ProductID, Product.ProductName, Product.ProductPrice FROM Product WHERE Product.ProductID=?';
        $result = $this->db->query($sql, array($ProductID));
        return $result->row_array();
    }

    public function selectcontr($UserID)
    {
        $sql = "SELECT Orders.OrderID, Users.UserID,Product.ProductName, CONCAT(Users.LastName, ' ', Users.FirstName, ' ', Users.FatherName) AS FIO, Contragent.ContragentName, 
        Orders.OrderDate, Orders.OrderDatePlanPostav, Orders.OrderDateFactPostav, Orders.OrderCount, Orders.OrderStatus, 
        Product.ProductPrice*Orders.OrderCount AS price FROM Users, Orders, Product, Contragent 
        WHERE Users.UserID=Orders.UserID AND Users.ContragentID=Contragent.ContragentID AND Orders.ProductID=Product.ProductID AND Users.UserID=?";
        $result = $this->db->query($sql, array($UserID));
        return $result->result_array();
    }
    
    public function selectcontr2($OrderID)
    {
        $sql = "SELECT Orders.OrderID, 	Product.ProductName, Orders.OrderCount FROM Orders, Product 
        WHERE Orders.ProductID=Product.ProductID AND Orders.OrderID=?";
        $result = $this->db->query($sql, array($OrderID));
        return $result->result_array();
    }

    public function selectcontrdate($UserID, $d1, $d2)
    {
        $sql = "SELECT Orders.OrderID, Users.UserID,Product.ProductName, CONCAT(Users.LastName, ' ', Users.FirstName, ' ', Users.FatherName) AS FIO, Contragent.ContragentName, 
        Orders.OrderDate, Orders.OrderDatePlanPostav, Orders.OrderDateFactPostav, Orders.OrderCount, Orders.OrderStatus, 
        Product.ProductPrice*Orders.OrderCount AS price FROM Users, Orders, Product, Contragent 
        WHERE Users.UserID=Orders.UserID AND Users.ContragentID=Contragent.ContragentID AND Orders.ProductID=Product.ProductID AND Users.UserID=? AND Orders.OrderDate>=? AND Orders.OrderDate<=?";
        $result = $this->db->query($sql, array($UserID, $d1, $d2));
        return $result->result_array();
    }
}