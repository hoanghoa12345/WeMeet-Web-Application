<?php
$app_name       = get_app_config("app_name");
$app_mode       = get_app_config("app_mode");
$meeting_code   = $this->common_model->generate_meeting_code();
$addthis_enable = get_app_config("addthis_enable");
$addthis_pubid  = get_app_config("addthis_pubid");
$backdrop_image = base_url('uploads/' . get_app_config('backdrop_image'));
$og_image       = base_url('uploads/' . get_app_config('og_image'));
$check_availability_to_host_meeting   = $this->common_model->check_availability_to_host_meeting();
$check_availability_to_join_meeting   = $this->common_model->check_availability_to_join_meeting();
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="<?php echo base_url('uploads/system_logo/' . get_app_config("favicon")); ?>">

  <!-- open-graph -->
  <meta property="og:locale" content="en_US" />
  <meta name="twitter:card" content="summary">
  <meta name="twitter:description" content="Tham gia và tổ chức cuộc họp bởi - <?php echo $app_name; ?>" />
  <meta name="twitter:title" content="<?php echo $app_name; ?> - Tham gia cuộc họp" />
  <meta name="twitter:image" content="<?php echo $og_image; ?>">
  <meta name="twitter:site" content="@<?php echo $app_name; ?>">

  <meta property="og:title" content="<?php echo $app_name; ?> - Tham gia cuộc họp" />
  <meta property="og:url" content="<?php echo base_url(); ?>" />
  <meta property="og:type" content="website" />
  <meta property="og:description" content="Join and host a meeting by - <?php echo $app_name; ?>" />
  <meta property="og:image" content="<?php echo $og_image; ?>" />
  <meta property="og:image:alt" content="<?php echo $app_name; ?> - Xem trước">

  <title><?php echo $app_name; ?> - Tham gia cuộc họp</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">
  <style type="text/css">
    .bg-login-image {
      background: url("<?php echo $backdrop_image; ?>");
      background-size: cover !important;
      background-position: center !important;
    }

    .nav {
      display: flex;
      background-color: #eaecf4;
      border-radius: 0.25rem;
    }

    .nav-item {
      width: 50%;
    }

    .nav-pills .nav-link {
      text-align: center;
      border-radius: .25rem;
    }

    .nav-pills .nav-link.link-left {
      border-top-left-radius: 0.25rem;
      border-top-right-radius: 0rem;
      border-bottom-right-radius: 0rem;
      border-bottom-left-radius: 0.25rem;
    }

    .nav-pills .nav-link.link-right {
      border-top-left-radius: 0rem;
      border-top-right-radius: 0.25rem;
      border-bottom-right-radius: 0.25rem;
      border-bottom-left-radius: 0rem;
    }
  </style>
  <?php if ($addthis_enable == "true") : ?>
    <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=<?php echo $addthis_pubid; ?>"></script>
  <?php endif; ?>


</head>

