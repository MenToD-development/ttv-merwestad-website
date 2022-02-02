/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/components/audio-player.js":
/*!*************************************************!*\
  !*** ./resources/js/components/audio-player.js ***!
  \*************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/**
 * Mouse move parallax effect
 * @requires https://github.com/wagerfield/parallax
*/
var audioPlayer = function () {
  var player = document.querySelectorAll('.audio-player');
  if (player.length === 0) return;

  var _loop = function _loop(i) {
    var playerContainer = player[i],
        audio = playerContainer.querySelector('audio'),
        playButton = playerContainer.querySelector('.ap-play-button'),
        seekSlider = playerContainer.querySelector('.ap-seek-slider'),
        volumeSlider = playerContainer.querySelector('.ap-volume-slider'),
        durationTimeLabel = playerContainer.querySelector('.ap-duration'),
        currentTimeLabel = playerContainer.querySelector('.ap-current-time');
    var playState = 'play',
        raf = null; // Start / stop audio

    playButton.addEventListener('click', function (e) {
      if (playState === 'play') {
        e.currentTarget.classList.add('ap-pause');
        audio.play();
        requestAnimationFrame(whilePlaying);
        playState = 'pause';
      } else {
        e.currentTarget.classList.remove('ap-pause');
        audio.pause();
        cancelAnimationFrame(raf);
        playState = 'play';
      }
    }); // Instantiate sliders: Seek slider + Volume slider

    var showRangeProgress = function showRangeProgress(rangeInput) {
      if (rangeInput === seekSlider) playerContainer.style.setProperty('--seek-before-width', rangeInput.value / rangeInput.max * 100 + '%');else playerContainer.style.setProperty('--volume-before-width', rangeInput.value / rangeInput.max * 100 + '%');
    };

    seekSlider.addEventListener('input', function (e) {
      showRangeProgress(e.target);
    });
    volumeSlider.addEventListener('input', function (e) {
      showRangeProgress(e.target);
    });

    var calculateTime = function calculateTime(secs) {
      var minutes = Math.floor(secs / 60);
      var seconds = Math.floor(secs % 60);
      var returnedSeconds = seconds < 10 ? "0".concat(seconds) : "".concat(seconds);
      return "".concat(minutes, ":").concat(returnedSeconds);
    };

    var displayDuration = function displayDuration() {
      durationTimeLabel.textContent = calculateTime(audio.duration);
    };

    var setSliderMax = function setSliderMax() {
      seekSlider.max = Math.floor(audio.duration);
    };

    var displayBufferedAmount = function displayBufferedAmount() {
      var bufferedAmount = Math.floor(audio.buffered.end(audio.buffered.length - 1));
      playerContainer.style.setProperty('--buffered-width', "".concat(bufferedAmount / seekSlider.max * 100, "%"));
    };

    var whilePlaying = function whilePlaying() {
      seekSlider.value = Math.floor(audio.currentTime);
      currentTimeLabel.textContent = calculateTime(seekSlider.value);
      playerContainer.style.setProperty('--seek-before-width', "".concat(seekSlider.value / seekSlider.max * 100, "%"));
      raf = requestAnimationFrame(whilePlaying);
    };

    if (audio.readyState > 0) {
      displayDuration();
      setSliderMax();
      displayBufferedAmount();
    } else {
      audio.addEventListener('loadedmetadata', function () {
        displayDuration();
        setSliderMax();
        displayBufferedAmount();
      });
    }

    audio.addEventListener('progress', displayBufferedAmount);
    seekSlider.addEventListener('input', function () {
      currentTimeLabel.textContent = calculateTime(seekSlider.value);

      if (!audio.paused) {
        cancelAnimationFrame(raf);
      }
    });
    seekSlider.addEventListener('change', function () {
      audio.currentTime = seekSlider.value;

      if (!audio.paused) {
        requestAnimationFrame(whilePlaying);
      }
    });
    volumeSlider.addEventListener('input', function (e) {
      var value = e.target.value;
      audio.volume = value / 100;
    });
  };

  for (var i = 0; i < player.length; i++) {
    _loop(i);
  }
}();

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (audioPlayer);

/***/ }),

