<?php
include("./class/product.php");
    $page = isset($_POST['page']) ? $_POST['page'] : 1;
    $category = isset($_POST['category']) ? $_POST['category'] : 'all';
    
    $product = new product();
    if ($category == 'all') {
        $product_list = $product->getAllProduct($page);
    } elseif($category == 'breakfast'){
        $product_list = $product->getProductByCategory(1, $page);
    }
    elseif($category == 'lunch'){
        $product_list = $product->getProductByCategory(2, $page);
    }
    elseif($category == 'dinner'){
        $product_list = $product->getProductByCategory(3, $page);
    }
    elseif($category == 'specials'){
        $product_list = $product->getProductByCategory(4, $page);
    }
    elseif($category == 'top-dishes'){
        $product_list = $product->getProductByCategory(5, $page);
    }
    $product->showlistproduct($product_list);
?>