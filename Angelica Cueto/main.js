const submitButton = $('#submit-button');

$(function(){
  submitButton.prop('disabled', true);
  if(!$('#username').val() || !$('#email').val() || !$('#password').val() || !$('#co_password').val())
    submitButton.attr('disabled', true);
  else {
    submitButton.attr('disabled', false);
  }
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
