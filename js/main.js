document.addEventListener("DOMContentLoaded", function () {

    var text = document.querySelectorAll(".circle_p");
    for (var i = 0; i < text.length; i++) {
        text[i].innerHTML = text[i].innerHTML.split("").map((char, i) => `<span style="transform:rotate(${i * 10.5}deg)">${char}</span>`).join("");
    }

    let burger_btn = document.getElementById("burger_menu");
    let menu = document.getElementById("menu");
    let mobile_nav = document.getElementById("mobile_nav");
    let menu_close_btn = document.getElementById("menu_close_btn");
    burger_btn.onclick = function () {
        menu.style.display = "block";
        menu.style.width = "-webkit-fill-available";
        mobile_nav.style.display = "block";
    }
    menu_close_btn.onclick = function () {
        menu.style.display = "none";
        mobile_nav.style.display = "none";
    }


    var containerEl = document.querySelector('.portfolio_img');


    var mixer = mixitup(containerEl);



    let portfolio_nav = document.querySelectorAll(".portfolio_nav ul li");
    for (var i = 0; i < portfolio_nav.length; i++) {
        portfolio_nav[i].onclick = function () {
            for (var i = 0; i < portfolio_nav.length; i++) {
                portfolio_nav[i].classList.remove("active")
            }
            this.classList.add("active");
        }
    }

    // var phoneMask = IMask(document.getElementById('imask_phone'), {mask: '+{7}(000)000-00-00'});

    var phoneMask = IMask(
        document.getElementById('imask_phone'), {
        mask: '+{7}(000)000-00-00'
    });
    var phoneMaskModal = IMask(
        document.getElementById('modal_imask_phone'), {
        mask: '+{7}(000)000-00-00'
    });



    let open_modal = document.querySelector(".call_back_modal_wrapper");
    var open_modalbtn = document.querySelectorAll("#open_modal_btn");
    var close_modalbtn = document.querySelectorAll(".close_modal_btn");
    for (var i = 0; i < open_modalbtn.length; i++) {
        open_modalbtn[i].onclick = function () {
            open_modal.style.display = ("block");
        }
    }
    for (var i = 0; i < close_modalbtn.length; i++) {
        close_modalbtn[i].onclick = function () {
            open_modal.style.display = ("none");
        }
    }
    
});