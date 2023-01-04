ymaps.ready(init);
			var myMap;
	
			function init() {
				myMap = new ymaps.Map('map', {
					center: [55.050107, 82.941280],
					behaviors: ['default'],
					zoom: 16,
					scroll: false
				});
	
				myMap.controls.add('zoomControl', {left: 5, top: 5});
				
				var myCollection = new ymaps.GeoObjectCollection();				
				
				let myPlacemark0 = new ymaps.Placemark([55.050107, 82.941280], {
				balloonContent: '<div class="ballon"><img src="/design/img/logoNormal.png" class="ll"/><span>Футбольный клуб Джуниор</span><br/><p>ул. Писарева 102, оф. 806</p><img class="close" onclick="myMap.balloon.close()" src="/design/img/close.png"/></div>'
			}, {
				iconImageHref: '/design/img/pinNormal.png',
				iconImageSize: [30, 40],
				iconImageOffset: [-15, -40],
				balloonContentSize: [270, 99],
				balloonLayout: "default#imageWithContent",
				balloonImageHref: '/design/img/ballon1.png',
				balloonImageOffset: [-65, -89],
				balloonImageSize: [260, 89],
				balloonShadow: false,
				balloonAutoPan: false
			}); let myPlacemark1 = new ymaps.Placemark([55.054392, 82.920735], {
					balloonContent: '<div class="ballon"><img src="/design/img/logoNormal.png" class="ll"/><span>Филиал Кропоткина</span><br/><p> Кропоткина 110 к1</p><span style="cursor: pointer; font-size: 12px; border-bottom: 1px dashed;" onclick="showSchedule(2,2)">Показать расписание</span><img class="close" onclick="myMap.balloon.close()" src="/design/img/close.png"/></div>'
				}, {
					iconImageHref: '/design/img/pinNormal.png',
					iconImageSize: [30, 40],
					iconImageOffset: [-15, -40],
					balloonContentSize: [270, 100],
					balloonLayout: "default#imageWithContent",
					balloonImageHref: '/design/img/ballon1.png',
					balloonImageOffset: [-65, -100],
					balloonImageSize: [260, 100],
					balloonShadow: false,
					balloonAutoPan: false
				}); let myPlacemark2 = new ymaps.Placemark([55.056001, 82.98068], {
					balloonContent: '<div class="ballon"><img src="/design/img/logoNormal.png" class="ll"/><span>Филиал Olympic City</span><br/><p> Бродского 2/3</p><span style="cursor: pointer; font-size: 12px; border-bottom: 1px dashed;" onclick="showSchedule(1,3)">Показать расписание</span><img class="close" onclick="myMap.balloon.close()" src="/design/img/close.png"/></div>'
				}, {
					iconImageHref: '/design/img/pinNormal.png',
					iconImageSize: [30, 40],
					iconImageOffset: [-15, -40],
					balloonContentSize: [270, 100],
					balloonLayout: "default#imageWithContent",
					balloonImageHref: '/design/img/ballon1.png',
					balloonImageOffset: [-65, -100],
					balloonImageSize: [260, 100],
					balloonShadow: false,
					balloonAutoPan: false
				}); let myPlacemark3 = new ymaps.Placemark([54.988897, 82.901879], {
					balloonContent: '<div class="ballon"><img src="/design/img/logoNormal.png" class="ll"/><span>Филиал Студенческая</span><br/><p>Блюхера 34</p><span style="cursor: pointer; font-size: 12px; border-bottom: 1px dashed;" onclick="showSchedule(5,4)">Показать расписание</span><img class="close" onclick="myMap.balloon.close()" src="/design/img/close.png"/></div>'
				}, {
					iconImageHref: '/design/img/pinNormal.png',
					iconImageSize: [30, 40],
					iconImageOffset: [-15, -40],
					balloonContentSize: [270, 100],
					balloonLayout: "default#imageWithContent",
					balloonImageHref: '/design/img/ballon1.png',
					balloonImageOffset: [-65, -100],
					balloonImageSize: [260, 100],
					balloonShadow: false,
					balloonAutoPan: false
				}); let myPlacemark4 = new ymaps.Placemark([54.983876, 82.815183], {
					balloonContent: '<div class="ballon"><img src="/design/img/logoNormal.png" class="ll"/><span>Филиал Заря</span><br/><p> Спортивная 2</p><span style="cursor: pointer; font-size: 12px; border-bottom: 1px dashed;" onclick="showSchedule(5,5)">Показать расписание</span><img class="close" onclick="myMap.balloon.close()" src="/design/img/close.png"/></div>'
				}, {
					iconImageHref: '/design/img/pinNormal.png',
					iconImageSize: [30, 40],
					iconImageOffset: [-15, -40],
					balloonContentSize: [270, 100],
					balloonLayout: "default#imageWithContent",
					balloonImageHref: '/design/img/ballon1.png',
					balloonImageOffset: [-65, -100],
					balloonImageSize: [260, 100],
					balloonShadow: false,
					balloonAutoPan: false
				}); let myPlacemark5 = new ymaps.Placemark([55.039435, 83.003506], {
					balloonContent: '<div class="ballon"><img src="/design/img/logoNormal.png" class="ll"/><span>Филиал Доватора</span><br/><p> Доватора 33/4</p><span style="cursor: pointer; font-size: 12px; border-bottom: 1px dashed;" onclick="showSchedule(6,7)">Показать расписание</span><img class="close" onclick="myMap.balloon.close()" src="/design/img/close.png"/></div>'
				}, {
					iconImageHref: '/design/img/pinNormal.png',
					iconImageSize: [30, 40],
					iconImageOffset: [-15, -40],
					balloonContentSize: [270, 100],
					balloonLayout: "default#imageWithContent",
					balloonImageHref: '/design/img/ballon1.png',
					balloonImageOffset: [-65, -100],
					balloonImageSize: [260, 100],
					balloonShadow: false,
					balloonAutoPan: false
				}); let myPlacemark6 = new ymaps.Placemark([55.002041, 82.953928], {
					balloonContent: '<div class="ballon"><img src="/design/img/logoNormal.png" class="ll"/><span>Филиал Sportbox</span><br/><p> Большевистская 125</p><span style="cursor: pointer; font-size: 12px; border-bottom: 1px dashed;" onclick="showSchedule(6,8)">Показать расписание</span><img class="close" onclick="myMap.balloon.close()" src="/design/img/close.png"/></div>'
				}, {
					iconImageHref: '/design/img/pinNormal.png',
					iconImageSize: [30, 40],
					iconImageOffset: [-15, -40],
					balloonContentSize: [270, 100],
					balloonLayout: "default#imageWithContent",
					balloonImageHref: '/design/img/ballon1.png',
					balloonImageOffset: [-65, -100],
					balloonImageSize: [260, 100],
					balloonShadow: false,
					balloonAutoPan: false
				}); let myPlacemark7 = new ymaps.Placemark([54.94021, 83.119424], {
					balloonContent: '<div class="ballon"><img src="/design/img/logoNormal.png" class="ll"/><span>Филиал Ученическая</span><br/><p> Ученическая 8</p><span style="cursor: pointer; font-size: 12px; border-bottom: 1px dashed;" onclick="showSchedule(7,9)">Показать расписание</span><img class="close" onclick="myMap.balloon.close()" src="/design/img/close.png"/></div>'
				}, {
					iconImageHref: '/design/img/pinNormal.png',
					iconImageSize: [30, 40],
					iconImageOffset: [-15, -40],
					balloonContentSize: [270, 100],
					balloonLayout: "default#imageWithContent",
					balloonImageHref: '/design/img/ballon1.png',
					balloonImageOffset: [-65, -100],
					balloonImageSize: [260, 100],
					balloonShadow: false,
					balloonAutoPan: false
				}); let myPlacemark8 = new ymaps.Placemark([55.024605, 82.942726], {
					balloonContent: '<div class="ballon"><img src="/design/img/logoNormal.png" class="ll"/><span>Филиал Белинского</span><br/><p> Белинского 1</p><span style="cursor: pointer; font-size: 12px; border-bottom: 1px dashed;" onclick="showSchedule(6,10)">Показать расписание</span><img class="close" onclick="myMap.balloon.close()" src="/design/img/close.png"/></div>'
				}, {
					iconImageHref: '/design/img/pinNormal.png',
					iconImageSize: [30, 40],
					iconImageOffset: [-15, -40],
					balloonContentSize: [270, 100],
					balloonLayout: "default#imageWithContent",
					balloonImageHref: '/design/img/ballon1.png',
					balloonImageOffset: [-65, -100],
					balloonImageSize: [260, 100],
					balloonShadow: false,
					balloonAutoPan: false
				}); let myPlacemark9 = new ymaps.Placemark([54.925101, 82.997631], {
					balloonContent: '<div class="ballon"><img src="/design/img/logoNormal.png" class="ll"/><span>Филиал Краснообск</span><br/><p> Восточная 29</p><span style="cursor: pointer; font-size: 12px; border-bottom: 1px dashed;" onclick="showSchedule(12,12)">Показать расписание</span><img class="close" onclick="myMap.balloon.close()" src="/design/img/close.png"/></div>'
				}, {
					iconImageHref: '/design/img/pinNormal.png',
					iconImageSize: [30, 40],
					iconImageOffset: [-15, -40],
					balloonContentSize: [270, 100],
					balloonLayout: "default#imageWithContent",
					balloonImageHref: '/design/img/ballon1.png',
					balloonImageOffset: [-65, -100],
					balloonImageSize: [260, 100],
					balloonShadow: false,
					balloonAutoPan: false
				}); let myPlacemark10 = new ymaps.Placemark([54.772063, 83.073431], {
					balloonContent: '<div class="ballon"><img src="/design/img/logoNormal.png" class="ll"/><span>Филиал Бердск Ремикс</span><br/><p> Изумрудный городок, 5</p><span style="cursor: pointer; font-size: 12px; border-bottom: 1px dashed;" onclick="showSchedule(13,13)">Показать расписание</span><img class="close" onclick="myMap.balloon.close()" src="/design/img/close.png"/></div>'
				}, {
					iconImageHref: '/design/img/pinNormal.png',
					iconImageSize: [30, 40],
					iconImageOffset: [-15, -40],
					balloonContentSize: [270, 100],
					balloonLayout: "default#imageWithContent",
					balloonImageHref: '/design/img/ballon1.png',
					balloonImageOffset: [-65, -100],
					balloonImageSize: [260, 100],
					balloonShadow: false,
					balloonAutoPan: false
				}); let myPlacemark11 = new ymaps.Placemark([54.935022, 82.899104], {
					balloonContent: '<div class="ballon"><img src="/design/img/logoNormal.png" class="ll"/><span>Филиал Зорге</span><br/><p> Зорге 2</p><span style="cursor: pointer; font-size: 12px; border-bottom: 1px dashed;" onclick="showSchedule(4,15)">Показать расписание</span><img class="close" onclick="myMap.balloon.close()" src="/design/img/close.png"/></div>'
				}, {
					iconImageHref: '/design/img/pinNormal.png',
					iconImageSize: [30, 40],
					iconImageOffset: [-15, -40],
					balloonContentSize: [270, 100],
					balloonLayout: "default#imageWithContent",
					balloonImageHref: '/design/img/ballon1.png',
					balloonImageOffset: [-65, -100],
					balloonImageSize: [260, 100],
					balloonShadow: false,
					balloonAutoPan: false
				}); let myPlacemark12 = new ymaps.Placemark([55.087836, 83.046284], {
					balloonContent: '<div class="ballon"><img src="/design/img/logoNormal.png" class="ll"/><span>Филиал Каменка</span><br/><p> Титова 1а</p><span style="cursor: pointer; font-size: 12px; border-bottom: 1px dashed;" onclick="showSchedule(14,16)">Показать расписание</span><img class="close" onclick="myMap.balloon.close()" src="/design/img/close.png"/></div>'
				}, {
					iconImageHref: '/design/img/pinNormal.png',
					iconImageSize: [30, 40],
					iconImageOffset: [-15, -40],
					balloonContentSize: [270, 100],
					balloonLayout: "default#imageWithContent",
					balloonImageHref: '/design/img/ballon1.png',
					balloonImageOffset: [-65, -100],
					balloonImageSize: [260, 100],
					balloonShadow: false,
					balloonAutoPan: false
				}); let myPlacemark13 = new ymaps.Placemark([54.965864, 82.842141], {
					balloonContent: '<div class="ballon"><img src="/design/img/logoNormal.png" class="ll"/><span>Филиал Связистов</span><br/><p> Связистов 135</p><span style="cursor: pointer; font-size: 12px; border-bottom: 1px dashed;" onclick="showSchedule(5,17)">Показать расписание</span><img class="close" onclick="myMap.balloon.close()" src="/design/img/close.png"/></div>'
				}, {
					iconImageHref: '/design/img/pinNormal.png',
					iconImageSize: [30, 40],
					iconImageOffset: [-15, -40],
					balloonContentSize: [270, 100],
					balloonLayout: "default#imageWithContent",
					balloonImageHref: '/design/img/ballon1.png',
					balloonImageOffset: [-65, -100],
					balloonImageSize: [260, 100],
					balloonShadow: false,
					balloonAutoPan: false
				}); let myPlacemark14 = new ymaps.Placemark([55.06851, 82.913342], {
					balloonContent: '<div class="ballon"><img src="/design/img/logoNormal.png" class="ll"/><span>Филиал МСЦ Атлетика</span><br/><p> Красный проспект 220 к10</p><span style="cursor: pointer; font-size: 12px; border-bottom: 1px dashed;" onclick="showSchedule(2,18)">Показать расписание</span><img class="close" onclick="myMap.balloon.close()" src="/design/img/close.png"/></div>'
				}, {
					iconImageHref: '/design/img/pinNormal.png',
					iconImageSize: [30, 40],
					iconImageOffset: [-15, -40],
					balloonContentSize: [270, 100],
					balloonLayout: "default#imageWithContent",
					balloonImageHref: '/design/img/ballon1.png',
					balloonImageOffset: [-65, -100],
					balloonImageSize: [260, 100],
					balloonShadow: false,
					balloonAutoPan: false
				}); let myPlacemark15 = new ymaps.Placemark([54.860601, 83.093795], {
					balloonContent: '<div class="ballon"><img src="/design/img/logoNormal.png" class="ll"/><span>Филиал Академгородок</span><br/><p>проспект Строителей 23</p><span style="cursor: pointer; font-size: 12px; border-bottom: 1px dashed;" onclick="showSchedule(8,19)">Показать расписание</span><img class="close" onclick="myMap.balloon.close()" src="/design/img/close.png"/></div>'
				}, {
					iconImageHref: '/design/img/pinNormal.png',
					iconImageSize: [30, 40],
					iconImageOffset: [-15, -40],
					balloonContentSize: [270, 100],
					balloonLayout: "default#imageWithContent",
					balloonImageHref: '/design/img/ballon1.png',
					balloonImageOffset: [-65, -100],
					balloonImageSize: [260, 100],
					balloonShadow: false,
					balloonAutoPan: false
				}); let myPlacemark16 = new ymaps.Placemark([55.113529, 82.933743], {
					balloonContent: '<div class="ballon"><img src="/design/img/logoNormal.png" class="ll"/><span>Филиал Тюленина / Краузе</span><br/><p>Тюленина 27</p><span style="cursor: pointer; font-size: 12px; border-bottom: 1px dashed;" onclick="showSchedule(3,21)">Показать расписание</span><img class="close" onclick="myMap.balloon.close()" src="/design/img/close.png"/></div>'
				}, {
					iconImageHref: '/design/img/pinNormal.png',
					iconImageSize: [30, 40],
					iconImageOffset: [-15, -40],
					balloonContentSize: [270, 100],
					balloonLayout: "default#imageWithContent",
					balloonImageHref: '/design/img/ballon1.png',
					balloonImageOffset: [-65, -100],
					balloonImageSize: [260, 100],
					balloonShadow: false,
					balloonAutoPan: false
				}); let myPlacemark17 = new ymaps.Placemark([55.06685, 82.925002], {
					balloonContent: '<div class="ballon"><img src="/design/img/logoNormal.png" class="ll"/><span>Филиал СГУПС</span><br/><p> Залесского, 3/1</p><span style="cursor: pointer; font-size: 12px; border-bottom: 1px dashed;" onclick="showSchedule(2,22)">Показать расписание</span><img class="close" onclick="myMap.balloon.close()" src="/design/img/close.png"/></div>'
				}, {
					iconImageHref: '/design/img/pinNormal.png',
					iconImageSize: [30, 40],
					iconImageOffset: [-15, -40],
					balloonContentSize: [270, 100],
					balloonLayout: "default#imageWithContent",
					balloonImageHref: '/design/img/ballon1.png',
					balloonImageOffset: [-65, -100],
					balloonImageSize: [260, 100],
					balloonShadow: false,
					balloonAutoPan: false
				}); let myPlacemark18 = new ymaps.Placemark([54.999139, 83.012085], {
					balloonContent: '<div class="ballon"><img src="/design/img/logoNormal.png" class="ll"/><span>Филиал Выборная</span><br/><p> Выборная 126</p><span style="cursor: pointer; font-size: 12px; border-bottom: 1px dashed;" onclick="showSchedule(6,24)">Показать расписание</span><img class="close" onclick="myMap.balloon.close()" src="/design/img/close.png"/></div>'
				}, {
					iconImageHref: '/design/img/pinNormal.png',
					iconImageSize: [30, 40],
					iconImageOffset: [-15, -40],
					balloonContentSize: [270, 100],
					balloonLayout: "default#imageWithContent",
					balloonImageHref: '/design/img/ballon1.png',
					balloonImageOffset: [-65, -100],
					balloonImageSize: [260, 100],
					balloonShadow: false,
					balloonAutoPan: false
				}); let myPlacemark19 = new ymaps.Placemark([54.97793, 83.055464], {
					balloonContent: '<div class="ballon"><img src="/design/img/logoNormal.png" class="ll"/><span>Филиал Школа 214</span><br/><p> Первомайская 220/1</p><span style="cursor: pointer; font-size: 12px; border-bottom: 1px dashed;" onclick="showSchedule(7,27)">Показать расписание</span><img class="close" onclick="myMap.balloon.close()" src="/design/img/close.png"/></div>'
				}, {
					iconImageHref: '/design/img/pinNormal.png',
					iconImageSize: [30, 40],
					iconImageOffset: [-15, -40],
					balloonContentSize: [270, 100],
					balloonLayout: "default#imageWithContent",
					balloonImageHref: '/design/img/ballon1.png',
					balloonImageOffset: [-65, -100],
					balloonImageSize: [260, 100],
					balloonShadow: false,
					balloonAutoPan: false
				}); let myPlacemark20 = new ymaps.Placemark([54.995973, 82.692527], {
					balloonContent: '<div class="ballon"><img src="/design/img/logoNormal.png" class="ll"/><span>Филиал Обь</span><br/><p> ЖКО Аэропорта, 25/1</p><span style="cursor: pointer; font-size: 12px; border-bottom: 1px dashed;" onclick="showSchedule(15,28)">Показать расписание</span><img class="close" onclick="myMap.balloon.close()" src="/design/img/close.png"/></div>'
				}, {
					iconImageHref: '/design/img/pinNormal.png',
					iconImageSize: [30, 40],
					iconImageOffset: [-15, -40],
					balloonContentSize: [270, 100],
					balloonLayout: "default#imageWithContent",
					balloonImageHref: '/design/img/ballon1.png',
					balloonImageOffset: [-65, -100],
					balloonImageSize: [260, 100],
					balloonShadow: false,
					balloonAutoPan: false
				}); let myPlacemark21 = new ymaps.Placemark([55.072721, 82.946157], {
					balloonContent: '<div class="ballon"><img src="/design/img/logoNormal.png" class="ll"/><span>Филиал Космос</span><br/><p>Богдана Хмельницкого, 27</p><span style="cursor: pointer; font-size: 12px; border-bottom: 1px dashed;" onclick="showSchedule(3,30)">Показать расписание</span><img class="close" onclick="myMap.balloon.close()" src="/design/img/close.png"/></div>'
				}, {
					iconImageHref: '/design/img/pinNormal.png',
					iconImageSize: [30, 40],
					iconImageOffset: [-15, -40],
					balloonContentSize: [270, 100],
					balloonLayout: "default#imageWithContent",
					balloonImageHref: '/design/img/ballon1.png',
					balloonImageOffset: [-65, -100],
					balloonImageSize: [260, 100],
					balloonShadow: false,
					balloonAutoPan: false
				}); let myPlacemark22 = new ymaps.Placemark([55.019346, 83.009749], {
					balloonContent: '<div class="ballon"><img src="/design/img/logoNormal.png" class="ll"/><span>Филиал Школа 216</span><br/><p> Виталия Потылицына 9</p><span style="cursor: pointer; font-size: 12px; border-bottom: 1px dashed;" onclick="showSchedule(6,31)">Показать расписание</span><img class="close" onclick="myMap.balloon.close()" src="/design/img/close.png"/></div>'
				}, {
					iconImageHref: '/design/img/pinNormal.png',
					iconImageSize: [30, 40],
					iconImageOffset: [-15, -40],
					balloonContentSize: [270, 100],
					balloonLayout: "default#imageWithContent",
					balloonImageHref: '/design/img/ballon1.png',
					balloonImageOffset: [-65, -100],
					balloonImageSize: [260, 100],
					balloonShadow: false,
					balloonAutoPan: false
				}); let myPlacemark23 = new ymaps.Placemark([55.049323, 82.929664], {
					balloonContent: '<div class="ballon"><img src="/design/img/logoNormal.png" class="ll"/><span>Филиал БАZА, Писарева 60</span><br/><p>Писарева 60</p><span style="cursor: pointer; font-size: 12px; border-bottom: 1px dashed;" onclick="showSchedule(9,33)">Показать расписание</span><img class="close" onclick="myMap.balloon.close()" src="/design/img/close.png"/></div>'
				}, {
					iconImageHref: '/design/img/pinNormal.png',
					iconImageSize: [30, 40],
					iconImageOffset: [-15, -40],
					balloonContentSize: [270, 100],
					balloonLayout: "default#imageWithContent",
					balloonImageHref: '/design/img/ballon1.png',
					balloonImageOffset: [-65, -100],
					balloonImageSize: [260, 100],
					balloonShadow: false,
					balloonAutoPan: false
				}); let myPlacemark24 = new ymaps.Placemark([55.04889, 82.955419], {
					balloonContent: '<div class="ballon"><img src="/design/img/logoNormal.png" class="ll"/><span>Филиал Березовая роща</span><br/><p>Планетная 53</p><span style="cursor: pointer; font-size: 12px; border-bottom: 1px dashed;" onclick="showSchedule(1,34)">Показать расписание</span><img class="close" onclick="myMap.balloon.close()" src="/design/img/close.png"/></div>'
				}, {
					iconImageHref: '/design/img/pinNormal.png',
					iconImageSize: [30, 40],
					iconImageOffset: [-15, -40],
					balloonContentSize: [270, 100],
					balloonLayout: "default#imageWithContent",
					balloonImageHref: '/design/img/ballon1.png',
					balloonImageOffset: [-65, -100],
					balloonImageSize: [260, 100],
					balloonShadow: false,
					balloonAutoPan: false
				}); let myPlacemark25 = new ymaps.Placemark([55.027882, 82.961339], {
					balloonContent: '<div class="ballon"><img src="/design/img/logoNormal.png" class="ll"/><span>Филиал Центр Фехтования</span><br/><p>Гаранина 2</p><span style="cursor: pointer; font-size: 12px; border-bottom: 1px dashed;" onclick="showSchedule(6,38)">Показать расписание</span><img class="close" onclick="myMap.balloon.close()" src="/design/img/close.png"/></div>'
				}, {
					iconImageHref: '/design/img/pinNormal.png',
					iconImageSize: [30, 40],
					iconImageOffset: [-15, -40],
					balloonContentSize: [270, 100],
					balloonLayout: "default#imageWithContent",
					balloonImageHref: '/design/img/ballon1.png',
					balloonImageOffset: [-65, -100],
					balloonImageSize: [260, 100],
					balloonShadow: false,
					balloonAutoPan: false
				}); let myPlacemark26 = new ymaps.Placemark([54.954393, 82.959857], {
					balloonContent: '<div class="ballon"><img src="/design/img/logoNormal.png" class="ll"/><span>Филиал На Чемском</span><br/><p>Чемская 38</p><span style="cursor: pointer; font-size: 12px; border-bottom: 1px dashed;" onclick="showSchedule(4,40)">Показать расписание</span><img class="close" onclick="myMap.balloon.close()" src="/design/img/close.png"/></div>'
				}, {
					iconImageHref: '/design/img/pinNormal.png',
					iconImageSize: [30, 40],
					iconImageOffset: [-15, -40],
					balloonContentSize: [270, 100],
					balloonLayout: "default#imageWithContent",
					balloonImageHref: '/design/img/ballon1.png',
					balloonImageOffset: [-65, -100],
					balloonImageSize: [260, 100],
					balloonShadow: false,
					balloonAutoPan: false
				});
				myCollection.add(myPlacemark0).add(myPlacemark1).add(myPlacemark2).add(myPlacemark3).add(myPlacemark4).add(myPlacemark5).add(myPlacemark6).add(myPlacemark7).add(myPlacemark8).add(myPlacemark9).add(myPlacemark10).add(myPlacemark11).add(myPlacemark12).add(myPlacemark13).add(myPlacemark14).add(myPlacemark15).add(myPlacemark16).add(myPlacemark17).add(myPlacemark18).add(myPlacemark19).add(myPlacemark20).add(myPlacemark21).add(myPlacemark22).add(myPlacemark23).add(myPlacemark24).add(myPlacemark25).add(myPlacemark26);
				
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