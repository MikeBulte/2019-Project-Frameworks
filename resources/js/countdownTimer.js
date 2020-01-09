let mySeconds;
let intervalHandle;

$.ajax({
    type: 'post',
    url:  ''

});



function resetPage(){
    document.getElementById("inputArea").style.display="none";


}
function tick(){
    let timeDisplay=document.getElementById("time");

    let min=Math.floor(mySeconds/60);
    let sec=mySeconds-(min*60);

    if (sec < 10) {
        sec="0"+sec;
    }

    let message=min.toString()+":"+sec;

    timeDisplay.innerHTML=message;

    if(mySeconds===0){
        alert("De ronde is voorbij");
        clearInterval(intervalHandle);
        resetPage();
    }
    mySeconds--;


}
function startCounter(){
    var myInput=document.getElementById("minutes").value;
    if (isNaN(myInput)){
        alert("Voer een mummer in.");
        return;
    }
    mySeconds=myInput*60;

    intervalHandle=setInterval(tick, 1000);

    document.getElementById("inputArea").style.display="none";


}

document.querySelector(".js-startcounter").addEventListener("click",
    function () {startCounter();
        console.log(mySeconds);
});
