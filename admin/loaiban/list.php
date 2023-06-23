
 <!-- partial -->
 <div class="main-panel">
          <div class="content-wrapper">
            <form action="#" method="post">
              <div class="row mb10 frmdsloai">
                <h1>QUẢN LÝ BÀN</h1>
                  <table class="table">
                      <tr>
                          <th>#</th>
                          <th>MÃ BÀN</th>
                          <th>LOẠI BÀN</th>
                          <th>ẢNH</th>
                          <th>MÔ TẢ</th>
                          <th>GIÁ</th>
                          <th>TRẠNG THÁI</th>
                          <th>MEAL</th>
                      </tr>
                      <?php
                        foreach ($lstban as $ban) {
                            extract($ban);
                            $suaban = "index.php?act=suaban&idban=".$idban;
                            $xoaban = "index.php?act=xoaban&idban=".$idban;
                            $hinhpath = "../upload/".$hinh;
                            if (is_file($hinhpath)) {
                                $hinh = "<img src='".$hinhpath."' width='123' height='80'>";
                            }else {
                                $hinh ="no photo";
                            }
                            echo '
                                    <tr>
                                        <td><input type="checkbox" name="" id=""></td>
                                        <td>'.$idban.'</td>                                
                                        <td>'.$tenban.'</td>
                                        <td>'.$hinh.'</td>
                                        <td>'.$mota.'</td>
                                        <td>'.$gia.'</td>
                                        <td>'.$trangthai.'</td>
                                        <td>'.$meal.'</td>
                                        <td>
                                            <a href="'.$suaban.'"><input type="button" value="Sửa"></a> <br>
                                            <a href="'.$xoaban.'"><input type="button" value="Xoá"></a>
                                        </td>
                                    </tr>';
                        }
                    ?>
                  </table>
              </div>
              <div class="row mb10">
                <input type="button" value="Chọn tất cả">
                <input type="button" value="Bỏ tất cả">
                <input type="button" value="Xoá các mục đã chọn">
                <a href="index.php?act=addban"><input type="button" value="Nhập thêm"></a>

            </div>
          </form>   
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->

          <!-- partial -->
        </div>