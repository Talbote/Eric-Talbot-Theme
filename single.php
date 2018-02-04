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

                        <!-- SECTION 3 TITRE CATEG AUTHOR DATE WYZ + WIDGET   open -->
    <div class="post-content">
        <div class="post-title">
            <h1><?php the_title() ?></h1>
        </div>

        <div class="post-metadata">
                                        <span class="posted-on">
                                            <i class="fa fa-clock-o"></i>
                                            <?php echo get_the_date(); ?>
                                        </span>
            <span class="byline">
                                            <i class="fa fa-user"></i>
                                            <a href="<?php the_permalink(); ?>"><?php the_author(); ?></a>
                                        </span>
            <span class="cat-links">
                                            <i class="fa fa-folder-open"></i>
                                            <a href="<?php the_permalink(); ?>"><?php the_category('/') ?></a>
                                        </span>
        </div>
        <div class="hr"></div>

        <div class="post-entry">
            <p><?php the_content() ?></p>
        </div>



        <div class="clearfix"></div>
    </div>
<?php endwhile; ?>
    </article>
    <!-- post close -->
    </div>


    </div>
    <div class="col-md-3">
        <div class="main-sidebar">
            <aside class="widget widget_text">
                <h3 class="widget-title">About</h3>
                <div class="tiny-border"></div>
                <div class="textwidget">
                    <p>

                        <?php dynamic_sidebar('text-bloc-1') ?>

                    </p>
                </div>
            </aside>
            <aside class="widget widget_categories">
                <h3 class="widget-title">Categories</h3>
                <div class="tiny-border"></div>
                <?php
                $tabs = array(
                    'menu' => 'menu sidebar',
                    'container' => 'ul',
                    'menu_class' => 'cat-item',
                );
                wp_nav_menu($tabs); ?>

            </aside>
        </div>
    </div>
    </div>
    </div>
    </div>

    <!-- SECTION 3 TITRE CATEG AUTHOR DATE WYZ  + WIDGET  close -->

<?php get_footer(); ?>