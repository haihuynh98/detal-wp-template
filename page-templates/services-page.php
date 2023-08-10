<?php

get_header();

?>
<!-- Title Bar -->
<div class="pbmit-title-bar-wrapper">
    <div class="container">
        <div class="pbmit-title-bar-content">
            <div class="pbmit-title-bar-content-inner">
                <div class="pbmit-tbar">
                    <div class="pbmit-tbar-inner container">
                        <h1 class="pbmit-tbar-title"> <?= single_cat_title() ?></h1>
                    </div>
                </div>
                <div class="pbmit-breadcrumb">
                    <div class="pbmit-breadcrumb-inner">
                        <span><a title="Detal" href="/" class="home"><span><?= get_bloginfo('name') ?></span></a></span>
                        <span class="sep">-</span>
                        <span class="post-root post post-post current-item"> <?= single_cat_title() ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Title Bar End-->

<!-- Page Content -->
<div class="page-content pbmit-bg-color-light">

    <!-- service -->
    <section class="section-lg service-section">
        <div class="container">
            <div class="pbmit-heading-subheading text-center">
                <h4 class="pbmit-subtitle"><?= get_field('small_title') ?></h4>
                <h2 class="pbmit-title"><?= get_field('big_title') ?></h2>
            </div>
            <div class="row">
                <?php
                /* Start the Loop */
                while (have_posts()) :
                    the_post();

                    /*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
                    get_template_part('template-parts/content', get_post_type());

                endwhile;
                ?>
            </div>
        </div>
    </section>
    <!-- service End -->

</div>
<!-- Page Content End -->

<?php

get_footer();
