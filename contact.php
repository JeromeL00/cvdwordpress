<?php
/*
  Template Name: Contact
*/
?>



<?php get_header(); ?>



<section class="contactbanner">
    <div class="container">
        <h1>Contact</h1>
        <div class="contactbanner_wrapper">
            <div class="contactbanner_type">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, ut maxime fuga consequuntur modi dicta a?
                </p>
                <div class="contact_icons">
                    <ul>
                        <li>
                            <i class="fa-solid fa-phone"></i>
                            <p>+63 945 572 0537</p>
                        </li>
                        <li>
                            <i class="fa-solid fa-envelope"></i>
                            <p>jeromelaccay183@gmail.com</p>
                        </li>
                        <li>
                            <i class="fa-solid fa-map-pin"></i>
                            <p>Baloc Road, Brgy San Ignacio San Pablo City Laguna 4000</p>
                        </li>
                        
                    </ul>
                    
                </div>
                <div class="social__links">
                    <ul>
                        <li>
                            <i class="fa-brands fa-facebook"></i>
                        </li>
                        <li>
                            <i class="fa-brands fa-twitter"></i>
                        </li>
                        <li>
                            <i class="fa-brands fa-instagram"></i>
                        </li>
                        <li>
                            <i class="fa-brands fa-youtube"></i>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="text_box">
               <form action="">
                <label for="name"></label>
                    <input type="text" id="name" name="name" placeholder="NAME">

                    <label for="email"></label>
                    <input type="text" id="email" name="email" placeholder="EMAIL">

                    <label for="message"></label>
                    <textarea name="message" id="message" placeholder="MESSAGE"></textarea>

                    <label for="button"></label>
                    <a href="#">SEND MESSAGE</a>
               </form>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>