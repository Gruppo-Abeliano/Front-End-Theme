<?php?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <link rel="icon" href="imgs/logo.ico">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Inria+Sans:wght@700&display=swap" rel="stylesheet">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">

        <title>Gruppo Abeliano</title>
    </head>
    <body>
    <div id="main_page_div">
        <div id="main_page_header_div">
            <div id="header_div_site">
                <nav class="navbar navbar-expand-lg">
                    <img src="<?php echo get_template_directory_uri(); ?>/imgs/logo.jpeg" class="img-fluid" id="logo_img" alt="Logo">
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
                        'link_class' => 'nav-link', 
                        'theme_location' =>   'primary')); 
                    ?>

                    <!-- <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                    <a class="nav-link active" href="#">PROGETTI</a>
                            </li>
                            <li class="nav-item">
                                    <a class="nav-link" href="#">NEWS</a>
                            </li>
                            <li class="nav-item">
                                    <a class="nav-link" href="#">CHI SIAMO</a>
                            </li>
                            <li class="nav-item">
                                    <a class="nav-link disabled" href="#">CONTATTI</a>
                            </li>
                        </ul>
                    </div> -->
                </nav>
            </div>
        </div>