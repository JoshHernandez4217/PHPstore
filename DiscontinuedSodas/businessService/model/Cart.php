<?php
require_once '../../AutoLoader.php';
require_once '../../businessService/ProductBusinessService.php';

class Cart {
    
    private $userid;
    private $items = array(); //associative array (productID=>qty, productID=>qty, productID=>qty
    private $subtotal = array(); //associative array (productID=>cost, productID=>cost, productID=>cost
    private $totalPrice;
    
    function __construct($userid){
        $this->userid = $userid;
        $this->items = array();
        $this->subtotal = array();
        $this->totalPrice = 0;
    }
    
    
    function addItem($productID){
        
        if(array_key_exists($productID, $this->items)){
            $this->items[$productID] +=1;
        }
        else{
        $this->items = $this->items + array($productID => 1);
        }
        
    }
    
    
    function updateQuantity($productID, $newQuantity){
        
        if(array_key_exists($productID, $this->items)){
            $this->items[$productID] = $newQuantity;
        }
        else{
            $this->items = $this->items + array($productID => $newQuantity);
        }
        
        if($this->items[$productID] == 0){
            unset($this->items[$productID]);
        }
        
    }
    
    
    function CalculateTotal(){
        
        $subtotalArray = array();
        
        $pbs = new ProductBusinessService();
        
        $this->totalPrice = 0;
        
        foreach($this->items as $items => $quantity){
            $product = $pbs->findbyID($items);
            $product_subtotal = $product->getPrice() * $quantity;
            $subtotalArray = $subtotalArray + array($items => $product_subtotal);
            $this->totalPrice = $this->totalPrice + $product_subtotal;
        }
        
        $this->subtotal = $subtotalArray;
        
        
        
    }
    
    /**
     * @return mixed
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * @return multitype:
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @return multitype:
     */
    public function getSubtotal()
    {
        return $this->subtotal;
    }

    /**
     * @return number
     */
    public function getTotalPrice()
    {
        return $this->totalPrice;
    }

    /**
     * @param mixed $userid
     */
    public function setUserid($userid)
    {
        $this->userid = $userid;
    }

    /**
     * @param multitype: $items
     */
    public function setItems($items)
    {
        $this->items = $items;
    }

    /**
     * @param multitype: $subtotal
     */
    public function setSubtotal($subtotal)
    {
        $this->subtotal = $subtotal;
    }

    /**
     * @param number $totalPrice
     */
    public function setTotalPrice($totalPrice)
    {
        $this->totalPrice = $totalPrice;
    }

    
    
    
    
}