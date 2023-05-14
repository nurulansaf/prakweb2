<?php

    $obj_produk = new Produk();
    $obj_pesanan = new Pesanan();

    $dataproduk = $obj_produk->data_produk();
    $datapesanan = $obj_pesanan->data_pesanan();

    
    $iddetail = $_REQUEST['iddetail'];

    // script menampilkan data berdasarkan id
    $produk = $obj_produk->detail_produk($iddetail);
?>
    <!-- Start checkout page area -->
    <div class="checkout__page--area pt-5">
        <div class="container">
            <div class="checkout__page--inner">
                <div class="main">
                    <header class="main__header checkout__mian--header mb-30"> 
                        <nav>
                            <ol class="breadcrumb checkout__breadcrumb d-flex">
                                <li class="breadcrumb__item breadcrumb__item--completed d-flex align-items-center">
                                    <a class="breadcrumb__link" href="cart.html">Cart</a>
                                    <svg class="readcrumb__chevron-icon" xmlns="http://www.w3.org/2000/svg" width="17.007" height="16.831" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M184 112l144 144-144 144"></path></svg>
                                </li>
                        
                                <li class="breadcrumb__item breadcrumb__item--current d-flex align-items-center">
                                    <span class="breadcrumb__text current">Information</span>
                                    <svg class="readcrumb__chevron-icon" xmlns="http://www.w3.org/2000/svg" width="17.007" height="16.831" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M184 112l144 144-144 144"></path></svg>
                                </li>
                                <li class="breadcrumb__item breadcrumb__item--blank d-flex align-items-center">
                                    <span class="breadcrumb__text">Shipping</span>
                                    <svg class="readcrumb__chevron-icon" xmlns="http://www.w3.org/2000/svg" width="17.007" height="16.831" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M184 112l144 144-144 144"></path></svg>
                                </li>
                                    <li class="breadcrumb__item breadcrumb__item--blank">
                                    <span class="breadcrumb__text">Payment</span>
                                </li>
                            </ol>
                        </nav>
                    </header>
                        <main class="main__content_wrapper section--padding pt-0">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="rounded overflow-hidden mb-5">
                                        <img class="product__items--img product__primary--img " src="assets-web/img/product/<?=$produk['gambar_produk']?>" alt="product-img">
                                    </div>
                                    <div class="quickview__info">
                                        <div class="d-flex justify-content-between">
                                            <h2 class="product__details--info__title mb-15"><?=$produk['nama_produk']?></h2>
                                            
                                            <div class="product__details--info__price mb-12">
                                                <span class="current__price"> <span>Rp. <?= number_format($produk['harga_jual'], 0, ',', '.'); ?></span></span>
                                            </div>
                                        </div>
                                        <hr class="mt-1 mb-1">
                                        <div class="kode">
                                            <p>Kode Kategori : <span class="fw-bold badge bg-success"><?=$produk['kode_produk']?></span> | <span class="badge bg-warning"><?=$produk['kategori']?></span></p>
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
                                    </div>
                                </div>

                                <div class="col-md-8">
                                    <form method="POST" action="pesanan_controller.php">
                                        <div class="row checkout__content--step section__contact--information">
                                            <div class="section__header checkout__section--header d-flex align-items-center justify-content-between mb-25">
                                                <h2 class="section__header--title h3">Informasi Pengiriman</h2>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="customer__information">
                                                    <div class="checkout__email--phone mb-12">
                                                        <label>
                                                            <input class="checkout__input--field border-radius-5" placeholder="id" name="id_pesanan"  type="hidden">
                                                            <input class="checkout__input--field border-radius-5" placeholder="Tanggal Pemesanan" name="tgl_pesanan"  type="date" value="<?php echo date("d-m-Y"); ?>" required>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="checkout__input--list checkout__input--select select">
                                                    <label class="checkout__select--label" for="country">Produk</label>
                                                    <select class="checkout__input--select__field border-radius-5" name="produk_id" id="country">
                                                    <?php
                                                        foreach ($dataproduk as $dp){
                                                    ?>    
                                                    <option  value="<?php echo $dp['id_produk']?>"><?php echo $dp['nama_produk']?></option>
                                                    <?php
                                                        }
                                                    ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="checkout__input--list">
                                                    <div class="quantity__box">
                                                        <button type="button" class="quantity__value quickview__value--quantity decrease" aria-label="quantity value" value="Decrease Value">-</button>
                                                        <label>
                                                            <input type="number" name="jumlah_pesanan" class="quantity__number quickview__value--number" value="1" data-counter />
                                                        </label>
                                                        <button type="button" class="quantity__value quickview__value--quantity increase" aria-label="quantity value" value="Increase Value">+</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="checkout__content--step section__shipping--address">
                                            <div class="section__header mb-25">
                                                <h2 class="section__header--title h3">Informasi Pesanan</h2>
                                            </div>
                                            <div class="section__shipping--address__content">
                                                <div class="row">
                                                    <div class="col-lg-6 mb-12">
                                                        <div class="checkout__input--list ">
                                                            <label>
                                                                <input class="checkout__input--field border-radius-5" placeholder="Nama Pemesan" name="nama_pemesan"  type="text">
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 mb-12">
                                                        <div class="checkout__input--list">
                                                            <label>
                                                                <input class="checkout__input--field border-radius-5" placeholder="No. Telp" name="nohp_pemesan"  type="text">
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 mb-12">
                                                        <div class="checkout__input--list">
                                                            <label>
                                                                <input class="checkout__input--field border-radius-5" placeholder="Email" name="email_pemesan" type="text">
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 mb-12">
                                                        <div class="checkout__input--list">
                                                            <label>
                                                                <textarea class="checkout__input--field border-radius-5" placeholder="Alamat" name="alamat_pemesan"  type="text"></textarea>
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="col-12 mb-12">
                                                        <div class="checkout__input--list">
                                                            <label>
                                                                <textarea class="checkout__input--field border-radius-5" placeholder="Catatan" name="deskripsi"  type="text"></textarea>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="checkout__content--step__footer d-flex align-items-center">
                                                        <button name="proses" type="submit" value="simpan"  class="continue__shipping--btn btn border-radius-5 w-100">Beli Sekarang</button>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </main>
                    </div>
            </div>
        </div>
    </div>
    <!-- End checkout page area -->
