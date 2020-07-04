import Vue from "vue";

function myNavFunc(){
  // If it's an iPhone..
  if( (navigator.platform.indexOf("iPhone") != -1)
    || (navigator.platform.indexOf("iPod") != -1)
    || (navigator.platform.indexOf("iPad") != -1))
    window.open("maps://www.google.nl/maps/dir//Tafeltennisvereniging+Merwestad,+Maria+Montessorilaan+3,+3312+KJ+Dordrecht/@51.7987245,4.6767146,17z/data=!4m9!4m8!1m0!1m5!1m1!1s0x47c428d9d230e649:0xe0e8a600a169f714!2m2!1d4.6789033!2d51.7987212!3e0");
  else
    window.open("https://www.google.nl/maps/dir//Tafeltennisvereniging+Merwestad,+Maria+Montessorilaan+3,+3312+KJ+Dordrecht/@51.7987245,4.6767146,17z/data=!4m9!4m8!1m0!1m5!1m1!1s0x47c428d9d230e649:0xe0e8a600a169f714!2m2!1d4.6789033!2d51.7987212!3e0");
}

window.addEventListener('load', (e) => {
  const routeButton = document.getElementById('route');

  if (routeButton) {
    routeButton.addEventListener('click', myNavFunc);
  }
});

const app = new Vue({
  el: '#website',
  data: {
    menu: false
  },

  computed: {
    appClasses() {
      return {
        'relative': true,
        'flex': true,
        'flex-col': true,
        'bg-white': true,
        'min-w-full': true,
        'min-h-screen': true,
        'show-menu': this.menu
      }
    }
  }
})


