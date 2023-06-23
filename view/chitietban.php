<style>
/* ----- Product Section ----- */
    .product {
    display: grid;
    grid-template-columns: 0.9fr 1fr;
    margin: auto;
    padding: 2.5em 0;
    min-width: 600px;
    background-color: white;
    border-radius: 5px;
    }

    /* ----- Photo Section ----- */
    .product__photo {
    position: relative;
    }

    .photo-container {
    position: absolute;
    left: -2.5em;
    display: grid;
    grid-template-rows: 1fr;
    width: 100%;
    height: 100%;
    border-radius: 6px;
    box-shadow: 4px 4px 25px -2px rgba(0, 0, 0, 0.3);
    }


    .controls {
    display: flex;
    justify-content: space-between;
    padding: 0.8em;
    color: #fff;

    }


    i {
    cursor: pointer;
    color: red;
    }
    .photo-album {
    padding: 0.7em 1em;
    border-radius: 0 0 6px 6px;
    background-color: #fff;

    }
    .photo-album ul {
    display: flex;
    justify-content: space-around;
    }

    .photo-album li {
    float: left;
    width: 55px;
    height: 55px;
    padding: 7px;
    border: 1px solid color-secondary;
    border-radius: 3px;
    }

    /* ----- Informations Section ----- */
    .product__info {
    padding: 0.8em 0;
    }

    .title h1 {
    margin-bottom: 0.1em;
    color: color-primary;
    font-size: 1.5em;
    font-weight: 900;
    }

    .title span {
    font-size: 0.7em;
    color: color-secondary;
    }


    .price {
    margin: 1.5em 0;
    color: color-highlight;
    font-size: 1.2em;

    }
    .price span {
    padding-left: 0.15em;
    font-size: 2.9em;
    color: red;
    }
    .variant {
    overflow: auto;


    }
    .variant h3 {
    margin-bottom: 1.1em;
    }
    .variant li {
    float: left;
    width: 35px;
    height: 35px;
    padding: 3px;
    border: 1px solid transparent;
    border-radius: 3px;
    cursor: pointer;
    }

    .variant li:not(:first-child) {
    margin-left: 0.1em;
    }
    .description {
    clear: left;
    margin: 2em 0;


    }
    .description .trangthai span{
    color: red;
    }
    .description h3 {
    margin-bottom: 1em;
    }

    .description ul {
    font-size: 0.8em;
    list-style: disc;
    margin-left: 1em;
    }

    .description li {
    text-indent: -0.6em;
    margin-bottom: 0.5em;
    }

    .buy--btn {
    padding: 1.5em 3.1em;
    border: none;
    border-radius: 7px;
    font-size: 0.8em;
    font-weight: 700;
    letter-spacing: 1.3px;
    color: #fff;
    background-color: rgb(179, 35, 54);
    box-shadow: 2px 2px 25px -7px color-primary;
    cursor: pointer;


    }
    .buy--btn:active {
    transform: scale(0.97);
    }
    .photo-main img{
      width:100%;
    }
    /* ----- Footer Section ----- */
    footer {
    padding: 1em;
    text-align: center;
    color: #fff;

    }
    footer a {
    color: color-primary;


    }
    footer a:hover {
    color: color-highlight;
    }
    </style>
<div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Chi tiết bàn</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                            <li class="breadcrumb-item"><a href="#">Các trang</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Chi tiết bàn</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Team Start -->
        <div class="container-xxl pt-5 pb-3">
            <div class="container">
                <section class="product">
                    <div class="product__photo">
                      <div class="photo-container">
                        <div class="photo-main">
                          <div class="controls">
                            <i class="material-icons"><?= $tenban ?></i>
                          </div>
                          <img src="<?=$img_path.$hinh?> " alt="green apple slice">
                        </div>
                      </div>
                    </div>
                    <div class="product__info">
                      <div class="title">
                        <h1>Thông tin chi tiết</h1>
                        <span>Mã bàn: <?= $idban ?></span>
                      </div>
                      <h1>GIÁ:</h1>
                      <div class="price">
                         <span><?= $gia?> vnđ</span>
                      </div>
                      <div class="description">
                        <h3>MÔ TẢ</h3>
                        <ul>
                            <li>Mô tả: <?= $mota ?></li>
                        
                           
                            <li class="trangthai">Trạng thái: <span><?= $trangthai ?></span></li>
                        </ul>
                      </div>
                      <a href="index.php?act=datban"><button class="buy--btn">Đặt Ngay</button></a>
                    </div>
                  </section>
            </div>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
            <script>
                $(document).ready(function(){
                    $("#binhluan").load("view/binhluan/binhluanform.php",{idpro:<?=$idban?>});
                });
            </script>
            <div class="cmt" id="binhluan">
                
            </div>
        </div>
        <!-- Team End -->