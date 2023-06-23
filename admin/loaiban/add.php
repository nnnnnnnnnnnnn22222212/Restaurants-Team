<div class="main-panel">
          <div class="content-wrapper">
            <form action="index.php?act=addban" method="post" class="form-qlb" enctype="multipart/form-data">
              <div class="tong">
                <label ><b>LOẠI BÀN</b></label>
                <input type="text" class="label" name="tenban"><br>
                <!-- <select class="aaa">
                        <option>BÀN THƯỜNG</option>
                        <option>BÀN GIA ĐÌNH</option>
                        <option>BÀN VIP</option>
                </select> <br> -->
                <label ><b>MÃ BÀN</b> </label>
                <input type="text" class="label" name="idban" readonly placeholder="auto number" disabled><br>
                <label><b> ẢNH</b></label>
                <input type="file" class="label" name="hinh"><br>
                <label ><b>MÔ TẢ</b> </label>
                <input type="text" class="label" name="mota"><br>
                <label ><b>GIÁ</b> </label>
                <input type="text" class="label" name="gia"><br>
                <label ><b>TRẠNG THÁI</b> </label> 
                <input type="text" class="label" name="trangthai"><br>
                <!-- <select class="aaa">
                    <option>ĐANG SỬ DỤNG</option>
                    <option>TRỐNG</option>  
                </select> <br> -->
                <input type="submit" name="themmoi" value="Thêm mới">
                <input type="reset"  value="Nhập lại">
                <a href="index.php?act=listban"><input type="button" value="Danh sách bàn"></a>
                </form> 
                    <?php
                        if (isset($thongbao)&&($thongbao!="")) echo $thongbao;
                    ?>
                </form>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->

          <!-- partial -->
        </div>