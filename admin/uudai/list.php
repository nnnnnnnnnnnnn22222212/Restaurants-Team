        <!-- partial -->
        <div class="main-panel">
    <div class="content-wrapper">
            <form action="" method="post">
              <div class="row mb10 frmdsloai">
                <h1>QUẢN LÝ ƯU ĐÃI</h1>
                  <table>
                      <tr>
                          <th>#</th>
                          <th>MÃ GIẢM GIÁ</th>
                          <th>MÔ TẢ</th>
                          <th>HÌNH</th>
                          <th>SỐ LƯỢNG</th>
                          <th>TRẠNG THÁI</th>
                      </tr>
                      <tbody>
                      <?php
                        foreach ($lstud as $uudai) {
                            extract($uudai);
                            $suaud = "index.php?act=suabl&idud=".$idud;
                            $xoaud = "index.php?act=xoabl&idud=".$idud;
                            $hinhpath = "../upload/".$hinh;
                                if (is_file($hinhpath)) {
                                    $hinh = "<img src='".$hinhpath."' width='123' height='80' >";
                                }else {
                                    $hinh ="no photo";
                                }
                            echo '
                                    <tr>
                                        <td><input type="checkbox" name="" id=""></td>
                                        <td>'.$idud.'</td>                                
                                        <td>'.$mota.'</td>
                                        <td>'.$hinh.'</td>
                                        <td>'.$soluong.'</td>
                                        <td>'.$trangthai.'</td>
                                        <td>
                                            <a href="'.$suaud.'"><input type="button" value="Sửa"></a>
                                            <a href="'.$xoaud.'"><input type="button" value="Xoá"></a>
                                        </td>
                                    </tr>';
                        }
                    ?>
                      </tbody>
                      
                  </table>
              </div>
              <div class="row mb10">
                <a href="index.php?act=addud"><input type="button" value="Nhập thêm ưu đãi"></a>
              </div>
          </form>   
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->

          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>