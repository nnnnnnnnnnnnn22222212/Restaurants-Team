
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <form action="" method="post" class="form-qlb">
              <div class="tong">
          
                      <label><b>MÃ ƯU ĐÃI </b></label> 
                      <input type="text" class="label" name="idud" > <br>
                      <label><b>MÔ TẢ</b></label> 
                      <input type="text" class="label" name="mota"> <br>
                      <label><b>ẢNH</b></label>
                      <input type="file" class="label" name="hinh"><br>
                      <label><b>SỐ LƯỢNG</b> </label>
                      <input type="text" class="label" name="soluong"><br>
                      <label><b>TRẠNG THÁI</b></label>
                      <input type="text" class="label" name="trangthai"><br>
               
                    <input type="submit" name="themmoi" value="Thêm mới">
                    <input type="reset"  value="Nhập lại">
                    <a href="index.php?act=listud"><input type="button" value="Danh sách ưu đãi"></a>
            </form>
            <?php
            if (isset($thongbao)&&($thongbao!="")) echo $thongbao;
            ?>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->

          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>