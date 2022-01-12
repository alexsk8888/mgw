let submenu = document.querySelector(".sub-menu");
let menuitem = document.querySelectorAll(".menu-item");

let closer = document.createElement("div"),
  activEntry;
closer.className = "closer";
document.body.append(closer);

menuitem.forEach(function (entry) {
  entry.addEventListener("click", function (event) {
    event.preventDefault();
    if (entry.children[1]) {
      activEntry = entry.children[1];
      entry.children[1].style.display = "flex";
      entry.children[1].style.zIndex = "1000";
      closer.style.display = "block";
      closer.style.zIndex = "999";
    } else {
      window.location.href = entry.children[0].href;
    }
  });
});

closer.addEventListener("click", function (event) {
  activEntry.style.display = "none";
  activEntry.style.zIndex = "0";
  closer.style.display = "none";
  closer.style.zIndex = "0";
});

//owl carousel

var bunerSlider = $(".bunerSlider");
var main_carousel_projects = $("#main_carousel_projects");

$(document).ready(function () {
  bunerSlider.find(".owl-carousel").owlCarousel({
    items: 1,
    dots: true,
    nav: true,
    lazyLoad: true,
    navContainer: ".navBtnCarousel",
    dotsContainer: ".owlDotsHBlock",

    autoplay: true,
    loop: "true",
  });

  main_carousel_projects.find(".owl-carousel").owlCarousel({
    items: 1,
    dots: true,
    nav: true,
    lazyLoad: true,
    dotsContainer: "#icons_projects",
    rewind: true,
    autoplay: true,
    loop: "true",
  });
});
$(".thumb").click(function () {
  $(".owl-carousel").trigger("to.owl.carousel", [$(this).index(), 500]);
});
var _slider = main_carousel_projects.find(".owl-carousel");
$(".owl-next").click(function () {
  $(_slider).trigger("next.owl.carousel");
});
$(".owl-prev").click(function () {
  $(_slider).trigger("prev.owl.carousel");
});

$(".slide-two").owlCarousel({
  items: 3,
  margin: 10,
  dots: true,
  mouseDrag: true,
  touchDrag: true,
  nav: true,
  autoWidth: true,
  lazyLoad: true,
  autoplay: true,
  rewind: "true",
  autoplayHoverPause: true,
  navContainer: ".about_nav",
});
$(".services_slider").owlCarousel({
  items: 4,
  margin: 20,
  mouseDrag: true,
  touchDrag: true,
  lazyLoad: true,
  rewind: true,
  autoplay: true,
  loop: "true",
  responsiveClass: true,
  responsive: {
    0: {
      items: 1,
    },
    800: {
      items: 3,
    },
    1000: {
      items: 4,
    },
  },
});

// ------------------виды офисных прегородок-------------------

