<?php 
        $product = new product();
        if (isset($_POST['btn_add_product'])) {
            $product->addProduct();
        }
?>



<div class="container-fluid">
    
    <div class="card">
        <div class="card-header">
            <h2>Thêm sản phẩm </h2>
        </div>

        <div class="card-body">

        <form method ="POST" enctype="multipart/form-data">

            <div class="from-group">
                <label for="">Tên sản phẩm</label>
                <input type="text" name="name" class="form-control" required>
            </div><br>


            <div class="from-group">
                <label for="">Ảnh sản phẩm</label><br>
                <input type="file" name="image" >
            </div><br>


            <div class="from-group">
                <label for="">Giá sản phẩm</label>
                <input type="number" name="price" class="form-control" required>
            </div><br>

            <div class="from-group">
                <label for="description">Mô tả sản phẩm</label><br>
                <input type="text" name="des" class="form-control" required>
            </div><br>

            <br>
        <label for="category">Loại sản phẩm</label>
        <select name="menuId" id="menuId" required>
            <option value="">--- Chọn loại ---</option>
                    <?php
                            $listMenu = $product->getMenu();
                            foreach ($listMenu as $menu) {
                                echo '<option value="'.$menu['menuId'].'">'.$menu['name'].'</option>';
                            }
                    ?>
        </select>
        <br>


            <button name="btn_add_product" class = "btn btn-success" type="submit">Thêm sản phẩm</button>



        </form>

                     
                     
       

    </div>
</div>
