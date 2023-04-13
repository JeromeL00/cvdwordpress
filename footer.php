<?php wp_footer() ?>

<footer class="footer">
    <div class="container">
        <div class="footer__wrapper">
            <div class="sociallinks">
                <ul>
                    <li><i class="fa-brands fa-facebook"></i></li>
                    <li><i class="fa-brands fa-twitter"></i></li>
                    <li><i class="fa-brands fa-instagram"></i></li>
                    <li><i class="fa-brands fa-youtube"></i></li>
                    <li><i class="fa-solid fa-envelope"></i></li>
                </ul>
                <p>
                    <small>
                        Baloc Road, Brgy San Ignacio San Pablo City, Laguna 4000
                    </small>
                </p>
            </div>

            <p>
                <small>
                    &copy;CREATIVEVISUALDESIGNS
                </small>
            </p>
        </div>
    </div>
</footer>
<script>
    const nav = document.querySelector("nav");
    const toggleMenu = document.querySelector(".toggle__menu");

    toggleMenu.addEventListener("click", ()=>{
        toggleMenu.classList.toggle("open");
        nav.classList.toggle("open");
    });
</script>
</body>
</html>