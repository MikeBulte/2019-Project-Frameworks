let mySeconds;
let intervalHandle;


function resetPage() {
    document.getElementById("inputArea").style.display = "none";

}


function tick() {
    let timeDisplay = document.getElementById("time");

    let min = Math.floor(mySeconds / 60);
    let sec = mySeconds - (min * 60);

    if (sec < 10) {
        sec = "0" + sec;
    }

    let message = min.toString() + ":" + sec;

    timeDisplay.innerHTML = message;

    if (mySeconds === 0) {
        alert("Done");
        clearInterval(intervalHandle);
        resetPage();
    }
    mySeconds--;
}

window.startCounter = function (min) {

    let myInput = min;
    if (isNaN(myInput)) {
        alert("Type a valid number please");
        return;
    }
    intervalHandle = setInterval(tick, 1000);
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
        if (data === "OK") {
            console.log('OK')
        }
    }).fail(function (ctx) {
        alert(ctx.responseText);
        console.log(ctx.responseText);
        console.log('no error')
    });
};
