<?php
    if (is_array($tk)) {
        extract($tk);
    }
?>
<article>
            <div class="headline">
                <h2>CẬP NHẬT TÀI KHOẢN</h2>
            </div>
            <form action="index.php?act=updatetk" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="">Mã tk</label> <br>
                            <input class="form-control" type="text" name="matk" readonly placeholder="auto number"
                                disabled>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">Tên tài khoản</label> <br>
                            <input class="form-control" type="text" name="user" value = "<?php if (isset($user)&&($user != "")) echo $user ;?>">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">Pass</label>
                            <input class="form-control" type="password" name="pass" value="<?=$pass?>"">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">Email</label>
                            <input class="form-control" type="email" name="email" value="<?=$email?>">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">Địa chỉ</label>
                            <input type="text" name="adress" value="<?=$adress?>">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">Điện thoại</label>
                            <input type="text" name="tel" value="<?=$tel?>">
                        </div>
                    </div>
                </div>
                <input type="hidden" name="id" value="<?php if (isset($id)&&($id>0)) echo $id; ?>">
                <input type="submit" name="capnhat" value="Cập nhật">
                <input type="reset"  value="Nhập lại">
                <a href="index.php?act=dskh"><input type="button" value="Danh sách tài khoản"></a>
            </form>
            <?php
            if (isset($thongbao)&&($thongbao!="")) echo $thongbao;
            ?>
        </article>
    </div>