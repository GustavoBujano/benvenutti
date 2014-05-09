<?php
	/*$db = new mysqli('localhost', 'root', 'root', 'benvenutti');
	//$db = new mysqli('10.33.143.26',  'coleg148_ti', 'innovacionesti.2013','coleg148_benvenutti');

	if($db->connect_errno > 0)
	{
		die('Unable to connect to database [' . $db->connect_error . ']');
	}*/
	include("query/conexion.php");
	if(function_exists($_GET['f'])){
		$_GET['f']($db);
	}

	function delete($connect){
		$product = $_POST['id_product'];
		$up = "UPDATE Inventario SET Activo=0 WHERE Id_producto = $product";
		if(mysqli_query($connect,$up)){
		    	$arr = array('Exito' => 1, 'Producto' => $product);
		    }else{ 
		    	$arr = array('Exito' => 0, 'Producto' => $product);
		    }

		echo json_encode($arr);
	}

	function add($connect){
		$product = $_POST['id_product'];
		$up = "UPDATE Inventario SET Activo=1 WHERE Id_producto = $product";
		if(mysqli_query($connect,$up)){
		    	$arr = array('Exito' => 1, 'Producto' => $product);
		    }else{ 
		    	$arr = array('Exito' => 0, 'Producto' => $product);
		    }

		echo json_encode($arr);
	}

	function get($connect){
		$product = $_POST['id_product'];
		$select = "SELECT * FROM Inventario WHERE Id_producto = $product";

		$result = $connect->query($select);
		$row = mysqli_fetch_array($result, MYSQLI_NUM);
		echo json_encode($row);
	}
?>