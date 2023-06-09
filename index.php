<?php
include "./DAO/session.php";
if(Session::get('user')==true){
    
?>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    $(document).ready(function() {
        // ẩn nút Sign In
        $('#signin-btn').hide();
        // hiển thị nút Sign out
        $('#signout-btn').show();
        $('#signout-btn').click(function(e) {
        e.preventDefault(); // ngăn chặn hành động mặc định của thẻ a

        // xóa session
        $.ajax({
            url: 'logout.php', // đường dẫn đến file logout.php
            type: 'POST',
            dataType: 'json',
            success: function(response) {
                if (response.success) {
                    // chuyển hướng về trang index
                    window.location.href = 'index.php';
                } else {
                    alert(response.message);
                }
            },
            error: function(xhr, status, error) {
                console.log(xhr.responseText);
            }
        });
    });
    });
</script>
<?php
    if(Session::get('role_id')!=4){
        ?>
        <script>
            $(document).ready(function() {
                $('#administration').show();
            });
</script>
        <?php
    }
    else{
        ?>
        <script>
            $(document).ready(function() {
                $('#administration').hide();
            });
</script>
        <?php
    }
} else {
?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
        // hiển thị nút Sign In
        $('#signin-btn').show();
        // ẩn nút Sign out
        $('#signout-btn').hide();
        $('#administration').hide();
    });
</script>
<?php
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">
    <title>Shaif's Cuisine</title>
    <link rel="stylesheet" href="./reset.css">
    <link rel="stylesheet" href="./globalStyles.css">
    <link rel="stylesheet" href="./components.css">
    <!-- aos library css  -->
    <!-- Add your custom css -->
    <link rel="stylesheet" href="./home.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.0/css/font-awesome.css">
</head>

<body>
    <!-- Nav Section -->
    <?php 
        include("template/nav.php");
    ?>
    <!-- End Nav Section -->
<!------------------------------------ Form tìm kiếm ------------------------ -->
<div class="newsletter__form" style="margin-left: 5%; width: 50%;">
    <form action="index.php" method="GET">
        <label for="keyword">
            <input type="text" name="q" id="search-input" placeholder="Tìm kiếm sản phẩm" value="<?php echo isset($_GET['q']) ? $_GET['q'] : ''; ?>">
        </label>
        <button type="submit" name="search">Tìm kiếm</button>
    </form>
</div>

<?php 
    if (isset($_GET['search'])) {
        $q = isset($_GET['q']) ? $_GET['q'] : "";
        if ($q == "") {
            echo "Vui lòng nhập tên món ăn bạn muốn tìm kiếm";
        } else {
            header('Location: index.php?chon=t&id=timkiem&q='. urlencode($q));
        }
    }
?>
    
<!---------------------------------------------------------- ------------------------ -->
    <!--Content section-->
    <?php 
        include("template/maincontent.php");
    ?>
  
    <?php 
        include("template/footer.php");
    ?>
    <!-- End Footer -->

    <!-- <script src="./choosetable.js"></script> -->
    <!-- aos script -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <!-- custom script -->
    <script src="./main.js"></script>
</body>

</html>
