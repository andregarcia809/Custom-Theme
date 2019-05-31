<?php get_header(); ?>
  <main role="main">
        <div class="container pt-5">
            <h1><?php bloginfo('name'); ?></h1>
            <p><?php bloginfo('description'); ?></p>
            <div class="row">
                <div class="col-md-8 blog-main">
                    <?php if(have_posts()) : ?>
                    <!-- while theres Post to be display, fetch posts -->
                    <?php while(have_posts()) : the_post(); ?>
                    <?php get_template_part('content', get_post_format()); ?>
                    <?php endwhile; ?>
                    <?php else : ?>
                    <!-- always wrap text like this in a localization function -->
                    <p><?php __('No Posts Found'); ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </main>
<?php get_footer(); ?>