const search_input = document.getElementById('search_inputPhanLoai');
const btn_search = document.getElementById('btn_search');
var grid_row = document.getElementById('grid_row');
var maMuaHang = btn_search.getAttribute('data-maMuaHang ');
btn_search.addEventListener('click', function(e) {
    e.preventDefault();
    var valueInput = {
        'value': search_input.value,
    }
    if (search_input.value === '') {
        window.location.href = window.location.href;
    } else {

        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'timkiemsp.php');
        xhr.setRequestHeader('Content-Type', 'application/json');
        xhr.onload = function() {
            if (xhr.status === 200) {
                var data = JSON.parse(xhr.responseText);
                if (data) {
                    if (data.length === 0) {
                        showData(data);
                        var p = document.createElement("p");
                        p.className = "grid_row--lable ";

                        p.textContent = "Không tìm thấy sản phẩm có tên \"" + search_input.value + "\"";
                        grid_row.appendChild(p);


                    } else {

                        showData(data);
                    }
                    console.log(data);
                }


            }
        };
        xhr.send(JSON.stringify(valueInput));
    }

});


function showData(data) {
    while (grid_row.firstChild) {
        grid_row.removeChild(grid_row.firstChild);
    }
    var i = 0;
    data.forEach(function(item) {
        var h2 = document.createElement("h2");
        h2.className = "grid_row--lable lable_phanloai";
        h2.textContent = "ĐỒNG HỒ BÁN CHẠY NHẤT";

        var div = document.createElement("div");
        div.className = "grid_news grid_column-2-4 grid_hover";

        var img = document.createElement("img");
        img.src = "img/" + item.anh;
        div.appendChild(img);

        var a = document.createElement("a");
        // a.href = "product.php";
        a.href = "product.php?maLoai=" + data[i][0] + "&loai=" + data[i][1] + "&maMuahang=" + maMuaHang;

        a.className = "btn show_product";
        a.textContent = "Mua hàng";
        div.appendChild(a);

        var introduceDiv = document.createElement("div");
        introduceDiv.className = "product_introduce";

        var h3 = document.createElement("h3");
        h3.className = "grid_product-lable";
        h3.textContent = item.tenSp;
        introduceDiv.appendChild(h3);

        var priceDiv = document.createElement("div");
        priceDiv.className = "product_price";

        var p = document.createElement("p");
        p.textContent = "Price:";
        priceDiv.appendChild(p);

        var span = document.createElement("span");
        var donGia = item.donGia;
        var giaFormatted = (new Number(donGia)).toLocaleString('vi-VN');
        span.textContent = giaFormatted + "VNĐ";
        priceDiv.appendChild(span);

        introduceDiv.appendChild(priceDiv);
        div.appendChild(introduceDiv);

        grid_row.appendChild(h2);
        grid_row.appendChild(div);
        i++;

    });
}