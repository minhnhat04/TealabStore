<?php
session_start();
    include "model/taikhoan.php";
    $dstk = hienthitaikhoan();

    include_once "model/danhmuc.php";
    $listdm = hienthidanhmuc();
    
    
    // Kiểm tra xem $_SESSION['mycart'] có được đặt không
    if (!isset($_SESSION['mycart'])) {
        $_SESSION['mycart'] = array();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/Trangchu.css">
    <link rel="stylesheet" href="./css/Trangchu-Ipad.css">
    <link rel="stylesheet" href="./css/Trangchu-smart.css">
    <link rel="stylesheet" href="./fontawesome-free-6.2.1-web/css/all.min.css">
    <title>TeeLab</title>

    <!-- phần css -->

    <style>
        .Product-item{
            height: auto;
        }
        .Teelab-content{
            margin-top: 100px;
        }
        .user a{
            height: auto;
            margin-left: 10px;
            text-decoration: none;
            color: #000000;
            font-family: sans-serif;
        }
        .user ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            position: relative;
            display: inline-block;
        }

        .user {
            list-style-type: none;
            margin: 0;
            padding: 0;
            position: relative;
            display: inline-block;
        }

        .khungava {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-right: 10px;
            list-style: none;
            border-radius: 20px;
            padding: 0 15px;
            font-size: 20px;
            cursor: pointer;
        }

        .khungava img {
            width: 100%;
            height: 100%;
            border-radius: 50%;
        object-fit: cover; /* Ensures the image covers the entire container, maintaining its aspect ratio */
            
        }

        .menuuser {
            width: 200px;
            display: none;
            position: absolute;
            background-color: #fff;
            border: 1px solid #ddd; 
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1); 
            z-index: 11;
            top: 48px;
            right: 10px;
            
        }

        .user:hover .menuuser {
            display: block;
        }

        .menuuser li {
            display: block;
            padding: 8px;
            text-decoration: none;
            color: #333;
        }

        .menuuser li:hover {
            background-color: #f5f5f5;
        }
        .divava{
            width: 40px;
            height: 40px;
            overflow: hidden;
        }
    </style>
</head>
<body>
    <header class="Header-1">
        <div class="Teelab-home-header" >
            <div class="Teelab-home-above" >
                <div class="Teelab-subpages-1" >
                    <img src="./img-TeeLab/logo_teelab.webp" alt="">
                    <a href="#">Shopping</a>
                    <a href="#">Style</a>
                </div>
                <div class="Teelab-subpages-2">
                    <form id="searchForm" action="index.php?act=sanpham" method="post">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <input type="text" name="kyw" id="searchInput" placeholder="Nhập từ khóa cần tìm kiếm">
                    </form>
                </div>
                <div class="Teelab-subpages-3">
                    <ul>
                        <li class="Teelab-subpages-3-ul"><a href="#"><i class="fa-solid fa-bell" style="color: #000000;"></i></a></li>
                        <li class="icongh"><a href="index.php?act=addtocart"><i class="fa-solid fa-bag-shopping" style="color: #000000;"></i></a></li>
                        <a class="a" href=""><?php echo count($_SESSION['mycart']); ?></li></a>
                    </ul>
            <?php
                if (isset($_SESSION['user'])) {
                    $userImg = "./img-TeeLab/" . $_SESSION['user']['img'];
                    $userName = $_SESSION['user']['user'];
                ?>
            <ul class="user">
                <div class="khungava"><div class="divava"><img src="<?=$userImg?>" alt=""></div><a href="#"><?=$userName?></a></div>
                <div class="menuuser">
                    <li><a href="index.php?act=mybill">Đơn hàng của tôi</a></li>
                    <li><a href="">Thông tin</a></li>
                    <li><a href="index.php?act=thoat">Đăng xuất</a></li>
                </div>
            </ul>
        <?php
        } else {
        ?>
            <li class="Teelab-subpages-3-ul-2"><a href="index.php?act=dangnhap">Đăng nhập</a></li>
            <li class="Teelab-subpages-3-ul-2"><a href="index.php?act=dangky">Đăng ký</a></li>
        <?php
        }
    ?>


    </div>
        </div>
            <div class="Teelab-home-below" >
                <div class="Teelab-menu" >
                    <ul>
                        <li><a href="index.php">Trang chủ</a></li>
                        <li><a href="index.php?act=tatcasanpham">Sản phẩm</a></li>
                        <li><a href="index.php?act=gioithieu">Giới thiệu</a></li>
                        <li><a href="index.php?act=lienhe">Liên hệ</a></li>
                        <?php
                           if(isset($_SESSION['user'])){
                            extract($_SESSION['user']);
                           if($role==1){
                        ?>
                        <li><a href="admin/index.php">Admin</a></li>
                        <?php }
                        } ?>
                    </ul>
                </div>
            </div>
            <div class="Danh-Muc-San-Pham" >
            <div class="Danh-Muc-San-Pham">
                <div class="Teelab-category">
                    <ul>
                        <?php
                        foreach ($listdm as $dm) {
                            extract($dm);
                            $linkdm = "index.php?act=sanpham&iddm=".$id;
                            echo '<li><a href="'.$linkdm.'"><h3>'.$name.'</h3></a></li>';
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
        </div>
    </header>
    <div>
        <div>
        <div class="Teelab-banner" >
                <div class="slideshow-container">
                <div class="mySlides fade">
                <img src="./img-TeeLab/slider_1 (1).webp" style="width:100%">
                </div>

                <div class="mySlides fade">
                <img src="./img-TeeLab/slider_2 (1).webp" style="width:100%">
                </div>

                <div class="mySlides fade">
                <img src="./img-TeeLab/slider_3 (1).webp" style="width:100%">
                </div>

                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>
                <br>

                <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
                </div>
            </div>
        