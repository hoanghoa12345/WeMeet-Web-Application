<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="<?php echo base_url('uploads/system_logo/'.get_app_config("favicon")); ?>">

  <title><?php echo get_app_config("app_name") ?> - Khôi phục mật khẩu</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">
  <style type="text/css">
    .bg-login-image{
      background: url("<?php echo base_url('uploads/'.get_app_config('backdrop_image')); ?>");
      background-size: cover !important;
      background-position: center !important;
    }
  </style>

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Khôi phục mật khẩu!</h1>
                  </div>
                  <!-- error/success message -->
                  <?php if($this->session->flashdata('success') !='') : ?>
                    <div class="alert alert-success alert-dismissable">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                        ×
                      </button>
                      <?php echo $this->session->flashdata('success'); ?>
                    </div>
                  <?php endif; ?>
                  <?php if($this->session->flashdata('error') !='') : ?>
                    <div class="alert alert-danger alert-dismissable">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                        ×
                      </button>
                      <?php echo $this->session->flashdata('error'); ?>
                    </div>
                  <?php endif; ?>
                  <!-- error/success message End-->
                  <form class="user" action="<?php echo base_url().'login/forget_password/do_reset' ?>" method="post">
                    <div class="form-group">
                      <input type="email" name="email" value="<?php if(isset($email)){ echo $email;} ?>" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Nhập địa chỉ email...">
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">Khôi phục</button>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="<?php echo base_url('login'); ?>">Quay lại trang đăng nhập</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

</body>

</html>