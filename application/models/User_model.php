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
        AND Product.ProductID=Orders.ProductID AND OrderDate>=? AND OrderDateFactPostav<=? 
        GROUP BY Contragent.ContragentID, Contragent.ContragentName";
        $result = $this->db->query($sql, array($d1, $d2));
        return $result->result_array();
    }

    public function selectallproduct($d1, $d2)
    {
        $sql = "SELECT Product.ProductID, Product.ProductName, SUM(OrderCount) AS countProd, SUM(Product.ProductPrice*OrderCount) AS sum
         FROM Orders, Product, PriceList WHERE  Product.ProductID=Orders.ProductID AND OrderDate>=? AND OrderDateFactPostav<=?
         GROUP BY Product.ProductID, Product.ProductName";
        $result = $this->db->query($sql, array($d1, $d2));
        return $result->result_array();
    }
    
    public function selectallprosrocheno($d1, $d2)
    {
        $sql = "SELECT Orders.OrderID, Users.UserID, CONCAT(Users.LastName, ' ', Users.FirstName, ' ', Users.FatherName) AS FIO, Contragent.ContragentName, 
        Orders.OrderDate, Orders.OrderDatePlanPostav,Orders.OrderDateFactPostav, Orders.OrderCount, Orders.OrderStatus, 
        Product.ProductPrice*Orders.OrderCount AS price FROM Users, Orders, Product, Contragent 
        WHERE Users.UserID=Orders.UserID AND Users.ContragentID=Contragent.ContragentID AND Orders.ProductID=Product.ProductID
         AND Orders.OrderDateFactPostav>Orders.OrderDatePlanPostav AND OrderDate>=? AND OrderDateFactPostav<=?";
        $result = $this->db->query($sql, array($d1, $d2));
        return $result->result_array();
    }
    public function selectcontr(){ // выбрать всех контрагентов
        $sql = "SELECT * FROM contragent";
        $result = $this->db->query($sql, array());
        return $result->result_array();
    }

    public function selectcontr2($ContragentID){ // выбрать всех контрагентов
        $sql = "SELECT * FROM contragent WHERE ContragentID=?";
        $result = $this->db->query($sql, array($ContragentID));
        return $result->result_array();
    }

    public function updpdcontr($ContragentBankRecvezit, $ContragentAdress, $ContragentPhone, $ContragentName, $ContragentID) // Обновить информацию о контрагенте
    {
        $sql = "UPDATE contragent SET ContragentBankRecvezit=?, ContragentAdress=?, ContragentPhone=?, ContragentName=? WHERE ContragentID=?";
        $this->db->query($sql, array($ContragentBankRecvezit, $ContragentAdress, $ContragentPhone, $ContragentName, $ContragentID));
    }
    
    public function delcontr($ContragentID) // удалить контрагента
    {
        $sql = "DELETE FROM contragent Where ContragentID=?";
        $this->db->query($sql, array($ContragentID));
    }

    public function inscontr($ContragentBankRecvezit, $ContragentAdress, $ContragentPhone, $ContragentName) // добавить контрагента
    {
        $sql = "INSERT INTO contragent(ContragentBankRecvezit, ContragentAdress, ContragentPhone, ContragentName) VALUES (?,?,?,?)";
        $this->db->query($sql,array($ContragentBankRecvezit, $ContragentAdress, $ContragentPhone, $ContragentName));
    }

    public function selectusers(){ // выбрать всех пользователей
        $sql = "SELECT UserID, CONCAT(Users.LastName, ' ', Users.FirstName, ' ', Users.FatherName) AS Fio,
         ContragentName, ContragentPhone, ContragentAdress FROM users, contragent where RoleId=3 AND Users.ContragentID=Contragent.ContragentID";
        $result = $this->db->query($sql, array());
        return $result->result_array();
    }

    public function selectusers2($UserID){ // выбрать конкретного пользователя
        $sql = "SELECT * FROM users WHERE UserID=?";
        $result = $this->db->query($sql, array($UserID));
        return $result->result_array();
    }

    public function insuser($LastName, $FirstName, $FatherName, $UserLogin, $UserPassword, $ContragentID) // добавить контрагента
    {
        $sql = "INSERT INTO users(LastName, FirstName, FatherName, UserLogin, UserPassword, RoleID, ContragentID) VALUES (?,?,?,?,?,3,?)";
        $this->db->query($sql, array($LastName, $FirstName, $FatherName, $UserLogin, $UserPassword, $ContragentID));
    }

    public function deluser($UserID) // удалить пользователя
    {
        $sql = "DELETE FROM users Where UserID=?";
        $this->db->query($sql, array($UserID));
    }

    public function updpuser($UserPassword, $LastName, $FirstName, $FatherName, $UserLogin, $UserID) // Обновить информацию о пользователе
    {
        $sql = "UPDATE users SET UserPassword=?, LastName=?, FirstName=?, FatherName=?, UserLogin=?  WHERE UserID=?";
        $this->db->query($sql, array($UserPassword, $LastName, $FirstName, $FatherName, $UserLogin, $UserID));
    }

    public function selectprice(){ // выбрать все прайслисты
        $sql = "SELECT PriceID, ProductName, TypeName FROM pricelist, product, typeprice 
        where pricelist.ProductID = product.ProductID AND typeprice.TypeID = pricelist.TypeID";
        $result = $this->db->query($sql, array());
        return $result->result_array();
    }

    public function selecttype(){ // выбрать тип прайса
        $sql = "SELECT * FROM typeprice";
        $result = $this->db->query($sql, array());
        return $result->result_array();
    }

    public function selectproduct(){ // выбрать рыбу
        $sql = "SELECT ProductID, ProductName FROM product";
        $result = $this->db->query($sql, array());
        return $result->result_array();
    }
    

    public function selectprice2(){ // выбрать конкретный прайс для редактирования
        $sql = "SELECT * FROM pricelist, typeprice, product WHERE  typeprice.TypeID=pricelist.TypeID 
        AND Product.ProductID = pricelist.ProductID";
        $result = $this->db->query($sql, array());
        return $result->result_array();
    }

    public function selectprice5($PriceID){ // выбрать конкретный прайс для редактирования
        $sql = "SELECT * FROM pricelist, typeprice, product WHERE  typeprice.TypeID=pricelist.TypeID 
        AND Product.ProductID = pricelist.ProductID AND PriceID=?";
        $result = $this->db->query($sql, array($PriceID));
        return $result->result_array();
    }

    public function insprice($TypeID, $ProductID, $PriceID) // добавить прайслист
    {
        $sql = "INSERT INTO pricelist(TypeID, ProductID, PriceID) VALUES (?,?,?)";
        $this->db->query($sql, array($TypeID, $ProductID, $PriceID));
    }

    public function delprice($PriceID) // удалить прайслист
    {
        $sql = "DELETE FROM pricelist Where PriceID=?";
        $this->db->query($sql, array($PriceID));
    }

    public function updprice($TypeID, $ProductID, $PriceID) // Обновить информацию о прайсе
    {
        $sql = "UPDATE pricelist SET TypeID=?, ProductID=?  WHERE PriceID=?";
        $this->db->query($sql, array($TypeID, $ProductID, $PriceID));
    }
}
?>
