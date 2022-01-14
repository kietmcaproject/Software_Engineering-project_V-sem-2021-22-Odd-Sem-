<?php
include 'connection.php';
include 'blog_conn.php';
session_start();
$conn->close();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>An Anonymous Pen on CodePen</title <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="css/dashboard.css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css'>
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css'>
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
        <div class="logo">
            <div class="logo__txt">O</div>
        </div>
        <div class="l-sidebar__content">
            <nav class="c-menu js-menu">
                <ul class="u-list">
                    <li class="c-menu__item is-active" data-toggle="tooltip" title="Proposals">
                        <div class="c-menu__item__inner"><i class="fa fa-file-text-o"></i>
                            <div class="c-menu-item__title"><span>Proposals</span></div>
                        </div>
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
</body>
<main class="l-main">
    <div class="content-wrapper content-wrapper--with-bg">
        <!-- write your code here -->
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
                <!-- email id field hide in blogs.php--->

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


    </div>
</main>
<script src="js/dashboard.js"></script>
<script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
<script src='https://use.fontawesome.com/2188c74ac9.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>
</body>

</html>