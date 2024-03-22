<?php 
namespace Model;

class User extends ActiveRecord{

protected static $table ="users";
protected static $fieldsDB=["id","fName","lName","email","password","phone","confirmed","token"];


public $id;
public $fName;
public $lName;
public $email;
public $password;
public $phone;
public $confirmed;
public $token;


public function  __construct($args=[]) {
    $this->id = $args["id"]??null;
    $this->fName= $args["fName"]?? "";
    $this->lName= $args["lName"]??"";
    $this->email=$args["email"]??"";
    $this->password= $args["password"]??"";
    $this->phone= $args["phone"]??"";
    $this->confirmed=$args["confirmed"]??"0";
    $this->token=$args["admin"]??"";
}


public function validate (){

    if(!$this->fName){
    self::$alertas["error"][]="You need to enter you r first name";
    }
    if(!$this->lName){
        self::$alertas["error"][]="You need to enter you r last name";
    }
    if(!$this->email){
        self::$alertas["error"][]="Yo need to enter an email";
    }
    if(!$this->password){
        self::$alertas["error"][]="You need to enter a passowrd";
    }
    if(!$this->phone){
        self::$alertas["error"][]="You need to enter a phone number";
    }
    if(strlen($this->password)<6){
        self::$alertas["error"][]="You r password need to have more then 5 characters";
    }
    return self::$alertas;
}

public function verifyIfUserExist(){

     $query= "SELECT * from " . self::$table . " WHERE email = '" . $this->email . "' LIMIT 1";
     $result = self::$db->query($query);

     if($result){
        self::$alertas["error"][]="This username already exist";
     }
     return self::$alertas;
}

public function hashPassword(){

    $this->password= password_hash($this->password,PASSWORD_BCRYPT);
}
}
?>