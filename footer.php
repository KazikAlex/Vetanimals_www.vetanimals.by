<footer class="footer">      
    <div class="container">
        <div class="footer_top">
            <div class="footer_top_logo">
                <div class="header_logo-name">ЭНИМАЛС</div>
                <div class="header_logo-subname">Ветеринарная клиника</div>
                <div class="footer_logo_descr">Все виды ветеринарных услуг в Бобруйске, вакцинация кошек
                    и собак, УЗИ-диагностика, лабораторная диагностика, рентген, ЭХО-КГ, ЭКГ
                </div>
            </div>

            <div class="footer_top_services">
                <div class="footer_top_services_title">Наши услуги</div>
                <div class="footer_top_services_wrap">
                    
                    <?php wp_nav_menu(array('theme_location' => 'footer_menu', 'container' => false)); ?>  
                </div>

            </div>

            <div class="footer_top_contacts">
                <div class="footer_top_contacts_item">
                    <div><img src="<?php bloginfo('template_url')?>/icons/smartphone.png" alt="smartphone"></div>
                    <!-- <div>+37529<b>3674790</b><br>+37522<b>5721689</b><br>+37522<b>5731212</b></div> -->
                    <div class="footer_top_contacts_item_wrap">
                        <div><a href="tel:+375293674790">+37529<b>3674790</b></a></div>
                        <div><a href="tel:+375225721689">+37522<b>5721689</b></a></div>
                        <div><a href="tel:+375225731212">+37522<b>5731212</b></a></div>
                    </div>
                    
                </div>
                <div class="footer_top_contacts_item">
                    <div><img src="<?php bloginfo('template_url')?>/icons/clock.png" alt="clock"></div>
                    <div><b>08:00 - 20:00</b><br>Без выходных</div>
                </div>
            </div>
        </div>
    </div>   
    
</footer>

<div class="footer_bottom">
    <div class="container">
        <div class="footer_bottom_copyright">ЧТСУП “Энималс” © 2020. Все права защищены.</div>
        <div class="footer_bottom_developer">Создание и продвижение сайта <img src="<?php bloginfo('template_url')?>/icons/logo_RealWeb.svg" alt="RealWeb"></div>
    </div>
</div>

    
<?php wp_footer(); ?>
<!-- <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script> -->
<script src="<?php bloginfo('template_url')?>/js/jquery-1.12.0.min.js"></script>
<script src="<?php bloginfo('template_url')?>/js/jquery-migrate-1.4.1.min.js"></script>
<script src="<?php bloginfo('template_url')?>/js/slick.js"></script>
<script src="<?php bloginfo('template_url')?>/js/js.js"></script>
</body>
</html>