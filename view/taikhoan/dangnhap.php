<div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">ĐĂNG NHẬP THÔNG TIN</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">TRANG</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">THÔNG TIN</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Contact Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="dangnhap">
                    <?php
                        if(isset($_SESSION['user'])){
                            extract($_SESSION['user']);
                    ?>
                        <div class="row">
                            Xin chào <br>
                            <?=$user?>
                        </div>
                        <div class="row">
                            <li>
                                <a href="index.php?act=quenmk">Quên mật khẩu</a>
                            </li>
                            <li>
                                <a href="index.php?act=edit_taikhoan">CậP nhật tài khoản</a>
                            </li>
                            <?php if ($role==1) {?>
                            <li>
                                <a href="admin/index.php">Đăng nhập Admin</a>
                            </li>
                            <?php }?>
                            <li>
                                <a href="index.php?act=thoat">Thoát</a>
                            </li>
                        </div>
                    <?php
                        }else{
                    ?>
                    <form action="index.php?act=dangnhap" class="form-login" method="post">
                        <h1 class="tenn">Đăng Nhập</h1>
                        <div class="form">
                            <i class="tk"></i>
                            <input type="text" name="user" class="dangnhap1" placeholder="Tên đăng nhập">
                        </div>
                        <div class="form">
                            <i class="key"></i>
                            <input type="password" name="pass" class="dangnhap1" placeholder="Mật khẩu">
                            <!-- <div id="eye">
                                <i class="far fa-eye"></i>
                            </div> -->
                        </div>
                        <input type="submit" name="dangnhap" value="Đăng nhập" class="form-submit">
                        <input type="checkbox" value="Ghi nhớ tài khoản" class="form-submit">
                            <!-- <input type="submit" value="Đăng ký" class="form-submit">  -->
                            <li><a href="index.php?act=dangky">Đăng ký</a></li>
                            <li><a href="index.php?act=quenmk">Quên mật khẩu</a></li>

                    </form>
                    <?php }?>
                </div>
                <?php
                if (isset($thongbao)&&($thongbao!="")) echo $thongbao;
            ?>
            </div>
        </div>
        <!-- Contact End -->
        