/***/ "./resources/js/components/carousel.js":
/*!*********************************************!*\
  !*** ./resources/js/components/carousel.js ***!
  \*********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
function ownKeys(object, enumerableOnly) { var keys = Object.keys(object); if (Object.getOwnPropertySymbols) { var symbols = Object.getOwnPropertySymbols(object); enumerableOnly && (symbols = symbols.filter(function (sym) { return Object.getOwnPropertyDescriptor(object, sym).enumerable; })), keys.push.apply(keys, symbols); } return keys; }

function _objectSpread(target) { for (var i = 1; i < arguments.length; i++) { var source = null != arguments[i] ? arguments[i] : {}; i % 2 ? ownKeys(Object(source), !0).forEach(function (key) { _defineProperty(target, key, source[key]); }) : Object.getOwnPropertyDescriptors ? Object.defineProperties(target, Object.getOwnPropertyDescriptors(source)) : ownKeys(Object(source)).forEach(function (key) { Object.defineProperty(target, key, Object.getOwnPropertyDescriptor(source, key)); }); } return target; }

function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }

/**
 * Content carousel with extensive options to control behaviour and appearance
 * @requires https://github.com/nolimits4web/swiper
*/
var carousel = function () {
  // forEach function
  var forEach = function forEach(array, callback, scope) {
    for (var i = 0; i < array.length; i++) {
      callback.call(scope, i, array[i]); // passes back stuff we need
    }
  }; // Carousel initialisation


  var carousels = document.querySelectorAll('.swiper');
  forEach(carousels, function (index, value) {
    var userOptions, pagerOptions;
    if (value.dataset.swiperOptions != undefined) userOptions = JSON.parse(value.dataset.swiperOptions); // Pager

    if (userOptions.pager) {
      pagerOptions = {
        pagination: {
          el: '.pagination .list-unstyled',
          clickable: true,
          bulletActiveClass: 'active',
          bulletClass: 'page-item',
          renderBullet: function renderBullet(index, className) {
            return '<li class="' + className + '"><a href="#" class="page-link btn-icon btn-sm">' + (index + 1) + '</a></li>';
          }
        }
      };
    } // Slider init


    var options = _objectSpread(_objectSpread({}, userOptions), pagerOptions);

    var swiper = new Swiper(value, options);
    swiper.on('init', function (swiper) {
      console.log('Init');
    }); // Tabs (linked content)

    if (userOptions.tabs) {
      swiper.on('activeIndexChange', function (e) {
        var targetTab = document.querySelector(e.slides[e.activeIndex].dataset.swiperTab),
            previousTab = document.querySelector(e.slides[e.previousIndex].dataset.swiperTab);
        previousTab.classList.remove('active');
        targetTab.classList.add('active');
      });
    }
  });
}();

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (carousel);

/***/ }),

/***/ "./resources/js/components/form-validation.js":
/*!****************************************************!*\
  !*** ./resources/js/components/form-validation.js ***!
  \****************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/**
 * Form validation
*/
var formValidation = function () {
  var selector = 'needs-validation';
  window.addEventListener('load', function () {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName(selector); // Loop over them and prevent submission

    var validation = Array.prototype.filter.call(forms, function (form) {
      form.addEventListener('submit', function (e) {
        if (form.checkValidity() === false) {
          e.preventDefault();
          e.stopPropagation();
        }

        form.classList.add('was-validated');
      }, false);
    });
  }, false);
}();

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (formValidation);

/***/ }),

/***/ "./resources/js/components/gallery.js":
/*!********************************************!*\
  !*** ./resources/js/components/gallery.js ***!
  \********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/**
 * Gallery like styled lightbox component for presenting various types of media
 * @requires https://github.com/sachinchoolur/lightgallery.js
*/
var gallery = function () {
  var gallery = document.querySelectorAll('.gallery');

  if (gallery.length) {
    for (var i = 0; i < gallery.length; i++) {
      var thumbnails = gallery[i].dataset.thumbnails ? true : false;
      lightGallery(gallery[i], {
        selector: '.gallery-item',
        download: false,
        thumbnail: thumbnails,
        videojs: true,
        youtubePlayerParams: {
          modestbranding: 1,
          showinfo: 0,
          rel: 0
        },
        vimeoPlayerParams: {
          byline: 0,
          portrait: 0,
          color: '6366f1'
        }
      });
    }
  }
}();

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (gallery);

