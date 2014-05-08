<?php
	$db = new mysqli('localhost', 'root', 'root', 'benvenutti');
	//$db = new mysqli('10.33.143.26',  'coleg148_ti', 'innovacionesti.2013','coleg148_benvenutti');

	if($db->connect_errno > 0)
	{
		die('Unable to connect to database [' . $db->connect_error . ']');
	}
	if(function_exists($_GET['f'])){
		$_GET['f']();
	}

	function delete(){
		$product = $_POST['id_product'];
		$up = "UPDATE Inventario SET Activo=0 WHERE Id_producto = $product";
		if(mysqli_query($db,$up)){
		    	$arr = array('Exito' => 1, 'Producto' => $product);
		    }else{ 
		    	$arr = array('Exito' => 0, 'Producto' => $product);
		    }

		echo json_encode($arr);
	}

	function add(){
		$product = $_POST['id_product'];
		//$db->query("UPDATE Inventario SET Activo=1 WHERE Id_producto = $product"); 
		//$result = $db->query("SELECT * FROM Inventario");
      	$arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => $product);

		echo json_encode($arr);
	}
?>