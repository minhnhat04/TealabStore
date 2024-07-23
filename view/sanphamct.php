
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/ThongTinSp.css">
    <link rel="stylesheet" href="./css/Slied.css">
    <link rel="stylesheet" href="./fontawesome-free-6.2.1-web/css/all.min.css">
    <title></title>
    <style>
        .Teelab-banner{
            display: none;
        }
        h2{
            margin: 50px;
            text-align: center;
            font-size: 40px;
            font-family: sans-serif;
        }
        .Quantity {
            display: inline-block;
            margin-top: 10px;
        }

        .Quantity form {
            margin: 0;
        }

        .Quantity input[type="submit"] {
            background-color: #333;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .Quantity input[type="submit"]:hover {
            background-color: #555;
        }
        .hinhsp{
            width: 100%;
            height: 100%;
        }
        .user a{
            height: auto;
            margin-left: 10px;
            text-decoration: none;
            color: #000000;
            font-family: sans-serif;
        }
        .user ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            position: relative;
            display: inline-block;
        }

        .user {
            list-style-type: none;
            margin: 0;
            padding: 0;
            position: relative;
            display: inline-block;
        }

        .khungava {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-right: 10px;
            background-color: rgba(16,16,16,.05098);
            list-style: none;
            border-radius: 20px;
            padding: 0 15px;
            font-size: 20px;
            cursor: pointer;
        }

        /* .khungava img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
        } */
        .menuuser {
            width: 200px;
            display: none;
            position: absolute;
            background-color: #fff;
            border: 1px solid #ddd; 
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1); 
            z-index: 1;
            top: 48px;
            right: 10px;
            
        }

        .user:hover .menuuser {
            display: block;
        }

        .menuuser li {
            display: block;
            padding: 8px;
            text-decoration: none;
            color: #333;
        }

        .menuuser li:hover {
            background-color: #f5f5f5;
        }
    </style>
</head> 
<body>
    <div class="Banner">
    <?php
    extract($onesp);
    $linksp = "index.php?act=sanphamct&idsp=" . $id;
    $hinhsp = "./upload/" . $img;
    $hinhspHover = "./upload2/" . $img2; 
    echo '<div class="Banner-1">
            <div class="Product-information-1">
                <div class="slider-container">
                    <div class="slider">
                        <img id="largeImage" src="' . $hinhsp . '" alt="Large Image">
                    </div>
                </div>
            </div>
            <div class="Product-information-2">
                <p>' . $name . '</p>
                <hr>
                <div class="Gia">'.number_format($price).'đ</div>
                <div class="TTSP">
                    <ul>
                        Thông tin sản phẩm:
                        <li> - Chất liệu: Cotton</li>
                        <li> - Form: Oversize</li>
                        <li> - ' . $mota . '</li>
                        <li> - Thiết kế: In trame</li>
                    </ul>
                </div>
                <div class="ImageGallery">
                    <div class="Thumbnail Color" onclick="changeImage(\'' . $hinhsp . '\')">
                        <img src="' . $hinhsp . '" alt="Thumbnail 1">
                    </div>
                    <div class="Thumbnail Color" onclick="changeImage(\'' . $hinhspHover . '\')">
                        <img src="' . $hinhspHover . '" alt="Thumbnail 2">
                    </div>
                </div>
                <h3>Kích thước: M</h3>
                <div class="Size">
                    <div class="Size-m">M</div>
                    <div class="Size-m">L</div>
                    <div class="Size-m">XL</div>
                </div>
                <h3>Số lượng</h3>
                <div class="Quantity">
                    <form action="index.php?act=addtocart" method="post">
                        <input type="hidden" name="id" value="'.$id.'">
                        <input type="hidden" name="name" value="'.$name.'">
                        <input type="hidden" name="img" value="'.$img.'">
                        <input type="hidden" name="price" value="'.$price.'">
                        <input type="submit" name="addtocart" value="Thêm vào giỏ hàng">
                    </form>
                </div>
            </div>
        </div>';