/***/ }),

/***/ "./resources/js/components/hover-animation.js":
/*!****************************************************!*\
  !*** ./resources/js/components/hover-animation.js ***!
  \****************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/**
 * Play Lottie animations on hover
 * @requires https://github.com/LottieFiles/lottie-player
*/
var hoverAnimation = function () {
  var playerContainers = document.querySelectorAll('.animation-on-hover');
  playerContainers.forEach(function (container) {
    container.addEventListener('mouseover', function () {
      var players = container.querySelectorAll('lottie-player');
      players.forEach(function (player) {
        player.setDirection(1);
        player.play();
      });
    });
    container.addEventListener('mouseleave', function () {
      var players = container.querySelectorAll('lottie-player');
      players.forEach(function (player) {
        player.setDirection(-1);
        player.play();
      });
    });
  });
}();

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (hoverAnimation);

/***/ }),

/***/ "./resources/js/components/input-formatter.js":
/*!****************************************************!*\
  !*** ./resources/js/components/input-formatter.js ***!
  \****************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/**
 * Input fields formatter
 * @requires https://github.com/nosir/cleave.js
*/
var inputFormatter = function () {
  var input = document.querySelectorAll('[data-format]');
  if (input.length === 0) return;

  for (var i = 0; i < input.length; i++) {
    var inputFormat = input[i].dataset.format,
        blocks = input[i].dataset.blocks,
        numeral = input[i].dataset.numeral ? true : false,
        delimiter = input[i].dataset.delimiter;
    blocks = blocks !== undefined ? blocks.split(' ').map(Number) : '';
    delimiter = delimiter !== undefined ? delimiter : ' ';

    switch (inputFormat) {
      case 'card':
        var card = new Cleave(input[i], {
          creditCard: true
        });
        break;

      case 'cvc':
        var cvc = new Cleave(input[i], {
          numeral: true,
          numeralIntegerScale: 3
        });
        break;

      case 'date':
        var date = new Cleave(input[i], {
          date: true,
          datePattern: ['m', 'y']
        });
        break;

      case 'date-long':
        var dateLong = new Cleave(input[i], {
          date: true,
          delimiter: '-',
          datePattern: ['Y', 'm', 'd']
        });
        break;

      case 'time':
        var time = new Cleave(input[i], {
          time: true,
          datePattern: ['h', 'm']
        });
        break;

      case 'custom':
        var custom = new Cleave(input[i], {
          delimiter: delimiter,
          blocks: blocks,
          numeral: numeral,
          numeralIntegerScale: parseInt(input[i].dataset.numeral)
        });
        break;

      default:
        console.error('Sorry, your format ' + inputFormat + ' is not available. You can add it to the theme object method - inputFormatter in src/js/theme.js or choose one from the list of available formats: card, cvc, date, date-long, time or custom.');
    }
  }
}();

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (inputFormatter);

/***/ }),

/***/ "./resources/js/components/masonry-grid.js":
/*!*************************************************!*\
  !*** ./resources/js/components/masonry-grid.js ***!
  \*************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
function _typeof(obj) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (obj) { return typeof obj; } : function (obj) { return obj && "function" == typeof Symbol && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }, _typeof(obj); }

/**
 * Cascading (Masonry) grid layout
 * 
 * @requires https://github.com/desandro/imagesloaded
 * @requires https://github.com/Vestride/Shuffle
*/
var masonryGrid = function () {
  var grid = document.querySelectorAll('.masonry-grid'),
      masonry;
  if (grid === null) return;

  var _loop = function _loop(i) {
    masonry = new Shuffle(grid[i], {
      itemSelector: '.masonry-grid-item',
      sizer: '.masonry-grid-item'
    });
    imagesLoaded(grid[i]).on('progress', function () {
      masonry.layout();
    }); // Filtering

    var filtersWrap = grid[i].closest('.masonry-filterable');
    if (filtersWrap === null) return {
      v: void 0
    };
    var filters = filtersWrap.querySelectorAll('.masonry-filters [data-group]');

    for (var n = 0; n < filters.length; n++) {
      filters[n].addEventListener('click', function (e) {
        var current = filtersWrap.querySelector('.masonry-filters .active'),
            target = this.dataset.group;

        if (current !== null) {
          current.classList.remove('active');
        }

        this.classList.add('active');
        masonry.filter(target);
        e.preventDefault();
      });
    }
  };

  for (var i = 0; i < grid.length; i++) {
    var _ret = _loop(i);

    if (_typeof(_ret) === "object") return _ret.v;
  }
}();

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (masonryGrid);

