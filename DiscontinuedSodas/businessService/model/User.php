<?php



class Person {
    
    private $id;
    private $Username;
    private $password;
    private $Email;
    private $Admin;
    private $pin;
    
    
    public function __construct($id,$Username, $Password, $Email, $Admin, $pin){
        $this->id = $id;
        $this->Username = $Username;
        $this->password = $Password;
        $this->Email = $Email;     
        $this->Admin = $Admin;
        $this->pin = $pin;
       
    }
    
    
    
    public function getId()
    {
        return $this->id;
    }
    
    public function getEmail()
    {
        return $this->Email;
    }
    
    public function getPin()
    {
        return $this->pin;
    }
    
    public function getAdmin()
    {
        return $this->Admin;
    }
  
    public function getUsername()
    {
        return $this->Username;
    }
    
   public function setId($id)
    {
        $this->id = $id;
    }
    
   
    public function setUsername($Username)
    {
        $this->Username = $Username;
    }
    
    public function setEmail($Email)
    {
        $this->Email = $Email;
    }
    
    public function setAdmin($Admin)
    {
        $this->Admin = $Admin;
    }
    
    public function setPin($Pin)
    {
        $this->pin = $Pin;
    }
    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    
}


?>