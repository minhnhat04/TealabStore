<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <style>
        *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    }
    .Admin{
    width: 60%;
    background-color: grey;
    height: 90px;
    margin: auto;                   
    display: flex;
    align-items: center;
    margin-top: 50px;
    border: 1px solid black;
    border-radius: 5px;
    }
    .Admin h2{
        font-family: sans-serif;
        font-size: 44px;
        margin-left: 20px;
    }
    .Thanh-menu ul{
        width: 60%;
        height: 50px;
        background-color: black;
        display: flex;
        margin: auto;
        align-items: center;
        border-radius: 5px;
        margin-top: 15px;
    }
    .Them-lhh h2{
        font-family: sans-serif;
        font-size: 20px;
        margin-left: 20px;
    }
    .Thanh-menu ul li{
        list-style: none;
        margin-left: 20px;
    }
    .Thanh-menu a{
        color: white;
        text-decoration: none;
        font-family: sans-serif;
    }
    .Them-lhh{
        width: 60%;
        height: 50px;
        background-color: grey;
        border-radius: 5px;
        margin: auto;
        margin-top: 20px;
        display: flex;
        align-items: center;
    }
    .row input{
        width: 100%;
        margin: auto;
        margin-top: 5px;
    }
    .formcontent{
        width: 60%;
        margin: auto;
        margin-top: 15px;
    }
    .mb10 input{
        margin-top: 15px;
    }
    </style>
</head>
<body>
    <div class="Admin">
        <h2>Admin</h2>
    </div>
    <div class="Thanh-menu">
        <ul>
            <li><a href="">Trang chủ</a></li>
            <li><a href="">Danh mục</a></li>
            <li><a href="">Hàng hóa</a></li>
            <li><a href="">Khách hàng</a></li>
            <li><a href="">Bình luận</a></li>
            <li><a href="">Thống kê</a></li>
        </ul>
    </div>
    <div class="Them-lhh">
        <h2>Thêm loại hàng hóa</h2>
    </div>
    <div class="formcontent">
        <form action="#" method="post">
            <div class="row">
                Mã loại <br>
                <input type="text" name="maloai" disabled>
            </div>
            <div class="row">
                Tên loại <br>
                <input type="text" name="Tenloai" >
            </div>
            <div class="mb10">
                <input type="submit" value="THÊM MỚI">
                <input type="reset" value="NHẬP LẠI">
                <a href="./danhsachloaihang.php"><input type="button" value="DANH SÁCH"></a>
            </div>
        </form>
    </div>
</body>
</html>