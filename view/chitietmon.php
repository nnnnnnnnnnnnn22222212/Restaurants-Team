<div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Chi tiết món</h1>
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
        <div class="main">
            <div class="now">
                <?php
                extract($onemon);
                    $hinh=$img_path.$hinh;    
                    echo'
                    <div class="img">
                    <img src="'.$hinh.'" width="750px" height=370px"></br>
                    </div>
                    <div class="tx"> 
                        <h1>Tên món: '.$tenmon.'</h1>
                        <span>Giá: '.$gia.' vnđ</span>
                        <p>Mô tả: '.$mota.'</p>   
                    </div>';
                ?>
            </div>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
            <script>
                $(document).ready(function(){
                    $("#binhluan").load("view/binhluan/binhluanform.php",{idpro:<?=$idmon?>});
                });
            </script>
            <div class="cmt" id="binhluan">
                
            </div>
            <!-- <div class="cmt">
                
                <form action="" class="tong">
                 
                </form>
                <div class="aaa">
                    <input type="text"  placeholder="Mô Tả">
                    <input type="submit" value="Gửi">
                </div> -->
            </div> -->
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