<body class="bg-gradient-primary">
  <div class="container-fluid">
    <nav class="navbar navbar-expand navbar-dark bg-transparent topbar mb-4 static-top">
    <?php if ($this->session->userdata('login_status') == '1') : ?>
      <!-- Topbar Navbar -->
      <ul class="navbar-nav ml-auto">

        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
        <li class="nav-item dropdown no-arrow d-sm-none">
          <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-search fa-fw"></i>
          </a>
          <!-- Dropdown - Messages -->
          <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
            <form class="form-inline mr-auto w-100 navbar-search">
              <div class="input-group">
                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                  <button class="btn btn-primary" type="button">
                    <i class="fas fa-search fa-sm"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </li>

        <!-- Nav Item - Alerts -->
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-bell fa-fw"></i>
            <!-- Counter - Alerts -->
            <!-- <span class="badge badge-danger badge-counter">3+</span> -->
          </a>
          <!-- Dropdown - Alerts -->
          <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
            <h6 class="dropdown-header">
              Thông báo
            </h6>
            <a class="dropdown-item d-flex align-items-center" href="#">
              <div class="mr-3">
                <div class="icon-circle bg-primary">
                  <i class="fas fa-file-alt text-white"></i>
                </div>
              </div>
              <div>
                <div class="small text-gray-500">14/04/2021</div>
                <span class="font-weight-bold">Chưa có thông báo mới!</span>
              </div>
            </a>
            <a class="dropdown-item text-center small text-gray-500" href="#">Xem tất cả thông báo</a>
          </div>
        </li>

        <!-- Nav Item - Messages -->
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-envelope fa-fw"></i>
            <!-- Counter - Messages -->
            <!-- <span class="badge badge-danger badge-counter">7</span> -->
          </a>
          <!-- Dropdown - Messages -->
          <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
            <h6 class="dropdown-header">
              Message Center
            </h6>
            <a class="dropdown-item d-flex align-items-center" href="#">
              <div class="dropdown-list-image mr-3">
                <!-- <div class="status-indicator bg-success"></div> -->
              </div>
              <div class="font-weight-bold">
                <div class="text-truncate">Chưa có thông báo mới!</div>
                <!-- <div class="small text-gray-500">Emily Fowler · 58m</div> -->
              </div>
            </a>
            <a class="dropdown-item text-center small text-gray-500" href="#">Xem tất cả tin nhắn</a>
          </div>
        </li>

        <div class="topbar-divider d-none d-sm-block"></div>

        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="mr-2 d-none d-lg-inline text-white small"><?php echo $this->session->userdata('name'); ?></span>
            <img class="img-profile rounded-circle" src="<?php echo $this->common_model->get_img('user', $this->session->userdata('user_id')) . '?' . time(); ?>">
          </a>
          <!-- Dropdown - User Information -->
          <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="<?php echo base_url(); ?>login/manage_profile">
              <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
              Thông tin cá nhân
            </a>
            <a class="dropdown-item" href="<?php echo base_url(); ?>login/manage_profile">
              <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
              Thay đổi mật khẩu
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="javascript:void(0)" data-toggle="modal" data-target="#logoutModal">
              <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
              Logout
            </a>
          </div>
        </li>

      </ul>

    </nav>
    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="/login/logout">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
  </div>
  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image">
              </div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <a href="<?php echo base_url(); ?>">
                      <img src="<?php echo base_url('uploads/system_logo/' . get_app_config("logo")); ?>"></a><br>
                    <a href="<?php echo base_url(); ?>">
                      <h1 class="h4 text-gray-900 mb-4"><?php echo get_app_config("app_name") ?> - Tham gia cuộc họp</h1>
                    </a>
                  </div>
                  <!-- error/success message -->
                  <?php if ($this->session->flashdata('success') != '') : ?>
                    <div class="alert alert-success alert-dismissable">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                        ×
                      </button>
                      <?php echo $this->session->flashdata('success'); ?>
                    </div>
                  <?php endif; ?>
                  <?php if ($this->session->flashdata('error') != '') : ?>
                    <div class="alert alert-danger alert-dismissable">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                        ×
                      </button>
                      <?php echo $this->session->flashdata('error'); ?>
                    </div>
                  <?php endif; ?>
                  <!-- error/success message End-->
                  <?php if ($check_availability_to_host_meeting && $check_availability_to_join_meeting) : ?>
                    <ul class="nav nav-pills mb-4" id="pills-tab" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link link-left active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Tham gia cuộc họp</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link link-right" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Tổ chức cuộc họp</a>
                      </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                      <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <form class="user" action="<?php echo base_url('room/join'); ?>" method="post">
                          <div class="form-group">
                            <input type="text" name="meeting_code" class="form-control form-control-user" id="" aria-describedby="" placeholder="Nhập ID cuộc họp">
                          </div>
                          <button type="submit" class="btn btn-primary btn-user btn-block">Tham gia ngay</button>
                        </form>
                      </div>
                      <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <form class="user" action="<?php echo base_url('room/create-and-join'); ?>" method="post">
                          <div class="form-group">
                            <input type="text" name="meeting_title" value="" class="form-control form-control-user" id="" aria-describedby="" placeholder="Nhập tiêu đề cuộc họp (tùy chọn)">
                          </div>
                          <div class="form-group">
                            <input type="text" name="meeting_code" value="<?php echo $meeting_code; ?>" required class="form-control form-control-user" id="" aria-describedby="" placeholder="Nhập ID cuộc họp">
                            <div class="my-2"></div>
                            <?php if ($addthis_enable == "true") : ?>
                              <!-- Go to www.addthis.com/dashboard to customize your tools -->
                              <div class="addthis_inline_share_toolbox_f6vn"></div>
                            <?php endif; ?>
                          </div>
                          <button type="submit" class="btn btn-primary btn-user btn-block">Tạo &amp; Tham gia ngay</button>
                        </form>
                      </div>
                    </div>
                  <?php elseif ($check_availability_to_join_meeting) : ?>
                    <form class="user" action="<?php echo base_url('room/join'); ?>" method="post">
                      <div class="form-group">
                        <input type="text" name="meeting_code" class="form-control form-control-user" id="" aria-describedby="" placeholder="Enter Meeting ID">
                      </div>
                      <button type="submit" class="btn btn-primary btn-user btn-block">Join Now</button>
                    </form>
                  <?php else : ?>
                    <div class="text-center">
                      <div class="alert alert-warning">Vui lòng đăng nhập để sử dụng.</div>
                      <a class="small" href="<?php echo base_url('login'); ?>">Đăng nhập</a> |
                      <a class="small" href="<?php echo base_url('signup'); ?>">Đăng ký</a>
                    </div>
                  <?php endif; ?>
                  <?php if ($this->session->userdata('login_status') != '1') : ?>
                    <hr>
                    <div class="text-center">
                      <a class="small" href="<?php echo base_url('login'); ?>">Đăng nhập</a> |
                      <a class="small" href="<?php echo base_url('signup'); ?>">Đăng ký</a>
                    </div>
                    <?php if ($this->session->userdata('login_type') == "admin") : ?>
                      <hr>
                      <div class="text-center">
                        <a class="small" href="<?php echo base_url('admin/dashboard'); ?>">Quay lại Trang tổng quan</a>
                      </div>
                  <?php endif;
                  endif; ?>
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
  <?php if ($addthis_enable == "true") : ?>
    <script type="text/javascript">
      var addthis_share = {
        url: "<?php echo base_url("room/" . $meeting_code); ?>",
        title: "Create and join a meeting - <?php echo $app_name; ?>",
        description: "THE DESCRIPTION",
        media: "<?php echo $og_image; ?>"
      }
    </script>
  <?php endif; ?>

</body>

</html>