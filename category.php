<?php get_header(); ?>

    <section id="subheader" data-speed="8" data-type="background" class="padding-top-bottom subheader">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Blog List</h1>
                    <ul class="breadcrumbs">
                        <li><a href="<?php echo get_option('home'); ?>/">Home</a></li>
                        <b>/</b>
                        <li class="active"><?php _e('Blog List','compact')?></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- content begin -->
    <div id="content">
        <div class="container">
            <div class="row">

                <div id="blog-grid" class="blog-grid">
                    <?php while (have_posts()):the_post(); ?>
                        <!-- post begin -->
                        <article class="item col-md-4 col-sm-6">
                            <div class="post-media">
                                <img alt="" src="<?php the_field('article_section2_acf_image') ?>" class="img-responsive">
                                <div class="post-date">

                                    <span class="date-day"><?php echo get_the_date('d') ?></span>
                                    <span class="date-month"><?php echo get_the_date('M') ?></span>
                                </div>

                            </div>
                            <div class="post-content">
                                <div class="post-title">
                                    <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                                </div>
                                <div class="post-metadata">
                                    <span class="byline">
                                        <i class="fa fa-user"></i>
                                        <a href="<?php the_permalink(); ?>"><?php the_author() ?></a>
                                    </span>
                                    <span class="cat-links">
                                        <i class="fa fa-folder-open"></i>
                                        <a href="<?php the_permalink(); ?>"><?php the_category('/'); ?></a>
                                    </span>

                                </div>
                                <div class="post-entry">
                                    <p><?php the_excerpt(); ?></p>

                                </div>
                            </div>
                        </article>
                    <?php endwhile; ?>
                    <!-- post close -->
                </div>


            </div>
            <!-- switch pag begin -->
            <div class=" text-center">
                <ul class="pagination">
                    <li class="prev">
                        <?php previous_posts_link('<'); ?>
                    </li>


                    <li class="next">
                        <?php next_posts_link('>'); ?>
                    </li>
                </ul>
            </div>
            <!-- switch pag close -->

        </div>
    </div>
    <!-- content close -->

<?php get_footer(); ?>