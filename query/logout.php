<?php
	session_start();   //Inicila session
	session_unset($_SESSION['session_user']);	//vácía la session
	session_unset($_SESSION['session_id_user']);
	session_unset($_SESSION['valido_user']);
	session_destroy();					//destruye la session

        header ("location: ../index.php");

        
        
            
?>
