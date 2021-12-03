let submenu = document.querySelector('.sub-menu');
let menuitem = document.querySelectorAll('.menu-item');

 let closer = document.createElement('div'),
 activEntry;
 closer.className = "closer";
 document.body.append(closer);

 menuitem.forEach(function (entry) {
     entry.addEventListener("click", function (event){
         event.preventDefault();
         if(entry.children[1]){
            activEntry = entry.children[1];
            entry.children[1].style.display ="flex";
            entry.children[1].style.zIndex = "1000"
            closer.style.display = "block"
            closer.style.zIndex = "999"

        }else{
            window.location.href = entry.children[0].href;
        }
  });
});

closer.addEventListener("click", function (event){
    activEntry.style.display ="none";
    activEntry.style.zIndex = "0"
    closer.style.display = "none"
    closer.style.zIndex = "0"
});


//owl carousel

var bunerSlider = $('.bunerSlider');
var main_carousel_projects = $('#main_carousel_projects');

$(document).ready(function(){


    bunerSlider.find(".owl-carousel").owlCarousel({
        items:1,
        dots: true,
        nav: true,
        lazyLoad: true,
        navContainer: ".navBtnCarousel",
        dotsContainer: ".owlDotsBlock",
        rewind: true,
        autoplay: true,
        loop:"true"
    });

    main_carousel_projects.find(".owl-carousel").owlCarousel({
        items:1,
        dots: true,
        nav: true,
        lazyLoad: true,
        navContainer: ".navBtnCarousel",
        dotsContainer: "#icons_projects",
        rewind: true,
        autoplay: true,
        loop:"true"
    });
  });

// ------------------виды офисных прегородок-------------------


var $tabs = function (target) {
    var
      _elemTabs = (typeof target === 'string' ? document.querySelector(target) : target),
      _eventTabsShow,
      _showTab = function (tabsLinkTarget) {
        var tabsPaneTarget, tabsLinkActive, tabsPaneShow;
        tabsPaneTarget = document.querySelector(tabsLinkTarget.getAttribute('href'));
        tabsLinkActive = tabsLinkTarget.parentElement.querySelector('.partition__link_active');
        tabsPaneShow = tabsPaneTarget.parentElement.querySelector('.partition__pane_show');
        // если следующая вкладка равна активной, то завершаем работу
        if (tabsLinkTarget === tabsLinkActive) {
          return;
        }
        // удаляем классы у текущих активных элементов
        if (tabsLinkActive !== null) {
          tabsLinkActive.classList.remove('partition__link_active');
        }
        if (tabsPaneShow !== null) {
          tabsPaneShow.classList.remove('partition__pane_show');
        }
        // добавляем классы к элементам (в завимости от выбранной вкладки)
        tabsLinkTarget.classList.add('partition__link_active');
        tabsPaneTarget.classList.add('partition__pane_show');
        document.dispatchEvent(_eventTabsShow);
      },
      _switchTabTo = function (tabsLinkIndex) {
        var tabsLinks = _elemTabs.querySelectorAll('.partition__link');
        if (tabsLinks.length > 0) {
          if (tabsLinkIndex > tabsLinks.length) {
            tabsLinkIndex = tabsLinks.length;
          } else if (tabsLinkIndex < 1) {
            tabsLinkIndex = 1;
          }
          _showTab(tabsLinks[tabsLinkIndex - 1]);
        }
      };

    _eventTabsShow = new CustomEvent('tab.show', { detail: _elemTabs });

    _elemTabs.addEventListener('click', function (e) {
      var tabsLinkTarget = e.target;
      // завершаем выполнение функции, если кликнули не по ссылке
      if (!tabsLinkTarget.classList.contains('partition__link')) {
        return;
      }
      // отменяем стандартное действие
      e.preventDefault();
      _showTab(tabsLinkTarget);
    });

    return {
      showTab: function (target) {
        _showTab(target);
      },
      switchTabTo: function (index) {
        _switchTabTo(index);
      }
    }

    };

    $tabs('.tabs');