<?php
/*
  Template Name: Services
*/
?>



<?php get_header(); ?>


    
<section class="webdev">
        <div class="container">

            <div class="webdev__wrapper">

                <div class="webdev__content">
                    <h1><?php echo get_field('banner_title') ?></h1>
                    <p>
                    <?php echo get_field('banner_content') ?>
                    </p>

                    <div class="price">
                        <p>Price starts at</p>
                            <h3>
                                <span>$200-$300</span>
                            </h3>
                            <p>
                            <small>
                            <i> 
                                Price may vary depending on
                                <br>
                                the design and development
                            </i>
                            </small>
                            </p>
                        
                    </div>
                  
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
    <section class="graphic">
        <div class="container">

            <div class="graphic__wrapper">
                <?php                    
                    $img = get_field('banner_img2');
                    if ( !empty($img) ): ?>


                    <img src="<?php echo esc_url($img['url']) ?>" alt="<?php echo esc_attr($img['alt'])?>">


                <?php endif; ?>

                <div class="graphic__content">
                    <h1><?php echo get_field('banner_title2') ?></h1>
                    <p>
                    <?php echo get_field('banner_content2') ?>
                    </p>
                    <div class="price">
                        <p>Price starts at</p>
                            <h3>
                                <span>$150-$350</span>
                            </h3>
                            <p>
                            <small>
                            <i> 
                                Price may vary depending on design concept
                            </i>
                            </small>
                            </p>
                        
                    </div>
                  
                </div>
            </div>
            <div class="arrowdown">
                <i class="fa-solid fa-chevron-down"></i>
            </div>

                </div>
            </div>
        </div>
    </section>
    <section class="socialmedia">
        <div class="container">

            <div class="socialmedia__wrapper">

                <div class="socialmedia__content">
                    <h1><?php echo get_field('banner_title3'); ?> </h1>
                    <p>
                        <?php echo get_field('banner_content3') ?>
                    </p>
                    <div class="price">
                        <p>Price starts at</p>
                            <h3>
                                <span>$150-$350</span>
                            </h3>
                            <p>
                            <small>
                            <i> 
                                Price may vary depending on design concept
                            </i>
                            </small>
                            </p>
                        
                    </div>
                  
                </div>
                <?php                    
                    $img = get_field('banner_img3');
                    if ( !empty($img) ): ?>


                    <img src="<?php echo esc_url($img['url']) ?>" alt="<?php echo esc_attr($img['alt'])?>">


                <?php endif; ?>
                </div>
                <div class="arrowdown">
                    <i class="fa-solid fa-chevron-down"></i>
                </div>
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