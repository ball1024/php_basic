<h3>Using Static</h3>

<?php

class Products {
    public static $name = "Product";
    public static function getInfo(){
        return self::$name;
    }

    public function getInfo2(){
        return self::$name;
    }


}
echo Products::getInfo();
echo "<br/>";

$product = new Products();
echo $product->getInfo2();

?> 