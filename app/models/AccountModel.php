<?php
class AccountModel
{
    protected $conn;
    public function __construct()
    {
        try {
            $this->conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

            if ($this->conn->connect_error) {
                die("Kết nối thất bại: " . $this->conn->connect_error);
            }
            echo "<script>console.log('Kết nối MySQL thành công');</script>";
        } catch (Exception $e) {
            echo "Báo lỗi: " . $e->getMessage();
        }
    }

    public function getAccount()
    {
        $sql = "SELECT * FROM members";
        $data = $this->conn->query($sql);
        return $data;
    }

    public function getAccountById($id)
    {
        $sql = "SELECT * FROM members WHERE id=$id";
        $data = $this->conn->query($sql);
        return $data;
    }

    public function createAccount($username, $password, $email, $avatar)
    {
        $sql = "INSERT INTO members (username,password,email,avatar) VALUES('$username','$password','$email','$avatar')";
        $result = $this->conn->query($sql);
        return $result;
    }

    public function updateAccount($id, $username, $password, $email, $avatar)
    {
        $sql = "UPDATE members SET username='$username', password='$password', email='$email', avatar='$avatar' WHERE id='$id'";
        $result = $this->conn->query($sql);
        return $result;
    }

    public function deleteAccount($id)
    {
        $sql = "DELETE FROM members WHERE id=$id";
        $result = $this->conn->query($sql);
        return $result;
    }
}
