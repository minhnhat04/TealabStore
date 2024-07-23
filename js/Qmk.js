function resetPassword() {
    var sdt = document.getElementById("sdt").value;
    if (sdt === "0396756023") {
      alert("Mã opt đã được gửi qua sđt!");
    } else if (isNaN(sdt)) {
        alert("Vui lòng nhập số điện thoại!");
    } else {
        alert("Số điện thoại không có trong dữ liệu!");
    }
  }