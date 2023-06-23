<?php

    function add_binhluan($noidung, $iduser,$idpro,$ngaybinhluan) {
        $sql = "INSERT INTO binhluan(noidung,iduser,idpro,ngaybinhluan) values('$noidung','$iduser','$idpro','$ngaybinhluan')";
        pdo_execute($sql);
    }
    function loadAll_binhluan($idpro) {
        $sql = "SELECT * FROM binhluan WHERE 1";
        if($idpro>0)
        $sql.=" AND idpro='".$idpro."'";
        $sql.=" ORDER BY id desc";
        $lstbinhluan = pdo_query($sql);
        return $lstbinhluan;
    }
    
?>