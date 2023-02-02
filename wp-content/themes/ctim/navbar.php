<header class="ulpgcds-header">
  <div class="ulpgcds-header__top">
    <div class="ulpgcds-header__top__logo">
        <img src="<?php echo get_template_directory_uri() . '/assets/images/logo_ctim.png' ?>" alt="">
        <a href="/"><span>Nombre unidad</span></a>
    </div>
    <div class="ulpgcds-header__top__links">              
      <ul>
          <li class="hidden-mobile"><a href="https://correo.ulpgc.es/" class="ulpgcds-btn ulpgcds-btn--text"><span class="ulpgcds-btn__icon ulpgcds-icon-envelope" aria-hidden="true"></span>Link 1</a></li>
          <li class="hidden-mobile"><a href="https://biblioteca.ulpgc.es" class="ulpgcds-btn ulpgcds-btn--text"><span class="ulpgcds-btn__icon ulpgcds-icon-book" aria-hidden="true"></span>Link 2</a></li>                    
          <li><a href="/" class="ulpgcds-btn ulpgcds-btn--small ulpgcds-btn--primary"><span class="ulpgcds-btn__icon ulpgcds-icon-user" aria-hidden="true"></span>Login</a></li>
          <li><a class="nav-toggle hidden-desktop ulpgcds-btn ulpgcds-btn--small ulpgcds-btn--secondary" href="#"><span class="ulpgcds-btn__icon ulpgcds-icon-menu" aria-hidden="true"></span>Menú</a></li>
      </ul>	                                                
    </div>
  </div>
  <nav class="" id="main-menu">
      <?php wp_nav_menu( 
        array( 
          'theme_location' => 'header-menu',
          'container_class' => 'ulpgcds-header__bottom',
          'items_wrap' => '<ul class="ulpgcds-header__bottom__menu">%3$s</ul>',
        ) 
      ); ?>
  </nav>
</header>