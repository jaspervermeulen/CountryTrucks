<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php echo $css;?>
    <title>Country Trucks - <?php echo $currentPage; ?></title>
</head>
<body class="body">
    <header class="header">
        <nav class="nav">
            <ul class="nav__list">
                <li class="nav__list--item"><a class="nav__list--link nav__list--link--title" href="index.php?page=home">
                        <h1 class="nav__list--item--title">Country Trucks</h1>
                    </a></li>
                <li class="nav__list--item"><a class="nav__list--link <?php if($currentPage == 'home') echo ' active';?>" href="index.php?page=home">Home</a></li>
                <li class="nav__list--item"><a class="nav__list--link <?php if($currentPage == 'about') echo ' active';?>" href="index.php?page=about">Over Ons</a></li>
                <li class="nav__list--item"><a class="nav__list--link <?php if($currentPage == 'trucks') echo ' active';?>" href="index.php?page=trucks">Trucks</a></li>
                <li class="nav__list--item"><a class="nav__list--link <?php if($currentPage == 'practical') echo ' active';?>" href="index.php?page=practical">Praktisch</a></li>
                <li class="nav__list--item"><a class="nav__list--link <?php if($currentPage == 'cart') echo ' active';?>" href="index.php?page=cart">
                        <img src="assets/img/shoppingCart.svg" alt="Shopping Card">
                        <?php echo $numItems;?>
                    </a></li>
            </ul>
        </nav>
    </header>
<?php echo $content; ?>
    <footer class="footer">
        <section class="footer__mail">
            <h2 class="footer__mail--title">Ontvang truckinfo & <br> meer</h2>
            <p class="footer__mail--text">Meld je aan om speciale aanbiedingen, updates en onze <br> weekelijkse
                nieuwsbrief te ontvangen. Je ontvangt geen <br> spam, enkel tof nieuws en meer.</p>
            <form class="footer__mail--form" method="POST" action="index.php?page=<?php echo $currentPage; ?>">
                <input type="hidden" name="action" value="insertEmail">
                <input class="footer__mail--form--input" type="email" name="email" id="email" placeholder="johny@email.com" required>
                <span class="error"></span>
                <button class="footer__mail--form--button" type="submit">Schrijf me in</button>
            </form>
        </section>
        <section class="footer__nav">
            <h2 class="footer__nav--title">Navigatie</h2>
            <ul class="footer__nav--list">
                <li class="footer__nav--list--item"><a class="footer__nav--list--link" href="index.php?page=home">Home</a></li>
                <li class="footer__nav--list--item"><a class="footer__nav--list--link" href="index.php?page=about">Over Ons</a></li>
                <li class="footer__nav--list--item"><a class="footer__nav--list--link" href="index.php?page=trucks">Trucks</a></li>
                <li class="footer__nav--list--item"><a class="footer__nav--list--link" href="index.php?page=practical">Praktisch</a></li>
            </ul>
        </section>
        <section class="footer__contact">
            <h2 class="footer__nav--contact">Contact</h2>
            <a class="footer__nav--mail" href="#">
                <p class="footer__nav--mail--p">countrytrucks@travel.com</p>
            </a> <br>
            <a class="footer__nav--tel" href="#">+239 328 391 22</a>
        </section>
    </footer>
    <?php echo $js; ?>
</body>

</html>
