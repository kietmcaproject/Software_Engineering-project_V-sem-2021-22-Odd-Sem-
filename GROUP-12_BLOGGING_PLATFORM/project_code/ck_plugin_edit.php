<?php
  include 'connection.php';
  include 'blog_conn.php';
?>

<!DOCTYPE html>
<!--
Copyright (c) 2003-2020, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
-->
<html lang="en">
<head>
	<meta charset="utf-8">
	<script src="ckeditor/ckeditor.js"></script>
	<script src="ckeditor/samples/js/sample.js"></script>
	<link rel="stylesheet" href="ckeditor/samples/css/samples.css">
	<link rel="stylesheet" href="ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="description" content="Try the latest sample of CKEditor 4 and learn more about customizing your WYSIWYG editor with endless possibilities.">
</head>
<body id="main">
   <textarea name="econtent" id="editor" cols="30" rows="10"><?php echo $content; ?></textarea>
	
 
<script>
	initSample();
</script>

</body>
</html>
