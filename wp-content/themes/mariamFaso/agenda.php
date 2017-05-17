<?php
/*
Template Name: Page Agenda
*/
get_header();
?>
  <div class="grid3"></div>
    <div class="grid3"></div>
    <article class="agenda" id="target-1">
        <section class="agenda__actu">
            <h3 id="target-4">Notre <span>agenda</span></h3>
            <?php if ( have_posts() ): while( have_posts() ): the_post();?>
            <?php the_content(); ?>
            <?php endwhile; endif;?>
            <div class="agenda__actu__event">
                <h4 class="agenda__actu__event__title">Nos <span>événements</span></h4>
                <ul class="flex-container">
                    <li class="flex-item">1</li>
                    <li class="flex-item">2</li>
                    <li class="flex-item">3</li>
                    <li class="flex-item">4</li>
                    <!--<li class="flex-item">5</li>
                    <li class="flex-item">6</li>-->
                </ul>
            </div>
            <div class="agenda__actu__voyage">
                <h4 class="agenda__actu__voyage__title">Nos <span>voyages</span></h4>
                <ul class="flex-container">
                    <li class="flex-item">1</li>
                    <li class="flex-item">2</li>
                    <li class="flex-item">3</li>
                    <li class="flex-item">4</li>
                    <!--<li class="flex-item">5</li>
                    <li class="flex-item">6</li>-->
                </ul>
            </div>
            <div class="agenda__actu__press">
                <h4 class="agenda__actu__press__title">Nos <span>projets</span></h4>
                <ul class="flex-container">
                    <li class="flex-item">1</li>
                    <li class="flex-item">2</li>
                    <li class="flex-item">3</li>
                    <li class="flex-item">4</li>
                    <!--<li class="flex-item">5</li>
                    <li class="flex-item">6</li>-->
                </ul>
            </div>
        </section>
        <?php get_template_part('part/widget'); ?>
<?php get_footer();?>