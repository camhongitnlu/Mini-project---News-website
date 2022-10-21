<?php
class UserModel extends Database
{
    function login($username, $password)
    {
        $qr = "SELECT * FROM user WHERE username='$username' AND password='$password'";
        $result = $this->conn->query($qr);
        return $result;
    }
    function regis($username, $password, $fullname)
    {
        if (!$this->check_user($username)) {

            $qr = "INSERT INTO user VALUES ($username, $password, $fullname, 1, null, null, null, null)";
            $result = $this->conn->query($qr);
            if ($result->num_rows > 0) return true;
        } else return false;
    }
    function check_user($username)
    {
        $qr = "SELECT * FROM user WHERE username='$username'";
        $result = $this->conn->query($qr);
        if ($result->num_rows > 0) return true;
        else return false;
    }
}
