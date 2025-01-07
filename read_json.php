<div>Read Json</div>

<?php

$json = file_get_contents('product.json');
$data = json_decode($json, true);
?>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
    </tr>
    <?php foreach ($data as $item) { ?>
        <tr>
            <td><?php echo $item['id']; ?></td>
            <td><?php echo $item['name']; ?></td>
            <td><?php echo $item['price']; ?></td>
        </tr>

    <?php } ?>
</table>

<h3>Read Json with type</h3>

<?php

$json = file_get_contents('productType.json');
$data = json_decode($json, true);
?>

<table border="1">
    <tr>
        <th>ProductType</th>
    </tr>
    <?php foreach ($data['productType'] as $item) { ?>
        <tr>
            <td><?php echo $item['name']; ?></td>
            <td>
                <table border="1">
                    <?php foreach ($item['products'] as $product) { ?> <tr>
                        <tr>
                            <td><?php echo $product['name']; ?></td>
                            <td><?php echo $product['price']; ?></td>

                        <?php } ?>

                </table>

            </td>
        </tr>
    <?php } ?>
</table>