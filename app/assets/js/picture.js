var redirect = Cookies.get('redirect');
if (redirect == 'y') {
  ym(83929834, 'hit', '/picture?utm_medium=qr', {
    params: {
      title: 'Бодрые картинки',
      //referer: '/picture?utm_medium=qr'
    }
  });
  Cookies.set('redirect', 'n', {
    expires: 7,
    path: '/'
  });
}
else {
  ym(83929834, 'hit', '/picture', {
    params: {
      title: 'Бодрые картинки',
      //referer: '/picture?utm_medium=qr'
    }
  });
}

window.history.replaceState(null, null, '/');
Cookies.set('picture', 'y', { expires: 7, path: '' });
Cookies.set('curentPage', 'picture', { path: '' });
// console.log(document.cookie);