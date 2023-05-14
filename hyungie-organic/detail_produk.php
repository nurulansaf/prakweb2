<?php
    $iddetail = $_REQUEST['iddetail'];

    // membuat object ari class produk
    $model = new Produk();

    // script menampilkan data berdasarkan id
    $produk = $model->detail_produk($iddetail);

?>

    <!-- Start checkout page area -->
    <div class="checkout__page--area pt-5">
        <div class="container">
            <div class="checkout__page--inn">
                <div class="main ">
                    <main class="main__content_wrapper section--padding pt-0">
                        <div class="quickview__inner">
                            <div class="row align-items-center">
                                <div class="col-md-4">
                                    <div class="rounded overflow-hidden">
                                        <img class="product__items--img product__primary--img " src="assets-web/img/product/<?=$produk['gambar_produk']?>" alt="product-img">
                                    </div>
                                    
                                </div>
                                <div class="col-md-8">
                                    <div class="quickview__info">
                                        <form action="#">
                                            <div class="d-flex justify-content-between">
                                                <h2 class="product__details--info__title mb-15"><?=$produk['nama_produk']?></h2>
                                                <div class="kode">
                                                    <p>Kode Kategori : <span class="fw-bold badge bg-success"><?=$produk['kode_produk']?></span> | <span class="badge bg-warning"><?=$produk['kategori']?></span></p>
                                                </div>
                                            </div>
                                            <div class="product__details--info__price mb-12">
                                                <span class="current__price"> <span>Rp. <?= number_format($produk['harga_jual'], 0, ',', '.'); ?></span></span>
                                            </div>
                                            <div class="product__variant">
                                                <div class="product__variant--list mb-15">
                                                    <fieldset class="variant__input--fieldset">
                                                        <legend class="product__variant--title mb-8">Stok :</legend>
                                                        <ul class="variant__size d-flex">
                                                            <li class="variant__size--list">
                                                                <input id="weight1" name="weight" type="radio" checked>
                                                                <label class="variant__size--value red" for="weight1"><?=$produk['stok']?></label>
                                                            </li>
                                                        </ul>
                                                    </fieldset>
                                                </div>
                                            </div>
                                            <p class="product__details--info__desc mb-10"><?=$produk['deskripsi']?></p>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
                </div>
            </div>
        </div>
    </div>
    <!-- End checkout page area -->
