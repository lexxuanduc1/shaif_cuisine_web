<?php
  if (!isset($_SESSION['role_id'])) {
        header('Location: index.php?chon=t&id=login');
        exit();
}
?>
<style>
    table {
      font-family: Poppins;
    }
    p.name_cart {
      text-align: center;
      font-size: 35px;
      text-transform: uppercase;
    }
    table.table_cart {
        width: 80%;
        text-align: center;
        border-collapse: collapse;
        margin: 0 auto;
    }
    table.table_cart th {
        border: 1px solid;
        font-weight: bold;
        padding: 5px;
        font-size: 20px;
    }
    table.table_cart tr td {
        border: 1px solid;
        padding: 5px;
        font-size: 15px;
    }
    table img {
      width: 100px;
    }
    i.fa {
      color: var(--green-1);
    }
    table p a {
      font-weight: bold;
      color: black;
      font-size: 20px;
    }
</style>
<p class="name_cart">WELCOME </p>
<table class="table_cart"  border="1">
  <tr> 
    <th>No</th>
    <th>Product</th>
    <th>Image</th>
    <th>Quantity</th>
    <th >Price</th>
    <th style="width: 150px;">Subtotal</th>
    <th></th>
  </tr>
<?php
        
        if (isset($_SESSION['cart'])) {
            $i = 0;
            $tongtien = 0;
            foreach ($_SESSION['cart'] as $cart_item) {
                $thanhtien = $cart_item['soluong'] * $cart_item['giasp'];
                $tongtien += $thanhtien;//tinh tong tien
                $i++;
    ?>
  <tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $cart_item['tensanpham']; ?></td>
    <td><img width='150px' src="./images/<?php echo $cart_item['hinhanh'];?>"></td>
    <td>
        <a href="./index.php?chon=t&id=xulycart&tru=<?php echo $cart_item['id']?>"><i class="fa fa-minus" aria-hidden="true"></i></a>
        <?php echo $cart_item['soluong']; ?>
        <a href="./index.php?chon=t&id=xulycart&cong=<?php echo $cart_item['id']?>"><i class="fa fa-plus" aria-hidden="true"></i></a>
 
    </td>
    <td><?php echo number_format($cart_item['giasp'], 0, ",", "."); ?></td>
    <td style="width: 150px;"><?php echo number_format($thanhtien, 0, ",", "."); ?></td>
    <td><a href="./index.php?chon=t&id=xulycart&xoa=<?php echo $cart_item['id'] ?> "><i class="fa fa-trash" aria-hidden="true"></i></a></td>
</tr>
    <?php 
            }
    ?>
        <tr>
            <td colspan="8">
                <p style="float: left; font-size: 35px; font-family: poppins">Total: <?php echo number_format($tongtien, 0, ",", ".");?></p> <br>
                <p style="float: right; "><a href="./index.php?chon=t&id=xulycart&xoatatca=1">Delete All</a></p>
                <div style="clear: both"></div>
               <?php
               
               ?>
            </td>
        </tr>
        <tr>
          <td colspan='8'><a style="font-size: 30px; color: black;" href="./index.php?chon=t&id=thanhtoan&thanhtoan=1"> Pay<a></td>
        </tr>
    <?php
        }
        else {
    ?>
    <tr>
        <td colspan="8"><p>Cart is null</p></td> 
    
    </tr>
    <?php
        }
    ?>


  
</table>