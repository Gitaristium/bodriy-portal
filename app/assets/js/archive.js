// window.history.replaceState(null, null, '/');
Cookies.set('archive', 'y', { expires: 7, path: '' });
Cookies.set('curentPage', 'archive', { path: '' });
// console.log(document.cookie);

window.onload = function () {
  window.scrollTo(0, 0);
  setTimeout(() => {
    window.scrollTo(0, 0);
    document.body.classList.add('ready');
  }, 1000);
}

$(document).ready(function () {
  $('html, body').animate({ scrollTop: '0px' }, 100);

  setTimeout(() => {
    $('jdiv').remove();
    $('#jivo-iframe-container').remove();
  }, 1000);

});