<?php

    function add_uudai($idud,$mota,$hinh,$soluong,$trangthai) {
        $sql = "INSERT INTO uudai(idud,mota,hinh,soluong,trangthai) values('$idud','$mota','$hinh','$soluong','$trangthai')";
        pdo_execute($sql);
    }
    function delete_uudai($idud) {
        $sql = "DELETE FROM uudai WHERE idud=".$_GET['idud'];
        pdo_execute($sql);
    }
    function loadAll_uudai() {
        $sql = "SELECT * FROM uudai ORDER BY idud desc";
        $lstud = pdo_query($sql);
        return $lstud;
    }
    function update_uudai($idud,$mota,$hinh,$soluong,$trangthai) {
        if ($hinh!="") {
            $sql = "UPDATE uudai SET mota='".$mota."', hinh='".$hinh."',soluong='".$soluong."',trangthai='".$trangthai."' WHERE idud=".$idud;
        }else{
            $sql = "UPDATE loaiban SET mota='".$mota."',soluong='".$soluong."',trangthai='".$trangthai."' WHERE idud=".$idud;
        }
        pdo_execute($sql);
    }
?>