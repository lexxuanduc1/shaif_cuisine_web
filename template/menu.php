

    <?php
        include("./class/product.php");
        $product=new product();               
   ?>
    <Script>
       $(document).ready(function() {
        $('select').on('change', function() {
            var category = $(this).val(); 
            var page = 1; 
            localStorage.setItem('category', category);
            $.ajax({
            url: 'load_data.php',
            type: 'post',
            data: { page: page, category: category },
            success: function(data) {
                $('#posts').html(data); 
                window.history.pushState("", "",'?&id=menu&page=' + page + '&category=' + category);
                location.reload();
            }
            });
        });
        $('.pagination-link').on('click', function(e) {
            e.preventDefault();
            var page = $(this).data('page');
            var category = $('select').val(); 
            $.ajax({
            url: 'load_data.php',
            type: 'post',
            data: { page: page, category: category },
            success: function(data) {
                $('#posts').html(data); 
                window.history.pushState("", "", '?&id=menu&page=' + page + '&category=' + category); 
            }
            });
        });
        });
        $(document).ready(function() {
            var category = localStorage.getItem('category'); 
            if (category !== null) {
                $('select').val(category); 
                $.ajax({
                    url: 'load_data.php',
                    type: 'post',
                    data: { page: 1, category: category },
                    success: function(data) {
                        $('#posts').html(data); 
                        window.history.pushState("", "",'?&id=menu&page=1&category=' + category);
                    }
                });
            }
        });


    </Script>
    <section id="dishGrid" data-aos="fade-up">
        <div class="container">
            <h2 class="dishGrid__title">
                List Product
                <select id="mySelect">
                <option value="all" >All Product</option>
                <option value="breakfast">Breakfast</option>
                <option value="lunch">Lunch</option>
                <option value="dinner">Dinner</option>
                <option value="specials">Our Specials</option>
                <option value="top-dishes">Top Dishes</option>
                </select>
            </h2>
            <div  id="posts" class="dishGrid__wrapper">
            <?php
            // $breakfast=$product->getProductasmenufood(4);
            $list=$product->getAllProduct();
            $product->showlistproduct($list);
            ?>
            
            
           
            </div>
            <div id="pagination">
                <?php
                   if (isset($_GET['category'])){
                    
                    $categorylist=array('breakfast'=>1,'lunch'=>2,'dinner'=>3,'specials'=>4,'top-dishes'=>5);
                    $category=$_GET['category'];
                    if($category=="all"){
                        $page_total=$product->getCountPaging();
                        for( $i=1;$i<=$page_total;$i++){
                         ?><a href="#" class="pagination-link" data-page="<?=$i?>"><?=$i?></a><?php
                        }
                    }
                    else{
                        foreach ($categorylist as $key => $value) {
                            if($category==$key){
                                $page_total=$product->getCountPagingmenuId($value);
                                for( $i=1;$i<=$page_total;$i++){
                                    ?><a href="#" class="pagination-link" data-page="<?=$i?>"><?=$i?></a><?php
                                   }
                                break;
                            }
                        }
                    }
                   }
                   else{
                    $page_total=$product->getCountPaging();
                    
                    for( $i=1;$i<=$page_total;$i++){
                     ?><a href="#" class="pagination-link" data-page="<?=$i?>"><?=$i?></a><?php
                    }
                   }
                 
                ?>
               
	        </div>
        </div>
    </section>
   
