
<?php
// header.php
ob_start();
// ... rest of your code
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./fontawesome-free-6.2.1-web/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <style>
* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f4f4f4;
}

.Admin {
    width: 100%;
    height: 90px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 5px;
    color: #ecf0f1;
    background-color: #2c3e50;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Thêm shadow */
}

.Admin h2 {
    font-size: 40px;
    text-align: center;
    color: white;
    margin: 0;
    z-index: 10;
}

.Thanh-menu {
    width: 230px;
    height: 100%;
    background-color: #2c3e50;
    position: fixed;
    top: 0;
    left: 0;
    overflow-y: auto; 
    transition: width 0.3s ease; /* Thêm hiệu ứng transition */
    box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;
}
.Thanh-menu hr {
    border: 1px solid #485a6e;
    margin: 10px 0;
}

.Thanh-menu ul {
    list-style: none;
    padding: 20px;
    display: flex;
    flex-direction: column;
}

.Thanh-menu a {
    color: #ecf0f1;
    text-decoration: none;
    font-size: 18px;
    display: flex;
    align-items: center;
    padding: 15px 20px;
    transition: background-color 0.3s ease, color 0.3s ease;
}

.Thanh-menu a:hover {
    color: #3498db;
    /* background-color: white;
    border-radius: 40px; */
}

.Thanh-menu li {
    position: relative;
    display: flex;
    flex-direction: column;
    margin-top: 10px;
}
li:hover::before {
  transform: scaleX(1);
  transform-origin: left;
}

li::before {
  background-color: white;
  content: "";
  inset: 0;
  position: absolute;
  transform: scaleX(0);
  transform-origin: right;
  transition: transform 0.5s ease-in-out;
  z-index: -1;
  border-radius: 20px;
}
.Thanh-menu li i {
    color: white;
    margin-right: 10px;
    font-size: 18px;
    transition: color 0.3s ease; /* Thêm chuyển động màu sắc */
}

.Thanh-menu li:hover i {
    color: #3498db; /* Màu sắc mới khi hover */
}

.Thanh-menu li a {
    text-align: left;
}

.Thanh-menu li ul {
    display: none;
    position: absolute;
    top: 0;
    left: 100%;
    background-color: #485a6e;
    width: 180px;
    z-index: 1;
    transition: opacity 0.3s ease;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Thêm shadow */
}

.Thanh-menu li:hover > ul {
    display: block;
    opacity: 1;
}

.Thanh-menu a.active,
.Thanh-menu a.selected {
    color: #3498db;
    background-color: white;
    border-radius: 40px;
}

    hr{
        color: grey;
    }
    
</style>
</head>
<body>
<div class="Thanh-menu">
    <div class="Admin">
        <h2>Tealad</h2>
    </div>
    <hr>
        <ul>
        <li><a href="http://localhost:8080/Teelab"> <i class="fas fa-house"></i> &ensp;Trang chủ</a></li>
            <li class="has-submenu">
                <a href="http://localhost:8080/Teelab/admin/index.php?act=adddm" id="danhmuc"><i class="fa-solid fa-box-archive"></i> &ensp;Danh mục</a>
            </li>
            <li class="has-submenu">
                <a href="http://localhost:8080/Teelab/admin/index.php?act=addsp" id="hanghoa"><i class="fa-brands fa-product-hunt"></i> &ensp;Hàng hóa</a>
            </li>
            <li><a href="./index.php?act=dskh"><i class="fa-solid fa-user"></i> &ensp;Khách hàng</a></li>
            <li><a href="./index.php?act=dsbl"><i class="fa-solid fa-comment"></i> &ensp;Bình luận</a></li>
            <li><a href="./index.php?act=listbill"><i class="fa-solid fa-money-bill"></i></i> &ensp;Đơn hàng</a></li>
            <li><a href="./index.php?act=thongke"><i class="fa-solid fa-chart-simple"></i> &ensp;Thống kê</a></li>
        </ul>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://www.gstatic.com/charts/loader.js"></script>
