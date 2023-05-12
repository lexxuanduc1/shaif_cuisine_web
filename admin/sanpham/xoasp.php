<?php

    $productId = $_GET['id'];
    $product = new product();
    if ($product->deleteProduct($productId)) {
        ?>
        <script>
            alert('Xóa sản phẩm  thành công');
            history.back();
        </script>
        <?php

    } else {
        ?>
        <script>
            alert('Xóa sản phẩm không thành công');
            history.back();
        </script>
        <?php
    }
?>