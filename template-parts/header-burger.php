
<section class="banner-menu locked">
    <?php get_template_part('template-parts/banner-menu'); ?>
</section>

<nav id="site-navigation" class="main-navigation">
    <ul>
        <li class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></li>
    </ul>

    <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
        <span class="line"></span>
        <span class="line"></span>
        <span class="line"></span>
    </button>
</nav>

