<h3>Entend and Implement</h3>

<?php

    interface ProductInterface{
        public function getInfo();
    }
    class ParentClass {
        public function getInfo(){
            return 'Parent Class';
        }
    }

    class Products extends ParentClass implements ProductInterface {
        public function getInfo(){
            return 'Product';
        }
    }

    $product = new Products();
    echo $product->getInfo();
?>
