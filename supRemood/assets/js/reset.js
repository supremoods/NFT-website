$("#close").on("click", function() {
    $("#reset-container").hide();
});


$('.textplace-1').on('input', function() {
    if(!$('#email').val())
      submitButton.attr('disabled', true);
    else {
      submitButton.attr('disabled', false);
    }
});

$('#co_password').on('input', function(){
    if($(this).val() != $('#password').val()){
      $('#submitNew').attr('disabled', true);
      $(this).css('border', '1px solid red');
      $('#password').css('border', '1px solid red');
    
    } else {
      $('#submitNew').attr('disabled', false);
      $(this).css('border', 'none');
      $('#password').css('border', 'none');
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