<?php get_header(); ?>
    <main role="main" class="container">
        <h1><?php bloginfo('name'); ?></h1>
        <p><?php bloginfo('description'); ?></p>
        <div class="row">
            <div class="col-md-8 blog-main">
                <?php if(have_posts()) : ?>
                    <!-- while theres Post to be display, fetch posts -->
                    <?php while(have_posts()) : the_post(); ?>
                        <div class="blog-post">
                            <!-- Makes title dynamic -->
                            <h2 class="blog-post-title">
                                <?php the_title(); ?>
                            </h2>
                            <!-- show thumbnail in post -->
                            <!-- Get the Dynamic content -->
                            <!-- show all the content -->
                            <?php the_content(); ?>
                    <?php endwhile; ?>
                <?php else : ?>
                    <!-- always wrap text like this in a localization function -->
                    <p><?php __('No Posts Found'); ?></p>
                         </div>
                <?php endif; ?>
            </div>
        </div>
    </main>
<?php get_footer(); ?>