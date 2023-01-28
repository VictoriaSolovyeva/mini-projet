const cube = document.getElementById("cube");
const minX = 0;
const maxX = 100;

let cubeRotation = 0;

if (!!document.getElementById("cursor")) {
    document.getElementById("cursor").value = 50;
    rotate(50);
}

function rotate(e) {
    let x = 2 * ((+e + 25) * maxX) / 100;
    cubeRotation = (x / maxX) * 180;
    cube.style.transform = `rotateY(${cubeRotation}deg) rotateX(35deg)`;

}