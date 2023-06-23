<?php
    session_start();
    include "../../model/pdo.php";
    include "../../model/binhluan.php";
    $idpro=$_REQUEST['idpro'];
    $dsbl = loadAll_binhluan($idpro);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="view/css/style.css">
</head>
<body>
    

    <div class="box">
        <div class="boxtitle2">Bình luận</div>
                <div class="binhluan">
                    <table>
                        <?php
                            echo "nội dung bình luận ở đây: ".$idpro;
                            foreach ($dsbl as $bl) {
                                extract($bl);            
                                    echo '<tr><td>'.$noidung.'</td>';
                                    echo '<td>'.$iduser.'</td>';
                                    echo '<td>'.$ngaybinhluan.'</td></tr>';
                                }
                        ?>
                    </table>
                </div>
                    <div class="boxbinhluan">
                        <form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
                            <input type="hidden" name="idpro" value="<?=$idpro?>">
                            <input type="text" name="noidung" id="">
                            <input type="submit" name="guibinhluan" value="Gửi bình luận">

                        </form>
                    </div>
                </div>

            <?php
                if (isset($_POST['guibinhluan'])&&($_POST['guibinhluan'])) {
                    $noidung=$_POST['noidung'];
                    $idpro=$_POST['idpro'];
                    $iduser=$_SESSION['user']['id'];
                    $ngaybinhluan=date('h:i:sa d/m/Y');
                    add_binhluan($noidung, $iduser,$idpro,$ngaybinhluan);
                    header("Location: ".$_SERVER['HTTP_REFERER']);
                }
            ?>
    </div>        
    
</body>
</html>