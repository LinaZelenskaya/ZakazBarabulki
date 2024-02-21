<?php
class User_model extends CI_Model
{
    //Выборка пользователя по логину и паролю
    public function selectuser($userlogin, $userpassword)
    {
        $sql = "SELECT UserID, UserLogin, RoleID FROM Users WHERE UserLogin = ? AND UserPassword = ?;";
        $result = $this->db->query($sql, array($userlogin, $userpassword));
        return $result->row_array();
    }
}
?>
