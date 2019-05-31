<div class="blog-post">
    <!-- Makes title dynamic -->
    <h2 class="blog-post-title">
        <?php if(is_single()) : ?>
            <?php the_title(); ?>
        <?php else : ?>
            <a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a>
        <?php endif; ?>
    </h2>
    <p class="blog-post-meta">
        <!-- Date and time -->
        <?php the_date('F j, Y g:i a');?>
        <!-- link to get the all the posts form an author -->
        <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
            <?php the_author(); ?>
        </a>
    </p>
    <!-- show thumbnail in post -->
    <?php if(has_post_thumbnail()) :?>
        <div class="post-thumb mb-3"> <?php  the_post_thumbnail(); ?></div>
    <?php endif; ?>

    <?php if(is_single()) : ?>
        <!-- Get the Dynamic content -->
        <!-- show all the content -->
        <?php the_content(); ?>
    <?php else :?>
        <?php the_excerpt(); ?>
    <?php endif;?>

    <?php if(is_single()) : ?>
         <!-- Get Commnets -->
        <?php comments_template();  ?>
    <?php endif;  ?>

</div>