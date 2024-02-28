var btn_cart_del = document.querySelectorAll('#btn_cart_del');
var cartCountElem = document.getElementById('selection_info--span');
var checkboxes = document.querySelectorAll('.cart_check input[type="checkbox"]');
btn_cart_del.forEach(function(btn) {
    btn.addEventListener('click', function(e) {
        e.preventDefault();
        var maGio = {
            'maGio': this.getAttribute('data-maGio'),
        }
        console.log(maGio);
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'xoaCart.php', true);
        xhr.setRequestHeader('Content-Type', 'application/json');
        xhr.onload = function() {
            if (xhr.status === 200) {
                var data = JSON.parse(xhr.responseText);
                if (data === 'loi') {

                } else {
                    console.log("ok")
                    cartCountElem.textContent = data.cartCount + " sản phẩm";
                    btn.parentNode.remove();
                }
            }
        }
        xhr.send(JSON.stringify(maGio));
    })
});

function getSelectedValues(event) {
    event.preventDefault();
    var selectedValues = [];
    var id;
    checkboxes.forEach(function(checkbox) {
        if (checkbox.checked) {
            id = checkbox.value;
            window.location.href = 'buy.php?maSp=' + encodeURIComponent(id);
        } else {
            console.log('lỗi');
        }
    });
    console.log(id);
}


var checkboxes = document.querySelectorAll('.cart_check input[type="checkbox"]');
var prices = [];

checkboxes.forEach(function(checkbox) {
    checkbox.addEventListener('click', function() {
        var price = parseInt(this.getAttribute('data-price'));
        if (!isNaN(price)) {
            var index = prices.indexOf(price);
            if (checkbox.checked) {
                if (index === -1) {
                    prices.push(price);
                }
            } else {
                if (index !== -1) {
                    prices.splice(index, 1);
                }
            }
            var totalPrice = prices.reduce((total, current) => total + current, 0);
            updateTotalPrice(totalPrice);
        }
    });
});

function updateTotalPrice(totalPrice) {
    var totalPriceElement = document.getElementById('cart_sumBig');
    totalPriceElement.textContent = totalPrice.toLocaleString() + "vnđ";
    document.querySelector('#cart_soluong').textContent = prices.length;
}