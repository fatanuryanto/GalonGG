<div class="container-fluid bg-secondary mb-5">
    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
        <h1 class="font-weight-semi-bold text-uppercase mb-3">Daftar Order</h1>
        <div class="d-inline-flex">
            <p class="m-0"><a href="<?=base_url('')?>">Home</a></p>
            <p class="m-0 px-2">-</p>
            <p class="m-0">Login</p>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row justify-content-center">
		<form action="<?=base_url('index.php/admin/login')?>" method="POST">
		<!-- Email input -->
			<h6><?= validation_errors(); ?></h6>
			<h6><?= $this->session->flashdata('error'); ?></h6>
			<div class="form-outline mb-4">
				<input type="text" name="name" class="form-control" />
				<label class="form-label" >Username</label>
			</div>

			<!-- Password input -->
			<div class="form-outline mb-4">
				<input type="password" name="password" class="form-control" />
				<label class="form-label">Password</label>
			</div>
			<!-- Submit button -->
			<input type="submit" class="btn btn-primary btn-block mb-4" value="Login"></button>
		</form>
	</div>
</div>