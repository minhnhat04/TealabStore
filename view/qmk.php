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
<link rel="stylesheet" href="./css/Qmk.css">
<style>
        .Teelab-banner{
            display: none;
        }
</style>
<div id="loader">
    <div class="circle">
        <div class="circle1"></div>
        <div class="circle2"></div>
    </div>
</div>
<div class="Teelab-content" >
        <div class="Text-1">
            <div class="Text-2">
                <h2>Nếu bạn quên mật khẩu hãy lấy lại nó</h2>
                <div class="Teelab-sign">
                <form method="post" action="index.php?act=qmk">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                    <button type="submit">Gửi liên kết đặt lại mật khẩu</button>
                </form>
                    <hr>
                    <div class="Teelab-Dk">Bạn đã có tài khoản? <a href="./Login.php">Đăng nhập</a></div>
                    <div class="Teelab-Đk">Bằng cách tiếp tục bạn đã Đồng ý với <a href=""><br> Điều khoản dịch vụ, Chính sách bảo mật Dosiin</a></div>
                </div>
            </div>
        </div>
        <img src="./img-TeeLab/background_login.png" alt="">
    </div>