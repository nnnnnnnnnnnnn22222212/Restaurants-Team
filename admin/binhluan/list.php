<article>
    <div class="main-panel">
          <div class="content-wrapper">
            <form action="#" method="post">
              <div class="row mb10 frmdsloai">
                <h1>QUẢN LÝ BÌNH LUẬN</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Id</th>
                        <th>Nội dung</th>
                        <th>Iduser</th>
                        <th>idpro</th>
                        <th>Ngày bình luận</th>
                        <th>hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($lstbinhluan as $binhluan) {
                            extract($binhluan);
                            $suabl = "index.php?act=suabl&id=".$id;
                            $xoabl = "index.php?act=xoabl&id=".$id;

                            echo '
                                    <tr>
                                        <td><input type="checkbox" name="" id=""></td>
                                        <td>'.$id.'</td>                                
                                        <td>'.$noidung.'</td>
                                        <td>'.$iduser.'</td>
                                        <td>'.$idpro.'</td>
                                        <td>'.$ngaybinhluan.'</td>
                                        <td>
                                           
                                            <a href="'.$xoabl.'"><input type="button" value="Xoá"></a>
                                        </td>
                                    </tr>';
                        }
                    ?>
                
                </tbody>
            </table>
                    </form>
            <div>
                <input type="button" value="Chọn tất cả">
                <input type="button" value="Bỏ tất cả">
                <input type="button" value="Xoá các mục đã chọn">
            </div>
        
    </div>
</article>