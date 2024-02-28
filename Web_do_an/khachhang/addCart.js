// addToCartBtns.addEventListener('click', function(event) {
//     event.preventDefault();

//     var productId = this.getAttribute('data-product-maSp');
//     var productSl = this.getAttribute('data-product-soLuong');
//     var productmaMuahang = this.getAttribute('data-product-maMuahang');
//     var productAdmin = this.getAttribute('data-product-admin');
//     var productLoai = this.getAttribute(' data-product-loai');


//     var formData = new FormData();
//     formData.append('productId', productId);
//     formData.append('productSl', productSl);
//     formData.append('productmaMuahang', productmaMuahang);
//     formData.append('productAdmin', productAdmin);
//     formData.append('productLoai', productLoai);

//     fetch('addCart.php', {
//             method: 'POST',
//             body: formData
//         })
//         .then(function(response) {
//             return response.json();
//         })
//         .then(function(data) {
//             var cartCountElem = document.getElementsByClassName('selection_info--span');
//             cartCountElem.textContent = data.cartCount;
//         })
//         .catch(function(error) {
//             console.log(error);
//         });
// });
const addToCartBtns = document.getElementById('button_cart');

function addToCart(productId, productSl, productAdmin, productLoai, productmaMuahang) {
    var formData = {
        'productmaMuahang': productmaMuahang,
        'productId': productId,
        'productSl': productSl,
        'productAdmin': productAdmin,
        'productLoai': productLoai,
    }
    console.log(formData);

    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'addCart.php');
    xhr.setRequestHeader('Content-Type', 'application/json');
    xhr.onload = function() {
        if (xhr.status === 200) {
            var data = JSON.parse(xhr.responseText);

            var cartCountElem = document.getElementById('selection_info--span');
            var notifice = document.querySelector('.notification');
            var textElement = document.createElement('span');
            var icon = document.createElement('i');
            if (data === "") {
                textElement.innerHTML = "Bạn cần đăng nhập để thêm vào giỏ hàng";
                icon.classList.add('fa-solid', 'fa-triangle-exclamation', 'notificationI');
                icon.style.color = "red";
                icon.style.fontSize = "3rem"
                icon.style.backgroundColor = "white";

            } else if (data === "hethang") {
                textElement.innerHTML = "Sản phẩm đã hết hàng! Vui lòng chọn sản phẩm khác";
            } else if (data === "dathem") {
                textElement.innerHTML = "Sản phẩm đã có trong giỏ hàng";
            } else {
                cartCountElem.textContent = data.cartCount + " sản phẩm";
                icon.classList.add('fa-solid', 'fa-check', 'notificationI');

                textElement.innerHTML = "Thêm vào giỏ hàng thành công";

            }
            notifice.appendChild(icon);
            notifice.appendChild(textElement);

            notifice.classList.add('show');
            setTimeout(function() {
                notifice.classList.remove('show');

                icon.remove();
                textElement.remove();
            }, 2000);

        } else {
            alert('Đã xảy ra lỗi. Vui lòng thử lại sau.');
        }
    };

    xhr.send(JSON.stringify(formData));
}
addToCartBtns.addEventListener('click', function(e) {
    e.preventDefault();
    var productId = this.getAttribute('data-product-maSp');
    var productSl = this.getAttribute('data-product-soLuong');
    var productmaMuahang = this.getAttribute('data-product-maMuahang');
    var productAdmin = this.getAttribute('data-product-admin');
    var productLoai = this.getAttribute(' data-product-loai');

    addToCart(productId, productSl, productAdmin, productLoai, productmaMuahang);


});