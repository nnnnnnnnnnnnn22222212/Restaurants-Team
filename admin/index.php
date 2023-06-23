<?php
    include "../model/pdo.php";
    include "../model/loaiban.php";
    include "../model/taikhoan.php";
    include "../model/thucdon.php";
    include "../model/binhluan.php";
    include "../model/uudai.php";

    // include "../model/thongke.php";


    include "header.php";
    if (isset($_GET['act'])) {
        $act = $_GET['act'];
        switch ($act) {
            case 'trangchuadmin':
                include "trangchu/home.php";
                break;
            /* CONTROLLER LOẠI BÀN */
            case 'addban':
                // kiểm tra người dùng có click vào nút add hay ko
                if (isset($_POST['themmoi'])&&($_POST['themmoi'])) {
                    $idban=$_POST['idban'];
                    $tenban=$_POST['tenban'];
                    $tenbua=$_POST['meal'];
                    $gia=$_POST['gia'];
                    $mota=$_POST['mota'];
                    $trangthai=$_POST['trangthai'];
                    $hinh= $_FILES['hinh']['name'];
                    $target_dir ="../upload/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                        //echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
                    }else {
                        //echo "Sorry, there was an error uploading your file.";
                    }
                    add_ban($tenban,$tenbua,$idban,$hinh,$gia,$mota,$trangthai);
                    $thongbao="Thêm sản phẩm thành công";
                }
                include "loaiban/add.php";
                break;
            case 'listban':
                $lstban = loadAll_ban();
                include "loaiban/list.php";
                break;
            case 'xoaban':
                if (isset($_GET['idban'])&&($_GET['idban']>0)) {
                    delete_ban($_GET['idban']);
                }
                $lstban = loadAll_ban();
                include "loaiban/list.php";
                break;
            case 'suaban':
                if (isset($_GET['idban'])&&($_GET['idban']>0)) {
                    $ban = load_one_ban($_GET['idban']);
                }
                include "loaiban/update.php";
                break;
            case 'updateban':
                if (isset($_POST['capnhat'])&&($_POST['capnhat'])) {
                    $id=$_POST['id'];
                    $tenban=$_POST['tenban'];
                    $tenbua=$_POST['meal'];
                    $gia=$_POST['gia'];
                    $mota=$_POST['mota'];
                    $trangthai=$_POST['trangthai'];
                    $hinh= $_FILES['hinh']['name'];
                    $target_dir ="../upload/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                        //echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
                    }else {
                        //echo "Sorry, there was an error uploading your file.";
                    }
                    update_ban($tenban,$tenbua,$gia,$hinh,$mota,$id,$trangthai);
                    $thongbao="Cập nhật thành công";
                }
                $lstban = loadAll_ban();
                include "loaiban/list.php";
                break;
            /* CONTROLLER THỰC ĐƠN */
            case 'addmon':
                // kiểm tra người dùng có click vào nút add hay ko
                if (isset($_POST['themmoi'])&&($_POST['themmoi'])) {
                    $idmon=$_POST['idmon'];
                    $tenmon=$_POST['tenmon'];
                    $gia=$_POST['gia'];
                    $mota=$_POST['mota'];
                    $hinh= $_FILES['hinh']['name'];
                    $target_dir ="../upload/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                        //echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
                    }else {
                        //echo "Sorry, there was an error uploading your file.";
                    }
                    add_thucdon($idmon,$tenmon,$hinh,$gia,$mota);
                    $thongbao="Thêm thực đơn thành công";
                }
                include "thucdon/add.php";
                break;
            case 'listmon':
                $lstthucdon = loadAll_thucdon();
                include "thucdon/list.php";
                break;
            case 'xoamon':
                if (isset($_GET['idmon'])&&($_GET['idmon']>0)) {
                    delete_thucdon($_GET['idmon']);
                }
                $lstthucdon = loadAll_thucdon();
                include "thucdon/list.php";
                break;
            case 'suamon':
                if (isset($_GET['idmon'])&&($_GET['idmon']>0)) {
                    $mon = load_one_mon($_GET['idmon']);
                }
                include "thucdon/update.php";
                break;
            case 'updatemon':
                if (isset($_POST['capnhat'])&&($_POST['capnhat'])) {
                    $id=$_POST['id'];
                    $tenmon=$_POST['tenmon'];
                    $gia=$_POST['gia'];
                    $mota=$_POST['mota'];
                    $hinh= $_FILES['hinh']['name'];
                    $target_dir ="../upload/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                        //echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
                    }else {
                        //echo "Sorry, there was an error uploading your file.";
                    }
                    update_thucdon($id,$tenmon,$gia,$hinh,$mota);
                    $thongbao="Cập nhật sản phẩm thành công";
                }
                $lstthucdon = loadAll_thucdon();
                include "thucdon/list.php";
                break;

            //TÀI KHOẢN
            case 'dskh':
                $lsttaikhoan = loadAll_taikhoan();
                include "taikhoan/list.php";
                break;
            case 'addtk':
                if (isset($_POST['themmoi'])&&($_POST['themmoi'])) {
                    $user=$_POST['user'];
                    $email=$_POST['email'];
                    $pass=$_POST['pass'];
                    add_taikhoan($user,$email,$pass);
                    $thongbao="Đã thêm thành công";
                }
                include "taikhoan/add.php";
                break;
            case 'suatk':
                if (isset($_GET['id'])&&($_GET['id']>0)) {
                    $tk = load_one_taikhoan($_GET['id']);
                }
                include "taikhoan/update.php";
                break; 
            case 'updatetk':
                if (isset($_POST['capnhat'])&&($_POST['capnhat'])) {
                    $id=$_POST['id'];
                    $user=$_POST['user'];
                    $email=$_POST['email'];
                    $pass=$_POST['pass'];
                    $adress=$_POST['adress'];
                    $tel=$_POST['tel'];
                    update_taikhoan($id,$user,$email,$pass,$adress,$tel);
                    $thongbao="Cập nhật thành công";
                }
                $lsttaikhoan = loadAll_taikhoan();
                include "taikhoan/list.php";
                break;
            case 'datban':
                include "datban/list.php";
                break;
            // bình luận
            case 'dsbl':
                $lstbinhluan = loadAll_binhluan(0);
                include "binhluan/list.php";
                break;
            // ưu đãi
            case 'addud':
                // kiểm tra người dùng có click vào nút add hay ko
                if (isset($_POST['themmoi'])&&($_POST['themmoi'])) {
                    $idud=$_POST['idud'];
                    $mota=$_POST['mota'];
                    $soluong=$_POST['soluong'];
                    $trangthai=$_POST['trangthai'];
                    $hinh= $_FILES['hinh']['name'];
                    $target_dir ="../upload/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                        //echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
                    }else {
                        //echo "Sorry, there was an error uploading your file.";
                    }
                    add_uudai($idud,$mota,$hinh,$soluong,$trangthai);
                    $thongbao="Thêm ưu đãi thành công";
                }
                include "uudai/add.php";
                break;
            case 'listud':
                $lstud = loadAll_uudai();
                include "uudai/list.php";
                break;
            case 'xoaud':
                if (isset($_GET['idban'])&&($_GET['idban']>0)) {
                    delete_ban($_GET['idban']);
                }
                $lstban = loadAll_ban();
                include "uudai/list.php";
                break;
            case 'suaud':
                if (isset($_GET['idban'])&&($_GET['idban']>0)) {
                    $ban = load_one_ban($_GET['idban']);
                }
                include "uudai/update.php";
                break;
            case 'updateud':
                if (isset($_POST['capnhat'])&&($_POST['capnhat'])) {
                    $idud=$_POST['idud'];
                    $mota=$_POST['mota'];
                    $soluong=$_POST['soluong'];
                    $trangthai=$_POST['trangthai'];
                    $hinh= $_FILES['hinh']['name'];
                    $target_dir ="../upload/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                        //echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
                    }else {
                        //echo "Sorry, there was an error uploading your file.";
                    }
                    update_uudai($idud,$mota,$hinh,$soluong,$trangthai);
                    $thongbao="Cập nhật thành công";
                }
                $lstud = loadAll_uudai();
                include "uudai/list.php";
                break;
                case 'addhd':
                    include "hoadon/add.php";
                    break;
                case 'listhd':
                        include "hoadon/list.php";
                        break;
            // thống kê
            // case 'thongke':
            //     $lstthongke = loadAll_thongke();
            //     include "thongke/list.php";
            //     break;
            // case 'bieudo':
            //     $lstthongke = loadAll_thongke();
            //     include "thongke/bieudo.php";
            //     break;
            default:
                include "home.php";
                break;
        }
    }else{
        include "home.php";

    }
    include "footer.php";
?>