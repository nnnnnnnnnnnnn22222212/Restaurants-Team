<?php
    function loadAll_thongke() {
        $sql = "SELECT danhmuc.id as madm, danhmuc.name as tendm, count(sanpham.id) as countsp, min(sanpham.price) as minprice, max(sanpham.price) as maxprice, avg(sanpham.price) as avgprice";
        $sql.=" FROM sanpham LEFT JOIN danhmuc on danhmuc.id=sanpham.iddanhmuc";
        $sql.=" GROUP BY danhmuc.id ORDER BY danhmuc.id desc";
        $lstthongke = pdo_query($sql);
        return $lstthongke;
    }

?>