<main class="truck">
    <article class="truck__info">
        <h2 class="truckinfo__title">Onze trucks</h2>
        <p class="truckinfo__text">
            Op onderstaande kaart vind je een overzicht van waar je onze trucks zult terugvinden.<br> 
            Elke truck ligt op wandelafstand van de ander. Tussen alle trucks zul je verschillende <br> standjes weervinden, 
            deze zullen variëren van foodtrucks tot animatietrucks voor de jongsten. <br>
        </p>
    </article>
   <section class="promo">
        <h2 class="promo__title">Promotie &#33;</h2>
        <p class="promo__text">Dit jaar kosten onze workshops geen <br> € 14,99 maar ...</p>
        <p class="promo__price">€ 8,99</p>
    </section>
    <section class="truck__map">
        <h2 class="hidden">Plattegrond trucks</h2>
        <article class="map__leftside">
            <h3 class="hidden">Info</h3>
        </article>
        <article class="map__rightside">
            <h3 class="hidden">Andere trucks</h3>
            <img class="map__img" src="./assets/img/pins/map.png" alt="map">
            <ul class="rightside__list">
                <?php
                    foreach($destinations as $destination){
                        echo '<li class="rightside__list--item">';
                        echo $destination['imgtitle'];
                        echo '<div class="rightside__list--wrapper ' . $destination['mapclass'] . ' hidden">';
                        echo '<h3 class="rightside__title"><span class="hidden">' . $destination['name'] . '</span><img class="" src="' . $destination['img'] . '" alt="destination"></h3>';
                        echo '<p class="rightside__text">' . $destination['bioshort'] . '</p>';
                        echo '<a class="rightside__link" href="index.php?page=detail&amp;id=' . $destination['id'] . '">Lees meer over ' . $destination['name'] . ' &#10138;</a>';
                        echo '</div>';
                        echo '</li>';
                    }
                ?>
            </ul>
        </article>
    </section>
</main>
<div class=" margintop__truck">
<div><img class="home__img3" src="./assets/img/footerBackground.svg" alt="background"></div>