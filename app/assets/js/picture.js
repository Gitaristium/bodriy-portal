var
  search = window.location.search,
  hash = '';
if (window.location.hash) {
  hash = "#" + window.location.hash;
}
window.history.replaceState(null, null, '/' + search);
Cookies.set('picture', 'y', { expires: 7, path: '' });
Cookies.set('curentPage', 'picture', { path: '' });
// console.log(document.cookie);