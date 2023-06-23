<?php

    function add_taikhoan($user,$email,$pass) {
        $sql = "INSERT INTO taikhoan(user,email,pass) values('$user','$email','$pass')";
        pdo_execute($sql);
    }
    function loadAll_taikhoan() {
        $sql = "SELECT * FROM taikhoan ORDER BY id desc";
        $lsttaikhoan = pdo_query($sql);
        return $lsttaikhoan;
    }
    function load_one_taikhoan($id) {
        $sql = "SELECT * FROM taikhoan WHERE id=".$_GET['id'];
        $tk = pdo_query_one($sql);
        return $tk;
    }
    function checkuser($user,$pass) {
        $sql = "SELECT * FROM taikhoan WHERE user='".$user."' AND pass='".$pass."'";
        $spham = pdo_query_one($sql);
        return $spham;
    }
    function update_taikhoan($id,$user,$email,$pass,$adress,$tel) {
        $sql = "UPDATE taikhoan SET user='".$user."', email='".$email."', pass='".$pass."', adress='".$adress."', tel='".$tel."' WHERE id=".$id;
        pdo_execute($sql);
    }
    function checkemail($email) {
        $sql = "SELECT * FROM taikhoan WHERE email='".$user."'";
        $spham = pdo_query_one($sql);
        return $spham;
    }
?>