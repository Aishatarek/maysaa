<?php
session_start();

class Admin
{
    public $db = null;
    public function __construct(DBController $db)
    {
        if (!isset($db->con)) return null;
        $this->db = $db;
    }
    // public function addAdmin($username, $email, $password, $avatar, $role)
    // {
    //     if (isset($username) && isset($email) && isset($password) && isset($avatar) && isset($role)) {
    //         $sqll = "SELECT * FROM admins WHERE email=$email";
    //         $resultt =  $this->db->con->query($sqll);
    //         if ($resultt->num_rows > 0) {
    //             echo "<script>alert('the email already exist')</script>";
    //         } else {
    //             $this->db->con->query("INSERT INTO admins(name,email,password,avatar,role) VALUES($username,$email,$password,$avatar,$role)");
    //             header("Refresh:0");
    //             $sqlll = "SELECT * FROM user WHERE email=$email AND password=$password";
    //             $resulttt =  $this->db->con->query($sqlll);
    //             if ($resulttt->num_rows > 0) {
    //                 $row = mysqli_fetch_assoc($resulttt);
    //                 $_SESSION['username'] =  $row['username'];
    //                 $_SESSION['user_id'] = $row['id'];
    //                 $_SESSION['role'] = $row['role'];
    //             } else {
    //                 echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
    //             }
    //             header("Location: index.php");
    //         }
    //     }
    // }
    public function signIn($email, $password)
    {
        if ($this->db->con != null) {
            if (isset($email) && isset($password)) {
                $sql = "SELECT * FROM admins WHERE email='$email' AND password='$password'";
                $result =  $this->db->con->query($sql);
                if ($result->num_rows > 0) {
                    $row = mysqli_fetch_assoc($result);
                    $_SESSION['admin_id'] = $row['id'];
                    $_SESSION['role'] = $row['role'];
                    header("Location: dashboard/dashboard.php");
                } else {
                    echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
                }
            }
        }
    }
    public function getData()
    {
        $result = $this->db->con->query("SELECT * FROM admins");
        $resultArray = array();
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $resultArray[] = $item;
        }
        return $resultArray;
    }
    // public function deleteUser($item_id = null)
    // {
    //     if ($item_id != null) {
    //         $result = $this->db->con->query("DELETE FROM admins WHERE id={$item_id}");
    //         return $result;
    //     }
    // }
    // public function updateUser($item_id = null, $username, $email, $avatar, $role)
    // {
    //     if ($item_id != null) {
    //         $result = $this->db->con->query("UPDATE admins SET username={$username},email={$email},avatar={$avatar} ,role= {$role} WHERE id={$item_id}");
    //         return $result;
    //     }
    // }
}