/***/ }),

/***/ "./resources/js/components/parallax.js":
/*!*********************************************!*\
  !*** ./resources/js/components/parallax.js ***!
  \*********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/**
 * Mouse move parallax effect
 * @requires https://github.com/wagerfield/parallax
*/
var parallax = function () {
  var element = document.querySelectorAll('.parallax');

  for (var i = 0; i < element.length; i++) {
    var parallaxInstance = new Parallax(element[i]);
  }
}();

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (parallax);

/***/ }),

/***/ "./resources/js/components/password-visibility-toggle.js":
/*!***************************************************************!*\
  !*** ./resources/js/components/password-visibility-toggle.js ***!
  \***************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/**
 * Toggling password visibility in password input
*/
var passwordVisibilityToggle = function () {
  var elements = document.querySelectorAll('.password-toggle');

  var _loop = function _loop(i) {
    var passInput = elements[i].querySelector('.form-control'),
        passToggle = elements[i].querySelector('.password-toggle-btn');
    passToggle.addEventListener('click', function (e) {
      if (e.target.type !== 'checkbox') return;

      if (e.target.checked) {
        passInput.type = 'text';
      } else {
        passInput.type = 'password';
      }
    }, false);
  };

  for (var i = 0; i < elements.length; i++) {
    _loop(i);
  }
}();

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (passwordVisibilityToggle);

/***/ }),

/***/ "./resources/js/components/popover.js":
/*!********************************************!*\
  !*** ./resources/js/components/popover.js ***!
  \********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/**
 * Popover
 * @requires https://getbootstrap.com
 * @requires https://popper.js.org/
*/
var popover = function () {
  var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
  var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
    return new bootstrap.Popover(popoverTriggerEl);
  });
}();

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (popover);

/***/ }),

/***/ "./resources/js/components/price-switch.js":
/*!*************************************************!*\
  !*** ./resources/js/components/price-switch.js ***!
  \*************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/**
 * Price switch
*/
var priceSwitch = function () {
  var swictherWrapper = document.querySelectorAll('.price-switch-wrapper');
  if (swictherWrapper.length <= 0) return;

  for (var i = 0; i < swictherWrapper.length; i++) {
    var swicther = swictherWrapper[i].querySelector('[data-bs-toggle="price"]');
    swicther.addEventListener('change', function (e) {
      var checkbox = e.currentTarget.querySelector('input[type="checkbox"]'),
          monthlyPrice = e.currentTarget.parentNode.querySelectorAll('[data-monthly-price]'),
          annualPrice = e.currentTarget.parentNode.querySelectorAll('[data-annual-price]');

      for (var n = 0; n < monthlyPrice.length; n++) {
        if (checkbox.checked == true) {
          monthlyPrice[n].classList.add('d-none');
        } else {
          monthlyPrice[n].classList.remove('d-none');
        }
      }

      for (var m = 0; m < monthlyPrice.length; m++) {
        if (checkbox.checked == true) {
          annualPrice[m].classList.remove('d-none');
        } else {
          annualPrice[m].classList.add('d-none');
        }
      }
    });
  }
}();

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (priceSwitch);

/***/ }),

