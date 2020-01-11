let intervalHandle;


function resetPage() {
    document.getElementById("inputArea").style.display = "none";

}


window.tick = function (min) {

    let minute = Math.floor(min / 60);
    let second = min - (minute * 60);

    if (second < 10) {
        second = "0" + second;
    }
    let message = minute.toString() + ":" + second;

    if (min === 0) {
        alert("Ronde is voorbij");
        clearInterval(intervalHandle);
        resetPage();
    }
    min--;
};

window.display = function(min){
    startCounter.getElementById("time")
};

window.startCounter = function (min) {

    if (isNaN(min)) {
        alert("Type a valid number please");

    }else {
        alert("Ronde wordt gestart");

        intervalHandle = setInterval(tick, 1000);
    }};

window.onload=function() {
    let myInput = document.createElement("input");
    myInput.setAttribute("type", "text");
    myInput.setAttribute("id", "minutes");
};




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
