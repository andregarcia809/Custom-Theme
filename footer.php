        <!-- Only show side bar when not in the front page -->
        <?php if(!is_front_page()) : ?>
        <aside class="col-md-4 blog-sidebar">
            <?php if (is_active_sidebar()) :?>
                <?php dynamic_sidebar(); ?>
             <?php endif; ?>
        </aside>
        <?php endif;?>

        <footer class="blog-footer">
            <p>&copy; <?php echo Date('Y'); ?> - <?php bloginfo('name'); ?></p>
            <p>
                <a href="#">Back to top</a>
            </p>
        </footer>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
        </script>
        <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>
        <!-- Displays the header admin bar  -->
        <?php wp_footer(); ?>
    </body>
</html>