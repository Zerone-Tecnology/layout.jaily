window.onload = function () {

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

    let show_more_card = document.getElementById("show_more");
    let show_more_card_btn = document.getElementById("show_more_btn");
    show_more_card_btn.onclick = function () {
        show_more_card.classList.remove("show_more");
    }
    var containerEl = document.querySelector('.portfolio_img');
    var containerEl2 = document.querySelector('.portfolio_img.show_more');


    var mixer = mixitup(containerEl);
    var mixer = mixitup(containerEl2);



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

}