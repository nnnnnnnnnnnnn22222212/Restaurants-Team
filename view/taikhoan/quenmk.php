<div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">QUÊN MẬT KHẨU </h1>
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
        <div class="container-xxl py-5">
            <form action="index.php?act=quenmk" method="post">
                <div class="container">
                <label for="email"><b>Email</b></label>
                <input type="email" placeholder="Nhập email của bạn" name="email" required>
                </div>
                <!-- <button type="submit" class="sigupbtn">Gửi</button> -->
                <input type="submit" name="guiemail" value="Gửi" >
                <input type="reset" value="Nhập lại">
            </form>
            <h2 class="thongbao">
            <?php
                if (isset($thongbao)&&($thongbao!="")) echo $thongbao;
            ?>
            </h2>
        </div>
