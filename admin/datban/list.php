
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <form action="#" method="post">
              <div class="row mb10 frmdsloai">
                <h1>QUẢN LÝ ĐẶT BÀN</h1>
                  <table>
                      <tr>
                        <th></th>
                          <th>TÊN NGƯỜI ĐẶT</th>
                          <th>EMAIL</th>
                          <th>LOẠI BÀN</th>
                          <th>THỜI GIAN</th>
                          <th>YÊU CẦU</th>
                      </tr>
                      <?php 
                        $sql = "SELECT * FROM datban";
                        $query = pdo_query($sql);
                        foreach($query as $item):

                      ?>
                      <tbody>
                        <td><input type="checkbox" name="" id=""></td>
                        <td><?=$item['name'] ?></td>
                        <td><?=$item['email'] ?></td>
                        <td><?=$item['idban'] ?></td>
                        <td><?=$item['date'] ?></td>
                        <td><?=$item['yeucau'] ?></td>
                        
                      </tbody>
                      <?php endforeach;
                      ?>
                     
                  </table>
              </div>
              <div class="row mb10">
                  <input type="button" value="Chọn tất cả">
                  <input type="button" value="Bỏ chọn tất cả">
                  <input type="button" value="Xóa các mục chọn">
              </div>
          </form>   
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->

          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>