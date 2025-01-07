<h3>Override method</h3>

<?php 
    class ParentClass{
        public function getInfo(){
            return "Paraent Class";
        }
    }

    class Products extends ParentClass{
        public function getInfo(){
            return "Product Class";
        }
    }

    $product = new Products();
    echo $product->getInfo();

?>