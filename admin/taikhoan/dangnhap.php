
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
            height: auto;
        }
        .input1 input{
            margin-top: 10px;
        }
        label{
            font-family: sans-serif;
            line-height: 40px;
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
        }
        .Text-1{
            height: 700px;
        }
        .Teelab-content img {
            width: 100%;
            height: 745px;
        }
        .Teelab-banner{
            display: none;
        }
        .Teelab-sign form {
            display: block;
        }
        .input{
            margin-top: 20px;
        }
        .input:hover{
            background-color: black;
            color: white;
            cursor: pointer;
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
                <?php if(isset($thongbao)) { ?>
                    <p style="color: red;"><?php echo $thongbao; ?></p>
                <?php } ?>

                <form action="index.php?act=dangnhap" method="post">
                    <label for="email">Email:</label>
                    <input type="email" name="email" required>

                    <label for="pass">Mật khẩu:</label>
                    <input type="password" name="pass" required>

                    <input class="input" type="submit" name="dangnhap" value="Đăng nhập">
                </form>
                    <!-- <input type="text" placeholder="Mật khẩu"> -->
                    <!-- <div class="Teelab-qmk">
                        <a href="">Quên mật khẩu?</a>
                        <a href="">
                            <p>Đăng nhập sms</p>
                        </a>
                    </div> -->
                    <hr>
                    <div class="Teelab-Dk"><a href="index.php?act=qmk">Quên mật khẩu</a> /  Bạn đã có tài khoản? <a href="index.php?act=dangky">Đăng ký</a></div>
                    <div class="Teelab-Đk">Bằng cách tiếp tục bạn đã Đồng ý với <a href=""><br> Điều khoản dịch vụ, Chính sách bảo mật Dosiin</a></div>
                </div>
            </div>
        </div>
        <img src="./img-TeeLab/background_login.png" alt="">
    </div>
</body>
</html>