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
    <!-- <script src="./main.js"></script> -->
    <!-- Modal layout-->
    <div class="modal">
        <div class="modal__overlay">

        </div>

        <div class="modal__body">

            <!-- Login from-->
            <form action="" method="POST" class="form" id="form-signup" >
                <div class="auth-from">

                    <div class="auth-from__container">

                        <div class="auth-from__header">
                            <h3 class="auth-from__heading">Sign Up</h3>

                        </div>

                        <!-- Nhập liệu-->
                        
                        <div  id="register-form" class="auth-from__from" ">
                            <div class="auth-from__group">
                                <label for="name" class="form-label">Name*</label>
                                <input type="text" class="auth-from__input" id="name" placeholder="Your Name">
                                <span class="form-message" id="name-error"></span>
                            </div>

                            <div class="auth-from__group">
                                <label for="R-email" class="form-label">Email*</label>
                                <input type="email" class="auth-from__input" id="R-email" placeholder="Your Email">
                                <span class="form-message"id="email-error"></span>
                            </div>

                            <div class="auth-from__group">
                                <label for="address" class="form-label">Adress</label>
                                <input type="text" class="auth-from__input" id="address" placeholder="Your Adress">
                                <span class="form-message"></span>
                            </div>

                            <div class="auth-from__group">
                                <label for="R-password" class="form-label">Password*</label>
                                <input type="password" class="auth-from__input" id="R-password" placeholder="Your Password">
                                <span class="form-message"id="pass-error"></span>
                            </div>

                            <div class="auth-from__group">
                                <label for="Re-password" class="form-label">Re-Password*</label>
                                <input type="password" class="auth-from__input" id="Re-password" placeholder=" Re-Password">
                                <span class="form-message"id="repass-error"></span>
                            </div>
                        </div>

                        <div class="auth-from__aside">
                        </div>
                        <div class="auth-form__controls"> 
                            <button type="button"  onclick="goBack()" class=" btn auth-form__controls-back btn--normal " >BACK</button>
                            <button type="button" id="Sign-up-btn" onclick="checkregister()" class="btn btn--primary">Sign Up</button>
                        </div>
                    </div>

                </div>
            </form>
        </div>
        

    </div>
    <script>
        function goBack() {

        window.history.back();

        }
        function is_valid_email(email) {
            // Kiểm tra định dạng email
                var email_regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                return email_regex.test(email);
        }
    
        function validateName() {
        const name = document.getElementById("name");
        const nameerror = document.getElementById("name-error");
        if (name.value === "") {
            nameerror.textContent = "Name is not empty!";
            return false;
        }
        nameerror.textContent = "";
        return true;
        }

        function validateEmail() {
            const email = document.getElementById("R-email");
            const emailerror = document.getElementById("email-error");
            if (!is_valid_email(email.value)) {
                emailerror.textContent = "Email is not valid!";
                return false;
            }
            emailerror.textContent = "";
            return true;
        }

        function validatePass() {
            const pass = document.getElementById("R-password");
            const passerror = document.getElementById("pass-error");
            if (pass.value.length < 7) {
                passerror.textContent = "password must be greater than 6!";
                return false;
            }
            passerror.textContent = "";
            return true;
        }

        function validateRepass() {
            const repass = document.getElementById("Re-password");
            const repasserror = document.getElementById("repass-error");
            const pass = document.getElementById("R-password");
            if (repass.value !== pass.value) {
                repasserror.textContent = "repassword is not correct";
                return false;
            }
            repasserror.textContent = "";
            return true;
        }

        function validateForm(event) {
            const isValid = validateName() && validateEmail() && validatePass() && validateRepass();
            return isValid;
        }

        const form = document.getElementById("form-signup");
        form.addEventListener("submit", validateForm);
        const email = document.getElementById("R-email");
        const name = document.getElementById("name");
        const pass = document.getElementById("R-password");
        const repass = document.getElementById("Re-password");
        const address=document.getElementById("address")
        email.addEventListener("input", validateEmail);
        name.addEventListener("input", validateName);
        pass.addEventListener("input", validatePass);
        repass.addEventListener("input", validateRepass);
        
        function checkregister() {
            $(document).ready(function() {
            $('#Sign-up-btn').click(function(event) {
            event.preventDefault();
            var emailregis = $('#R-email').val();
            var passwordregis = $('#R-password').val();
            var name = $('#name').val();
            var address = $('#address').val();
            if(validateForm()===true){
                $.ajax({
                url: 'checkregister.php',
                type: 'POST',
                dataType: 'json',
                data: { email: emailregis, password: passwordregis, name: name, address: address},
                success: function(response) {
                    if(response.status == 'success') {
                      
                     alert(response.message);
                    window.location.href ='index.php?chon=t&id=login';
                    } else {
                    alert(response.message);
                    }
                },
                error: function(xhr, status, error) {
                    
                    console.log(error);
                }
                });
            }
                
        });
        });
         }
    </script>
</body>

</html>