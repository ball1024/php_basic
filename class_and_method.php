<div>Class and Method</div>

<?php
class Product
{
    public $name;
    public $price;


    function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    function getInfo(){
        return "Name: $this->name <br/> Price: $this->price";
    }

}

$product = new Product('Product 1', 100);
echo $product->getInfo();


?>