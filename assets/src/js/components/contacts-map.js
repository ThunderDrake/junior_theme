ymaps.ready(init);
var myMap;

function init() {
  myMap = new ymaps.Map('map', {
    center: [55.050107, 82.941280],
    behaviors: ['default'],
    zoom: 16,
    scroll: false
  });

  myMap.controls.add('zoomControl', {
    left: 5,
    top: 5
  });

  var myCollection = new ymaps.GeoObjectCollection();

  let myPlacemark0 = new ymaps.Placemark([55.050107, 82.941280], {
    balloonContent: '<div class="ballon"></div>'
  }, {
    iconImageHref: '/img/logo.svg',
    iconImageSize: [30, 40],
    iconImageOffset: [-15, -40],
    balloonContentSize: [270, 99],
    balloonLayout: "default#imageWithContent",
    balloonImageHref: '/img/map-marker.png',
    balloonImageOffset: [-65, -89],
    balloonImageSize: [260, 89],
    balloonShadow: false,
    balloonAutoPan: false
  });

  myCollection.add(myPlacemark0);

  myMap.geoObjects.add(myCollection);
  myMap.setBounds(myCollection.getBounds());

  myMap.geoObjects.events.add([
    'balloonopen'
  ], function (e) {
    var geoObject = e.get('target');
    myMap.panTo(geoObject.geometry.getCoordinates(), {
      delay: 0
    });
  });
}
