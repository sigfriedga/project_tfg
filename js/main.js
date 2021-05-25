(function () {
  "use strict";

  //HAMBURER

  // selector
  var menu = document.querySelector('.hamburger');

  // method
  function toggleMenu(event) {
    this.classList.toggle('is-active');
    document.querySelector(".menuppal").classList.toggle("is_active");
    event.preventDefault();
  }

  // event
  menu.addEventListener('click', toggleMenu, false);


  document.addEventListener('DOMContentLoaded', function () {
    //Map

    var map = L.map('map').setView([37.913533, -0.726247], 12);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    L.marker([37.913533, -0.726247]).addTo(map)
      .bindPopup('SIWI Office')
      .openPopup()

    //COUNTDOWN

    (function countDown() {
      const second = 1000,
        minute = second * 60,
        hour = minute * 60,
        day = hour * 24;

      let birthday = "Dec 31, 2021 23:59:59",
        countDown = new Date(birthday).getTime(),
        x = setInterval(function () {

          let now = new Date().getTime(),
            distance = countDown - now;

          document.getElementById("days").innerText = Math.floor(distance / (day)),
            document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour)),
            document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute)),
            document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);

          //do something later when date is reached
          if (distance <= 0) {
            return 0;
          }
          //seconds
        }, 0)
    }());



  }); //DOM CONTENT LOADER
})();
