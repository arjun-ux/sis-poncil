document.addEventListener("DOMContentLoaded", function() {
    var scrollToTopBtn = document.getElementById("scrollToTopBtn");

    // Show/hide the scroll-to-top button based on scroll position
    window.addEventListener("scroll", function() {
        if (document.body.scrollTop > 40 || document.documentElement.scrollTop > 40) {
            scrollToTopBtn.style.display = "block";
        } else {
            scrollToTopBtn.style.display = "none";
        }
    });

    // Scroll to the top when the button is clicked
    scrollToTopBtn.addEventListener("click", function() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    });
});
