<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="layout/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="layout/assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="layout/assets/css/tt.css">
     <link rel="stylesheet" href="layout/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="layout/assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:../../partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a href="index.php?act=trangchuadmin"><h6>RESTAURANT ADMIN</h6></a>
        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  <img class="img-xs rounded-circle " src="assets/images/faces/face15.jpg" alt="">
                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal">ADMIN1</h5>
                  <span>Admin</span>
                </div>
              </div>
              <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
              <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-settings text-primary"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Cài đặt tài khoản</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-onepassword  text-info"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Đổi mật khẩu</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item preview-item">
                </a>
              </div>
            </div>
          </li>
          <li class="nav-item nav-category">
            <span class="nav-link">Chức năng</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="index.php?act=addban">
              <span class="menu-icon">
                <i class="mdi mdi-radiator"></i>
              </span>
              <span class="menu-title">Quản lý bàn</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="index.php?act=datban">
              <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
              </span>
              <span class="menu-title">Quản lý đặt bàn</span>
            </a>
            <!-- <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Dropdowns</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
              </ul>
            </div> -->
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="index.php?act=dskh">
              <span class="menu-icon">
                <i class="mdi mdi-account-multiple"></i>
              </span>
              <span class="menu-title">Quản lý tài khoản</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="index.php?act=listmon">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Quản lý thực đơn</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="index.php?act=thongke">
              <span class="menu-icon">
                <i class="mdi mdi-chart-bar"></i>
              </span>
              <span class="menu-title">Thống kê</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="index.php?act=listud">
              <span class="menu-icon">
                <i class="mdi mdi-currency-usd"></i>
              </span>
              <span class="menu-title">Quản lý ưu đãi</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="index.php?act=addhd">
              <span class="menu-icon">
                <i class="mdi mdi-content-paste"></i>
              </span>
              <span class="menu-title">Quản lý hóa đơn</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="index.php?act=dsbl">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title">Bình luận</span>
            </a>
          </li>
        </ul>
      </nav>