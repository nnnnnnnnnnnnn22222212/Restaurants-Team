<?php
session_start();

include "model/pdo.php";
include "model/taikhoan.php";
include "model/loaiban.php";
include "model/thucdon.php";
include "model/uudai.php";
include "global.php";

include "view/header.php";

//$monmoi=loadAll_thucdon_home();
//$dsban=loadAll_ban();
// $dstop10=loadAll_sanpham_top10();
    if ((isset($_GET['act'])) && ($_GET['act']!="")){
        $act = $_GET['act'];
        switch ($act) {
            case 'thucdon':
                $lstthucdon = loadAll_thucdon();
                include "view/thucdon.php";
                break;
            case 'danhsachban':
                $lstban = loadAll_ban();
                include "view/danhsachban.php";
                break;
            case 'chitietmon':
                if (isset($_GET['idmon'])&&($_GET['idmon']>0)) {
                    $idmon=$_GET['idmon'];
                    $onemon=load_one_thucdon($idmon);
                    extract($onemon); 
                    include "view/chitietmon.php";
                }else{
                    include "view/home.php";
                }            
                break;
            case 'chitietban':
                if (isset($_GET['idban'])&&($_GET['idban']>0)) {
                    $idban=$_GET['idban'];
                    $oneban=load_one_ban($idban);
                    extract($oneban); 
                    include "view/chitietban.php";
                }else{
                    include "view/home.php";
                }            
                break;
            case 'gioithieu':
                include "view/gioithieu.php";
                break;
            case 'dangky':
                if (isset($_POST['dangky'])&&($_POST['dangky'])) {
                        $user=$_POST['user'];
                        $email=$_POST['email'];
                        $pass=$_POST['pass'];
                        add_taikhoan($user,$email,$pass);
                        $thongbao="Đã đăng ký thành công. Vui lòng đăng nhập!";
                    }
                    include "view/taikhoan/dangky.php";
                    break;    
            case 'dangnhap':
                if (isset($_POST['dangnhap'])&&($_POST['dangnhap'])) {
                        $user=$_POST['user'];
                        $pass=$_POST['pass'];
                        $checkuser=checkuser($user,$pass);
                        if (is_array($checkuser)) {
                            $_SESSION['user']=$checkuser;
                            $thongbao="Bạn đã đăng nhập thành công!";
                            include "view/taikhoan/dangnhap.php" ;
                        }else {
                            $thongbao="Tài khoản không tồn tại";    
                        }
                    }
                include "view/taikhoan/dangnhap.php";
                break;
            case 'quenmk':
                if (isset($_POST['guiemail'])&&($_POST['guiemail'])) {
                    $email=$_POST['email'];
                    $checkemail = checkemail($email);
                    if (is_array($checkemail)) {
                        $thongbao = "Mật khẩu của bạn là: ".$checkemail['pass'];
                    }else {
                        $thongbao = "Email này không tồn tại";
                    }  
                }
                include "view/taikhoan/quenmk.php";
                break;
            case 'thoat':
                session_unset();
                include "view/home.php";
                break;
            case 'dichvu':
                include "view/dichvu.php";
                break;
            case 'datban':
                include "view/datban.php";
                break;                    
            case 'doingu':
                include "view/doingu.php";
                break;
            case 'danhgia':
                include "view/danhgia.php";
                break;
            case 'lienhe':
                include "view/lienhe.php";
                break;
            case 'uudai':
                $lstud = loadAll_uudai();
                include "view/uudai.php";
                break;
            // case 'dangky':
            //     if (isset($_POST['dangky'])&&($_POST['dangky'])) {
            //         $user=$_POST['user'];
            //         $email=$_POST['email'];
            //         $pass=$_POST['pass'];
            //         add_taikhoan($user,$email,$pass);
            //         $thongbao="Đã đăng ký thành công. Vui lòng đăng nhập!";
            //     }
            //     include "view/taikhoan/dangky.php";
            //     break;
            // case 'dangnhap':
            //     if (isset($_POST['dangnhap'])&&($_POST['dangnhap'])) {
            //         $user=$_POST['user'];
            //         $pass=$_POST['pass'];
            //         $checkuser=checkuser($user,$pass);
            //         if (is_array($checkuser)) {
            //             $_SESSION['user']=$checkuser;
            //             $thongbao="Bạn đã đăng nhập thành công!";
            //             header('LOCATION:index.php');   
            //         }else {
            //             $thongbao="Tài khoản không tồn tại";

            //         }
            //     }
            //     include "view/taikhoan/dangky.php";
            //     break;
            // case 'edit_taikhoan':
            //     if (isset($_POST['capnhat'])&&($_POST['capnhat'])) {
            //         $id=$_POST['id'];
            //         $user=$_POST['user'];
            //         $pass=$_POST['pass'];
            //         $email=$_POST['email'];
            //         $adress=$_POST['adress'];
            //         $tel=$_POST['tel'];
            //         update_taikhoan($id,$user,$email,$pass,$adress,$tel);
            //         $_SESSION['user']=checkuser($user,$pass);
            //         header('LOCATION:index.php?act=edit_taikhoan');   
            //     }
            //     include "view/taikhoan/edit_taikhoan.php";
            //     break;
            // case 'quenmk':
            //     if (isset($_POST['guiemail'])&&($_POST['guiemail'])) {
            //         $email=$_POST['email'];
            //         $checkemail = checkemail($email);
            //         if (is_array($checkemail)) {
            //             $thongbao = "Mật khẩu của bạn là: ".$checkemail['pass'];
            //         }else {
            //             $thongbao = "Email này không tồn tại";
            //         }  
            //     }
            //     include "view/taikhoan/quenmk.php";
            //     break;
            // case 'thoat':
            //     session_unset();
            //     header('LOCATION: index.php');   
            //     break;
            // case 'lienhe':
            //     include "view/lienhe.php";
            //     break;
            default:
                $lstthucdon = loadAll_thucdon();
                include "view/home.php";
                break;
    }
    }else {
        $lstthucdon = loadAll_thucdon();
        include "view/home.php";
    }
    
    include "view/footer.php";
?>