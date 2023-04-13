<?php
/*
  Template Name: About
*/
?>



<?php get_header(); ?>


    
    <section class="aboutme">
        <div class="container">
    
            <div class="aboutme__wrapper">
    
                <div class="aboutme__content">
                    <p>
                            Things you need to know
                    </p>
                    <h1> <?php echo get_field('banner_title') ?> </h1>
                    <p>
                    <?php the_excerpt() ?>
                    </p>
                    
                        <ul>
                            <li> <a href=""><i class="fa-brands fa-facebook"></i></a></li>
                            <li> <a href=""><i class="fa-brands fa-twitter"></i></a></li>
                            <li> <a href=""><i class="fa-brands fa-instagram"></i></a></li>
                            <li> <a href=""><i class="fa-solid fa-envelope"></i></a></li>
                        </ul>
            
                </div>


    
                <?php                    
                    $img = get_field('banner_img');
                    if ( !empty($img) ): ?>


                    <img src="<?php echo esc_url($img['url']) ?>" alt="<?php echo esc_attr($img['alt'])?>">


                <?php endif; ?>
    
            </div>
            <div class="arrowdown">
                <i class="fa-solid fa-chevron-down"></i>
            </div>
        </div>
    </section>

    <section class="projects">
        <div class="container">
            <h2>My Recent Projects</h2>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem, harum!
            </p>
            <div class="projects__wrapper">
                <?php if(have_rows('cards_repeater')) : while(the_repeater_field('cards_repeater')) : ?>
                <div class="projects__cards">
                <?php
                    $img = get_sub_field('card_img');
                        if ( !empty($img) ) :?>


                        <img src="<?php echo esc_url($img['url']) ?>" alt="<?php  echo esc_attr($img['alt']) ?>">


                    <?php endif; ?>

                    <h3><?php echo get_sub_field('card_title') ?></h3>
                    <p>
                        <?php echo get_sub_field('card_content') ?>
                    </p>

                </div>
                 <?php
                    endwhile;
                        else : 
                        echo "no content";
                    endif;
                    wp_reset_postdata();
                    ?>

                


            </div>

        </div>
    </section>

    <section class="contact">
        <h5>Feel free to talk to about your Projects</h5>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, enim.
        </p>
        <a href="#">Contact Us</a>
</section>



<?php get_footer(); ?>