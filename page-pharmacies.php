<?php 

/*
 * Template Name: Ветаптеки
*/

?>

<?php get_header(); ?>

<div class="container">
    <div class="presentation-title"><?php the_title() ?></div>
</div>

<div class="container">
    <div class="contacts_descr">
        Бывают случаи, когда оказание помощи домашним животным возможно только хирургическим путем. Ведь организм любого живого 
        существа- это слаженный механизм, незначительные изменения в котором могут дать сбой всего организма. 
        И тогда на помощь терапевту приходит хирург, от которого и будет зависеть здоровье и дальнейшая жизнь питомца.
        </div>

    <div class="contacts_subdescr">
        В клинике <span>“Энималс”</span> операционный блок оснащен современным оборудованием. Анестезия находится на высоком уровне, 
        используются только высококачественные препараты, которые не только обездвиживают, но и животное при этом не чувствует никакой боли. 
        Хирурги выполняют широкий спектр операций, от самых простых, например, стерилизация и кастрация, так и сложные хирургические вмешательства, 
        лечение травм и переломов, микрохирургические операции.
    </div>

    <div class="pharmacies_wrapper">
        <div>
            <div class="contacts-top_adress"><div><img src="<?php bloginfo('template_url')?>/icons/adress.png" alt="adress"></div>г Бобруйск <br>ул Социалистическая д 141</div>
            <div class="contacts-top_adress"><div><img src="<?php bloginfo('template_url')?>/icons/smartphone.png" alt="smartphone"></div>80225434008</div>
        </div>
        <div>
            <div class="contacts-top_adress"><div><img src="<?php bloginfo('template_url')?>/icons/adress.png" alt="adress"></div>г Бобруйск <br>ул 50 лет ВЛКСМ д 6</div>
            <div class="contacts-top_adress"><div><img src="<?php bloginfo('template_url')?>/icons/smartphone.png" alt="smartphone"></div>80225788875</div>
        </div>
        <div>
            <div class="contacts-top_adress"><div><img src="<?php bloginfo('template_url')?>/icons/adress.png" alt="adress"></div>г Бобруйск <br>ул Энгельса д 73</div>
            <div class="contacts-top_adress"><div><img src="<?php bloginfo('template_url')?>/icons/smartphone.png" alt="smartphone"></div>80225731212</div>
        </div>
    </div>
</div>


<div class="contacts-map"><img src="<?php bloginfo('template_url')?>/img/map contact.jpg" alt="map"></div>

<section class="registration">
    <div class="container">
        <form class="form">
            <div class="form_reg">
                <div class="form_title">Запись на прием</div>
                <label for="name">Имя*</label>
                <input id="name" type="text">
                <label for="tel">Телефон*</label>
                <input id="tel" type="tel">
                <label for="mail">E-mail*</label>
                <input id="mail" type="email">
                <div type="submit" id="subm">Записаться</div>
            </div>
            <div class="form_message">
                <div class="form_message_wrapper">
                    <label for="mess">Сообщение</label>
                    <textarea id="mess"></textarea>
                </div>
            </div>
        </form>
    </div>
</section>

<?php get_footer();?>
