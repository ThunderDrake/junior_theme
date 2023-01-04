<?php
/* Подключение и настройка яндекс-карт в конце страницы сайта */
?>

<script type="text/javascript"
  src="https://api-maps.yandex.ru/2.0/?load=package.full&amp;lang=ru-RU&amp;apikey=b73c0e8a-498f-418c-be32-cf873e56b1fe">
</script>
<script type="text/javascript">
  /*<![CDATA[*/

  if (document.querySelector('#map')) {
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

      let myPlacemark0 = new ymaps.Placemark([55.050107, 82.941280], {}, {
        iconImageHref: '<?= ct()->get_static_url() ?>/img/map-marker.png',
        iconImageSize: [30, 40],
        iconImageOffset: [-15, -40],
      });
      let myPlacemark1 = new ymaps.Placemark([55.054392, 82.920735], {}, {
        iconImageHref: '<?= ct()->get_static_url() ?>/img/map-marker.png',
        iconImageSize: [30, 40],
        iconImageOffset: [-15, -40],
      });
      let myPlacemark2 = new ymaps.Placemark([55.056001, 82.98068], {}, {
        iconImageHref: '<?= ct()->get_static_url() ?>/img/map-marker.png',
        iconImageSize: [30, 40],
        iconImageOffset: [-15, -40],
      });
      let myPlacemark3 = new ymaps.Placemark([54.988897, 82.901879], {}, {
        iconImageHref: '<?= ct()->get_static_url() ?>/img/map-marker.png',
        iconImageSize: [30, 40],
        iconImageOffset: [-15, -40],
      });
      let myPlacemark4 = new ymaps.Placemark([54.983876, 82.815183], {}, {
        iconImageHref: '<?= ct()->get_static_url() ?>/img/map-marker.png',
        iconImageSize: [30, 40],
        iconImageOffset: [-15, -40],
      });
      let myPlacemark5 = new ymaps.Placemark([55.039435, 83.003506], {}, {
        iconImageHref: '<?= ct()->get_static_url() ?>/img/map-marker.png',
        iconImageSize: [30, 40],
        iconImageOffset: [-15, -40],
      });
      let myPlacemark6 = new ymaps.Placemark([55.002041, 82.953928], {}, {
        iconImageHref: '<?= ct()->get_static_url() ?>/img/map-marker.png',
        iconImageSize: [30, 40],
        iconImageOffset: [-15, -40],
      });
      let myPlacemark7 = new ymaps.Placemark([54.94021, 83.119424], {}, {
        iconImageHref: '<?= ct()->get_static_url() ?>/img/map-marker.png',
        iconImageSize: [30, 40],
        iconImageOffset: [-15, -40],

      });
      let myPlacemark8 = new ymaps.Placemark([55.024605, 82.942726], {

      }, {
        iconImageHref: '<?= ct()->get_static_url() ?>/img/map-marker.png',
        iconImageSize: [30, 40],
        iconImageOffset: [-15, -40],

      });
      let myPlacemark9 = new ymaps.Placemark([54.925101, 82.997631], {

      }, {
        iconImageHref: '<?= ct()->get_static_url() ?>/img/map-marker.png',
        iconImageSize: [30, 40],
        iconImageOffset: [-15, -40],

      });
      let myPlacemark10 = new ymaps.Placemark([54.772063, 83.073431], {

      }, {
        iconImageHref: '<?= ct()->get_static_url() ?>/img/map-marker.png',
        iconImageSize: [30, 40],
        iconImageOffset: [-15, -40],

      });
      let myPlacemark11 = new ymaps.Placemark([54.935022, 82.899104], {

      }, {
        iconImageHref: '<?= ct()->get_static_url() ?>/img/map-marker.png',
        iconImageSize: [30, 40],
        iconImageOffset: [-15, -40],

      });
      let myPlacemark12 = new ymaps.Placemark([55.087836, 83.046284], {

      }, {
        iconImageHref: '<?= ct()->get_static_url() ?>/img/map-marker.png',
        iconImageSize: [30, 40],
        iconImageOffset: [-15, -40],

      });
      let myPlacemark13 = new ymaps.Placemark([54.965864, 82.842141], {

      }, {
        iconImageHref: '<?= ct()->get_static_url() ?>/img/map-marker.png',
        iconImageSize: [30, 40],
        iconImageOffset: [-15, -40],

      });
      let myPlacemark14 = new ymaps.Placemark([55.06851, 82.913342], {

      }, {
        iconImageHref: '<?= ct()->get_static_url() ?>/img/map-marker.png',
        iconImageSize: [30, 40],
        iconImageOffset: [-15, -40],

      });
      let myPlacemark15 = new ymaps.Placemark([54.860601, 83.093795], {

      }, {
        iconImageHref: '<?= ct()->get_static_url() ?>/img/map-marker.png',
        iconImageSize: [30, 40],
        iconImageOffset: [-15, -40],

      });
      let myPlacemark16 = new ymaps.Placemark([55.113529, 82.933743], {

      }, {
        iconImageHref: '<?= ct()->get_static_url() ?>/img/map-marker.png',
        iconImageSize: [30, 40],
        iconImageOffset: [-15, -40],

      });
      let myPlacemark17 = new ymaps.Placemark([55.06685, 82.925002], {

      }, {
        iconImageHref: '<?= ct()->get_static_url() ?>/img/map-marker.png',
        iconImageSize: [30, 40],
        iconImageOffset: [-15, -40],

      });
      let myPlacemark18 = new ymaps.Placemark([54.999139, 83.012085], {

      }, {
        iconImageHref: '<?= ct()->get_static_url() ?>/img/map-marker.png',
        iconImageSize: [30, 40],
        iconImageOffset: [-15, -40],

      });
      let myPlacemark19 = new ymaps.Placemark([54.97793, 83.055464], {

      }, {
        iconImageHref: '<?= ct()->get_static_url() ?>/img/map-marker.png',
        iconImageSize: [30, 40],
        iconImageOffset: [-15, -40],

      });
      let myPlacemark20 = new ymaps.Placemark([54.995973, 82.692527], {

      }, {
        iconImageHref: '<?= ct()->get_static_url() ?>/img/map-marker.png',
        iconImageSize: [30, 40],
        iconImageOffset: [-15, -40],

      });
      let myPlacemark21 = new ymaps.Placemark([55.072721, 82.946157], {

      }, {
        iconImageHref: '<?= ct()->get_static_url() ?>/img/map-marker.png',
        iconImageSize: [30, 40],
        iconImageOffset: [-15, -40],

      });
      let myPlacemark22 = new ymaps.Placemark([55.019346, 83.009749], {

      }, {
        iconImageHref: '<?= ct()->get_static_url() ?>/img/map-marker.png',
        iconImageSize: [30, 40],
        iconImageOffset: [-15, -40],

      });
      let myPlacemark23 = new ymaps.Placemark([55.049323, 82.929664], {

      }, {
        iconImageHref: '<?= ct()->get_static_url() ?>/img/map-marker.png',
        iconImageSize: [30, 40],
        iconImageOffset: [-15, -40],

      });
      let myPlacemark24 = new ymaps.Placemark([55.04889, 82.955419], {

      }, {
        iconImageHref: '<?= ct()->get_static_url() ?>/img/map-marker.png',
        iconImageSize: [30, 40],
        iconImageOffset: [-15, -40],

      });
      let myPlacemark25 = new ymaps.Placemark([55.027882, 82.961339], {

      }, {
        iconImageHref: '<?= ct()->get_static_url() ?>/img/map-marker.png',
        iconImageSize: [30, 40],
        iconImageOffset: [-15, -40],

      });
      let myPlacemark26 = new ymaps.Placemark([54.954393, 82.959857], {

      }, {
        iconImageHref: '<?= ct()->get_static_url() ?>/img/map-marker.png',
        iconImageSize: [30, 40],
        iconImageOffset: [-15, -40],

      });
      myCollection.add(myPlacemark0).add(myPlacemark1).add(myPlacemark2).add(myPlacemark3).add(myPlacemark4).add(
          myPlacemark5).add(myPlacemark6).add(myPlacemark7).add(myPlacemark8).add(myPlacemark9).add(myPlacemark10).add(
          myPlacemark11).add(myPlacemark12).add(myPlacemark13).add(myPlacemark14).add(myPlacemark15).add(myPlacemark16)
        .add(myPlacemark17).add(myPlacemark18).add(myPlacemark19).add(myPlacemark20).add(myPlacemark21).add(
          myPlacemark22).add(myPlacemark23).add(myPlacemark24).add(myPlacemark25).add(myPlacemark26);

      myMap.geoObjects.add(myCollection);
      myMap.setBounds(myCollection.getBounds());
    }
  }

</script>
