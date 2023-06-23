<?php 
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $ban = $_POST['ban'];
        $date = $_POST['date'];
        $meal= $_POST['meal'];
        $desc = $_POST['desc'];
        $sql = "INSERT INTO datban (name, id_meal, email, idban, yeucau, date) VALUES ('$name','$meal','$email','$ban', '$desc','$date')";
        pdo_query($sql);
    }
?>
<div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Đặt trước</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                            <li class="breadcrumb-item"><a href="#">Các trang</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Đặt trước</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Reservation Start -->
        <div class="container-xxl py-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
            <div class="row g-0">
                <div class="col-md-6">
                    <div class="video">
                        <button type="button" class="btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                    </div>
                </div>
                <div class="col-md-6 bg-dark d-flex align-items-center">
                    <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
                        <h5 class="section-title ff-secondary text-start text-primary fw-normal">Đặt bàn</h5>
                        <h1 class="text-white mb-4">Đặt bàn trực tuyến</h1>
                        <form action="" method="post">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" placeholder="Your Name" name="name">
                                        <label for="name">Họ và tên</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" placeholder="Your Email" name="email">
                                        <label for="email">Email</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select class="form-select" name="ban" id="select1" >
                                          <option value="">CHỌN BÀN</option>
                                          <?php
                                                $sql= "SELECT * FROM loaiban";
                                               $q = pdo_query($sql);
                                               foreach($q as $item){
                                          ?>
                                          <option value="<?=$item['idban']?>"><?=$item['tenban']?></option>
                                          <?php
                                        }
                                        ?>
                                        </select>
                                        <label for="select1">Loại bàn</label>
                                      </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select class="form-select" name="meal" id="select1" >
                                          <option value="">CHỌN BỮA</option>
                                          <?php
                                                $sql= "SELECT * FROM loaiban";
                                               $a = pdo_query($sql);
                                               foreach($a as $item){
                                          ?>
                                          <option value="<?=$item['idban']?>"><?=$item['meal']?></option>
                                          <?php
                                        }
                                        ?>
                                        </select>
                                        <label for="select1">MEAL</label>
                                      </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Special Request" name="desc" id="message" style="height: 100px"></textarea>
                                        <label for="message">Yêu cầu đặc biệt</label>
                                    </div>
                                </div>
                                <div class="form-floating date" id="date3" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input" id="datetime" placeholder="Date &amp; Time" data-target="#date3" name="date" data-toggle="datetimepicker">
                                        <label for="datetime">Date &amp; Time</label>
                                   
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" name="submit" type="submit">Đặt ngay</button>
                                </div>
                            </div>
                        </form>
                    </div>         
                </div>
            </div>
        </div>

        <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- 16:9 aspect ratio -->
                        <div class="ratio ratio-16x9">
                            <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                                allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Reservation Start -->
        