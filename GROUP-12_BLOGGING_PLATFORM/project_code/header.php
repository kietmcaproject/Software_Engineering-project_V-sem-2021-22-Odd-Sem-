<html lang="en">

<head>
    <title>Page Title</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<link rel="stylesheet" href="header.css">-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <style>
        body {
            margin: 0;
            font-size: 15px;
            font-family: Arial, Helvetica, sans-serif;
            
        }

        .header {
            background-color: blueviolet;
            padding: 10px;
            text-align: center;
            
        }

        #navbar {
            overflow: hidden;
            background-color: #333;
            width:auto;
            /*position: sticky;
            top: 0;
            /*border-radius: 15px;*/

        }

        #navbar a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        #navbar a:hover {
            background-color: #ddd;
            color: black;
        }

        #navbar a.active {
            background-color: #4CAF50;
            color: white;
        }

        /*.content {
  padding: 16px;
}*/

        #navbar.sticky {
            overflow: hidden;
            background-color: #333;
            position: sticky;
            top: 0;
            width: 100%;
            border-radius: 15px;
            width: 1349px;
            /*transition-delay: 20s;*/

        }

        /* Page Content */
        .content {
            padding: 16px;
            padding-bottom: 20px;
        }

    </style>
</head>

<body>

    <div class="header">
        <h1>KIETIANS TUTORIAL</h1>
    </div>

    <!-- NAVBAR  -->
    <div id="navbar">
        <a class="active" href="home.php">Home</a>
        <a href="dashboard.php">Blog</a>
        <a href="newlook.php">New Look</a>
    </div>
   
    <script>
      /*  $(window).on("scroll", function() {
            if ($(this).scrollTop() > 1 {
                $('.header').hide();
                $('#navbar').addClass('sticky');
            } else {
                $('.header').show();
                $('#navbar').removeClass('sticky')
            }
        });*/
    </script>

</body>

</html>
