const timeLeft =document.querySelector('#time-left')


const birthday=new Date('02/01/2023')
const second= 1000
const minute= second * 60
const hour= minute * 60
const day= hour * 24
let timeId

function countDown(){

const today=new Date();
const timeSpan= birthday-today


const days =Math.floor(timeSpan/day)
const hours =Math.floor((timeSpan%day)/hour)
const minutes =Math.floor((timeSpan%hour)/minute)
const seconds=Math.floor((timeSpan%minute)/second)

timeLeft.innerHTML='MY BIRTHDAY: '+ days +' DAYS ' +hours +' HOURS '+minutes +' MINUTES '+seconds + ' SECONDS '

}

timeId=setInterval(countDown,second)
// setInterval:bir işlemi belli bir zaman aralığında tekrarlayan fonksiyon





  