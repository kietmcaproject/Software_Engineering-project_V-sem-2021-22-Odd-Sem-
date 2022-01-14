<?php
include 'connection.php';
require 'get_data.php';
include 'header.php';
include 'table_css.php';
$conn->close();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Blog Template · Bootstrap</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/blog/">
    <!-- Bootstrap core CSS -->
    <!--<link href="..\assets\dist\css\bootstrap.css" rel="stylesheet">-->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }
        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
        .blog-post p {
            font-family: medium-content-serif-font, Georgia, Cambria, "Times New Roman", Times, serif;
            font-weight: 400;
            font-size: 21px;
            text-align: justify;
            letter-spacing: -0.001em;
            line-height: 30px;
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="blog.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
            <div class="col-4 pt-1">
                <a class="text-muted" href="#">Subscribe</a>
            </div>
            <div class="col-4 text-center">
                <a class="blog-header-logo text-dark" href="#">Large</a>
            </div>
            <div class="col-4 d-flex justify-content-end align-items-center">
                <a class="text-muted" href="#" aria-label="Search">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor"
                         stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img"
                         viewBox="0 0 24 24" focusable="false"><title>Search</title>
                        <circle cx="10.5" cy="10.5" r="7.5"/>
                        <path d="M21 21l-5.2-5.2"/>
                    </svg>
                </a>
                <a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a>
            </div>
        </div>
    </header>
    <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
        <div class="col-md-12 px-0">
            <h3 class="display-8 font-italic">WELCOME PAGE</h3>
            <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and
                efficiently about what’s most interesting in this post’s contents.</p>
            <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
        </div>
    </div>
    <!--repeating designing------------>
    <?php
    while ($row = $result->fetch_assoc()) {
        echo '<div class="row mb-1">';
        echo '<div class="col-md-12">';
        echo '<div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">';
        echo '<div class="col p-4 d-flex flex-column position-static">';
        echo '<strong class="d-inline-block mb-2 text-primary">World</strong>';
        echo '<h4 class="mb-0">';
        echo $row["title"];
        echo '</h4>';
        echo '<div class="mb-1 text-muted">Nov 12</div>';
        echo '<p class="card-text mb-auto">';
        echo $row["subject"];
        echo '</p>';
        echo "<a href='blogview.php?id={$row['id']}' class='stretched-link'>Continue reading</a>";
        echo '</div>';
        echo '<div class="col-auto d-none d-lg-block">';
        echo '<svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
    ?>
    <!------repeating designing end-------------->
    <main role="main" class="container">
        <div class="row">
            <div class="col-md-8 blog-main">
                <h3 class="pb-4 mb-4 font-italic border-bottom">
                    From the Firehose
                </h3>
            </div><!-- /.blog-main -->
            <aside class="col-md-4 blog-sidebar">
                <div class="p-4 mb-3 bg-light rounded">
                    <h4 class="font-italic">About</h4>
                    <p class="mb-0">Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur
                        purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
                </div>
                <div class="p-4">
                    <h4 class="font-italic">Elsewhere</h4>
                    <ol class="list-unstyled">
                        <li><a href="#">GitHub</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Facebook</a></li>
                    </ol>
                </div>
            </aside><!-- /.blog-sidebar -->
        </div><!-- /.row -->
    </main><!-- /.container -->
    <br><br>
    <?php
    //include 'footer.php';
    ?>
</body>
</html>
