<?php
//header("Content-type:text/html;charset=utf-8");
$uploaddir = 'C:/Users/Administrator/Desktop/temp/upload/';
if (!is_dir($uploaddir)){
	mkdir($uploaddir,0777,true);
}
if (isset($_FILES['userfile']['tmp_name'])){
	//var_dump($_FILES);
	//var_dump($_POST);
	//$file=mb_convert_encoding($_FILES["userfile"]["name"],"big5","utf8");	
	$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
	//echo $_FILES['userfile']['tmp_name']."<br/>";
	//echo $uploadfile."<br/>";

	if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
		echo "Upload Success\n";
	} else {
		echo "UpLoad failed!\n";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="charset=utf-8" />
<link rel="stylesheet" href="foundation/css/normalize.css">
<link rel="stylesheet" href="foundation/css/foundation.css">
<!-- If you are using the gem version, you need this only -->
<link rel="stylesheet" href="foundation/css/app.css">
<script src="foundation/js/vendor/modernizr.js"></script>

</head>
<body>

	<form enctype="multipart/form-data" action="file_upload_to_desk_.php"
		method="POST">
		<!-- MAX_FILE_SIZE must precede the file input field -->
		<input type="hidden" name="MAX_FILE_SIZE" value="104857600" />
		<!-- Name of input element determines name in $_FILES array -->
		<input name="userfile" type="file" /> <input type="submit"
			value="Send File" />
	</form>
</body>