$(document).ready(function () {
  Share = {
    /**
     * ПОКАЗАТЬ ПОЛЬЗОВАТЕЛЮ ДИАЛОГ ШАРИНГА В СООВЕТСТВИИ С ОПЦИЯМИ
     * МЕТОД ДЛЯ ИСПОЛЬЗОВАНИЯ В INLINE-JS В ССЫЛКАХ
     * ПРИ БЛОКИРОВКЕ ВСПЛЫВАЮЩЕГО ОКНА ПОДСТАВИТ НУЖНЫЙ АДРЕС И ПОЛЗВОЛИТ БРАУЗЕРУ ПЕРЕЙТИ ПО НЕМУ
     *
     * @EXAMPLE <A HREF="" ONCLICK="RETURN SHARE.GO(THIS)">LIKE+</A>
     *
     * @PARAM OBJECT _ELEMENT - ЭЛЕМЕНТ DOM, ДЛЯ КОТОРОГО
     * @PARAM OBJECT _OPTIONS - ОПЦИИ, ВСЕ НЕОБЯЗАТЕЛЬНЫ
     */
    go: function (_element, _options) {
      var
        self = Share,
        options = $.extend(
          {
            type: 'vk',    // ТИП СОЦСЕТИ
            url: location.href,  // КАКУЮ ССЫЛКУ ШАРИМ
            count_url: location.href,  // ДЛЯ КАКОЙ ССЫЛКИ КРУТИМ СЧЁТЧИК
            title: document.title, // ЗАГОЛОВОК ШАРИНГА
            image: '',             // КАРТИНКА ШАРИНГА
            text: '',             // ТЕКСТ ШАРИНГА
          },
          $(_element).data(), // ЕСЛИ ПАРАМЕТРЫ ЗАДАНЫ В DATA, ТО ЧИТАЕМ ИХ
          _options            // ПАРАМЕТРЫ ИЗ ВЫЗОВА МЕТОДА ИМЕЮТ НАИВЫСШИЙ ПРИОРИТЕТ
        );

      if (self.popup(link = self[options.type](options)) === null) {
        // ЕСЛИ НЕ УДАЛОСЬ ОТКРЫТЬ ПОПАП
        if ($(_element).is('a')) {
          // ЕСЛИ ЭТО <A>, ТО ПОДСТАВЛЯЕМ АДРЕС И ПРОСИМ БРАУЗЕР ПРОДОЛЖИТЬ ПЕРЕХОД ПО ССЫЛКЕ
          $(_element).prop('href', link);
          return true;
        }
        else {
          // ЕСЛИ ЭТО НЕ <A>, ТО ПЫТАЕМСЯ ПЕРЕЙТИ ПО АДРЕСУ
          location.href = link;
          return false;
        }
      }
      else {
        // ПОПАП УСПЕШНО ОТКРЫТ, ПРОСИМ БРАУЗЕР НЕ ПРОДОЛЖАТЬ ОБРАБОТКУ
        return false;
      }
    },

    // ВКОНТАКТЕ
    vk: function (_options) {
      var options = $.extend({
        url: location.href,
        title: document.title,
        image: '',
        text: '',
      }, _options);

      return 'http://vkontakte.ru/share.php?'
        + 'url=' + encodeURIComponent(options.url)
        + '&title=' + encodeURIComponent(options.title)
        + '&description=' + encodeURIComponent(options.text)
        + '&image=' + encodeURIComponent(options.image)
        + '&noparse=true';
    },

    // ОДНОКЛАССНИКИ
    ok: function (_options) {
      var options = $.extend({
        url: location.href,
        text: '',
      }, _options);

      return 'http://www.odnoklassniki.ru/dk?st.cmd=addShare&st.s=1'
        + '&st.comments=' + encodeURIComponent(options.text)
        + '&st._surl=' + encodeURIComponent(options.url);
    },

    // FACEBOOK
    fb: function (_options) {
      var options = $.extend({
        url: location.href,
        title: document.title,
        image: '',
        text: '',
      }, _options);

      return 'http://www.facebook.com/sharer.php?s=100'
        + '&p[title]=' + encodeURIComponent(options.title)
        + '&p[summary]=' + encodeURIComponent(options.text)
        + '&p[url]=' + encodeURIComponent(options.url)
        + '&p[images][0]=' + encodeURIComponent(options.image);
    },

    // ЖИВОЙ ЖУРНАЛ
    lj: function (_options) {
      var options = $.extend({
        url: location.href,
        title: document.title,
        text: '',
      }, _options);

      return 'http://livejournal.com/update.bml?'
        + 'subject=' + encodeURIComponent(options.title)
        + '&event=' + encodeURIComponent(options.text + '<br/><a href="' + options.url + '">' + options.title + '</a>')
        + '&transform=1';
    },

    // ТВИТТЕР
    tw: function (_options) {
      var options = $.extend({
        url: location.href,
        count_url: location.href,
        title: document.title,
      }, _options);

      return 'http://twitter.com/share?'
        + 'text=' + encodeURIComponent(options.title)
        + '&url=' + encodeURIComponent(options.url)
        + '&counturl=' + encodeURIComponent(options.count_url);
    },

    // GOOGLE+
    gg: function (_options) {
      var options = $.extend({
        url: location.href
      }, _options);

      return 'https://plus.google.com/share?url='
        + encodeURIComponent(options.url);
    },

    // MAIL.RU
    mr: function (_options) {
      var options = $.extend({
        url: location.href,
        title: document.title,
        image: '',
        text: '',
      }, _options);

      return 'http://connect.mail.ru/share?'
        + 'url=' + encodeURIComponent(options.url)
        + '&title=' + encodeURIComponent(options.title)
        + '&description=' + encodeURIComponent(options.text)
        + '&imageurl=' + encodeURIComponent(options.image);
    },

    // ОТКРЫТЬ ОКНО ШАРИНГА
    popup: function (url) {
      return window.open(url, '', 'toolbar=0,status=0,scrollbars=1,width=626,height=436');
    }
  }

  $(document).on('click', '.social-share', function () {
    Share.go(this);
  });
});