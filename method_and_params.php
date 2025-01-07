<h3>Method and Params</h3>

<?php

    class Products{
        function getInfo($name, $price){
            return "Name: $name <br/> Price: $price";
        } 
    }
   
$product = new Products();
echo $product->getInfo('Product 12', 1000);

?>