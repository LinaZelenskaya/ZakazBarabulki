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
}
?>