/***/ "./resources/js/components/range-slider.js":
/*!*************************************************!*\
  !*** ./resources/js/components/range-slider.js ***!
  \*************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/**
 * Range slider
 * @requires https://github.com/leongersen/noUiSlider
*/
var rangeSlider = function () {
  var rangeSliderWidget = document.querySelectorAll('.range-slider');

  var _loop = function _loop(i) {
    var rangeSlider = rangeSliderWidget[i].querySelector('.range-slider-ui'),
        valueMinInput = rangeSliderWidget[i].querySelector('.range-slider-value-min'),
        valueMaxInput = rangeSliderWidget[i].querySelector('.range-slider-value-max');
    var options = {
      dataStartMin: parseInt(rangeSliderWidget[i].dataset.startMin, 10),
      dataStartMax: parseInt(rangeSliderWidget[i].dataset.startMax, 10),
      dataMin: parseInt(rangeSliderWidget[i].dataset.min, 10),
      dataMax: parseInt(rangeSliderWidget[i].dataset.max, 10),
      dataStep: parseInt(rangeSliderWidget[i].dataset.step, 10),
      dataPips: rangeSliderWidget[i].dataset.pips
    };
    var start = options.dataStartMax ? [options.dataStartMin, options.dataStartMax] : [options.dataStartMin],
        connect = options.dataStartMax ? true : 'lower';
    noUiSlider.create(rangeSlider, {
      start: start,
      connect: connect,
      step: options.dataStep,
      pips: options.dataPips ? {
        mode: 'count',
        values: 5
      } : false,
      tooltips: true,
      range: {
        'min': options.dataMin,
        'max': options.dataMax
      },
      format: {
        to: function to(value) {
          return '$' + parseInt(value, 10);
        },
        from: function from(value) {
          return Number(value);
        }
      }
    });
    rangeSlider.noUiSlider.on('update', function (values, handle) {
      var value = values[handle];
      value = value.replace(/\D/g, '');

      if (handle) {
        if (valueMaxInput) {
          valueMaxInput.value = Math.round(value);
        }
      } else {
        if (valueMinInput) {
          valueMinInput.value = Math.round(value);
        }
      }
    });

    if (valueMinInput) {
      valueMinInput.addEventListener('change', function () {
        rangeSlider.noUiSlider.set([this.value, null]);
      });
    }

    if (valueMaxInput) {
      valueMaxInput.addEventListener('change', function () {
        rangeSlider.noUiSlider.set([null, this.value]);
      });
    }
  };

  for (var i = 0; i < rangeSliderWidget.length; i++) {
    _loop(i);
  }
}();

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (rangeSlider);

/***/ }),

/***/ "./resources/js/components/scroll-top-button.js":
/*!******************************************************!*\
  !*** ./resources/js/components/scroll-top-button.js ***!
  \******************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/**
 * Animate scroll to top button in/off view
*/
var scrollTopButton = function () {
  var element = document.querySelector('.btn-scroll-top'),
      scrollOffset = 600;
  if (element == null) return;
  var offsetFromTop = parseInt(scrollOffset, 10);
  window.addEventListener('scroll', function (e) {
    if (e.currentTarget.pageYOffset > offsetFromTop) {
      element.classList.add('show');
    } else {
      element.classList.remove('show');
    }
  });
}();

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (scrollTopButton);

/***/ }),

/***/ "./resources/js/components/smooth-scroll.js":
/*!**************************************************!*\
  !*** ./resources/js/components/smooth-scroll.js ***!
  \**************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/**
 * Anchor smooth scrolling
 * @requires https://github.com/cferdinandi/smooth-scroll/
*/
var smoothScroll = function () {
  var selector = '[data-scroll]',
      fixedHeader = '[data-scroll-header]',
      scroll = new SmoothScroll(selector, {
    speed: 800,
    speedAsDuration: true,
    offset: function offset(anchor, toggle) {
      return toggle.dataset.scrollOffset || 40;
    },
    header: fixedHeader,
    updateURL: false
  });
}();

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (smoothScroll);

/***/ }),

/***/ "./resources/js/components/sticky-navbar.js":
/*!**************************************************!*\
  !*** ./resources/js/components/sticky-navbar.js ***!
  \**************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/**
 * Sticky Navbar
 * Enable sticky behavior of navigation bar on page scroll
*/
var stickyNavbar = function () {
  var navbar = document.querySelector('.navbar-sticky');
  if (navbar == null) return;
  var navbarClass = navbar.classList,
      navbarH = navbar.offsetHeight,
      scrollOffset = 500;

  if (navbarClass.contains('position-absolute')) {
    window.addEventListener('scroll', function (e) {
      if (e.currentTarget.pageYOffset > scrollOffset) {
        navbar.classList.add('navbar-stuck');
      } else {
        navbar.classList.remove('navbar-stuck');
      }
    });
  } else {
    window.addEventListener('scroll', function (e) {
      if (e.currentTarget.pageYOffset > scrollOffset) {
        document.body.style.paddingTop = navbarH + 'px';
        navbar.classList.add('navbar-stuck');
      } else {
        document.body.style.paddingTop = '';
        navbar.classList.remove('navbar-stuck');
      }
    });
  }
}();

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (stickyNavbar);

