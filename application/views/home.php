    
    <!-- Navbar Start -->
    <div class="container-fluid mb-0">
        <div class="row border-top px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100"  href="<?=base_url('')?>" style="height: 65px; margin-top: -1px; padding: 0 30px;">
                    <h6 class="m-0">Home</h6>
                </a>
                <a class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100" href="<?=base_url('index.php/order/index')?>" style="height: 65px; margin-top: -1px; padding: 0 30px;">
                    <h6 class="m-0">Order</h6>
                </a>
                <a class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; margin-top: -1px; padding: 0 30px;">
                    <h6 class="m-0">Categories</h6>
                    <i class="fa fa-angle-down text-dark"></i>
                </a>
                <nav class="collapse show navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0" id="navbar-vertical">
                    <div class="navbar-nav w-100 overflow-hidden" style="height: 410px">
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link">Galon Asli</a>
                        </div>    
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link" >Galon Isi Ulang</a>
                        </div>  
                    </div>
                </nav>
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">E</span>Shopper</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </nav>
                <div id="header-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" style="height: 410px;">
                            <img class="img-fluid" src="asset\img\banner1.jpg" alt="Image">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h4 class="text-light text-uppercase font-weight-medium mb-3">Galon GG</h4>
                                    <h3 class="display-4 text-white font-weight-semi-bold mb-4">Mudahkan Minum Mu</h3>
                                    <a href="<?=base_url('index.php/order/index')?>" class="btn btn-light py-2 px-3">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item" style="height: 410px;">
                            <img class="img-fluid" src="asset\img\banner2.jpeg" alt="Image">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h4 class="text-light text-uppercase font-weight-medium mb-3">Galon GG</h4>
                                    <h3 class="display-4 text-white font-weight-semi-bold mb-4">Your Trusted Water Store</h3>
                                    <a href="<?=base_url('index.php/order/index')?>" class="btn btn-light py-2 px-3">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                        <div class="btn btn-dark" style="width: 45px; height: 45px;">
                            <span class="carousel-control-prev-icon mb-n2"></span>
                        </div>
                    </a>
                    <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                        <div class="btn btn-dark" style="width: 45px; height: 45px;">
                            <span class="carousel-control-next-icon mb-n2"></span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->
    
    <!-- Products Start -->

    <div class="container-fluid">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Products</span></h2><br>
        </div>
        <div class="row px-xl-5 pb-3 justify-content-center">
            <?php foreach($products as $product) :?>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="card product-item border-0 mb-4 " >
                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                        <img style="height:400px;object-fit:contain;" class="img-fluid w-100 img-thumbnail" src="<?= Base_url('asset/img/'.$product['filename'])?>" alt="">
                    </div>
                    <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                        <h5 class="text-truncate mb-3"><b><?php echo $product['name']?></b></h6>
                        
                        <div class="d-flex justify-content-center">
                            <h6><u>Rp <?php echo $product['price']?></u></h6>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-center bg-light border">
                        <h6 class="text-truncate mb-3"><?php echo $product['category']?></h6>
                    </div>
                </div>
            </div>
            <?php endforeach?>
        </div>
    </div>
    <!-- Products End -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <form method="POST" action="<?= site_url('index.php/Galon/insert'); ?>" enctype="multipart/form-data">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Produk</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
           
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Nama</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="form-group">
                <label for="message-text" class="col-form-label">Harga</label>
                <input type="text" class="form-control" name="price">
            </div>
            <div class="form-group">
                <p>Kategori<p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="category" value="1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Asli
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="category" value="2">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Isi Ulang
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label for="message-text" class="col-form-label">Foto</label>
                <input type="file" class="form-control" name="image">
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <input type="submit" class="btn btn-primary" Value="Tambah">
        </div>
        </form>
        </div>
    </div>
    </div>
