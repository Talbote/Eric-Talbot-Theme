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