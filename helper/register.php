<?php 
include_once "db.php";
class Register{
    public $conn;
    public $name;
    public $lastname; 
    public $email; 
    public $password; 
    public $password_confirm; 
    public function __construct($mysqli,$name="", $lastname="", $email="", $password="", $password_confirm="")
    {
        $this->conn = $mysqli;
        $this->name = $name;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->password= $password;
        $this->password_confirm= $password_confirm;
    }
    function password_encrypt(){
        $this->password=hash("sha256", $this->password);
        
    }
    function password_confirmation(){
        if( !$this->password==$this->password_confirm){
            exit();
        }
    }
    public function email_validation(){
        if(!filter_var($this->email,FILTER_VALIDATE_EMAIL)){
            exit();
        }
    }
    function register(){
        $this->password_confirmation();
        $this->email_validation();
        $this->password_encrypt();
        $sql = "INSERT INTO `users`( `name`, `last_name`, `email`, `password`) 
        VALUES ('$this->name','$this->lastname','$this->email','$this->password')";

        if ($this->conn->query($sql) === TRUE) {
            $_SESSION["name"]=$this->name;
            $_SESSION["lastname"]=$this->lastname;
            $_SESSION["email"]=$this->email;
            $_SESSION["admin"]=0;
            header("Location:../index.php");
            exit();
        } else {
        echo "Error: " . $sql . "<br>" . $this->conn->error;
        }
        $this->conn->close();
    }
}
if (isset($_POST["name"],$_POST["lastname"],$_POST["email"],$_POST["password"],$_POST["password_confirm"]  ))  {
    
    $name = $_POST["name"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $password_confirm = $_POST["password_confirm"];
    $burgeri=new Register($conn,$name, $lastname, $email, $password, $password_confirm);
    $burgeri->register();
}
else {
    exit();
}



  