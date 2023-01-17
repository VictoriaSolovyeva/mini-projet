const bob = getElement('#bob > div');
const patrick = getElement('#patrick > div');
const carlos = getElement('#carlos > div');
let dance = 0;

/**
 * Event functions
 */
function toggleDance() {
    dance = dance === 1 ? 0 : 1;
    [bob, patrick, carlos].forEach((div) => {
    dance === 1
      ? div.classList.replace("normal", "dance")
      : div.classList.replace("dance", "normal");
  });
}

/**
 * Helper Document functions
 */
function getElement(elmt) {
    return document.querySelector(elmt);
}
