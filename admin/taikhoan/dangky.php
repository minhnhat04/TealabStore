
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./fontawesome-free-6.2.1-web/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/Login.css">
    <title>Document</title>
    <style>
        .Teelab-sign{
            width: 59%;
            height: auto;
        }
        .input1 input{
            margin-top: 10px;
        }
        label{
            font-family: sans-serif;
        }
        .Gioitinh{
            display: flex;
            margin-top: 5px;
        }
        .Gioitinh1{
            display: flex;
            margin-top: 5px;
        }
        .Gioitinh input {
            width: 20px;
            height: 70%;
            margin-top: 3px;
        }
        .Gioitinh1 input {
            width: 20px;
            height: 70%;
            margin-left: 20px;
        }
        .Gioitinh1 label{
            margin-left: 5px;
        }
        .Gioitinh label{
            margin-left: 5px;
        }
        h3{
            font-family: sans-serif;
            line-height: 42px;
        }
        .Text-1{
            height: 852px;
        }
        .Teelab-content img {
            width: 100%;
            height: 800px;
        }
        .Teelab-banner{
            display: none;
        }
    </style>
</head>
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
    <div class="Teelab-content" >
        <div class="Text-1">
            <div class="Text-2">
                <h2>Hãy đăng ký để có ưu đãi đặc biệt từ chúng tôi</h2>
                <div class="Teelab-sign">
                <form action="index.php?act=dangky" method="post" enctype="multipart/form-data">
                    <div class="dk1">
                    <h3>Username</h3>
                    <input type="text" name="user" placeholder="Mời nhập username" required><br>
                    <h3>Địa chỉ</h3>
                    <input type="text" name="address" placeholder="Mời nhập địa chỉ" required><br>
                    <h3>Số điện thoại</h3>
                    <input type="text" name="tel" placeholder="Mời nhập usố điện thoại" required><br>
                    <h3>Ảnh đại diện</h3>
                    <input type="file" name="img">
                    </div>
                    <div class="dk2">
                    <h3>Email</h3>
                    <input type="email" name="email" placeholder="Mời nhập email" required><br>
                    <h3>Password</h3>
                    <input type="password" name="pass" placeholder="Mời nhập password" required><br>
                    <h3>Confirm password</h3>
                    <input type="password" name="pass" placeholder="Mời nhập lại password" required><br>
                    <h3>Đăng ký</h3>
                    <input class="submit" type="submit" value="Đăng ký" name="dangky">
                    </div>
                </form>
                    <?php
                        if(isset($thonbao)&&($thongbao!="")){
                            echo $thonbao;
                        }
                    ?>
                    <!-- <input type="text" placeholder="Mật khẩu"> -->
                    <!-- <div class="Teelab-qmk">
                        <a href="">Quên mật khẩu?</a>
                        <a href="">
                            <p>Đăng nhập sms</p>
                        </a>
                    </div> -->
                    <hr>
                    <div class="Teelab-Dk">Bạn đã có tài khoản? <a href="index.php?act=dangnhap">Đăng nhập</a></div>
                    <div class="Teelab-Đk">Bằng cách tiếp tục bạn đã Đồng ý với <a href=""><br> Điều khoản dịch vụ, Chính sách bảo mật Dosiin</a></div>
                </div>
            </div>
        </div>
        <img src="./img-TeeLab/background_login.png" alt="">
    </div>
</body>
</html>