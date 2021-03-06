<?php get_header(); ?>


    <div id="content" class="no-padding">
        
        <!-- SECTION 1 TITRE WYZ IMG APROPOS + VIDEO open -->
        <section id="" style="background: url(<?php the_post_thumbnail_url(); ?>)">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <?php while (have_posts()): the_post(); ?>
                            <div class="about-text-intro text-center">
                                <h2><?php the_title(); ?></h2>
                                <p><?php the_content(); ?></p>
                            </div>
                        <?php endwhile; ?>


                        <div class="box-intro-video">
                            <div id="overlay-video" class="overlay-video-intro">
                                <?php $iframe = get_field('video');

                                preg_match('/src="(.+?)\?/',$iframe, $matches);
                                $src = $matches[1];
                                ?>
                                <img alt="" src="<?php the_field('apropos_section1_iconplay') ?>" class="img-responsive"/>
                                <a href="<?php echo $src ?>?autoplay=1" class="btn-intro-video"><i class="fa fa-play"></i></a>
                            </div>
                            <div id="thevideo" style="display:none">
                                <iframe id="someFrame" width="750" height="422" src="" frameborder="0" allowfullscreen></iframe>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- SECTION 1 TITRE WYZ IMG APROPOS + VIDEO close -->

        <!-- SECTION 2 REPEATER TITRE / TEXTE APROPOS open -->
        <section id="section-about" class="margin-top-80">
            <div class="container">
                <div class="row">
                    <?php while (have_rows('apropos_section2_acf_repeater')):the_row() ?>
                        <div class="col-md-4">

                            <h5><?php the_sub_field('apropos_section2_acf_repeater_title') ?></h5>
                            <p><?php the_sub_field('apropos_section2_acf_repeater_text') ?></p>
                        </div>
                    <?php endwhile; ?>


                </div>
            </div>
        </section>
        <!-- SECTION 2 REPEATER TITRE / TEXTE APROPOS close -->

        <!-- SECTION 3  ACF TITRE  TEXTE / REPEATER  APROPOS open  -->
        <section id="section-team" class="bg-grey">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center">
                            <h2><?php the_field('apropos_section3_text') ?></h2>
                            <div class="tiny-border"></div>
                        </div>
                    </div>
                    <?php while (have_rows('apropos_section3_repeater')):the_row(); ?>
                        <div class="col-md-3">
                            <div class="team-box">
                                <div class="team-inner">
                                    <img src="<?php the_sub_field('apropos_section3_repeater_image') ?>" alt="" class="img-circle">
                                    <div class="mask"></div>
                                </div>
                                <h6><?php the_sub_field('apropos_section3_repeater_text_function') ?></h6>
                                <div class="subtext"><?php the_sub_field('apropos_repeater_section3_text') ?></div>
                            </div>
                        </div>
                    <?php endwhile; ?>

                </div>
            </div>
        </section>
    </div>
<!-- SECTION 3  ACF TITRE  TEXTE / REPEATER  APROPOS close  -->

<?php get_footer(); ?>



