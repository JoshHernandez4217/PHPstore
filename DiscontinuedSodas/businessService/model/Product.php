<?php


class Product {
    
    private $id;
    private $ProductName;
    private $Description;
    private $price;
    private $photo;
    
    
    public function __construct($id, $ProductName, $Description, $Price, $Photo){
        
        $this->id= $id;
        $this->ProductName = $ProductName;
        $this->Description = $Description;
        $this->price = $Price;
        $this->photo = $Photo;
        
    }
    
    
    
    public function getId()
    {
        return $this->id;
    }
    
    public function getProductName()
    {
        return $this->ProductName;
    }
    
    public function getDescription()
    {
        return $this->Description;
    }
    
    public function getPrice()
    {
        return $this->price;
    }
    
    public function setId($id)
    {
        $this->id = $id;
    }
    
    
    public function setProdcutName($ProductName)
    {
        $this->ProductName = $ProductName;
    }
    
    public function setDescription($Description)
    {
        $this->Description = $Description;
    }
    
    public function setPrice($Price)
    {
        $this->price = $Price;
    }
    /**
     * @return mixed
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * @param mixed $photo
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;
    }

    
}


?>