// 
// Cookies.set('season', 'y', { expires: 7, path: '' });
// Cookies.set('curentPage', 'season', { path: '' });
// console.log(document.cookie);

window.onload = function () {
  setTimeout(() => {
    document.body.classList.add('ready', 'active');
  }, 500);
}

$(document).ready(function () {

  setTimeout(() => {
    $('jdiv').remove();
    $('#jivo-iframe-container').remove();
  }, 1000);

  // модалки - jQuery
  $("#btn-n").click(function (e) {
    e.preventDefault();
    $("#modal-no").addClass('active');
    $("body").attr('style', 'overflow: hidden');
  });

  $("#btn-y").click(function (e) {
    e.preventDefault();
    $("#modal-yes").addClass('active');
    $("body").attr('style', 'overflow: hidden');
  });

  $(".btn-close").click(function (e) {
    e.preventDefault();
    $(".modal").removeClass('active');
    $("body").attr('style', 'overflow: auto');
  });

});