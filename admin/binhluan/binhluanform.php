<?php
session_start();

include "../../model/pdo.php";
include "../../model/binhluan.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['guibinhluan']) && !empty($_POST['noidung'])) {
    $noidung = $_POST['noidung'];
    $idpro = $_POST['idpro'];

    if (isset($_SESSION['user'])) {
        $iduser = $_SESSION['user']['id'];
        $ngaybinhluan = date(' h:i:sa d/m/Y ');

        if (isset($_FILES['anhbl']) && $_FILES['anhbl']['error'] == UPLOAD_ERR_OK) {
            $img = basename($_FILES['anhbl']['name']);
            $uploadDir = $_SERVER['DOCUMENT_ROOT'] . '/Teelab/uploadanhbl/';
            $uploadPath = $uploadDir . $img;

            if (move_uploaded_file($_FILES['anhbl']['tmp_name'], $uploadPath)) {
                insert_binhluan($noidung, $iduser, $idpro, $ngaybinhluan, $img);
            }
        }
    }
}

// Get product ID from request
$idpro = $_REQUEST['idpro'];

// Retrieve the list of comments for the product
$listbl = hienthiallbl($idpro);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css">
    <title>Đánh giá sản phẩm</title>
    <style>
.conten_bl{
        width: 100%;
        height: auto;
        background-color: #F5F5F5;
        display: flex;
        flex-direction: column;
        margin-top: 30px;
        border-radius: 5px;
        padding: 20px;
        font-family: sans-serif;
        font-size: 17px;
    }
    .conten_bl div{
        margin-top: 10px;
    }
    input[type="text"] {
        width: 100%;
        padding: 8px;
        /* margin-bottom: 10px; */
        box-sizing: border-box;
    }

    input[type="submit"] {
        background-color: #4caf50;
        color: white;
        padding: 10px;
        border: none;
        cursor: pointer;
        margin-top: 20px;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }
    .Box_form_binhluan{
        font-size: 40px;
        font-family: sans-serif;
        font-weight: 500;
    }
    .nhap_bl{
        margin-top: 30px;
    }
    hr{
        margin-top: 40px;
    }
    .kichco img {
        height: 130px;
        margin-top: 20px;
    }
    .kichco{
        width: 77%;
        margin: auto;
    }
    .kichco1{
        width: 100%;
        border-radius: 50%;
    }
    .ttkh{
        display: flex;
    }
    .ndkh{
        margin-left: 20px;
    }
    .khungava1 {
        width: 65px;
        height: 65px;
        /* background-color: aqua; */
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 50%;
        overflow: hidden; 
    }
    .khungbl{
        width: 100px;
        height: 100px;
        background-color: aqua;
        display: flex;
        justify-content: center;
        align-items: center;
        overflow: hidden; 
    }
    .khungbl img{
        width: 100%;
        height: auto;
    }    
    strong{
        font-size: 20px;
    }
    </style>
</head>
<!-- Thêm đoạn mã sau vào phần head của trang HTML của bạn -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

<body>

<script src="https://code.jquery.com/jquery-latest.js"></script>
<script>
var loader = function() {
    setTimeout(function() {
        $('#loader').css({ 'opacity': 0, 'visibility':'hidden' });
    }, 1000);
};
$(function(){
    loader();
});
</script>
<div id="loader">
    <div class="circle">
        <div class="circle1"></div>
        <div class="circle2"></div>
    </div>
</div>

<div class="box">
    <div class="ds_binhluan">
        <div class="conten_bl">
            <div class="Box_form_binhluan">
                Đánh giá sản phẩm
            </div>

            <?php foreach ($listbl as $listbinhluan): ?>
                <?php
                extract($listbinhluan);
                $avata = "uploadanhava/" . $img;
                $hinhbl = "uploadanhbl/" . $img2;
                ?>
                <div>
                    <div class="ttkh">
                        <div class="khungava1">
                            <img class="kichco1" src="<?= $avata ?>" alt="">
                        </div>
                        <div class="ndkh">
                            <div><strong><?= $user ?></strong></div>
                            <div><?= $ngaybinhluan ?></div>
                        </div>
                    </div>
                    <div class="kichco">
                        <div class="nd"><?= $noidung ?></div>
                        <div class="khungbl">
                        <a class="fancybox" href="<?= $hinhbl ?>" data-fancybox="gallery" data-caption="Hình ảnh bình luận">
                            <img src="<?= $hinhbl ?>" alt="Hình ảnh bình luận"></a>
                        </div>
                    </div>
                    <hr>
                </div>
            <?php endforeach; ?>

        </div>
    </div>

    <div class="nhap_bl">
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
            <input type="hidden" name="idpro" value="<?= $idpro ?>">
            <textarea name="noidung" rows="4" cols="50"></textarea>
            <input type="file" name="anhbl">
            <?php if (isset($_SESSION['user'])): ?>
                <input type="submit" name="guibinhluan" value="Gửi bình luận">
            <?php else: ?>
                <p>Vui lòng đăng nhập để bình luận.</p>
            <?php endif; ?>
        </form>
    </div>
</div>
</body>
</html>
