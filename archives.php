<?php 
get_header();
if (have_posts()):
    ?>
    <h2><?php
         if ( is_category() ){
             single_cat_title();
         }
        elseif ( is_day() ){
            echo 'Daily posts:'.get_the_author();
        }
        else{
            echo 'post:';
        }
    ?></h2>
    <?php
    while (have_posts()):the_post();
    get_template_part('content');
endwhile;
else:
    echo '<p>No Content Found</p>';
endif;
get_footer();
?>

