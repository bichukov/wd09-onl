"use strict";

var b = document.querySelector(".header-title");
var z = document.querySelector(".inpt-search");
var elem = document.getElementById("ddd"); // находим элемент

var a = document.querySelector(".sdsdsd").addEventListener('click', function (e) {
  b.classList.add("active");
  document.body.classList.add('hident');
});
var c = document.querySelector(".sdsdsd1").addEventListener('click', function (e) {
  b.classList.remove("active");
  document.body.classList.remove('hident');
});
var sBtns = document.querySelectorAll(".sdsdsd2");
if (sBtns.length > 0) {
  sBtns.forEach(function (v) {
    v.addEventListener('click', function (e) {
      b.classList.remove("active");
      document.body.classList.remove('hident');
      z.classList.add("active-search");
      z.scrollIntoView({
        block: "start",
        behavior: "smooth"
      });
    });
  });
}
var zv = document.querySelector(".t985__close-icon").addEventListener('click', function (e) {
  z.classList.remove("active-search");
});
function myFunction() {
  var targ = event.target;
  var parent = targ.closest(".dropdown");
  parent.querySelector(".dropdown-content").classList.toggle("show");
  targ.classList.toggle("_active");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function (event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
};
var copyLink = document.querySelector(".copy-link");
if (copyLink) {
  copyLink.onclick = function (e) {
    e.preventDefault();
    navigator.clipboard.writeText("".concat(copyLink.innerText));
  };
}
var slider = document.querySelector('.swiperMain');
var sliderNav = document.querySelector('.swiperNav');
var mySwiperNav = new Swiper(sliderNav, {
  slidesPerView: 7,
  spaceBetween: 16,
  watchOverflow: true,
  watchSlidesProgress: true,
  freeMode: false,
  centeredSlides: false,
  initialSlide: 0,
  loop: false,
  breakpoints: {
    120: {
      slidesPerView: 5,
      spaceBetween: 5
    },
    489: {
      direction: 'horizontal',
      spaceBetween: 10,
      slidesPerView: 7
    }
  }
});
var mySwiper = new Swiper(slider, {
  slidesPerView: 1,
  spaceBetween: 20,
  watchSlidesProgress: true,
  initialSlide: 0,
  loop: true,
  thumbs: {
    swiper: mySwiperNav
  }
});
var fancy = document.querySelector('[data-fancybox="gallery"]');
if (fancy) {
  $().fancybox({
    selector: '.swiperMain .swiper-slide:not(.swiper-slide-duplicate)'
  });
}
var btnsProd = document.querySelectorAll(".product-description__title_btn");
if (btnsProd.length > 0) {
  btnsProd.forEach(function (btn) {
    btn.onclick = function (e) {
      e.preventDefault();
      if (!btn.classList.contains("_active")) {
        var attr = btn.getAttribute("data-attr");
        var prevBtn = document.querySelector(".product-description__title_btn._active");
        var prevBl = document.querySelector(".product-description__el._active");
        prevBtn.classList.remove("_active");
        prevBl.classList.remove("_active");
        btn.classList.add("_active");
        var newEl = document.querySelector(".".concat(attr));
        newEl.classList.add("_active");
      }
    };
  });
}
var moreTriggers = document.querySelectorAll(".product-more__trigger");
if (moreTriggers.length > 0) {
  moreTriggers.forEach(function (btn) {
    btn.onclick = function (e) {
      e.preventDefault();
      btn.classList.toggle("_active");
      var panel = btn.nextElementSibling;
      if (panel.style.maxHeight) {
        panel.style.maxHeight = null;
      } else {
        panel.style.maxHeight = panel.scrollHeight + "px";
      }
    };
  });
}
var mobFilters = document.querySelector(".catalog__aside_toggle");
var catalogAside = document.querySelector(".catalog__aside");
if (mobFilters) {
  mobFilters.onclick = function (e) {
    e.preventDefault();
    mobFilters.classList.toggle("_active");
    if (catalogAside.classList.contains("el-show")) {
      catalogAside.classList.remove("el-show");
      var active = document.querySelectorAll(".filter__title._active");
      if (active.length > 0) {
        active.forEach(function (el) {
          el.classList.remove("_active");
          var panel = el.nextElementSibling;
          if (panel.style.maxHeight) {
            panel.style.maxHeight = null;
          }
        });
      }
    }
    var panel = document.querySelector(".catalog__aside-wrap");
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  };
}
var filtersTitle = document.querySelectorAll(".filter__title");
if (filtersTitle.length > 0) {
  filtersTitle.forEach(function (el) {
    el.onclick = function (e) {
      if (window.innerWidth <= 768) {
        el.classList.toggle("_active");
        var active = document.querySelector(".filter__title._active");
        if (active) {
          catalogAside.classList.add("el-show");
        } else {
          catalogAside.classList.remove("el-show");
        }
        var panel = el.nextElementSibling;
        if (panel.style.maxHeight) {
          panel.style.maxHeight = null;
        } else {
          panel.style.maxHeight = panel.scrollHeight + "px";
        }
      }
    };
  });
}
var mainSwiper = new Swiper(".mySwiper .swiper-container", {
  slidesPerView: 1,
  spaceBetween: 0,
  watchOverflow: true,
  watchSlidesProgress: true,
  freeMode: false,
  centeredSlides: false,
  initialSlide: 0,
  loop: true,
  speed: 600,
  navigation: {
    nextEl: ".mySwiper .swiper-button-next",
    prevEl: ".mySwiper .swiper-button-prev"
  },
  pagination: {
    el: ".mySwiper .swiper-pagination",
    clickable: true
  },
  autoplay: {
    delay: 2500
  }
});
var selects = document.querySelectorAll(".itc-select");
if (selects.length > 0) {
  selects.forEach(function (select) {
    new ItcCustomSelect(select);
  });
}
var lowerSlider = document.querySelector('#lower');
var upperSlider = document.querySelector('#upper');
document.querySelector('#two').value = upperSlider.value;
document.querySelector('#one').value = lowerSlider.value;
var lowerVal = parseInt(lowerSlider.value);
var upperVal = parseInt(upperSlider.value);
upperSlider.oninput = function () {
  lowerVal = parseInt(lowerSlider.value);
  upperVal = parseInt(upperSlider.value);
  if (upperVal < lowerVal + 4) {
    lowerSlider.value = upperVal - 4;
    if (lowerVal == lowerSlider.min) {
      upperSlider.value = 4;
    }
  }
  document.querySelector('#two').value = this.value;
};
lowerSlider.oninput = function () {
  lowerVal = parseInt(lowerSlider.value);
  upperVal = parseInt(upperSlider.value);
  if (lowerVal > upperVal - 4) {
    upperSlider.value = lowerVal + 4;
    if (upperVal == upperSlider.max) {
      lowerSlider.value = parseInt(upperSlider.max) - 4;
    }
  }
  document.querySelector('#one').value = this.value;
};
var mobSearch = document.querySelector(".catalog-mob-search");
var catalogTop = document.querySelector(".catalog__top");
if (mobSearch) {
  mobSearch.onclick = function (e) {
    e.preventDefault();
    catalogTop.classList.toggle("show");
  };
}