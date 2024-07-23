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
<style>
        .Teelab-banner{
            display: none;
        }
        .San-Pham-Ban-chay{
            background-color: #f9f9f9;;
            margin: auto;
            padding: 60px 0;
        }
        .San-Pham-Ban-chay h2{
            font-size: 40px;
        }
        .timlai{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin: auto;
        }
        .Teelab-product-1::after{
            display: none;
        }
        .timlai p{
            font-family: sans-serif;
            margin-top: 20px;
            padding: 10px;
        }
        
</style>
<div id="loader">
    <div class="circle">
        <div class="circle1"></div>
        <div class="circle2"></div>
    </div>
</div>
<div class="Teelab-content" >
            <div class="Teelab-content" >
                <div class="San-Pham-Ban-chay">
                    <h2><?=$tendm?></h2>
                    <div class="Teelab-product-1" >
                    <?php
                        $i = 0;
                        foreach ($dssp as $sp) {
                            extract($sp);
                            $hinhspHover = "./upload2/" . $img2; 
                            $hinhsp = "./upload/" . $img; 
                            $linksp = "index.php?act=sanphamct&idsp=" . $id;
                            if ($i == 2 || $i == 5 || $i == 8 || $i == 12) {
                                $mr = "";
                            } else {
                                $mr = "mr";
                            }
                            echo '<div class="Product-item ' . $mr . '" >
                                <div class="Product-item-01">
                                    <a href="'.$linksp.'"><img src="'.$hinhsp.'" alt="" class="img-change">
                                    <div class="cart-icon"><a href="'.$linksp.'"><i class="fas fa-shopping-cart"></i></a></div>
                                    </a>
                                    <a href="'.$linksp.'"><img src="'.$hinhspHover.'" alt=""></a>
                                    </div>
                                <div class="Product-item-summary">
                                    <h3>TEELAB</h3>
                                    <a href="'.$linksp.'"><p>' . $name . '</p></a>
                                    <div class="Product-item-summary-sale">
                                    </div>
                                    <h6>' .number_format($price).'đ</h6>
                                    <i class="fa-solid fa-star" style="color: #64738b;"></i>
                                    <i class="fa-solid fa-star" style="color: #64738b;"></i>
                                    <i class="fa-solid fa-star" style="color: #64738b;"></i>
                                    <i class="fa-solid fa-star" style="color: #64738b;"></i>
                                    <i class="fa-solid fa-star" style="color: #64738b;"></i> .
                                    <i class="fa-solid fa-comment" style="color: #586884;"></i>
                                </div>
                            </div>';
                            $i++;
                        }
                        ?>
                        <?php
                        // Kiểm tra nếu không có sản phẩm
                        if (empty($dssp)) {
                            echo '
                            <div class="timlai">
                            <p>KHÔNG TÌM THẤY BẤT KỲ KẾT QUẢ NÀO PHÚ HỢP VỚI TỪ KHÓA TRÊN</p>
                            <div class="Teelab-subpages-2">
                            <form id="searchForm" action="index.php?act=sanpham" method="post">
                                    <input type="text" name="kyw" id="searchInput" placeholder="Nhập từ khóa cần tìm kiếm">
                                </form>
                            </div>
                            </div>';
                            
                        } else {
                            foreach ($dssp as $sanpham) {
                            }
                        }
                        ?>
                        </div>
                    </div>
                </div>
            </div>
</div>