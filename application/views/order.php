<!-- Page Header Start -->
<div class="container-fluid bg-secondary mb-5">
    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
        <h1 class="font-weight-semi-bold text-uppercase mb-3">Our Shop</h1>
        <div class="d-inline-flex">
            <p class="m-0"><a href="">Home</a></p>
            <p class="m-0 px-2">-</p>
            <p class="m-0">Shop</p>
        </div>
    </div>
</div>
<!-- Page Header End -->


    <!-- Shop Start -->
    <form method="POST"  action="<?= base_url('index.php/Order/saveOrder')?>">
    <div class="container-fluid pt-5">
        <div class="row px-xl-5">
            <!-- Shop Sidebar Start -->
            <div class="col-lg-3 col-md-12">
                
            <div class="border-bottom mb-4 pb-4">
                    <h5 class="font-weight-semi-bold mb-4">Data Diri</h5>
                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                        <input type="text" class="form-control" name="name" placeholder="Nama Anda" required="required" data-validation-required-message="Silakan isi nama anda" />
                    </div>
                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                        <input type="text" class="form-control" name="address" placeholder="Alamat Anda" required="required" data-validation-required-message="Silakan isi alamat anda" />
                    </div>
                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                        <input type="tel" class="form-control" name="phone" placeholder="Nomor Telpon Anda" required="required" data-validation-required-message="Silakan isi nomor telpon anda" />
                    </div>
                </div>
            </div>
            <!-- Shop Sidebar End -->


            <!-- Shop Product Start -->
            <div class="col-lg-9 col-md-12">
                <div class="row pb-3">
                    <div class="col-12 pb-1">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <h3>Daftar Produk</h3>
                        </div>
                    </div>
                    <div class="col-12 pb-1">
                        <table class="table ">
                            <thead>
                                <tr>
                                    <th >Nama</th>
                                    <th >Harga</th>
                                    <th >Jumlah</th>
                                    <th >Kategori</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach($products as $product) :?>
                                <tr>
                                    <td><?php echo $product['name']?></td>
                                    <td><?php echo $product['price']?></td>
                                    <td><?php echo $product['category']?></td>
                                    <td>
                                        <input type='number' name='id[]' value=<?=$product['id']?> hidden>
                                        <input type='number' name='quantity[]' value=0>
                                    </td>
                                </tr>
                            <?php endforeach?>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-12 pb-1">
                        <input type="submit" value="Pesan" class="btn btn-primary btn-block border-0 py-3">
                        <a href="<?=base_url('')?>" class="btn btn-primary btn-block border-0 py-3">Kembali</a>
                    </div>
                </div>
            </div>
            <!-- Shop Product End -->
        </div>
    </div>
    </form>
    <!-- Shop End -->