<?php
$app_name       = get_app_config("app_name");
$app_mode       = get_app_config("app_mode");
$og_image       = base_url('uploads/' . get_app_config('og_image'));
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
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><?php echo $page_title; ?></h6>
          </div>
          <div class="card-body">
            <?php foreach ($profile_info as $row) : ?>
              <?php echo form_open(base_url() . 'login/profile/update/', array('class' => 'form-horizontal group-border-dashed', 'enctype' => 'multipart/form-data')); ?>
              <!-- panel  -->
              <div class="row">
                <div class="col-md-12">
                  <div class="profile-info-name text-center col-sm-6"> <img id="profile_image" src="<?php echo $this->common_model->get_img('user', $row['user_id']) . '?' . time(); ?>" class="thumb-lg img-circle img-thumbnail" alt="<?php echo $row['name']; ?>_photo">
                    <h4 class="m-b-5"><b><?php echo $row['name']; ?></b></h4>
                  </div>
                  <br>
                  <div class="form-group">
                    <label class="control-label col-sm-3">Change Photo</label>
                    <div class="col-sm-6">
                      <input type="file" onchange="showImg(this);" name="photo" class="filestyle" data-input="false" accept="image/*">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Name</label>
                    <div class="col-sm-6">
                      <input type="text" value="<?php echo $row['name']; ?>" name="name" class="form-control" required placeholder="Enter Name" />
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-6">
                      <input type="email" value="<?php echo $row['email']; ?>" name="email" class="form-control" required placeholder="Enter email" />
                    </div>
                  </div>
                  <div class="col-sm-offset-3 col-sm-9 m-t-15">
                    <button type="submit" class="btn btn-primary"><span class="btn-label"><i class="fa fa-refresh"></i></span>Update </button>
                  </div>
                  </form>
                </div>
              <?php endforeach; ?>
              </div>
          </div>
        </div>
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Change Password</h6>
          </div>
          <div class="card-body">
            <?php echo form_open(base_url() . 'login/profile/change_password/', array('class' => 'form-horizontal group-border-dashed', 'enctype' => 'multipart/form-data')); ?>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label class="col-sm-3 control-label">Current Password</label>
                  <div class="col-sm-6">
                    <input type="password" name="password" class="form-control" required placeholder="Enter current password" />
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">New Password</label>
                  <div class="col-sm-6">
                    <input type="password" id="new_password" name="new_password" class="form-control" required placeholder="Enter new password" />
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Retype New Password</label>
                  <div class="col-sm-6">
                    <input type="password" data-parsley-equalto="#new_password" name="retype_new_password" class="form-control" required placeholder="Enter new password" />
                  </div>
                </div>
                <div class="col-sm-offset-3 col-sm-9 m-t-15">
                  <button type="submit" class="btn btn-primary"><span class="btn-label"><i class="fa fa-refresh"></i></span> Change Now</button>
                </div>

                <?php echo form_close(); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/parsleyjs/dist/parsley.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $('form').parsley();
  });
</script>

<!-- file select-->
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap-filestyle/src/bootstrap-filestyle.min.js" type="text/javascript"></script>
<!-- file select-->

<!--instant image dispaly-->
<script type="text/javascript">
  function showImg(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
        $('#profile_image')
          .attr('src', e.target.result)
      };
      reader.readAsDataURL(input.files[0]);
    }
  }
</script>
<!--end instant image dispaly-->

</html>