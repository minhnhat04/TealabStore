<link rel="stylesheet" href="./fontawesome-free-6.2.1-web/css/all.min.css">
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

    .formcontent {
        width: calc(100% - 200px);
        margin-left: 200px;
        padding: 10px 50px;
        border-radius: 5px;
        background-color: #ecf0f1;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }

    table,
    th,
    td {
        border: 1px solid #3498db;
    }

    th,
    td {
        padding: 15px;
        text-align: center;
    }

    th {
        background-color: #3498db;
        color: white;
    }

    tr {
        background-color: white;
    }
    .row {
        margin-top: 10px;
    }


    .mb10 {
        margin-top: 15px;
    }

    input[type="button"] {
        padding: 10px;
        background-color: #3498db;
        color: white;
        border: none;
        cursor: pointer;
        border-radius: 3px;
        margin-right: 10px;
    }

    a {
        text-decoration: none;
    }

    button {
        background-color: #3498db;
        color: #ffffff;
        padding: 10px 15px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
        margin-left: 10px;
    }

    button i {
        margin-right: 5px;
    }

    .b1:hover {
        background-color: #2980b9;
    }
    .b2:hover {
    background-color: rgb(172, 20, 20);
    }
.nut1 {
    height: 111px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    /* border-bottom: #2980b9 1px solid; Remove the border to maintain consistency */
}
.b1, .b2{
    display: flex;
}
.b2{
    background-color: red;
}
.nut1 button i{
    margin-left: 10px;
}
.cot{
    width: 150px
}
form {
        display: flex;
        flex-direction: row;
        max-width: 700x;
        padding: 20px;
        background-color: #f4f4f4;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    input[type="text"],
    select {
        width: calc(70% - 10px);
        padding: 8px;
        margin: 5px;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
        border-radius: 4px;
    }

    input[type="submit"] {
        width: 100%;
        background-color: #4caf50;
        color: white;
        padding: 10px 15px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }
</style>
    <!-- nội dung sản phẩm -->

<div class="formcontent">
        <form action="#" method="post">
            <form action="" method="post">
                <input type="text" name="kyw">
                <select name="iddm" id="">
                    <option value="0" selected>Tất cả</option>
                    <?php
                        foreach ($listdanhmuc as $danhmuc) {
                            echo '<option value="' . $danhmuc['id'] . '">' . $danhmuc['name'] . '</option>';
                        }
                    ?>
                    <option value=""></option>
                </select>
                <input type="submit" name="listok" value="Tìm kiếm">
            </form>
            <div class="row">
                <table>
                    <tr class="cot">
                        <th></th>
                        <th class="cot">Mã loại</th>
                        <th>Tên sản phẩm</th>
                        <th>Hình</th>
                        <th class="cot">Hình Hover</th>
                        <th>Giá</th>
                        <th class="cot">Lượt xem</th>
                        <th></th>
                    </tr>
                    <?php
                        foreach ($listsanpham as $sanpham) {
                            $suasp = "index.php?act=suasp&id=" . $sanpham['id'];
                            $xoasp = "index.php?act=xoasp&id=" . $sanpham['id'];
                            $img  = $sanpham['img'];
                            $img2 = $sanpham['img2'];
                            $hingpath = "../upload/" . $img;
                            $hingpath2 = "../upload2/" . $img2;

                            // Kiểm tra sự tồn tại của hình ảnh chính
                            $hinh = (file_exists($hingpath)) ? "<img src='{$hingpath}' height='80'>" : "No photo";

                            // Kiểm tra sự tồn tại của hình ảnh hover
                            $hinhspHover = (file_exists($hingpath2)) ? "<img src='{$hingpath2}' height='80'>" : "No photo";

                            echo '
                                <tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td>' . $sanpham['id'] . '</td>
                                    <td>' . $sanpham['name'] . '</td>
                                    <td>' . $hinh . '</td> 
                                    <td>' . $hinhspHover . '</td> 
                                    <td>' . number_format($sanpham['price']) . '</td>
                                    <td>' . $sanpham['luotxem'] . '</td>
                                <td class="nut1">    
                                    <a href="' . $suasp . '"><button class="b1" type="button">Sửa <i class="fa-solid fa-pen"></i></button></a>
                                    <a href="' . $xoasp . '"><button class="b2" type="button">Xóa <i class="fa-solid fa-trash-can"></i></button></a>
                                </td>
                                </tr>';
                            }
                            ?>
            
                </table>
            </div>
            <div class="row">

            </div>
            <div class="mb10">
                <input type="button" value="Chọn tất cả">
                <input type="button" value="Bỏ chọn tất cả">
                <input type="button" value="Xóa các mục đã chọn">
                <a href="index.php?act=addsp"><input type="button" value="Nhập thêm"></a>
            </div>
        </form>
    </div>