<?php get_header(); ?>
<?php while (have_posts()):the_post() ?>

    <!-- SECTION 1 ARTICLE  begin -->
    <section id="subheader" data-speed="8" data-type="background" class="padding-top-bottom subheader">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1><?php the_title() ?></h1>
                    <ul class="breadcrumbs">
                        <li><a href="<?php echo get_option('home'); ?>/">Home</a></li>
                        <b>/</b>
                        <li class="active"><?php the_title() ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- SECTION 1 ARTICLE  close -->

<!-- SECTION 2 ACF IMAGE  begin -->
<div id="content">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="blog-single">
                    <!-- post begin -->
                    <article>
                        <div class="post-media">
                            <img src="<?php the_field('article_section2_acf_image') ?>" class="img-responsive">
                        </div>
                        <!-- SECTION 2 ACF IMAGE  close -->