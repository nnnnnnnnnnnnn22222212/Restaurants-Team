<?php
    if (is_array($ban)) {
        extract($ban);
    }
    $hinhpath = "../upload/".$hinh;
    if (is_file($hinhpath)) {
        $hinh = "<img src='".$hinhpath."' width='123' height='80' >";
    }else {
        $hinh ="no photo";
    }
?>
<div class="main-panel">
          <div class="content-wrapper">
            <form action="index.php?act=updateban" method="post" class="form-qlb" enctype="multipart/form-data">
              <div class="tong">
                <label ><b>LOẠI BÀN</b></label>
                <input type="text" class="label" name="tenban" value="<?=$tenban?>"><br>
                <!-- <select class="aaa">
                        <option>BÀN THƯỜNG</option>
                        <option>BÀN GIA ĐÌNH</option>
                        <option>BÀN VIP</option>
                </select> <br> -->
                <label ><b>MÃ BÀN</b> </label>
                <input type="text" class="label" name="idban" readonly placeholder="auto number" disabled> <br>
                <label><b> ẢNH</b></label>
                <input type="file" class="label" name="hinh" value="<?=$hinh?>"><br>
                <label ><b>MÔ TẢ</b> </label>
                <input type="text" class="label" name="mota" value="<?=$mota?>"><br>
                <label ><b>GIÁ</b> </label>
                <input type="text" class="label" name="gia" value="<?=$gia?>"><br>
                <label ><b>TRẠNG THÁI</b> </label> 
                <input type="text" class="label" name="trangthai" value="<?=$trangthai?>"><br>
                <!-- <select class="aaa">
                    <option>ĐANG SỬ DỤNG</option>
                    <option>TRỐNG</option>  
                </select> <br> -->
                <input type="hidden" name="id" value="<?php if (isset($id)&&($id>0)) echo $id; ?>">
                <input type="submit" name="capnhat" value="Cập nhật">
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