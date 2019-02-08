//Определяем карту, координаты центра и начальный масштаб
var map = L.map('map').setView([59.946536, 30.331391], 10);

//Добавляем на нашу карту слой OpenStreetMap
L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a rel="nofollow" href="http://osm.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

let metki = new Array([59.936300, 30.316757, 'Типография ЗАВОДСКАЯ', 'Рейтинг: *****', "<img height='130px' width='130px' src=\"static/img/five.jpg\"/>", "<a href='yandex.ru'>Перейти к компании</a>"],[59.935818, 30.325291, 'Типография ПОПАП','Рейтинг: ****', "<img height='130px' width='130px' src=\"static/img/five.jpg\"/>", "<a href='yandex.ru'>Перейти к компании</a>"], [59.935000, 30.328757, 'Типография Милфитс', 'Рейтинг: *****', "<img height='130px' width='130px' src=\"static/img/five.jpg\"/>", "<a href='yandex.ru'>Перейти к компании</a>"]);
for(let i=0; i<metki.length; i++)
{
    let img = metki[i][4];
    let pereh= metki[i][5];
    L.marker(metki[i]).addTo(map)
        .bindPopup(metki[i][2]+'<br>'+metki[i][3]+'<br>'+ img +'<br>'+ pereh);
}
