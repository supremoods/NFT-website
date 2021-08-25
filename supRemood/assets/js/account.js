const submitButton = $('#submit-button');

$(function(){
  submitButton.prop('disabled', true);
});

$('.textbox').on('input', function() {
  if(!$('#username').val() || !$('#email').val() || !$('#password').val() || !$('#co_password').val() || $('#co_password').val() != $('#password').val())
    submitButton.attr('disabled', true);
  else {
    submitButton.attr('disabled', false);
  }
});

$('.textplace').on('input', function() {
  if(!$('#password').val() || !$('#co_password').val() || $('#co_password').val() != $('#password').val())
    submitButton.attr('disabled', true);
  else {
    submitButton.attr('disabled', false);
  }
});

$('#co_password').on('input', function() {
  if (!$('#password').val()|| !$(this).val() || $(this).val() == $('#password').val()){
    $(this).css('border', '1px solid #F0F2F7');
    $('#password').css('border', '1px solid #F0F2F7');
  } else if($(this).val() != $('#password').val()){
    $(this).css('border', '1px solid red');
    $('#password').css('border', '1px solid red');
  }
});

$(".toggleView-1").click(function() {
  let input = $('#password');
  $(this).toggleClass("fa-eye fa-eye-slash");
  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
});

$(".toggleView-2").click(function() {
  let input = $('#co_password');
  $(this).toggleClass("fa-eye fa-eye-slash");
  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
});



