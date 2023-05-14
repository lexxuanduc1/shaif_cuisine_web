<?php
// session_start();
include("./class/product.php");
$product_class = new product();
//khi nhấn add to cart
// if (isset($_POST['addtocart'])) { //từ trang detail gửi dữ liệu qua
$id = $_GET['id_pro']; //id món ăn
if ($id == "") {
    echo "Vui long chon mon";
} else {
    //them san pham vao gio hang
    // if (isset($_POST['addtocart'])) {

    $soluong = 1;
    $monan = $product_class->getProductbyId($id);
    if ($monan) {
        $new_product = array(
            'tensanpham' => $monan['name'],
            'id' => $id,
            'soluong' => $soluong,
            'giasp' => $monan['price'],
            'hinhanh' => $monan['image'],
        );
        if (isset($_SESSION['cart'])) {
            $found = false;
            foreach ($_SESSION['cart'] as &$cart_item) { //su dung tham chieu &
                if ($cart_item['id'] == $id) {
                    $cart_item['soluong'] += $soluong; //nếu đã có thì tăng thêm 1 đơn vị
                    $found = true;
                    break;
                }
            }
            if ($found == false) { //tức là món ăn này chưa có trong giỏ hàng thì sẽ được thêm vào
                $_SESSION['cart'][] = $new_product;
            }
        } else {
            $_SESSION['cart'][] = $new_product; //tạo session cart có nội dung là món ăn cần thêm
        }
        header("Location: ./index.php?chon=t&id=cart");
        exit();
    }
    // }
}
// }


//khi đã tồn tại cart r thì mới có mấy này còn không sẽ hiển thị là giỏ hàng rỗng
if (isset($_SESSION['cart'])) {  //từ trang cart gửi dữ liệu qua
    // Cập nhật số lượng sản phẩm trong giỏ hàng
    if (isset($_GET['cong'])) {
        $id = $_GET['cong'];
        foreach ($_SESSION['cart'] as &$cart_item) {
            if ($cart_item['id'] == $id) {
                if ($cart_item['soluong'] < 10) {
                    $cart_item['soluong']++;
                }
                break;
            }
        }
        header("Location: ./index.php?chon=t&id=cart");
    }
    if (isset($_GET['tru'])) {
        $id = $_GET['tru'];
        foreach ($_SESSION['cart'] as &$cart_item) {
            if ($cart_item['id'] == $id) {
                if ($cart_item['soluong'] > 1) {
                    $cart_item['soluong']--;
                }
                break;
            }
        }
        header("Location: ./index.php?chon=t&id=cart");
    }
    // Xóa sản phẩm khỏi giỏ hàng
    if (isset($_GET['xoa'])) {
        $id = $_GET['xoa'];
        $_SESSION['cart'] = array_filter($_SESSION['cart'], function ($cart_item) use ($id) {
            return $cart_item['id'] != $id; //trả về cart mà không chứa món đã chọn bị xóa
        });
        header("Location: ./index.php?chon=t&id=cart");
    }
    // Xóa tất cả sản phẩm trong giỏ hàng
    if (isset($_GET['xoatatca']) && $_GET['xoatatca'] == 1) {
        unset($_SESSION['cart']);
        header("Location: ./index.php?chon=t&id=cart");
    }
}
