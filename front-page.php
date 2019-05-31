<?php get_header(); ?>
<main role="main">
    <section class="showcase position-relative">
        <div class="showcase-overlay"></div>
        <div class="container">
            <h1><?php echo get_theme_mod('showcase_heading', 'Custom Bootstrap Wordpress Theme'); ?></h1>
            <p>
                <?php echo get_theme_mod('showcase_text', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, porro.'); ?>
            </p>
            <a href="<?php echo get_theme_mod('button_url', 'http://devbox.com/wordpress'); ?>" class="btn btn-primary btn-large rounded" type="button"> <?php echo get_theme_mod('button_text', 'Get Started'); ?></a>
        </div>
    </section>

    <section class="boxes">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-md-0 mb-4">
                    <?php if (is_active_sidebar('box1')) : ?>
                         <?php dynamic_sidebar('box1')?>
                    <?php endif; ?>
                </div>
                <div class="col-md-4 mb-md-0 mb-4">
                    <?php if (is_active_sidebar('box2')) : ?>
                        <?php dynamic_sidebar('box2')?>
                    <?php endif; ?>
                </div>
                <div class="col-md-4 mb-md-0 mb-4">
                    <?php if (is_active_sidebar('box3')) : ?>
                        <?php dynamic_sidebar('box3')?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>