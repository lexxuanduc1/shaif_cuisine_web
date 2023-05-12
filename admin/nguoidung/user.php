<?php
    if ($_SESSION['role_id'] !=1) {
        ?>
        <script>
            alert("bạn chưa được cấp quyền vào trang này!!!");
            history.back();
        </script>
        <?php
        exit();
    }   
?>
<div class="container-fluid">
    
    <div class="card">
        <div class="card-header">
            <h2>Quản lý Người Dùng</h2>
        </div>


        </div>
    
    </div>