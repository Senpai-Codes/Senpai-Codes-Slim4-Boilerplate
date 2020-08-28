require('./Register.css');


$(document).ready(function() {
    $( "#target").click(function() {
        var email=$("#email").val();
        var firstname=$("#firstname").val();
        var lastname=$("#lastname").val();
        var email=$("#email").val();
        var password=$("#psw").val();
        console.log('send');

        var settings = {
            "url": "http://localhost:8888/Register",
            "method": "POST",
            "timeout": 0,
            "data": {
              "firstname": firstname,
              "lastname": lastname,
              "email": email,
              "password": password
            }
          };
          
          $.ajax(settings).done(function (response) {
            console.log(typeof(response));
            if (response.success == 1) {
                $("input").val('');
                Swal.fire(
                    'thank you for joining us',
                    'head to your email to activate your account',
                    'success'
                  );
            }else{
                Swal.fire(
                    'something went wrong',
                    'please check inputs',
                    'error'
                  );  
            }
          });

      });
    
})