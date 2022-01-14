<!---@include files-->
<?php
session_start();
include 'header.php';
include 'footer.php';
// try{
if (!empty($_SESSION["name"])) {
?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>Home</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


    </head>

    <body>
        <?php
        
        include 'content.php';
        ?>

    </body>

    </html>
    <script type="text/javascript">
        // Initialize CKEditor
    </script>
<?php
} else{
        echo "kindly login first";
        header("refresh:5;url=login.php");

}
// }catch(Exception $e){
// }
?>