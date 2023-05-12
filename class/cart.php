<?php
include "./DAO/database.php";
class cart{
    private $db;
    public function __construct(){
        $this->db=new Database();
    }
    public function getAllCart(){
        $query="SELECT * FROM `cart` ";
        $result=$this->db->select($query);
        $cart=array();
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)) {
                $cart[] = $row;
              }
        }
        return $cart;
    } 

    public function showListCart($cart) {
        foreach ($cart as $val) {
            echo '
            <tr>
                <td>'.$val['productId'].'</td>
                <td>'.$val['productName'].'</td>
                <td><img  src='.$val['productImage'].'></td>
                <td>
                    <a href="./index.php?chon=t&id=xulycart?tru="'.$val['productId'].'""><i class="fa fa-minus" aria-hidden="true"></i></a>
                    '.$val['qty'].'
                    <a href="./index.php?chon=t&id=xulycart?cong="'.$val['productId'].'""><i class="fa fa-plus" aria-hidden="true"></i></a>
                </td>
                <td>'.number_format($val['productPrice'],0,",",".").'</td>
                <td>'.number_format($val['productPrice'] * $val['qty'],0,",",".").'</td>
                <td><a href=""><i class="fa fa-trash" aria-hidden="true"></i></a></td>
            </tr>
            ';
        }
    }

    public function getCartByUserID($userId) {
        $query = "SELECT * FROM `cart` WHERE userId=$userId";
        $result=$this->db->select($query);
        $cart=array();
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)) {
                $cart[] = $row;
              }
        }
        return $cart;
    }
    
    public function addToCart($userId, $productId, $quantity, $productName, $productPrice, $productImage) {
        $sql = "INSERT INTO `cart` (cardId, userId, productId, qty, productName, productPrice, productImage)
         VALUES (null, $userId, $productId, $quantity, $productPrice, $productImage)";
        $result=$this->db->insert($sql);
        if($result)  return true;
        else return false;
    }

    
}
?>