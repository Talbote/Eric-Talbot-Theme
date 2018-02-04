<?php
get_header();
?>


<div class="gray-line-2"></div>
<!-- Modal Search begin -->
<div id="myModal" class="modal fade" role="dialog">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <div class="modal-dialog myModal-search">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body">
                <form role="search" method="get" class="search-form" action="">
                    <input type="search" class="search-field" placeholder="Search here..." value="" title="" />
                    <button type="submit" class="search-submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal Search close -->

<!-- content begin -->
<div id="content" class="no-padding">

    <!-- section 1 TITRE / WYZ CONTACT begin -->
    <section id="section-contact">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="intro-text text-center">
<?php
while( have_posts()):the_post(); ?>

                        <h2><?php the_title() ;?></h2>
                        <p><?php the_content(); ?></p>

                    </div>

                    <?php
                    endwhile; ?>
                    <!-- section 1 TITRE / WYZ  CONTACT close -->


