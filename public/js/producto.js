window.addEventListener("load", function() {
var productImg = document.getElementsByClassName('.cloud-zoom-wrap');
productImg.addEventListener('onmousemove', function(event){
    var width = productImg.offsetWidth;
    var heigth = productImg.offsetHeight;
    var mouseX = event.offsetX;
    var mouseY = event.offsetY;

    var bgPosX = (mouseX / width * 100);
    var bgPosY = (mouseY / heigth * 100);

    productImg.style.backgroundPosition = bgPosX, bgPosY;
});
    productImg.addEventListener('onmouseleave', function(){
        productImg.style.backgroundPosition = "center";
    });
})