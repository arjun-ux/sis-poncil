const toggle = document.querySelector("#toggle-btn");
toggle.addEventListener("click", function () {
    document.querySelector("#sidebar").classList.toggle("expand");
});

const toggle_mobile = document.querySelector('#sidebarCollapse');
toggle_mobile.addEventListener('change', function () {

    if (this.checked) {
        document.querySelector('#sidebar').classList.add('exMobile');
    } else {
        document.querySelector('#sidebar').classList.remove('exMobile');

    }
});
