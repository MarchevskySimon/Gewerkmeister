const images = [];
let x = 0;

images[0] = "img/electrician-g5ca8550b7_1920.jpg";
images[1] = "img/glass-g2f90e5f57_1920.jpg";
setTimeout("changeImage()", 2000);

function changeImage() {
    const img = document.getElementById("img");
    img.src = images[x];
    x++;

    if (x >= images.length) {
        x = 0;
    }
    setTimeout("changeImage()", 2000);
}