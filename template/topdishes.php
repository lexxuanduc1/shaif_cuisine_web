<section id="dishGrid" data-aos="fade-up">
        <div class="container">
            <h2 class="dishGrid__title">
                Top Dishes
            </h2>
            <div class="dishGrid__wrapper">
                     <?php
                        $topdishes=$product->getProductasmenufood(5);
                        $product->showlistproduct($topdishes);
                    ?>
             
            </div>
        </div>
    </section>