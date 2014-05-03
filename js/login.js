jQuery(document).ready(function() {

    $('#formulario').submit(function(event) {

        var username = $(this).find('#username').val();
        var password = $(this).find('#password').val();
        
         var $form = $(this),
         url = $form.attr('action');

        if (/\s/.test(username) || (username === ''))
        {
            return false;
        } else {
            if (password === '')
            {
                return false;
            } else
            {
               
             $.ajax({
                    type: "POST",
                    url: "query/login_valida.php",
                    data: $form.serialize(),
                       beforeSend: function()
                    {
                      
                      console.log("validando...");
                        
                    },
                    success: function(datos) {
                        if(datos > 0)
                        {
                          location.reload();
                        }else{
                        
                          $(".error").remove();
                          $("#signup_form_errors").append("<li class='error'>Usuario o contraseña son incorrectos.</li>");
                        }
                    }, error: function(datos) {
                        alert("error");
                    }

                });
            }
        }

        event.preventDefault();
    });





});

