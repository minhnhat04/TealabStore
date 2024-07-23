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
</style>
<div id="loader">
    <div class="circle">
        <div class="circle1"></div>
        <div class="circle2"></div>
    </div>
</div>
<div class="Teelab-content" >
    <div class="Teelab-content-2" >
    </div>
        <div class="San-Pham-Ban-chay">
            <div class="Teelab-content" >
                <div class="San-Pham-Ban-chay">
                    <h2>Tất cả sản phẩm</h2>
                    <div class="Teelab-product-1" >
                    <?php
                        $i = 0;
                        foreach ($spsp as $sp) {
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
                                    <a href="'.$linksp.'"><img src="'.$hinhspHover.'" alt=""></a>                                </div>
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
                        </div>
                    </div>
                </div>
            </div>
</div>