<?php
class Zakaz_model extends CI_Model
{
    //Выборка пользователя по логину и паролю
    public function selectallzakaz()
    {
        $sql = "SELECT Users.UserID, CONCAT(Users.LastName, ' ', Users.FirstName, ' ', Users.FatherName) AS FIO, Contragent.ContragentName, 
        Orders.OrderDate, Orders.OrderDatePlanPostav, Orders.OrderDateFactPostav, Orders.OrderCount, Orders.OrderStatus, 
        Product.ProductPrice*Orders.OrderCount AS price FROM Users, Orders, Product, Contragent, PriceList 
        WHERE Users.UserID=Orders.UserID AND Users.ContragentID=Contragent.ContragentID AND Orders.PriceID=PriceList.PriceID 
        AND Product.ProductID=PriceList.ProductID";
        $result = $this->db->query($sql);
        return $result->result_array();
    }

    public function selectzakaz($UserID)
    {
        $sql = "SELECT Users.UserID, CONCAT(Users.LastName, ' ', Users.FirstName, ' ', Users.FatherName) AS FIO, Contragent.ContragentName, 
        Orders.OrderDate, Orders.OrderDatePlanPostav, Orders.OrderDateFactPostav, Orders.OrderCount, Orders.OrderStatus, 
        Product.ProductPrice*Orders.OrderCount AS price FROM Users, Orders, Product, Contragent, PriceList 
        WHERE Users.UserID=Orders.UserID AND Users.ContragentID=Contragent.ContragentID AND Orders.PriceID=PriceList.PriceID 
        AND Product.ProductID=PriceList.ProductID AND Users.UserID=?";
        $result = $this->db->query($sql, array($UserID));
        return $result->result_array();
    }
}
?>
