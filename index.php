<?php
session_start();
if (isset($_SESSION['valido_user']) == 1) {
    header("Location: main.php");
}
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Formulario de Ingreso</title>

        <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet"/>
        <link href="css/sticky-footer.css" type="text/css" rel="stylesheet"/>
        <link rel="stylesheet" type="text/css" href="css/default.css" />
        <link rel="stylesheet" type="text/css" href="css/component.css" />
        <link href="css/style_benvenutti.css" type="text/css" rel="stylesheet"/>
        <link href="css/style_benvenutti_1.css" type="text/css" rel="stylesheet"/>
        <script src="js/modernizr.custom.js"></script>

        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/style_login.css" />
        <script src="js/modernizr.custom.full.js"></script>
        <!--[if lte IE 7]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
        <style>	
            @import url(http://fonts.googleapis.com/css?family=Raleway:400,700);
            html , body{
                height: auto !important;
            }
            html{background: #7f9b4e url(images/back2.png) no-repeat center top;
                 -webkit-background-size: cover;
                 -moz-background-size: cover;
                 background-size: cover;}
            body{
                background-color: transparent;
            }
            #formulario.form-4 h1{
                text-align: center !important;
                text-shadow: 0 1px 1px rgba(0,0,0,0.7);
                color: #000;
            }
            #formulario.form-4 input{
                color: #000;
            }
            #BtnIngresar{
                color: #fff !important;
            }
            #area_work{
                height: 100%;
            }
            .error{
                padding: 14px 15px;
                text-align: center;
                line-height: 16px;
                background: none repeat scroll 0% 0% rgba(0, 0, 0, 0.33);
                color: #fff;
            }
            .signup_forms_errors
            {
                list-style-type: none;  

            }
            #password{
              margin-bottom: 0px;
            }


        </style>
    </head>

    <body>
        <?php include('headerLogin.php'); ?>
        <div class="container">
            <div id="area_work"> 
                <section class="main">
                    <form id="formulario" class="form-4">
                        <h1>Ingreso</h1>
                        <p>
                            <label for="login">Nombre de usuario</label>
                            <input type="text" id="username" name="login" placeholder="Nombre de usuario">
                        </p>
                        <p>
                            <label for="password">Contraseña</label>
                            <input type="password" id="password" name='password' placeholder="Contraseña"> 
                        </p>
                        <ul class="signup_forms_errors" id="signup_form_errors">
                         <!--   <li class="error">Your email or password were incorrect.</li>-->
                        </ul>
                        <p>
                            <input id="BtnIngresar" type="submit" name="submit" value="Ingresar">
                        </p>       
                    </form>​
                </section>
            </div>
            <?php include("footter.php"); ?>
        </div>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jqueryv1.11.js"></script>
        <script src="js/login.js"></script>
        <script>
            $(document).ready(function() {
                //Handles menu drop down
                $('.dropdown-menu').find('form').click(function(e) {
                    e.stopPropagation();
                });
                $("#area_work").click(function() {
                    var isVisible = $("#showBottom").hasClass("active");
                    if (isVisible) {
                        $("#showBottom").trigger("click");
                    }
                });
            });
        </script>
        <script src="js/classie.js"></script>
        <script>
            var menuBottom = document.getElementById('cbp-spmenu-s4'),
                    showBottom = document.getElementById('showBottom'),
                    body = document.body;
            showBottom.onclick = function() {
                classie.toggle(this, 'active');
                classie.toggle(menuBottom, 'cbp-spmenu-open');
                disableOther('showBottom');
            };
            function disableOther(button) {
                if (button !== 'showBottom') {
                    classie.toggle(showBottom, 'disabled');
                }
            }
        </script>
    </body>
</html>

