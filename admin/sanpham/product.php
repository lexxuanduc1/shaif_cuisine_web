<div class="container-fluid">
    
    <div class="card">
    <div class="card-header d-flex justify-content-between">
    <h2>Quản lý sản phẩm</h2>
    <a class="btn btn-success" href="admin.php?page_layout=themsp">Thêm mới</a>
</div>

        <div class="card-body">

                        <table class="table">
                            <thead class="thead-dark">
                                    <tr>
                                        <th>STT</th> 
                                        <th>Tên món</th> 
                                        <th>Hình ảnh</th> 
                                        <th>Giá</th> 
                                        <th>Mô tả</th> 
                                        <th>Loại</th>
                                        <th>Sửa</th> 
                                        <th>Xóa</th>             
                                    </tr>

                            </thead>
                            <tbody>


                            <?php 
            $product = new product();

            // Gọi hàm getAllProduct()
            $page = 1;
            $total = 50;
            $products = $product->getAllProduct($page, $total);
            $i =1;
            foreach($products as $product){ ?>
                                        <tr>
                                                    <td><?php echo $i++;?></td> 
                                                    <td><?php echo $product['name']?></td> 

                                                    <td>
                                                        <img style="width: 100px;" src="images/<?php echo $product['image']?>" >
                                                        
                                                    </td> 

                                                    <td><?php echo $product['price']?></td> 
                                                    <td><?php echo $product['des']?></td> 
                                                        <td><?php if ($product['menuId'] == 1) {
                                                                            echo 'Breakfast';
                                                                        } elseif ($product['menuId'] == 2) {
                                                                            echo 'Lunch';
                                                                        } elseif ($product['menuId'] == 3) {
                                                                            echo 'Dinner';
                                                                        } elseif ($product['menuId'] == 4) {
                                                                            echo 'Our Specials';
                                                                        } elseif ($product['menuId'] == 5) {
                                                                            echo 'Top Dishes';
                                                                        }
                                                                         else {
                                                                            echo 'Unknown';
                                                                        }
                                                            ?></td> 
                                                   <td> <a href="admin.php?page_layout=suasp&id=<?php echo $product['productId'];?>">Sửa</a> </td>
                                                   <td> <a onclick="return Del('<?php echo $product['name'] ?>')" href="admin.php?page_layout=xoasp&id=<?php echo $product['productId'];?>">Xóa</a></td>
                                                            
                                
                                            
                                                        </tr>

                            <?php }?>

                                        
                            

                             </tbody>

                        </table>
                       
        </div>

    </div>
    
</div>

<script>
  function Del(name) {
    if (confirm('Bạn có chắc chắn muốn xóa sản phẩm: ' + name + ' này không?')) ;
     
    
  }
</script>










