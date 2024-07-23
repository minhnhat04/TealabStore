<?php
if (isset($sp) && is_array($sp)) {
    extract($sp);
    
    $hingpath = "../upload/" . $img;
    $hinh = (file_exists($hingpath)) ? "<img src='{$hingpath}' height='80'>" : "No photo";

    $hingpath2 = "../upload2/" . $img2;
    $hinhspHover = (file_exists($hingpath2)) ? "<img src='{$hingpath2}' height='80'>" : "No photo";
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
    <h2>Update sản phẩm</h2>
</div>
<div class="formcontent">
    <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
        <div class="row">
            <select name="iddm" id="">
                <option value="0">Tất cả</option>
                <?php
                foreach ($listdanhmuc as $danhmuc) {
                    $selected = ($danhmuc['id'] == $sp['iddm']) ? 'selected' : '';
                    echo '<option value="' . $danhmuc['id'] . '" ' . $selected . '>' . $danhmuc['name'] . '</option>';
                }
                ?>
                <option value=""></option>
            </select>
        </div>
        <div class="row">
            Tên sản phẩm <br>
            <input type="text" name="tensp" value="<?= $name ?>" required>
        </div>
        <div class="row">
            Giá sản phẩm <br>
            <input type="text" name="giasp" value="<?= $price ?>" required>
        </div>
        <div class="row">
            Hình ảnh sản phẩm <br>
            <?= $hinh ?>
            <input type="file" name="hinhsp">
            <?=$hinhspHover?>
            <input type="file" name="hinhspHover">
        </div>
        <div class="row">
            Mô tả sản phẩm <br>
            <textarea name="motasp" id="" cols="30" rows="10"><?= $mota ?></textarea required   >
        </div>
        <div class="mb10">
            <input type="hidden" name="id" value="<?= $id ?>">
            <input type="submit" name="capnhat" value="Update sản phẩm">
            <input type="reset" value="Nhập lại">
            <a href="index.php?act=listsp"><input type="button" value="Danh sách"></a>
        </div>
        <?php
        if (isset($thongbao) && ($thongbao != ""))
            echo $thongbao;
        ?>
    </form>
</div>
