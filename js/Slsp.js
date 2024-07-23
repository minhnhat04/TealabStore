function increaseQuantity() {
    var quantityInput = document.getElementById('quantity');
    var currentValue = parseInt(quantityInput.value);
    var maxValue = parseInt(quantityInput.getAttribute('max'));
    
    if (currentValue < maxValue) {
      quantityInput.value = currentValue + 1;
    }
  }

  function decreaseQuantity() {
    var quantityInput = document.getElementById('quantity');
    var currentValue = parseInt(quantityInput.value);
    var minValue = parseInt(quantityInput.getAttribute('min'));
    
    if (currentValue > minValue) {
      quantityInput.value = currentValue - 1;
    }
  }