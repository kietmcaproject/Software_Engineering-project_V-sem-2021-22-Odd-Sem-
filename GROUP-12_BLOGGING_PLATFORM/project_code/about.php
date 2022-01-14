<?php
include 'header.php';
include 'footer.php';
?>
<!-- ====================================embedded code===================================== -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>POST</title>
    <!--<script src="https://cdn.ckeditor.com/ckeditor5/19.0.0/classic/ckeditor.js"></script>
    <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>-->
    <style>
        textarea {
            margin-left: 25px;
        }

        form {
            width: auto;
            padding: 20px;
            border-radius: 6px;
            background: #fff;
            box-shadow: 0 0 20px 0 #095484;
        }

        input, select, textarea {
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

    </style>
</head>

<body>

<h1>
    <blockquote>&ldquo;Blogging with yourself &rdquo;</blockquote>
</h1>
<form action="post_data.php" method="post">
    <label for="Title">Title :
        <textarea name="ftitle" id="text_title" cols="30" row="2" style="margin-left: 49px;margin-block-end: auto;"></textarea>
    </label>
    <br>

    <label for="brief">Subject :
        <textarea cols="30" id="text_subject" name="fsubject" rows="2" style="margin-bottom: -13px;"></textarea>
    </label>
    <br>
    <br>
    <br>

    <?php
    include 'ck_plugin.php';//textarea also inherit from the 'plugins.php' which id="editor" & name="fcontent" ;fcontent connected with data base
    ?>

    <p><input type="submit" value="Submit"></p>
</form>
<br>
<br>
<br>
<br>
</body>

</html>
