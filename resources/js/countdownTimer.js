let mySeconds;
let intervalHandle;


    window.resetPage = function () {
        document.getElementById("inputArea").style.display = "none";
    };

    window.tick =function () {
        let timeDisplay = document.getElementById("time");

        let min = Math.floor(mySeconds / 60);
        let sec = mySeconds - (min * 60);

        if (sec < 10) {
            sec = "0" + sec;
        }

        let message = min.toString() + ":" + sec;

        timeDisplay.innerHTML = message;

        if (mySeconds === 0) {
            alert("De ronde is voorbij");
            clearInterval(intervalHandle);
            resetPage();
        }
        mySeconds--;
    };

    window.startCounter  = function () {
        let myInput = document.getElementById("minutes").value;
        if (isNaN(myInput)) {
            alert("Voer een mummer in.");
            return;
        }
        mySeconds = myInput * 60;

        intervalHandle = setInterval(tick, 1000);
    }


    document.querySelector("#js-startcounter").addEventListener("click",
        function () {
            startCounter();
    });

window.checkTimer = function (token, sec) {
    $.ajax({
        type: 'post',
        url: '/api/timer',
        headers: {
            'Accept': 'application/json',
            'Authorization': 'Bearer '+token
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
        console.log('error')
    });
}

