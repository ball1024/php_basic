<h3>Interface</h3>

<?php
interface ProductInterface{
    public function getInfo();
}

class Products implements ProductInterface{
    public function getInfo()
    {
        return "Productsss";
    }
}

$product = new Products();
echo $product->getInfo();

?>