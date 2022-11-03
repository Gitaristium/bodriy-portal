window.history.replaceState(null, null, '/');
Cookies.set('loyalty', 'y', { expires: 7, path: '' });
Cookies.set('curentPage', 'loyalty', { path: '' });
// console.log(document.cookie);