<article>
            <div class="headline">
                <h2>QUẢN LÝ TÀI KHOẢN</h2>
            </div>
            <div row mb10 frmdsloai>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Mã Tk </th>
                        <th>Tên đăng nhập</th>
                        <th>MậT khẩu</th>
                        <th>Email</th>
                        <th>Địa chỉ</th>
                        <th>Điện thoại</th>
                        <th>Vai trò</th>
                        <th>hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($lsttaikhoan as $taikhoan) {
                            extract($taikhoan);
                            $suatk = "index.php?act=suatk&id=".$id;
                            $xoatk = "index.php?act=xoatk&id=".$id;

                            echo '
                                    <tr>
                                        <td><input type="checkbox" name="" id=""></td>
                                        <td>'.$id.'</td>                                
                                        <td>'.$user.'</td>
                                        <td>'.$pass.'</td>
                                        <td>'.$email.'</td>
                                        <td>'.$adress.'</td>
                                        <td>'.$tel.'</td>
                                        <td>'.$role.'</td>
                                        <td>
                                            <a href="'.$suatk.'"><input type="button" value="Sửa"></a> <br>
                                            <a href="'.$xoatk.'"><input type="button" value="Xoá"></a>
                                        </td>
                                    </tr>';
                        }
                    ?>
                </tbody>
            </table>
            </div>
            <div>
                <input type="button" value="Chọn tất cả">
                <input type="button" value="Bỏ tất cả">
                <input type="button" value="Xoá các mục đã chọn">
                <a href="index.php?act=addtk"><input type="button" value="Nhập thêm"></a>
            </div>
        </article>
    </div>