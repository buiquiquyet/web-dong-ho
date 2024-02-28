var guidanhgia = document.getElementById('vietdanhgia');
var huydanhgia = document.getElementById('huydanhgia');
var danhgia = document.getElementById('guidanhgia');
var formstar = document.getElementById('formstar');



danhgia.addEventListener('click', function(e) {
    var data = {
        'ten': document.getElementById('fRName').value,
        'nhanxet': document.getElementById('fRContent').value,
        'maLoai': this.getAttribute('data-id'),
    }
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'danhgia.php', true);
    xhr.setRequestHeader('Content-Type', 'application/json');
    xhr.onload = function() {
        if (xhr.status === 200) {
            var data = JSON.parse(xhr.responseText);
            if (data === 'warning') {
                Swal.fire({
                    title: "Cảnh báo",
                    text: "Thông tin không được để trống",
                    icon: "warning",
                    confirmButtonText: "Đóng",
                });
            } else {
                Swal.fire({
                    title: "Thông báo",
                    text: "Đánh giá thành công",
                    icon: "success",
                    confirmButtonText: "Đóng",
                }).then((result) => {
                    if (result.isConfirmed) {
                        formstar.style.display = "none";
                        location.reload();
                    }
                });

            }
        }
    }
    xhr.send(JSON.stringify(data));
});
guidanhgia.addEventListener('click', function(e) {
    e.preventDefault();
    formstar.style.display = "block";


});

huydanhgia.addEventListener('click', function(e) {
    e.preventDefault();
    formstar.style.display = "none";
});

window.onclick = function(event) {
    if (event.target == formstar) {
        formstar.style.display = "none";
    }
}