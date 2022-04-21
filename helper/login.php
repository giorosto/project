<?php 
include_once "db.php";
class Login{
    public $conn;
    public $email; 
    public $password; 
    public function __construct($mysqli, $email="", $password="")
    {
        $this->conn = $mysqli;
        $this->email = $email;
        $this->password= $password;
    }
    function password_encrypt(){
        $this->password=hash("sha256", $this->password);
        
    }
 
    public function email_validation(){
        if(!filter_var($this->email,FILTER_VALIDATE_EMAIL)){
            exit();
        }
    }
  
    function login(){
        $this->email_validation();
        $this->password_encrypt();      
        $sql = "SELECT * FROM `users` WHERE `email`='$this->email' AND `password`='$this->password'";
        $result=$this->conn->query($sql);
        if (mysqli_num_rows($result)>0) {
            $data=$result->fetch_assoc();
            $_SESSION["name"]=$data["name"];
            $_SESSION["lastname"]=$data["lastname"];
            $_SESSION["email"]=$data["email"];
            $_SESSION["admin"]=$data["admin"];
            header("Location:../index.php");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $this->conn->error;
        }
        $this->conn->close();
    }
}
if (isset($_POST["email"],$_POST["password"]))  {  
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    $burgeri=new Login($conn, $email, $password);
    $burgeri->login();
}
else {
    exit();
}