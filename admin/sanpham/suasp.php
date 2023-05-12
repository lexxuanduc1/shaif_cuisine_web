<?php 
    $product = new product();
    if (isset($_POST['btn_edit_product'])) {
        $product->suaSanPham($_POST['productId'], $_POST['name'], $_POST['price'], $_POST['des'], $_POST['menuId'], $_FILES['image']);
    }
    $productId = isset($_GET['id']) ? $_GET['id'] : null;
    $productInfo = $product->laySanPham($productId);

    if (!$productInfo || empty($productInfo['name'])) {
        echo 'Không tìm thấy hoặc thiếu thông tin sản phẩm';
       }
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Sửa sản phẩm </h2>
        </div>

        <div class="card-body">
            <form method="POST" enctype="multipart/form-data">
                <input type="hidden" name="productId" value="<?php echo $productInfo['productId']; ?>">
                <div class="form-group">
                    <label for="">Tên sản phẩm</label>
                    <input type="text" name="name" class="form-control" value="<?php echo $productInfo['name']; ?>" required>
                </div><br>

                <div class="form-group">
                    <label for="">Ảnh sản phẩm</label><br>
                    <?php if ($productInfo['image']) { ?>
                        <img style="width: 200px" src="<?php echo 'images/'.$productInfo['image']; ?>" alt="<?php echo $productInfo['name']; ?>" width="100px">
                        <br><br>
                    <?php } ?>
                    <input type="file" name="image" >
                    <p class="text-muted">Chọn ảnh để cập nhật ảnh mới. Để giữ lại ảnh cũ, không chọn ảnh mới.</p>
                </div><br>

                <div class="form-group">
                    <label for="">Giá sản phẩm</label>
                    <input type="number" name="price" class="form-control" value="<?php echo $productInfo['price']; ?>" required>
                </div><br>

                <div class="form-group">
                    <label for="description">Mô tả sản phẩm</label><br>
                    <input type="text" name="des" class="form-control" value="<?php echo $productInfo['des']; ?>" required>
                </div><br>

                <br>
                <label for="category">Loại sản phẩm</label>
                <select name="menuId" id="menuId" required>
                    <?php
                        $listMenu = $product->getMenu();
                        foreach ($listMenu as $menu) {
                            if ($menu['menuId'] == $productInfo['menuId']) {
                                echo '<option value="'.$menu['menuId'].'" selected>'.$menu['name'].'</option>';
                            } else {
                                echo '<option value="'.$menu['menuId'].'">'.$menu['name'].'</option>';
                            }
                        }
                    ?>
                </select>
                <br>

                <button name="btn_edit_product" class="btn btn-primary" type="submit">Lưu sản phẩm</button>
            </form>
        </div>
    </div>
</div>