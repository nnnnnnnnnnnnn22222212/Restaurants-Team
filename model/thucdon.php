<?php

    function add_thucdon($idmon,$tenmon,$gia,$hinh,$mota) {
        $sql = "INSERT INTO thucdon(tenmon,hinh,gia,mota,idmon) values('$tenmon','$gia','$hinh','$mota','$idmon')";
        pdo_execute($sql);
    }
    function delete_thucdon($idmon) {
        $sql = "DELETE FROM thucdon WHERE idmon=".$_GET['idmon'];
        pdo_execute($sql);
    }
    function loadAll_thucdon() {
        $sql = "SELECT * FROM thucdon ORDER BY idmon desc";
        $lstthucdon = pdo_query($sql);
        return $lstthucdon;
    }
    function load_one_thucdon($idmon) {
        $sql = "SELECT * FROM thucdon WHERE idmon=".$idmon;
        $mon = pdo_query_one($sql);
        return $mon;
    }
    function update_thucdon($id,$tenmon,$gia,$hinh,$mota) {
        if ($hinh!="") {
            $sql = "UPDATE thucdon SET tenmon='".$tenmon."', gia='".$gia."', hinh='".$hinh."', mota='".$mota."' WHERE id=".$id;
        }else{
            $sql = "UPDATE thucdon SET tenmon='".$tenmon."', gia='".$gia."', mota='".$mota."' WHERE id=".$id;
        }
        pdo_execute($sql);
    }
    function loadAll_thucdon_home() {
        $sql = "SELECT * FROM thucdon ORDER BY idmon DESC ";
        $lstthucdon = pdo_query($sql);
        return $lstthucdon;
    }
?>