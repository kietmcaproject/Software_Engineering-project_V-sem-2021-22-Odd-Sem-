<?php
include 'header.php';
include 'footer.php';
include 'connection.php';
include 'blog_conn.php';
session_start();
$conn->close();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow">
    <title>POST</title>
    <!--<script src="https://cdn.ckeditor.com/ckeditor5/19.0.0/classic/ckeditor.js"></script>-->
    <!--  <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>-->
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

        input,
        select,
        textarea {
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
    </style>
</head>

<body>
    <?php if ($_SESSION["name"]) { ?>
        <h1>
            <blockquote>&ldquo;Blogging with yourself &rdquo;</blockquote>
        </h1>
        <?php $id = $_GET['id']; ?>

        <!---------------------------- form section ------------------------------------->
        <form action="update_query.php?id=<?php echo $id; ?>" method="post">
            <!-- TITLE FIELD -->
            <label for="Title">Title :</label>
            <textarea name="etitle" id="text_title" cols="30" row="3" style="margin-left: 49px; margin-block-end: auto;"><?php echo $title; ?></textarea>
            <br>

            <!-- subject field -->
            <label for="brief">Subject :</label>
            <textarea name="esubject" id="text_subject" cols="30" rows="3" style="margin-bottom: -13px;"><?php echo $subject; ?></textarea>
            <br>
            <br>
            <br>
            <!-- content field -->
            <?php include 'ck_plugin_edit.php'; ?>

            <p><input type="submit" value="UPDATE"></p>
        </form>
        <!----------------------------- form section end--------------------------------------->
        <br>
        <br>
        <br>
        <br>
    <?php } else echo "please login first<br><a href='login.php'>Login</a>"; ?>

    <!--***********************************script*********************************-->

</body>

</html>