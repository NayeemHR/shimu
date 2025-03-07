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
                <h1 class="page-title">
                <?php echo single_post_title(); ?>
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
                    get_template_part('template-parts/content');

                    $index++;

                    if (0 !== $index && 0 === $index % $no_of_columns) {
                        echo '</div>';
                    }

                endwhile;
            ?>
            </div> <!-- end row -->
        </div> <!-- end conatiner -->
    <?php
        else:
            get_template_part('template-parts/content-none');

        endif;
    ?>
    </main>
</div>  <!-- end primary -->

<?php

get_footer();