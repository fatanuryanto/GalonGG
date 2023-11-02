<!-- Page Header Start -->
<div class="container-fluid bg-secondary mb-5">
    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
        <h1 class="font-weight-semi-bold text-uppercase mb-3">Daftar Order</h1>
        <div class="d-inline-flex">
            <p class="m-0"><a href="<?=base_url('')?>">Home</a></p>
            <p class="m-0 px-2">-</p>
            <p class="m-0">Order</p>
        </div>
    </div>
</div>
<!-- Page Header End -->
<div class="container-fluid pt-5">
    <div class="row px-xl-5">
            <table class="table">
                <thead>
                    <tr>
                        <th >Nama</th>
                        <th >Alamat</th>
                        <th >No.Telepon</th>
                        <th >Item</th>
                        <th >jumlah</th>
                        <th >Status</th>
                        <th >Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($orders as $order) :?>
                    <tr>
                        <td><?php echo $order['name']?></td>
                        <td><?php echo $order['address']?></td>
                        <td><?php echo $order['phone']?></td>
                        <td><?php echo $order['item']?></td>
                        <td><?php echo $order['quantity']?></td>
                        <td><?php echo $order['status']?></td>
                        <td>
                            <a href="<?=base_url('index.php/Admin/deliver/'.$order['id'])?>" class="btn btn-success">Antar</a>
                        </td>
                    </tr>
                <?php endforeach?>
                </tbody>
            </table>
        <div class="col-12 pb-1">
            <a href="<?=base_url('')?>" class="btn btn-primary btn-block border-0 py-3">Kembali</a>
        </div>
    </div>
</div>
