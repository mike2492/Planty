<?php
/*
Template Name: Template Commander
*/
get_header(); 
?>

<section class="commander-1">
    <h1 class="white"><?= get_the_title(); ?></h1>
    <div class="form-commander-1">
        <h2 class="white"><?= get_post_meta($post->ID, 'titre2-commander', true); ?></h2>
        <div class="fruits">
            <div class="card-fruit">
                <div class="image-fruit">
                    <?php if (class_exists('MultiPostThumbnails') && MultiPostThumbnails::has_post_thumbnail('page', 'fraise')) :
                    MultiPostThumbnails::the_post_thumbnail('page', 'fraise');
                    endif;
                    ?>
                    <span class="white text-center"><?= get_post_meta($post->ID, 'fraise-commander', true); ?></span>
                </div>
                <div class="ajout-produit">
                    <?= apply_shortcodes('[contact-form-7 id="acc01c8" title="Commander 1"]'); ?>
                </div>
            </div>

            <div class="card-fruit">
                <div class="image-fruit">
                    <?php if (class_exists('MultiPostThumbnails') && MultiPostThumbnails::has_post_thumbnail('page', 'pamplemousse')) :
                    MultiPostThumbnails::the_post_thumbnail('page', 'pamplemousse');
                    endif;
                    ?>
                    <span class="white pamplemousse-2 text-center"><?= get_post_meta($post->ID, 'pamplemousse-commander', true); ?></span>
                </div>
                <div class="ajout-produit">
                    <?= apply_shortcodes('[contact-form-7 id="acc01c8" title="Commander 1"]'); ?>
                </div>
            </div>

            <div class="card-fruit">
                <div class="image-fruit">
                    <?php if (class_exists('MultiPostThumbnails') && MultiPostThumbnails::has_post_thumbnail('page', 'framboise')) :
                    MultiPostThumbnails::the_post_thumbnail('page', 'framboise');
                    endif;
                    ?>
                    <span class="white framboise-2 text-center"><?= get_post_meta($post->ID, 'framboise-commander', true); ?></span>
                </div>
                <div class="ajout-produit">
                    <?= apply_shortcodes('[contact-form-7 id="acc01c8" title="Commander 1"]'); ?>
                </div>
            </div>

            <div class="card-fruit">
                <div class="image-fruit">
                    <?php if (class_exists('MultiPostThumbnails') && MultiPostThumbnails::has_post_thumbnail('page', 'citron')) :
                    MultiPostThumbnails::the_post_thumbnail('page', 'citron');
                    endif;
                    ?>
                    <span class="white text-center"><?= get_post_meta($post->ID, 'citron-commander', true); ?></span>
                </div>
                <div class="ajout-produit">
                    <?= apply_shortcodes('[contact-form-7 id="acc01c8" title="Commander 1"]'); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="form-commander-2">
        <?= apply_shortcodes('[contact-form-7 id="97b3e95" title="Commander 2"]'); ?>
    </div>
</section>

<?= get_footer(); ?>