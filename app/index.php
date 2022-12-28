<meta name="referrer" content="no-referrer">
<script type="text/javascript" src="/assets/js/jquery.js"></script>
<script type="text/javascript" src="/assets/js/js.cookie.js"></script>
<script type="text/javascript">
var search = '';

if (window.location.search) {
  search = window.location.search;
}

if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|BB|PlayBook|IEMobile|Windows Phone|Kindle|Silk|Opera Mini/i.test(
    navigator.userAgent)) {

  var
    curentPage = Cookies.get('curentPage'),
    picture = Cookies.get('picture'),
    interview = Cookies.get('interview'),
    season = Cookies.get('season'),
    loyalty = Cookies.get('loyalty'),
    quest = Cookies.get('quest'),
    downloads = Cookies.get('downloads'),
    magic = Cookies.get('magic');


  if (curentPage != null && curentPage != '' && curentPage != 'undefinded') {
    window.location = '/' + curentPage + ".php" + search;
  } else {
    //выборка страниц
    if (season != 'y') { //приоритет 1 - сезонка
      //переходим на сезонку
      location = window.location.origin + "/season.php" + search;
    } else {
      if (magic != 'y') { //приоритет 2 - magic
        //переходим на magic
        location = window.location.origin + "/magic.php" + search;
      } else {
        if (interview != 'y') { //приоритет 3 - опросник
          //переходим на опросник
          location = window.location.origin + "/interview.php" + search;
        } else {

          // var randomPages = ["picture", "loyalty", "quest", "downloads"]; //засовывем остальные страницы в массив
          var randomPages = ["season", "magic", "interview"]; //засовывем остальные страницы в массив

          //важные страницы просмотрены
          //выбираем случайную страницу из пулла
          var rand = Math.floor(Math.random() * randomPages.length), //выбираем случанцю страницу
            randomPage = Cookies.get(randomPages[rand]); //выдергиваем по ней куки

          var pageView = false;
          while (pageView == false) {
            if (randomPage != 'y') {
              window.location = '/' + randomPages[rand] + ".php" + search;
              var pageView = true;
              break;
            } else {
              //проверяем все ли страницы просмотрены
              var res;
              res = randomPages.every(function(item, index, array) {
                randomPage = Cookies.get(item);
                if (randomPage == 'y') {
                  return true;
                }
                return false;
              });
              if (res == true) { //если да
                //очищаем куки
                Cookies.set('interview', 'n', {
                  expires: 7,
                  path: '/'
                });
                Cookies.set('picture', 'n', {
                  expires: 7,
                  path: ''
                });
                Cookies.set('loyalty', 'n', {
                  expires: 7,
                  path: '/'
                });
                Cookies.set('quest', 'n', {
                  expires: 7,
                  path: '/'
                });
                Cookies.set('downloads', 'n', {
                  expires: 7,
                  path: '/'
                });
                Cookies.set('magic', 'n', {
                  expires: 7,
                  path: '/'
                });
                //переходим на сезонку
                location = window.location.origin + "/season.php" + search;
                break;
              } else {

                //еще не все
                rand = Math.floor(Math.random() * randomPages.length); //выбираем случайный объект
                randomPage = Cookies.get(randomPages[rand]); //получаем куки этого объекта
              }
            }
          }
        }
      }
    }
  }

} else {
  window.location = '/oops.php' + search;
}
</script>