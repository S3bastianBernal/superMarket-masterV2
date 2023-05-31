<?php
require_once("../config/db.php");
require_once("../config/Conectar.php");
require_once("LoginUser.php");

class RegistroUser extends Conectar{
    private $id;
    private $empleadoId;
    private $email;
    private $username;
    private $password;
    public function __construct($id=0,$empleadoId=0,$email="",$username="",$password="",$dbCnx="")
    {
        $this->id=$id;
        $this->email=$email;
        $this->username=$username;
        $this->password=$password;
        parent::__construct($dbCnx);
    }

    public function setID($id)
    {
        $this->id=$id;
    }

    public function getID()
    {
        return $this->id;
    }

    public function setEmpleadoId($empleadoId)
    {
        $this->empleadoId=$empleadoId;
    }

    public function getEmpleadoId()
    {
        return $this->empleadoId;
    }

    public function setEmail($email)
    {
        $this->email=$email;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setUsername($username)
    {
        $this->username=$username;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setPassword($password)
    {
        $this->password=$password;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function checkUser($email){
        try {
            $stm = $this->dbCnx->prepare("SELECT * FROM users WHERE email = '$email'");
            $stm->execute();
            if($stm->fetchColumn()){
                return true;
            } else {
                return false;
            }
        } catch (Exception $e) {
            $e -> getMessage();
        }
    }

    public function insertData(){
        try {
            $stm = $this-> dbCnx-> prepare("INSERT INTO users(empleadoId,email,username,password) values(?,?,?,?)");
            $stm -> execute([$this->empleadoId,$this->email,$this->username,md5($this->password)]);
            
            $login = new LoginUser();
            $login->setEmail($_POST['email']);
            $login->setPassword($_POST['password']);
            
        } catch (Excption $e) {
            return $e ->getMessage();
        }
    }


}
?>