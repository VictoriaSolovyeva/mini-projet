const bob = getElement('#bob > div');
const patrick = getElement('#patrick > div');
const carlos = getElement('#carlos > div');
let dance = 0;

/**
 * Event functions
 */
function toggleDance() {
    dance = dance === 1 ? 0 : 1;
    [bob, patrick, carlos].forEach((img) => {
    dance === 1
      ? img.classList.replace("sad", "dance")
      : img.classList.replace("dance", "sad");
  });
}

/**
 * Helper Document functions
 */
function getElement(elmt) {
    return document.querySelector(elmt);
}
