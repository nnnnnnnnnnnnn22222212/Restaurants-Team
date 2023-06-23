<?php

    function add_ban($tenban,$tenbua,$idban,$hinh,$gia,$mota,$trangthai) {
        $sql = "INSERT INTO loaiban(idban,tenban,meal,hinh,mota,gia,trangthai) values('$idban','$tenbua','$tenban','$gia','$hinh','$mota','$trangthai')";
        pdo_execute($sql);
    }
    function delete_ban($idban) {
        $sql = "DELETE FROM loaiban WHERE idban=".$_GET['idban'];
        pdo_execute($sql);
    }
    function loadAll_ban() {
        $sql = "SELECT * FROM loaiban ORDER BY idban desc";
        $lstban = pdo_query($sql);
        return $lstban;
    }
    function load_one_ban($idban) {
        $sql = "SELECT * FROM loaiban WHERE idban=".$_GET['idban'];
        $ban = pdo_query_one($sql);
        return $ban;
    }
    function update_ban($id,$tenban,$tenbua,$gia,$hinh,$mota,$trangthai) {
        if ($hinh!="") {
            $sql = "UPDATE loaiban SET tenban='".$tenban."',meal='".$tenbua."',gia='".$gia."', hinh='".$hinh."', mota='".$mota."',trangthai='".$trangthai."' WHERE id=".$id;
        }else{
            $sql = "UPDATE loaiban SET tenban='".$tensp."',meal='".$tenbua."',gia='".$gia."', mota='".$mota."', trangthai='".$trangthai."' WHERE id=".$id;
        }
        pdo_execute($sql);
    }
?>