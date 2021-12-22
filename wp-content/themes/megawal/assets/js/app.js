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

  $(".slide-two").owlCarousel({
    items:3,
    margin:10,
    dots: true,
    mouseDrag: true,
    touchDrag: true,
    nav: true,
    autoWidth: true,
    lazyLoad: true,
    navContainer: ".navBtnCarousel",
    dotsContainer: ".owlDotsBlock",
    rewind: true,
    autoplay: true,
    loop:"true",
    navContainer: ".about_nav",

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
if(_elemTabs){
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
}
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

    let all_but = Array.from(document.querySelectorAll('.tb_but')),
        all_cnt= Array.from(document.querySelectorAll('.tb_cnt'));

all_but.forEach(function(item, i) {
  // console.log("element" + item + " number " + i);  

        item.addEventListener('click', function(e) {
          removeClassList(all_but, all_cnt)
          this.classList.add('tbb_act');
          all_cnt[i].classList.add('tbc_act');          
     }, false);
});

function removeClassList(but, cnt){
  but.forEach(function(item) {
    item.classList.remove('tbb_act')
  })
  cnt.forEach(function(item) {
    item.classList.remove('tbc_act')
  })
}


let one_sert =  Array.from(document.querySelectorAll('.one_sert')),
    close_sert= Array.from(document.querySelectorAll('.close_sert')),
    images_box= Array.from(document.querySelectorAll('.images-box')),
    zoom= Array.from(document.querySelectorAll('.zoom')),
    images_bcgr = document.querySelector('.images_bcgr');

    one_sert.forEach(function(item, i) {
    
            item.addEventListener('click', function(e) {
              this.classList.add('full_size_sert');
              images_bcgr.classList.add('images_bcgr_active')       
              images_box[i].classList.add('images-box_active')       
              close_sert[i].classList.add('close_sert_active')
              zoom[i].style.display = 'none'       
         }, false);

    });
    zoom.forEach(function(item, i) {
    
            item.addEventListener('click', function(e) {
              one_sert[i].classList.add('full_size_sert')
              images_bcgr.classList.add('images_bcgr_active')       
              images_box[i].classList.add('images-box_active')       
              close_sert[i].classList.add('close_sert_active')  
              zoom[i].style.display = 'none'      
         }, false);

    });
    close_sert.forEach(function(item, i) {
    
            item.addEventListener('click', function(e) {
            images_box[i].classList.remove('images-box_active')       
            one_sert[i].classList.remove('full_size_sert')
            images_bcgr.classList.remove('images_bcgr_active')
            close_sert[i].classList.remove('close_sert_active')
            zoom[i].style.display = 'block'      
         }, false);

    });
    if(images_bcgr){
    images_bcgr.addEventListener('click', function(e) {
      close_sert.forEach(function(item, i) {
        images_box[i].classList.remove('images-box_active')       
        one_sert[i].classList.remove('full_size_sert')
        images_bcgr.classList.remove('images_bcgr_active')
        close_sert[i].classList.remove('close_sert_active')  
        zoom[i].style.display = 'block' 
      },)
    });}
// --------------------------------

let thank_blank =  Array.from(document.querySelectorAll('.thank_blank')),
    close_thank_blank = document.querySelector('.close_thank_blank'),
    thank_blank_bcgr = document.querySelector('.thank_blank_bcgr');
    thank_blank_full = document.querySelector('.thank_blank_full');
    thank_blank.forEach(function(item, i) {
    
            item.addEventListener('click', function(e) {
              thank_blank_full.src = this.src
              thank_blank_bcgr.classList.add('thank_blank_bcgr_active')

              close_thank_blank.classList.add('close_sert_active')
                   
         }, false);

    });

    
     if(thank_blank_bcgr){
     thank_blank_bcgr.addEventListener('click', function(e) {
              thank_blank_bcgr.classList.remove('thank_blank_bcgr_active')
        close_thank_blank.classList.remove('close_sert_active')  
             
               
         }, false);

    
    thank_blank_bcgr.addEventListener('click', function(e) {
      
     
        thank_blank_bcgr.classList.remove('thank_blank_bcgr_active')
        close_thank_blank.classList.remove('close_sert_active')  
        
      
    });}