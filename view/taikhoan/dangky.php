<div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">ĐĂNG KÝ THÔNG TIN</h1>
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
            <form action="index.php?act=dangky" method="post">
                <div class="container">
                <label for="tendk"><b>Tên Đăng Ký</b></label>
                <input type="text" placeholder="Nhập Tên" name="user" required>
                <label for="psw"><b>Mật Khẩu</b></label>
                <input type="password" placeholder="Nhập Mật Khẩu" name="pass" required>
                <label for="email"><b>Email</b></label>
                <input type="email" placeholder="Nhập email của bạn" name="email" required>
                
                </div>
                <input type="submit" name="dangky" value="Đăng ký" >
                <input type="reset" value="Nhập lại">
            </form>
            <h2 class="thongbao">
            <?php
                if (isset($thongbao)&&($thongbao!="")) echo $thongbao;
            ?>
            </h2>
        </div>

