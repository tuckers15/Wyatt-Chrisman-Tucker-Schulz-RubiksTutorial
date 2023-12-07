
//declaring variables and setting timer display reference
let [millis,seconds,mins,hours] = [0,0,0,0];
let timer = document.querySelector('.timer');
let int= null;
let boolean= 0;

//start
document.getElementById('button-start').addEventListener('click',()=>{
    if(boolean == 0){
        if(int !== null){
            clearInterval(int);
        }
        int = setInterval(timerGo, 10);
    }
})

//finish
document.getElementById('button-finish').addEventListener('click', ()=>{
    clearInterval(int);
    boolean = 1;
});

function timerGo(){
    millis+=10;
    if(millis == 1000){
        millis = 0;
        seconds++;
        if(seconds == 60){
            seconds = 0;
            mins++;
            if(mins == 60){
                mins = 0;
                hours++;
            }
        }
    }

timer.innerHTML = ` ${hours} : ${mins} : ${seconds} : ${millis}`;

document.getElementById('txtTime').value = `${hours}:${mins}:${seconds}`;
document.getElementById('txtMillis').value = `${millis}`;

}
 