<?php wp_head(); ?>
<link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
 <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/scripts/jquery.js"></script>
 <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
   <span class="navbar-toggler-icon"></span>
 </button>

 <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <div class="container">
        <?php 
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             =>  2,
                'container'         => 'false',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            =>  new wp_bootstrap_navwalker())
            );
        ?> 
    </div>
 </div>
</nav>