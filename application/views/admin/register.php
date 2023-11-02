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
		<form action="<?=base_url('index.php/admin/register')?>" method="POST">
		<!-- Email input -->
			<div class="form-outline mb-4">
				<input type="text" name="name" class="form-control" required/>
				<label class="form-label" >Username</label>
			</div>

			<!-- Password input -->
			<div class="form-outline mb-4">
				<input type="password" name="password" class="form-control" required/>
				<label class="form-label">Password</label>
			</div>

			<!-- Phone input -->
			<div class="form-outline mb-4">
				<input type="text" name="phone" class="form-control" required/>
				<label class="form-label">Phone</label>
			</div>

			<!-- Email input -->
			<div class="form-outline mb-4">
				<input type="email" name="email" class="form-control" required/>
				<label class="form-label">Email</label>
			</div>
			<!-- Submit button -->
			<input type="submit" class="btn btn-primary btn-block mb-4" value="Daftar"></button>
		</form>
	</div>
</div>