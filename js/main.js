window.onload = function () {
    var text = document.querySelectorAll(".circle_p");
    for (var i = 0; i < text.length; i++) {
        text[i].innerHTML = text[i].innerHTML.split("").map((char, i) => `<span style="transform:rotate(${i * 10.5}deg)">${char}</span>`).join("");
    }
}