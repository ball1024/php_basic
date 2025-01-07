<h3> Casting Object</h3>

<?php
    class Products {
        public $name;
        public $price;

        public function __toString()
        {
            return "Name: {$this->name} Price: {$this->price}";
        }
    }


    class Product2 {
        public $name;
        public $price;
    }

    $product = new Products();
    $product->name = 'Iphone 15 pro';
    $product->price = 25000;


    $array = (array) $product;
    print_r($array);

    echo '<br/>';
    echo (string) $product;

    $product2 = new Product2();
    $product2 = (object) $array; // casting array to object
    echo '<br/>';
    print_r($product2)
    
?>