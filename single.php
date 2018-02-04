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

