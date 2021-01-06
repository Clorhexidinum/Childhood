<?php
/*
  Template Name: Наша история
*/
?>

<?php
get_header();
?>

<div class="aboutus">
    <div class="container">
        <h1 class="title"><?php the_field('history_title'); ?></h1>
        <div class="row">
            <div class="col-lg-6">
                <div class="subtitle">
                    <?php the_field('history_subtitle1'); ?>
                </div>
                <div class="aboutus__text">
                    <?php the_field('history_descr1'); ?>
                </div>
            </div>
            <div class="col-lg-6">
                <img class="aboutus__img" src="<?php echo bloginfo('template_url'); ?>/assets/img/about_1.jpg" alt="мир детства">
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <img class="aboutus__img" src="<?php echo bloginfo('template_url'); ?>/assets/img/about_2.jpg" alt="мир детства">
            </div>
            <div class="col-lg-6">
                <div class="subtitle">
                    <?php the_field('history_subtitle2'); ?>
                </div>
                <div class="aboutus__text">
                    <?php the_field('history_descr2'); ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="subtitle">
                    <?php the_field('history_subtitle3'); ?>
                </div>
                <div class="aboutus__text">
                    <?php the_field('history_descr3'); ?>
                </div>
            </div>
            <div class="col-lg-6">
                <img class="aboutus__img" src="<?php echo bloginfo('template_url'); ?>/assets/img/about_3.jpg" alt="мир детства">
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
?>