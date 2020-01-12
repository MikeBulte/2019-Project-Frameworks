// let intervalHandle;
//
//
// function resetPage() {
//     document.getElementById("inputArea").style.display = "none";
//
// }
//
//
// window.tick = function (min) {
//
//     let minute = Math.floor(min / 60);
//     let second = min - (minute * 60);
//
//     if (second < 10) {
//         second = "0" + second;
//     }
//     let message = minute.toString() + ":" + second;
//
//     if (min === 0) {
//         alert("Ronde is voorbij");
//         clearInterval(intervalHandle);
//         resetPage();
//     }
//     min--;
// };
//
// window.display = function(min){
//     startCounter.getElementById("time")
// };
//
// window.startCounter = function (min) {
//
//     if (isNaN(min)) {
//         alert("Type a valid number please");
//
//     }else {
//         alert("Ronde wordt gestart");
//
//         intervalHandle = setInterval(tick, 1000);
//     }};
//
// window.onload=function() {
//     let myInput = document.createElement("input");
//     myInput.setAttribute("type", "text");
//     myInput.setAttribute("id", "minutes");
// };
const moment = require('moment');
const eventTime= new Date(moment().add(642, 'seconds')); // Timestamp - Sun, 21 Apr 2013 13:00:00 GMT
const currentTime = new Date(); // Timestamp - Sun, 21 Apr 2013 12:30:00 GMT
const diffTime = eventTime - currentTime;
const duration = moment.duration(diffTime*1000, 'milliseconds');
const interval = 1000;


export default class Timer {

    constructor(){
        this.eventTime= new Date(); // Timestamp - Sun, 21 Apr 2013 13:00:00 GMT
        this.currentTime = new Date(); // Timestamp - Sun, 21 Apr 2013 12:30:00 GMT
        this.diffTime = eventTime - currentTime;
        this.duration = moment.duration(diffTime*1000, 'milliseconds');
        this.interval = 1000;

        this.fetch()
    }

    fetch(){
        $.ajax({
            type: 'get',
            url: '/~menno/999games/api/timer',


        })
    .then((result)=>{
            this.eventTime= new Date(moment().add(result.seconds, 'seconds'));
            this.countDown();
        })
    }

    countDown(){
        setInterval(()=>{
            this.duration = moment.duration(this.duration - this.interval, 'milliseconds');
            $('.countdown').text(this.duration.hours() + ":" + this.duration.minutes() + ":" + this.duration.seconds())
        }, this.interval);
    }
}


window.checkTimer = function (token, sec) {
    $.ajax({
        type: 'post',
        url: '/~menno/999games/api/timer',
        headers: {
            'Accept': 'application/json',
            'Authorization': 'Bearer ' + token
        },
        data: {
            action: 'start',
            seconds: sec
        }
    }).done(function (data) {
        if (data) {
            console.log('input ok')
        }
    }).fail(function (ctx) {
        alert(ctx.responseText);
        console.log(ctx.responseText);
        console.log('no error')
    });
};
