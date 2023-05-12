
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">
    <title>Login Admin | Shaif's Cuisine</title>
    <link rel="stylesheet" href="./reset.css">
    <link rel="stylesheet" href="./globalStyles.css">
    <link rel="stylesheet" href="./components.css">
    <link rel="stylesheet" href="./font/fontawesome-free-6.2.1-web/css/all.min.css">
    <!-- aos library css  -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- Add your custom css -->
    <link rel="stylesheet" href="./home.css">

</head>

<body>
    <!-- Nav Section -->
    
    <!-- End Footer -->

    <!-- aos script -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <!-- custom script -->
    <script src="./main.js"></script>
    <!-- Modal layout-->
    <div class="modal">
        <div class="modal__overlay">

        </div>

        <div class="modal__body">

            <!-- Login from-->
            <form action="" method="POST" class="form" id="form-signin">
                <div class="auth-from">

                    <div class="auth-from__container">

                        <div class="auth-from__header">
                            <h3 class="auth-from__heading">Sign In</h3>

                        </div>
                        <!-- Nhập liệu-->
                        <div  id="login-form" class="auth-from__from">
                            <div class="auth-from__group">
                                <label for="Email" class="form-label">Email</label>
                                <input type="email" class="auth-from__input" id="Email" placeholder="Your Email">
                                <span class="form-message"></span>
                            </div>

                            <div class="auth-from__group">
                                <label for="Password" class="form-label">Password</label>
                                <input type="password" class="auth-from__input" id="Password" placeholder="Your Password">
                                <span class="form-message"></span>
                            </div>
                            <a href="index.php?chon=t&id=register" style="float:right;">
                             <button type="button" id="register-btn">Create Account now!</button>
                            </a>
                            
                        </div>

                        <div class="auth-from__aside">

                        </div>
                        <div class="auth-form__controls">
                        <button type="button"  onclick="window.location.href='index.php'" class=" btn auth-form__controls-back btn--normal " >BACK</button>
                         <button type="button" id="login-btn" onclick="check()" class="btn btn--primary">LOGIN</button>

                        </div>

                    </div>

                </div>
            </form>
           
        </div>

    </div>
    <!--
        email: admin@123
        pass: admin@123
    -->
    <script>
       
        function is_valid_email(email) {
           // Kiểm tra định dạng email
             var email_regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return email_regex.test(email);
        }
        function check() {
            $(document).ready(function() {
            $('#login-btn').click(function(event) {
            // Ngăn chặn việc chuyển trang khi nhấn nút Đăng nhập
    
            event.preventDefault();
            // Lấy thông tin đăng nhập từ form
            var emaillogin = $('#Email').val();
            var passwordlogin = $('#Password').val();
            if(is_valid_email(emaillogin)&&emaillogin!=""&&passwordlogin!=""){
                 // Gửi yêu cầu đăng nhập bằng Ajax
                 $.ajax({
                url: 'checklogin.php',
                type: 'POST',
                dataType: 'json',
                data: { email: emaillogin,password: passwordlogin},
                success: function(response) {
                   
                    if(response.status == 'success') {
                        var role_id = response.role_id; 
                        if(role_id == 4) {
                            window.location.href = 'index.php';
                        } else {
                            window.location.href = 'admin.php'; 
                        }
                    } else {
                    alert(response.message);
                    }
                },
                error: function(xhr, status, error) {
                    
                    console.log(error);
                }
                });
            }
            else{
                alert("Địa chỉ email hoặc mật khẩu không hợp lệ.");
            }
           
        });
        });
         }
    </script>
    <script src="account.js"></script>
</body>

</html>