<!-- Page Header Start -->
<div class="container-fluid bg-secondary mb-5">
    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
        <h1 class="font-weight-semi-bold text-uppercase mb-3">Checkout</h1>
        <div class="d-inline-flex">
            <p class="m-0"><a href="">Home</a></p>
            <p class="m-0 px-2">-</p>
            <p class="m-0">Checkout</p>
        </div>
    </div>
</div>
<!-- Page Header End -->
<div class="container-fluid px-5">
        <div class="card-header bg-secondary border-0">
            <h4 class="font-weight-semi-bold m-0">Order Total</h4>
        </div>
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <h5 class="font-weight-medium mb-3">Produk</h5>
                <h5 class="font-weight-medium mb-3">Jumlah</h5>
                <h5 class="font-weight-medium mb-3">Subtotal</h5>
            </div>    
            <?php foreach($this->session->userdata('order_list') as $item): ?>
            <div class="d-flex justify-content-between">
                <p><?php print_r($item['product']->name)?></p>
                <p><?php print_r($item['quantity'])?></p>
                <p><?php print_r($item['quantity']*$item['product']->price)?></p>
            </div>
            <?php endforeach ?>
            <hr class="mt-0">
        </div>
        <div class="card-footer border-secondary bg-transparent">
            <div class="d-flex justify-content-between mt-2">
                <h5 class="font-weight-bold">Total</h5>
                <h5 class="font-weight-bold"><?php echo $this->session->userdata('order')['total'] ?></h5>
            </div>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Pesan
            </button>
        </div>
    </div>
</div>




<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Anda yakin dengan pesanan anda?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <a href="<?=base_url('index.php/Order/confirmOrder')?>"><button type="button" class="btn btn-primary">Pesan</button></a>
      </div>
    </div>
  </div>
</div>