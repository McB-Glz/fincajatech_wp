<!-- Header
============================================= -->
<header id="header" class="full-header">

    <div id="header-wrap">

        <div class="container clearfix">

            <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

            <!-- Logo
            ============================================= -->
            <div id="logo">
                <a href="<?= esc_url(home_url('/')); ?>" class="standard-logo brand" data-dark-logo="<?php echo get_template_directory_uri(); ?>/assets/images/logos/logo-dark.png"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/logo.png" alt="<?php bloginfo('name'); ?>"></a>
                <a href="<?= esc_url(home_url('/')); ?>" class="retina-logo brand" data-dark-logo="<?php echo get_template_directory_uri(); ?>/assets/images/logos/logo-dark@2x.png"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/logo@2x.png" alt="<?php bloginfo('name'); ?>"></a>
            </div><!-- #logo end -->

            <!-- Primary Navigation
            ============================================= -->
            <nav id="primary-menu" class="nav-primary">

                <ul class="one-page-menu" data-easing="easeInOutExpo" data-speed="1500">
                    <li><a href="#" data-href="#section-about"><div>¿Quiénes Somos?</div></a></li>
                    <li><a href="#" data-href="#section-servicios"><div>Servicios</div></a>
                        <!-- <ul>    
                            <li><a href="#" data-href="#servicios-one"><div>Asesoría Financiera</div></a></li>
                            <li><a href="#" data-href="#servicios-two"><div style="line-height: 1.5; padding-top:5px;">Evaluación de Proyectos de Inversión</div></a></li>
                        </ul> -->
                    </li>
                    <li><a href="#" data-href="#section-test"><div>Testimonios</div></a></li>
                    <li><a href="#" data-href="#section-alianzas"><div>Alianzas</div></a></li>
                    <li><a href="#" data-href="#section-contact"><div>Contacto</div></a></li>
                </ul>

               <!--  <?php
                // if (has_nav_menu('primary_navigation')) :
                //   wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav one-page-menu']);
                // endif;
                ?> -->

            </nav><!-- #primary-menu end -->

        </div>

    </div>

</header><!-- #header end -->
