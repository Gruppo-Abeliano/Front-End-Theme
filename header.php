<?php?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/imgs/logo.ico">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@600&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Inria+Sans:wght@700&display=swap" rel="stylesheet">

        <!-- JQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <!-- Custom CSS -->
        <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>">

        <title>Gruppo Abeliano</title>
    </head>
    <body>
    <div id="main-page-div">

        <div id="loading-screen">
            <img id="loading-gif" class="center-img" src="imgs/loading.gif" alt="Loading">
        </div>

        <div id="main-page-header-div">
            <div id="header-div-site">
                <nav class="navbar navbar-expand-lg">
                    <img src="<?php echo get_template_directory_uri(); ?>/imgs/logo.jpeg" class="img-fluid" id="logo-img" alt="Logo">
                    <div id="brand_div" class="d-none d-md-none d-lg-block d-xl-block">
                        <a class="navbar-brand" href="#">GRUPPO<br>ABELIANO</a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <?php wp_nav_menu( array( 
                                'container' => 'div',
                                'container_id' => 'navbarNav',
                                'container_class' => 'collapse navbar-collapse', 
                                'items_wrap' => '<ul class="navbar-nav ml-auto">%3$s</ul>',
                                'list_item_class' => 'nav-item',
                                'theme_location' => 'primary')); 
                            ?>
                </nav>
            </div>
        </div>