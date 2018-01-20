
<?php get_header(); ?>

<div class="container-fluid" style="position:fixed; z-index:-10;">
    <!-- <div class="row">
        <img class="hidden img-bg" src="<?php bloginfo('template_directory'); ?>/images/1.jpeg" height:"100%"/>
    </div> -->
</div>
<div class="container-fluid top-img-container">
    <div class="row top-img" >
        <h2 class="title hidden" style="top:25%; left:25%;"><?php echo get_bloginfo("name"); ?></h2>
        <h3 class="title hidden" style="top:45%; left:45%;"><?php echo get_bloginfo("description"); ?></h2>
    </div>
    <div class="ava-img">
            <img data-effect="bounceIn" class="hidden"  data-src="<?php echo get_option('themename_theme_options')['ava_img'] ; ?>" style="width:100%; position:relative; top:-15px;"/>
        </div>
</div>

<div class="container-fluid bg-light" style="height:20vh"></div>
<div class="container-fluid bg-light">
    <div class="about-preview">
        <div class="row">
            <div class="col-md-5">
                <img src="">
            </div>
            <div class="col-md-7">
                
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-8">
            <a style="background:url('<?php echo get_option( 'themename_theme_options')['big_block_page_img'] ; ?>');display:block; width:100%; height:400px; " href="<?php echo get_permalink(get_option( 'themename_theme_options')['big_block_page']) ; ?>">
            
            </a>
            
        </div>
        <div class="col-md-4">
            <div class="row">
                <div class="col-md-12">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid bg-light">
Cras rutrum diam libero, vitae euismod leo vehicula pharetra. Nam lacinia id nisl eu ultrices. Cras condimentum nunc vel vulputate condimentum. Ut lobortis at nunc et lobortis. Praesent non elit condimentum, placerat nisi at, laoreet elit. Morbi non lobortis tortor. Duis sed aliquam magna, nec mollis lorem. Duis mollis elit eget odio maximus auctor. Aenean purus ligula, ultricies id risus ullamcorper, scelerisque imperdiet ipsum. Suspendisse commodo tincidunt sem, a convallis nulla tincidunt vitae. In varius, est id fermentum posuere, sapien justo volutpat ipsum, vel tempor lectus lectus at nisi. Nunc ac cursus odio. Nunc placerat pharetra sapien, in finibus arcu feugiat in. Pellentesque mattis lacus turpis, ut fermentum tellus ultrices et. Nulla tempor mi a euismod ullamcorper. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
</div>

<div class="container-fluid bg-light">
Cras rutrum diam libero, vitae euismod leo vehicula pharetra. Nam lacinia id nisl eu ultrices. Cras condimentum nunc vel vulputate condimentum. Ut lobortis at nunc et lobortis. Praesent non elit condimentum, placerat nisi at, laoreet elit. Morbi non lobortis tortor. Duis sed aliquam magna, nec mollis lorem. Duis mollis elit eget odio maximus auctor. Aenean purus ligula, ultricies id risus ullamcorper, scelerisque imperdiet ipsum. Suspendisse commodo tincidunt sem, a convallis nulla tincidunt vitae. In varius, est id fermentum posuere, sapien justo volutpat ipsum, vel tempor lectus lectus at nisi. Nunc ac cursus odio. Nunc placerat pharetra sapien, in finibus arcu feugiat in. Pellentesque mattis lacus turpis, ut fermentum tellus ultrices et. Nulla tempor mi a euismod ullamcorper. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
</div>

<div class="container-fluid bg-light">
Cras rutrum diam libero, vitae euismod leo vehicula pharetra. Nam lacinia id nisl eu ultrices. Cras condimentum nunc vel vulputate condimentum. Ut lobortis at nunc et lobortis. Praesent non elit condimentum, placerat nisi at, laoreet elit. Morbi non lobortis tortor. Duis sed aliquam magna, nec mollis lorem. Duis mollis elit eget odio maximus auctor. Aenean purus ligula, ultricies id risus ullamcorper, scelerisque imperdiet ipsum. Suspendisse commodo tincidunt sem, a convallis nulla tincidunt vitae. In varius, est id fermentum posuere, sapien justo volutpat ipsum, vel tempor lectus lectus at nisi. Nunc ac cursus odio. Nunc placerat pharetra sapien, in finibus arcu feugiat in. Pellentesque mattis lacus turpis, ut fermentum tellus ultrices et. Nulla tempor mi a euismod ullamcorper. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
</div>

<div class="container-fluid bg-light" style="margin-top:300px">
Cras rutrum diam libero, vitae euismod leo vehicula pharetra. Nam lacinia id nisl eu ultrices. Cras condimentum nunc vel vulputate condimentum. Ut lobortis at nunc et lobortis. Praesent non elit condimentum, placerat nisi at, laoreet elit. Morbi non lobortis tortor. Duis sed aliquam magna, nec mollis lorem. Duis mollis elit eget odio maximus auctor. Aenean purus ligula, ultricies id risus ullamcorper, scelerisque imperdiet ipsum. Suspendisse commodo tincidunt sem, a convallis nulla tincidunt vitae. In varius, est id fermentum posuere, sapien justo volutpat ipsum, vel tempor lectus lectus at nisi. Nunc ac cursus odio. Nunc placerat pharetra sapien, in finibus arcu feugiat in. Pellentesque mattis lacus turpis, ut fermentum tellus ultrices et. Nulla tempor mi a euismod ullamcorper. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
</div>

<?php get_footer(); ?>

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/scripts/index.js"></script>
<script>
indexView.init({
    template_directory: "<?php bloginfo('template_directory'); ?>",
    topImg: "<?php echo get_option( 'themename_theme_options')['top_img'] ; ?>"
})
</script>