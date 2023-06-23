<div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Thực đơn</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                            <li class="breadcrumb-item"><a href="#">Các trang</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Thực đơn</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Menu Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Thực đơn món ăn</h5>
                    <h1 class="mb-5">Các mặt hàng phổ biến nhất</h1>
                </div>
                <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                    <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill" href="#tab-1">
                                <i class="fa fa-coffee fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <small class="text-body">Nổi tiếng</small>
                                    <h6 class="mt-n1 mb-0">Bữa sáng</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-2">
                                <i class="fa fa-hamburger fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <small class="text-body">Đặc biệt</small>
                                    <h6 class="mt-n1 mb-0">Bữa trưa</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-3">
                                <i class="fa fa-utensils fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <small class="text-body">Đáng yêu</small>
                                    <h6 class="mt-n1 mb-0">Bữa tối</h6>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                                <?php
                                    foreach($lstthucdon as $mon){
                                        extract($mon);
                                        $linksp = "index.php?act=chitietmon&idmon=".$idmon;
                                        $hinh=$img_path.$hinh;
                                        echo '
                                        <div class="col-lg-6">
                                            <div class="d-flex align-items-center">
                                                <a href="'.$linksp.'"> <img class="flex-shrink-0 img-fluid rounded" src="'.$hinh.'" alt="" style="width: 80px; height: 80px;"></a>
                                                <div class="w-100 d-flex flex-column text-start ps-4">
                                                    <h5 class="d-flex justify-content-between border-bottom pb-2"> 
                                                        <a href="'.$linksp.'"><span>'.$tenmon.'</span></a>
                                                        <span class="text-primary">$'.$gia.'</span>
                                                    </h5>
                                                    <small class="fst-italic">'.$mota.'</small>
                                                </div>
                                            </div>
                                        </div>';
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Menu End -->