var $tabs = function (target) {
  var _elemTabs =
      typeof target === "string" ? document.querySelector(target) : target,
    _eventTabsShow,
    _showTab = function (tabsLinkTarget) {
      var tabsPaneTarget, tabsLinkActive, tabsPaneShow;
      tabsPaneTarget = document.querySelector(
        tabsLinkTarget.getAttribute("href")
      );
      tabsLinkActive = tabsLinkTarget.parentElement.querySelector(
        ".partition__link_active"
      );
      tabsPaneShow = tabsPaneTarget.parentElement.querySelector(
        ".partition__pane_show"
      );
      // если следующая вкладка равна активной, то завершаем работу
      if (tabsLinkTarget === tabsLinkActive) {
        return;
      }
      // удаляем классы у текущих активных элементов
      if (tabsLinkActive !== null) {
        tabsLinkActive.classList.remove("partition__link_active");
      }
      if (tabsPaneShow !== null) {
        tabsPaneShow.classList.remove("partition__pane_show");
      }
      // добавляем классы к элементам (в завимости от выбранной вкладки)
      tabsLinkTarget.classList.add("partition__link_active");
      tabsPaneTarget.classList.add("partition__pane_show");
      document.dispatchEvent(_eventTabsShow);
    },
    _switchTabTo = function (tabsLinkIndex) {
      var tabsLinks = _elemTabs.querySelectorAll(".partition__link");
      if (tabsLinks.length > 0) {
        if (tabsLinkIndex > tabsLinks.length) {
          tabsLinkIndex = tabsLinks.length;
        } else if (tabsLinkIndex < 1) {
          tabsLinkIndex = 1;
        }
        _showTab(tabsLinks[tabsLinkIndex - 1]);
      }
    };

  _eventTabsShow = new CustomEvent("tab.show", { detail: _elemTabs });
  if (_elemTabs) {
    _elemTabs.addEventListener("click", function (e) {
      var tabsLinkTarget = e.target;
      // завершаем выполнение функции, если кликнули не по ссылке
      if (!tabsLinkTarget.classList.contains("partition__link")) {
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
    },
  };
};

$tabs(".tabs");

let all_but = Array.from(document.querySelectorAll(".tb_but")),
  all_cnt = Array.from(document.querySelectorAll(".tb_cnt"));

all_but.forEach(function (item, i) {
  item.addEventListener(
    "click",
    function (e) {
      removeClassList(all_but, all_cnt);
      this.classList.add("tbb_act");
      all_cnt[i].classList.add("tbc_act");
    },
    false
  );
});

function removeClassList(but, cnt) {
  but.forEach(function (item) {
    item.classList.remove("tbb_act");
  });
  cnt.forEach(function (item) {
    item.classList.remove("tbc_act");
  });
}

let one_sert = Array.from(document.querySelectorAll(".one_sert")),
  close_sert = Array.from(document.querySelectorAll(".close_sert")),
  images_box = Array.from(document.querySelectorAll(".images-box")),
  zoom = Array.from(document.querySelectorAll(".zoom")),
  images_bcgr = document.querySelector(".images_bcgr");
next_img_portfolio = Array.from(
  document.querySelectorAll(".next_img_portfolio")
);
prev_img_portfolio = Array.from(
  document.querySelectorAll(".prev_img_portfolio")
);

next_img_portfolio.forEach(function (item, i) {
  item.addEventListener(
    "click",
    function (e) {
      if (i < next_img_portfolio.length - 1) {
        images_box[i].classList.remove("images-box_active");
        one_sert[i].classList.remove("full_size_sert");
        images_bcgr.classList.remove("images_bcgr_active");
        close_sert[i].classList.remove("close_sert_active");
        next_img_portfolio[i].style.display = "none";
        prev_img_portfolio[i].style.display = "none";

        one_sert[i + 1].classList.add("full_size_sert");
        images_bcgr.classList.add("images_bcgr_active");
        images_box[i + 1].classList.add("images-box_active");
        close_sert[i + 1].classList.add("close_sert_active");
        next_img_portfolio[i + 1].style.display = "block";
        prev_img_portfolio[i + 1].style.display = "block";
      }
    },
    false
  );
});

prev_img_portfolio.forEach(function (item, i) {
  item.addEventListener(
    "click",
    function (e) {
      if (i > 0) {
        images_box[i].classList.remove("images-box_active");
        one_sert[i].classList.remove("full_size_sert");
        images_bcgr.classList.remove("images_bcgr_active");
        close_sert[i].classList.remove("close_sert_active");
        next_img_portfolio[i].style.display = "none";
        prev_img_portfolio[i].style.display = "none";

        one_sert[i - 1].classList.add("full_size_sert");
        images_bcgr.classList.add("images_bcgr_active");
        images_box[i - 1].classList.add("images-box_active");
        close_sert[i - 1].classList.add("close_sert_active");
        next_img_portfolio[i - 1].style.display = "block";
        prev_img_portfolio[i - 1].style.display = "block";
      }
    },
    false
  );
});

one_sert.forEach(function (item, i) {
  item.addEventListener(
    "click",
    function (e) {
      this.classList.add("full_size_sert");
      images_bcgr.classList.add("images_bcgr_active");
      images_box[i].classList.add("images-box_active");
      close_sert[i].classList.add("close_sert_active");
      zoom[i].style.display = "none";
      next_img_portfolio[i].style.display = "block";
      prev_img_portfolio[i].style.display = "block";
    },
    false
  );
});
zoom.forEach(function (item, i) {
  item.addEventListener(
    "click",
    function (e) {
      one_sert[i].classList.add("full_size_sert");
      images_bcgr.classList.add("images_bcgr_active");
      images_box[i].classList.add("images-box_active");
      close_sert[i].classList.add("close_sert_active");
      zoom[i].style.display = "none";
      next_img_portfolio[i].style.display = "block";
      prev_img_portfolio[i].style.display = "block";
    },
    false
  );
});
close_sert.forEach(function (item, i) {
  item.addEventListener(
    "click",
    function (e) {
      images_box[i].classList.remove("images-box_active");
      one_sert[i].classList.remove("full_size_sert");
      images_bcgr.classList.remove("images_bcgr_active");
      close_sert[i].classList.remove("close_sert_active");
      zoom[i].style.display = "block";
      next_img_portfolio[i].style.display = "none";
      prev_img_portfolio[i].style.display = "none";
    },
    false
  );
});
if (images_bcgr) {
  images_bcgr.addEventListener("click", function (e) {
    close_sert.forEach(function (item, i) {
      images_box[i].classList.remove("images-box_active");
      one_sert[i].classList.remove("full_size_sert");
      images_bcgr.classList.remove("images_bcgr_active");
      close_sert[i].classList.remove("close_sert_active");
      zoom[i].style.display = "block";
      next_img_portfolio[i].style.display = "none";
      prev_img_portfolio[i].style.display = "none";
    });
  });
}
// --------------------------------

let thank_blank = Array.from(document.querySelectorAll(".thank_blank")),
  close_thank_blank = document.querySelector(".close_thank_blank"),
  thank_blank_bcgr = document.querySelector(".thank_blank_bcgr");
thank_blank_full = document.querySelector(".thank_blank_full");
next_than_blank = document.querySelector(".next_than_blank");
prev_than_blank = document.querySelector(".prev_than_blank");

next_than_blank.addEventListener(
  "click",
  function (e) {
    for (let i = 0; i < thank_blank.length; i++) {
      if (
        thank_blank[i].src == thank_blank_full.src &&
        i < thank_blank.length - 1
      ) {
        thank_blank_full.src = thank_blank[i + 1].src;
        return i;
      }
    }
  },
  false
);

prev_than_blank.addEventListener(
  "click",
  function (e) {
    thank_blank.forEach(function (item, i) {
      if (item.src == thank_blank_full.src && i > 0) {
        thank_blank_full.src = thank_blank[i - 1].src;
      }
    });
  },
  false
);

thank_blank.forEach(function (item, i) {
  item.addEventListener(
    "click",
    function (e) {
      thank_blank_full.src = this.src;
      thank_blank_bcgr.classList.add("thank_blank_bcgr_active");
      close_thank_blank.classList.add("close_sert_active");
      next_than_blank.style.display = "block";
      prev_than_blank.style.display = "block";
    },
    false
  );
});

if (thank_blank_bcgr) {
  close_thank_blank.addEventListener(
    "click",
    function (e) {
      thank_blank_bcgr.classList.remove("thank_blank_bcgr_active");
      close_thank_blank.classList.remove("close_sert_active");
      next_than_blank.style.display = "none";
      prev_than_blank.style.display = "none";
    },
    false
  );
}

// counter
let days = document.querySelector(".end_time");
if (days) {
  document.addEventListener("DOMContentLoaded", function () {
    let str = days.innerHTML,
      regexp = /\d+/g,
      matchAll = str.matchAll(regexp),
      startDate = Array.from(matchAll),
      s2tartDate = [];
    days.remove();
    startDate.forEach(function (item, i) {
      startDate.push(item[0]);
    });
    startDate[1]--;

    const deadline = new Date(...startDate);
    let timerId = null;
    function declensionNum(num, words) {
      return words[
        num % 100 > 4 && num % 100 < 20
          ? 2
          : [2, 0, 1, 1, 1, 2][num % 10 < 5 ? num % 10 : 5]
      ];
    }
    function countdownTimer() {
      const diff = deadline - new Date();
      if (diff <= 0) {
        clearInterval(timerId);
      }
      const days = diff > 0 ? Math.floor(diff / 1000 / 60 / 60 / 24) : 0;
      const hours = diff > 0 ? Math.floor(diff / 1000 / 60 / 60) % 24 : 0;
      const minutes = diff > 0 ? Math.floor(diff / 1000 / 60) % 60 : 0;
      const seconds = diff > 0 ? Math.floor(diff / 1000) % 60 : 0;
      $days.textContent = days < 10 ? "0" + days : days;
      $hours.textContent = hours < 10 ? "0" + hours : hours;
      $minutes.textContent = minutes < 10 ? "0" + minutes : minutes;
      $seconds.textContent = seconds < 10 ? "0" + seconds : seconds;
      $days.dataset.title = declensionNum(days, ["день", "дня", "дней"]);
      $hours.dataset.title = declensionNum(hours, ["час", "часа", "часов"]);
      $minutes.dataset.title = declensionNum(minutes, [
        "минута",
        "минуты",
        "минут",
      ]);
      $seconds.dataset.title = declensionNum(seconds, [
        "секунда",
        "секунды",
        "секунд",
      ]);
    }
    const $days = document.querySelector(".timer__days");
    const $hours = document.querySelector(".timer__hours");
    const $minutes = document.querySelector(".timer__minutes");
    const $seconds = document.querySelector(".timer__seconds");
    countdownTimer();
    timerId = setInterval(countdownTimer, 1000);
  });
}

// close counter
