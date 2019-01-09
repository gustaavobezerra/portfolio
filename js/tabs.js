var divs_img = document.getElementsByClassName("divs_img");
var divs_logo = document.getElementsByClassName("divs_logo");
var i;

function showFlyer(){
    for(i = 0; i < divs_logo.length; i++){
        divs_logo[i].style.display = "none";
    }
    for(i = 0; i < divs_img.length; i++){
        divs_img[i].style.display = "block";
    }
}

function showLogo(){
    for(i = 0; i < divs_img.length; i++){
        divs_img[i].style.display = "none";
    }
    for(i = 0; i < divs_logo.length; i++){
        divs_logo[i].style.display = "block";
    }
}