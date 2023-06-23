
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <form action="index.php?act=listmon" method="post">
              <div class="row mb10 frmdsloai">
                <h1>QUẢN LÝ THỰC ĐƠN</h1>
                  <table>
                      <tr>
                            <th>#</th>
                            <th>Mã món</th>                       
                            <th>Tên món</th>
                            <th>Ảnh</th>
                            <th>Giá</th>
                            <th>Mô tả</th>
                            <th>Hành động</th>
                      </tr>
                      <tbody>
                          <?php
                            foreach ($lstthucdon as $mon) {
                                extract($mon);
                                $suamon = "index.php?act=suamon&idmon=".$idmon;
                                $xoamon = "index.php?act=xoamon&idmon=".$idmon;
                                $hinhpath = "../upload/".$hinh;
                                if (is_file($hinhpath)) {
                                    $hinh = "<img src='".$hinhpath."' width='123' height='80' >";
                                }else {
                                    $hinh ="no photo";
                                }
                                echo '
                                        <tr>
                                            <td><input type="checkbox" name="" id=""></td>
                                            <td>'.$idmon.'</td>                                       
                                            <td>'.$tenmon.'</td>
                                            <td>'.$hinh.'</td>
                                            <td>'.$gia.' vnđ</td>
                                            <td>'.$mota.'</td>
                                            <td>
                                                <a href="'.$suamon.'"><input type="button" value="Sửa"></a>
                                                <a href="'.$xoamon.'"><input type="button" value="Xoá"></a>
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
                <a href="index.php?act=addmon"><input type="button" value="Nhập thêm"></a>
              </div>
          </form>   
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->

          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>