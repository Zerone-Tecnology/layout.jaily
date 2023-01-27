const text = document.querySelector(".circle_text p");
text.innerHTML = text.innerHTML.split("").map((char, i) => `<span style="transform:rotate(${i * 10.5}deg)">${char}</span>`).join("");


const text2 = document.querySelector(".circle_text_2 p");
text2.innerHTML = text2.innerHTML
    .split("")
    .map(
        (char, i) => `<span style="transform:rotate(${i * 10.5}deg)">${char}</span>`
    )
    .join("");
