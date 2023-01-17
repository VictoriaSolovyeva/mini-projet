const bob = getElement('#bob > div');
const patrick = getElement('#patrick > div');
const carlos = getElement('#carlos > div');
const audioButton = getElement("#audio");
const audio = getElement('audio');
audio.volume = 0;

toggleAudio();

/**
 * Event functions
 */
function toggleAudio() {
    audio.volume = audio.volume === 1 ? 0 : 1;
    [bob, patrick, carlos].forEach((img) => {
    audio.volume === 1
      ? img.classList.replace("sad", "dance")
      : img.classList.replace("dance", "sad");
  });
  audioButton.innerHTML =
    audio.volume === 1 ? "Turn music off" : "Turn music on";
}

/**
 * Helper Document functions
 */
function getElement(elmt) {
    return document.querySelector(elmt);
}
