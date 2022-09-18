let serverDay = Number(document.querySelector('.serverDay').innerHTML);
let serverMonth = Number(document.querySelector('.serverMonth').innerHTML);
let serverYear = Number(document.querySelector('.serverYear').innerHTML);
let serverHour = Number(document.querySelector('.serverHour').innerHTML);
let serverMin = Number(document.querySelector('.serverMin').innerHTML);
let serverSec = Number(document.querySelector('.serverSec').innerHTML);

let showDay = document.querySelector(".showDay");
let showMonth = document.querySelector(".showMonth");
let showYear = document.querySelector(".showYear");
let showHour = document.querySelector(".showHour");
let showMin = document.querySelector(".showMin");
let showSec = document.querySelector(".showSec");



setInterval(timeFromServer, 1000);

function timeFromServer() {

    showDay.innerHTML = `${serverDay}`;
    showMonth.innerHTML = `${serverMonth}`;
    showYear.innerHTML = `${serverYear}`;
    showHour.innerHTML = `${serverHour}`;
    showMin.innerHTML = `${serverMin}`;
    showSec.innerHTML = `${serverSec}`;

    if (serverSec >= 59) {
        serverSec = 0;

        if (serverMin <= 58) {

            serverMin++;

        } else {
            serverMin = 0;

            serverHour++;
        }

    } else {
        serverSec++;
    }

}

const serverDatePHP = document.querySelector('.serverDatePHP').innerHTML;

var target = new Date("1970-01-01 " + serverDatePHP);
console.log(target);

var now = new Date();
var nowDateTime = now.toISOString();
var nowDate = nowDateTime.split('T')[0];
var target = new Date(nowDate + 'T' + serverDatePHP);
console.log(target);