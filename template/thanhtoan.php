<style>
    p.title_bill {
        font-size: 50px;
        font-family: poppins;
        text-align: center;
    }
    table {
      font-family: Poppins;
      width: 60%;
      margin: 0 auto;

    }
    
    table.table_bill th {
        border: 1px solid;
        font-weight: bold;
        padding: 5px;
        font-size: 20px;
    }
    table.table_bill tr td {
        border: 1px solid;
        padding: 5px;
        font-size: 15px;
        text-align: center;
    }
    
</style>
<p class="title_bill">BILL</p>
<!--Thong tin khach hang v..v...-->
<!--Thong tin don hang-->
<table class="table_bill" border="1">
    <tr>
        <th>Product</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Subtotal</th>
    </tr>
<?php
    // include("./class/cart.php");
    // $cart = new cart();

    if (isset($_GET['thanhtoan']) && $_GET['thanhtoan'] == 1) {
        $tongtien = 0;
        foreach($_SESSION['cart'] as $key=>$value) {
            $productId = $value['id'];
            $productName = $value['tensanpham'];
            $quantity = $value['soluong'];
            $productPrice = $value['giasp'];
            $productImage = $value['hinhanh'];
            $tongtien += $productPrice*$quantity;

            $cart->addToCart(4, $productName, $quantity, $productName, $productPrice, $productImage);

            ?>
            <tr>
                <td><?php echo $productName ?></td>
                <td><?php echo $quantity ?></td>
                <td><?php echo $productPrice ?></td>
                <td><?php echo $productPrice*$quantity ?></td>
                
            </tr>

            <?php
        }
        ?>
        <tr>
            <td colspan="4">
                <p style="float: right; font-family: poppins; font-size: 20px; font-weight: bold;"> 
                    TOTAL <?php echo $tongtien; ?> 
                </p>
            </td>
        </tr>
        <?php
        unset($_SESSION['cart']);
    }
?>
</table>
<p style="font-size: 40px; text-align: center;">THANK YOU !!!</p>

<!--$productId, $quantity, $productPrice, $productImage-->