<?php
	include("query/conexion.php");

	if(isset($_POST['action'])){
		// Function to add a new product
		if($_POST['action'] == 'add'){
			$codigo = $_POST['codigo'];
			$nombre = $_POST['nombre'];
			$marca = $_POST['marca'];
			$modelo = $_POST['modelo'];
			$cantidad = $_POST['cantidad'];
			$medida = $_POST['medida'];
			$compra = $_POST['compra'];
			$venta = $_POST['venta'];
			$descripcion = $_POST['descripcion'];
			$tipo = $_POST['tipo'];
			$fecha = $_POST['fecha'];
			$hora = $_POST['hora'];
			$activo = $_POST['activo'];

			$allowedExts = array("gif", "jpeg", "jpg", "png");
			$temp = explode(".", $_FILES["file"]["name"]);
			$extension = end($temp);

			if ((($_FILES["file"]["type"] == "image/gif")
			|| ($_FILES["file"]["type"] == "image/jpeg")
			|| ($_FILES["file"]["type"] == "image/jpg")
			|| ($_FILES["file"]["type"] == "image/pjpeg")
			|| ($_FILES["file"]["type"] == "image/x-png")
			|| ($_FILES["file"]["type"] == "image/png"))
			&& ($_FILES["file"]["size"] < 20000)
			&& in_array($extension, $allowedExts)) {
			  if ($_FILES["file"]["error"] > 0) {
			    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
			  } else {
			    echo "Upload: " . $_FILES["file"]["name"] . "<br>";
			    echo "Type: " . $_FILES["file"]["type"] . "<br>";
			    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
			    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";
			    $file_name = $codigo.$_FILES["file"]["name"];

			    if (file_exists("upload/" . $file_name)) {
			      echo $_FILES["file"]["name"] . " already exists. ";
			    } else {
			      move_uploaded_file($_FILES["file"]["tmp_name"],
			      "upload/" . $file_name);
			      echo "Stored in: " . "upload/" . $file_name;
			    }
			  }
			} else {
			  echo "Invalid file";
			}

			$insert = "INSERT INTO `Inventario`(`Codigo`, `Nombre`, `Marca`, `Modelo`, `Cantidad`, `Medida`, `Costo_compra`, `Costo_venta`, `Imagen`, `Descripcion`, `Tipo`, `Activo`, `Fecha`, `Hora`) VALUES ('$codigo','$nombre','$marca','$modelo','$cantidad','$medida','$compra','$venta','$file_name','$descripcion','$tipo','$activo','$fecha','$hora')";
			echo $insert;
			if(mysqli_query($db, $insert))
				echo "Exito";
			else
				echo "Buuuu!!";
			echo $codigo." ".$nombre." ".$marca." ".$modelo." ".$cantidad." ".$medida." ".$compra." ".$venta." ".$file_name;
		}
	}
?>