var button_capNhat = document.getElementById('btn_capNhat');
var input_soluong = document.getElementById('soluong');
var sum_tong = document.getElementById('sum_tong');
var sum_lastTong = document.getElementById('sum_lastTong');
const magiamgia = document.getElementById('magiamgia');
var btn_giamgia = document.getElementById('btn_giamgia');
var sum_dg;
var dg = button_capNhat.getAttribute('data-buy-dg');
var ktraMa;

var cartCountElem = document.getElementById('selection_info--span');
var notifice = document.querySelector('.notification');
var textElement = document.createElement('span');
var icon = document.createElement('i');

button_capNhat.addEventListener('click', function(e) {
    e.preventDefault();
    show_DonGia();
});
input_soluong.addEventListener('change', function(e) {
    e.preventDefault();
    show_DonGia();
});

function show_DonGia() {
    if (typeof ktraMa === 'string') {
        dg = button_capNhat.getAttribute('data-buy-dg');
        sum_dg = dg * 95 / 100 * input_soluong.value;
        sum_tong.textContent = sum_dg.toLocaleString() + "đ";
        sum_lastTong.textContent = sum_dg.toLocaleString() + "đ";
    } else {
        dg = button_capNhat.getAttribute('data-buy-dg');
        sum_dg = dg * input_soluong.value;
        sum_tong.textContent = sum_dg.toLocaleString() + "đ";
        sum_lastTong.textContent = sum_dg.toLocaleString() + "đ";
    }

}
var check = false;
btn_giamgia.addEventListener('click', function(e) {
    e.preventDefault();

    var ma = {
        giamGia: magiamgia.value,
    }
    if (!check) {
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'checkGiamGia.php');
        xhr.setRequestHeader('Content-Type', 'application/json');

        xhr.onload = function() {
            if (xhr.status === 200) {
                var data = JSON.parse(xhr.responseText);



                if (data === "thanhcong") {


                    icon.classList.add('fa-solid', 'fa-check', 'notificationI');
                    textElement.innerHTML = "Áp dụng thành công--Bạn được giảm 5%!";

                    if (typeof sum_dg === "undefined") {
                        sum_dg = dg * 95 / 100;
                        sum_tong.textContent = sum_dg.toLocaleString() + "đ";
                        sum_lastTong.textContent = sum_dg.toLocaleString() + "đ";
                    } else {
                        sum_dg = sum_dg * 95 / 100;
                        sum_tong.textContent = sum_dg.toLocaleString() + "đ";
                        sum_lastTong.textContent = sum_dg.toLocaleString() + "đ";

                    }
                    check = true;
                    ktraMa = 'coMa';


                } else if (data === "kothanhcong") {

                    textElement.innerHTML = "Sai mã giảm giá!";
                    icon.classList.add('fa-solid', 'fa-triangle-exclamation', 'notificationI');
                    icon.style.color = "red";
                    icon.style.fontSize = "3rem"
                    icon.style.backgroundColor = "white";
                } else if (data === "hong") {

                    textElement.innerHTML = "Vui lòng nhập mã giảm giá!";
                }
                notifice.appendChild(icon);
                notifice.appendChild(textElement);

                notifice.classList.add('show');
                setTimeout(function() {
                    notifice.classList.remove('show');

                    icon.remove();
                    textElement.remove();
                }, 2000);
            }
        };

        xhr.send(JSON.stringify(ma));
    }
});
var hoTen = document.getElementById("ten");
var sdt = document.getElementById("sdt");
var diaChi = document.getElementById("diaChi");
var email = document.getElementById("email");
var soluong_old = document.getElementById("soluong_old");

var btn_buy = document.querySelector(".btn_buy");
btn_buy.addEventListener('click', function(e) {
    e.preventDefault();
    var maSp = this.getAttribute('data-id');
    if (typeof sum_dg === "undefined") {
        sum_dg = dg;

    }
    var data = {

    }
    data.ma = maSp;
    data.tongtien = sum_dg;
    data.hoTen = hoTen.value;
    data.sdt = sdt.value;
    data.diaChi = diaChi.value;
    data.email = email.value;
    data.sl = input_soluong.value;
    data.sl_old = soluong_old.value;
    console.log(data);
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'dathang.php');
    xhr.setRequestHeader('Content-Type', 'application/json');
    xhr.onload = function() {
        if (xhr.status === 200) {
            var data = JSON.parse(xhr.responseText);
            console.log(data);
            if (data === 'warning') {
                textElement.innerHTML = "Vui lòng nhập đầy đủ thông tin!";
                icon.classList.add('fa-solid', 'fa-triangle-exclamation', 'notificationI');
                icon.style.color = "red";
                icon.style.fontSize = "3rem"
                icon.style.backgroundColor = "white";
            } else {
                cartCountElem.textContent = data.cartCount + " sản phẩm";
                icon.classList.add('fa-solid', 'fa-check', 'notificationI');
                textElement.innerHTML = "Đặt hàng thành công!";
            }
            notifice.appendChild(icon);
            notifice.appendChild(textElement);

            notifice.classList.add('show');
            setTimeout(function() {
                notifice.classList.remove('show');

                icon.remove();
                textElement.remove();
            }, 2000);


        }
    };

    xhr.send(JSON.stringify(data));

});