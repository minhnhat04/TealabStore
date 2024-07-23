<link rel="stylesheet" href="./css/Login.css">

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
                <h2>Nhập mật khẩu mới</h2>
                    <form method="post" action="index.php?act=updateqmk">
                        <div>
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div>
                            <label for="new_password">Mật khẩu mới:</label>
                            <input type="password" id="new_password" name="new_password" required>
                        </div>
                        <div>
                            <label for="confirm_password">Xác nhận mật khẩu:</label>
                            <input type="password" id="confirm_password" name="confirm_password" required>
                        </div>
                        <div>
                            <button type="submit" name="update_password">Đổi mật khẩu</button>
                        </div>
                    </form>
                        <!-- Include SweetAlert2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.9.0/dist/sweetalert2.all.min.js"></script>

<!-- Display SweetAlert2 messages if any -->
<?php if(isset($_SESSION['swal_message'])): ?>
    <script>
        Swal.fire({
            title: "<?php echo $_SESSION['swal_message']['title']; ?>",
            text: "<?php echo $_SESSION['swal_message']['text']; ?>",
            icon: "<?php echo $_SESSION['swal_message']['icon']; ?>"
        });
    </script>
    <?php unset($_SESSION['swal_message']); ?>
<?php endif; ?>

                </div>
            </div>
        <img src="./img-TeeLab/background_login.png" alt="">
    </div>
</body>
</html>
