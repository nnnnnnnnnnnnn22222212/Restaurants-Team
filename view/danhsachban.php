<div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container my-5 py-5">
                    <div class="row align-items-center g-5">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="display-3 text-white animated slideInLeft">TẬN HƯỞNG BỮA ĂN NGON<br>CỦA CHÚNG TÔI</h1>
                            <p class="text-white animated slideInLeft mb-4 pb-2">BỮA ĂN GIA ĐÌNH LÀ NƠI TỤ HỌP SUM VẦY, HÃY ĐẾN NHÀ HÀNG CHÚNG TÔI ĐỂ ĐƯỢC THƯỞNG THỨC NHỮNG MÓN ĂN GIA ĐÌNH</p>
                            <a href="index.php?act=datban" class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">ĐẶT BÀN</a>
                        </div>
                        <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                            <img class="img-fluid" src="upload/hero.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Reservation Start -->
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="text-center">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Loại bàn</h5>
                    <h1 class="mb-5">Các loại bàn của chúng tôi</h1>
                </div>
                <div class="owl-carousel testimonial-carousel">
                            <?php
                                    foreach($lstban as $ban){
                                        extract($ban);
                                        $linkban = "index.php?act=chitietban&idban=".$idban;
                                        $hinh=$img_path.$hinh;
                                        echo '
                                            <div class="testimonial-item bg-transparent border rounded p-4">
                                                <a href="'.$linkban.'"><p>'.$mota.'</p></a>
                                                <div class="d-flex align-items-center">
                                                            <a href="'.$linkban.'"><p><img class="img-fluid flex-shrink-0 rounded-circle" src="'.$hinh.'" style="width: 50px; height: 50px;"></a>
                                                            <div class="ps-3">
                                                                <a href="'.$linkban.'"><h5 class="mb-1">'.$tenban.'</h5></a>
                                                                <small>'.$gia.' vnđ</small>
                                                            </div>
                                                </div>
                                            </div>';
                                    }
                                ?>
                    
                    <!-- <div class="testimonial-item bg-transparent border rounded p-4">
                        <a href="index.php?act=chitietban"><p>Bàn thường được sử dụng trong các cuộc họp phù hợp với sinh viên, học sinh có những cuộc gặp gỡ với nhau</p></a>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-1.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <a href="index.php?act=chitietban"><h5 class="mb-1">BÀN THƯỜNG</h5></a>
                                <small>100$</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded p-4">
                        <a href="index.php?act=chitietban"><p>Bàn hạng sang phù hợp với những người khá giả bàn chuyện làm ăn</p></a>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-4.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <a href="index.php?act=chitietban"><h5 class="mb-1">BÀN VIP</h5></a>
                                <small>150$</small>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        <!-- Reservation Start -->
        