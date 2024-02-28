// const thongTin = document.getElementById('thongTin');
// const xacNhan = document.getElementById('xacNhan');
// const thongTin1 = document.getElementById('thongTin1');
// const xacNhan1 = document.getElementById('xacNhan1');

// thongTin.addEventListener('click', e => {
//     e.preventDefault();
//     xacNhan1.classList.remove('grid_userRight--show');
//     thongTin1.classList.add('grid_userRight--show');
//     xacNhan.classList.remove('user_border--lable')
//     thongTin.classList.add('user_border--lable');
// });
// xacNhan.addEventListener('click', e => {
//     e.preventDefault();
//     thongTin1.classList.remove('grid_userRight--show');
//     xacNhan1.classList.add('grid_userRight--show');
//     thongTin.classList.remove('user_border--lable');
//     xacNhan.classList.add('user_border--lable');
// });
const lable_info = document.querySelectorAll('#lable_info');
const box_info = document.querySelectorAll('#box_info');
const btn_nhanhang = document.querySelectorAll('#btn_nhanhang');

for (let i = 0; i < lable_info.length; i++) {
    const input = lable_info[i];
    const box = box_info[i];

    input.addEventListener('click', e => {
        e.preventDefault();
        for (let j = 0; j < box_info.length; j++) {
            box_info[j].classList.remove('grid_userRight--show');
            lable_info[j].classList.remove('user_border--lable');
        }

        box.classList.add('grid_userRight--show');
        input.classList.add('user_border--lable');


    });
}
btn_nhanhang.forEach(function(btn) {
    btn.addEventListener('click', function(event) {

        event.preventDefault();
        var ma = {
            'maMuahang': this.getAttribute('data-ma'),
        }
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'duyet_nhan_hang.php');
        xhr.setRequestHeader('Content-Type', 'application/json');
        xhr.onload = function() {
            if (xhr.status === 200) {
                var data = JSON.parse(xhr.responseText);
                if (data === 'ok') {
                    document.getElementById('trangthai').innerHTML = 'đã nhận hàng';
                } else {
                    console.log('lỗi');
                }

            }
        };
        xhr.send(JSON.stringify(ma));
    })
})