<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- <link rel="stylesheet" type="text/css" href="css/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/> -->
   
    <!-- <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="/js/slick.js"></script> -->
    <!-- <script src="/js/js.js"></script> -->

    <title><?php bloginfo('name'); wp_title();?></title>

    <?php wp_head(); ?>

</head>
<body>

    <header class="header">
        <div class="container">
            <div class="header_top">
                <div class="header_logo">
                    <div class="header_logo-name"><a href="<?php echo home_url(); ?>">ЭНИМАЛС</a></div>
                    <div class="header_logo-subname">Ветеринарная клиника</div>
                </div>
                <div class="header_wrap">
                    <div class="header-adress">
                        <img src="<?php bloginfo('template_url'); ?>/icons/adress.png" alt="adress">
                        <div>г Бобруйск <br>ул Энгельса д 73</div>
                    </div>
                    <div class="header-time">
                        <img src="<?php bloginfo('template_url'); ?>/icons/clock.png" alt="clock">
                        <div>08:00 - 20:00 <br>Без выходных</div>
                    </div>
                    <div class="header-phone">
                        <img src="<?php bloginfo('template_url'); ?>/icons/smartphone.png" alt="smartphone">
                        <a href="tel:+375293674790">+37529<b>3674790</b></a>
                    </div>
                </div>

                <div class="hamburger-menu" id="hamb">
                    <div class="hamburger-menu_title">Меню</div>
                    <div class="hamburger">
                        <div class="hamburger-top" id="top"></div>
                        <div class="hamburger-middle" id="middle"></div>
                        <div class="hamburger-bottom" id="bottom"></div>
                    </div>
                </div>

            </div>


            <?php wp_nav_menu(array('theme_location' => 'menu', 'depth' => 0, 'container' => 'div', 'container_class' => 'top-menu',)); ?>  
            
        </div>
    </header>