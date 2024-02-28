window.addEventListener("scroll", function() {
    var scrollPosition = window.pageYOffset;
    var headerHeight = document.querySelector(".header_section").offsetHeight;
    var scrollToTopBtn = document.querySelector(".up_top");

    if (scrollPosition >= headerHeight) {
        scrollToTopBtn.style.display = "block";
    } else {
        scrollToTopBtn.style.display = "none";
    }
});

function scrollToTop() {
    window.scrollTo({
        top: 0,
        behavior: "smooth"
    });
}