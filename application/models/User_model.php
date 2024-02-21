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
}
?>
