    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Update Product</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="<?=base_url('')?>">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Update</p>
            </div>
        </div>
    </div>
    <h6><?php echo validation_errors(); ?></h6>
    <h6><?php echo $this->session->flashdata('error'); ?></h6>

    <!-- Page Header End -->
    <!-- Checkout Start -->
    <div class="container-fluid pt-5 ">
        <div class="row justify-content-center">
            <div class="col-md-4 mb-5">
                <form action="<?=base_url('index.php/Galon/update/'.$product->id)?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <div class=" center card-header product-img position-relative overflow-hidden bg-transparent border p-0" style="padding: 30px;">
                            <h3 class="text-center"><?php echo $product->name; ?></h3>
                            <a class="cat-img overflow-hidden mb-3">
                                <img style="height:400px;object-fit:contain;"class="img-fluid" src="<?=base_url('asset/img/'.$product->filename)?>" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <input class="form-control" type="text" name="name" value="<?php echo $product->name; ?>">
                    </div>
                    <div class="form-group">
                        <label>Harga</label>
                        <input class="form-control" type="text" name="price" value="<?php echo $product->price; ?>">
                    </div>
                        <input class="btn btn-primary btn-block border-0 py-3" type="submit" Value="Ubah"></button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        var elem = document.querySelector('#description');
        M.textareaAutoResize(elem);

        function thumbnail () {
            var preview = document.querySelector('#image');
            var file    = document.querySelector('input[type=file]').files[0];
            var reader  = new FileReader();

            reader.onloadend = function () {
            preview.src = reader.result;
            }

            if (file) {
            reader.readAsDataURL(file);
            } else {
            preview.src = "";
            }
        }
    </script>