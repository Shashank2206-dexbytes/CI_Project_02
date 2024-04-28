<?php

class UserManagement extends CI_Model{
    public function insertUserData($data)
    {
        $this->db->insert('tblusers',$data);
    }
    public function userLoginDetails($email,$password)
    {
        $query=$this->db->query("SELECT * FROM tblusers WHERE emailId=? AND userPassword = ?",array($email,$password));
        if($query->num_rows()>0)
        {
            return $query;
        }
        else
        {
            return false;
        }

    }
}
?>