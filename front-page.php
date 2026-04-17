<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
    
    <header id="masthead" class="site-header">
        <?php
        get_template_part('template-parts/header-burger');
        ?>
    </header>

    <main id="primary" class="site-main">
    
        <section class="banner">
            <video class="video-banner" autoplay muted loop playsinline disablepictureinpicture preload="auto">
                <source src="http://koukaki.local/wp-content/uploads/2026/03/StudioKoukaki-videoheadersansson1.mp4" type="video/mp4">
            </video>
            <div class="logo-foce">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?> " alt="logo Fleurs d'oranger & chats errants"/>
            </div>
        </section>

        <section id="story" class="story">
            <h2 id="#story"><span class="uptitle">L'histoire</span></h2><!--***id="story"***-->
            <article id="" class="story__article">
                <p><?php echo get_theme_mod('story'); ?></p>
            </article>
            
                <?php get_template_part('template-parts/swiper-characters'); ?><!--Affichage du caroussel de personnages-->
            
            <article id="place">
                <div>
                    <h3 class="multi"><span class="uptitle">Le</span><span class="uptitle">Lieu</span></h3>
                    <p><?php echo get_theme_mod('place'); ?></p>
                    <img class="clouds" src="<?php echo get_theme_file_uri() . '/assets/clouds.png'; ?>" alt="big cloud">
                </div>

            </article>
        </section>


        <section id="studio">
            <h2 class="multi"><span class="uptitle">Studio</span><span class="uptitle"> Koukaki</span></h2>
            <div>
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div>
            </section>
            
            <?php get_template_part('template-parts/oscars-2022'); ?><!--Section affichant la nomination aux oscars 2022-->

    </main><!-- #main -->

<?php
get_footer();
