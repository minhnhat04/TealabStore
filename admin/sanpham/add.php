
<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.9.0/dist/sweetalert2.min.css" rel="stylesheet">
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
        <h2>Thêm mới sản phẩm</h2>
    </div>
    <div class="formcontent">
        <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
            <div class="row">
                Danh mục <br>
                <select name="iddm" id="">
                    <?php
                        foreach ( $listdanhmuc as $danhmuc) {
                            extract ($listdanhmuc);
                            echo '<option value="' . $danhmuc['id'] . '">' . $danhmuc['name'] . '</option>';
                        }
                    ?>
                    <option value=""></option> 
                </select>
            </div>
            <div class="row">
                Tên sản phẩm <br>
                <input type="text" name="tensp" required>
            </div>
            <div class="row">
                Giá sản phẩm <br>
                <input type="text" name="giasp" required>
            </div>
            <div class="row">
                Hình sản phẩm <br>
                <input type="file" name="hinhspHover" required>
            </div>
            <div class="row">
                Hình sản phẩm Hover
                <input type="file" name="hinhsp" required>
            </div>
            <div class="row">
                Mô tả sản phẩm <br>
                <textarea name="motasp" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="mb10">
                <input type="submit" name="themmoi" value="THÊM MỚI">
                <input type="reset" value="NHẬP LẠI">
                <a href="index.php?act=listsp"><input type="button" value="DANH SÁCH"></a>
            </div>
            <?php
                if(isset($thongbao)&&($thongbao!=""))
                echo $thongbao;
            ?>
        </form>
    </div>
    
