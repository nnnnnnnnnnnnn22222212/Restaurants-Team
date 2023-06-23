<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Restaurant</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="view/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="view/lib/animate/animate.min.css" rel="stylesheet">
    <link href="view/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="view/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="view/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="view/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="view/css/dangnhap.css">
    <link rel="stylesheet" href="view/css/dangky.css">
    <link rel="stylesheet" href="view/css/chitiet.css">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div> -->
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="index.php?act=home" class="navbar-brand p-0">
                    <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>Restorant</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="index.php?act=home" class="nav-item nav-link active">TRANG CHỦ</a>
                        <a href="index.php?act=gioithieu" class="nav-item nav-link">GIỚI THIỆU</a>
                        <a href="index.php?act=dichvu" class="nav-item nav-link">DỊCH VỤ</a>
                        <a href="index.php?act=thucdon" class="nav-item nav-link">THỰC ĐƠN</a>
                        <div class="nav-item dropdown">
                            <a href="index.php?act=index" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">TRANG</a>
                            <div class="dropdown-menu m-0">
                                <a href="index.php?act=danhsachban" class="dropdown-item">DANH SÁCH BÀN</a>
                                <a href="index.php?act=doingu" class="dropdown-item">ĐỘI NGŨ</a>
                                <a href="index.php?act=danhgia" class="dropdown-item">BÌNH LUẬN</a>
                            </div>
                        </div>
                        <a href="index.php?act=dangnhap" class="nav-item nav-link">ĐĂNG NHẬP</a>
                    </div>
                    <a href="index.php?act=datban" class="btn btn-primary py-2 px-4">ĐẶT BÀN</a>
                </div>
            </nav>