?>
        </div>
    </div>
    <div class="Banner-2">
        <div class="Banner-02">
            <div class="Product-Description">
                <button>MÔ TẢ SẢN PHẨM</button>
                <ul>Thông tin sản phẩm
                    <li> - Chất liệu: Cotton</li>
                    <li> - Form: Oversize</li>
                    <?php
                        echo'<li>- '.$mota.'</li>'
                    ?>
                    <li> - Thiết kế: In trame</li>
                </ul>
                <?php
                    extract($onesp);
                    $hinhsp = "./img-TeeLab/" . $img;
                    echo '<img class="hinhsp" src="'.$hinhsp.'" alt="">'
                ?>
                <h2>Về TEELAB:</h2>
                <p>You will never be younger than you are at this very moment “Enjoy Your Youth!”</p>
                <p>Không chỉ là thời trang, TEELAB còn là “phòng thí nghiệm” của tuổi trẻ - nơi nghiên cứu và cho ra đời nguồn năng lượng mang tên “Youth”. Chúng mình luôn muốn tạo nên những trải nghiệm vui vẻ, năng động và trẻ trung.
                   Lấy cảm hứng từ giới trẻ, sáng tạo liên tục, bắt kịp xu hướng và phát triển đa dạng các dòng sản phẩm là cách mà chúng mình hoạt động để tạo nên phong cách sống hằng ngày của bạn. Mục tiêu của TEELAB là cung cấp các sản phẩm thời trang chất lượng cao với giá thành hợp lý.
                   Chẳng còn thời gian để loay hoay nữa đâu youngers ơi! Hãy nhanh chân bắt lấy những những khoảnh khắc tuyệt vời của tuổi trẻ. TEELAB đã sẵn sàng trải nghiệm cùng bạn!
                </p>
                <p>
                   “Enjoy Your Youth”, now!
                </p>
                <p>
                    Hướng dẫn sử dụng sản phẩm Teelab:
                    <br>- Ngâm áo vào NƯỚC LẠNH có pha giấm hoặc phèn chua từ trong 2 tiếng đồng hồ
                    <br>- Giặt ở nhiệt độ bình thường, với đồ có màu tương tự.
                    <br>- Không dùng hóa chất tẩy.
                    <br>- Hạn chế sử dụng máy sấy và ủi (nếu có) thì ở nhiệt độ thích hợp.  
                </p>
                <p>
                    Chính sách bảo hành:
                    <br>- Miễn phí đổi hàng cho khách mua ở TEELAB trong trường hợp bị lỗi từ nhà sản xuất, giao nhầm hàng, bị hư hỏng trong quá trình vận chuyển hàng.
                    <br>- Sản phẩm đổi trong thời gian 3 ngày kể từ ngày nhận hàng
                    <br>- Sản phẩm còn mới nguyên tem, tags và mang theo hoá đơn mua hàng, sản phẩm chưa giặt và không dơ bẩn, hư hỏng bởi những tác nhân bên ngoài cửa hàng sau khi mua hàng.
                </p>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
            <script>
            $(document).ready(function(){
                $("#binhluan").load("admin/binhluan/binhluanform.php", {idpro: <?= $id?>}); 
            });
            </script>
                <div class="box">
                    <div class="ds_binhluan" id="binhluan">
                        <ul>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <h2>Top 5 sản phẩm bán chạy</h2>
        <div class="Teelab-product-1" >
            <?php
                foreach ($dstop5 as $sp) {
                    extract($sp);
                    $linksp = "index.php?act=sanphamct&idsp=" . $id;
                    $hinhspHover = "./img-TeeLab/" . $img2; 
                    $hinhsp = "./img-TeeLab/" . $img; 
                    echo '<div class="Product-item">
                            <div class="Product-item-01">
                                <a href="'.$linksp.'"><img src="'.$hinhsp.'" alt="" class="img-change">
                                <div class="cart-icon"><a href="index.php?act=giohang"><i class="fas fa-shopping-cart"></i></a></div>
                                </a>
                                <a href="'.$linksp.'"><img src="'.$hinhspHover.'" alt=""></a>
                            </div>
                            <div class="Product-item-summary">
                                <h3>TEELAB</h3>
                                <a href="'.$linksp.'"><p>' . $name . '</p></a>
                                <div class="Product-item-summary-sale">
                                </div>
                                <h6>'.$price.'.000₫</h6>
                                <i class="fa-solid fa-star" style="color: #64738b;"></i>
                                <i class="fa-solid fa-star" style="color: #64738b;"></i>
                                <i class="fa-solid fa-star" style="color: #64738b;"></i>
                                <i class="fa-solid fa-star" style="color: #64738b;"></i>
                                <i class="fa-solid fa-star" style="color: #64738b;"></i>.
                                <i> <i class="fa-solid fa-eye"></i> : '.$luotxem.'</i>
                            </div>
                        </div>';
                }
                ?>
            </div>
</body>
<script src="./js/Slied.js"></script>
<script src="./js/Slsp.js"></script>
</html>