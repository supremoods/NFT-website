function inputInvalid(){
  if(parseInt($('#deposit-amount').val()) < 1000 || parseInt($('#deposit-amount').val()) > 100000 || $('#deposit-amount').val() == ""){
    $('.error-message').css('visibility','visible');
    $('.buy-spend').css('box-shadow','0 0 0 1pt red');
    $('#buy-submit').attr('disabled', true);
  } else {
    $('.error-message').css('visibility','hidden');
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
  $('html, body').animate({
    scrollTop: $('.wallet-balance').offset().top
  }, 'fast');
  $("body").css("overflow-y", "hidden");
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

$('.close-buy').on('click',function(){
  $("body").css("overflow-y", "scroll");
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
  let value = parseFloat($('#deposit-amount').val() / 30).toFixed(2);
  receive.val(value);
  inputInvalid();
});

$('#receive-amount').on('input', function(){
  if (this.value.length > 9) {
    this.value = this.value.slice(0,9);
  }
  let deposit = $('#deposit-amount');
  let value = parseFloat($('#receive-amount').val() * 30).toFixed(2);
  deposit.val(value);
  inputInvalid();
});

$('#deposit-amount, #receive-amount').on('focusout', function(){
  $('.buy-spend').css('box-shadow','none');
  $('.buy-receive').css('box-shadow','none');
});

$('#buy-submit').on('click', function(){
  $('.buy-container').hide();
  $('.usd-val').text($('#deposit-amount').val());
  $('.alp-val').text($('#receive-amount').val());
});

$("#check").click(function() {
   return false;
});

$(function() {
  $('.verification-modal').show();
  $('.verification').show();
  
  setTimeout(function(){
    $('#check').prop('checked', true);
    $('.verification-head .label').text("Payment Successful");
    $('#close-button').attr('disabled', false);
  }, 4000);
  $('#close-button').attr('disabled', true);
})

$('#close-button').on('click', function() { 
  $("body").css("overflow-y", "scroll");
  $('.verification-head .label').text("Please Wait...");
  $('#deposit-amount').val("");
  $('#receive-amount').val("");
  $('.verification-modal').fadeOut('fast');
  $("body").css("overflow-y", "scroll");
})
