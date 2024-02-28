document.addEventListener("DOMContentLoaded", function() {
    moveToId();
});

function moveToId() {
    var navLinks = document.querySelectorAll(".items_link");

    for (var i = 0; i < navLinks.length; i++) {
        navLinks[i].addEventListener("click", function(event) {
            event.preventDefault();
            var id = this.getAttribute("href");
            var yOffset = -10;
            var element = document.querySelector(id);
            var y = element.getBoundingClientRect().top + window.pageYOffset + yOffset;
            window.scrollTo({ top: y, behavior: 'smooth' });
        });
    }
}
// document.addEventListener("DOMContentLoaded", function() {
//     // Lấy phần tử có id "footer"
//     var footer = document.querySelector("#contact1");

//     // Lấy phần tử chứa liên kết có href="#footer" từ phần tử có id "home"
//     var homeLink = document.querySelector("#contact");

//     // Bắt sự kiện click trên liên kết và thực hiện điều hướng
//     homeLink.addEventListener("click", function(event) {
//         event.preventDefault(); // Ngăn chặn chuyển hướng mặc định của trình duyệt
//         var yOffset = -10; // Điều chỉnh vị trí hiển thị của phần tử footer
//         var y = footer.getBoundingClientRect().top + window.pageYOffset + yOffset;
//         window.scrollTo({ top: y, behavior: 'smooth' }); // Thực hiện điều hướng trơn tru
//     });
// });
const btn_send = document.getElementById('btn_send');

btn_send.addEventListener('click', function(e) {
    e.preventDefault();
    var textElement = document.createElement('span');
    var notifice = document.querySelector('.notification');
    if (document.getElementById('hoTen').value === '' || document.getElementById('email').value === '' || document.getElementById('sdt').value === '' || document.getElementById('tinNhan').value === '') {
        textElement.innerHTML = "Thông tin không được để trống";
        notifice.appendChild(textElement);

        notifice.classList.add('show');
        setTimeout(function() {
            notifice.classList.remove('show');

            textElement.remove();
        }, 2000);
    } else {

        var data = {
            'ten': document.getElementById('hoTen').value,
            'email': document.getElementById('email').value,
            'sdt': document.getElementById('sdt').value,
            'tinNhan': document.getElementById('tinNhan').value,
        }
        console.log(data);
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'lienhe.php');
        xhr.setRequestHeader('Content-Type', 'application/json');
        xhr.onload = function() {
            if (xhr.status === 200) {
                var data = JSON.parse(xhr.responseText);
                if (data === 'ok') {
                    textElement.innerHTML = "Gửi thông tin thành công";
                } else {
                    textElement.innerHTML = "Gửi thông tin không thành công";
                }
                notifice.appendChild(textElement);

                notifice.classList.add('show');
                setTimeout(function() {
                    notifice.classList.remove('show');

                    textElement.remove();
                }, 2000);

            }

        }
        xhr.send(JSON.stringify(data));
    }

});
var slideIndex = 0;
var slides = document.getElementsByClassName("slide_col");

function showSlide() {
    // Xóa lớp active khỏi tất cả các div trong lớp slide_col
    for (var i = 0; i < slides.length; i++) {
        slides[i].classList.remove("active");
    }

    // Hiển thị slide đang được xác định bởi biến slideIndex
    slides[slideIndex].classList.add("active");

    // Tăng slideIndex để chuyển đến slide tiếp theo
    slideIndex++;
    if (slideIndex >= slides.length) {
        slideIndex = 0;
    }

    setTimeout(showSlide, 4000); // Thời gian chuyển đổi slide: 3 giây
}

// Bắt đầu chuyển đổi slide tự động
showSlide();