/***/ }),

/***/ "./resources/js/components/subscription-form.js":
/*!******************************************************!*\
  !*** ./resources/js/components/subscription-form.js ***!
  \******************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/**
 * Ajaxify MailChimp subscription form
*/
var subscriptionForm = function () {
  var form = document.querySelectorAll('.subscription-form');
  if (form === null) return;

  var _loop = function _loop(i) {
    var button = form[i].querySelector('button[type="submit"]'),
        buttonText = button.innerHTML,
        input = form[i].querySelector('.form-control'),
        antispam = form[i].querySelector('.subscription-form-antispam'),
        status = form[i].querySelector('.subscription-status');
    form[i].addEventListener('submit', function (e) {
      if (e) e.preventDefault();
      if (antispam.value !== '') return;
      register(this, button, input, buttonText, status);
    });
  };

  for (var i = 0; i < form.length; i++) {
    _loop(i);
  }

  var register = function register(form, button, input, buttonText, status) {
    button.innerHTML = 'Sending...'; // Get url for MailChimp

    var url = form.action.replace('/post?', '/post-json?'); // Add form data to object

    var data = '&' + input.name + '=' + encodeURIComponent(input.value); // Create and add post script to the DOM

    var script = document.createElement('script');
    script.src = url + '&c=callback' + data;
    document.body.appendChild(script); // Callback function

    var callback = 'callback';

    window[callback] = function (response) {
      // Remove post script from the DOM
      delete window[callback];
      document.body.removeChild(script); // Change button text back to initial

      button.innerHTML = buttonText; // Display content and apply styling to response message conditionally

      if (response.result == 'success') {
        input.classList.remove('is-invalid');
        input.classList.add('is-valid');
        status.classList.remove('status-error');
        status.classList.add('status-success');
        status.innerHTML = response.msg;
        setTimeout(function () {
          input.classList.remove('is-valid');
          status.innerHTML = '';
          status.classList.remove('status-success');
        }, 6000);
      } else {
        input.classList.remove('is-valid');
        input.classList.add('is-invalid');
        status.classList.remove('status-success');
        status.classList.add('status-error');
        status.innerHTML = response.msg.substring(4);
        setTimeout(function () {
          input.classList.remove('is-invalid');
          status.innerHTML = '';
          status.classList.remove('status-error');
        }, 6000);
      }
    };
  };
}();

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (subscriptionForm);

/***/ }),

/***/ "./resources/js/components/theme-mode-switch.js":
/*!******************************************************!*\
  !*** ./resources/js/components/theme-mode-switch.js ***!
  \******************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/**
 * Theme Mode Switch
 * Switch betwen light/dark mode. The chosen mode is saved to browser's local storage
*/
var themeModeSwitch = function () {
  var modeSwitch = document.querySelector('[data-bs-toggle="mode"]');
  if (modeSwitch === null) return;
  var checkbox = modeSwitch.querySelector('.form-check-input');

  if (mode === 'dark') {
    root.classList.add('dark-mode');
    checkbox.checked = true;
  } else {
    root.classList.remove('dark-mode');
    checkbox.checked = false;
  }

  modeSwitch.addEventListener('click', function (e) {
    if (checkbox.checked) {
      root.classList.add('dark-mode');
      window.localStorage.setItem('mode', 'dark');
    } else {
      root.classList.remove('dark-mode');
      window.localStorage.setItem('mode', 'light');
    }
  });
}();

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (themeModeSwitch);

/***/ }),

/***/ "./resources/js/components/toast.js":
/*!******************************************!*\
  !*** ./resources/js/components/toast.js ***!
  \******************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/**
 * Toast
 * @requires https://getbootstrap.com
*/
var toast = function () {
  var toastElList = [].slice.call(document.querySelectorAll('.toast'));
  var toastList = toastElList.map(function (toastEl) {
    return new bootstrap.Toast(toastEl);
  });
}();

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (toast);

