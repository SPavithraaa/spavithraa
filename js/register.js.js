$(document).ready(function(){
    $('#register-form').submit(function(e){
      e.preventDefault();
      var formData = $(this).serialize();
      $.ajax({
        type: 'POST',
        url: 'register.php',
        data: formData,
        success: function(response){
          if(response == 'success'){
            alert('You have successfully registered!');
            window.location.href = 'login.php';
          }
          else{
            alert('There was an error processing your request!');
          }
        }
      });
    });
  });