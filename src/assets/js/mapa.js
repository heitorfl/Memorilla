


// Script das regiões do mapa



    areas = document.querySelector(".areaMapa")
    caption = document.querySelector("#caption");
    captions = [
    "\"Primeira seção do nosso lindo e fúnebre memorial\"",
    "\"Segunda seção do nosso lindo e fúnebre memorial\"",
    "\"Nossa loja!\"",
    "\"Uma sala pra você descansar!\""
    ];
    img = document.querySelector("#imgArea");

    function showArea(area){
        caption.innerHTML = captions[area];
        img.src = "/Memorilla/src/assets/img/area" + area + ".png"
    }

document.addEventListener("DOMContentLoaded", ()=>{
    showArea(0);    
});
