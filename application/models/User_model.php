<?php
class User_model extends CI_Model
{
    //Выборка пользователя по логину и паролю
    public function selectuser($UserLogin, $UserPassword)
    {
        $sql = "SELECT UserID, UserLogin, RoleID FROM Users WHERE UserLogin = ? AND UserPassword = ?;";
        $result = $this->db->query($sql, array($UserLogin, $UserPassword));
        return $result->row_array();
    }

    public function selectcontragent()
    {
        $sql = "SELECT Contragent.ContragentID, Contragent.ContragentName FROM Contragent";
        $result = $this->db->query($sql);
        return $result->result_array();
    }
    
    public function selectcontragentFIO()
    {
        $sql = "SELECT Users.UserID, CONCAT(Users.LastName, ' ', Users.FirstName, ' ', Users.FatherName) AS FIO 
        FROM Users, Contragent WHERE Contragent.ContragentID=Users.ContragentID";
        $result = $this->db->query($sql, array());
        return $result->result_array();
    }

    public function selectallcontr($d1, $d2)
    {
        $sql = "SELECT Contragent.ContragentID, Contragent.ContragentName, COUNT(OrderID) AS countOrder, SUM(OrderCount) AS SumCount, SUM(Product.ProductPrice*OrderCount) AS Sum
        FROM Contragent, Orders, Product, PriceList, Users WHERE Contragent.ContragentID=Users.ContragentID AND Users.UserID=Orders.UserID 
        AND Product.ProductID=PriceList.ProductID AND PriceList.PriceID=Orders.PriceID AND OrderDate>=? AND OrderDateFactPostav<=? 
        GROUP BY Contragent.ContragentID, Contragent.ContragentName";
        $result = $this->db->query($sql, array($d1, $d2));
        return $result->result_array();
    }

    public function selectallproduct($d1, $d2)
    {
        $sql = "SELECT Product.ProductID, Product.ProductName, SUM(OrderCount) AS countProd, SUM(Product.ProductPrice*OrderCount) AS sum
         FROM Orders, Product, PriceList WHERE  Product.ProductID=PriceList.ProductID AND PriceList.PriceID=Orders.PriceID AND OrderDate>=? AND OrderDateFactPostav<=?
         GROUP BY Product.ProductID, Product.ProductName";
        $result = $this->db->query($sql, array($d1, $d2));
        return $result->result_array();
    }
    
    public function selectallprosrocheno($d1, $d2)
    {
        $sql = "SELECT Orders.OrderID, Users.UserID, CONCAT(Users.LastName, ' ', Users.FirstName, ' ', Users.FatherName) AS FIO, Contragent.ContragentName, 
        Orders.OrderDate, Orders.OrderDatePlanPostav,Orders.OrderDateFactPostav, Orders.OrderCount, Orders.OrderStatus, 
        Product.ProductPrice*Orders.OrderCount AS price FROM Users, Orders, Product, Contragent, PriceList 
        WHERE Users.UserID=Orders.UserID AND Users.ContragentID=Contragent.ContragentID AND Orders.PriceID=PriceList.PriceID 
        AND Product.ProductID=PriceList.ProductID AND Orders.OrderDateFactPostav>Orders.OrderDatePlanPostav AND OrderDate>=? AND OrderDateFactPostav<=?";
        $result = $this->db->query($sql, array($d1, $d2));
        return $result->result_array();
    }
}
?>
