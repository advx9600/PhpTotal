<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en">
<head>
<meta charset="utf-8">
<!-- If you delete this meta tag World War Z will become a reality -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>我的主页</title>
<!-- If you are using the CSS version, only link these 2 files, you may add app.css to use for your overrides if you like -->
<link rel="stylesheet" href="foundation/css/normalize.css">
<link rel="stylesheet" href="foundation/css/foundation.css">
<!-- If you are using the gem version, you need this only -->
<link rel="stylesheet" href="foundation/css/app.css">
<script src="foundation/js/vendor/modernizr.js"></script>
</head>
<body>
	<div class="row">
		<div class="large-12 columns">
			<h1>Welcome to My website!</h1>
		</div>
	</div>
	<?php
	$commnets=array(
				/* "系统烧写文件下载","pro/ImgUpgrade/jQuery-File-Upload/" */
				"apk文件下载","pro/ImgUpgrade/app.php",												
				"文件上传","pro/zothers/file_upload_to_desk_.php",
				"temp下载","pro/zothers/file_download_to_mobile.php",
	);
	for ($i=0;$i<count($commnets);$i=$i+2)
	{
		echo "<div class=\"row\">
					<div class=\"large-12 columns\">
					<a class=\"small button\" href=\"{$commnets[$i+1]}\">{$commnets[$i]}</a>
					</div>
				</div>";
	}
	?>
	<!-- body content here -->
	<script src="foundation/js/vendor/jquery.js"></script>
	<script src="foundation/js/foundation.min.js"></script>
	<script> $(document).foundation(); </script>
</body>
</html>
