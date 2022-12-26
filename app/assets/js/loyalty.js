var redirect = Cookies.get('redirect');
if (redirect == 'y') {
  ym(83929834, 'hit', '/loyalty?utm_medium=qr', {
    params: {
      title: 'Система лояльности',
      //referer: '/loyalty?utm_medium=qr'
    }
  });
  Cookies.set('redirect', 'n', {
    expires: 7,
    path: '/'
  });
}
else {
  ym(83929834, 'hit', '/loyalty', {
    params: {
      title: 'Система лояльности',
      //referer: '/loyalty?utm_medium=qr'
    }
  });
}

window.history.replaceState(null, null, '/');
Cookies.set('loyalty', 'y', { expires: 7, path: '' });
Cookies.set('curentPage', 'loyalty', { path: '' });
// console.log(document.cookie);