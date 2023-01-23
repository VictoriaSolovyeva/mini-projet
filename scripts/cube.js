const cube = document.getElementById("cube");
const scale = document.getElementById("slidecontainer");
const minX = 0;
const maxX = slidecontainer.offsetWidth;
console.log(slidecontainer.offsetWidth);

let cubeRotation = 0;

document.getElementById("cursor").value = 50;
showVal(50);

function showVal(e) {
    let x = 2 * ((+e + 25) * maxX) / 100;
    cursor.style.left = x + "px";
    cubeRotation = (x / maxX) * 180;
    cube.style.transform = `rotateY(${cubeRotation}deg) rotateX(35deg)`;

}