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

        .formcontent {
            width: calc(100% - 220px);
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

        table, th, td {
            border: 1px solid #3498db;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #3498db;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
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
            margin-left: 10px; /* Đã sửa lỗi chính tả tại đây */
        }

        button i {
            margin-right: 5px;
        }

        button:hover {
            background-color: #2980b9;
        }

        .nut1 {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 102px;
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
        .weight{
            width: 140px;
            text-align: center;
        }
        .weight img{
            height: 80px;
            width: 60px;
        }
        .ndung{
            max-width: 200px; 
            white-space: nowrap; 
            overflow: hidden; 
            text-overflow: ellipsis; 
        }
    </style>
</head>
<body>
    <div class="formcontent">
        <form action="#" method="post">
            <div class="row">
                <table>
                    <tr>
                        <th></th>
                        <th>ID</th>
                        <th>NỘI DUNG</th>
                        <th>USER</th>
                        <th>IDPRO</th>
                        <th>NGÀY BL</th>
                        <th>HÌNH BL</th>
                        <th></th>
                    </tr>
                    <?php
                        foreach ($listbinhluan as $binhluan) {
                            $repbl = "index.php?act=repbl&id=" . $binhluan['Id'];
                            $xoabl = "index.php?act=xoabl&id=" . $binhluan['Id'];

                            $img2  = $binhluan['img2'];
                            $hinhbl = "../uploadanhbl/" . $img2;

                            echo '
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>' . $binhluan['Id'] . '</td>
                                <td class="ndung">' . $binhluan['noidung'] . '</td>
                                <td>' . $binhluan['iduser'] . '</td>
                                <td>' . $binhluan['idpro'] . '</td>
                                <td>' . $binhluan['ngaybinhluan'] . '</td>
                                <td class="weight"><img src="'. $hinhbl .'" alt="Hình ảnh bình luận"></td>
                                <td class="nut1">    
                                    <a href="' . $xoabl . '"><button class="b2" type="button">Xóa <i class="fa fa-trash-can"></i></button></a>
                                    <a href="' . $repbl . '"><button class="b1" type="button">Rep <i class="fa-solid fa-pen"></i></button></a>
                                </td>
                            </tr>';
                        }
                    ?>
                    
                </table>
            </div>
            <div class="row"></div>
            <div class="mb10">
                <input type="button" value="Chọn tất cả">
                <input type="button" value="Bỏ chọn tất cả">
                <input type="button" value="Xóa các mục đã chọn">
            </div>
        </form>
    </div>
</body>
</html>
