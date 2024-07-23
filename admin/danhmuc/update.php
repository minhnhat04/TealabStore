<?php
    if(is_array($dm)){
        extract($dm);
    }
?>
<style>
.Them-lhh {
        margin-left: 200px;
        padding: 20px 50px;
        background-color: #3498db;
        color: #ffffff;
        border-radius: 5px;
        margin-bottom: 20px;
    }

    .Them-lhh h2 {
        font-size: 24px;
    }

    .formcontent {
        width: calc(100% - 220px);
        margin-left: 200px;
        padding: 0 50px;
        border-radius: 5px;
        background-color: #ecf0f1;
    }

    .row {
        margin-top: 10px;
    }

    .row input {
        width: calc(100% - 22px);
        padding: 10px;
        border: 1px solid #3498db;
        border-radius: 3px;
        margin-top: 5px;
    }

    .mb10 {
        margin-top: 15px;
    }

    input[type="submit"], input[type="reset"], input[type="button"] {
        padding: 10px 15px;
        background-color: #3498db;
        color: #ffffff;
        border: none;
        border-radius: 3px;
        cursor: pointer;
        margin-right: 10px;
    }

    input[type="submit"]:hover, input[type="reset"]:hover, input[type="button"]:hover {
        background-color: #2980b9;
    }

    a {
        text-decoration: none;
    }
</style>
    <div class="Them-lhh">
        <h2>UPDATE LOẠI DANH MỤC</h2>
    </div>
    <div class="formcontent">
        <form action="index.php?act=updatedm" method="post">
            <div class="row">
                Mã loại <br>
                <input type="text" name="maloai" disabled required  >
            </div>
            <div class="row">
                Tên loại <br>
                <input type="text" name="tenloai" value="<?php if(isset($name)&&($name!="")) echo $name;?>">
            </div>
            <div class="mb10">
                <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id;?>">
                <input type="submit" name="capnhat" value="Cập nhật">
                <input type="reset" value="Nhập lại">
                <a href="index.php?act=listdm"><input type="button" value="Danh sách"></a>
            </div>
            <?php
                if(isset($thongbao)&&($thongbao!=""))
                echo $thongbao;
            ?>
        </form>
    </div>