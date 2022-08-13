<article id="post-<?php the_ID() ?>">
<header class="entry-header">
<?php
the_title('<h2 class-"entry-title"><a class="entry-link" href="'.esc_url(get_permalink() ).'">','</a></h2>');
?>

</header>

    <!-- Post thumbnail -->
    <?php
    if ( has_post_thumbnail()):
        the_post_thumbnail('medium'); //full, large, medium, custom size
    endif;
    ?>

    <!-- Post Content excerpt-->
    <div class="entry-content">
        <?php the_excerpt(); ?>
    </div>
<article>