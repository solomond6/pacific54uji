<?php
/**
 * Template Name:  Page with Form Log
 *
 */
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>
<div class="py-6 bg-light">
    <div class="container text-center">
        <h1 class="display-4"><?php the_title(); ?></h1>
        
  </div>
</div>

<div id="container-content-page" class="container">
    <div class="row">
        <div class="py-5">
            <?php 
                $args = array(
                            'post_type'=> 'form-log',
                            'order'    => 'ASC'
                        );              

                $the_query = new WP_Query( $args );
                
                if ( $the_query->have_posts() ) : 
                    while ( $the_query->have_posts() ) : $the_query->the_post();
                      get_template_part('loops/form-log');
                    endwhile;
                else :
                    _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
                endif;
            ?>
        </div>
    </div>
</div>

<?php get_footer();
