// timeFrame = period of seconds, minutes, days, hours
// currentTime = current  time
// biddingCountDown = if there's someone buy product it will start counting

/* start - Bidding CountDown Function */

const buyBtn = document.querySelector(".button-buy");
const confirmBtn = document.getElementById("confirm-submit")



const endCount = document.querySelector(".countdown-container")
const bidderList = document.querySelector(".product-list");


const daysEl= document.getElementById("days");
const hoursEl= document.getElementById("hours");
const minsEl= document.getElementById("mins");
const secondsEl= document.getElementById("seconds");

let timer = undefined;
const timeFrame = "2 September 2021 18:40:00";




//button function
// buyBtn.addEventListener('click', function(){

// });

confirmBtn.addEventListener('click',addNewBidder);



function biddingCountDown() {
  const bidTimeFrame = new Date(timeFrame);
  const currentTime = new Date();
  
  var totalSeconds = (bidTimeFrame - currentTime) / 1000;
  
  var days = Math.floor(totalSeconds / 3600 / 24);
  var hours = Math.floor(totalSeconds / 3600) % 24;
  var mins = Math.floor(totalSeconds / 60) % 60;
  var seconds = Math.floor(totalSeconds) % 60;

  daysEl.innerHTML = formatTime(days);
  hoursEl.innerHTML = formatTime(hours);
  minsEl.innerHTML = formatTime(mins);
  secondsEl.innerHTML = formatTime(seconds);

   /* check if the total seconds equal to 0 */
   if(totalSeconds <= 0){
    totalSeconds.value = 00;
    clearInterval(timer);
    buyBtn.disabled = true;
    buyBtn.innerHTML = 'Sales Ended'
    endCount.innerHTML = `<h2 id="endCount-margin"></h2>`;
    console.log('a');
  }
}

function formatTime(time){
  return time < 10 ? `0${time}` : time;
}

function addNewBidder() {
  const bidList = document.createElement("ul");
  console.log("add");
  const currentTime = new Date();
  bidderList.appendChild(bidList);
  bidList.innerHTML =`
               <ul>
                  <li> <i class="fas fa-circle"></i> <span>Listed by</span> @supermood</li>
                  <p class="bid-time">${currentTime.getFullYear()}-${formatTime(currentTime.getMonth()+1)}-${formatTime(currentTime.getDate())} ${formatTime(currentTime.getHours())}:${formatTime(currentTime.getMinutes())}:${formatTime(currentTime.getSeconds())}</p>
                </ul>`;
}
  


timer = setInterval(biddingCountDown, 1000);
  biddingCountDown();




/*  end - Bidding CountDown Function */
