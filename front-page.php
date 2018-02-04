<?php get_header(); ?>


    <!-- SECTION SLIDER  FRONTPAGE open -->
    <div id="slider">
        <?php $images = get_field('slides'); ?>
        <!-- revolution slider begin -->
        <div class="fullwidthbanner-container">

            <div id="revolution-slider">
                <ul>
                    <?php foreach ($images as $image) : ?>
                        <li data-transition="fade" data-slotamount="7" data-masterspeed="2500" data-delay="5000">
                            <!--  BACKGROUND IMAGE -->
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">

                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>

        </div>
    </div>
    <div class="clearfix"></div>
    <!--  SECTION SLIDER  FRONTPAGE close -->

<!-- SECTION 1 IMG / TEXT  / WYZ  FRONTPAGE open -->
<div id="content" class="no-padding">
    <section id="section-about">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <img src="<?php the_field('accueil_section1_image') ?>" alt="about image" class="img-responsive">
                </div>
                <div class="col-md-8 col-sm-8">
                    <div class="about-box">
                        <h2 class="box-title"><?php the_field('accueil_section1_text') ?></h2>
                        <div class="tiny-border"></div>
                        <p><?php the_field('accueil_section1_wys') ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- SECTION 1 IMG / TEXT  / WYZ  FRONTPAGE close -->

    <!-- SECTION 2  L4ST ARTICLE  FRONTPAGE begin -->
    <section id="section-project" class="no-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-projects clearfix">
                        <div class="latest-projects-intro">
                            <h2 class="box-title"><?php _e('Derniers articles', 'traductor') ?></h2>
                            <div class="tiny-border-light"></div>
                            <p><?php _e('Pellentesque gravida diam orci, vitae venenatis est eleifend sed. Proin non pretium
                                    turpis', 'traductor') ?></p>
                        </div>

                        <div class="latest-projects-wrapper">
                            <div id="latest-projects-items" class="latest-projects-items">


                                <?php
                                $recentPosts = new WP_Query();
                                $recentPosts->query('showposts=6');
                                ?>

                                <?php while

                                ($recentPosts->have_posts()) : $recentPosts->the_post();
                                    ?>

                                    <div class="item">
                                        <img src="<?php the_field('article_section2_acf_image') ?>" alt=""
                                             class="img-responsive">
                                        <div class="project-details">
                                            <p class="folio-title"><a
                                                    href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                            </p>

                                            <p class="folio-cate"><i class="fa fa-tag"></i><a
                                                    href="<?php the_permalink(); ?>"><?php the_category('/'); ?></a>
                                            </p>

                                            <div class="folio-buttons">
                                                <a href="<?php the_field('article_section2_acf_image') ?>"
                                                   title="Plan For Your Bussiness"
                                                   class="folio"><i class="fa fa-search"></i></a>
                                                <a href="<?php the_permalink() ?>"><i class="fa fa-link"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                                <?php wp_reset_postdata(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- SECTION 2  L4ST ARTICLE  FRONTPAGE close -->