$(document).ready(function(){
    $('#login-form').submit(function(e){
      e.preventDefault();
      var formData = $(this).serialize();
      $.ajax({
        type: 'POST',
        url: 'login.php',
        data: formData,
        success: function(response){
          if(response == 'success'){
            alert('You have successfully logged in!');
            window.location.href = 'index.php';
          }
          else{
            alert('The username and/or password is incorrect!');
          }
        }
      });
    });
  });