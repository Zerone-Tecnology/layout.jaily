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
    show_more_card_btn.onclick = function(){
        show_more_card.classList.remove("show_more");
    }
    // if(window.width == 1024){
    //     document.getElementById("header_menu").style.display = 'none';
    // }z
}