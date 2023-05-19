
// LOGIN VALIDATION
$(function() {

    $("#name_error_message").hide();
    $("#password_error_message").hide();
    $(':input[type="submit"]').prop('disabled', true);

    
    $("#form_name").focusout(function(){
    check_name();
    });
    
    $("#form_password").focusout(function() {
    check_password();
    });
    
    function check_name() {
    var pattern = /^[a-zA-Z0-9]*$/;
    var name = $("#form_name").val();
    var password_length = $("#form_password").val().length;
    if (pattern.test(name) && name !== '') {
      $("#name_error_message").hide();
      $("#nameId").css("border-bottom","2px solid #34F458");
      $(':input[type="submit"]').prop('disabled', false);
    } else {
      $("#name_error_message").html("Enter valid username!");
      $("#name_error_message").show();
      $("#nameId").css("border-bottom","2px solid #F90A0A");
      $(':input[type="submit"]').prop('disabled', true);
    }
    if(password_length < 8){
      $(':input[type="submit"]').prop('disabled', true);
    }
    }
    
    function check_password() {
    var password_length = $("#form_password").val().length;
    var name = $("#form_name").val();
    var pattern = /^[a-zA-Z0-9]*$/;
    if (password_length < 8) {
      $("#password_error_message").html("Enter valid password!");
      $("#password_error_message").show();
      $("#passwordId").css("border-bottom","2px solid #F90A0A");
      $(':input[type="submit"]').prop('disabled', true);
    } else {
      $("#password_error_message").hide();
      $("#passwordId").css("border-bottom","2px solid #34F458");
      $(':input[type="submit"]').prop('disabled', false);
    }
    if(!pattern.test(name) && !name !== ''){
      $(':input[type="submit"]').prop('disabled', true);
    }
    }
    });
    
    