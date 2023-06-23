
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <form action="index.php?act=addmon" method="post" class="form-qlb" enctype="multipart/form-data>
              <div class="tong">
                      <label><b>MÃ MÓN</b></label> 
                      <input type="text" class="label" name="idmon" readonly placeholder="auto number" disabled> <br>
                      <label><b>TÊN MÓN</b></label> 
                      <input type="text" class="label" name="tenmon"> <br>
                      <label><b>ẢNH</b></label>
                      <input type="file" class="label" name="hinh"><br>
                      <label><b>GIÁ</b> </label>
                      <input type="text" class="label" name="gia"><br>
                      <label><b>MÔ TẢ</b></label>
                      <input type="text" class="label" name="mota"><br>
               
                    <input type="submit" name="themmoi" value="Thêm mới">
                    <input type="reset"  value="Nhập lại">
                    <a href="index.php?act=listmon"><input type="button" value="Danh sách món"></a>
              </div>
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