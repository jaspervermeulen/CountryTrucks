<main class="home">
    <section class="home__intro">
        <h2 class="intro__title">Ontdek bestemmingen waar <br> je nog nooit over gehoord hebt</h2>
        <p class="intro__text">
            Op ons fantastisch truck festival kun je kennis maken met verschillende vernieuwende,<br>
            onbekende landen. Ter plaatse krijg je alle informatie, weetjes en zoveel meer. <br>
            Kom ons zeker eens een bezoekje brengen op 28 augustus.
        </p>
        <a class="intro__button" href="index.php?page=trucks">Ontdek onze trucks &#10138;</a>
        <div class="intro__img">
            <img class="intro__img--1" src="./assets/img/intro/grassShading.svg" alt="shaduw">
            <img class="intro__img--3" src="./assets/img/intro/yellowTruck.svg" alt="truck">
            <img class="intro__img--2" src="./assets/img/intro/grassFront.svg" alt="gras">
            <img class="intro__img--4 animated rotateIn" src="./assets/img/intro/fireworks.svg" alt="vuurwerk">
        </div>
    </section>
    <article class="home__reasons">
        <h2 class="reasons__title">Genoeg redenen om <br> nieuwe landen te ontdekken!</h2>
        <ul class="reasons__list">
            <li class="reasons__list--item reasons__list--special">&bull; Avontuurlijke ervaringen opdoen</li>
            <li class="reasons__list--item">&bull; Vrienden voor het leven maken</li>
            <li class="reasons__list--item">&bull; Diverse culturen ontdekken</li>
            <li class="reasons__list--item">&bull; Alle plekjes van de wereld gezien hebben</li>
            <li class="reasons__list--item">&bull; Nieuwe en geheime plekken ontdekken</li>
            <li class="reasons__list--item">&bull; Op de absurdste plaatsen geweest zijn</li>
            <li class="reasons__list--item">&bull; Mooie instagram foto's hebben</li>
        </ul>
        <div class="reasons__img">
            <img class="reasons__img--plane" src="./assets/img/reasonsPlane.svg" alt="plane">
        </div>
    </article>
    <article class="home__why">
        <h2 class="why__title">Waarom bij ons boeken?</h2>
        <div class="why__wrapper">
            <section class="why__section">
                <h3 class="why__section--title">Kies wanneer <br> je vertrekt</h3>
                <img class="why__section--img" src="./assets/img/why/calender.svg" alt="kalender">
            </section>
            <section class="why__section">
                <h3 class="why__section--title">Uniek aanbod <br> van bestemmingen</h3>
                <img class="why__section--img" src="./assets/img/why/globe.svg" alt="wereldbol">
            </section>
            <section class="why__section">
                <h3 class="why__section--title">Eenvoudig <br> te boeken</h3>
                <img class="why__section--img" src="./assets/img/why/documenten.svg" alt="documenten">
            </section>
            <section class="why__section">
                <h3 class="why__section--title">Kwaliteit staat <br> centraal</h3>
                <img class="why__section--img" src="./assets/img/why/plane.svg" alt="vliegtuig">
            </section>
            <section class="why__section">
                <h3 class="why__section--title">Zorgloos genieten <br> op reis</h3>
                <img class="why__section--img" src="./assets/img/why/glass.svg" alt="glas">
            </section>
        </div>
        <a class="why__button" href="index.php?page=about">
            <p class="why__button--text">Leer ons verder kennen &#10138;</p>
        </a>
    </article>
    <article class="home__review">
        <img class="review__img1" src="./assets/img/grassBackground.svg" alt="gras">
        <img class="review__truck" src="./assets/img/review/reviewTruck.svg" alt="truck">
        <h2 class="hidden">Reviews</h2>
        <img class="review__img" src="./assets/img/review/profilePicture.svg" alt="profiel">
        <p class="review__review">
            “We houden van reizen met Country Trucks, we ontdekken <br>
            telkens fantastische nieuwe landen. We reizden naar plaatsen <br>
            waar we anders nooit zouden gekomen zijn. Geweldig!“
        </p>
        <p class="review__name">Valerie F.</p>
        <img class="review__stroke" src="./assets/img/review/strokeTruckBackground.svg" alt="streep">
    </article>
    <article class="home__destinations">
        <h2 class="destinations__title">Onze bestemmingen</h2>
        <div class="destinations__wrapper">
            <?php
                foreach($destinations as $destination){
                    echo '<section class="destinations__section">';
                    echo '<h3 class="hidden">' . $destination['name'] . '</h3>';
                    echo '<a class="destinations__section--link" href="index.php?page=detail&amp;id=' . $destination['id'] . '"><img class="destinations__section--img" src="' . $destination['img'] . '" alt="' . $destination['name'] . '"></a>';
                    echo '</section>';
                }
            ?>
        </div>
    </article>
</main>
<div><img class="home__img3" src="./assets/img/footerBackground.svg" alt="background"></div>