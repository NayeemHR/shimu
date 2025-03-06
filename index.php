<?php
    /**
     * Main template file
     *
     * @package shimu
     */
    get_header();
?>


<div id="primary">
    <main class="id" class="site-main mt-5" role="main">
    <?php if (have_posts()): ?>
        <div class="container">
            <?php
                if (is_home() && ! is_front_page()) {
                ?>
                    <header class="mb-5">
                        <h1 class="page-title screen-reader-text">
                        <?php single_post_title(); ?>
                        </h1>
                    </header>
                    <?php
                        }
                    ?>
<div class="row">
<?php
    $index         = 0;
    $no_of_columns = 3;
    while (have_posts()): the_post();
        if (0 === $index % $no_of_columns) {
            echo '<div class="col-lg-4 col-md-6 col-sm-12">';
        }
        the_title('<h2><a href="' . esc_url(get_permalink()) . '">', '</a></h2>');
        the_excerpt();
        echo $index;
        $index++;

        if (0 !== $index && 0 === $index % $no_of_columns) {
            echo '</div>';
        }

    endwhile;
?>
</div>
        </div>
    <?php endif; ?>
    </main>
</div>

<?php
get_footer();