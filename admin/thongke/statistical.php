<?php
    if ($_SESSION['role_id'] ==3) {
        ?>
        <script>
            alert("bạn chưa được cấp quyền vào trang này!!!");
            console.log("cai deo gi z");
            history.back();
        </script>
        <?php
        exit();
    }   
?>
<div class="container-fluid">
    
    <div class="card">
        <div class="card-header">
            <h2>Quản Lý Thống Kê</h2>
        </div>


        </div>
    
    </div>