/***/ }),

/***/ "./resources/js/components/tooltip.js":
/*!********************************************!*\
  !*** ./resources/js/components/tooltip.js ***!
  \********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/**
 * Tooltip
 * @requires https://getbootstrap.com
 * @requires https://popper.js.org/
*/
var tooltip = function () {
  var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
  var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl, {
      trigger: 'hover'
    });
  });
}();

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (tooltip);

/***/ }),

/***/ "./resources/js/components/video-button.js":
/*!*************************************************!*\
  !*** ./resources/js/components/video-button.js ***!
  \*************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/**
 * Open YouTube / Vimeo video in lightbox
 * @requires @requires https://github.com/sachinchoolur/lightgallery.js
*/
var videoButton = function () {
  var button = document.querySelectorAll('[data-bs-toggle="video"]');

  if (button.length) {
    for (var i = 0; i < button.length; i++) {
      lightGallery(button[i], {
        selector: 'this',
        download: false,
        videojs: true,
        youtubePlayerParams: {
          modestbranding: 1,
          showinfo: 0,
          rel: 0
        },
        vimeoPlayerParams: {
          byline: 0,
          portrait: 0,
          color: '6366f1'
        }
      });
    }
  }
}();

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (videoButton);

/***/ }),

/***/ "./resources/js/theme.js":
/*!*******************************!*\
  !*** ./resources/js/theme.js ***!
  \*******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _components_theme_mode_switch__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./components/theme-mode-switch */ "./resources/js/components/theme-mode-switch.js");
/* harmony import */ var _components_sticky_navbar__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./components/sticky-navbar */ "./resources/js/components/sticky-navbar.js");
/* harmony import */ var _components_smooth_scroll__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./components/smooth-scroll */ "./resources/js/components/smooth-scroll.js");
/* harmony import */ var _components_scroll_top_button__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./components/scroll-top-button */ "./resources/js/components/scroll-top-button.js");
/* harmony import */ var _components_password_visibility_toggle__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./components/password-visibility-toggle */ "./resources/js/components/password-visibility-toggle.js");
/* harmony import */ var _components_parallax__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./components/parallax */ "./resources/js/components/parallax.js");
/* harmony import */ var _components_carousel__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ./components/carousel */ "./resources/js/components/carousel.js");
/* harmony import */ var _components_gallery__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ./components/gallery */ "./resources/js/components/gallery.js");
/* harmony import */ var _components_range_slider__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! ./components/range-slider */ "./resources/js/components/range-slider.js");
/* harmony import */ var _components_form_validation__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! ./components/form-validation */ "./resources/js/components/form-validation.js");
/* harmony import */ var _components_input_formatter__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! ./components/input-formatter */ "./resources/js/components/input-formatter.js");
/* harmony import */ var _components_tooltip__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! ./components/tooltip */ "./resources/js/components/tooltip.js");
/* harmony import */ var _components_popover__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! ./components/popover */ "./resources/js/components/popover.js");
/* harmony import */ var _components_toast__WEBPACK_IMPORTED_MODULE_13__ = __webpack_require__(/*! ./components/toast */ "./resources/js/components/toast.js");
/* harmony import */ var _components_video_button__WEBPACK_IMPORTED_MODULE_14__ = __webpack_require__(/*! ./components/video-button */ "./resources/js/components/video-button.js");
/* harmony import */ var _components_price_switch__WEBPACK_IMPORTED_MODULE_15__ = __webpack_require__(/*! ./components/price-switch */ "./resources/js/components/price-switch.js");
/* harmony import */ var _components_masonry_grid__WEBPACK_IMPORTED_MODULE_16__ = __webpack_require__(/*! ./components/masonry-grid */ "./resources/js/components/masonry-grid.js");
/* harmony import */ var _components_subscription_form__WEBPACK_IMPORTED_MODULE_17__ = __webpack_require__(/*! ./components/subscription-form */ "./resources/js/components/subscription-form.js");
/* harmony import */ var _components_hover_animation__WEBPACK_IMPORTED_MODULE_18__ = __webpack_require__(/*! ./components/hover-animation */ "./resources/js/components/hover-animation.js");
/* harmony import */ var _components_audio_player__WEBPACK_IMPORTED_MODULE_19__ = __webpack_require__(/*! ./components/audio-player */ "./resources/js/components/audio-player.js");
/**
 * Silicon | Multipurpose Bootstrap Template & UI Kit
 * Copyright 2021 Createx Studio
 * Theme core scripts
 *
 * @author Createx Studio
 * @version 1.0.0
*/





















