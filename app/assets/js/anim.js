//анимация при скролле
const animItems = document.querySelectorAll('.anim-items');

if (animItems.length > 0) {
  window.addEventListener('scroll', animOnScroll);
  function animOnScroll() {
    for (let index = 0; index < animItems.length; index++) {
      const animItem = animItems[index];
      const animItemHeight = animItem.offsetHeight; //высота объекта
      const animItemOffset = offset(animItem).top; //отступ сверху до объекта
      const animStart = 3;

      let animItemPoint = window.innerHeight - animItemHeight / animStart; //точка перехода в долях экрана

      if (animItemHeight > window.innerHeight) {
        animItemPoint = window.innerHeight - window.innerHeight / animStart;
      }

      if ((pageYOffset > animItemOffset - animItemPoint) && pageYOffset < (animItemOffset + animItemHeight)) {
        animItem.classList.add('active');
      }
      else {
        if (!animItem.classList.contains('anim-no-hide')) {
          animItem.classList.remove('active');
        }
      }
    }
  }
}

//паралакс при скролле
const parallaxItems = document.querySelectorAll('.parallax-items');

if (parallaxItems.length > 0) {
  window.addEventListener('scroll', parallaxOnScroll);
  function parallaxOnScroll() {
    for (let index = 0; index < parallaxItems.length; index++) {
      const parallaxItem = parallaxItems[index];
      const parallaxItemHeight = parallaxItem.offsetHeight / 2; //высота объекта пополам
      const parallaxItemOffset = offset(parallaxItem).top + parallaxItemHeight; //отступ сверху до центра объекта
      const parallaxItemPoint = window.innerHeight / 2; //точка перехода - ценр экрана

      const maxMove = 100;
      const minMove = -100;

      let parallaxItemMove = (parallaxItemOffset - parallaxItemPoint - pageYOffset) / 10;

      //параллакс вертикальный
      if (parallaxItems[index].classList.contains('parallax-items-v')) {
        if (parallaxItemMove >= minMove && parallaxItemMove <= maxMove) {
          parallaxItems[index].style.transform = "translateY(" + parallaxItemMove + "%)";
        }
      }
      //в два раза медленнее
      if (parallaxItems[index].classList.contains('parallax-items-v-slow')) {
        if (parallaxItemMove >= minMove && parallaxItemMove <= maxMove) {
          parallaxItemMove = parallaxItemMove / 2;
          parallaxItems[index].style.transform = "translateY(" + parallaxItemMove + "%)";
        }
      }
      //в два раза быстрее
      if (parallaxItems[index].classList.contains('parallax-items-v-fast')) {
        if (parallaxItemMove >= minMove && parallaxItemMove <= maxMove) {
          parallaxItemMove = parallaxItemMove * 2;
          parallaxItems[index].style.transform = "translateY(" + parallaxItemMove + "%)";
        }
      }
      //параллакс горизонтальный левый
      if (parallaxItems[index].classList.contains('parallax-items-h-l')) {
        if (parallaxItemMove >= minMove && parallaxItemMove <= maxMove) {
          let parallaxItemMoveH = -Math.abs(parallaxItemMove);
          parallaxItems[index].style.transform = "translateX(" + parallaxItemMoveH + "%)";
        }
      }
      //параллакс горизонтальный правый
      if (parallaxItems[index].classList.contains('parallax-items-h-r')) {
        if (parallaxItemMove >= minMove && parallaxItemMove <= maxMove) {
          let parallaxItemMoveH = Math.abs(parallaxItemMove);
          parallaxItems[index].style.transform = "translateX(" + parallaxItemMoveH + "%)";
        }
      }
      //параллакс горизонтальный левый в одну сторону
      if (parallaxItems[index].classList.contains('parallax-items-h-l-slow')) {
        if (parallaxItemMove >= 0 && parallaxItemMove <= maxMove) {
          let parallaxItemMoveH = -Math.abs(parallaxItemMove);
          parallaxItems[index].style.transform = "translateX(" + parallaxItemMoveH + "%)";
        }
      }
      //параллакс горизонтальный правый в одну сторону
      if (parallaxItems[index].classList.contains('parallax-items-h-r-slow')) {
        if (parallaxItemMove >= 0 && parallaxItemMove <= maxMove) {
          let parallaxItemMoveH = Math.abs(parallaxItemMove);
          parallaxItems[index].style.transform = "translateX(" + parallaxItemMoveH + "%)";
        }
      }

    }
  }

}

//что-то из интеренета, но помогло
if (animItems.length > 0 || parallaxItems.length > 0) {
  function offset(el) {
    const rect = el.getBoundingClientRect(),
      scrollLeft = window.pageXOffset || document.documentElement.scrollLeft,
      scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    return { top: rect.top + scrollTop, left: rect.left + screenLeft }
  }
  setTimeout(() => {
    animOnScroll();
  }, 500);
}
