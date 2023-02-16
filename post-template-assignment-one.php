<?php
/**
 * Template Name: Post-Template-Assignment One ( no plugin)
 * Template Post Type: post
 */
get_header();
?>
<!--now we add our content-->
<!--if we are just using the default content editor then we only need to create a loop to display the pages content. -->
<main class="post-temp">
    <?php
     if(have_posts()):
       while(have_posts()) : the_post();
        the_content();
       endwhile;
    else:
        echo "<p>Sorry, no posts are found</p>";
    endif;
    ?>
</main>
<?php
get_footer();
?>