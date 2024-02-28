const btn_dangnhap = document.getElementById("btn_dangnhap");

btn_dangnhap.addEventListener('click', function(e) {
    e.preventDefault();
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'checkthongtin.php', true);

    xhr.onload = function(e) {
        if (xhr.status === 200) {
            var ma = xhr.responseText;
            console.log(ma);

            if (ma === "") {
                var notifice1 = document.querySelector('.notification');
                var textElement = document.createElement('span');
                var icon1 = document.createElement('i');
                textElement.innerHTML = "Bạn cần đăng nhập để xem thông tin!";
                icon1.classList.add('fa-solid', 'fa-triangle-exclamation', 'notificationI');
                icon1.style.color = "#f0d43a";
                icon1.style.fontSize = "3rem"
                icon1.style.backgroundColor = "white";
                notifice1.appendChild(icon1);
                notifice1.appendChild(textElement);

                notifice1.classList.add('show');
                setTimeout(function() {
                    notifice1.classList.remove('show');

                    icon1.remove();
                    textElement.remove();
                }, 2000);

            } else {
                window.location.href = 'user.php';
            }
        }
    };

    xhr.send();

});