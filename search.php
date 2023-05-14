<Script>
        $(document).ready(function() {
      
            $('.pagination-link').on('click', function(e) {
                e.preventDefault();
                var page = $(this).data('page');
                $.ajax({
                url: 'load_data.php',
                type: 'post',
                data: {page: page},
                success: function(data) {
                    $('#posts').html(data);
                    window.history.pushState("", "", '?page=' + page);
                }
                });
            });
        });
    </Script>

<section id="dishGrid" data-aos="fade-up">
    <div class="container">
        <h2 class="dishGrid__title">Kết quả tìm kiếm :</h2>
        <?php
        include ("./class/product.php");
        $product = new Product();
        // Lấy từ khóa tìm kiếm từ biến GET
        $q = $_GET['q'];
        $products = $product->getSearch($q); // Lấy kết quả tìm kiếm
        
        if (!empty($products)) { 
            ?>
            <script>console.log("khong rong")</script>
            <?php
            $total = count($products);
            echo '<h2 class="dishGrid__title">Tìm thấy  ' . $total . ' món ăn với từ khóa "' . $q . '"</h2>';
            ?>
            <div  id="posts" class="dishGrid__wrapper">
                <?php
                if (isset($_GET['q'])) {   
                        $product->showlistsearch($products); // Hiển thị danh sách sản phẩm tìm kiếm
                        // In ra phân trang
                        $page_total = $total/6;; // Lấy tổng số trang
                        echo '<div id="pagination">';
                        for ($i = 1; $i <= $page_total; $i++) {
                            echo '<a href="#" class="pagination-link" data-page="' . $i . '">' . $i . '</a>';
                        }
                        echo '</div>';
                
                } else {
                   
                    echo 'Vui lòng nhập tên món ăn bạn muốn tìm kiếm';
                }
                ?>
            </div>
            <?php
        } else {
            ?>
            
            <script>console.log("rong")</script>
            <?php
            echo 'Không tìm thấy món ăn bạn muốn tìm!';
        }
        ?>
    </div>
</section>
