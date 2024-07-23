            // Lấy tham chiếu đến các phần tử cần sử dụng
            var toggleButton = document.getElementById("toggleButton");
            var menu = document.getElementById("menu");
            var closeButton = document.getElementById("closeButton");
        
            // Thêm sự kiện click vào nút hiển thị menu
            toggleButton.addEventListener("click", function() {
              menu.style.display = "block";
            });
        
            // Thêm sự kiện click vào nút đóng menu
            closeButton.addEventListener("click", function() {
              menu.style.display = "none";
            });