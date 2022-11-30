window.history.replaceState(null, null, '/');
// console.log(document.cookie);

window.onload = function () {
  window.scrollTo(0, 0);
  setTimeout(() => {
    window.scrollTo(0, 0);
    document.body.classList.add('ready');
  }, 1000);
}