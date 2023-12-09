<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Galon GG</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Moodal -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Favicon -->
    <link href="<?= base_url('asset/img/favicon.ico')?>" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?= base_url('asset/lib/owlcarousel/assets/owl.carousel.min.css')?>" rel="stylesheet">
    

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url('asset/css/style.css')?>" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row align-items-center py-3 px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a href="<?=base_url('')?>" class="text-decoration-none">
                    <h5 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">Galon</span> GG</h5>
                </a>
            </div>
            <div class="col-lg-6 col-6 text-left">
            </div>
            <div class="col-lg-3 col-6 text-right">
            <?php if(null !== $this->session->userdata('user')){ ?>
                <a class="btn btn-primary" href="<?= base_url('index.php/Admin/Logout')?>">Log Out</a>	    
            <?php }else{ ?>
                <a class="btn btn-primary" href="<?= base_url('index.php/Admin/loginPage')?>">Admin Login</a>
            <?php }?>
            </div>
        </div>
    </div>
    <!-- Topbar End -->
