<?php get_header();?>

<div id="projects-page-div">

    

    <div id="projects_page_center_div">
        <div id="projects_page_background_div">
            <div id="projects_page_content_div">

                <div id="projects_content_div" class="d-none d-md-none d-lg-block d-xl-block">

                    <div class="row" id="search-proj-div">

                        <div class="col-1 proj-col-1"></div>

                        <div class="col-10 proj-col-10" id="search-bar-div">
                            <form action="index.html">
                                <input type="text" id="search-bar" placeholder="Search" name="search">
                                <button type="submit" id="search-button">
                                    <span class="material-icons">search</span>
                                </button>
                            </form>
                        </div>

                        <div class="col-1 proj-col-1"></div>

                    </div>

                    <div class="row" id="projects-div">

                        <div class="col-1 proj-col-1"></div>

                        <div class="col-10 proj-col-10">
                            <div class="row">

                                <?php
                                    global $post;
                                    $args = array( 'post_type' => 'Project', 'posts_per_page' => 1000, 'order'=> 'DESC', 'orderby' => 'date' );
                                    $postslist = get_posts( $args );
                                    foreach ( $postslist as $post ) :
                                    setup_postdata( $post ); ?> 

                                    <div class="col-3 proj-col-3">
                                        <a class="project-link" href="<?php the_permalink(); ?>">
                                            <div>
                                                <h5 class="proj-code-number">0000 0000</h5>
                                                <h4 class="project-name"><?php the_title(); ?></h4>

                                                <div class="proj-img-out" class="col-4 proj-col-4">
                                                    <div class="project-image">
                                                        <img class="fit-div-image img-fluid" src="<?php the_post_thumbnail_url(); ?>" >
                                                    </div>
                                                </div>

                                                <p class="project-text"><//?php the_content(); ?></p>
                                            </div>
                                        </a>
                                    </div>
                                    <?php
                                    endforeach; 
                                    wp_reset_postdata();
                                ?>

                            </div>
                        </div>

                        <div class="col-1 proj-col-1"></div>

                    </div>

                </div>
            </div>
        </div>
    </div>

        
<?php get_footer() ?>