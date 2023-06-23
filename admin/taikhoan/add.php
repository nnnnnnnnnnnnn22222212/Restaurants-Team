
<article>
            <div class="headline">
                <h2>CẬP NHẬT TÀI KHOẢN</h2>
            </div>
            <form action="index.php?act=addtk" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="">Mã tk</label> <br>
                            <input class="label" type="text" name="matk" readonly placeholder="auto number"
                                disabled>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">Tên tài khoản</label> <br>
                            <input class="label" type="text" name="user" value = "<?php if (isset($user)&&($user != "")) echo $user ;?>">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">Pass</label>
                            <input class="label" type="password" name="pass" value="<?=$pass?>"">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">Email</label>
                            <input class="label" type="email" name="email" value="<?=$email?>">
                        </div>
                    </div>
                </div>
                <input type="submit" name="themmoi" value="Thêm mới">
                <input type="reset"  value="Nhập lại">
                <a href="index.php?act=dskh"><input type="button" value="Danh sách"></a>
            </form>
            <?php
            if (isset($thongbao)&&($thongbao!="")) echo $thongbao;
            ?>
        </article>
    </div>