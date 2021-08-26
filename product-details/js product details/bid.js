const alpPriceEl = document.getElementById("alp-price");
const usdPriceEl = document.getElementById("usd-price");
const errorMessage = document.querySelector(".error-message");
let wallet = 1000;
let currentBidAlp = 500;
let prevBidAlp = [];
prevBidAlp.push(currentBidAlp);

console.log();

addBidPrice();

function addBidPrice() {
 
  let currentBidUsd = currentBidAlp / .60;
  usdPriceEl.innerHTML = `= $ ${currentBidUsd.toFixed(2)}`;
  console.log($('#deposit-amount').val());
  console.log("current-bid =" +currentBidAlp);
  console.log(prevBidAlp);
  alpPriceEl.innerHTML = `${currentBidAlp} `; 
}


function inputInvalid(){
  if(parseInt($('#deposit-amount').val()) < Math.max(...prevBidAlp) + 10  || $('#deposit-amount').val() == ""){
    $('.error-message').css('visibility','visible');
    errorMessage.innerHTML = `Please bet higher than tha current bid.`;
    $('.buy-spend').css('box-shadow','0 0 0 1pt red');
    $('#buy-submit').attr('disabled', true);
 
  } 
    else if (parseInt($('#deposit-amount').val()) > wallet ){
      $('.error-message').css('visibility','visible');
      errorMessage.innerHTML = `Your token in your wallet is not enough! You poor!`;
      $('.buy-spend').css('box-shadow','0 0 0 1pt red');
      $('#buy-submit').attr('disabled', true);
      console.log("aaaa");
    }
  else {
    $('.error-message').css('visibility','hidden');
    $('.error-message2').css('visibility','hidden');
    $('.buy-spend').css('box-shadow','0 0 0 1pt var(--blue)');
    $('#buy-submit').attr('disabled', false);
  }

  if($('#deposit-amount').val() == ""){
    $('#receive-amount').val('');
  }

  if($('#receive-amount').val() == ""){
    $('#deposit-amount').val('');
  }
}

$('#buy-button').on('click', function() {
  $('#check').prop('checked', false);
  $('#close-button').attr('disabled', true);
  $('.buy-modal').fadeIn('fast');
  $('.buy-container').show();
  $('.confirm-container').hide();
  $('.verification').hide();
  if($('#deposit-amount').val() == ""){
    $('#buy-submit').prop('disabled', true);
  }
});

$('.close').on('click',function(){
  $('.error-message').css('visibility','hidden'); 
  $('.error-message2').css('visibility','hidden'); 
  $('.buy-modal').fadeOut('fast');
});

$('.back').on('click',function(){
  $('.confirm-container').hide();
  $('.buy-container').show();
});

$('#deposit-amount').on('focus', function(){
  $('.buy-spend').css('box-shadow','0 0 0 1pt var(--blue)');
});

$('#receive-amount').on('focus', function(){
  $('.buy-receive').css('box-shadow','0 0 0 1pt var(--blue)');
});

$('#deposit-amount').on('input', function(){
  if (this.value.length > 8) {
    this.value = this.value.slice(0,8);
  }
  let receive = $('#receive-amount');
  let value = parseFloat($('#deposit-amount').val()  / .60).toFixed(2);

  receive.val(value);
  inputInvalid();
});

$('#receive-amount').on('input', function(){
  if (this.value.length > 9) {
    this.value = this.value.slice(0,9);
  }
  let deposit = $('#deposit-amount');
  let  value = parseFloat($('#receive-amount').val() * .60).toFixed(2);
  deposit.val(value);
  inputInvalid();
});

$('#deposit-amount, #receive-amount').on('focusout', function(){
  $('.buy-spend').css('box-shadow','none');
  $('.buy-receive').css('box-shadow','none');
});

$('#buy-submit').on('click', function(){
  $('.buy-container').hide();
  $('.confirm-container').show();
  $('.alp-val').text($('#deposit-amount').val());
  $('.usd-val').text($('#receive-amount').val());
});

$("#check").click(function() {
   return false;
});

$('#confirm-submit').on('click', function() {
  $('.confirm-container').hide();
  $('.verification').show();
  setTimeout(function(){
    $('#check').prop('checked', true);
    $('.verification-head .label').text("Payment Successful");
    $('#close-button').attr('disabled', false);
    //$('#alp-price').text($('#deposit-amount').val());
    currentBidAlp = $('#deposit-amount').val() ;
    prevBidAlp.push(parseFloat($('#deposit-amount').val())) ;
    console.log(Math.max(...prevBidAlp));

    addBidPrice();
  }, 4000);

})

$('#close-button').on('click', function() {
  $('.verification-head .label').text("Please Wait...");
  $('#deposit-amount').val("");
  $('#receive-amount').val("");
  $('.buy-modal').fadeOut('fast');
})

