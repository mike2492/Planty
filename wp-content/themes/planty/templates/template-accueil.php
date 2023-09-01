<?php
/*
Template Name: Template Accueil
*/
get_header(); 
?>

<section class="accueil-1">
    <h1 class="text-center"><?= wordwrap(get_the_title(), 20, '<br>', true); ?></h1>
    <div class="boisson">
        <div class="image-1">
            <?php if (class_exists('MultiPostThumbnails') && MultiPostThumbnails::has_post_thumbnail('page', 'branche-gauche')) :
            MultiPostThumbnails::the_post_thumbnail('page', 'branche-gauche');
            endif;
            ?>
        </div>
        <div class="image-2">
            <?php if (class_exists('MultiPostThumbnails') && MultiPostThumbnails::has_post_thumbnail('page', 'boisson-planty')) :
            MultiPostThumbnails::the_post_thumbnail('page', 'boisson-planty');
            endif;
            ?>
        </div>
        <div class="image-3">
            <?php if (class_exists('MultiPostThumbnails') && MultiPostThumbnails::has_post_thumbnail('page', 'branche-droite')) :
            MultiPostThumbnails::the_post_thumbnail('page', 'branche-droite');
            endif;
            ?>
        </div>
    </div>
</section>

<section class="accueil-2">
    <h2><?= get_post_meta($post->ID, 'titre2-accueil', true); ?></h2>
    <div class="accueil-contenu">
        <p class="text-center"><?= get_post_meta($post->ID, 'texte1-accueil', true); ?></p>
    </div>
</section>

<section class="accueil-3">
    <h3><?= get_post_meta($post->ID, 'titre3-accueil', true); ?></h3>
    <p><?= get_post_meta($post->ID, 'texte2-accueil', true); ?></p>
    <div class="accueil-galerie">
        <div class="image-galerie">
            <?php if (class_exists('MultiPostThumbnails') && MultiPostThumbnails::has_post_thumbnail('page', 'fraise')) :
            MultiPostThumbnails::the_post_thumbnail('page', 'fraise');
            endif;
            ?>
            <span class="white text-center"><?= get_post_meta($post->ID, 'fraise-accueil', true); ?></span>
        </div>
        <div class="image-galerie">
            <?php if (class_exists('MultiPostThumbnails') && MultiPostThumbnails::has_post_thumbnail('page', 'pamplemousse')) :
            MultiPostThumbnails::the_post_thumbnail('page', 'pamplemousse');
            endif;
            ?>
            <span class="white text-center pamplemousse"><?= get_post_meta($post->ID, 'pamplemousse-accueil', true); ?></span>
        </div>
        <div class="image-galerie">
            <?php if (class_exists('MultiPostThumbnails') && MultiPostThumbnails::has_post_thumbnail('page', 'framboise')) :
            MultiPostThumbnails::the_post_thumbnail('page', 'framboise');
            endif;
            ?>
            <span class="white text-center framboise"><?= get_post_meta($post->ID, 'framboise-accueil', true); ?></span>
        </div>
        <div class="image-galerie">
            <?php if (class_exists('MultiPostThumbnails') && MultiPostThumbnails::has_post_thumbnail('page', 'citron')) :
            MultiPostThumbnails::the_post_thumbnail('page', 'citron');
            endif;
            ?>
            <span class="white text-center"><?= get_post_meta($post->ID, 'citron-accueil', true); ?></span>
        </div>
    </div>
    <a href="commander" class="white btn-order">Commander</a>
</section>

<section class="accueil-4">
    <h4><?= get_post_meta($post->ID, 'titre4-accueil', true); ?></h4>
    <div class="liste-avis">
        <div class="card-avis">
            <div class="avis-image">
                <?php if (class_exists('MultiPostThumbnails') && MultiPostThumbnails::has_post_thumbnail('page', 'fatiha')) :
                MultiPostThumbnails::the_post_thumbnail('page', 'fatiha');
                endif;
                ?>
            </div>
            <div class="avis-texte">
                <span class="prenom"><?= get_post_meta($post->ID, 'avis-prenom1', true); ?></span>
                <p><?= get_post_meta($post->ID, 'avis-texte1', true); ?></p>
            </div>
        </div>
        <div class="card-avis">
            <div class="avis-image">
                <?php if (class_exists('MultiPostThumbnails') && MultiPostThumbnails::has_post_thumbnail('page', 'vero')) :
                MultiPostThumbnails::the_post_thumbnail('page', 'vero');
                endif;
                ?>
            </div>
            <div class="avis-texte">
                <span class="prenom"><?= get_post_meta($post->ID, 'avis-prenom2', true); ?></span>
                <p><?= get_post_meta($post->ID, 'avis-texte2', true); ?></p>
            </div>
        </div>
        <div class="card-avis">
            <div class="avis-image">
                <?php if (class_exists('MultiPostThumbnails') && MultiPostThumbnails::has_post_thumbnail('page', 'marc')) :
                MultiPostThumbnails::the_post_thumbnail('page', 'marc');
                endif;
                ?>
            </div>
            <div class="avis-texte">
                <span class="prenom"><?= get_post_meta($post->ID, 'avis-prenom3', true); ?></span>
                <p><?= get_post_meta($post->ID, 'avis-texte3', true); ?></p>
            </div>
        </div>
    </div>
</section>

<div class="bg-footer"></div>

<?= get_footer(); ?>