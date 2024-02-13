<?php
class Database
{
    protected $host = 'localhost';
    protected $username = 'root';
    protected $password = '';
    protected $database = 'trungtien_a';
    protected $conn;
    public function __construct()
    {
        try {
            $this->conn = new mysqli($this->host, $this->username, $this->password, $this->database);
            if ($this->conn->connect_error) {
                throw new Exception('Không kết nối được Database: ' . $this->conn->connect_error);
            }
        } catch (Exception $e) {
            echo 'Thông báo lỗi: ' . $e->getMessage();
        }
    }

    public function query($sql)
    {
        return $this->conn->query($sql);
    }
}
