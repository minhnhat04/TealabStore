// Lấy tham chiếu đến các phần tử cần sử dụng
var toggleSearchButton = document.getElementById("toggleSearchButton");
var searchBar = document.getElementById("searchBar");

// Thêm sự kiện click vào nút
toggleSearchButton.addEventListener("click", function() {
  if (searchBar.style.display === "block") {
    searchBar.style.display = "none";
  } else {
    searchBar.style.display = "block";
  }
});


$(document).ready(function () {
    $(".Thanh-menu a").click(function () {
        $(".Thanh-menu a").removeClass("selected");
        $(this).addClass("selected");
    });
});