<?php
/*
Template Name: Page Voyage
*/
get_header();
?>
    <div class="grid2"></div>
    <article class="travel" id="target-1">
        <?php 
            $trips = new WP_Query();
            $trips->query([
                'post_type' => 'trip',
                'tax_query' => [
                    [
                        'taxonomy' => 'places',
                        'field'    => 'slug',
                        'terms'    => dw_get_current_places(),
                    ],
                ],
            ]);
        ;?>

        <?php if ( $trips->have_posts() ): while( $trips->have_posts() ): $trips->the_post();?>
        
            <section class="travel__title"> 
                <?php $fields = get_fields(); ?>
                <h3 class="title"><?php the_title();?></h3>
                <div>
                    <p>Du <?= $fields['length']; ?></p>
                </div>
            </section>
            <section class="travel__map" id="target-2">
                <?php get_template_part('part/googleMap'); ?>
                
            <section class="travel__besoin" id="target-3">
                <?php get_template_part('part/whyForBut'); ?>

            <section class="travel__objectif" id="target-5">
                <?php get_template_part('part/objectif'); ?>

            <section class="travel__gallery" id="target-6">
            <h3>En images ...</h3>
            <p>TEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXT</p>
            <a href="./actu.html" class="btn">Nos projets</a>
            <div id="sequence" class="seq">
                <div class="seq-screen">
                    <ul class="seq-canvas">

                        <li class="seq-step1 seq-in" id="step1">
                            <div class="seq-content">
                                <img src="../images/ajax1.jpg" alt="">
                            </div>
                        </li>

                        <li class="seq-step2" id="step2">
                            <div class="seq-content">
                                <img src="../images/ajax2.jpg" alt="">
                            </div>
                        </li>

                        <li class="seq-step3" id="step3">
                            <div class="seq-content">
                                <img src="../images/ajax3.jpg" alt="">
                            </div>
                        </li>

                        <li class="seq-step4" id="step4">
                            <div class="seq-content">
                                <img src="../images/ajax1.jpg" alt="">
                            </div>
                        </li>

                        <li class="seq-step5" id="step5">
                            <div class="seq-content">
                                <img src="../images/ajax2.jpg" alt="">
                            </div>
                        </li>
                    </ul>
                </div>

                <ul rel="sequence" class="seq-pagination" role="navigation" aria-label="Pagination">
                    <li><a href="#step1" rel="step1" title="Go to step 1">Step 1</a></li>
                    <li><a href="#step2" rel="step2" title="Go to step 2">Step 2</a></li>
                    <li><a href="#step3" rel="step3" title="Go to step 3">Step 3</a></li>
                    <li><a href="#step4" rel="step4" title="Go to step 4">Step 4</a></li>
                    <li><a href="#step5" rel="step5" title="Go to step 5">Step 3</a></li>
                </ul>

            </div>
        </section>
        <?php endwhile; endif;?>

    </article>
<?php get_footer();?>