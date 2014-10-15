<?php
$dir = "C:/Users/Administrator/Desktop/temp/download";
if (!is_dir($dir)){
	mkdir($dir);
}

if (isset($_GET['file'])){
	$file = $_GET['file'];
	$file = $dir."/".$file;
	if (file_exists($file)) {
		header('Content-Description: File Transfer');
		header('Content-Type: application/octet-stream');
		header('Content-Disposition: attachment; filename='.basename($file));
		header('Content-Transfer-Encoding: binary');
		header('Expires: 0');
		header('Cache-Control: must-revalidate');
		header('Pragma: public');
		header('Content-Length: ' . filesize($file));
		ob_clean();
		flush();
		readfile($file);
		exit;
	}
}

?>
<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en">
<head>
<meta charset="utf-8">
<!-- If you delete this meta tag World War Z will become a reality -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Temp文件下载</title>
<!-- If you are using the CSS version, only link these 2 files, you may add app.css to use for your overrides if you like -->
<link rel="stylesheet" href="foundation/css/normalize.css">
<link rel="stylesheet" href="foundation/css/foundation.css">
<!-- If you are using the gem version, you need this only -->
<link rel="stylesheet" href="foundation/css/app.css">
<script src="foundation/js/vendor/modernizr.js"></script>
</head>
<body>
	<div class="row">
		<div class="large-6 columns">
			<h2>Temp download!</h2>
		</div>
	</div>
	<?php

	$files = scandir($dir);
	for ($i=2;$i<count($files);$i++)
	{
		$file = $files[$i];
		$unit = "B";
		$filesize= filesize($dir."/".$file);
		for ($j=3;$j>0;$j--){
			$base = pow(1024, $j);
			if ($filesize >$base){
				$filesize = $filesize/$base;
				switch ($j){
					case 3:$unit="G";break;
					case 2:$unit="M";break;
					case 1:$unit="KB";break;
				}
				break;
			}
		}
		$filesize=number_format($filesize,2);
		echo "<div class=\"row\">
					<div class=\"large-12 columns\">
					<a class=\"small button\" target='_blank' href=\"?file={$file}\">{$file}({$filesize}$unit)</a>
					</div>
				</div>";
	}

	?>
</body>
</html>
