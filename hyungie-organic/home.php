
<main class="main__content_wrapper">
    <?php 
        $models = new Produk();
        $data_produk = $models->data_produk();
    ?>
    <!-- Start product section -->
    <section class="product__section section--padding pt-5">
        <div class="container">
            <div class="section__heading text-center mb-25">
                <span class="section__heading--subtitle">Katalog Produk</span>
                <h2 class="section__heading--maintitle">Terjamin, Murah, Berkualitas</h2>
            </div>
            <div class="tab_content">
                <div id="product_all" class="tab_pane active show">
                    <div class="product__section--inner">
                        <div class="row row-cols-lg-4 row-cols-md-3 row-cols-2 mb--n28">

                            <!-- PRODUK ITEM -->
                            <?php 
                                $no = 1;
                                foreach($data_produk as $v)
                                {
                            ?>
                            <div class="col mb-28">
                                <div class="product__items p-2 shadow-sm bg-white ">
                                    <div class="product__items--thumbnail rounded-3">
                                        <a class="product__items--link" href="#">
                                            <img class="product__items--img product__primary--img" src="assets-web/img/product/<?=$v['gambar_produk']?>" alt="product-img">
                                        </a>
                                        <div class="product__badge">
                                            <span class="product__badge--items sale"><?= $v['kategori'] ?></span>
                                        </div>
                                        <ul class="product__items--action">
                                            <li class="product__items--action__list">
                                                <form method="POST" action="produk_controller.php">
                                                    <a class="product__items--action__btn" href="index.php?hal=checkout&iddetail=<?=$v['id_produk']?>">
                                                        <i class="bi bi-bag-plus fw-bold"></i>
                                                        <span class="visually-hidden">Checkout</span>  
                                                    </a>
                                                    <input type="hidden" name="idx" value="<?=$v['id_produk']?>">
                                                </form>
                                            </li>
                                            <!-- <li class="product__items--action__list">
                                                <form method="POST" action="produk_controller.php">
                                                    <a class="product__items--action__btn" href="index.php?hal=detail_produk&iddetail=<?=$v['id_produk']?>">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"/></svg>
                                                        <span class="visually-hidden">Quick View</span>  
                                                    </a>
                                                    <input type="hidden" name="idx" value="<?=$v['id_produk']?>">
                                                </form>
                                            </li> -->
                                        </ul>
                                    </div>
                                    <div class="product__items--content ">
                                        <div class="row align-items-center">
                                            <div class="col-md-6">
                                                <div class="product__items--price">
                                                    <span class="current__price"><b>Rp. <?= $v['harga_jual'] ?></b></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6 text-right">
                                                <span>Stok :</span> <span class="badge bg-warning"><?= $v['stok'] ?></span>
                                            </div>
                                            
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <h3 class="product__items--content_ h4"><?= $v['nama_produk'] ?></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                                    $no++;
                                }
                            ?>
                            <!-- END PRODUK ITEM -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End product section -->


    <section class="shipping__section2 shipping__style3">
        <div class="container">
            <div class="shipping__section2--inner shipping__style3--inner d-flex justify-content-between">
                <div class="shipping__items2 d-flex align-items-center">
                    <div class="shipping__items2--icon">
                        <img class="display-block" src="assets-web/img/other/shipping1.png" alt="shipping img">
                    </div>
                    <div class="shipping__items2--content">
                        <h2 class="shipping__items2--content__title h3">Shipping</h2>
                        <p class="shipping__items2--content__desc">From handpicked sellers</p>
                    </div>
                </div>
                <div class="shipping__items2 d-flex align-items-center">
                    <div class="shipping__items2--icon">
                        <img class="display-block" src="assets-web/img/other/shipping2.png" alt="shipping img">
                    </div>
                    <div class="shipping__items2--content">
                        <h2 class="shipping__items2--content__title h3">Payment</h2>
                        <p class="shipping__items2--content__desc">Visa, Paypal, Master</p>
                    </div>
                </div>
                <div class="shipping__items2 d-flex align-items-center">
                    <div class="shipping__items2--icon">
                        <img class="display-block" src="assets-web/img/other/shipping3.png" alt="shipping img">
                    </div>
                    <div class="shipping__items2--content">
                        <h2 class="shipping__items2--content__title h3">Return</h2>
                        <p class="shipping__items2--content__desc">30 day guarantee</p>
                    </div>
                </div>
                <div class="shipping__items2 d-flex align-items-center">
                    <div class="shipping__items2--icon">
                        <img class="display-block" src="assets-web/img/other/shipping4.png" alt="shipping img">
                    </div>
                    <div class="shipping__items2--content">
                        <h2 class="shipping__items2--content__title h3">Support</h2>
                        <p class="shipping__items2--content__desc">Support every time</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
 
