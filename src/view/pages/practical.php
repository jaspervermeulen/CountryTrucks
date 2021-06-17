<main class="practical">
    <section class="practical__section practical__faq">
        <h2 class="practical__title">Veelgestelde vragen krijgen hier hun antwoord!</h2>
        <ul class="faq__list">
            <?php
                foreach($faqs as $faq){
                    echo '<li class="faq__item">';
                    echo '<span class="faq__item--q">Q.</span>';
                    echo '<h3 class="faq__item--title">' . $faq['question'] . '</h3>';
                    echo '<span class="faq__item--a">A.</span>';
                    echo '<p class="faq__item--text">' . $faq['anwser'] . '</p>';
                    echo '</li>';
                }
            ?>  
        </ul>
    </section>
    <section class="practical__section practical__address">
        <h2 class="practical__title">Waar en wanneer?</h2>
        <a target="_blank" href="https://www.google.be/maps/place/Kon.+Elisabethsquare,+8310+Brugge/@51.1954996,3.2486226,17z/data=!3m1!4b1!4m5!3m4!1s0x47c350985ab75895:0xb09f1e1c2cacbc8a!8m2!3d51.195266!4d3.250762">
        <address class="practical__address--text">
            Koningin Elisabethsquare 1 - 16 <br>
            8310 Assebroek <br>
            België &#10138;<br>
            </a>
            <br>
            Het festival gaat door de hele dag op <span class="practical__address--text-special">28 augustus</span>.
        </address>
        <a target="_blank" href="https://www.google.be/maps/place/Kon.+Elisabethsquare,+8310+Brugge/@51.1954996,3.2486226,17z/data=!3m1!4b1!4m5!3m4!1s0x47c350985ab75895:0xb09f1e1c2cacbc8a!8m2!3d51.195266!4d3.250762">
        <img class="practical__map" src="./assets/img/address.png" alt="address">
        </a>
        <img class="practical__svg" src="./assets/img/mountains.svg" alt="mountain">
        
    </section>
</main>
<div><img class="home__img3" src="./assets/img/footerBackground.svg" alt="background"></div>