<?php
include "./DAO/database.php";
class product
{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }
    public function getAllProduct($page = 1, $total = 6)
    {
        if ($page <= 0) {
            $page = 1;
        }
        $tmp = ($page - 1) * $total;
        $query = "SELECT * FROM `product` LIMIT $tmp,$total";
        $result = $this->db->select($query);
        $products = array();
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $products[] = $row;
            }
        }
        return $products;
    }
    public function getProductasmenufood($menufood)
    {
        $query = "SELECT * FROM `product` where menuId=$menufood";
        $result = $this->db->select($query);
        $products = array();
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $products[] = $row;
            }
        }
        return $products;
    }
    public function getProductByCategory($menufood, $page = 1, $total = 6)
    {
        if ($page <= 0) {
            $page = 1;
        }
        $tmp = ($page - 1) * $total;
        $query = "SELECT * FROM `product` where menuId=$menufood LIMIT $tmp,$total";
        $result = $this->db->select($query);
        $products = array();
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $products[] = $row;
            }
        }
        return $products;
    }
    // public function showlistproduct($products){
    //     foreach ($products as $product) {   
    //         echo' <div class="dishGrid__item">

    //                      <div class="dishGrid__item__img">
    //                     <img src="' . $product['image'] . '" alt="food img">
    //                 </div>
    //                 <div class="dishGrid__item__info">
    //                     <h3 class="dishGrid__item__title">
    //                     ' . $product['name'] . '
    //                     </h3>
    //                     <h3 class="dishGrid__item__price">' . $product['price'] . '.000 VND</h3>

    //                     <button id="addtocart"  >ADD TO CART</button>
    //                 </div>       

    //             </div>';
    //       } 

    // } 
    public function showlistproduct($products)
    {
        foreach ($products as $product) {
            echo ' <div class="dishGrid__item" >
                   
                         <div class="dishGrid__item__img">
                        <img src="images/' . $product['image'] . '" alt="food img">
                    </div>
                    <div class="dishGrid__item__info">
                        <h3 class="dishGrid__item__title">
                        ' . $product['name'] . '
                        </h3>
                        <h3 class="dishGrid__item__price">' . number_format($product['price'], 0, ",", ".") . ' VND</h3>
                        
                        
                        <p><a id="detail_css" href="./index.php?chon=t&id=detail&id_pro=' . $product['productId'] . '">Detail</a></p>
                    </div>       
                     
                </div>';
        }
    }

    public function showlistproductourspecial($products)
    {
        foreach ($products as $product) {
            echo '<div class="ourSpecials__item">
            <div class="ourSpecials__item__img">
                <img src="images/' . $product['image'] . '" alt="food img">
            </div>
            <h2 class="ourSpecials__item__title">
            ' . $product['name'] . '
            </h2>
            <h3 class="dishGrid__item__price">' . number_format($product['price'], 0, ",", ".") . ' VND</h3>

            
            <p class="ourSpecials__item__text">
               ' . $product['des'] . '
            </p>
            <p><a id="detail_css" href="./index.php?chon=t&id=detail&id_pro=' . $product['productId'] . '">Detail</a></p>
            </div>';
        }
    }
    public function getCountPaging($row = 6)
    {
        $query = "SELECT COUNT(*) FROM product";
        $mysqli_result = $this->db->select($query);
        if ($mysqli_result) {
            $totalrow = intval((mysqli_fetch_all($mysqli_result, MYSQLI_ASSOC)[0])['COUNT(*)']);
            $result = ceil($totalrow / $row);
            return $result;
        }
        return false;
    }
    public function getCountPagingmenuId($menuId, $row = 6)
    {
        $query = "SELECT COUNT(*) FROM product WHERE menuId = $menuId";
        $mysqli_result = $this->db->select($query);
        if ($mysqli_result) {
            $totalrow = intval((mysqli_fetch_all($mysqli_result, MYSQLI_ASSOC)[0])['COUNT(*)']);
            $result = ceil($totalrow / $row);
            return $result;
        }
        return false;
    }
    public function getProductbyId($productId)
    {
        $query = "SELECT * FROM product Where productId =$productId LIMIT 1";
        $result = $this->db->select($query);
        if (mysqli_num_rows($result) > 0) {
            $product = mysqli_fetch_assoc($result);
            $this->db->closeConnection();
            return $product;
        }
    }
    public function addProductby($name, $price, $image, $menuId, $qty, $des, $soldcount)
    {
        $query = "INSERT INTO `product` (`productId`, `name`, `price`, `image`, `menuId`, `qty`, `des`, `soldcount`)
         VALUES(NULL,$name,$price,$image,$menuId,$qty,$des,$soldcount)";
        $result = $this->db->insert($query);
        if ($result)  return true;
        else return false;
    }
    public function updateProductby($productId, $name, $price, $image, $menuId, $qty, $des, $soldcount)
    {
        $query = "UPDATE product
                 SET name=$name,price=$price,image=$image,menuId=$menuId,qty=$qty,des=$des,soldcount=$soldcount
                 WHERE productId =$productId
                 ";
        $result = $this->db->update($query);
        if ($result)  return true;
        else return false;
    }
    public function deleteProductby($productId)
    {
        $query = "DELETE FROM product WHERE productId=$productId";
        $result = $this->db->delete($query);
        if ($result)  return true;
        else return false;
    }
    public function getmenuid($menufood)
    {
        $query = "SELECT * FROM `menufood` where menuId=$menufood";
        $result = $this->db->select($query);
        $products = array();
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $products[] = $row;
            }
        }
        return $products;
    }

    public function getMenu()
    {
        $query = "SELECT menuId, name FROM menufood";
        $result = $this->db->select($query);
        $listMenu = array();
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $listMenu[] = $row;
            }
        }
        return $listMenu;
    }
    public function addProduct()
    {
        // Kiểm tra xem người dùng đã submit form thêm sản phẩm chưa

        $name = $_POST['name'];
        $price = $_POST['price'];
        $image = $_FILES['image']['name'];
        $des = $_POST['des'];
        $menuId = $_POST['menuId'];




        // Validate dữ liệu nhập vào từ người dùng
        if (empty($name) || empty($price) || empty($des) || empty($menuId)) {
            echo 'Vui lòng nhập đầy đủ thông tin sản phẩm.';
            return;
        }
        if ($_FILES['image']['error'] > 0) {
            echo 'Lỗi upload ảnh sản phẩm.';
            return;
        }

        // Lưu file ảnh sản phẩm lên thư mục images
        $target_dir = 'images/';
        $target_file = $target_dir . basename($_FILES['image']['name']);
        move_uploaded_file($_FILES['image']['tmp_name'], $target_file);

        // Thêm sản phẩm vào cơ sở dữ liệu
        $query = "INSERT INTO product (name, price, image, des, menuId) VALUES ('$name', '$price', '$image', '$des', '$menuId')";
        $result = $this->db->insert($query);

        if ($result) {
            echo 'Thêm sản phẩm mới thành công.';
        } else {
            echo 'Thêm sản phẩm mới không thành công.';
        }
    }

    public function suaSanPham($productId, $name, $price, $des, $menuId, $image)
    {
        $productInfo = $this->laySanPham($productId);

        // Kiểm tra xem sản phẩm có tồn tại hay không
        if (!$productInfo) {
            echo "Không tìm thấy sản phẩm";
            return;
        }

        $imageName = $productInfo['image'];

        // Nếu có ảnh mới được tải lên, thì xử lý ảnh và lưu lại tên của ảnh
        if ($image['name'] != '') {
            $imageName = $this->xuLyAnh($image, $productInfo['image']);
        }

        // Thực hiện truy vấn cập nhật thông tin sản phẩm
        $query = "UPDATE product SET name='$name', price=$price, des='$des', menuId=$menuId, image='$imageName' WHERE productId=$productId";
        $result = $this->db->update($query);

        // Kiểm tra xem truy vấn cập nhật đã thành công hay chưa
        if ($result) {
            echo "Cập nhật sản phẩm thành công";
        } else {
            echo "Cập nhật sản phẩm không thành công";
        }
    }
    public function showProductDetails($product)
    {
        echo '
    <div class="images">
    <div class="images-hoder active">
      <img src="images/' . $product['image'] . '">
    </div>

  </div>
  <div class="basic-info">
    <p class="product_name">' . $product['name'] . '</p>
   
  <span>' . number_format($product['price'], 0, ",", ".") . '</span>
  <div class="options">
    <form method="get">
        <input value="' . $product['productId'] . '" name="id_pro" style="display:none"></input>
        <button id="addtocart" name="id" type="submit" value="xulycart">ADD TO CART</button>
    </form>
  </div>
  </div>
  <div class="description">
    <p>' . $product['des'] . '</p>
    ';
    }

    public function getSearch($q, $page = 1, $total = 6)
    {
        try {
            if ($page <= 0) {
                $page = 1;
            }
            $tmp = ($page - 1) * $total;
            $query = "SELECT * FROM `product` WHERE name LIKE '%$q%' LIMIT $tmp,$total";
            $result = $this->db->select($query);
            if (!$result) return "";
            $products = array();
            $count_row = mysqli_num_rows($result);
            if ($count_row > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $products[] = $row;
                }
            }
            return $products;
        } catch (Exception $e) {
            echo '<script> console.log(' . $e . ') </script>';
        }
    }


    public function showlistsearch($products)
    {
        foreach ($products as $product) {
            echo ' 

        <div class="dishGrid__item">
               
                     <div class="dishGrid__item__img">
                    <img src=" images/' . $product['image'] . '" alt="food img">
                </div>
                <div class="dishGrid__item__info">
                    <h3 class="dishGrid__item__title">
                    ' . $product['name'] . '
                    </h3>
                    <h3 class="dishGrid__item__price">' . $product['price'] . '.000 VND</h3>
                    <div class="dishGrid__item__stars">
                        <img src="./images/3star.png" alt="3 star">
                    </div>
                    <button id="addtocart"  >ADD TO CART</button>
                </div>       
                 
            </div>
            ';
        }
    }
    public function xuLyAnh($image, $currentImage = null)
    {
        $targetDir = "images/";
        $imageName = basename($image["name"]);
        $imageType = strtolower(pathinfo($imageName, PATHINFO_EXTENSION));

        // Kiểm tra định dạng ảnh
        $allowTypes = array('jpg', 'jpeg', 'png', 'gif');
        if (!in_array($imageType, $allowTypes)) {
            echo "Định dạng ảnh không hợp lệ";
            return $currentImage;
        }

        // Kiểm tra dung lượng ảnh
        if ($image["size"] > 500000) {
            echo "Kích thước ảnh quá lớn";
            return $currentImage;
        }

        // Đặt tên mới cho ảnh để tránh trùng lặp tên file
        $fileName = time() . '_' . $imageName;
        $targetFilePath = $targetDir . $fileName;

        // Di chuyển ảnh tải lên đến thư mục quản lý ảnh trên máy chủ
        if (move_uploaded_file($image["tmp_name"], $targetFilePath)) {
            // Xóa ảnh cũ nếu có
            if ($currentImage && file_exists($targetDir . $currentImage)) {
                unlink($targetDir . $currentImage);
            }
            return $fileName;
        } else {
            echo "Có lỗi xảy ra khi tải ảnh lên";
            return $currentImage;
        }
    }

    public function laySanPham($productId)
    {
        $query = "SELECT * FROM product WHERE productId = $productId";
        $result = $this->db->select($query);

        if (mysqli_num_rows($result) > 0) {
            return mysqli_fetch_assoc($result);
        } else {
            return null;
        }
    }


    public function deleteProduct($productId)
    {
        $query = "DELETE FROM product WHERE productId = $productId";
        $result = $this->db->delete($query);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}