/***/ }),

/***/ "./resources/scss/theme.scss":
/*!***********************************!*\
  !*** ./resources/scss/theme.scss ***!
  \***********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = __webpack_modules__;
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/chunk loaded */
/******/ 	(() => {
/******/ 		var deferred = [];
/******/ 		__webpack_require__.O = (result, chunkIds, fn, priority) => {
/******/ 			if(chunkIds) {
/******/ 				priority = priority || 0;
/******/ 				for(var i = deferred.length; i > 0 && deferred[i - 1][2] > priority; i--) deferred[i] = deferred[i - 1];
/******/ 				deferred[i] = [chunkIds, fn, priority];
/******/ 				return;
/******/ 			}
/******/ 			var notFulfilled = Infinity;
/******/ 			for (var i = 0; i < deferred.length; i++) {
/******/ 				var [chunkIds, fn, priority] = deferred[i];
/******/ 				var fulfilled = true;
/******/ 				for (var j = 0; j < chunkIds.length; j++) {
/******/ 					if ((priority & 1 === 0 || notFulfilled >= priority) && Object.keys(__webpack_require__.O).every((key) => (__webpack_require__.O[key](chunkIds[j])))) {
/******/ 						chunkIds.splice(j--, 1);
/******/ 					} else {
/******/ 						fulfilled = false;
/******/ 						if(priority < notFulfilled) notFulfilled = priority;
/******/ 					}
/******/ 				}
/******/ 				if(fulfilled) {
/******/ 					deferred.splice(i--, 1)
/******/ 					var r = fn();
/******/ 					if (r !== undefined) result = r;
/******/ 				}
/******/ 			}
/******/ 			return result;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/jsonp chunk loading */
/******/ 	(() => {
/******/ 		// no baseURI
/******/ 		
/******/ 		// object to store loaded and loading chunks
/******/ 		// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 		// [resolve, reject, Promise] = chunk loading, 0 = chunk loaded
/******/ 		var installedChunks = {
/******/ 			"/js/theme": 0,
/******/ 			"css/theme": 0
/******/ 		};
/******/ 		
/******/ 		// no chunk on demand loading
/******/ 		
/******/ 		// no prefetching
/******/ 		
/******/ 		// no preloaded
/******/ 		
/******/ 		// no HMR
/******/ 		
/******/ 		// no HMR manifest
/******/ 		
/******/ 		__webpack_require__.O.j = (chunkId) => (installedChunks[chunkId] === 0);
/******/ 		
/******/ 		// install a JSONP callback for chunk loading
/******/ 		var webpackJsonpCallback = (parentChunkLoadingFunction, data) => {
/******/ 			var [chunkIds, moreModules, runtime] = data;
/******/ 			// add "moreModules" to the modules object,
/******/ 			// then flag all "chunkIds" as loaded and fire callback
/******/ 			var moduleId, chunkId, i = 0;
/******/ 			if(chunkIds.some((id) => (installedChunks[id] !== 0))) {
/******/ 				for(moduleId in moreModules) {
/******/ 					if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 						__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 					}
/******/ 				}
/******/ 				if(runtime) var result = runtime(__webpack_require__);
/******/ 			}
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					installedChunks[chunkId][0]();
/******/ 				}
/******/ 				installedChunks[chunkId] = 0;
/******/ 			}
/******/ 			return __webpack_require__.O(result);
/******/ 		}
/******/ 		
/******/ 		var chunkLoadingGlobal = self["webpackChunk"] = self["webpackChunk"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module depends on other loaded chunks and execution need to be delayed
/******/ 	__webpack_require__.O(undefined, ["css/theme"], () => (__webpack_require__("./resources/js/theme.js")))
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["css/theme"], () => (__webpack_require__("./resources/scss/theme.scss")))
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;