<?php 
global $wpdb;
?>
<header class="ulpgcds-header">
    <?php
        if(is_user_logged_in()){
            wp_footer(); 
        }
    ?>
    <div class="ulpgcds-header__top">
        <div class="ulpgcds-header__top__logo">
            <a href="https://www.ulpgc.es" target="_blank" attribute="ulpgc"><span>ULPGC</span></a>
            <a href="<?php echo home_url(); ?>" attribute="ctim"><span></span></a>
        </div>
        
        <div class="ulpgcds-header__top__links top-menu">
            <ul>
                <li class="hidden-mobile"><a href="https://correo.ulpgc.es/"
                        class="ulpgcds-btn ulpgcds-btn--text"><span class="ulpgcds-btn__icon ulpgcds-icon-envelope"
                            aria-hidden="true"></span>Quines somos</a></li>
                <li class="hidden-mobile"><a href="https://biblioteca.ulpgc.es"
                        class="ulpgcds-btn ulpgcds-btn--text"><span class="ulpgcds-btn__icon ulpgcds-icon-book"
                            aria-hidden="true"></span>Link 2</a></li>
                <li><a href="/" class="ulpgcds-btn ulpgcds-btn--small ulpgcds-btn--primary"><span
                            class="ulpgcds-btn__icon ulpgcds-icon-user" aria-hidden="true"></span>MiCTIM</a></li>
                <li><a class="nav-toggle hidden-desktop ulpgcds-btn ulpgcds-btn--small ulpgcds-btn--secondary"
                        href="#"><span class="ulpgcds-btn__icon ulpgcds-icon-menu"
                            aria-hidden="true"></span>Menú</a></li>
            </ul>
        </div>
    </div>
    <nav class="ulpgcds-header__bottom">
        <?php wp_nav_menu( 
            array( 
            'theme_location' => 'main-menu',
            'container_class' => '',
            'items_wrap' => '<ul class="ulpgcds-header__bottom__menu">%3$s</ul>',
            ) 
        ); ?>
    </nav>
</header>
<main class="main-content-web">