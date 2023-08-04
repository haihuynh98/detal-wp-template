<?php

$related_posts_ids = get_related_posts();

if ($related_posts_ids) :
?>


    <div class="pbmit-pf-single-related-wrapper">
        <h3 class="pbmit-pf-single-related-title">Bài viết liên quan</h3>
        <div class="row">
            <?php foreach ($related_posts_ids as $post_id) : ?>
                <div class="col-md-4">
                    <article class="pbmit-portfolio-style-2">
                        <div class="pbminfotech-post-item">
                            <div class="pbmit-portfolio-icon-wrapper">
                                <a class="pbmit-lightbox" title="<?= get_the_title($post_id) ?>" href="<?= get_permalink($post_id) ?>">
                                    <i class="pbmit-base-icon-search"></i>
                                </a>
                            </div>
                            <div class="pbmit-image-wrapper">
                                <div class="pbmit-featured-wrapper">
                                    <?= get_the_post_thumbnail($post_id, 'full'); ?>
                                </div>
                            </div>
                            <div class="pbmit-content-wrapper">
                                <h3 class="pbmit-portfolio-title">
                                    <a href="<?= get_permalink($post_id) ?>"><?= get_the_title($post_id) ?></a>
                                </h3>
                            </div>
                        </div>
                    </article>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
<?php endif;
