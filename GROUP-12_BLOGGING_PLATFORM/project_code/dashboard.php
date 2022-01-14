<?php
session_start();
?>
<?php
require_once 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Welcome to dashboard</title>
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css'>
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css'>
    <link href="css/dashboard.css" rel="stylesheet">
    <link rel="stylesheet" href="css/skeleton_card.css">
    <style class="cp-pen-styles">
        @import url("https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700&subset=latin-ext");
    </style>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>

<body class="sidebar-is-reduced ">
    <?php
    // ==========================database query=========================
    if ($_SESSION["name"]) {
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } else {
            $i = 0;

            if (isset($_POST['key'])) {
                $key = $_POST['key'];
                $page = isset($_GET["page"]) ? $_GET["page"] : 1;
                $limit = isset($_POST["limit-records"]) ? $_POST["limit-records"] : 5;
                $start = ($page - 1) * $limit;
                $query = "SELECT * FROM test WHERE userid='" . $_SESSION['id'] . "' AND ";
                $terms = explode(" ", $key); // convert $key into arrary and each term saved into array with using blank splitter
                foreach ($terms as $each) {
                    $i++;
                    if ($i == 1) {
                        $query .= "title LIKE '%$each%' ";
                    } else {
                        $query .= "OR title LIKE '%$each%' ";
                    }
                    $result = $conn->query($query); //execute the query
                    $totalRecord = $result->num_rows;
                    $query .= "LIMIT {$start},{$limit} ";
                    $result1 = $conn->query($query);
                    $pages = ceil($totalRecord / $limit);
                    $previous = $page - 1;
                    $next = $page + 1;
                }
            } elseif (!isset($_POST['key'])) {
                $page = isset($_GET["page"]) ? $_GET["page"] : 1;
                $limit = isset($_POST["limit-records"]) ? $_POST["limit-records"] : 5;
                $start = ($page - 1) * $limit;
                $sql = "SELECT * FROM test WHERE userid='" . $_SESSION["id"] . "'"; //id='emailid'
                $result = $conn->query($sql);
                $totalRecord = $result->num_rows;
                $sql1 = "SELECT * FROM test WHERE userid='" . $_SESSION["id"] . "' LIMIT {$start},{$limit}";
                $result1 = $conn->query($sql1);
                $pages = ceil($totalRecord / $limit);
                $previous = $page - 1;
                $next = $page + 1;
            } else
                echo 'please type in search box';
        }
    ?>

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
                <form action="dashboard.php" method="post">
                    <div class="c-search">
                        <input class="c-search__input u-input" placeholder="Search..." type="text" name="key" />
                        <input type="submit" value="submit" hidden>
                    </div>
                </form>
                <div style="margin-left: 522px;"><?php echo $_SESSION['id']; ?></div>
                <div class="header-icons-group">
                    <a href="logout.php">
                        <div class="c-header-icon logout"><i class="fa fa-power-off"></i></div>
                    </a>
                </div>
            </div>
        </header>
        <div class="l-sidebar">
            <div class="logo">
                <a href="dashboard.php"><i class="fa fa-home" style="font-size:30px;color:white"></i></a>
                <!--  -- <div class="logo__txt">O</div>-->
            </div>

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
        <main class="l-main">
            <div class="content-wrapper content-wrapper--with-bg">
                <?php
                while ($row = $result1->fetch_assoc()) {
                ?>
                    <div class="demo"></div> <!-- skeleton preloader body -->
                    <div class="list-group">
                        <a href="#" class="list-group-item">
                            <div class="media col-md-3">
                                <figure class="pull-left">
                                    <img class="media-object img-rounded img-responsive" src="http://placehold.it/140x100" alt="placehold.it/140x100">
                                </figure>
                            </div>
                            <div class="col-md-5">
                                <h4 class="list-group-item-heading pb-3"><?php echo $row['title']; ?> </h4>
                                <p class="list-group-item-text"><?php echo $row['subject']; ?> </p>
                            </div>
                            <div class="col-md-3 pull-left">
                                <div class="container col-md-12">
                                    <div class="row">
                                        <div class="col-md-12 pull-left"><i class="fa fa-check-square"></i> General Manager
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 pull-left"><i class="fa fa-check-square"></i> Project Manager
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 pull-left"><i class="fa fa-square"></i> Tech Lead</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-1 text-center">
                                <p> 2 <small> approvals </small></p>
                                <button type="button" class="btn btn-primary btn-sm btn-block" onclick="document.location = 'blogview.php?id=<?php echo $row['id']; ?>'">Open
                                </button>
                                <button type="button" class="btn btn-primary btn-sm btn-block" onclick="document.location = 'new_edit.php?id=<?php echo $row['id']; ?>'">Edit
                                </button>
                            </div>
                        </a>

                    </div>
                <?php
                }
                ?>
                <!----------- pagination button --------------------------------------->
                <?php if ($totalRecord > 0) { ?>
                    <div id="pagination-item">
                        <ul class="pagination">
                            <?php if ($page != 1) { ?>
                                <li class="page-item"><a class="page-link" href="dashboard.php?page=<?php echo $previous; ?>">Previous</a>
                                </li>
                            <?php } ?>
                            <?php for ($x = 1; $x <= $pages; $x++) {
                                if ($page == $x) {
                            ?>
                                    <li class="page-item active"><a class="page-link" href="dashboard.php?page=<?php echo $x; ?>"><?= $x; ?></a>
                                    </li>
                                <?php } else {
                                ?>
                                    <li class="page-item"><a class="page-link" href="dashboard.php?page=<?php echo $x; ?>"><?= $x; ?></a></li>
                                <?php }
                            } //for loop end
                            if ($pages > $page) {
                                ?>
                                <li class="page-item"><a class="page-link" href="dashboard.php?page=<?= $next; ?>">Next</a></li>
                            <?php } ?>
                        </ul>
                    </div>
                    <!-- ------------pagination button end ---------------------------------->
                    <!-- ------------set dynamic limit of record---------------------------- -->
                    <div class="text-center" style="margin-top: 20px; " class="col-md-2">
                        <form method="post">
                            <select name="limit-records" id="limit-records" onchange='this.form.submit()'>
                                <option disabled="disabled" selected="selected">---Limit Records---</option>
                                <?php foreach ([5, 10, 100, 500, 1000, 5000] as $limit) : ?>
                                    <option <?php if (isset($_POST["limit-records"]) && $_POST["limit-records"] == $limit) echo "selected" ?> value="<?= $limit; ?>"><?= $limit; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </form>
                    </div>
                    <!-- -------------set dynamic limit end -->
            </div>
        <?php } ?>

        </main>
        <!-- scripting for pagination button that perform active class assigne to a selected li -->

        <script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
        <script src='https://use.fontawesome.com/2188c74ac9.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>
    <?php
    } else echo "<h1>Please login first  <a href='login.php'>click here</a></h1>";
    $conn->close();
    ?>
</body>
<!-- -----------------------------------------skeleton preloader jqery ------------------>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
    jQuery(window).load(function() {
        jQuery(".demo").fadeOut(1000);

    });
</script>
<!-- ----------------------------------------skeleton proloader jqery end---------------->

</html>
<script src="js/dashboard.js"></script>