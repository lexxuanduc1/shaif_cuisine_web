
<section id="ourSpecials" data-aos="fade-up">
        <div class="container">
            <div class="ourSpecials__wrapper">
                <div class="ourSpecials__left">
                   <?php
                        include("./class/product.php");
                        $product=new product();
                        $ourspecial=$product->getProductasmenufood(4);
                        $product->showlistproductourspecial($ourspecial);
                    ?>
                  
                </div>
                <div class="ourSpecials__right">
                    <h2 class="ourSpecials__title">
                        Our Specials
                    </h2>
                    <p class="ourSpecials__text">
                        All of our food is prepared daily at our restaurants to ensure the highest quality, freshest meals are delivered to our customers
                    </p>
                    
                </div>
            </div>
        </div>
    </section>