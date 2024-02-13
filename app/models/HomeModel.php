<?php
class HomeModel
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

    public function checkUser()
    {
        if (isset($_POST['data-type']) && $_POST['data-type'] === 'login') {
            $username = $_POST['username'];
            $sql = "SELECT * FROM members WHERE username='$username'";
            $data = $this->conn->query($sql);
            $result = mysqli_num_rows($data);
            if ($result === 1) {
                return true;
            } else {
                return false;
            }
        }
    }

    public function getUser($username)
    {
        $sql = "SELECT * FROM members WHERE username='$username'";
        $data = $this->conn->query($sql);
        $data = mysqli_fetch_assoc($data);
        return $data;
    }

    public function registerAccount()
    {
        if (isset($_POST['data-type']) && $_POST['data-type'] === 'registration') {
            $username = $_POST['username'];
            $password = md5($_POST['password']);
            $email = $_POST['email'];

            $sql = "INSERT INTO members (username,password,email) VALUES('$username','$password','$email')";
            $result = $this->conn->query($sql);
            echo "Đăng ký thành công";
        }
    }
}
