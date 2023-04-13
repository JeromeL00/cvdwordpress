<?php get_header(); ?>

<div class="thepost">
    <div class="container">

        <div class="thepost_wrapper">
            <?php echo get_the_post_thumbnail(); ?>
                        <ul>
                            <i class="fa-solid fa-user"></i>
                            <p>
                                <small>
                                        Mark Jerome
                                </small>
                            </p>
                            <i class="fa-solid fa-calendar-days"></i>
                            <p>
                            <small>
                                        March 2, 2023
                            </small>
                            </p>
                            <i class="fa-solid fa-tags"></i>
                            <p>
                            <small>
                            Web Design | Wire Frame
                            </small>
                            </p>
    
                        </ul>
            <h3><?php the_title(); ?></h3>
            <p><?php the_content(); ?></p>
            </div>

           
            
        </div>
    </div>

</div>

<?php get_footer(); ?>