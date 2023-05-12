<?php
include("./DAO/database.php");
include("./DAO/session.php");
?>
<?php

class user{
    private $db;
    public function __construct(){
        $this->db=new Database();

    }
    public function login($email, $password)
	{
		$query = "SELECT * FROM users WHERE email = '$email' AND password = '$password' LIMIT 1";
		$result = $this->db->select($query);
		if ($result) {
			$value = mysqli_fetch_assoc($result);
			Session::set('user', true);
			Session::set('userId', $value['userID']);
			Session::set('role_id', $value['RoleID']);
			Session::set('name',$value['name']);
			$response = array('status' => 'success','role_id'=>Session::get('role_id'), 'message' => 'Đăng nhập thành công');
		} else { 
			$response = array('status' => 'error', 'message' => 'Sai email hoặc mật khẩu');
		}
		return $response;
	}
	public function checkemail($email){
		$query = "SELECT * FROM users WHERE email = '$email'  LIMIT 1 ";
		$result = $this->db->select($query);
		if ($result) {
			$response = array('status' => 'error', 'message' => 'Email đã tồn tại');
		} else {
			$response = array('status' => 'success', 'message' => 'Đăng ký thành công');
		}
		return $response;
	}
	public function createUseraccount($email,$password,$name,$address){
		$a=$this->checkemail($email);
		if($a['status'] == 'success'){
			$query = "INSERT INTO `users` (`email`, `password`, `name`, `RoleID`, `address`, `status`) 
            VALUES ('$email', '$password', '$name', 4, '$address', 1)";
			$result = $this->db->insert($query);
			if($result){
				$response = array('status' => 'success', 'message' => 'Đăng ký thành công');
			
			}
			else{
				$response = array('status' => 'error', 'message' => 'khong thể tạo được tài khoản');
			}
			
		}
		else{
			$response = array('status' => 'error', 'message' => 'Email đã tồn tại');
		}
		return $response;
	}

}
?>