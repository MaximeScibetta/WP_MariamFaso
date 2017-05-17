<?php
/*
Template Name: Page Projets
*/
get_header();
?>
  <div class="grid3"></div>
    <article class="agenda" id="target-1">
        <section class="agenda__actu">
            <?php if ( have_posts() ): while( have_posts() ): the_post();?>
            <h3 id="target-4"> <?php the_title(); ?> </h3>
            <?php the_content(); ?> 
                <div class="agenda__actu__press">
                    <h4 class="agenda__actu__press__title"> Nos derniers projets </h4>
                    <ul class="flex-container">
                        <li class="flex-item">1</li>
                        <li class="flex-item">2</li>
                        <li class="flex-item">3</li>
                        <li class="flex-item">4</li>
                    </ul>
                </div>
        </section>
            <?php endwhile; endif;?>
    </article>
<?php get_footer();?>