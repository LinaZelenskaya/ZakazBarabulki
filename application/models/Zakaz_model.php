<?php
class Zakaz_model extends CI_Model
{
    //Выборка пользователя по логину и паролю
    public function selectallzakaz()
    {
        $sql = "SELECT Orders.OrderID, Users.UserID, CONCAT(Users.LastName, ' ', Users.FirstName, ' ', Users.FatherName) AS FIO, Contragent.ContragentName, 
        Orders.OrderDate, Orders.OrderDatePlanPostav, Orders.OrderDateFactPostav, Orders.OrderCount, Orders.OrderStatus, 
        Product.ProductPrice*Orders.OrderCount AS price FROM Users, Orders, Product, Contragent 
        WHERE Users.UserID=Orders.UserID AND Users.ContragentID=Contragent.ContragentID AND Orders.ProductID=Product.ProductID";
        $result = $this->db->query($sql);
        return $result->result_array();
    }

    public function selectzakaz($UserID)
    {
        $sql = "SELECT Orders.OrderID, Users.UserID, CONCAT(Users.LastName, ' ', Users.FirstName, ' ', Users.FatherName) AS FIO, Contragent.ContragentName, 
        Orders.OrderDate, Orders.OrderDatePlanPostav, Orders.OrderDateFactPostav, Orders.OrderCount, Orders.OrderStatus, 
        Product.ProductPrice*Orders.OrderCount AS price FROM Users, Orders, Product, Contragent 
        WHERE Users.UserID=Orders.UserID AND Users.ContragentID=Contragent.ContragentID AND Orders.ProductID=Product.ProductID AND Users.UserID=?";
        $result = $this->db->query($sql, array($UserID));
        return $result->result_array();
    }

    public function updstatus($OrderID)
    {
        $sql = "UPDATE `Orders` SET OrderStatus=2 WHERE OrderID=?";
        $this->db->query($sql, array($OrderID));
    }

    public function updzakazstatusdostavl($OrderID)
    {
        $sql = "UPDATE `Orders` SET OrderStatus=3, OrderDateFactPostav=CURDATE() WHERE OrderID=?";
        $this->db->query($sql, array($OrderID));
    }

    public function inszakaz($UserID, $ProductID, $countfish) // добавить контрагента
    {
        $sql = "INSERT INTO Orders(OrderDate, OrderDatePlanPostav, OrderStatus, UserID, ProductID, OrderCount) 
        VALUES (CURDATE(), DATE_ADD(CURDATE(), INTERVAL 8 DAY), 0,?,?,?)";
        $this->db->query($sql,array($UserID, $ProductID, $countfish));
    }
    
    public function updstatuscontr($OrderID)
    {
        $sql = "UPDATE `Orders` SET OrderStatus=1 WHERE OrderID=?";
        $this->db->query($sql, array($OrderID));
    }

    public function updzakaz($ProductPrice, $ProductID)
    {
        $sql = "UPDATE Product SET ProductPrice=? WHERE ProductID=?";
        $this->db->query($sql, array($ProductPrice, $ProductID));
    }

    public function updzakazcontr($OrderCount,$OrderID)
    {
        $sql = "UPDATE `Orders` SET OrderCount=? WHERE OrderID=?";
        $this->db->query($sql, array($OrderCount,$OrderID));
    }

    public function deletezakazcontr($OrderID)
    {
        $sql = "DELETE FROM `Orders` Where OrderID=?";
        $this->db->query($sql, array($OrderID));
    }
    
    public function zakazyzaperiod($UserID, $d1, $d2)
    {
        $sql = "SELECT Orders.OrderID, Users.UserID, CONCAT(Users.LastName, ' ', Users.FirstName, ' ', Users.FatherName) AS FIO, Contragent.ContragentName, 
        Orders.OrderDate, Orders.OrderDatePlanPostav, Orders.OrderDateFactPostav, Orders.OrderCount, Orders.OrderStatus, 
        Product.ProductPrice*Orders.OrderCount AS price FROM Users, Orders, Product, Contragent 
        WHERE Users.UserID=Orders.UserID AND Users.ContragentID=Contragent.ContragentID AND Orders.ProductID=Product.ProductID AND Users.UserID=?
         AND Orders.OrderDateFactPostav>Orders.OrderDatePlanPostav AND OrderDate>=? AND OrderDateFactPostav<=?";
        $result = $this->db->query($sql, array($UserID, $d1, $d2));
        return $result->result_array();
    }

    public function insprice($TypeName, $ProductName) // добавить прайс лист
    {
        $sql = "INSERT INTO PriceList(TypeID, ProductID) VALUES (?,?)";
        $this->db->query($sql,array($TypeName, $ProductName));
    }

    public function delprice($PriceID) // удалить прайс лист
    {
        $sql = "DELETE FROM PriceList Where PriceID=?";
        $this->db->query($sql, array($PriceID));
    }
}
?>
