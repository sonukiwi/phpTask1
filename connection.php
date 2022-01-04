<?php 
class Database 
{
    private $host = "localhost"; 
    private $user_name = "root"; 
    private $pass_word = ""; 
    private $db = "test"; 
    public function query($query) 
    {
        $conn = mysqli_connect($this->host, $this->user_name, $this->pass_word, $this->db); 
        $res = mysqli_query($conn, $query); 
        return $res; 
    }
}
?>