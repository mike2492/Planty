<?php
/*
Template Name: Template Nous Rencontrer
*/
get_header(); 
?>

<section class="rencontrer-1">
    <div class="image-titre-rencontrer">
        <div class="fleur-1">
            <?php if (class_exists('MultiPostThumbnails') && MultiPostThumbnails::has_post_thumbnail('page', 'fleur-1')) :
            MultiPostThumbnails::the_post_thumbnail('page', 'fleur-1');
            endif;
            ?>
        </div>
        <div class="titre-contenu">
            <h1 class="text-center"><?= get_the_title(); ?></h1>
            <p class="text-center"><?= get_post_meta($post->ID, 'texte1-rencontrer', true); ?></p>
        </div>
    </div>
</section>

<section class="rencontrer-2">
    <h2><?= get_post_meta($post->ID, 'titre2-rencontrer', true); ?></h2>
    <div class="liste-team">
        <div class="card-team">
            <div class="team-image">
                <?php if (class_exists('MultiPostThumbnails') && MultiPostThumbnails::has_post_thumbnail('page', 'megane')) :
                MultiPostThumbnails::the_post_thumbnail('page', 'megane');
                endif;
                ?>
            </div>
            <div class="team-texte">
                <span><?= get_post_meta($post->ID, 'team-prenom1', true); ?></span>
                <p><?= get_post_meta($post->ID, 'team-metier1', true); ?></p>
            </div>
        </div>

        <div class="card-team">
            <div class="team-image">
                <?php if (class_exists('MultiPostThumbnails') && MultiPostThumbnails::has_post_thumbnail('page', 'brooke')) :
                MultiPostThumbnails::the_post_thumbnail('page', 'brooke');
                endif;
                ?>
            </div>
            <div class="team-texte">
                <span><?= get_post_meta($post->ID, 'team-prenom2', true); ?></span>
                <p><?= get_post_meta($post->ID, 'team-metier2', true); ?></p>
            </div>
        </div>

        <div class="card-team">
            <div class="team-image">
                <?php if (class_exists('MultiPostThumbnails') && MultiPostThumbnails::has_post_thumbnail('page', 'sylvie')) :
                MultiPostThumbnails::the_post_thumbnail('page', 'sylvie');
                endif;
                ?>
            </div>
            <div class="team-texte">
                <span><?= get_post_meta($post->ID, 'team-prenom3', true); ?></span>
                <p><?= get_post_meta($post->ID, 'team-metier3', true); ?></p>
            </div>
        </div>
    </div>

    <div class="branche-gauche">
        <?php if (class_exists('MultiPostThumbnails') && MultiPostThumbnails::has_post_thumbnail('page', 'branche-gauche')) :
        MultiPostThumbnails::the_post_thumbnail('page', 'branche-gauche');
        endif;
        ?>
    </div>
</section>

<section class="rencontrer-3">
    <h3><?= get_post_meta($post->ID, 'titre3-rencontrer', true); ?></h3>
    <div class="form-1">
        <?= apply_shortcodes('[contact-form-7 id="51b261b" title="Nous contacter"]'); ?>
        <div class="fleur-2">
            <?php if (class_exists('MultiPostThumbnails') && MultiPostThumbnails::has_post_thumbnail('page', 'fleur-2')) :
            MultiPostThumbnails::the_post_thumbnail('page', 'fleur-2');
            endif;
            ?>
        </div>
    </div>
    <div class="bg-footer"></div>
</section>

<?= get_footer(); ?>