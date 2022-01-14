<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>BLOGGING PAGE</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/skeleton_card.css">
    <style class="cp-pen-styles">
        @import url("https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700&subset=latin-ext");
    </style>
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

<body class="sidebar-is-reduced">
    <?php
    if ($_SESSION["name"]) {
    ?>
        <div class="demo"></div> <!-- skeleton preloader body -->
        <header class="l-header">
            <div class="l-header__inner clearfix">
                <div class="c-header-icon js-hamburger">
                    <div class="hamburger-toggle"><span class="bar-top"></span><span class="bar-mid"></span><span class="bar-bot"></span></div>
                </div>
                <div class="c-header-icon has-dropdown"><span class="c-badge c-badge--header-icon animated shake">12</span><i class="fa fa-bell"></i>
                    <div class="c-dropdown c-dropdown--notifications">
                        <div class="c-dropdown__header"></div>
                        <div class="c-dropdown__content"></div>
                    </div>
                </div>
                <div class="c-search">
                    <input class="c-search__input u-input" placeholder="Search..." type="text" />
                </div>
                <div class="header-icons-group">
                    <a href="logout.php">
                        <div class="c-header-icon logout"><i class="fa fa-power-off"></i></div>
                    </a>
                </div>
            </div>
        </header>
        <div class="l-sidebar">
            <a href="dashboard.php">
                <div class="logo">
                    <i class="fa fa-home" style="font-size:30px;color:white;"></i>
                    <!--<div class="logo__txt">O</div>-->
                </div>
            </a>
            <div class="l-sidebar__content">
                <nav class="c-menu js-menu">
                    <ul class="u-list">
                        <li class="c-menu__item is-active" data-toggle="tooltip" title="Write Blog">
                            <a href="doblog.php">
                                <div class="c-menu__item__inner"><i class="fa fa-file-text-o"></i>
                                    <div class="c-menu-item__title"><span>Write Blog</span></div>
                                </div>
                            </a>
                        </li>
                        <li class="c-menu__item has-submenu" data-toggle="tooltip" title="History">
                            <div class="c-menu__item__inner"><i class="fa fa-history"></i>
                                <div class="c-menu-item__title"><span>History</span></div>
                            </div>
                        </li>
                        <li class="c-menu__item has-submenu" data-toggle="tooltip" title="Accounts">
                            <div class="c-menu__item__inner"><i class="fa fa-address-book-o"></i>
                                <div class="c-menu-item__title"><span>Accounts</span></div>
                            </div>
                        </li>
                        <li class="c-menu__item has-submenu" data-toggle="tooltip" title="Settings">
                            <div class="c-menu__item__inner"><i class="fa fa-cogs"></i>
                                <div class="c-menu-item__title"><span>Settings</span></div>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!------------ slidebar end --------------->
        <main class="l-main">
            <div class="content-wrapper content-wrapper--with-bg">
                <!-- write your code here -->
                <h1>
                    <blockquote>&ldquo;Blogging with yourself &rdquo;</blockquote>
                </h1>
                <!-- ----------blog form start ----------->
                <form action="post_data.php" method="post">
                    <input type="hidden" name="femail" value="<?= $_SESSION["id"]; ?>">
                    <!-- <label for="Title">Title :
                <textarea name="ftitle" id="text_title" cols="30" row="2"
                          style="margin-left: 49px;margin-block-end: auto;"></textarea>
            </label> -->
                    <div class="input-group input-group-lg">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon3">Title</span>
                        </div>
                        <input type="text" class="form-control" id="basic-url" name="ftitle" aria-describedby="basic-addon3">
                    </div>
                    <br>
                    <div class="input-group input-group-lg">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon3">Subject</span>
                        </div>
                        <input type="text" class="form-control" id="basic-url" name="fsubject" aria-describedby="basic-addon3">
                    </div>
                    <br>
                    <?php
                    include 'ck_plugin.php'; //textarea also inherit from the 'plugins.php' which id="editor" & name="fcontent" ;fcontent connected with data base
                    ?>
                    <br>
                    <p><input type="submit" class="btn btn-primary btn-lg btn-block" value="Submit"></p>

                </form>
                <!-- -----------blog form connection end----- -->
            </div>
        </main>
        <script src="js/dashboard.js"></script>
        <script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
        <script src='https://use.fontawesome.com/2188c74ac9.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>
</body>
<!-- -----------------------------------------skeleton preloader jqery ------------------>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
    jQuery(window).load(function() {
        jQuery(".demo").fadeOut(500);
    });
</script>
<!-- ----------------------------------------skeleton proloader jqery end---------------->
<?php } else echo 'please login first<br><h2><a href="login.php">LOGIN</a></h2>'; ?>

</html>